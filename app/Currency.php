<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    /**
     * Get the accounts for the currency.
     */
    public function accounts()
    {
        return $this->hasMany(Account::class);
    }
}
