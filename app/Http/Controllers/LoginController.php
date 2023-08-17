<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login.index',['title' => 'Login']);
    }

    public function login(Request $request){
        $credentials = $request->validate([
            'username' => ['required','string'],
            'password' => ['required']
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/profile');
        }
        return back()->with('loginError','Login Failed');
    }
    public function logout(Request $request){
        $request->session()->invalidate();
        $request->session()->regenerate();
        return redirect('/');
    }
}
