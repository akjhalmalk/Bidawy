<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Mail;
use App\Mail\verifyEmail;
use Illuminate\Support\Str;
use Session;
use Illuminate\Support\Facades\Auth;



class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {

        return Validator::make($data, [
            'username' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6',
            'password-confirmation' => 'required|same:password',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        

        Session::flash('status','Registered! but verify your email to activate your account');
        $user = User::create([
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'token' => str_random(25),
        ]);
          
        $thisUser = User::findOrFail($user->id);
            
        $this->sendEmail($thisUser);

        return $user;
    }

    // public function register(Request $request)
    // {
    //     $input = $request->all();

    //     $validator=$this->validator($input);
    //     if($validator->passes())
    //     {
    //         $data= $this->create($input)->toArray();
           
    //         $data['token'] = str_random(25);
    //         $user = User::find($data['id']);
    //         $user->token = $data['token'];
           
    //         $user->save();

    //         Mail::send('mails.confirmation',$data , function($message) use($data)
    //         {
    //             $message->to($data['email']);
    //             $message->subject('Registeration Confirmation');
    //         });
    //         return redirect(route('login'))->with('status' , 'Confirmation email has been send, please check your email');
    //     }

    //     return redirect(route('login'))->with('status', $validator->errors());
    // }

    // public function confirmation($token)
    // {
    //     $user = User::where('token',$token)->first();

    //     if(!is_null($user))
    //     {
    //         $user->confirmed=1;
    //         $user->token='';
    //         $user->save();
    //         return redirect(route('login'))->with('status','your Activation is compleate');
    //     }
    //     return redirect(route('login'))->with('status','Somthing Wrong');
    // }

public function sendEmail($thisUser)
    {
       
        Mail::to($thisUser['email'])->send(new verifyEmail($thisUser));
    }


    //  public function verifyEmailFirst($token)
    // {
    //     return view('mails.verifyEmailFirst');
    // }

    public function sendEmailDone($email,$token)
    {
        $user =User::where(['email' =>$email , 'token' => $token])->first();
       $state;

        if($user)
        {
             $con_user = user::where(['email'=> $email, 'token' => $token])->update(['confirmed'=>'1' , 'token'=>null]);
                 Auth::login($user);
             return view('mails.success',['con_user' => $con_user,'state' => true]);
        }
        return view('mails.success',['state' => false]);
    }
}
