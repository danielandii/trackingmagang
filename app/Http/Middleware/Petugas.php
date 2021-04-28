<?php

namespace App\Http\Middleware;

use Closure;

class Petugas
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
        if (!Auth()->guard('petugas')->check())
        {
            return redirect()->to('/petugas/login');
        }
        return $next($request);
    }
}
