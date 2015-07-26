<?php

namespace App\Http\Controllers;

use App\Envelope;
use Auth;
use Illuminate\Http\Request;

class EnvelopeController extends Controller
{
    public function getView($envelope_id) {
        $envelope = Envelope::find($envelope_id);

        if (is_null($envelope) || is_null(Auth::user()->accounts()->find($envelope->account_id))) {
            return redirect()->action('AccountController@getIndex')
                ->withErrors(trans('envelope.view.notfoundMessage'));
        }

        $data = [
            'envelope' => $envelope,
        ];

        return view('envelope.view', $data);
    }
}
