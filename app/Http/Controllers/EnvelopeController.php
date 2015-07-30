<?php

namespace App\Http\Controllers;

use App\Envelope;
use Auth;
use Config;
use Illuminate\Http\Request;

class EnvelopeController extends Controller
{
    /**
     * Render add envelope form
     * @return Illuminate/Http/Response View to render
     */
    public function getAdd($account_id) {
        $account = Auth::user()->accounts()->find($account_id);

        if (is_null($account)) {
            return redirect()->action('AccountController@getIndex')
                ->withErrors(trans('account.index.notfoundMessage'));
        }

        $data = [
            'account' => $account,
        ];

        return view('envelope.add', $data);
    }

    public function postAdd(Request $request, $account_id) {
        $account = Auth::user()->accounts()->find($account_id);

        if (is_null($account)) {
            return redirect()->action('AccountController@getIndex')
                ->withErrors(trans('account.index.notfoundMessage'));
        }

        $this->validate($request, [
            'name' => 'string|required|unique:envelopes,name,NULL,id,account_id,'.$account->id,
            'icon' => 'string',
        ]);

        $envelope = Envelope::create($request->only(['name', 'icon']));
        $account->envelopes()->save($envelope);

        return redirect()->action('EnvelopeController@getSummary', $envelope)
            ->withSuccess(trans('envelope.add.successMessage', ['envelope' => $envelope]));
    }



    /**
     * Render update envelope form
     * @return Illuminate/Http/Response View to render
     */
    public function getUpdate($envelope_id) {
        $envelope = Envelope::find($envelope_id);

        if (is_null($envelope) || is_null(Auth::user()->accounts()->find($envelope->account_id))) {
            return redirect()->action('AccountController@getIndex')
                ->withErrors(trans('envelope.view.notfoundMessage'));
        }

        $data = [
            'envelope' => $envelope,
        ];

        return view('envelope.update', $data);
    }

    public function postUpdate(Request $request, $envelope_id) {
        $envelope = Envelope::find($envelope_id);

        if (is_null($envelope) || is_null(Auth::user()->accounts()->find($envelope->account_id))) {
            return redirect()->action('AccountController@getIndex')
                ->withErrors(trans('envelope.view.notfoundMessage'));
        }

        $this->validate($request, [
            'name' => 'string|required|unique:envelopes,name,'.$envelope->id.',id,account_id,'.$envelope->account->id,
            'icon' => 'string',
        ]);

        $envelope->fill($request->only(['name', 'icon']));
        $envelope->save();

        return redirect()->action('EnvelopeController@getSummary', $envelope)
            ->withSuccess(trans('envelope.update.successMessage', ['envelope' => $envelope]));
    }



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
