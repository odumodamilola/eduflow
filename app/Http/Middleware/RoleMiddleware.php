<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Your middleware logic here
        return $next($request);
    }
}
