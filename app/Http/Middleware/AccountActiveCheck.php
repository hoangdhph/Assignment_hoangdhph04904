<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AccountActiveCheck
{
    const MEMBER_ACTIVE = 900;
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(!Auth::check() || Auth::user()->active < self::MEMBER_ACTIVE){
            return response()->view('errors.none_active');
        }
        return $next($request);
    }
}
