<?php

namespace App\Http\Controllers;

use App\Envelope;
use Auth;
use Illuminate\Http\Request;

class EnvelopeController extends Controller
{
    public function getView($envelope_id, $activeTab = 'summary') {
        $envelope = Auth::user()->envelopes()->findOrFail($envelope_id);

        $data = [
            'envelope' => $envelope,
            'activeTab' => $activeTab,
        ];

        return view('envelope.index', $data);
    }

    /**
     * Render add envelope form
     * @return Illuminate\Http\Response View to render
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

        return redirect()->action('EnvelopeController@getView', [$envelope])
            ->withSuccess(trans('envelope.add.successMessage', ['envelope' => $envelope]));
    }



    /**
     * Render update envelope form
     * @return Illuminate\Http\Response View to render
     */
    public function getUpdate($envelope_id) {
        $envelope = Envelope::withTrashed()->find($envelope_id);

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
        $envelope = Envelope::withTrashed()->find($envelope_id);

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

        return redirect()->action('EnvelopeController@getView', $envelope)
            ->withSuccess(trans('envelope.update.successMessage', ['envelope' => $envelope]));
    }



    public function getDelete($envelope_id) {
        $envelope = Envelope::find($envelope_id);

        if (is_null($envelope) || is_null(Auth::user()->accounts()->find($envelope->account_id))) {
            return redirect()->action('AccountController@getIndex')
                ->withErrors(trans('envelope.view.notfoundMessage'));
        }

        $envelope->delete();

        return redirect()->action('EnvelopeController@getView', $envelope)
            ->withSuccess(trans('envelope.delete.successMessage', ['envelope' => $envelope]));
    }



    public function getRestore($envelope_id) {
        $envelope = Envelope::onlyTrashed()->find($envelope_id);

        if (is_null($envelope) || is_null(Auth::user()->accounts()->find($envelope->account_id))) {
            return redirect()->action('AccountController@getIndex')
                ->withErrors(trans('envelope.view.notfoundMessage'));
        }

        $envelope->restore();

        return redirect()->action('EnvelopeController@getView', $envelope)
            ->withSuccess(trans('envelope.restore.successMessage', ['envelope' => $envelope]));
    }

}
