<?php

namespace App\Providers;

use Carbon\Carbon;
use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Request;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        /**
         * Set locale from request.
         * @param  Illuminate\Http\Request $request Request to consider
         * @return string ISO code of the current language
         */
        $this->app->bind('findLocale', function ($app) {

            // Routes supported by the application
            $available = ['en', 'fr'];

            // ISO code from URL
            $providedByClient = Request::segment(1);

            // If compatible ISO code if provided in URL
            if (in_array($providedByClient, $available)) {
                setlocale(LC_TIME, $providedByClient.'_FR.utf8');
                Carbon::setLocale($providedByClient);
                App::setLocale($providedByClient);
                return App::getLocale();
            }

            // ISO list from HTTP header
            $supportedByClient = explode(',', Request::server('HTTP_ACCEPT_LANGUAGE'));
            array_walk($supportedByClient, function($v) {
                return substr($v, 0, 2);
            });

            // Search for compatible ISO code in HTTP header
            foreach ($supportedByClient as $iso) {
                if (in_array($iso, $available)) {
                    setlocale(LC_TIME, $iso.'_FR.utf8');
                    Carbon::setLocale($iso);
                    App::setLocale($iso);
                    break;
                }
            }

            return false;
        });
    }
}
