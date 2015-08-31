<?php

namespace App;

use App\Collections\OperationCollection;
use App\Services\Eloquent\HasEvents;
use Html;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property integer $id
 * @property string $name
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
        return Event::where(function($query) {
            $query->where('entity_type', 'App\Account')->where('entity_id', $this->id);
        })->orWhere(function($query) {
            $query->where('entity_type', 'App\Envelope')->whereIn('entity_id', function($query) {
                $query->select('id')->from('envelopes')->where('account_id', $this->id);
            });
        })->orWhere(function($query) {
            $query->where('entity_type', 'App\Revenue')->whereIn('entity_id', function($query) {
                $query->select('id')->from('revenues')->where('account_id', $this->id)->whereNotNull('date');
            });
        })->orWhere(function($query) {
            $query->where('entity_type', 'App\Income')->whereIn('entity_id', function($query) {
                $query->select('id')->from('incomes')->whereIn('envelope_id', function($query) {
                    $query->select('id')->from('envelopes')->where('account_id', $this->id);
                });
            });
        })->orWhere(function($query) {
            $query->where('entity_type', 'App\Outcome')->whereIn('entity_id', function($query) {
                $query->select('id')->from('outcomes')->whereIn('envelope_id', function($query) {
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

    public function outcomes() {
        return Outcome::whereIn('envelope_id', function($query) {
            $query->select('id')->from('envelopes')->where('account_id', $this->id);
        })->orderBy('outcomes.date');
    }

    public function incomes() {
        return Income::whereIn('envelope_id', function($query) {
            $query->select('id')->from('envelopes')->where('account_id', $this->id);
        })->orderBy('incomes.date');
    }

    public function revenues() {
        return $this->hasMany('App\Revenue')
            ->orderBy('date');
    }

    public function operationType($type) {
        if ($type === 'effectiveOutcome') {
            return $this->outcomes()->effective();
        }

        if ($type === 'intendedOutcome') {
            return $this->outcomes()->intended();
        }

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

        return $operations->sortBy('date');
    }

    public function countOperationsInPeriod($after = null, $before = null) {
        $count = 0;

        $count += $this->revenues()->inPeriod($after, $before)->count();
        $count += $this->outcomes()->inPeriod($after, $before)->count();

        return $count;
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

    public function getStatusAttribute($after = null, $before = null) {
        if ($this->countOperationsInPeriod() === 0) {
            return 'default';
        }

        $revenue = $this->revenues()->inPeriod($after, $before)->sum('amount');
        $outcome = $this->outcomes()->inPeriod($after, $before)->sum('amount');

        if ($revenue == 0) {
            return $outcome ? 'danger' : 'warning';
        }

        if ($outcome > $revenue) {
            return 'danger';
        }

        return 'success';
    }
}
