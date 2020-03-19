<?php

namespace App\Http\Middleware;

use Closure;
use Carbon\Carbon;
// use App\Http\Middleware\Auth;
use Illuminate\Support\Facades\Auth;
// use App\User;

class paymentExpiration
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
        $currentDate = Carbon::now();
        $checkCourse = Auth::user()->courses()->get();
        $count = count($checkCourse);
        $privilege_id = Auth::user()->privilege_id;

        if($count >= 1 && $privilege_id == 1 ){
            $dueDate = Auth::user()->courses()->first()->pivot->repayment_date;
            if($dueDate == null){
                return $next($request);
            }
            elseif( $currentDate >= $dueDate){
                return redirect('/defaultpayment');
            }
        }else{
            return $next($request);
        }
        return $next($request);
    }
}
