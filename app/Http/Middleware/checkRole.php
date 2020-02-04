<?php

namespace App\Http\Middleware;

use Closure;
use App\Permission;
use App\Role;
use App\User;

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
        if(auth()->user()->privilege_id == 3){
            return $next($request);
        }
        return response('Not Allowed');
 }
    
}