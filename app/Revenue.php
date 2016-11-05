<?php

namespace App;

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

    public function scopeSearch($query, $filters)
    {
        parent::scopeSearch($query, $filters);

        $query->where('date', 'IS NOT', null);

        if (array_get($filters, 'envelope_id')) {
            $query->where('envelope_id', array_get($filters, 'envelope_id'));
        }

        if (array_get($filters, 'account_id')) {
            $query->where('account_id', array_get($filters, 'account_id'));
        }
    }
}
