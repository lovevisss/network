<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
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
    protected $redirectTo = '/backend/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('guest')->except('logout');
    }

    public function username()
    {
        return 'workid';
    }

    public function getLogin()
    {
        if(Auth::check())
        {
            return redirect(route('backend.dashboard')); //已经登录直接跳转
        }
        return view('auth.login');
    }

    public function postLogin(Request $request)
    {
        $credits = $request->only('workid', 'password');
        if(Auth::attempt($credits))
        {
            Auth::user()->recordLoginTime();
            if(Auth::user()->isSU())
            {
                return redirect(route('backend.sudashboard'));
            }
            return redirect(route('backend.dashboard'));
        }
        return redirect(route('login'));
    }

    public function getLogout()
    {
        Auth::logout();
        return \Redirect::route('login');
    }
}
