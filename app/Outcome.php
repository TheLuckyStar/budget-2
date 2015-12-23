<?php namespace App;

use App\Operation;
use Html;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Type of operation decreasing an envelope balance
 * @property integer $id
 * @property App\Envelope $envelope
 * @property string $name
 * @property float $amount
 * @property Carbon\Carbon $date
 * @property string $currency
 */
class Outcome extends Operation
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = ['envelope_id', 'name', 'amount', 'date'];

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
        'id' => 'integer',
        'amount' => 'float',
    ];

    /**
     * Array of field name to watch for changed on updated event
     * @var array
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
            'amount' => Html::formatPrice($this->amount, $this->currency),
            'date' => $this->date->format(trans('app.date.short')),
        ]);
    }

    /**
     * Get a link to the envelope operation page
     * @return string HTML anchor
     */
    public function link() {
        return Html::linkAction(
            'EnvelopeController@getView',
            $this,
            [$this->envelope, 'operations'],
            ['class' => 'routable', 'data-target' => '#page-wrapper']
        ).' ('.$this->envelope->link().')';
    }

    /**
     * Query envelope related to outcome
     * @return \Illuminate\Database\Eloquent\Builder Query
     */
    public function envelope() {
        return $this->belongsTo('App\Envelope')
            ->withTrashed();
    }

    /**
     * Get context color
     * @return string Context color
     */
    public function getContextAttribute() {
        return 'danger';
    }

    /**
     * Get operation type
     * @return string Type
     */
    public function getTypeAttribute() {
        return 'outcome';
    }

    /**
     * Get currency based on envelope currency
     * @return string Currency
     */
    public function getCurrencyAttribute() {
        return $this->envelope->currency;
    }
}
