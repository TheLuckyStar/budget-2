<?php namespace App;

use App\Operation;
use Html;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property integer $id
 * @property App\Account $fromAccount
 * @property App\Account $toAccount
 * @property string $name
 * @property float $amount
 * @property Carbon\Carbon $date
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
        'id' => 'id',
        'amount' => 'float',
    ];

    /**
     * Array of field name to watch for changed on updated event
     * @var [type]
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
            'amount' => Html::formatPrice($this->amount),
            'date' => $this->date->formatLocalized('%B %Y'),
            'from_account' => $this->fromAccount,
            'to_account' => $this->toAccount,
        ]);
    }

    // public function link() {
    //     return Html::linkAction('AccountController@getIndex', $this, $this->account, ['class' => 'link-to-page']);
    // }

    // public function account() {
    //     return $this->belongsTo('App\Account')
    //         ->withTrashed();
    // }

    // public function getContextAttribute() {
    //     return 'success';
    // }

    // public function getTypeAttribute() {
    //     return 'revenue';
    // }
}
