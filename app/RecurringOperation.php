<?php namespace App;

use Html;
use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property App\Account $account
 * @property string $type
 * @property integer $entity_id
 * @property App\Envelope $envelopeEntity
 * @property App\Account $accountEntity
 * @property string $name
 * @property float $amount
 * @property string $currency
 */
class RecurringOperation extends Model
{
    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = ['account_id', 'type', 'entity_id', 'name', 'amount'];

    /**
     * The attributes that should be casted to native types.
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'entity_id' => 'integer',
        'amount' => 'float',
    ];

    /**
     * Convert the model to its string representation.
     * @return string
     */
    public function __toString()
    {
        $str = $this->name.' ('.Html::formatPrice($this->amount, $this->currency).')';

        if ($this->type === 'outcome' || ($this->type === 'revenue' && is_int($this->entity_id))) {
            return $this->envelopeEntity.' : '.$str;
        }

        if ($this->type === 'incomingTransfer') {
            return trans('operation.fields.accountFromPrefix').' '.$this->accountEntity.' : '.$str;
        }

        if ($this->type === 'outgoingTransfer') {
            return trans('operation.fields.accountToPrefix').' '.$this->accountEntity.' : '.$str;
        }

        return $str;
    }

    public function account() {
        return $this->belongsTo('App\Account')
            ->withTrashed();
    }

    public function envelopeEntity() {
        return $this->belongsTo('App\Envelope', 'entity_id')
            ->withTrashed();
    }

    public function accountEntity() {
        return $this->belongsTo('App\Account', 'entity_id')
            ->withTrashed();
    }

    public function getContextAttribute() {
        if ($this->type === 'outcome' ) {
            return 'danger';
        }

        if ($this->type === 'revenue' ) {
            return 'success';
        }

        if ($this->type === 'outgoingTransfer' ) {
            return 'warning';
        }

        return 'info';
    }

    public function getCurrencyAttribute() {
        return $this->account->currency;
    }
}
