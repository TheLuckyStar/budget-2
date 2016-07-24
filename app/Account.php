<?php

namespace App;

use App\Factories\Carbon;

class Account extends Container
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'currency_id', 'deleted_at'];

    /**
     * Get the currency for the account.
     */
    public function currency()
    {
        return $this->belongsTo(Currency::class);
    }

    /**
     * Get the revenues for the account.
     */
    public function revenues()
    {
        return $this->hasMany(Revenue::class);
    }

    /**
     * Get the outcomes for the account.
     */
    public function outcomes()
    {
        return $this->hasMany(Outcome::class);
    }

    /**
     * Get the incoming transfers for the account.
     */
    public function incomingTransfers()
    {
        return $this->hasMany(Transfer::class, 'to_account_id');
    }

    /**
     * Get the outgoing transfers for the account.
     */
    public function outgoingTransfers()
    {
        return $this->hasMany(Transfer::class, 'from_account_id');
    }

    /**
     * Calculate account balance at the given date
     * @return float Account balance
     */
    public function getBalanceAttribute(Currency $currency = null, $date = null)
    {
        if (is_null($currency)) {
            $currency = Currency::findOrFail(session('currency_id'));
        }

        if ($currency !== $this->currency) {
            $balance = $this->getBalanceAttribute($this->currency, $date);
            $rate = CurrencyRate::where('from_currency_id', $this->currency_id)
                ->where('to_currency_id', $currency->id)
                ->where('currency_rates.date', '<=', Carbon::startOfDay($date))
                ->orderBy('currency_rates.date', 'desc')
                ->first();
            return round($balance * ($rate ? $rate->rate : 1), 2);
        }
// 14461.91
        $revenues = $this->getRevenuesAttribute($currency, null, $date);
        $outcomes = $this->getOutcomesAttribute($currency, null, $date);
        $incomingTransfers = $this->getIncomingTransfersAttribute($currency, null, $date);
        $outgoingTransfers = $this->getOutgoingTransfersAttribute($currency, null, $date);

        return round($revenues + $incomingTransfers - $outcomes - $outgoingTransfers, 2);
    }

    /**
     * Calculate account revenues for the given period
     * @return float Account revenues
     */
    public function getRevenuesAttribute(Currency $currency = null, $dateFrom = null, $dateTo = null)
    {
        $query = $this->revenues()
            ->select('revenues.amount', 'accounts.currency_id')
            ->join('accounts', 'revenues.account_id', '=', 'accounts.id');

        if ($dateFrom && $dateTo) {
            $query->whereBetween('date', [$dateFrom, $dateTo]);
        } else if ($dateFrom) {
            $query->where('date', '>=', $dateFrom);
        } else if ($dateTo) {
            $query->where(function ($query) use($dateTo) {
                $query->where('date', '<=', $dateTo);
                $query->orWhere('date', null);
            });
        }

        return $query->sumConvertedTo($currency)->first()['converted_total'] ?: 0;
    }

    /**
     * Calculate account outcomes for the given period
     * @return float Account outcomes
     */
    public function getOutcomesAttribute(Currency $currency = null, $dateFrom = null, $dateTo = null)
    {
        $query = $this->outcomes()
            ->select('outcomes.amount', 'accounts.currency_id')
            ->join('accounts', 'outcomes.account_id', '=', 'accounts.id');

        if ($dateFrom) {
            $query->where('date', '>=', $dateFrom);
        }

        if ($dateTo) {
            $query->where('date', '<=', $dateTo);
        }

        return $query->sumConvertedTo($currency)->first()['converted_total'] ?: 0;
    }

    /**
     * Calculate account incoming tranfers for the given period
     * @return float Account incoming transfers
     */
    public function getIncomingTransfersAttribute(Currency $currency = null, $dateFrom = null, $dateTo = null)
    {
        $query = $this->incomingTransfers()
            ->select('transfers.amount', 'accounts.currency_id')
            ->join('accounts', 'transfers.from_account_id', '=', 'accounts.id');

        if ($dateFrom) {
            $query->where('date', '>=', $dateFrom);
        }

        if ($dateTo) {
            $query->where('date', '<=', $dateTo);
        }

        return $query->sumConvertedTo($currency)->first()['converted_total'] ?: 0;
    }

    /**
     * Calculate account outgoing tranfers for the given period
     * @return float Account outgoing transfers
     */
    public function getOutgoingTransfersAttribute(Currency $currency = null, $dateFrom = null, $dateTo = null)
    {
        $query = $this->outgoingTransfers()
            ->select('transfers.amount', 'accounts.currency_id')
            ->join('accounts', 'transfers.from_account_id', '=', 'accounts.id');

        if ($dateFrom) {
            $query->where('date', '>=', $dateFrom);
        }

        if ($dateTo) {
            $query->where('date', '<=', $dateTo);
        }

        return $query->sumConvertedTo($currency)->first()['converted_total'] ?: 0;
    }

    /**
     * Calculate main account metrics for the given day
     * @return array Account metrics
     */
    public function getDailySnapshotAttribute(Currency $currency = null, $date = null)
    {
        $date = Carbon::startOfDay($date);

        return [
            'balance' => $this->getBalanceAttribute($currency, $date),
            'revenues' => $this->getRevenuesAttribute($currency, $date, $date),
            'outcomes' => $this->getOutcomesAttribute($currency, $date, $date),
            'incomingTransfers' => $this->getIncomingTransfersAttribute($currency, $date, $date),
            'outgoingTransfers' => $this->getOutgoingTransfersAttribute($currency, $date, $date),
        ];
    }

    /**
     * Calculate account main metrics for the given month
     * @return array Account metrics
     */
    public function getMonthlySnapshotAttribute(Currency $currency = null, $date = null)
    {
        $dateFrom = Carbon::startOfMonth($date);
        $dateTo = Carbon::endOfMonth($date);

        return [
            'balance' => $this->getBalanceAttribute($currency, $dateTo),
            'revenues' => $this->getRevenuesAttribute($currency, $dateFrom, $dateTo),
            'outcomes' => $this->getOutcomesAttribute($currency, $dateFrom, $dateTo),
            'incomingTransfers' => $this->getIncomingTransfersAttribute($currency, $dateFrom, $dateTo),
            'outgoingTransfers' => $this->getOutgoingTransfersAttribute($currency, $dateFrom, $dateTo),
        ];
    }
}
