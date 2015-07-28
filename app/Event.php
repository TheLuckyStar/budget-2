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
        return trans('event.action.'.$this->action, [
            'user' => $this->user->link(),
            'entity' => $this->entity->link(),
            'field_name' => $this->field_name,
            'field_value_from' => $this->field_value_from,
            'field_value_to' => $this->field_value_to,
            'period' => $this->created_at->diffForHumans(),
        ]);
    }

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function entity() {
        return $this->morphTo();
    }
}
