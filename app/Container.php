<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

abstract class Container extends Model
{
    use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    /**
     * Convert the model instance to an array.
     *
     * @return array
     */
    public function toArray()
    {
        $output = parent::toArray();

        $output['balance'] = $this->balance;

        return $output;
    }

    /**
     * Calculate container balance for the given date
     * @return float Container balance
     */
    abstract public function getBalanceAttribute($date = null);

    /**
     * Generate metric development for the given month
     * @return array List of balances
     */
    public function getMonthlyDevelopmentAttribute($date = null)
    {
        $output = [];

        if (is_null($date)) {
            $date = Carbon::now();
        } elseif (is_string($date)) {
            $date = Carbon::parse($date);
        }

        for ($date->startOfMonth(); $date->month === $date->copy()->addDay(1)->month; $date->addDay(1)) {
            foreach ($this->getDailySnapshotAttribute($date) as $key => $val) {
                $output[$key][] = $val;
            }
        }

        return $output;
    }

    /**
     * Calculate container main metrics for the given day
     * @return array Container metrics
     */
    abstract public function getDailySnapshotAttribute($date = null);
}
