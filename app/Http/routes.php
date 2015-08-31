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

// @TODO Remove after implementing login
//Auth::loginUsingId(1);

// Place any route under ISO language code if provided
Route::group(['prefix' => App::make('findLocale')], function() {

    // Ajax URLs only
    Route::group(['middleware' => 'ajax'], function() {

        Route::get('auth/authenticate', 'Auth\AuthController@getLogin'); // Login page content
        Route::post('auth/login', 'Auth\AuthController@postLogin'); // Login form processing
        Route::post('auth/register', 'Auth\AuthController@postRegister'); // Registration form processing
        Route::get('auth/lostPassword', 'Auth\PasswordController@getEmail'); // Lost password page content
        Route::post('auth/lostPassword', 'Auth\PasswordController@postEmail'); // Lost password form processing
        Route::get('auth/resetPassword/{segment}', 'Auth\PasswordController@getReset'); // Reset password content
        Route::post('auth/resetPassword/{segment}', 'Auth\PasswordController@postReset'); // Reset password form processing

        Route::controller('navbar', 'NavbarController'); // Render navbar content
        Route::controller('home', 'HomeController'); // Render homepage content

        // Authenticated user only
        Route::group(['middleware' => 'auth'], function() {
            Route::get('auth/logout', 'Auth\AuthController@getLogout'); // Logout page

            // Account pages
            Route::controller('account/summary', 'Account\SummaryController'); // Render account summary page
            Route::controller('account/operation', 'Account\OperationsController'); // Render account operation page
            Route::controller('account/allocation', 'Account\AllocationController'); // Render account allocation page
            Route::controller('account/development', 'Account\DevelopmentController'); // Render account development page
            Route::controller('account', 'AccountController'); // Render main account page
            Route::get('account/index/{account_id?}/{activeTab?}', 'AccountController@getIndex'); // Render main account page

            // Envelope pages
            Route::controller('envelope/summary', 'Envelope\SummaryController'); // Render envelope summary page
            Route::controller('envelope/operation', 'Envelope\OperationsController'); // Render envelope operation page
            Route::controller('envelope/development', 'Envelope\DevelopmentController'); // Render envelope development page
            Route::controller('envelope', 'EnvelopeController'); // Render main envelope page
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

// @TODO Routes to non existent files
Route::get('vendor/laravel/public/vendor/bootswatch/fonts/{segment} ', function() {
    return '';
});
