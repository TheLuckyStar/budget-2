<?php

namespace App;

use App\Services\Eloquent\HasEvents;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Envelope extends Model
{
    use HasEvents, SoftDeletes;

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
        return '<i class="fa fa-fw fa-'.$this->icon.'" title="'.$this->name.'"></i> '.$this->name;
    }

    public function account() {
        return $this->belongsTo('App\Account');
    }

    public function incomes() {
        return $this->hasMany('App\Income')
            ->orderBy('date');
    }

    public function outcomes() {
        return $this->hasMany('App\Outcome')
            ->orderBy('date');
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
