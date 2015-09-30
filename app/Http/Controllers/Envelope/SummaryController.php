<?php namespace App\Http\Controllers\Envelope;

use App\Http\Controllers\AbstractController;
use Auth;
use Carbon\Carbon;
use Config;

class SummaryController extends AbstractController
{
    public function getBalance($envelopeId) {
        $envelope = Auth::user()->envelopes()->findOrFail($envelopeId);

        $prevMonth = Carbon::now()->subMonth()->endOfMonth();
        $after     = Carbon::now()->startOfMonth();
        $before    = Carbon::now()->endOfMonth();

        $prevBalance = $envelope->getBalanceAttribute(null, $prevMonth);

        $chartData = [
            [
                'label' => trans('operation.aggregate.balanceAt', ['date' => $prevMonth->formatLocalized('%d/%m/%Y')]),
                'value' => abs($prevBalance),
                'negative' => $prevBalance < 0,
            ],
            [
                'label' => trans('operation.type.outcome'),
                'value' => $envelope->outcomes()->inPeriod($after, $before)->sum('amount'),
                'negative' => true,
            ],
            [
                'label' => trans('operation.type.income'),
                'value' => $envelope->incomes()->inPeriod($after, $before)->sum('amount'),
                'negative' => false,
            ],
        ];

        $chartColors = [
            $prevBalance < 0 ? Config::get('budget.statusColors.danger') : Config::get('budget.statusColors.success'),
            Config::get('budget.statusColors.danger'),
            Config::get('budget.statusColors.success'),
        ];

        $data = [
            'envelope' => $envelope,
            'data' => json_encode($chartData),
            'withChartData' => count(array_filter(array_pluck($chartData, 'value'))),
            'colors' => json_encode(array_values($chartColors)),
        ];

        return view('envelope.summary.balance', $data);
    }

    public function getEvents($envelopeId) {
        $envelope = Auth::user()->envelopes()->findOrFail($envelopeId);

        $data = [
            'envelope' => $envelope,
            'events' => $envelope->relatedEvents()->simplePaginate(10),
        ];

        return view('envelope.summary.events', $data);
    }
}
