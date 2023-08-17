<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SignUpController extends Controller
{
    public function index(){
        return view('signup.index',['title' => 'Sign Up']);
    }

    public function store(Request $request){
        $incomingdata = $request->validate([
            'username' => ['required','min:5','max:20','unique:users'],
            'email' => ['required','email:dns','min:10','max:255','unique:users'],
            'password' => ['required','min:7','max:20','confirmed'],
            'email_verified_at' => now(),
        ]);

        $incomingdata['password'] = Hash::make($incomingdata['password']);
        $user = User::create($incomingdata);


        Auth::login($user);

        return redirect('/profile');
    }
}
