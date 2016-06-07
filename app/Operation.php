<?php

namespace App;

use App\Factories\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

abstract class Operation extends Model
{
    public function scopeConvertedTo($query, Currency $currency)
    {
        $currencyRate = CurrencyRate::select('rate')
            ->where('currency_id', app('db')->raw($currency->id))
            ->where('currency_rates.date', '>=', app('db')->raw('DATE_FORMAT(revenues.date, "%Y-%m-01")'))
            ->orWhereNull('revenues.date')
            ->orderBy('currency_rates.date')
            ->limit(1)
            ->toSql();

        $select = app('db')->raw('amount * ('.$currencyRate.') AS converted_amount');

        return $query->addSelect($select);
    }

    public function scopeSumConvertedTo($query, Currency $currency)
    {
        $currencyRate = CurrencyRate::select('rate')
            ->where('currency_id', app('db')->raw($currency->id))
            ->where('currency_rates.date', '>=', app('db')->raw('DATE_FORMAT(revenues.date, "%Y-%m-01")'))
            ->orWhereNull('revenues.date')
            ->orderBy('currency_rates.date')
            ->limit(1)
            ->toSql();

        $select = app('db')->raw('SUM(amount * ('.$currencyRate.')) AS converted_total');

        return $query->addSelect($select);
    }
}
