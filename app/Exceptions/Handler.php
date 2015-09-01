<?php

namespace App\Exceptions;

use App;
use Exception;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
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
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        return parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {
        // Redirect when model not found
        if ($exception instanceof ModelNotFoundException) {
            return $this->renderModelnotFound($request, $exception);
        }

        // Render error in local environment for easier debugging
        if (App::environment('local')) {
            return parent::render($request, $exception);
        }

        // Catch 404 HTTP errors for smart redirecting
        if ($exception instanceof NotFoundHttpException) {
            // @TODO 404 error message
            return redirect()->action('HomeController@getIndex')
                ->withErrors([trans('app.error.404')]);
        }

        return redirect()->action('HomeController@getIndex')
            ->withErrors([$exception->getMessage()]);
    }

    /**
     * Render a ModelNotFound exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Illuminate\Database\Eloquent\ModelNotFoundException  $exception
     * @return \Illuminate\Http\Response
     */
    public function renderModelnotFound($request, Exception $exception)
    {
        // Redirect when Account model not found
        if ($exception->getModel() === 'App\Account') {
            return redirect()->action('AccountController@getIndex')
                ->withErrors(trans('account.index.notfoundMessage'));
        }

        // Redirect when Envelope model not found
        if ($exception->getModel() === 'App\Envelope') {
            return redirect()->action('AccountController@getIndex')
                ->withErrors(trans('envelope.index.notfoundMessage'));
        }

        // Redirect when other model not found
        return redirect()->action('HomeController@getIndex')
            ->withErrors([trans('app.error.404')]);
    }
}
