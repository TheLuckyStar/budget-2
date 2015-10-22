<?php

namespace App\Http\Middleware;

use Closure;

class FormatInput
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
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
