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
    protected $fillable = ['name', 'currency', 'deleted_at'];

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
     * Calculate account balance at the given date
     * @return float Account balance
     */
    public function getBalanceAttribute($date = null)
    {
        $revenues = $this->getRevenuesAttribute(null, $date);
        $outcomes = $this->getOutcomesAttribute(null, $date);

        return $revenues - $outcomes;
    }

    /**
     * Calculate account revenues for the given period
     * @return float Account balance
     */
    public function getRevenuesAttribute($dateFrom = null, $dateTo = null)
    {
        $query = $this->revenues()
            ->select(app('db')->raw('SUM(amount) as total'));

        if ($dateFrom) {
            $query->where('date', '>=', $dateFrom);
        }

        if ($dateTo) {
            $query->where('date', '<=', $dateTo);
        }

        return intval($query->get()[0]['total']);
    }

    /**
     * Calculate account outcomes for the given period
     * @return float Account balance
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

        return intval($query->get()[0]['total']);
    }

    /**
     * Calculate main account metrics for the given day
     * @return array Account metrics
     */
    public function getDailySnapshotAttribute($date = null)
    {
        $date = Carbon::startOfDay($date);

        return [
            'balance' => $this->getBalanceAttribute($date),
            'revenues' => $this->getRevenuesAttribute($date, $date),
            'outcomes' => $this->getOutcomesAttribute($date, $date),
        ];
    }
}
