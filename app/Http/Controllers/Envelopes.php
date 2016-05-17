<?php

namespace App\Http\Controllers;

use App\Envelope;
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
            'name' => 'required|max:255|unique:accounts',
            'icon' => 'max:255',
        ]);

        return Envelope::create($request->only('name', 'icon'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'max:255|unique:accounts,name,'.$id,
            'icon' => 'max:255',
        ]);

        $account = Envelope::withTrashed()->findOrFail($id);
        $account->fill($request->all());
        $account->save();

        return $account;
    }
}
