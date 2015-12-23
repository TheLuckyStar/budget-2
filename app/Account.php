<?php

namespace App;

use App\Collections\OperationCollection;
use App\Services\Eloquent\HasEvents;
use Html;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Query\Builder as QueryBuilder;

/**
 * Bank account
 * @property integer $id
 * @property string $name
 * @property Illuminate\Database\Eloquent\Collection $envelopes
 * @property Illuminate\Database\Eloquent\Collection $trashedEnvelopes
 * @property Illuminate\Database\Eloquent\Collection $nontrashedEnvelopes
 * @property Illuminate\Database\Eloquent\Collection $recurringOperations
 * @property Illuminate\Database\Eloquent\Collection $owner
 * @property string $envelopes_status
 * @property string $currency
 */
class Account extends Model
{
    use SoftDeletes;
    use HasEvents;
    use AccountRelatedEvents;

    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = ['name'];

    /**
     * The attributes that should be casted to native types.
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
    ];

    /**
     * The attributes that should be mutated to dates.
     * @var array
     */
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    /**
     * Array of field name to watch for changed on updated event
     * @var array
     */
    protected $watchedFieldInEvent = [
        'name'
    ];

    /**
     * Convert the model to its string representation.
     * @return string
     */
    public function __toString()
    {
        return $this->name;
    }

    /**
     * Get a link to the account page
     * @param  string|null $text Override link text
     * @param  array  $moreAttributes Additional html attributes
     * @return string HTML anchor
     */
    public function link($text = null, $moreAttributes = []) {
        $attributes = ['class' => 'routable', 'data-target' => '#page-wrapper'];

        if (is_null($text)) {
            $text = $this;
        }

        foreach ($moreAttributes as $key => $value) {
            if (isset($attributes[$key])) {
                $attributes[$key] .= ' '.$moreAttributes[$key];
            } else {
                $attributes[$key] = $moreAttributes[$key];
            }
        }

        return Html::linkAction('AccountController@getIndex', $text, $this, $attributes);
    }

    /**
     * Query users related to account
     * @return \Illuminate\Database\Eloquent\Builder Query
     */
    public function users() {
        return $this->belongsToMany('App\User')
            ->withPivot('owner')
            ->withTimestamps();
    }

    /**
     * Query account owner
     * @return \Illuminate\Database\Eloquent\Builder Query
     */
    public function owner() {
        return $this->users()
            ->where('owner', 1);
    }

    /**
     * Query account guests
     * @return \Illuminate\Database\Eloquent\Builder Query
     */
    public function guests() {
        return $this->users()
            ->where('owner', 0)
            ->orderBy('name');
    }

    /**
     * Query invitations related to account
     * @return \Illuminate\Database\Eloquent\Builder Query
     */
    public function invitations() {
        return $this->hasMany('App\Invitation');
    }

    /**
     * Query envelopes related to account
     * @return \Illuminate\Database\Eloquent\Builder Query
     */
    public function envelopes() {
        return $this->hasMany('App\Envelope')
            ->withTrashed()
            ->orderBy('name');
    }

    /**
     * Query trashed envelopes related to account
     * @return \Illuminate\Database\Eloquent\Builder Query
     */
    public function trashedEnvelopes() {
        return $this->hasMany('App\Envelope')
            ->onlyTrashed()
            ->orderBy('name');
    }

    /**
     * Query non trashed envelopes related to account
     * @return \Illuminate\Database\Eloquent\Builder Query
     */
    public function nontrashedEnvelopes() {
        return $this->hasMany('App\Envelope')
            ->orderBy('name');
    }

    /**
     * Query incoming transfers related to account
     * @return \Illuminate\Database\Eloquent\Builder Query
     */
    public function incomingTransfers() {
        return $this->hasMany('App\Transfer', 'to_account_id')
            ->orderBy('date');
    }

    /**
     * Query outgoing transfers related to account
     * @return \Illuminate\Database\Eloquent\Builder Query
     */
    public function outgoingTransfers() {
        return $this->hasMany('App\Transfer', 'from_account_id')
            ->orderBy('date');
    }

    /**
     * Query recurring operations related to account
     * @return \Illuminate\Database\Eloquent\Builder Query
     */
    public function recurringOperations() {
        return $this->hasMany('App\RecurringOperation')
            ->orderBy('type')->orderBy('entity_id')->orderBy('name');
    }

