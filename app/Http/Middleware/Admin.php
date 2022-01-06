<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class Admin
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
        if(Auth::check()){
            $user = Auth::user();
            if($user->quyen == 'admin'){
                return $next($request);
            }else{
                return redirect('auth/admin_login');
            }    
        }else{
            return redirect('auth/admin_login');
        }  
    }
}
