<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
class checkAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$guard = null)
    {
        //pre(Auth::user());
        //die;
        if (Auth::guard($guard)->check()) {
            $role = Auth::user()->level;
            if($role == 0){
                return $next($request);
                //return redirect('/admin/');
            }
        }
        //die('fail');
        //return $next($request);
        return redirect('/admin/login');

    }
}
