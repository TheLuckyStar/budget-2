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
            ->orderBy('created_at', 'desc');
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

    public function getIncomeAttribute($at = null) {
        $income = $this->incomes();

        if ($at instanceof Carbon) {
            $income->where('date', '<=', $at);
        }

        return floatval($income->sum('amount'));
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
        $income = $this->getIncomeAttribute($at);
        $outcome = $this->getOutcomeAttribute($at);

        $balance = $income - $outcome;

        return floatval($balance);
    }

    public function getStatusAttribute($at = null) {
        $income = $this->getIncomeAttribute($at);
        $outcome = $this->getOutcomeAttribute($at);

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
