<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\HttpFoundation\Session\Session;

class TwoFactorController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $code = rand(100000, 999999);
        $user->two_factor_code = $code;
        $user->save();
        Mail::raw("Your Code is $code", function ($message) use ($user) {
            $message->to($user->email)->subject("Two-Factor code");
        });
        return view('auth.two-factor');
    }


    public function verify(Request $request)
    {
        $request->validate([
            'code' => 'required',
        ]);
        $user = auth()->user();
        if ($request->code == $user->two_factor_code) {
            session(['two_factor_authenticated' => true]);
            return redirect('dashboard');
        }
        return redirect()->route('two-factor.index')->with('success', "Code and  Not Match");
    }
}
