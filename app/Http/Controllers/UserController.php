<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{


    public function updatePassword(Request $request){
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:5',
        ]);

        $user = auth()->user();

        if(Hash::check($request->current_password,$user->password)){

            $user->password = Hash::make($request->password);
            $user->save();

            return redirect()->route('profile.index')->with('success','Password Updated Successfully.');
        }else{
            return back()->withErrors(['current_password' => 'The current password given is incorrect'])->withInput();
        }
    }
}
