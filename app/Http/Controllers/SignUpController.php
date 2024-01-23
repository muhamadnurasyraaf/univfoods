<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\College;
use App\Mail\WelcomeEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class SignUpController extends Controller
{
    public function index(){
        $colleges = College::all();
        return view('signup.index',[
            'title' => 'Sign Up',
            'colleges' => $colleges,
        ]);
    }

    public function store(Request $request){
        $incomingdata = $request->validate([
            'username' => ['required','min:5','max:20','unique:users'],
            'email' => ['required','email:dns','min:10','max:255','unique:users'],
            'password' => ['required','min:7','max:20','confirmed'],
            'college_id' => ['required'],
            'phone_number' => ['required'],
        ]);

        $incomingdata['password'] = Hash::make($incomingdata['password']);
        $user = User::create($incomingdata);

        // Set email_verified_at here
        $user->email_verified_at = now();
        $user->save();

        Auth::login($user);
        Mail::send(new WelcomeEmail());

        return redirect('/profile');
    }
}
