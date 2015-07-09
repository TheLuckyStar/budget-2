<?php namespace App\Services\Html;

use \Collective\Html\HtmlServiceProvider as CollectiveHtmlServiceProvider;

class HtmlServiceProvider extends CollectiveHtmlServiceProvider {

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        parent::register();

        $this->app->alias('form', 'App\Services\Html\FormBuilder');
        $this->app->alias('html', 'App\Services\Html\HtmlBuilder');
    }

    /**
     * Register the HTML builder instance.
     *
     * @return void
     */
    protected function registerHtmlBuilder()
    {
        $this->app->bindShared('html', function($app)
        {
            return new HtmlBuilder($app['url']);
        });
    }

    /**
     * Register the form builder instance.
     *
     * @return void
     */
    protected function registerFormBuilder()
    {
        $this->app->bindShared('form', function($app)
        {
            $form = new FormBuilder($app['html'], $app['url'], $app['session.store']->getToken());

            return $form->setSessionStore($app['session.store']);
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array('html', 'form', 'App\Services\Html\HtmlBuilder', 'App\Services\Html\FormBuilder');
    }

}
