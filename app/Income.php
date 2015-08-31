<?php namespace App;

use App\Operation;
use Html;

/**
  * @property integer $id
  * @property App\Envelope $envelope
  * @property float $amount
  * @property Carbon\Carbon $date
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
     * @var [type]
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
            'amount' => Html::formatPrice($this->amount),
            'date' => $this->date->formatLocalized('%B %Y'),
        ]);
    }

    public function link() {
        return Html::linkAction(
            'AccountController@getIndex',
            $this,
            [$this->envelope->account, 'allocation'],
            ['class' => 'routable', 'data-target' => '#page-wrapper']
        ).' ('.$this->envelope->link().')';
    }

    public function envelope() {
        return $this->belongsTo('App\Envelope')
            ->withTrashed();
    }

    public function getContextAttribute() {
        return 'success';
    }

    public function getTypeAttribute() {
        return 'revenue';
    }
}
