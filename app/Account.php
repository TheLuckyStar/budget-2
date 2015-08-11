<?php

namespace App;

use App\Collections\OperationCollection;
use App\Services\Eloquent\HasEvents;
use Carbon\Carbon;
use Html;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Account extends Model
{
    use SoftDeletes;
    use HasEvents;

    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = ['name'];

    /**
     * The attributes that should be mutated to dates.
     * @var array
     */
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    /**
     * Array of field name to watch for changed on updated event
     * @var [type]
     */
    protected $watchedFieldInEvent = [
        'name'
    ];

    /**
     * Convert the model to its string representation.
     * @return string
     */
    public function __toString()
    {
        return $this->name;
    }

    public function link() {
        return Html::linkAction('AccountController@getIndex', $this, $this, ['class' => 'link-to-page']);
    }

    public function relatedEvents()
    {
        return Event::where(function ($query) {
            $query->where('entity_type', 'App\Account')->where('entity_id', $this->id);
        })->orWhere(function ($query) {
            $query->where('entity_type', 'App\Envelope')->whereIn('entity_id', function ($query) {
                $query->select('id')->from('envelopes')->where('account_id', $this->id);
            });
        })->orderBy('created_at', 'desc');
    }

    public function users() {
        return $this->belongsToMany('App\User')
            ->withPivot('owner')
            ->withTimestamps();
    }

    public function owner() {
        return $this->users()
            ->where('owner', 1);
    }

    public function guests() {
        return $this->users()
            ->where('owner', 0)
            ->orderBy('name');
    }

    public function envelopes() {
        return $this->hasMany('App\Envelope')
            ->withTrashed()
            ->orderBy('name');
    }

    public function trashedEnvelopes() {
        return $this->hasMany('App\Envelope')
            ->onlyTrashed()
            ->orderBy('name');
    }

    public function nontrashedEnvelopes() {
        return $this->hasMany('App\Envelope')
            ->orderBy('name');
    }

    public function outcomes() {
        return Outcome::whereIn('envelope_id', function ($query) {
            $query->select('id')->from('envelopes')->where('account_id', $this->id);
        })->orderBy('outcomes.date');
    }

    public function incomes() {
        return $this->hasManyThrough('App\Income', 'App\Envelope')
            ->orderBy('incomes.date');
    }

    public function intendedOutcomes() {
        return $this->outcomes()->where('effective', 0);
    }

    public function effectiveOutcomes() {
        return $this->outcomes()->where('effective', 1);
    }

    public function revenues() {
        return $this->hasMany('App\Revenue')
            ->orderBy('date');
    }

    public function operationsInPeriod($from, $to) {
        $operations = new OperationCollection();

        $revenues = $this->revenues()->whereBetween('date', [$from, $to])->get();
        foreach ($revenues as $revenue) {
            $operations->push($revenue);
        }

        $outcomes = $this->outcomes()->whereBetween('date', [$from, $to])->get();
        foreach ($outcomes as $outcome) {
            $operations->push($outcome);
        }

        return $operations->sortBy('date');
    }

    public function getRevenueAttribute($from = null, $to = null) {
        $revenue = $this->revenues();

        if ($from instanceof Carbon) {
            $revenue->where('date', '>=', $from);
        }

        if ($to instanceof Carbon) {
            $revenue->where(function ($query) use($to) {
                $query->where('date', '<=', $to);
                $query->orWhere('date', null);
            });
        }

        return floatval($revenue->sum('amount'));
    }

    public function getAllocatedRevenueAttribute($from = null, $to = null) {
        $allocatedRevenue = $this->incomes();

        if ($from instanceof Carbon) {
            $allocatedRevenue->where('date', '>=', $from);
        }

        if ($to instanceof Carbon) {
            $allocatedRevenue->where('date', '<=', $to);
        }

        return floatval($allocatedRevenue->sum('amount'));
    }

    public function getUnallocatedRevenueAttribute($from = null, $to = null) {
        $revenue = $this->getRevenueAttribute($from, $to);
        $allocatedRevenue = $this->getAllocatedRevenueAttribute($from, $to);

        $unallocatedRevenue = max(0, $revenue - $allocatedRevenue);

        return floatval($unallocatedRevenue);
    }

    public function getOutcomeAttribute($from = null, $to = null) {
        $outcome = $this->outcomes();

        if ($from instanceof Carbon) {
            $outcome->where('date', '>=', $from);
        }

        if ($to instanceof Carbon) {
            $outcome->where('date', '<=', $to);
        }

        return floatval($outcome->sum('amount'));
    }

    public function getIntendedOutcomeAttribute($from = null, $to = null) {
        $intendedOutcome = $this->intendedOutcomes();

        if ($from instanceof Carbon) {
            $intendedOutcome->where('date', '>=', $from);
        }

        if ($to instanceof Carbon) {
            $intendedOutcome->where('date', '<=', $to);
        }

        return floatval($intendedOutcome->sum('amount'));
    }

    public function getEffectiveOutcomeAttribute($from = null, $to = null) {
        $effectiveOutcome = $this->effectiveOutcomes();

        if ($from instanceof Carbon) {
            $effectiveOutcome->where('date', '>=', $from);
        }

        if ($to instanceof Carbon) {
            $effectiveOutcome->where('date', '<=', $to);
        }

        return floatval($effectiveOutcome->sum('amount'));
    }

    public function getBalanceAttribute($from = null, $to = null) {
        $revenue = $this->getRevenueAttribute($from, $to);
        $outcome = $this->getOutcomeAttribute($from, $to);

        $balance = $revenue - $outcome;

        return floatval($balance);
    }

    public function getAllocatedBalanceAttribute($from = null, $to = null) {
        $revenue = $this->getAllocatedRevenueAttribute($from, $to);
        $outcome = $this->getOutcomeAttribute($from, $to);

        $balance = $revenue - $outcome;

        return floatval($balance);
    }

    public function getUnallocatedBalanceAttribute($from = null, $to = null) {
        $revenue = $this->getUnallocatedRevenueAttribute($from, $to);
        $outcome = $this->getOutcomeAttribute($from, $to);

        $balance = max(0, $revenue - $outcome);

        return floatval($balance);
    }

    public function getStatusAttribute($from = null, $to = null) {
        $revenue = $this->getRevenueAttribute($from, $to);
        $outcome = $this->getOutcomeAttribute($from, $to);

        if ($revenue == 0) {
            return $outcome ? 'danger' : 'warning';
        }

        $ratio = $outcome / $revenue * 100;

        if ($ratio >= 100) {
            return 'danger';
        }

        if ($ratio > 75) {
            return 'warning';
        }

        return 'success';
    }
}
