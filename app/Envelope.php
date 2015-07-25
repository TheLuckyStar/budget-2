<?php

namespace App;

use App\Services\Eloquent\HasEvents;
use Illuminate\Database\Eloquent\Model;

class Envelope extends Model
{
    use HasEvents;

    /**
     * Array of field name to watch for changed on updated event
     * @var [type]
     */
    protected $watchedFieldInEvent = [
        'name',
        'icon',
    ];
}
