<?php

namespace App\Http\Middleware;

use Illuminate\Contracts\Auth\Guard;
use Closure;
use Session;

class Admin
{
    protected $auth;

    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }
    public function handle($request, Closure $next)
    {
        if (!auth()->user()) {
            return redirect('/');
        }elseif(auth()->user()->type!='admin'){
            return redirect('/home');
        }
        return $next($request);
    }
}
