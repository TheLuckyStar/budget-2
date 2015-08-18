<?php namespace App;

use App\Collections\OperationCollection;
use App\Services\Eloquent\HasEvents;
use Html;
use Illuminate\Database\Eloquent\Model;

class Transfer extends Model
{
    use HasEvents;

    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = ['from_account_id', 'to_account_id', 'amount', 'date'];

    /**
     * The attributes that should be mutated to dates.
     * @var array
     */
    protected $dates = ['date', 'created_at', 'updated_at'];

    /**
     * The attributes that should be casted to native types.
     * @var array
     */
    protected $casts = [
        'amount' => 'float',
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
        'from_account_id',
        'to_account_id',
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
            'amount' => Html::formatPrice($this->amount),
            'date' => $this->date->formatLocalized('%B %Y'),
            'from_account' => $this->fromAccount,
            'to_account' => $this->toAccount,
        ]);
    }

    // public function link() {
    //     return Html::linkAction('AccountController@getView', $this, $this->fromAccount, ['class' => 'link-to-page']);
    // }

    // public function getAmountSymbolAttribute() {
    //     return '+';
    // }

    // public function getContextAttribute() {
    //     return 'success';
    // }

    // public function getTypeAttribute() {
    //     return 'revenue';
    // }
}
