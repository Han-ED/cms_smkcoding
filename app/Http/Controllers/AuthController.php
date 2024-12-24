<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function regist(){
        return view('register');
    }

    public function login(){
        return view('login');
    }

    public function signup(Request $request){
        $request->validate([
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        $signup = new User();
        $signup->name = $request->input('username');
        $signup->email = $request->input('email');
        $signup->password = Hash::make($request->input('password'));
        $signup->save();


        return redirect()->route('auth.login');

    }

    public function signin(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
        {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect('/');
        }
}
