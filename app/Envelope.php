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

    public function getBalance($at = null) {
        if (is_null($at)) {
            $at = Carbon::create();
        }

        $income = floatval($this->incomes()->where('date', '<', $at)->sum('amount'));
        $outcome = floatval($this->outcomes()->where('date', '<', $at)->sum('amount'));

        return $income - $outcome;
    }

    public function getStatus($at = null) {
        if (is_null($at)) {
            $at = Carbon::create();
        }

        $income = floatval($this->incomes()->where('date', '<', $at)->sum('amount')) ?: 0.01;
        $outcome = floatval($this->outcomes()->where('date', '<', $at)->sum('amount'));

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
