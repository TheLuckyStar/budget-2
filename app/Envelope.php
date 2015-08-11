<?php

namespace App;

use App\Collections\OperationCollection;
use App\Services\Eloquent\HasEvents;
use Carbon\Carbon;
use Html;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Envelope extends Model
{
    use SoftDeletes;
    use HasEvents;

    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = ['name', 'icon'];

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
        'name',
        'icon',
    ];

    /**
     * Convert the model to its string representation.
     * @return string
     */
    public function __toString()
    {
        if ($this->icon) {
            return '<i class="fa fa-fw '.$this->icon.'" title="'.$this->name.'"></i> '.$this->name;
        }

        return $this->name;
    }

    public function link() {
        return Html::linkAction(
            'EnvelopeController@getView',
            $this,
            $this,
            ['class' => 'link-to-page']
        );
    }

    public function relatedEvents()
    {
        return Event::where('entity_type', 'App\Envelope')
            ->where('entity_id', $this->id)
            ->orderBy('id', 'desc');
    }

    public function account() {
        return $this->belongsTo('App\Account')
            ->withTrashed();
    }

    public function incomes() {
        return $this->hasMany('App\Income')
            ->orderBy('date');
    }

    public function outcomes() {
        return $this->hasMany('App\Outcome')
            ->orderBy('date');
    }

    public function operationsInPeriod($start, $end) {
        $operations = new OperationCollection();

        $incomes = $this->incomes()->whereBetween('date', [$start, $end])->get();
        foreach ($incomes as $income) {
            $operations->push($income);
        }

        $outcomes = $this->outcomes()->whereBetween('date', [$start, $end])->get();
        foreach ($outcomes as $outcome) {
            $operations->push($outcome);
        }

        return $operations;
    }

    public function intendedOutcomes() {
        return $this->outcomes()->where('effective', 0);
    }

    public function effectiveOutcomes() {
        return $this->outcomes()->where('effective', 1);
    }

    public function getIncomeAttribute($from = null, $to = null) {
        $income = $this->incomes();

        if ($from instanceof Carbon) {
            $income->where('date', '>=', $from);
        }

        if ($to instanceof Carbon) {
            $income->where('date', '<=', $to);
        }

        return floatval($income->sum('amount'));
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
        $income = $this->getIncomeAttribute($from, $to);
        $outcome = $this->getOutcomeAttribute($from, $to);

        $balance = $income - $outcome;

        return floatval($balance);
    }

    public function getStatusAttribute($from = null, $to = null) {
        $income = $this->getIncomeAttribute($from, $to);
        $outcome = $this->getOutcomeAttribute($from, $to);

        if ($income == 0) {
            return $outcome ? 'danger' : 'warning';
        }

        $ratio = $outcome / $income * 100;

        if ($ratio >= 100) {
            return 'danger';
        }

        if ($ratio > 75) {
            return 'warning';
        }

        return 'success';
    }
}
