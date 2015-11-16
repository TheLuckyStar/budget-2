<?php

namespace App\Http\Controllers;

use \Auth;
use Illuminate\Http\Request;

class HomeController extends AbstractController
{
    public function getIndex(Request $request) {
        // Homepage for non authenticated users
        if (Auth::check() === false) {
            return view('home.guest');
        }

        $accounts = Auth::user()->nontrashedAccounts->where('deleted_at', null);

        // Redirect for authenticated users with without account
        if (empty($accounts) === 0) {
            $request->session()->reflash();
            return redirect()->action('AccountController@getAdd')
                ->withSuccess(trans('account.add.redirectMessage'));
        }

        // Redirect for authenticated users with only one account
        if (count($accounts) === 1) {
            $request->session()->reflash();
            return redirect()->action('AccountController@getIndex', head($accounts));
        }

        // Home page for authenticated users with many accounts
        $data = [
            'accounts' => $accounts,
        ];

        // Render account page layout
        return view('home.authenticated', $data);
    }

    public function getDemo() {
        return redirect()->action('HomeController@getIndex')->withErrors(trans('app.error.demo'));
    }
}
