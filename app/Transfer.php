<?php namespace App;

use App\Account;
use App\Operation;
use Html;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Type of operation increasing an account balance and decreasing another one
 * @property integer $id
 * @property App\Account $accountFrom
 * @property App\Account $accountTo
 * @property string $name
 * @property float $amount
 * @property Carbon\Carbon $date
 * @property string $currency
 */
class Transfer extends Operation
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = ['from_account_id', 'to_account_id', 'name', 'amount', 'date'];

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
        'from_account_id' => 'integer',
        'to_account_id' => 'integer',
        'amount' => 'float',
    ];

    /**
     * Array of field name to watch for changed on updated event
     * @var array
     */
    protected $watchedFieldInEvent = [
        'from_account_id',
        'to_account_id',
        'name',
        'amount',
        'date',
    ];

    /**
     * Convert the model to its string representation.
     * @return string
     */
    public function __toString()
    {
        return trans('operation.object.transfer', [
            'name' => $this->name,
            'amount' => Html::formatPrice($this->amount, $this->currency),
            'date' => $this->date->format(trans('app.date.short')),
            'from_account' => $this->accountFrom,
            'to_account' => $this->accountTo,
        ]);
    }

    /**
     * Get a link to the account operationpage
     * @return string HTML anchor
     */
    public function link() {
        return Html::linkAction(
            'AccountController@getIndex',
            $this,
            [$this->accountFrom, 'operations'],
            ['class' => 'routable', 'data-target' => '#page-wrapper']
        );
    }

    /**
     * Query account the transfer is from
     * @return \Illuminate\Database\Eloquent\Builder Query
     */
    public function accountFrom() {
        return $this->belongsTo('App\Account', 'from_account_id')
            ->withTrashed();
    }

    /**
     * Query account the transfer is to
     * @return \Illuminate\Database\Eloquent\Builder Query
     */
    public function accountTo() {
        return $this->belongsTo('App\Account', 'to_account_id')
            ->withTrashed();
    }

    /**
     * Get context color for an account
     * @param \App\Account $account Account
     * @return string Context color
     */
    public function getContextAttribute(Account $account) {
        if ($account->id === $this->accountFrom->id) {
            return 'warning';
        }

        return 'info';
    }

    /**
     * Get operation type for an account
     * @param \App\Account $account Account
     * @return string Type
     */
    public function getTypeAttribute(Account $account) {
        if ($account->id === $this->accountFrom->id) {
            return 'outgoingTransfer';
        }

        return 'incomingTransfer';
    }

    /**
     * Get currency based on account currency
     * @return string Currency
     */
    public function getCurrencyAttribute() {
        return $this->accountFrom->currency;
    }
}
