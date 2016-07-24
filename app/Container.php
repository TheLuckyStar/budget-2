<?php

namespace App;

use App\Factories\Carbon;
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

        $output['balance'] = $this->getBalanceAttribute();

        return $output;
    }

    /**
     * Calculate container balance for the given date
     * @return float Container balance
     */
    abstract public function getBalanceAttribute(Currency $currency = null, $date = null);

    /**
     * Generate metric development for the given month
     * @return array List of snapshots
     */
    public function getMonthlyDevelopmentAttribute(Currency $currency = null, $date = null)
    {
        $output = [];

        $start = Carbon::startOfMonth($date);
        $end = Carbon::endOfMonth($date);

        while ($start->lte($end)) {
            foreach ($this->getDailySnapshotAttribute($currency, $start) as $key => $val) {
                $output[$key][] = $val;
            }
            $start->addDay(1);
        }

        return $output;
    }

    /**
     * Generate metric development for the given year
     * @return array List of snapshots
     */
    public function getYearlyDevelopmentAttribute(Currency $currency = null, $date = null)
    {
        $output = [];

        $start = Carbon::startOfYear($date);
        $end = Carbon::endOfYear($date);

        while ($start->lte($end)) {
            foreach ($this->getMonthlySnapshotAttribute($currency, $start) as $key => $val) {
                $output[$key][] = $val;
            }
            $start->addMonth(1);
        }

        return $output;
    }

    /**
     * Calculate container main metrics for the given day
     * @return array Container metrics
     */
    abstract public function getDailySnapshotAttribute(Currency $currency = null, $date = null);

    /**
     * Calculate container main metrics for the given month
     * @return array Container metrics
     */
    abstract public function getMonthlySnapshotAttribute(Currency $currency = null, $date = null);
}
