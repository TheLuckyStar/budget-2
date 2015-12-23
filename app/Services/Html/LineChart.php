<?php namespace App\Services\Html;

use App\Account;
use App\Envelope;
use Carbon\Carbon;
use Config;
use Illuminate\Database\Eloquent\Collection;

/**
 * Build line chart
 */
class LineChart extends AbstractChart
{
    const PERIOD_ANY = 0;
    const PERIOD_MONTH = 1;
    const PERIOD_YEAR = 2;

    /**
     * Type of period
     * @var int
     */
    protected $period;

    /**
     * Set period attributes and update date to the start of the period
     * @param int $period Type of period
     * @return void
     */
    protected function setPeriod($period) {
        $this->period = $period;

        if ($this->period === self::PERIOD_MONTH) {
            $this->date->startOfMonth();
        }

        if ($this->period === self::PERIOD_YEAR) {
            $this->date->startOfMonth()->subMonths(11);
        }
    }

    /**
     * Create an instance and process data
     * @param  object $scope Scope
     * @param  \Carbon\Carbon $date Date
     * @param  int $period Period
     * @return self Line chart instance
     */
    public static function forge($scope, $date, $period) {
        $chart = new self($scope, $date);

        $chart->setPeriod($period);

        $chart->process();

        return $chart;
    }

    /**
     * Process data and colors
     * @return void
     */
    protected function process() {
        $this->colors = [Config::get('budget.statusColors.primary')];

        if ($this->period === self::PERIOD_MONTH) {
            $this->processMonth();
        }

        if ($this->period === self::PERIOD_YEAR) {
            $this->processYear();
        }
    }

    /**
     * Process data for a month period
     * @return void
     */
    protected function processMonth() {
        $date = $this->date->copy();

        while ($date->month === $this->date->month && $date->lte(Carbon::now())) {
            $this->data[] = ['date' => $date->toDateString()] + $this->processScopeData(null, $date);
            $date->addDay();
        }
    }

    /**
     * Process data for a year period
     * @return void
     */
    protected function processYear() {
        $date = $this->date->copy()->startOfMonth();
        $count = 0;

        while ($date->lte(Carbon::now()) && ++$count <= 12) {
            $this->data[] = ['date' => $date->toDateString()]
                + $this->processScopeData(null, $date->copy()->endOfMonth());

            $date->addMonth();
        }
    }

    /**
     * Get data for a given date interval
     * @param  \Carbon\Carbon|null $after Start of period
     * @param  \Carbon\Carbon|null $before End of period
     * @return array
     */
    protected function processScopeData($after, $before) {
        if ($this->scope instanceof Account) {
            return ['value' => $this->scope->getEnvelopesBalanceAttribute($after, $before)];
        }

        if ($this->scope instanceof Envelope) {
            return ['value' => $this->scope->getBalanceAttribute($after, $before)];
        }

        if ($this->scope instanceof Collection) {
            return $this->processScopeDataCollection($after, $before);
        }
    }

    /**
     * Get data for a given date interval for a collection
     * @param  \Carbon\Carbon|null $after Start of period
     * @param  \Carbon\Carbon|null $before End of period
     * @return array
     */
    protected function processScopeDataCollection($after, $before) {
        $data = [];

        foreach ($this->scope as $model) {
            $data[$model->id] = $model->getBalanceAttribute($after, $before);
        }

        return $data;
    }

}
