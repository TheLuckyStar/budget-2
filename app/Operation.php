<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

abstract class Operation extends Model
{
    public function scopeSearch($query, $filters)
    {
        $query->selectType();
    }

    public function scopeSelectType($query)
    {
        $query->select('*')
            ->addSelect(app('db')->raw('"'.str_singular($this->getTable()).'" AS type'));
    }

    public function scopeSelectAccount($query)
    {
        $query->join(app('db')->raw('(SELECT id AS account_id, name as account_name FROM `accounts`) accounts'), function($join) {
            $join->on('accounts.account_id', '=', $this->getTable().'.account_id');
        });
    }

    public function scopeSelectEnvelope($query)
    {
        $query->join(app('db')->raw('(SELECT id AS envelope_id, name as envelope_name FROM `envelopes`) envelopes'), function($join) {
            $join->on('envelopes.envelope_id', '=', $this->getTable().'.envelope_id');
        });
    }

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
