<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                if(auth()->user()->role_id==3){
                    redirect()->setIntendedUrl(url()->previous());
                    return to_route('customer.dashboard');
                }
                if(auth()->user()->role_id==2){
                    return to_route('hotel.dashboard');
                }
                if(auth()->user()->role_id==1){
                    return to_route('admin.dashboard');
                }
            }
        }

        return $next($request);
    }
}
