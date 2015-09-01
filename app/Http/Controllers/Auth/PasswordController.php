<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\AbstractController;
use DB;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Password;

class PasswordController extends AbstractController
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Create a new password controller instance.
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get the e-mail subject line to be used for the reset link email.
     */
    protected function getEmailSubject()
    {
        return trans('user.lostpassword.emailSubject');
    }

    /**
     * Send a reset link to the given user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|null
     */
    public function postEmail(Request $request)
    {
        $this->validate($request, ['email' => 'required|email']);

        $response = Password::sendResetLink($request->only('email'), function(Message $message) {
            $message->subject($this->getEmailSubject());
        });
        switch ($response) {
            case Password::RESET_LINK_SENT:
                return redirect()
                    ->action('HomeController@getIndex')
                    ->with('success', trans($response));

            case Password::INVALID_USER:
                return redirect()
                    ->action('Auth\PasswordController@getEmail')
                    ->withErrors(['email' => trans($response)])
                    ->withInput();
        }
    }

    /**
     * Display the password reset view for the given token.
     *
     * @param  string  $token
     * @return \Illuminate\Http\Response
     */
    public function getReset($token = null)
    {
        $passwordReset = DB::table('password_resets')
            ->select('email')
            ->where('token', $token)
            ->first();

        if (is_null($passwordReset)) {
            return redirect()
                ->action('Auth\PasswordController@getEmail')
                ->withErrors(trans('passwords.token'))
                ->withInput();
        }

        return view('auth.reset')
            ->with('token', $token)
            ->with('email', $passwordReset->email);
    }

    /**
     * Reset the given user's password.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postReset(Request $request, $token)
    {
        $this->validate($request, [
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
        ]);

        $credentials = $request->only(
            'email', 'password', 'password_confirmation', 'token'
        );

        $response = Password::reset($credentials, function($user, $password) {
            $this->resetPassword($user, $password);
        });

        switch ($response) {
            case Password::PASSWORD_RESET:
                return redirect($this->redirectPath())
                    ->with('success', trans($response));

            default:
                return redirect()
                    ->action('Auth\PasswordController@postReset', $token)
                    ->withInput($request->only('email'))
                    ->withErrors([trans($response)]);
        }
    }
}
