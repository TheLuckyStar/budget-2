<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\Http\Controllers\AbstractController;
use App\User;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Mail\Message;
use Mail;
use Validator;

class AuthController extends AbstractController
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use ThrottlesLogins;
    use AuthenticatesAndRegistersUsers {
        postLogin as postLoginIlluminate;
        postRegister as postRegisterIlluminate;
        getLogout as getLogoutIlluminate;
    }

    /**
     * Path to redirect user when login failed
     * @var string
     */
    protected $loginPath;

    /**
     * Path to redirect user after login
     * @var string
     */
    protected $redirectPath;

    /**
     * Path to redirect user after logout
     * @var string
     */
    protected $redirectAfterLogout;

    /**
     * Create a new authentication controller instance.
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);

        // Set user redirection to login page
        $this->loginPath = action('Auth\AuthController@getLogin');

        // Set user redirection after login
        $this->redirectPath = action('HomeController@getIndex');

        // Set user redirection after logout
        $this->redirectAfterLogout = action('HomeController@getIndex');
    }

    /**
     * Handle a login request to the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postLogin(Request $request)
    {
        $response = $this->postLoginIlluminate($request);

        if (Auth::check()) {
            $response->withSuccess(trans('user.login.successMessage', ['username' => Auth::user()->name]));
        } else {
            $response->withErrors([trans('user.login.errorMessage')]);
        }

        return $response;
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postRegister(Request $request)
    {
        $response = $this->postRegisterIlluminate($request);

        Mail::send('emails.registration', ['user' => Auth::user()], function(Message $m) {
            $m->to(Auth::user()->email, Auth::user()->name);
            $m->subject(trans('user.register.emailSubject'));
        });

        return $response->withSuccess(trans('user.register.successMessage', ['username' => Auth::user()->name]));
    }

    /**
     * Log the user out of the application.
     *
     * @return \Illuminate\Http\Response
     */
    public function getLogout()
    {
        $response = $this->getLogoutIlluminate();
        return $response->withSuccess(trans('user.logout.successMessage'));
    }

    /**
     * Get the failed login message.
     *
     * @return string
     */
    protected function getFailedLoginMessage()
    {
        return trans('user.login.errorMessage');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
            'currency' => 'required|size:1',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'currency' => $data['currency'],
        ]);
    }
}
