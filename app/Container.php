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
     * Combine yearly metric development for the given envelopes
     * @param  Collection $envelopes Envelopes to coombine the development
     * @return array Combined snapshots
     */
    static public function combineYearlyDevelopment(Collection $envelopes, Currency $currency = null, $date = null)
    {
        $output = [];

        $start = Carbon::startOfYear($date);
        $end = Carbon::endOfYear($date);

        while ($start->lte($end)) {
            foreach (static::combineMonthlyDevelopment($envelopes, $currency, $start) as $key => $val) {
                $output[$key][] = $val;
            }
            $start->addMonth(1);
        }

        return $output;

        return $envelopes->map(function (Envelope $envelope) use ($currency, $date) {
            return $envelope->getYearlyDevelopmentAttribute($currency, $date);
        })->reduce(function ($combinedEnvelopes, $envelopeValues) {
            if (is_null($combinedEnvelopes)) {
                return $envelopeValues;
            }
            return collect($envelopeValues)->map(function ($yearValues, $type) use ($combinedEnvelopes) {
                return collect($yearValues)->map(function ($monthValue, $monthIndex) use ($combinedEnvelopes, $type) {
                    return $combinedEnvelopes[$type][$monthIndex] + $monthValue;
                });
            });
        });
    }

    /**
     * Combine monthly metric development for the given envelopes
     * @param  Collection $envelopes Envelopes to coombine the development
     * @return array Combined snapshots
     */
    static public function combineMonthlyDevelopment(Collection $envelopes, Currency $currency = null, $date = null)
    {
        return $envelopes->map(function (Envelope $envelope) use ($currency, $date) {
            return $envelope->getMonthlySnapshotAttribute($currency, $date);
        })->reduce(function ($combinedEnvelopes, $envelopeValues) {
            if (is_null($combinedEnvelopes)) {
                return $envelopeValues;
            }
            return collect($envelopeValues)->map(function ($monthValue, $type) use ($combinedEnvelopes) {
                return $combinedEnvelopes[$type] + $monthValue;
            });
        });
    }

    /**
     * Calculate container main metrics for the given month
     * @return array Container metrics
     */
    abstract public function getMonthlySnapshotAttribute(Currency $currency = null, $date = null);
}
