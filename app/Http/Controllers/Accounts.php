<?php

namespace App\Http\Controllers;

use App\Account;

class Accounts extends Controller
{
    public function index()
    {
        return Account::get();
    }
}
