<?php namespace App;

use App\Operation;
use Html;

/**
 * Type of operation increasing an envelope balance
 * @property integer $id
 * @property App\Envelope $envelope
 * @property float $amount
 * @property Carbon\Carbon $date
 * @property string $currency
 */
class Income extends Operation
{
    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = ['amount', 'date'];

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
        'amount',
    ];

    /**
     * Convert the model to its string representation.
     * @return string
     */
    public function __toString()
    {
        return trans('operation.object.income', [
            'amount' => Html::formatPrice($this->amount, $this->currency),
            'date' => $this->date->formatLocalized('%B %Y'),
        ]);
    }

    /**
     * Get a link to the account allocation page
     * @return string HTML anchor
     */
    public function link() {
        return Html::linkAction(
            'AccountController@getIndex',
            $this,
            [$this->envelope->account, 'allocation'],
            ['class' => 'routable', 'data-target' => '#page-wrapper']
        ).' ('.$this->envelope->link().')';
    }

    /**
     * Query envelope related to income
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
        return 'success';
    }

    /**
     * Get operation type
     * @return string Type
     */
    public function getTypeAttribute() {
        return 'income';
    }

    /**
     * Get currency based on envelope currency
     * @return string Currency
     */
    public function getCurrencyAttribute() {
        return $this->envelope->currency;
    }
}
