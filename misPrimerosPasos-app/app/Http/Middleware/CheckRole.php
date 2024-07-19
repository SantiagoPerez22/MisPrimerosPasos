<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Spatie\Permission\Exceptions\UnauthorizedException;

class CheckRole
{
    public function handle(Request $request, Closure $next, $role, $guard = null)
    {
        if (!$request->user()->hasRole($role, $guard)) {
            throw UnauthorizedException::forRoles([$role]);
        }

        return $next($request);
    }
}
