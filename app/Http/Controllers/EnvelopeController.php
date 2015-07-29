<?php

namespace App\Http\Controllers;

use App\Envelope;
use Auth;
use Config;
use Illuminate\Http\Request;

class EnvelopeController extends Controller
{
    public function getSummary($envelope_id) {
        $envelope = Envelope::find($envelope_id);

        if (is_null($envelope) || is_null(Auth::user()->accounts()->find($envelope->account_id))) {
            return redirect()->action('AccountController@getIndex')
                ->withErrors(trans('envelope.view.notfoundMessage'));
        }

        $chartData = [
            [
                'label' => trans('income.title'),
                'value' => $envelope->income,
            ],
            [
                'label' => trans('outcome.intendedTitle'),
                'value' => $envelope->intended_outcome,
            ],
            [
                'label' => trans('outcome.effectiveTitle'),
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
            'activeTab' => 'summary',
            'chartData' => json_encode($chartData),
            'chartColors' => json_encode(array_values($chartColors)),
            'events' => $envelope->events()->paginate(Config::get('budget.paginate')),
        ];

        return view('envelope.summary', $data);
    }

    public function getOperations($envelope_id) {
        $envelope = Envelope::find($envelope_id);

        if (is_null($envelope) || is_null(Auth::user()->accounts()->find($envelope->account_id))) {
            return redirect()->action('AccountController@getIndex')
                ->withErrors(trans('envelope.view.notfoundMessage'));
        }

        $data = [
            'envelope' => $envelope,
            'activeTab' => 'operations',
        ];

        return view('envelope.operations', $data);
    }

    public function getDevelopment($envelope_id) {
        $envelope = Envelope::find($envelope_id);

        if (is_null($envelope) || is_null(Auth::user()->accounts()->find($envelope->account_id))) {
            return redirect()->action('AccountController@getIndex')
                ->withErrors(trans('envelope.view.notfoundMessage'));
        }

        $data = [
            'envelope' => $envelope,
            'activeTab' => 'development',
        ];

        return view('envelope.development', $data);
    }
}
