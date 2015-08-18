<?php

namespace App;

use App\Collections\OperationCollection;
use App\Services\Eloquent\HasEvents;
use Carbon\Carbon;
use Html;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

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

    public function link() {
        return Html::linkAction('AccountController@getIndex', $this, $this, ['class' => 'link-to-page']);
    }

    public function relatedEvents()
    {
        return Event::where(function ($query) {
            $query->where('entity_type', 'App\Account')->where('entity_id', $this->id);
        })->orWhere(function ($query) {
            $query->where('entity_type', 'App\Envelope')->whereIn('entity_id', function ($query) {
                $query->select('id')->from('envelopes')->where('account_id', $this->id);
            });
        })->orWhere(function ($query) {
            $query->where('entity_type', 'App\Revenue')->whereIn('entity_id', function ($query) {
                $query->select('id')->from('revenues')->where('account_id', $this->id)->whereNotNull('date');
            });
        })->orWhere(function ($query) {
            $query->where('entity_type', 'App\Income')->whereIn('entity_id', function ($query) {
                $query->select('id')->from('incomes')->whereIn('envelope_id', function ($query) {
                    $query->select('id')->from('envelopes')->where('account_id', $this->id);
                });
            });
        })->orWhere(function ($query) {
            $query->where('entity_type', 'App\Outcome')->whereIn('entity_id', function ($query) {
                $query->select('id')->from('outcomes')->whereIn('envelope_id', function ($query) {
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
        return Outcome::whereIn('envelope_id', function ($query) {
            $query->select('id')->from('envelopes')->where('account_id', $this->id);
        })->orderBy('outcomes.date');
    }

    public function incomes() {
        return Income::whereIn('envelope_id', function ($query) {
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

    public function operationsInPeriod($from, $to) {
        $operations = new OperationCollection();

        $revenues = $this->revenues()->inPeriod($from, $to)->get();
        foreach ($revenues as $revenue) {
            $operations->push($revenue);
        }

        $outcomes = $this->outcomes()->inPeriod($from, $to)->get();
        foreach ($outcomes as $outcome) {
            $operations->push($outcome);
        }

        return $operations->sortBy('date');
    }

    public function getBalanceAttribute($from = null, $to = null) {
        $revenue = $this->revenues()->inPeriod($from, $to)->sum('amount');
        $outcome = $this->outcomes()->inPeriod($from, $to)->sum('amount');

        $incomingTransfer = $this->incomingTransfers()->inPeriod($from, $to)->sum('amount');
        $outgoingTransfer = $this->outgoingTransfers()->inPeriod($from, $to)->sum('amount');

        $balance = $revenue + $incomingTransfer - $outcome - $outgoingTransfer;

        return floatval($balance);
    }

    public function getStatusAttribute($from = null, $to = null) {
        $revenue = $this->revenues()->inPeriod($from, $to)->sum('amount');
        $outcome = $this->outcomes()->inPeriod($from, $to)->sum('amount');

        if ($revenue == 0) {
            return $outcome ? 'danger' : 'warning';
        }

        if ($outcome > $revenue) {
            return 'danger';
        }

        return 'success';
    }
}
