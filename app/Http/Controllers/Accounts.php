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
            'deleted_at' => 'date',
        ]);

        $account = Account::onlyTrashed()->findOrFail($id);
        $account->fill($request->only('name', 'currency'));
        $account->save();

        return $account;
    }
}
