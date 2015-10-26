<?php namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class UserController extends AbstractController
{
    public function getProfile() {
        $data = [
            'user' => Auth::user(),
        ];

        return view('user.profile', $data);
    }

    public function postProfile(Request $request) {
        $user = Auth::user();

        $this->validate($request, [
            'name' => 'string|required|unique:envelopes,name,NULL,id,account_id,'.$account->id,
            'icon' => 'string',
        ]);

        $envelope->fill($request->only(['name', 'icon']));
        $envelope->save();

        return redirect()->action('UserController@getProfile')
            ->withSuccess(trans('user.profile.successMessage'));
    }
}
