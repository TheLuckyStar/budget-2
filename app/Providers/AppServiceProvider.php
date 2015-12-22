<?php

namespace App\Providers;

use Carbon\Carbon;
use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Request;

class AppServiceProvider extends ServiceProvider
{

    private $available = ['en', 'fr'];


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
        $this->app->bind('findLocale', function() {

            // ISO code from URL
            $providedByClient = Request::segment(1);

            // If compatible ISO code if provided in URL
            if (in_array($providedByClient, $this->available)) {
                $this->setLocale($providedByClient);
                return App::getLocale();
            }

            // Search for compatible ISO code in HTTP header
            foreach ($this->getSupportedByClient() as $iso) {
                if (in_array($iso, $this->available)) {
                    $this->setLocale($iso);
                    break;
                }
            }

            return false;
        });
    }

    private function getSupportedByClient()
    {
        $supportedByClient = explode(',', Request::server('HTTP_ACCEPT_LANGUAGE'));

        array_walk($supportedByClient, function($v) {
            return substr($v, 0, 2);
        });

        return $supportedByClient;
    }

    private function setLocale($locale)
    {
        setlocale(LC_TIME, $locale.'_'.strtoupper($locale).'.utf8');
        Carbon::setLocale($locale);
        App::setLocale($locale);
    }

}
