<?php namespace App;

use App\Operation;
use Html;
use Illuminate\Database\Eloquent\SoftDeletes;

class Outcome extends Operation
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = ['envelope_id', 'name', 'amount', 'date', 'effective'];

    /**
     * The attributes that should be mutated to dates.
     * @var array
     */
    protected $dates = ['date', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * The attributes that should be casted to native types.
     * @var array
     */
    // @TODO Cast effective to boolean
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
        ]);
    }

    public function link() {
        return Html::linkAction(
            'EnvelopeController@getView',
            $this,
            [$this->envelope, 'operations'],
            ['class' => 'routable', 'data-target' => '#page-wrapper']
        ).' ('.$this->envelope->link().')';
    }

    public function envelope() {
        return $this->belongsTo('App\Envelope')
            ->withTrashed();
    }

    public function scopeEffective($query) {
        return $query->where('effective', 1);
    }

    public function scopeIntended($query) {
        return $query->where('effective', 0);
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
