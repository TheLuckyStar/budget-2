<?php namespace App\Http\Controllers\Envelope;

use App\Http\Controllers\AbstractController;
use App\User;
use Auth;
use Carbon\Carbon;
use Config;
use Illuminate\Http\Request;

class SummaryController extends AbstractController
{
    public function getBalance($envelopeId) {
        $envelope = Auth::user()->envelopes()->findOrFail($envelopeId);

        $after  = Carbon::now()->startOfMonth();
        $before = Carbon::now()->endOfMonth();

        $chartData = [
            [
                'label' => trans('operation.type.income'),
                'value' => $envelope->incomes()->inPeriod($after, $before)->sum('amount'),
            ],
            [
                'label' => trans('operation.type.intendedOutcome', ['date' => '']),
                'value' => $envelope->outcomes()->intended()->inPeriod($after, $before)->sum('amount'),
            ],
            [
                'label' => trans('operation.type.effectiveOutcome'),
                'value' => $envelope->outcomes()->intended()->inPeriod($after, $before)->sum('amount'),
            ],
        ];

        $chartColors = [
            Config::get('budget.statusColors.success'),
            Config::get('budget.statusColors.warning'),
            Config::get('budget.statusColors.danger'),
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
            'events' => $envelope->relatedEvents()->simplePaginate(5),
        ];

        return view('envelope.summary.events', $data);
    }
}
