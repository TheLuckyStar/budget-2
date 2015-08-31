<?php

namespace App;

use Auth;
use Illuminate\Database\Eloquent\Model;

/**
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
        $fieldName = trans(strtolower(class_basename($this->entity)).'.fields.'.$this->field_name);

        $action = $this->action;
        if ($this->action == 'update' && $this->field_value_from == '') {
            $action = 'set';
        } else if ($this->action == 'update' && $this->field_value_to == '') {
            $action = 'clear';
        } elseif ($this->action == 'delete' && in_array('Illuminate\Database\Eloquent\SoftDeletes', class_uses($this->entity))) {
            $action = 'archive';
        }

        $user = $this->user->id !== Auth::user()->id ? $this->user->link() : trans('event.self');

        if ($this->created_at->diffInHours() === 0) {
            $period = $this->created_at->diffForHumans();
        } else {
            $period = trans('event.datePrefix').' '.$this->created_at->format('d/m/Y');
        }

        return trans('event.action.'.$action, [
            'user' => $user,
            'entity' => $this->entity->link(),
            'field_name' => strtolower($fieldName),
            'field_value_from' => $this->formatValue($this->field_name, $this->field_value_from),
            'field_value_to' => $this->formatValue($this->field_name, $this->field_value_to),
            'period' => $period,
        ]);
    }

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function entity() {
        return $this->morphTo()
            ->withTrashed();
    }

    public function formatValue($fieldName, $value) {

        if ($fieldName === 'icon') {
            $value = "<i class='fa fa-fw ".$value."'></i>";
        }

        return $value;
    }
}
