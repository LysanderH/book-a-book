<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsAdmin
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
        $user = $request->user();
        $user->admin = $user->is_admin;
        $request->merge(['user' => $user]);
        if (!$user->admin) {
            return redirect('/');
        }
        return $next($request);
    }
}
