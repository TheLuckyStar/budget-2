<?php

namespace App\Http\Controllers;

use App\Income;
use App\Outcome;
use App\Revenue;
use App\Transfer;
use Illuminate\Http\Request;

class Operations extends Controller
{
    public function index(Request $request)
    {
        return collect([])
            ->merge(Income::search($request->all())->get())
            ->merge(Outcome::search($request->all())->get())
            ->merge(Revenue::search($request->all())->get())
//            ->merge(Transfer::search($request->all())->get())
        ;
    }
}
