<?php

namespace App;

class Income extends Operation
{
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['date', 'created_at', 'updated_at'];

    /**
     * Get the envelope for the income.
     */
    public function envelope()
    {
        return $this->belongsTo(Envelope::class);
    }

    /**
     * Get the currency for the income.
     */
    public function currency()
    {
        return $this->belongsTo(Currency::class);
    }
}
