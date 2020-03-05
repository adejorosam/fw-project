<?php

namespace App\Http\Middleware;

use Closure;
use App\Http\Middleware\Auth;

class checkRole
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
        $privilege = auth()->user()->privilege_id;
        if (Auth()->check() == false) {
            abort(404);
        }

        
        if($privilege == 3){
            return $next($request);
        }

        else{
            abort(404);
        }
 }
    
}