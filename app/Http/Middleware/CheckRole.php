<?php

// app/Http/Middleware/CheckRole.php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRole
{
    public function handle(Request $request, Closure $next, ...$roles)
    {
        $user = $request->user();

        if (!$user) {
            return redirect()->route('login');
        }

        // super_admin bypass
        if ($user->isSuperAdmin()) {
            return $next($request);
        }

        if (!$user->hasRole($roles)) {
            // optional: redirect to a custom 403 page
            // return redirect()->route('error.403');
            abort(403);
        }

        return $next($request);
    }
}
