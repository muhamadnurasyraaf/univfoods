<?php

namespace App\Http\Controllers;

use App\Mail\EmailChanged;
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

    public function changeEmail(Request $request){
         $request->validate([
            'old_email'=> 'required|email',
            'new_email' => ['required','email:dns','min:10','max:255'],
         ]);

         if($request->old_email === auth()->user()->email){
            User::where('id',auth()->user()->id)->update([
                'email' => $request->new_email,
            ]);

            Mail::send(new EmailChanged($request->old_email,$request->new_email));

            return redirect('/profile')->with('email_changed','User Email has been successfully changed');
         }else{
            return back()->withErrors(['old_password' => 'Old Email given is incorrect'])->withInput();
         }
    }
}
