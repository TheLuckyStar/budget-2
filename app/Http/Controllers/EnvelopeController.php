<?php

namespace App\Http\Controllers;

use App\Envelope;
use Auth;
use Illuminate\Http\Request;

/**
 * Envelope management page
 */
class EnvelopeController extends AbstractController
{

    /**
     * Render tabs layout
     * @param  string $envelopeId Envelope primary key
     * @param  string $activeTab Name of the active tab
     * @return Illuminate\View\View|\Illuminate\Contracts\View\Factory View
     */
    public function getView($envelopeId, $activeTab = 'summary') {
        $envelope = Auth::user()->envelopes()->findOrFail($envelopeId);

        $data = [
            'envelope' => $envelope,
            'activeTab' => $activeTab,
        ];

        return view('envelope.index', $data);
    }

    /**
     * Render add envelope form
     * @param  string $accountId Account primary key
     * @return Illuminate\View\View|\Illuminate\Contracts\View\Factory View
     */
    public function getAdd($accountId) {
        $account = Auth::user()->accounts()->find($accountId);

        if (is_null($account)) {
            return redirect()->action('HomeController@getIndex')
                ->withErrors(trans('account.index.notfoundMessage'));
        }

        $data = [
            'account' => $account,
        ];

        return view('envelope.add', $data);
    }

    /**
     * Add new envelope
     * @param  \Illuminate\Http\Request $request
     * @param  string $accountId Account primary key
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postAdd(Request $request, $accountId) {
        $account = Auth::user()->accounts()->find($accountId);

        if (is_null($account)) {
            return redirect()->action('HomeController@getIndex')
                ->withErrors(trans('account.index.notfoundMessage'));
        }

        $this->validate($request, [
            'name' => 'string|required|unique:envelopes,name,NULL,id,account_id,'.$account->id,
            'default_income' => 'numeric',
            'icon' => 'string',
        ]);

        $envelope = Envelope::create($request->only(['name', 'default_income', 'icon']));
        $account->envelopes()->save($envelope);

        return redirect()->action('EnvelopeController@getView', [$envelope])
            ->withSuccess(trans('envelope.add.successMessage', ['envelope' => $envelope]));
    }

    /**
     * Render update envelope form
     * @param  string $envelopeId Envelope primary key
     * @return Illuminate\View\View|\Illuminate\Contracts\View\Factory View
     */
    public function getUpdate($envelopeId) {
        $envelope = Envelope::withTrashed()->find($envelopeId);

        if (is_null($envelope) || is_null(Auth::user()->accounts()->find($envelope->account_id))) {
            return redirect()->action('HomeController@getIndex')
                ->withErrors(trans('envelope.view.notfoundMessage'));
        }

        $data = [
            'envelope' => $envelope,
        ];

        return view('envelope.update', $data);
    }

    /**
     * Update existing envelope
     * @param  \Illuminate\Http\Request $request
     * @param  string $envelopeId Envelope primary key
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postUpdate(Request $request, $envelopeId) {
        $envelope = Envelope::withTrashed()->find($envelopeId);

        if (is_null($envelope) || is_null(Auth::user()->accounts()->find($envelope->account_id))) {
            return redirect()->action('HomeController@getIndex')
                ->withErrors(trans('envelope.view.notfoundMessage'));
        }

        $this->validate($request, [
            'name' => 'string|required|unique:envelopes,name,'.$envelope->id.',id,account_id,'.$envelope->account->id,
            'default_income' => 'numeric',
            'icon' => 'string',
        ]);

        $envelope->fill($request->only(['name', 'default_income', 'icon']));
        $envelope->save();

        return redirect()->action('EnvelopeController@getView', $envelope)
            ->withSuccess(trans('envelope.update.successMessage', ['envelope' => $envelope]));
    }

    /**
     * Delete existing envelope (the envelope is actually archived)
     * @param  string $envelopeId Envelope primary key
     * @return \Illuminate\Http\RedirectResponse
     */
    public function getDelete($envelopeId) {
        $envelope = Envelope::find($envelopeId);

        if (is_null($envelope) || is_null(Auth::user()->accounts()->find($envelope->account_id))) {
            return redirect()->action('HomeController@getIndex')
                ->withErrors(trans('envelope.view.notfoundMessage'));
        }

        $envelope->delete();

        return redirect()->action('EnvelopeController@getView', $envelope)
            ->withSuccess(trans('envelope.delete.successMessage', ['envelope' => $envelope]));
    }

    /**
     * Restore archived envelope
     * @param  string $envelopeId Envelope primary key
     * @return \Illuminate\Http\RedirectResponse
     */
    public function getRestore($envelopeId) {
        $envelope = Envelope::onlyTrashed()->find($envelopeId);

        if (is_null($envelope) || is_null(Auth::user()->accounts()->find($envelope->account_id))) {
            return redirect()->action('HomeController@getIndex')
                ->withErrors(trans('envelope.view.notfoundMessage'));
        }

        $envelope->restore();

        return redirect()->action('EnvelopeController@getView', $envelope)
            ->withSuccess(trans('envelope.restore.successMessage', ['envelope' => $envelope]));
    }

}
