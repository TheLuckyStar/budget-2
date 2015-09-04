<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Ajax
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Throw 404 HTTP error if not an Ajax request
        if (!$request->ajax()) {
            error_log('not ajax');
            abort(404);
        }

        // Process request
        $response = $next($request);

        return $response;
    }
}
