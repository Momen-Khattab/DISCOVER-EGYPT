<?php

namespace App\Http\Middleware;

use Closure;

class AdminAuthenticated
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
        if(!auth('admin')->check()){
            return redirect()->route('adminLoginView');
        }
        return $next($request);
    }
}
