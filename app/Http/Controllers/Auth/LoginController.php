<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;

    // $redirectTo الدالة هنا بدلا من المتغير
    protected function redirectTo()
    {
        if (Auth::user()->level == 1) {
            // return redirect('admin');
            //return the route for admin
            return 'admin';
        } elseif (Auth::user()->level == 2) {
            // return redirect('user');
            //return the route for user
            return 'doctor';
        } elseif (Auth::user()->level == 3) {
            // return redirect('user');
            //return the route for user
            return 'lab';
        } elseif (Auth::user()->level == 4) {
            // return redirect('user');
            //return the route for user
            return 'pharmacist';
        } else
            //for any error
            abort(404);
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}