<?php

namespace App;

use App\Services\Eloquent\HasEvents;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Outcome extends Model
{
    use HasEvents, SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     * @var array
     */
    protected $dates = ['date', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * The attributes that should be casted to native types.
     * @var array
     */
    protected $casts = [
        'amount' => 'float',
        'effective' => 'integer',
    ];

    /**
     * Array of field name to watch for changed on updated event
     * @var [type]
     */
    protected $watchedFieldInEvent = [
        'envelope_id',
        'name',
        'amount',
        'date',
        'effective',
    ];

    public function envelope() {
        return $this->belongsTo('App\Envelope')
            ->withTrashed();
    }

    public function getEffectiveStatusAttribute($at = null) {
        if ($this->effective === 1) {
            return 'default';
        }

        if (is_null($at)) {
            $at = Carbon::today();
        }

        if ($this->date < $at) {
            return 'danger';
        }

        return 'info';
    }
}
