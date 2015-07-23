<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\RedirectResponse;

class Ajax
{
    /**
     * Specific redirection to actions, used on 422 errors
     * @var [type]
     */
    private $pathToAction = [
        'fr/auth/login' => 'Auth\AuthController@getLogin',
        'fr/auth/register' => 'Auth\AuthController@getLogin',
    ];

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // Throw 404 HTTP error if not an Ajax request
        if (!$request->ajax()) {
            error_log('not ajax');
            abort(404);
        }

        // Process request
        $response = $next($request);

        // Rewrite specific paths
        $path = $request->path();
        if (isset($this->pathToAction[$path])) {
            $path = action($this->pathToAction[$path]);
        }

        // Render form on validation error
        if ($response->status() == 422) {
            $request->session()->reflash();

            $errors = [];
            foreach (json_decode($response->content(), true) as $key => $val) {
                $errors[$key] = $val;
            }

            $response = redirect($path)->withErrors($errors)->with('from', $request->path());
        }

        // Follow redirections
        if ($response instanceof RedirectResponse) {
            return $response;
        }

        // Convert response to JSON array to add metadata (like current path)
        return response()->json([
            'from' => $path,
            'content' => $response->content()
        ]);
    }
}
