<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthMiddleware
{

    /**
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        $token = $_COOKIE['token'] ?? '';
        if ($token !== '') {
            return $next($request);
        }

        return redirect('/');
    }
}
