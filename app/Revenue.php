<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Revenue extends Operation
{
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['date', 'created_at', 'updated_at'];

    /**
     * Get the account for the revenue.
     */
    public function account()
    {
        return $this->belongsTo(Account::class);
    }
}
