<?php

namespace App\Http\Middleware;

use Illuminate\Contracts\Auth\Guard;
use Closure;
use Session;

class Solicitud
{
    protected $auth;

    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }
    public function handle($request, Closure $next)
    {
        if (auth()->user()) {
            return redirect('/');
        }
        return $next($request);
    }
}