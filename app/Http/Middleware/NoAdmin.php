<?php

namespace App\Http\Middleware;

use Closure;

class NoAdmin
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
        if (!auth()->user()) {
            return redirect('/'); 
        }elseif(auth()->user()->type!='none'){
            return redirect('/admin');
        }
        return $next($request);
    }
}
