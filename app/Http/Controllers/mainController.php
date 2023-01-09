<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class mainController extends Controller
{
    public static function halamanLogin(){
        return view('auth.login');
    }
    public static function profileIndex(){
        return view('profileSekolah.index');
    }
    public static function prosesLogin(Request $request){
    
        if (Auth::attemptWhen([
            'id' => $request['id'],
            'password' => $request['password'],
        ])) {
            $request->session()->regenerate();
            return redirect()->intended('/profile');
        }
    }
}
