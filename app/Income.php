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

    public function scopeSearch($query, $filters)
    {
        parent::scopeSearch($query, $filters);

        if (array_get($filters, 'envelope_id')) {
            $query->where('envelope_id', array_get($filters, 'envelope_id'));
        }

        if (array_get($filters, 'account_id')) {
            $query->where('id', 0);
        }
    }
}
