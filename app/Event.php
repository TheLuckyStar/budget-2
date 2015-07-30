<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
        }

        return trans('event.action.'.$action, [
            'user' => $this->user->link(),
            'entity' => $this->entity->link(),
            'field_name' => strtolower($fieldName),
            'field_value_from' => $this->formatValue($this->field_name, $this->field_value_from),
            'field_value_to' => $this->formatValue($this->field_name, $this->field_value_to),
            'period' => $this->created_at->diffForHumans(),
        ]);
    }

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function entity() {
        return $this->morphTo();
    }

    public function formatValue($fieldName, $value) {

        if ($fieldName === 'icon') {
            $value = "<i class='fa fa-fw ".$value."'></i>";
        }

        return $value;
    }
}
