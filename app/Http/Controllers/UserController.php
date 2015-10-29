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
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users,email,'.$user->id,
            'password' => 'confirmed|min:6',
            'currency' => 'required|size:1',
        ]);

        $user->fill($request->only(['name', 'email', 'currency']));
        if ($request->input('password')) {
            $user->password = bcrypt($request->input('password'));
        }
        $user->save();

        return redirect()->action('UserController@getProfile')
            ->withSuccess(trans('user.profile.successMessage'));
    }
}