    /**
     * Query outcomes related to account
     * @return \Illuminate\Database\Eloquent\Builder Query
     */
    public function outcomes() {
        return Outcome::whereIn('envelope_id', function(QueryBuilder $query) {
            $query->select('id')->from('envelopes')->where('account_id', $this->id);
        })->orderBy('outcomes.date');
    }

    /**
     * Query incomes related to account
     * @return \Illuminate\Database\Eloquent\Builder Query
     */
    public function incomes() {
        return Income::whereIn('envelope_id', function(QueryBuilder $query) {
            $query->select('id')->from('envelopes')->where('account_id', $this->id);
        })->orderBy('incomes.date');
    }

    /**
     * Query revenues related to account
     * @return \Illuminate\Database\Eloquent\Builder Query
     */
    public function revenues() {
        return $this->hasMany('App\Revenue')
            ->orderBy('date');
    }

    /**
     * Query operations related to account for a given operation type
     * @param string $type Operation type (singular form)
     * @return \Illuminate\Database\Eloquent\Builder Query
     */
    public function operationType($type) {
        return $this->{$type.'s'}();
    }

    /**
     * Get related operations in a given period
     * @param  \Carbon\Carbon $after Start of period
     * @param  \Carbon\Carbon $before End of period
     * @return OperationCollection
     */
    public function operationsInPeriod($after, $before) {
        $operations = new OperationCollection();

        $operations = $operations->merge($this->revenues()->inPeriod($after, $before)->get());
        $operations = $operations->merge($this->outcomes()->inPeriod($after, $before)->get());
        $operations = $operations->merge($this->incomingTransfers()->inPeriod($after, $before)->get());
        $operations = $operations->merge($this->outgoingTransfers()->inPeriod($after, $before)->get());

        return $operations->sortByDateThenCreatedAt();
    }

    /**
     * Get balance at account creation
     * @return \App\Revenue Revenue
     */
    public function getInitialBalanceAttribute() {
        $income = $this->revenues()->where('date', null)->first();

        if ($income instanceof Revenue) {
            return $income;
        }

        return new Revenue(['account_id' => $this->id, 'amount' => 0]);
    }

    /**
     * Get balance for a given period
     * @param  \Carbon\Carbon|null $after Start of period
     * @param  \Carbon\Carbon|null $before End of period
     * @return float Balance
     */
    public function getBalanceAttribute($after = null, $before = null) {
        $revenue = $this->revenues()->inPeriod($after, $before)->sum('amount');
        $outcome = $this->outcomes()->inPeriod($after, $before)->sum('amount');

        $incomingTransfer = $this->incomingTransfers()->inPeriod($after, $before)->sum('amount');
        $outgoingTransfer = $this->outgoingTransfers()->inPeriod($after, $before)->sum('amount');

        $balance = $revenue + $incomingTransfer - $outcome - $outgoingTransfer;

        return floatval($balance);
    }

    /**
     * Get envelope balances for a given period
     * @param  \Carbon\Carbon|null $after Start of period
     * @param  \Carbon\Carbon|null $before End of period
     * @return float Envelope balances
     */
    public function getEnvelopesBalanceAttribute($after = null, $before = null) {
        $balance = 0;

        foreach ($this->envelopes as $envelope) {
            $balance += $envelope->getBalanceAttribute($after, $before);
        }

        return floatval($balance);
    }

    /**
     * Get context color based on balance for a given period
     * @param  \Carbon\Carbon|null $after Start of period
     * @param  \Carbon\Carbon|null $before End of period
     * @return string Context color
     */
    public function getStatusAttribute($after = null, $before = null) {
        $balance = $this->getBalanceAttribute($after, $before);

        if ($balance < 0) {
            return 'danger';
        }

        return 'success';
    }

    /**
     * Get context color based on envelope balances for a given period
     * @param  \Carbon\Carbon|null $after Start of period
     * @param  \Carbon\Carbon|null $before End of period
     * @return string Context color
     */
    public function getEnvelopesStatusAttribute($after = null, $before = null) {
        $balance = $this->getEnvelopesBalanceAttribute($after, $before);

        if ($balance < 0) {
            return 'danger';
        }

        return 'success';
    }

    /**
     * Get currency based on owner currency
     * @return string Currency
     */
    public function getCurrencyAttribute() {
        return $this->owner->first()->currency;
    }

}
