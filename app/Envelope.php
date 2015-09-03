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
 * @property string $icon
 */
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

        return Html::linkAction('EnvelopeController@getView', $text, $this, $attributes);
    }

    public function relatedEvents()
    {
        return Event::where(function($query) {
            $query->where('entity_type', 'App\Envelope')->where('entity_id', $this->id);
        })->orWhere(function($query) {
            $query->where('entity_type', 'App\Income')->whereIn('entity_id', function($query) {
                $query->select('id')->from('incomes')->where('envelope_id', $this->id);
            });
        })->orWhere(function($query) {
            $query->where('entity_type', 'App\Outcome')->whereIn('entity_id', function($query) {
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

    public function operationsInPeriod($after, $before) {
        $operations = new OperationCollection();

        $incomes = $this->incomes()->inPeriod($after, $before)->get();
        foreach ($incomes as $income) {
            $operations->push($income);
        }

        $outcomes = $this->outcomes()->inPeriod($after, $before)->get();
        foreach ($outcomes as $outcome) {
            $operations->push($outcome);
        }

        return $operations;
    }

    public function getBalanceAttribute($after = null, $before = null) {
        $income  = $this->incomes()->inPeriod($after, $before)->sum('amount');
        $outcome = $this->outcomes()->inPeriod($after, $before)->sum('amount');

        $balance = $income - $outcome;

        return floatval($balance);
    }

    public function getStatusAttribute($after = null, $before = null) {
        $income  = $this->incomes()->inPeriod($after, $before)->sum('amount');
        $outcome = $this->outcomes()->inPeriod($after, $before)->sum('amount');

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
