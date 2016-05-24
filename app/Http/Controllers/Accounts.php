<?php

namespace App\Http\Controllers;

use App\Account;
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
            'currency' => 'required|max:3',
        ]);

        return Account::create($request->only('name', 'currency'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'max:255|unique:accounts,name,'.$id,
            'currency' => 'max:3',
        ]);

        $account = Account::withTrashed()->findOrFail($id);
        $account->fill($request->all());
        $account->save();

        return $account;
    }

    public function development(Request $request, $id)
    {
        $account = Account::withTrashed()->findOrFail($id);

        return [
            'monthly' => $account->getMonthlyDevelopmentAttribute($request->date),
            // 'yearly' => $account->getMonthlyDevelopmentAttribute($request->date),
            // 'anytime' => $account->getMonthlyDevelopmentAttribute($request->date),
        ];
    }
}
