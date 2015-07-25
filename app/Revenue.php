<?php

namespace App;

use App\Services\Eloquent\HasEvents;
use Illuminate\Database\Eloquent\Model;

class Revenue extends Model
{
    use HasEvents;

    /**
     * The attributes that should be mutated to dates.
     * @var array
     */
    protected $dates = ['date', 'created_at', 'updated_at'];

    /**
     * The attributes that should be casted to native types.
     * @var array
     */
    protected $casts = [
        'amount' => 'float',
    ];

    /**
     * Array of field name to watch for changed on updated event
     * @var [type]
     */
    protected $watchedFieldInEvent = [
        'name',
        'amount',
        'date',
    ];
}
