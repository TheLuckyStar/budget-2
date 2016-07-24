<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ApiMiddleware
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
        $this->storeCurrency($request);

        return $next($request);
    }

    private function storeCurrency(Request $request)
    {
        if ($request->exists('default_currency_id') === false) {
            abort(400, 'Parameter default_currency_id is required.');
        }

        $request->session()->put('currency_id', $request->default_currency_id);
    }
}
