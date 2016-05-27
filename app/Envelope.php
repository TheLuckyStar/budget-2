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
    public function getBalanceAttribute($date = null)
    {
        $revenues = $this->getRevenuesAttribute(null, $date);
        $incomes = $this->getIncomesAttribute(null, $date);
        $outcomes = $this->getOutcomesAttribute(null, $date);

        return round($revenues + $incomes - $outcomes, 2);
    }

    /**
     * Calculate envelope revenues for the given period
     * @return float Envelope revenues
     */
    public function getRevenuesAttribute($dateFrom = null, $dateTo = null)
    {
        $query = $this->revenues()
            ->select(app('db')->raw('SUM(amount) as total'));

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

        return floatval($query->get()[0]['total']);
    }

    /**
     * Calculate envelope outcomes for the given period
     * @return float Envelope outcomes
     */
    public function getOutcomesAttribute($dateFrom = null, $dateTo = null)
    {
        $query = $this->outcomes()
            ->select(app('db')->raw('SUM(amount) as total'));

        if ($dateFrom) {
            $query->where('date', '>=', $dateFrom);
        }

        if ($dateTo) {
            $query->where('date', '<=', $dateTo);
        }

        return floatval($query->get()[0]['total']);
    }

    /**
     * Calculate envelope incomes for the given period
     * @return float Envelope incomes
     */
    public function getIncomesAttribute($dateFrom = null, $dateTo = null)
    {
        $query = $this->incomes()
            ->select(app('db')->raw('SUM(amount) as total'));

        if ($dateFrom) {
            $query->where('date', '>=', $dateFrom);
        }

        if ($dateTo) {
            $query->where('date', '<=', $dateTo);
        }

        return floatval($query->get()[0]['total']);
    }

    /**
     * Calculate main envelope metrics for the given day
     * @return array Envelope metrics
     */
    public function getDailySnapshotAttribute($date = null)
    {
        $date = Carbon::startOfDay($date);

        return [
            'balance' => $this->getBalanceAttribute($date),
            'revenues' => $this->getRevenuesAttribute($date, $date),
            'incomes' => $this->getIncomesAttribute($date, $date),
            'outcomes' => $this->getOutcomesAttribute($date, $date),
        ];
    }

    /**
     * Calculate envelope main metrics for the given month
     * @return array Envelope metrics
     */
    public function getMonthlySnapshotAttribute($date = null)
    {
        $dateFrom = Carbon::startOfMonth($date);
        $dateTo = Carbon::endOfMonth($date);

        return [
            'balance' => $this->getBalanceAttribute($dateTo),
            'revenues' => $this->getRevenuesAttribute($dateFrom, $dateTo),
            'incomes' => $this->getIncomesAttribute($dateFrom, $dateTo),
            'outcomes' => $this->getOutcomesAttribute($dateFrom, $dateTo),
        ];
    }
}
