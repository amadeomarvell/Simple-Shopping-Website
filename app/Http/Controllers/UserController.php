<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\touch;

class UserController extends Controller
{
    public function view_profile(){
    // Check if the user is authenticated
    if (Auth::check()) {
        // Retrieve the currently authenticated user
        $user = Auth::user();

        // Pass the user data to the view
        return view('view-profile', ['user' => $user]);
    }

    // Redirect to the login page if the user is not authenticated
    return redirect()->route('login')->with('fail', 'You need to log in to view your profile.');
    }

    public function update_profile_view($id){
        $data = User::find($id);
        return view('update-profile', ['data'=>$data]);
    }

    public function update_profile(Request $request){
        $data = User::find($request->id);

        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = $request->password;
        $data->confirm = $request->confirm;
        $data->address = $request->address;
        $data->age = $request->age;

        $data->save();
        return redirect('home');
    }

    public function delete_profile($id){
        $data = User::find($id);
        $data->delete();
        return redirect('/')->with('success', 'Profile deleted successfully');
    }

}
