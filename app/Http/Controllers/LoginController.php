<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class LoginController extends Controller
{
    public function index(){
        return view('login', ['title', 'login page']);
    }

    public function authenticate(Request $request){
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if(Auth::attempt($credentials)){
            if($request->rememberMe){
                Cookie::queue('email', $credentials['email'],10080);
                Cookie::queue('password', $credentials['password'],10080);
            }
            $request->session()->regenerate();
            return redirect()->intended('home');
        }

        return back()->with('fail', 'Invalid Credential!');
    }
}
