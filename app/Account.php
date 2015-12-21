<?php

namespace App;

use App\Collections\OperationCollection;
use App\Services\Eloquent\HasEvents;
use Html;
use Illuminate\Database\Eloquent\Builder as EloquentBuilder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Query\Builder as QueryBuilder;

/**
 * @property integer $id
 * @property string $name
 * @property Illuminate\Database\Eloquent\Collection $envelopes
 * @property Illuminate\Database\Eloquent\Collection $recurringOperations
 * @property Illuminate\Database\Eloquent\Collection $owner
 */
class Account extends Model
{
    use SoftDeletes;
    use HasEvents;

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
     * @var [type]
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

    public function relatedEvents()
    {
        return Event::where(function(EloquentBuilder $query) {
            $query->where('entity_type', 'App\Account')->where('entity_id', $this->id);
        })->orWhere(function(EloquentBuilder $query) {
            $query->where('entity_type', 'App\Envelope')->whereIn('entity_id', function(QueryBuilder $query) {
                $query->select('id')->from('envelopes')->where('account_id', $this->id);
            });
        })->orWhere(function(EloquentBuilder $query) {
            $query->where('entity_type', 'App\Revenue')->whereIn('entity_id', function(QueryBuilder $query) {
                $query->select('id')->from('revenues')->where('account_id', $this->id)->whereNotNull('date');
            });
        })->orWhere(function(EloquentBuilder $query) {
            $query->where('entity_type', 'App\Transfer')->whereIn('entity_id', function(QueryBuilder $query) {
                $query->select('id')
                    ->from('transfers')
                    ->where('from_account_id', $this->id)
                    ->orWhere('to_account_id', $this->id);
            });
        })->orWhere(function(EloquentBuilder $query) {
            $query->where('entity_type', 'App\Income')->whereIn('entity_id', function(QueryBuilder $query) {
                $query->select('id')->from('incomes')->whereIn('envelope_id', function(QueryBuilder $query) {
                    $query->select('id')->from('envelopes')->where('account_id', $this->id);
                });
            });
        })->orWhere(function(EloquentBuilder $query) {
            $query->where('entity_type', 'App\Outcome')->whereIn('entity_id', function(QueryBuilder $query) {
                $query->select('id')->from('outcomes')->whereIn('envelope_id', function(QueryBuilder $query) {
                    $query->select('id')->from('envelopes')->where('account_id', $this->id);
                });
            });
        })->orderBy('id', 'desc');
    }

    public function users() {
        return $this->belongsToMany('App\User')
            ->withPivot('owner')
            ->withTimestamps();
    }

    public function owner() {
        return $this->users()
            ->where('owner', 1);
    }

    public function guests() {
        return $this->users()
            ->where('owner', 0)
            ->orderBy('name');
    }

    public function invitations() {
        return $this->hasMany('App\Invitation');
    }

    public function envelopes() {
        return $this->hasMany('App\Envelope')
            ->withTrashed()
            ->orderBy('name');
    }

    public function trashedEnvelopes() {
        return $this->hasMany('App\Envelope')
            ->onlyTrashed()
            ->orderBy('name');
    }

    public function nontrashedEnvelopes() {
        return $this->hasMany('App\Envelope')
            ->orderBy('name');
    }

    public function incomingTransfers() {
        return $this->hasMany('App\Transfer', 'to_account_id')
            ->orderBy('date');
    }

    public function outgoingTransfers() {
        return $this->hasMany('App\Transfer', 'from_account_id')
            ->orderBy('date');
    }

    public function recurringOperations() {
        return $this->hasMany('App\RecurringOperation')
            ->orderBy('type')->orderBy('entity_id')->orderBy('name');
    }

