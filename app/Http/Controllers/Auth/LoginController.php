<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function login(Request $request){
        $credentials = $request->validate([
            'email' => 'email|required',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            // Save login activity
            activity()->log(Auth::user()->name . ' logged in');
            return redirect('dashboard');
        } else {
            dd("Login failed");
        }
    }
}
