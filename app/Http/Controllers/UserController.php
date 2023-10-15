<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Mail\PasswordChanged;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{


    public function updatePassword(Request $request){
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:5',
        ]);


        if(Hash::check($request->current_password,auth()->user()->password)){

            User::whereId(auth()->user()->id)->update([
                'password' => Hash::make($request->new_password)
            ]);

             $user = auth()->user();
            Mail::send(new PasswordChanged($user));
            return redirect('/profile')->with('success','Password Updated Successfully.');
        }else{
            return back()->withErrors(['current_password' => 'The current password given is incorrect'])->withInput();
        }
    }
}
