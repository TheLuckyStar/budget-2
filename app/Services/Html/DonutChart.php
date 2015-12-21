<?php namespace App\Services\Html;

use App\Account;
use App\Envelope;
use Carbon\Carbon;
use Config;
use Illuminate\Database\Eloquent\Collection;

class DonutChart extends AbstractChart
{

    public function hasData() {
        return empty(array_filter(array_pluck($this->data, 'value'))) === false;
    }

    public static function forge($scope, $date) {
        $chart = new self($scope, $date);

        $chart->process();

        return $chart;
    }

    protected function process() {
        $after = $this->date->copy()->startOfMonth();
        $before = $this->date->copy()->endOfMonth();

        if ($this->scope instanceof Account) {
            $this->processAccount($after, $before);
        }

        if ($this->scope instanceof Envelope) {
            $this->processEnvelope($after, $before);
        }

        if ($this->scope instanceof Collection && $this->scope->first() instanceof Envelope) {
            $this->processEnvelopes($after, $before);
        }

        if ($this->scope instanceof Collection && $this->scope->first() instanceof Account) {
            $this->processAccounts($after, $before);
        }
    }

    protected function processAccount($after, $before) {
        $this->colors = array_values(Config::get('budget.statusColors'));

        $this->processScopePrevMonth();
        $this->processScopeOutome($after, $before);
        $this->processScopeOutgoingTransfer($after, $before);
        $this->processScopeIncomingTransfer($after, $before);
        $this->processScopeRevenue($after, $before);
    }

    protected function processEnvelope($after, $before) {
        $this->colors = [
            Config::get('budget.statusColors.danger'),
            Config::get('budget.statusColors.success'),
            Config::get('budget.statusColors.success'),
        ];

        $this->processScopePrevMonth();
        $this->processScopeOutome($after, $before);
        $this->processScopeRevenue($after, $before);
        $this->processScopeIncome($after, $before);
    }

    protected function processEnvelopes($after, $before) {
        foreach ($this->scope as $model) {
            $balance = $model->getBalanceAttribute(null, $before);

            $this->data[] = [
                'label' => $model->name,
                'value' => abs($balance),
                'negative' => $balance < 0,
            ];

            $this->colors[] = Config::get('budget.statusColors.'.$model->getStatusAttribute(null, $before));
        }
    }

    protected function processAccounts($after, $before) {
        foreach ($this->scope as $model) {
            $balance = $model->getBalanceAttribute(null, $before);

            $this->data[] = [
                'label' => $model->name,
                'value' => abs($balance),
                'negative' => $balance < 0,
            ];

            $this->colors[] = Config::get('budget.statusColors.'.$model->getStatusAttribute(null, $before));
        }
    }

    protected function processScopePrevMonth() {
        $prevMonth = $this->date->copy()->subMonth()->endOfMonth();
        $prevBalance = $this->scope->getBalanceAttribute(null, $prevMonth);

        $this->data[] = [
            'label' => trans('operation.aggregate.balanceAt', ['date' => $prevMonth->formatLocalized('%d/%m/%Y')]),
            'value' => abs($prevBalance),
            'negative' => $prevBalance < 0,
        ];

        array_unshift($this->colors, $prevBalance < 0 ?
            Config::get('budget.statusColors.danger') : Config::get('budget.statusColors.success'));
    }

    protected function processScopeOutome($after, $before) {
        $this->data[] = [
            'label' => trans('operation.type.outcome'),
            'value' => $this->scope->outcomes()->inPeriod($after, $before)->sum('amount'),
            'negative' => true,
        ];
    }

    protected function processScopeOutgoingTransfer($after, $before) {
        $this->data[] = [
            'label' => trans('operation.type.outgoingTransfer'),
            'value' => $this->scope->outgoingTransfers()->inPeriod($after, $before)->sum('amount'),
            'negative' => true,
        ];
    }

    protected function processScopeIncomingTransfer($after, $before) {
        $this->data[] = [
            'label' => trans('operation.type.incomingTransfer'),
            'value' => $this->scope->incomingTransfers()->inPeriod($after, $before)->sum('amount'),
            'negative' => false,
        ];
    }

    protected function processScopeRevenue($after, $before) {
        $this->data[] = [
            'label' => trans('operation.type.revenue'),
            'value' => $this->scope->revenues()->inPeriod($after, $before)->sum('amount'),
            'negative' => false,
        ];
    }

    protected function processScopeIncome($after, $before) {
        $this->data[] = [
            'label' => trans('operation.type.income'),
            'value' => $this->scope->incomes()->inPeriod($after, $before)->sum('amount'),
            'negative' => false,
        ];
    }

}
