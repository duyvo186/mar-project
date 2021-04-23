<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class backendauthen
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
        if(!Auth::guard('backend')->check())
            return  redirect()->route('b.login')->with(['msg'=>'vui lòng đăng nhập','type'=>'warning']);
        return $next($request);
    }
}
