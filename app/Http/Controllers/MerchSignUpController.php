<?php

namespace App\Http\Controllers;

use App\Models\Merchant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class MerchSignUpController extends Controller
{
    public function index(){
        return view('merch.signup',['title' => 'Merchant Sign Up']);
    }

    public function store(Request $request){
        $user = auth()->user();
        $validatedData = $request->validate([
            'name' => ['required','min:5','max:40','unique:merchants'],
            'area' => ['required'],
            'password' => ['required','min:7','max:20'],
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);
        $validatedData['user_id'] = $user->id;

        $user->merchant_owner = 1;
        $user->save();
        $merch = Merchant::create($validatedData);

        return redirect()->intended('/merchdash');
    }
}
