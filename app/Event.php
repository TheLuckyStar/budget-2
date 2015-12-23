<?php

namespace App;

use Auth;
use Html;
use Illuminate\Database\Eloquent\Model;

/**
 * Record user action for history
 * @property integer $id
 * @property App\User $user
 * @property Illuminate\Database\Eloquent\Model $entity
 * @property string $action
 * @property string $field_name
 * @property string $field_value_from
 * @property string $field_value_to
 * @property Carbon\Carbon $created_at
 */
class Event extends Model
{
    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = [
        'user_id',
        'entity_id',
        'entity_type',
        'action',
        'field_name',
        'field_value_from',
        'field_value_to',
    ];

    /**
     * The attributes that should be casted to native types.
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'entity_id' => 'integer',
    ];

    /**
     * Convert the model to its string representation.
     * @return string
     */
    public function __toString()
    {
        $action    = $this->actionForString();
        $user      = $this->userForString();
        $fieldName = $this->fieldNameForString();
        $period    = $this->periodForString();

        return trans('event.action.'.$action, [
            'user' => $user,
            'entity' => $this->entity->link(),
            'field_name' => strtolower($fieldName),
            'field_value_from' => $this->formatValue($this->entity, $this->field_name, $this->field_value_from),
            'field_value_to' => $this->formatValue($this->entity, $this->field_name, $this->field_value_to),
            'period' => $period,
        ]);
    }

    /**
     * Get action for translation name
     * @return string Name
     */
    public function actionForString()
    {
        if ($this->action == 'update') {
            return $this->actionForStringUpdate();
        }

        if ($this->action == 'delete') {
            return $this->actionForStringDelete();
        }

        return $this->action;
    }

    /**
     * Get action update for translation name
     * @return string Name
     */
    public function actionForStringUpdate()
    {
        if ($this->field_value_from == '') {
            return 'set';
        }

        if ($this->field_value_to == '') {
            return 'clear';
        }

        return 'update';
    }

    /**
     * Get action delete for translation name
     * @return string Name
     */
    public function actionForStringDelete()
    {
        if (in_array('Illuminate\Database\Eloquent\SoftDeletes', class_uses($this->entity))) {
            return 'archive';
        }

        return 'delete';
    }

    /**
     * Get string for user name
     * @return string Name
     */
    public function userForString()
    {
        if ($this->user->id !== Auth::user()->id) {
            return $this->user->link();
        }

        return trans('event.self');
    }

    /**
     * Get string for field name
     * @return string Name
     */
    public function fieldNameForString()
    {
        if ($this->entity instanceof Operation) {
            $basename = 'operation';
        } else {
            $basename = strtolower(class_basename($this->entity));
        }

        $key = $basename.'.fields.'.$this->field_name;

        return trans($key);
    }

    /**
     * Get string for period
     * @return string Period
     */
    public function periodForString()
    {
        if ($this->created_at->diffInHours() === 0) {
            return $this->created_at->diffForHumans();
        }

        return trans('event.datePrefix').' '.$this->created_at->format(trans('app.date.short'));
    }

    /**
     * Query user related to event
     * @return \Illuminate\Database\Eloquent\Builder Query
     */
    public function user() {
        return $this->belongsTo('App\User');
    }

    /**
     * Query entity related to event
     * @return \Illuminate\Database\Eloquent\Builder Query
     */
    public function entity() {
        return $this->morphTo()
            ->withTrashed();
    }

    /**
     * Get string for value
     * @param  object $entity Entity that owns the field
     * @param  string $fieldName Fieldname whre the value is stored
     * @param  mixed $value Value
     * @return string Value
     */
    public function formatValue($entity, $fieldName, $value) {

        if ($fieldName === 'icon') {
            return "<i class='fa fa-fw ".$value."'></i>";
        }

        if ($fieldName === 'amount') {
            return Html::formatPrice($value, $entity->currency);
        }

        return $value;
    }
}
