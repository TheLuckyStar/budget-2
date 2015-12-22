<?php namespace App\Services\Html;

use App\Account;
use App\Envelope;
use Carbon\Carbon;
use Config;
use Illuminate\Database\Eloquent\Collection;

class LineChart extends AbstractChart
{
    const PERIOD_ANY = 0;
    const PERIOD_MONTH = 1;
    const PERIOD_YEAR = 2;

    protected $period;

    protected function setPeriod($period) {
        $this->period = $period;

        if ($this->period === self::PERIOD_MONTH) {
            $this->date->startOfMonth();
        }

        if ($this->period === self::PERIOD_YEAR) {
            $this->date->startOfMonth()->subMonths(11);
        }
    }

    public static function forge($scope, $date, $period) {
        $chart = new self($scope, $date);

        $chart->setPeriod($period);

        $chart->process();

        return $chart;
    }

    protected function process() {
        $this->colors = [Config::get('budget.statusColors.primary')];

        if ($this->period === self::PERIOD_MONTH) {
            $this->processMonth();
        }

        if ($this->period === self::PERIOD_YEAR) {
            $this->processYear();
        }
    }

    protected function processMonth() {
        $date = $this->date->copy();

        while ($date->month === $this->date->month && $date->lte(Carbon::now())) {
            $this->data[] = ['date' => $date->toDateString()] + $this->processScopeData(null, $date);
            $date->addDay();
        }
    }

    protected function processYear() {
        $date = $this->date->copy()->startOfMonth();
        $count = 0;

        while ($date->lte(Carbon::now()) && ++$count <= 12) {
            $this->data[] = ['date' => $date->toDateString()]
                + $this->processScopeData(null, $date->copy()->endOfMonth());

            $date->addMonth();
        }
    }

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

    protected function processScopeDataCollection($after, $before) {
        $data = [];

        foreach ($this->scope as $model) {
            $data[$model->id] = $model->getBalanceAttribute($after, $before);
        }

        return $data;
    }

}
