<?php

namespace App\Http\Controllers;

use App\Account;
use App\Currency;
use Illuminate\Http\Request;

class Accounts extends Controller
{
    public function index()
    {
        return Account::withTrashed()->get();
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255|unique:accounts',
            'currency_id' => 'numeric|exists:currencies,id',
            'currency_name' => 'required_without:currency_id|max:3|unique:currencies,name',
        ]);

        if ($request->has('currency_id')) {
            $currency_id = $request->currency_id;
        } else {
            $currency_id = Currency::create(['name' => $request->currency_name])->id;
        }

        return Account::create(['name' => $request->name, 'currency_id' => $currency_id]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'max:255|unique:accounts,name,'.$id,
        ]);

        $account = Account::withTrashed()->findOrFail($id);
        $account->fill($request->only('name'));
        $account->save();

        return $account;
    }

    public function development(Request $request, $id)
    {
        $account = Account::withTrashed()->findOrFail($id);

        return [
            'monthly' => $account->getMonthlyDevelopmentAttribute($request->date),
            'yearly' => $account->getYearlyDevelopmentAttribute($request->date),
        ];
    }
}
