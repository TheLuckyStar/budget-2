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
        // Catch 404 HTTP errors for smart redirecting in production environment
        if (App::environment('production') && $e instanceof NotFoundHttpException) {

            // Return JSON error message for Ajax request
            if ($request->ajax()) {
                // @TODO 404 error message
                return response()->json(['status' => false, trans('app.error.404')]);
            }

            // Redirect to / with error message for non Ajax request
            // @TODO 404 error message
            return redirect('/')->with('error', trans('app.error.404'));
        }

        return parent::render($request, $e);
    }
}
