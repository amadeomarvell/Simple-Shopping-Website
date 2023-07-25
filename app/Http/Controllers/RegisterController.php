<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('register', ['title', 'register page']);
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required | min:3 | max:40',
            'email' => 'required | email:dns',
            'password' => 'required | min:8 | max:20 | required_with:confirm | same:confirm',
            'confirm' => 'required',
            'address' => 'required',
            'age' => 'required',
        ]);

        $validatedData['confirm'] = Hash::make($validatedData['confirm']);
        User::create($validatedData);
        return redirect('login')->with('success', 'please proceed to login to your account');
    }
}
