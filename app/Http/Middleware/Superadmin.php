<?php

namespace App\Http\Middleware;

use Closure;

class Superadmin
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
        if(!Auth()->guard('superadmin')->check())
        {
            return redirect()->to('/login');
        }
        if(!Auth()->guard('superadmin')->user()->level == "superadmin")
        {
            return redirect()->to('/login');
        }
        return $next($request);
    }
}
