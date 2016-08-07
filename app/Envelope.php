<?php

namespace App;

use App\Factories\Carbon;

class Envelope extends Container
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'icon', 'deleted_at'];

    /**
     * Get the revenues for the envelope.
     */
    public function revenues()
    {
        return $this->hasMany(Revenue::class);
    }

    /**
     * Get the incomes for the envelope.
     */
    public function incomes()
    {
        return $this->hasMany(Income::class);
    }

    /**
     * Get the outcomes for the envelope.
     */
    public function outcomes()
    {
        return $this->hasMany(Outcome::class);
    }

    /**
     * Calculate envelope balance at the given date
     * @return float Envelope balance
     */
    public function getBalanceAttribute(Currency $currency = null, $date = null)
    {
        $revenues = $this->getRevenuesAttribute($currency, null, $date);
        $incomes = $this->getIncomesAttribute($currency, null, $date);
        $outcomes = $this->getOutcomesAttribute($currency, null, $date);

        return round($revenues + $incomes - $outcomes, 2);
    }

    /**
     * Calculate envelope savings for the given period
     * @return float Envelope savings
     */
    public function getSavingsAttribute(Currency $currency = null, $dateFrom = null, $dateTo = null)
    {
        $revenues = $this->getRevenuesAttribute($currency, $dateFrom, $dateTo);
        $incomes = $this->getIncomesAttribute($currency, $dateFrom, $dateTo);
        $outcomes = $this->getOutcomesAttribute($currency, $dateFrom, $dateTo);

        return round($revenues + $incomes - $outcomes, 2);
    }

    /**
     * Calculate envelope relative savings for the given period
     * @return float Envelope relative savings
     */
    public function getRelativeSavingsAttribute(Currency $currency = null, $dateFrom = null, $dateTo = null)
    {
        $revenues = $this->getRevenuesAttribute($currency, $dateFrom, $dateTo);
        $incomes = $this->getIncomesAttribute($currency, $dateFrom, $dateTo);
        $outcomes = $this->getOutcomesAttribute($currency, $dateFrom, $dateTo);

        if ($revenues + $incomes == 0) {
            return 0;
        }

        return round(($revenues + $incomes - $outcomes) * 100  / ($revenues + $incomes), 2);
    }

    /**
     * Calculate envelope revenues for the given period
     * @return float Envelope revenues
     */
    public function getRevenuesAttribute(Currency $currency = null, $dateFrom = null, $dateTo = null)
    {
        $query = $this->revenues()
            ->select('revenues.amount', 'accounts.currency_id')
            ->join('accounts', 'revenues.account_id', '=', 'accounts.id');

        if ($dateFrom) {
            $query->where('date', '>=', $dateFrom);
        }

        if ($dateTo) {
            $query->where('date', '<=', $dateTo);
        }

        return floatval($query->sumConvertedTo($currency)->first()['converted_total'] ?: 0);
    }

    /**
     * Calculate envelope outcomes for the given period
     * @return float Envelope outcomes
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

        return floatval($query->sumConvertedTo($currency)->first()['converted_total'] ?: 0);
    }

    /**
     * Calculate envelope incomes for the given period
     * @return float Envelope incomes
     */
    public function getIncomesAttribute(Currency $currency = null, $dateFrom = null, $dateTo = null)
    {
        $query = $this->incomes();

        if ($dateFrom) {
            $query->where('date', '>=', $dateFrom);
        }

        if ($dateTo) {
            $query->where('date', '<=', $dateTo);
        }

        return floatval($query->sumConvertedTo($currency)->first()['converted_total']);
    }

    /**
     * Calculate envelope main metrics for the given month
     * @return array Envelope metrics
     */
    public function getMonthlySnapshotAttribute(Currency $currency = null, $date = null)
    {
        $dateFrom = Carbon::startOfMonth($date);
        $dateTo = Carbon::endOfMonth($date);

        return [
            'balance' => $this->getBalanceAttribute($currency, $dateTo),
            'revenues' => $this->getRevenuesAttribute($currency, $dateFrom, $dateTo),
            'incomes' => $this->getIncomesAttribute($currency, $dateFrom, $dateTo),
            'outcomes' => $this->getOutcomesAttribute($currency, $dateFrom, $dateTo),
            'savings' => $this->getSavingsAttribute($currency, $dateFrom, $dateTo),
            'relative_savings' => $this->getRelativeSavingsAttribute($currency, $dateFrom, $dateTo),
        ];
    }
}
