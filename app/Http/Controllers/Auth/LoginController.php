<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
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
    // protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(){
        if(Auth::check()){
            return redirect()->route('dashbroad');
        }else{
             return view('auth.login');
        }
       
    }
    public function postLogin(LoginRequest $rq){
        if (Auth::attempt(['email' => $rq->email, 'password' => $rq->password], $rq->remember)) {
            // Authentication passed...
            return redirect()->route('dashbroad');
        }else{
            return back()->with(['msg' => 'Login Faild']);
        }
    }
}