    public function recurringOperationsSelectOptions($type) {
        $options = [];

        $recurringOperations = $this->recurringOperations->where('type', $type);
        foreach ($recurringOperations as $recurringOperation) {
            $attributes = [
                'class' => 'recurring_operation',
                'data-type' => $recurringOperation->type,
                'data-envelope_id' => $recurringOperation->type === 'outcome' || $recurringOperation->type === 'revenue'
                    ? $recurringOperation->entity_id : null,
                'data-from_account_id' => $recurringOperation->type === 'incomingTransfer'
                    ? $recurringOperation->entity_id : null,
                'data-to_account_id' => $recurringOperation->type === 'outgoingTransfer'
                    ? $recurringOperation->entity_id : null,
                'data-name' => $recurringOperation->name,
                'data-amount' => $recurringOperation->amount,
            ];
            $options[] = '<option '.Html::attributes($attributes).'>'.$recurringOperation.'</option>';
        }

        if (count($options) === 0) {
            return '';
        }

        $label = trans('operation.type.recurring'.ucfirst($type).'s');
        return '<optgroup label="'.$label.'">'.implode('', $options).'</optgroup>';
    }

    public function outcomes() {
        return Outcome::whereIn('envelope_id', function(QueryBuilder $query) {
            $query->select('id')->from('envelopes')->where('account_id', $this->id);
        })->orderBy('outcomes.date');
    }

    public function incomes() {
        return Income::whereIn('envelope_id', function(QueryBuilder $query) {
            $query->select('id')->from('envelopes')->where('account_id', $this->id);
        })->orderBy('incomes.date');
    }

    public function revenues() {
        return $this->hasMany('App\Revenue')
            ->orderBy('date');
    }

    public function operationType($type) {
        return $this->{$type.'s'}();
    }

    public function operationsInPeriod($after, $before) {
        $operations = new OperationCollection();

        $revenues = $this->revenues()->inPeriod($after, $before)->get();
        foreach ($revenues as $revenue) {
            $operations->push($revenue);
        }

        $outcomes = $this->outcomes()->inPeriod($after, $before)->get();
        foreach ($outcomes as $outcome) {
            $operations->push($outcome);
        }

        $incomingTransfers = $this->incomingTransfers()->inPeriod($after, $before)->get();
        foreach ($incomingTransfers as $incomingTransfer) {
            $operations->push($incomingTransfer);
        }

        $outgoingTransfers = $this->outgoingTransfers()->inPeriod($after, $before)->get();
        foreach ($outgoingTransfers as $outgoingTransfer) {
            $operations->push($outgoingTransfer);
        }

        return $operations->sortByDateThenCreatedAt();
    }

    public function getInitialBalanceAttribute() {
        $income = $this->revenues()->where('date', null)->first();

        if ($income instanceof Revenue) {
            return $income;
        }

        return new Income(['account_id' => $this->id, 'amount' => 0]);
    }

    public function getBalanceAttribute($after = null, $before = null) {
        $revenue = $this->revenues()->inPeriod($after, $before)->sum('amount');
        $outcome = $this->outcomes()->inPeriod($after, $before)->sum('amount');

        $incomingTransfer = $this->incomingTransfers()->inPeriod($after, $before)->sum('amount');
        $outgoingTransfer = $this->outgoingTransfers()->inPeriod($after, $before)->sum('amount');

        $balance = $revenue + $incomingTransfer - $outcome - $outgoingTransfer;

        return floatval($balance);
    }

    public function getEnvelopesBalanceAttribute($after = null, $before = null) {
        $balance = 0;

        foreach ($this->envelopes as $envelope) {
            $balance += $envelope->getBalanceAttribute($after, $before);
        }

        return floatval($balance);
    }

    public function getUnallocatedAttribute($after = null, $before = null) {
        $revenue = $this->revenues()->inPeriod($after, $before)->sum('amount');

        $incomingTransfer = $this->incomingTransfers()->inPeriod($after, $before)->sum('amount');
        $outgoingTransfer = $this->outgoingTransfers()->inPeriod($after, $before)->sum('amount');

        $income = $this->incomes()->inPeriod($after, $before)->sum('amount');

        $unallocated = max(0, $revenue + $incomingTransfer - $outgoingTransfer - $income);

        return floatval($unallocated);
    }

    public function getStatusAttribute($after = null, $before = null) {
        $balance = $this->getBalanceAttribute($after, $before);

        if ($balance < 0) {
            return 'danger';
        }

        return 'success';
    }

    public function getEnvelopesStatusAttribute($after = null, $before = null) {
        $balance = $this->getEnvelopesBalanceAttribute($after, $before);

        if ($balance < 0) {
            return 'danger';
        }

        return 'success';
    }

    public function getCurrencyAttribute() {
        return $this->owner->first()->currency;
    }

}
