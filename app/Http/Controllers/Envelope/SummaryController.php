<?php namespace App\Http\Controllers\Envelope;

use App\Http\Controllers\Controller;
use App\User;
use Auth;
use Carbon\Carbon;
use Config;
use Illuminate\Http\Request;

class SummaryController extends Controller
{
    public function getBalance($envelope_id) {
        $envelope = Auth::user()->envelopes()->findOrFail($envelope_id);

        $from = Carbon::now()->startOfMonth();
        $to = Carbon::now()->endOfMonth();

        $chartData = [
            [
                'label' => trans('operation.type.income'),
                'value' => $envelope->getIncomeAttribute($from, $to),
            ],
            [
                'label' => trans('operation.type.intendedOutcome', ['date' => '']),
                'value' => $envelope->getIntendedOutcomeAttribute($from, $to),
            ],
            [
                'label' => trans('operation.type.effectiveOutcome'),
                'value' => $envelope->getEffectiveOutcomeAttribute($from, $to),
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
            'colors' => json_encode(array_values($chartColors)),
        ];

        return view('envelope.summary.balance', $data);
    }

    public function getEvents($envelope_id) {
        $envelope = Auth::user()->envelopes()->findOrFail($envelope_id);

        $data = [
            'envelope' => $envelope,
            'events' => $envelope->relatedEvents()->simplePaginate(5),
        ];

        return view('envelope.summary.events', $data);
    }
}
