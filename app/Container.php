<?php

namespace App;

use App\Factories\Carbon;
use Illuminate\Database\Eloquent\Collection;
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

        $output['state'] = $this->monthly_snapshot;

        return $output;
    }

    /**
     * Calculate container balance for the given date
     * @return float Container balance
     */
    abstract public function getBalanceAttribute(Currency $currency = null, $date = null);

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
     * Combine yearly metric development for the given containers
     * @param  Collection $containers Containerss to combine the development
     * @return array Combined snapshots
     */
    static public function combineYearlyDevelopment(Collection $containers, Currency $currency = null, $date = null)
    {
        $output = [];

        $start = Carbon::startOfYear($date);
        $end = Carbon::endOfYear($date);

        while ($start->lte($end)) {
            foreach (static::combineMonthlyDevelopment($containers, $currency, $start) as $key => $val) {
                $output[$key][] = $val;
            }
            $start->addMonth(1);
        }

        return $output;
    }

    /**
     * Combine monthly metric development for the given containers
     * @param  Collection $containers Containers to coombine the development
     * @return array Combined snapshots
     */
    static public function combineMonthlyDevelopment(Collection $containers, Currency $currency = null, $date = null)
    {
        return $containers->map(function (Container $container) use ($currency, $date) {
            return $container->getMonthlySnapshotAttribute($currency, $date);
        })->reduce(function ($combinedContainers, $containerValues) {
            if (is_null($combinedContainers)) {
                return $containerValues;
            }
            return collect($containerValues)->map(function ($monthValue, $type) use ($combinedContainers) {
                return $combinedContainers[$type] + $monthValue;
            });
        });
    }

    /**
     * Calculate container main metrics for the given month
     * @return array Container metrics
     */
    abstract public function getMonthlySnapshotAttribute(Currency $currency = null, $date = null);
}
