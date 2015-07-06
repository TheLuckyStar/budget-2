<?php

use Psr\Http\Message\ServerRequestInterface;

/**
 * Set locale from request.
 * @param  Psr\Http\Message\ServerRequestInterface $request Request to consider
 * @return string ISO code of the current language
 */
function findLocale($request) {

    // Routes supported by the application
    $available = ['en', 'fr'];

    // ISO code from URL
    $providedByClient = $request->segment(1);

    // ISO list from HTTP header
    $supportedByClient = explode(',', $request->server('HTTP_ACCEPT_LANGUAGE'));
    array_walk($supportedByClient, function($v) {
        return substr($v, 0, 2);
    });

    // If compatible ISO code if provided in URL
    if (in_array($providedByClient, $available)) {
        App::setLocale($providedByClient);
        return App::getLocale();
    }

    // Search for compatible ISO code in HTTP header
    foreach ($supportedByClient as $iso) {
        if (in_array($iso, $available)) {
            App::setLocale($iso);
            break;
        }
    }

    return App::getLocale();
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
Auth::loginUsingId(1);

// Place any route under ISO language code if provided
Route::group(['prefix' => findLocale(Request::instance())], function () {

    // Home URL, used to render homepage
    Route::controller('home', 'HomeController');

    // Root URL, used to render HTML document layout
    Route::get('/', function () {
        return view('index');
    });

});
