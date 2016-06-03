<?php

namespace App\Http\Controllers;

use App\Currency;
use Illuminate\Http\Request;

class Currencies extends Controller
{
    public function index()
    {
        return Currency::all();
    }
}
