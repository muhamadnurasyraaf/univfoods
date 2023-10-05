<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Merchant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class MerchSignUpController extends Controller
{
    public function index(){
        return view('merch.signup',[
            'title' => 'Merchant Sign Up',
            'area' => Area::all(),
        ]);

        }
    public function store(Request $request){
        $user = auth()->user();

        $validatedData = $request->validate([
            'name' => ['required','min:5','max:40','unique:merchants'],
            'area_id' => ['required'],
            'image' => ['image','file','max:1024'],
        ]);

        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('merch-icon');
        }

        $validatedData['user_id'] = $user->id;

        $user->merchant_owner = 1;
        $user->save();
        Merchant::create($validatedData);



        return redirect()->intended('/merchdash');
    }
}
