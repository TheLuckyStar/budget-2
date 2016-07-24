<?php

namespace App;

class Transfer extends Operation
{
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['date', 'created_at', 'updated_at'];

    /**
     * Get the origin account for the transfer.
     */
    public function accountFrom()
    {
        return $this->belongsTo(Account::class, 'from_account_id');
    }

    /**
     * Get the destination account for the transfer.
     */
    public function accountTo()
    {
        return $this->belongsTo(Account::class, 'to_account_id');
    }
}
