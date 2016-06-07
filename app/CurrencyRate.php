<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CurrencyRate extends Model
{
    /**
     * Get the accounts for the currency.
     */
    public function currency()
    {
        return $this->belongsTo(Currency::class);
    }
}
