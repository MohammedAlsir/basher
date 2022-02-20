<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PharmacistMiddelware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::user()) {
            //this is not admin or user =>is guest
            return redirect()->guest('login')->with(['message' => 'You should login.']);
        } elseif (Auth::user()->level == 4) {
            return $next($request);
            //here put the Home Page for admin
            // return redirect('Pharmacist.home');
        } else {
            //for the error
            abort(404);
        }
    }
}