<?php namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

/**
 * User profile page
 */
class UserController extends AbstractController
{

    /**
     * Render user profile page
     * @return Illuminate\View\View|\Illuminate\Contracts\View\Factory View
     */
    public function getProfile() {
        $data = [
            'user' => Auth::user(),
        ];

        return view('user.profile', $data);
    }

    /**
     * Save user profile
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse
     */
    public function postProfile(Request $request) {
        $user = Auth::user();

        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users,email,'.$user->id,
            'password' => 'confirmed|min:6',
            'currency' => 'required|size:1',
        ]);

        $user->fill($request->only(['name', 'email', 'currency']));
        if (is_string($request->input('password'))) {
            $user->password = bcrypt($request->input('password'));
        }
        $user->save();

        return redirect()->action('UserController@getProfile')
            ->withSuccess(trans('user.profile.successMessage'));
    }

}
