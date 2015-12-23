<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

/**
 * Middleware responsible for formating input from requests.
 */
class FormatInput
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
        $input = $request->all();

        foreach ($input as &$value) {
            if (preg_match('/^\d+,\d+$/', $value)) {
                $value = str_replace(',', '.', $value);
            }
        }

        $request->merge($input);

        return $next($request);
    }
}
