<?php namespace App\Http\Controllers\Account;

use App\Http\Controllers\AbstractController;
use Auth;
use Carbon\Carbon;
use Config;

class SummaryController extends AbstractController
{

    public function getBalance($accountId) {
        $account = Auth::user()->accounts()->findOrFail($accountId);

        $prevMonth = Carbon::now()->subMonth()->endOfMonth();
        $after     = Carbon::now()->startOfMonth();
        $before    = Carbon::now()->endOfMonth();

        $prevBalance      = $account->getBalanceAttribute(null, $prevMonth);
        $prevBalanceColor = $prevBalance < 0 ?
            Config::get('budget.statusColors.danger') : Config::get('budget.statusColors.success');

        $data = [
            [
                'label' => trans('operation.aggregate.balanceAt', ['date' => $prevMonth->formatLocalized('%d/%m/%Y')]),
                'value' => abs($prevBalance),
                'negative' => $prevBalance < 0,
            ],
            [
                'label' => trans('operation.type.outcome'),
                'value' => $account->outcomes()->inPeriod($after, $before)->sum('amount'),
                'negative' => true,
            ],
            [
                'label' => trans('operation.type.outgoingTransfer'),
                'value' => $account->outgoingTransfers()->inPeriod($after, $before)->sum('amount'),
                'negative' => true,
            ],
            [
                'label' => trans('operation.type.incomingTransfer'),
                'value' => $account->incomingTransfers()->inPeriod($after, $before)->sum('amount'),
                'negative' => false,
            ],
            [
                'label' => trans('operation.type.revenue'),
                'value' => $account->revenues()->inPeriod($after, $before)->sum('amount'),
                'negative' => false,
            ],
        ];

        $data = [
            'account' => $account,
            'data' => json_encode($data),
            'withChartData' => count(array_filter(array_pluck($data, 'value'))),
            'colors' => json_encode(array_values([$prevBalanceColor] + Config::get('budget.statusColors'))),
        ];

        return view('account.summary.balance', $data);
    }

    public function getEnvelopes($accountId) {
        $account = Auth::user()->accounts()->findOrFail($accountId);

        $data   = [];
        $colors = [];
        foreach ($account->envelopes as $envelope) {
            $balance = $envelope->balance;

            $data[] = [
                'label' => $envelope->name,
                'value' => abs($balance),
                'negative' => $balance < 0,
            ];

            $colors[] = Config::get('budget.statusColors.'.$envelope->status);
        }

        $data = [
            'account' => $account,
            'data' => json_encode($data),
            'colors' => json_encode($colors),
        ];

        return view('account.summary.envelopes', $data);
    }

    public function getEvents($accountId) {
        $account = Auth::user()->accounts()->findOrFail($accountId);

        $data = [
            'account' => $account,
            'events' => $account->relatedEvents()->simplePaginate(10),
        ];

        return view('account.summary.events', $data);
    }

}
