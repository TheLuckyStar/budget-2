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
            ->merge(Outcome::search($request->all())->get())
            ->merge(Revenue::search($request->all())->get())
//            ->merge(Transfer::search($request->all())->get())
        ;
    }

    public function storeRevenue(Request $request)
    {
        $this->validate($request, [
            'account_id' => 'required|exists:accounts,id',
            'envelope_id' => 'exists:envelopes,id',
            'name' => 'required|max:255',
            'amount' => 'required|numeric',
            'date' => 'required|date',
        ]);

        return Revenue::create($request->all());
    }

    public function storeOutcome(Request $request)
    {
        $this->validate($request, [
            'account_id' => 'required|exists:accounts,id',
            'envelope_id' => 'required|exists:envelopes,id',
            'name' => 'required|max:255',
            'amount' => 'required|numeric',
            'date' => 'required|date',
        ]);

        return Outcome::create($request->all());
    }

    public function updateRevenue(Request $request, $id)
    {
        $this->validate($request, [
            'account_id' => 'required|exists:accounts,id',
            'envelope_id' => 'exists:envelopes,id',
            'name' => 'required|max:255',
            'amount' => 'required|numeric',
            'date' => 'required|date',
        ]);

        $revenue = Revenue::findOrFail($id);
        $revenue->fill($request->all());
        $revenue->save();

        return $revenue;
    }

    public function updateOutcome(Request $request, $id)
    {
        $this->validate($request, [
            'account_id' => 'required|exists:accounts,id',
            'envelope_id' => 'required|exists:envelopes,id',
            'name' => 'required|max:255',
            'amount' => 'required|numeric',
            'date' => 'required|date',
        ]);

        $outcome = Outcome::findOrFail($id);
        $outcome->fill($request->all());
        $outcome->save();

        return $outcome;
    }

    public function destroyRevenue($id)
    {
        Revenue::findOrFail($id)->delete();
    }

    public function destroyOutcome($id)
    {
        Outcome::findOrFail($id)->delete();
    }
}
