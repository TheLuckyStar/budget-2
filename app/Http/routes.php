<?php

use Carbon\Carbon;
use Illuminate\Http\Request;

/**
 * Set locale from request.
 * @param  Illuminate\Http\Request $request Request to consider
 * @return string ISO code of the current language
 */
function findLocale(Request $request) {

    // Routes supported by the application
    $available = ['en', 'fr'];

    // ISO code from URL
    $providedByClient = $request->segment(1);

    // If compatible ISO code if provided in URL
    if (in_array($providedByClient, $available)) {
        Carbon::setLocale($providedByClient);
        App::setLocale($providedByClient);
        return App::getLocale();
    }

    // ISO list from HTTP header
    $supportedByClient = explode(',', $request->server('HTTP_ACCEPT_LANGUAGE'));
    array_walk($supportedByClient, function($v) {
        return substr($v, 0, 2);
    });

    // Search for compatible ISO code in HTTP header
    foreach ($supportedByClient as $iso) {
        if (in_array($iso, $available)) {
            Carbon::setLocale($iso);
            App::setLocale($iso);
            break;
        }
    }

    return false;
}

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// @TODO Remove after implementing login
//Auth::loginUsingId(1);

// Place any route under ISO language code if provided
Route::group(['prefix' => findLocale(Request::capture())], function () {

    // Ajax URLs only
    Route::group(['middleware' => 'ajax'], function () {

        Route::get('auth/authenticate', 'Auth\AuthController@getLogin'); // Login page content
        Route::post('auth/login', 'Auth\AuthController@postLogin'); // Login form processing
        Route::post('auth/register', 'Auth\AuthController@postRegister');  // Registration form processing
        Route::get('auth/lostPassword', 'Auth\PasswordController@getEmail'); // Lost password page content
        Route::post('auth/lostPassword', 'Auth\PasswordController@postEmail');  // Lost password form processing
        Route::get('auth/resetPassword/{segment}', 'Auth\PasswordController@getReset'); // Reset password content
        Route::post('auth/resetPassword/{segment}', 'Auth\PasswordController@postReset');  // Reset password form processing

        Route::controller('navbar', 'NavbarController'); // Render navbar content
        Route::controller('home', 'HomeController'); // Render homepage content

        // Authenticated user only
        Route::group(['middleware' => 'auth'], function () {
            Route::get('auth/logout', 'Auth\AuthController@getLogout'); // Logout page
            Route::controller('account', 'AccountController'); // Render account pages
            Route::controller('envelope', 'EnvelopeController'); // Render envelope pages
        });

    });

    // Root URL, used to render HTML document layout
    Route::get('/', function (Request $request) {
        if ($request->ajax()) {
            abort(404);
        }

        return view('index');
    });

});

// Root URL, used to render HTML document layout
Route::get('/', function (Request $request) {
    return redirect(App::getLocale());
});

