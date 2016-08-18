<?php

namespace App\Http\Controllers;

use App\Envelope;
use App\Currency;
use Illuminate\Http\Request;

class Envelopes extends Controller
{
    public function index()
    {
        return Envelope::withTrashed()->get();
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255|unique:envelopes',
            'icon' => 'max:255',
        ]);

        return Envelope::create($request->only('name', 'icon'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'max:255|unique:envelopes,name,'.$id,
            'icon' => 'max:255',
        ]);

        $envelope = Envelope::withTrashed()->findOrFail($id);
        $envelope->fill($request->all());
        $envelope->save();

        return $envelope;
    }

    public function development(Request $request, $id = null)
    {
        if (is_null($id)) {
            $envelopes = Envelope::all();
            $currency = Currency::findOrFail(session('currency_id'));
            return [
                'state' => Envelope::combineMonthlyDevelopment($envelopes, $currency),
                'yearly' => Envelope::combineYearlyDevelopment($envelopes, $currency, $request->date),
                'recent_savings' => Envelope::combineRecentSavings($envelopes, $currency),
            ];
        }

        return [
            'yearly' => Envelope::withTrashed()
                ->findOrFail($id)
                ->getYearlyDevelopmentAttribute(null, $request->date),
        ];
    }
}
