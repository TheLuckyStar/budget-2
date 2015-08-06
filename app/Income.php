<?php

namespace App;

use App\Collections\OperationCollection;
use App\Services\Eloquent\HasEvents;
use Illuminate\Database\Eloquent\Model;

class Income extends Model
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
     * Create a new Eloquent Collection instance.
     * @param  array  $models
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function newCollection(array $models = [])
    {
        return new OperationCollection($models);
    }

    /**
     * Array of field name to watch for changed on updated event
     * @var [type]
     */
    protected $watchedFieldInEvent = [
        'amount',
    ];

    public function getAmountSymbolAttribute() {
        return '+';
    }

    public function getContextAttribute() {
        return 'success';
    }

    public function getTypeAttribute() {
        return 'revenue';
    }
}
