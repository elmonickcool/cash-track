<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthenticationController extends Controller
{
    public function __construct(){
        $this->middleware('guest')->except(['logout','dashboard']);
    }

    public function register(){
        return view("auth.register");
    }

    public function store(Request $request){

        $request->validate([
            'name'=>'required|string|max:250',
            'email'=>'required|email|max:250|unique:users',
            'password'=>'required|min:8|confirmed',
        ]);

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password)
        ]);

        $credentials = $request->only('email','password');
        Auth::attempt($credentials);
        $request->session()->regenerate();
        return redirect()->route('dashboard')->withSuccess('Successfully registered');
    }

    public function authenticate(Request $request){
        $credentials = $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->route('dashboard')->withSuccess('Successfully logged in');    
        }
        return back()->withErrors([
            'email'=>'Your credentials do not match'
        ])->onlyInput('email');
    }

    public function dashboard(){
        if(Auth::check())
        {
            return view('auth.dashboard');
        }
        return redirect()->route('login')->withErrors([
            'email'=>'Please login to access the dashboard',
        ])->onlyInput('email');
    }
}
