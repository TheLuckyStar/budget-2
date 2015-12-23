<?php namespace App\Services\Html;

use App\Account;
use App\Envelope;
use Config;
use Illuminate\Database\Eloquent\Collection;

/**
 * Build donut chart
 */
class DonutChart extends AbstractChart
{

    /**
     * Has any relevant data been calculated
     * @return boolean True if there is some data
     */
    public function hasData() {
        return empty(array_filter(array_pluck($this->data, 'value'))) === false;
    }

    /**
     * Create an instance and process data
     * @param  object $scope Scope
     * @param  \Carbon\Carbon $date Date
     * @return self Line chart instance
     */
    public static function forge($scope, $date) {
        $chart = new self($scope, $date);

        $chart->process();

        return $chart;
    }

    /**
     * Process data and colors
     * @return void
     */
    protected function process() {
        $after = $this->date->copy()->startOfMonth();
        $before = $this->date->copy()->endOfMonth();

        if ($this->scope instanceof Account) {
            $this->processAccount($after, $before);
        }

        if ($this->scope instanceof Envelope) {
            $this->processEnvelope($after, $before);
        }

        if ($this->scope instanceof Collection) {
            $this->processCollection($before);
        }
    }

    /**
     * Process data for an account scope
     * @param  \Carbon\Carbon $after Start of month
     * @param  \Carbon\Carbon $before End of month
     * @return void
     */
    protected function processAccount($after, $before) {
        $this->colors = array_values(Config::get('budget.statusColors'));

        $this->processScopePrevMonth();
        $this->processScopeOutome($after, $before);
        $this->processScopeOutgoingTransfer($after, $before);
        $this->processScopeIncomingTransfer($after, $before);
        $this->processScopeRevenue($after, $before);
    }

    /**
     * Process data for an envelope scope
     * @param  \Carbon\Carbon $after Start of month
     * @param  \Carbon\Carbon $before End of month
     * @return void
     */
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

    /**
     * Process data for an collection scope
     * @param  \Carbon\Carbon $before End of month
     * @return void
     */
    protected function processCollection($before) {
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

    /**
     * Process data for balance of previous month
     * @return void
     */
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

    /**
     * Process data for outcome
     * @param  \Carbon\Carbon $after Start of month
     * @param  \Carbon\Carbon $before End of month
     * @return void
     */
    protected function processScopeOutome($after, $before) {
        $this->data[] = [
            'label' => trans('operation.type.outcome'),
            'value' => $this->scope->outcomes()->inPeriod($after, $before)->sum('amount'),
            'negative' => true,
        ];
    }

    /**
     * Process data for outgoing transfer
     * @param  \Carbon\Carbon $after Start of month
     * @param  \Carbon\Carbon $before End of month
     * @return void
     */
    protected function processScopeOutgoingTransfer($after, $before) {
        $this->data[] = [
            'label' => trans('operation.type.outgoingTransfer'),
            'value' => $this->scope->outgoingTransfers()->inPeriod($after, $before)->sum('amount'),
            'negative' => true,
        ];
    }

    /**
     * Process data for incoming transfer
     * @param  \Carbon\Carbon $after Start of month
     * @param  \Carbon\Carbon $before End of month
     * @return void
     */
    protected function processScopeIncomingTransfer($after, $before) {
        $this->data[] = [
            'label' => trans('operation.type.incomingTransfer'),
            'value' => $this->scope->incomingTransfers()->inPeriod($after, $before)->sum('amount'),
            'negative' => false,
        ];
    }

    /**
     * Process data for revenue
     * @param  \Carbon\Carbon $after Start of month
     * @param  \Carbon\Carbon $before End of month
     * @return void
     */
    protected function processScopeRevenue($after, $before) {
        $this->data[] = [
            'label' => trans('operation.type.revenue'),
            'value' => $this->scope->revenues()->inPeriod($after, $before)->sum('amount'),
            'negative' => false,
        ];
    }

    /**
     * Process data for income
     * @param  \Carbon\Carbon $after Start of month
     * @param  \Carbon\Carbon $before End of month
     * @return void
     */
    protected function processScopeIncome($after, $before) {
        $this->data[] = [
            'label' => trans('operation.type.income'),
            'value' => $this->scope->incomes()->inPeriod($after, $before)->sum('amount'),
            'negative' => false,
        ];
    }

}
