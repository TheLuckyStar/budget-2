<?php

namespace App;

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
        return Html::linkAction('AccountController@getSummary', $this, $this, ['class' => 'link-to-page']);
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
        return $this->hasManyThrough('App\Outcome', 'App\Envelope')
            ->orderBy('outcomes.date')
            ->orderBy('envelopes.name');
    }

    public function incomes() {
        return $this->hasManyThrough('App\Income', 'App\Envelope')
            ->orderBy('incomes.date')
            ->orderBy('envelopes.name');
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

    public function getRevenueAttribute($at = null) {
        $revenue = $this->revenues();

        if ($at instanceof Carbon) {
            $revenue->where('date', '<=', $at);
        }

        return floatval($revenue->sum('amount'));
    }

    public function getAllocatedRevenueAttribute($at = null) {
        $allocatedRevenue = $this->incomes();

        if ($at instanceof Carbon) {
            $allocatedRevenue->where('date', '<=', $at);
        }

        return floatval($allocatedRevenue->sum('amount'));
    }

    public function getUnallocatedRevenueAttribute($at = null) {
        $revenue = $this->getRevenueAttribute($at);
        $allocatedRevenue = $this->getAllocatedRevenueAttribute($at);

        $unallocatedRevenue = max(0, $revenue - $allocatedRevenue);

        return floatval($unallocatedRevenue);
    }

    public function getOutcomeAttribute($at = null) {
        $outcome = $this->outcomes();

        if ($at instanceof Carbon) {
            $outcome->where('date', '<=', $at);
        }

        return floatval($outcome->sum('amount'));
    }

    public function getIntendedOutcomeAttribute($at = null) {
        $intendedOutcome = $this->intendedOutcomes();

        if ($at instanceof Carbon) {
            $intendedOutcome->where('date', '<=', $at);
        }

        return floatval($intendedOutcome->sum('amount'));
    }

    public function getEffectiveOutcomeAttribute($at = null) {
        $effectiveOutcome = $this->effectiveOutcomes();

        if ($at instanceof Carbon) {
            $effectiveOutcome->where('date', '<=', $at);
        }

        return floatval($effectiveOutcome->sum('amount'));
    }

    public function getBalanceAttribute($at = null) {
        $revenue = $this->getRevenueAttribute($at);
        $outcome = $this->getOutcomeAttribute($at);

        $balance = $revenue - $outcome;

        return floatval($balance);
    }

    public function getAllocatedBalanceAttribute($at = null) {
        $revenue = $this->getAllocatedRevenueAttribute($at);
        $outcome = $this->getOutcomeAttribute($at);

        $balance = $revenue - $outcome;

        return floatval($balance);
    }

    public function getUnallocatedBalanceAttribute($at = null) {
        $revenue = $this->getUnallocatedRevenueAttribute($at);
        $outcome = $this->getOutcomeAttribute($at);

        $balance = max(0, $revenue - $outcome);

        return floatval($balance);
    }

    public function getStatusAttribute($at = null) {
        $revenue = $this->getRevenueAttribute($at);
        $outcome = $this->getOutcomeAttribute($at);

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
