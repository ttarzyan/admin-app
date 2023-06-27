<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register()
    {
        return view('register');
    }
    public function registerPost(Request $request)
    {
        $user = new User();
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;

        $user->email = $request->email;
        $user->password = Hash::make($request->password);
     
        $user->save();

        return back()->with('success', 'Register okayyyyyy');
    }
    public function login()
    {
        return view('login');
    }
    public function loginPost(Request $request)
    {
        $credetials = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if (Auth::attempt($credetials)) {
            return redirect('/home')->with('success', 'Login Success');
        }
        return back()->with('error', 'Error email or password');  
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
