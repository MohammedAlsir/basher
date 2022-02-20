<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  string|null  ...$guards
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $guard = null)
    {
        // $guards = empty($guards) ? [null] : $guards;

        if (Auth::guard($guard)->check()) {
            //return redirect('/home');
            if (Auth::user()->level == 1) {
                return redirect('admin');
            } elseif (Auth::user()->level == 2) {
                return redirect('doctor');
            } elseif (Auth::user()->level == 3) {
                return redirect('pharmacist');
            } else
                abort(404);
        }

        return $next($request);
    }
}