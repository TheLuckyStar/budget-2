<?php

namespace App;

use App\Services\Eloquent\HasEvents;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Account extends Model
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

    public function owner() {
        return $this->belongsToMany('App\User')
            ->withPivot('owner')
            ->withTimestamps()
            ->where('owner', 1);
    }

    public function guests() {
        return $this->belongsToMany('App\User')
            ->withPivot('owner')
            ->withTimestamps()
            ->where('owner', 0)
            ->orderBy('name');
    }

    public function envelopes() {
        return $this->hasMany('App\Envelope')
            ->orderBy('name');
    }

    public function outcomes() {
        return $this->hasManyThrough('App\Outcome', 'App\Envelope')
            ->orderBy('outcomes.date')
            ->orderBy('envelopes.name');
    }

    public function revenues() {
        return $this->hasMany('App\Revenue')
            ->orderBy('date');
    }


    public function getBalance($at = null) {
        if (is_null($at)) {
            $at = Carbon::create();
        }

        $revenue = floatval($this->revenues()->where('date', '<', $at)->sum('amount'));
        $outcome = floatval($this->outcomes()->where('date', '<', $at)->sum('amount'));

        return $revenue - $outcome;
    }

    public function getStatus($at = null) {
        if (is_null($at)) {
            $at = Carbon::create();
        }

        $revenue = floatval($this->revenues()->where('date', '<', $at)->sum('amount')) ?: 0.01;
        $outcome = floatval($this->outcomes()->where('date', '<', $at)->sum('amount'));

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
