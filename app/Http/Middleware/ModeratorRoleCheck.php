<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class ModeratorRoleCheck
{
    const MEMBER_ROLE = 100;
    const AUTHOR_ROLE = 300;
    const MODERATOR_ROLE = 600;
    const ADMIN_ROLE = 900;

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(!Auth::check() || Auth::user()->role < self::MEMBER_ROLE){
            return response()->view('errors.403');
        }
        return $next($request);
    }
}
