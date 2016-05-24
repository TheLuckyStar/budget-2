<?php

namespace App;

use Carbon\Carbon;

class Account extends Container
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'currency', 'deleted_at'];

    /**
     * Calculate account balance at the given date
     * @return float Account balance
     */
    public function getBalanceAttribute($date = null)
    {
        if (is_null($date)) {
            $date = Carbon::now();
        } elseif (is_string($date)) {
            $date = Carbon::parse($date);
        }

        $date->startOfDay();

        return 1024.3;
    }

    /**
     * Calculate account revenues for the given date
     * @return float Account balance
     */
    public function getRevenuesAttribute($date = null)
    {
        if (is_null($date)) {
            $date = Carbon::now();
        } elseif (is_string($date)) {
            $date = Carbon::parse($date);
        }

        $date->startOfDay();

        return 1024.3;
    }

    /**
     * Calculate account outcomes for the given date
     * @return float Account balance
     */
    public function getOutcomesAttribute($date = null)
    {
        if (is_null($date)) {
            $date = Carbon::now();
        } elseif (is_string($date)) {
            $date = Carbon::parse($date);
        }

        $date->startOfDay();

        return 1024.3;
    }

    /**
     * Calculate account main metrics for the given day
     * @return array Account metrics
     */
    public function getDailySnapshotAttribute($date = null)
    {
        return [
            'balance' => $this->getBalanceAttribute($date),
            'revenues' => $this->getRevenuesAttribute($date),
            'outcomes' => $this->getOutcomesAttribute($date),
        ];
    }
}