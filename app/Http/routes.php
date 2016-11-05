<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {
    return view('home');
});

$app->group(['middleware' => 'api', 'namespace' => 'App\Http\Controllers'], function ($app) {

    $app->get('currencies', 'Currencies@index');

    $app->get('accounts', 'Accounts@index');
    $app->post('accounts', 'Accounts@store');
    $app->put('accounts/{id}', 'Accounts@update');
    $app->get('accounts/development/{id}', 'Accounts@development');
    $app->get('accounts/development', 'Accounts@development');

    $app->get('envelopes', 'Envelopes@index');
    $app->post('envelopes', 'Envelopes@store');
    $app->put('envelopes/{id}', 'Envelopes@update');
    $app->get('envelopes/development/{id}', 'Envelopes@development');
    $app->get('envelopes/development', 'Envelopes@development');

    $app->get('operations', 'Operations@index');
    $app->post('operations/revenue', 'Operations@storeRevenue');
    $app->post('operations/outcome', 'Operations@storeOutcome');
    $app->put('operations/revenue/{id}', 'Operations@updateRevenue');
    $app->put('operations/outcome/{id}', 'Operations@updateOutcome');
    $app->delete('operations/revenue/{id}', 'Operations@destroyRevenue');
    $app->delete('operations/outcome/{id}', 'Operations@destroyOutcome');

});
