<?php

namespace App\Http\Middleware;

use Closure;

class CekRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$role)
    {
        if(\Auth::user()->role!=$role){
            // dd($role);
            return redirect('home');
            
            
        }
        return $next($request);
    }
}
