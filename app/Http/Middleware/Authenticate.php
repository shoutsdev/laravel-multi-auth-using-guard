<?php

namespace App\Http\Middleware;

use Closure;

class Authenticate
{
    public function handle($request, Closure $next)
    {
        if (true != (auth()->guard('admin')->check() || auth()->check())) {
            return route('login');
        }
        return $next($request);
    }
}
