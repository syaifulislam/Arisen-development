<?php

namespace App\Http\Middleware;

use Closure;
use Sentinel;

class SentinelCheck
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
        if(!Sentinel::check()){
            return redirect('auth/login');
        }
        if(Sentinel::getUser()->role_user == 'user'){
            return $next($request);
        }else if(Sentinel::getUser()->role_user == 'admin'){
            return redirect('home-admin');
        }
    }
}
