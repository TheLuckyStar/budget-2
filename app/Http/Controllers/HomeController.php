<?php

namespace App\Http\Controllers;

use \Auth;
use Illuminate\Http\Request;

class HomeController extends AbstractController
{
    public function getIndex(Request $request) {
        // Redirect for authenticated users
        if (Auth::check()) {
            $request->session()->reflash();
            return redirect()->action('AccountController@getIndex');
        }

        // Homepage for non authenticated users
        return view('home.guest');
    }

    public function getDemo() {
        return redirect()->action('HomeController@getIndex')->withErrors(trans('app.error.demo'));
    }
}
