<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\DB;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
        //$this->middleware('auth');
    }
    protected function attemptLogin($request)
    {
        // $user =DB::table('users')->where('email',$request['email'])->value('confirmed');
        // if($user==0){
        //    return view('/auth/login',['errors' => 'confirm your email first']);
        // }
       return $this->guard()->attempt([
           'email' => $request->email,
           'password' => $request->password,
           'confirmed' => 1
        ], $request->has('remember'));
    }
}
