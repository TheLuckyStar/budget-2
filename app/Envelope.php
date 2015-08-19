<?php

namespace App;

use App\Collections\OperationCollection;
use App\Services\Eloquent\HasEvents;
use Carbon\Carbon;
use Html;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Envelope extends Model
{
    use SoftDeletes;
    use HasEvents;

    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = ['name', 'icon'];

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
        'name',
        'icon',
    ];

    /**
     * Convert the model to its string representation.
     * @return string
     */
    public function __toString()
    {
        if ($this->icon) {
            return '<i class="fa fa-fw '.$this->icon.'" title="'.$this->name.'"></i> '.$this->name;
        }

        return $this->name;
    }

    public function link() {
        return Html::linkAction(
            'EnvelopeController@getView',
            $this,
            $this,
            ['class' => 'link-to-page']
        );
    }

    public function relatedEvents()
    {
        return Event::where(function ($query) {
            $query->where('entity_type', 'App\Envelope')->where('entity_id', $this->id);
        })->orWhere(function ($query) {
            $query->where('entity_type', 'App\Income')->whereIn('entity_id', function ($query) {
                $query->select('id')->from('incomes')->where('envelope_id', $this->id);
            });
        })->orWhere(function ($query) {
            $query->where('entity_type', 'App\Outcome')->whereIn('entity_id', function ($query) {
                $query->select('id')->from('outcomes')->where('envelope_id', $this->id);
            });
        })->orderBy('id', 'desc');
    }

    public function account() {
        return $this->belongsTo('App\Account')
            ->withTrashed();
    }

    public function incomes() {
        return $this->hasMany('App\Income')
            ->orderBy('date');
    }

    public function outcomes() {
        return $this->hasMany('App\Outcome')
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

        $incomes = $this->incomes()->inPeriod($from, $to)->get();
        foreach ($incomes as $income) {
            $operations->push($income);
        }

        $outcomes = $this->outcomes()->inPeriod($from, $to)->get();
        foreach ($outcomes as $outcome) {
            $operations->push($outcome);
        }

        return $operations;
    }

    public function countOperationsInPeriod($from = null, $to = null) {
        $count = 0;

        $count += $this->incomes()->inPeriod($from, $to)->count();
        $count += $this->outcomes()->inPeriod($from, $to)->count();

        return $count;
    }

    public function getBalanceAttribute($from = null, $to = null) {
        $income = $this->incomes()->inPeriod($from, $to)->sum('amount');
        $outcome = $this->outcomes()->inPeriod($from, $to)->sum('amount');

        $balance = $income - $outcome;

        return floatval($balance);
    }

    public function getStatusAttribute($from = null, $to = null) {
        $income = $this->incomes()->inPeriod($from, $to)->sum('amount');
        $outcome = $this->outcomes()->inPeriod($from, $to)->sum('amount');

        if ($income == 0) {
            return $outcome ? 'danger' : 'warning';
        }

        $ratio = $outcome / $income;

        if ($ratio > 1) {
            return 'danger';
        }

        if ($ratio > 0.8) {
            return 'warning';
        }

        return 'success';
    }
}
