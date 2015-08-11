<?php

namespace App;

use App\Collections\OperationCollection;
use App\Services\Eloquent\HasEvents;
use Carbon\Carbon;
use Html;
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
     * Create a new Eloquent Collection instance.
     * @param  array  $models
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function newCollection(array $models = [])
    {
        return new OperationCollection($models);
    }

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

    /**
     * Convert the model to its string representation.
     * @return string
     */
    public function __toString()
    {
        return trans('operation.object.outcome', [
            'name' => $this->name,
            'amount' => Html::formatPrice($this->amount),
            'date' => $this->date->format('d/m/Y'),
            'envelope' => $this->envelope,
        ]);
    }

    public function link() {
        return Html::linkAction('EnvelopeController@getView', $this, $this->envelope, ['class' => 'link-to-page']);
    }

    public function envelope() {
        return $this->belongsTo('App\Envelope')
            ->withTrashed();
    }

    public function getAmountSymbolAttribute() {
        return '-';
    }

    public function getContextAttribute() {
        if ($this->effective) {
            return 'danger';
        }

        return 'warning';
    }

    public function getTypeAttribute() {
        if ($this->effective) {
            return 'effectiveOutcome';
        }

        return 'intendedOutcome';
    }
}
