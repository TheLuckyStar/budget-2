<?php

namespace App\Http\Controllers;

use App\Account;
use Auth;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function getIndex(Request $request) {
        $account = Auth::user()->accounts()->first();

        // Redirect to first account if exists
        if ($account instanceof Account) {
            $request->session()->reflash();
            return redirect()->action('AccountController@getView', $account);
        }

        // Redirect to add form if no account exist for user
    }

    public function getView($account_id) {
        $account = Auth::user()->accounts()->find($account_id);

        if (is_null($account)) {
            return redirect()->action('AccountController@getIndex')
                ->withErrors(trans('account.view.notfoundMessage'));
        }

        $data = [
            'account' => $account,
        ];

        return view('account.view', $data);
    }
}
