<?php

namespace App\Http\Controllers;

use \Auth;

class HomeController extends Controller
{
    public function getIndex() {
        if (Auth::check()) {
            // Homepage for authenticated users
            return view('home.authenticated');
        }

        // Homepage for non authenticated users
        return view('home.guest');
    }
}
