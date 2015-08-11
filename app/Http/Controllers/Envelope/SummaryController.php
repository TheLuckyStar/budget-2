<?php namespace App\Http\Controllers\Envelope;

use App\Http\Controllers\Controller;
use App\User;
use Auth;
use Config;
use Illuminate\Http\Request;

class SummaryController extends Controller
{
    public function getBalance($envelope_id) {
        $envelope = Auth::user()->envelopes()->findOrFail($envelope_id);

        $chartData = [
            [
                'label' => trans('operation.type.income'),
                'value' => $envelope->income,
            ],
            [
                'label' => trans('operation.type.intendedOutcome', ['date' => '']),
                'value' => $envelope->intended_outcome,
            ],
            [
                'label' => trans('operation.type.effectiveOutcome'),
                'value' => $envelope->effective_outcome,
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
