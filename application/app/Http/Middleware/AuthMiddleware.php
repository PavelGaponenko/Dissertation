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
//        if (!$request->hasHeader('Authorization')) {
//            return $next($request);
//        }
        $token = $request->get('token');
        if ($token !== '') {
            return $next($request);
        }

        return redirect('/');
    }
}
