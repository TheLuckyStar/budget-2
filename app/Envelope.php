<?php

namespace App;

use App\Services\Eloquent\HasEvents;
use Illuminate\Database\Eloquent\Model;

class Envelope extends Model
{
    use HasEvents;
}
