<?php

namespace App\Exceptions;

use Exception;
use App;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that should not be reported.
     *
     * @var array
     */
    protected $dontReport = [
        HttpException::class,
    ];

    /**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param  \Exception  $e
     * @return void
     */
    public function report(Exception $e)
    {
        return parent::report($e);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $e
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $e)
    {
        // Render error in local environment for easier debugging
        if (App::environment('local')) {
            return parent::render($request, $e);
        }

        // Catch 404 HTTP errors for smart redirecting
        if ($e instanceof NotFoundHttpException) {
            // @TODO 404 error message
            return redirect()->action('HomeController@getIndex')->withErrors([trans('app.error.404')]);
        }

        return redirect()->action('HomeController@getIndex')->withErrors([$e->getMessage()]);
    }
}
