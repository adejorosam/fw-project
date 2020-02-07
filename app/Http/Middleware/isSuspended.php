<?php

namespace App\Http\Middleware;

use Closure;
use App\Http\Middleware\Auth;

class isSuspended
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
        // if (Auth()->check() == false) {
        //     return redirect('')
        // }
        // if (Auth()->check() == false) {
        //     ;
        // }

        if(auth()->user()->suspend == 1){
            return redirect('/suspend');
        }

        return $next($request);
    }
}
