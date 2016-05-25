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

        $start = Carbon::startOfMonth($date);
        $end = Carbon::endOfMonth($date);

        while ($start->lte($end)) {
            foreach ($this->getDailySnapshotAttribute($start) as $key => $val) {
                $output[$key][] = $val;
            }
            $start->addDay(1);
        }

        return $output;
    }

    /**
     * Calculate container main metrics for the given day
     * @return array Container metrics
     */
    abstract public function getDailySnapshotAttribute($date = null);
}
