<?php

namespace App\Http\Controllers;

use App\Account;
use Illuminate\Http\Request;

class Accounts extends Controller
{
    public function index()
    {
        return Account::get();
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
            'name' => 'required|max:255|unique:accounts,name,'.$id,
            'currency' => 'required|max:3',
        ]);

        $account = Account::findOrFail($id);
        $account->fill($request->only('name', 'currency'));
        $account->save();

        return $account;
    }
}
