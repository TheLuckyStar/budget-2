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
            $segments = $request->segments();
            $ln = array_shift($segments);
            $url = url().'/'.$ln.$request->path.'#/'.implode('/', $segments);
            return redirect($url);
        }

        // Process request
        $response = $next($request);

        return $response;
    }
}
