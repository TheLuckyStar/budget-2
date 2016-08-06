<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

abstract class Operation extends Model
{
    public function scopeConvertedTo($query, Currency $currency = null)
    {
        if (is_null($currency)) {
            $currency = Currency::findOrFail(session('currency_id'));
        }

        $currencyRate = CurrencyRate::select('rate')
            ->where('from_currency_id', app('db')->raw('currency_id'))
            ->where('to_currency_id', app('db')->raw($currency->id))
            ->where(function ($query) {
                $query->where(
                    'currency_rates.date',
                    '<=',
                    app('db')->raw('DATE_FORMAT('.$this->getTable().'.date, "%Y-%m-01")')
                )
                ->orWhereNull($this->getTable().'.date');
            })
            ->orderBy('currency_rates.date', 'DESC')
            ->limit(1)
            ->toSql();

        $select = app('db')->raw('amount * COALESCE(('.$currencyRate.'), 1) AS converted_amount');

        return $query->addSelect($select);
    }

    public function scopeSumConvertedTo($query, Currency $currency = null)
    {
        if (is_null($currency)) {
            $currency = Currency::findOrFail(session('currency_id'));
        }

        $currencyRate = CurrencyRate::select('rate')
            ->where('from_currency_id', app('db')->raw('currency_id'))
            ->where('to_currency_id', app('db')->raw($currency->id))
            ->where(function ($query) {
                $query->where(
                    'currency_rates.date',
                    '<=',
                    app('db')->raw('DATE_FORMAT('.$this->getTable().'.date, "%Y-%m-01")')
                )
                ->orWhereNull($this->getTable().'.date');
            })
            ->orderBy('currency_rates.date', 'DESC')
            ->limit(1)
            ->toSql();

        $select = app('db')->raw('SUM(amount * COALESCE(('.$currencyRate.'), 1)) AS converted_total');

        return $query->addSelect($select);
    }
}
