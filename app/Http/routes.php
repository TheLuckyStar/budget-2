<?php

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

// Place any route under ISO language code if provided
Route::group(['prefix' => App::make('findLocale')], function() {

    // Ajax URLs only
    Route::group(['middleware' => 'ajax'], function() {

        Route::get('auth/authenticate', 'Auth\AuthController@getLogin'); // Login page content
        Route::post('auth/login', 'Auth\AuthController@postLogin'); // Login processing
        Route::post('auth/register', 'Auth\AuthController@postRegister'); // Registration processing
        Route::get('auth/lostPassword', 'Auth\PasswordController@getEmail'); // Lost password page content
        Route::post('auth/lostPassword', 'Auth\PasswordController@postEmail'); // Lost password processing
        Route::get('auth/resetPassword/{segment}', 'Auth\PasswordController@getReset'); // Reset password content
        Route::post('auth/resetPassword/{segment}', 'Auth\PasswordController@postReset'); // Password reset processing

        Route::controller('navbar', 'NavbarController'); // Navbar content

        // Authenticated user only
        Route::group(['middleware' => 'auth'], function() {
            Route::controller('home', 'HomeController'); // Homepage content

            Route::get('auth/logout', 'Auth\AuthController@getLogout'); // Logout page

            // Account pages
            Route::controller('account/summary', 'Account\SummaryController'); // Account summary pages
            Route::controller('account/operation', 'Account\OperationsController'); // Account operation pages
            Route::controller('account/allocation', 'Account\AllocationController'); // Account allocation pages
            Route::controller('account/development', 'Account\DevelopmentController'); // Account development pages
            Route::controller('account/configuration', 'Account\ConfigurationController'); // Account development pages
            Route::controller('account', 'AccountController'); // Main account pages
            Route::get('account/index/{account_id?}/{activeTab?}', 'AccountController@getIndex'); // Main account page

            // Envelope pages
            Route::controller('envelope/summary', 'Envelope\SummaryController'); // Envelope summary pages
            Route::controller('envelope/operation', 'Envelope\OperationsController'); // Envelope operation pages
            Route::controller('envelope/development', 'Envelope\DevelopmentController'); // Envelope development pages
            Route::controller('envelope', 'EnvelopeController'); // Main envelope pages

            // user pages
            Route::controller('user', 'UserController'); // Main user pages
        });

    });

    // Root URL, used to render HTML document layout
    Route::get('/', function() {
        if (Request::ajax()) {
            abort(404);
        }

        return view('index');
    });

});

// Root URL, used to render HTML document layout
Route::get('/', function() {
    return redirect(App::getLocale());
});

Route::get('vendor/laravel/public/vendor/bootswatch/fonts/{segment} ', function() {
    return '';
});
