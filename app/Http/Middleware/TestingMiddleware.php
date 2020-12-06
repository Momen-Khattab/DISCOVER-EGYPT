<?php

namespace App\Http\Middleware;

use Closure;

class TestingMiddleware
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
        // if($request->has('q') && $request->q == 1){
        //     return $next($request);
        // }

        // $today     = time();
        // $yesterday = date("2020-11-20");
        // dd(strtotime($yesterday));
        dd("I'm a middleware!");
    }
}
