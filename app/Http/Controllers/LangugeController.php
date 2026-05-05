<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
class LangugeController extends Controller
{
    public function Bangla()
    {
        Session::get('lang');
        session()->forget('lang');
        Session::put('lang','bangla');
        return redirect()->back();


    }

    public function English()
    {
        Session::get('lang');
        session()->forget('lang');
        Session::put('lang','english');
        return redirect()->back();

    }
}
