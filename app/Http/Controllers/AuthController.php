<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\ForgotPasswordMail;
use Illuminate\Support\Str;
class AuthController extends Controller
{
    

    public function login()
    {


    
      if (!empty(Auth::check())) {
   
     return redirect('dashboard');
     }else{
      return view('auth.login');
     }

    }

    public function Loginstore(Request $request)
    {

      
      
      $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    

    if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->filled('remember'))) {
        
        return redirect()->intended('dashboard');
        
    }

    
    return redirect('login')->with('success',"Email and Password Not Match");



        
    }


    public function ForgotPassword()
    {
        return view('auth.forgot_password');
    }

    public function ForgotPasswordStore(Request $request)
    {
       $user=User::getEmailSingle($request->email);
     
       if (!empty($user)) 
       {
           $user->remember_token=Str::random(30);
           $user->save();
            Mail::to($user->email)->send(new ForgotPasswordMail($user));
           return redirect()->back()->with('success',"Email Sent Please Check Your Email");
       }
       else
       {
         return redirect()->back()->with('error',"Email not found in the system");
       }
    }


    public function ResetPassword($remember_token)
    {
     

        // dd($remember_token);
   
       $user=User::getTokenSingle($remember_token);
   
       if (!empty($user))
        {
            $data['user']=$user;
            return view('auth.reset',$data);
       }
       else
       {
         abort(404);
       }
    }


    public function ResetPasswordStore($token,Request $request)
    {
      if ($request->password == $request->cpassword)
       {
        $user=User::getTokenSingle($token);
        $user->password=Hash::make($request->password);
        $user->save();
        return redirect('login')->with('success',"Your Password SuccessFully Reset");
      }
      else
      {
        return redirect()->back()->with('error',"Password And Confirm Password Does  not match");
      }
    }

    public function logout()
    {
        Auth::logout();
        return redirect(url('login'));
    }

}
