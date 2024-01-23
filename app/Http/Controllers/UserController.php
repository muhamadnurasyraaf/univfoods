<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\User;
use App\Models\College;
use App\Models\Merchant;
use App\Mail\EmailChanged;
use Illuminate\Http\Request;
use App\Mail\PasswordChanged;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{


    public function create(){
        try {


            $user = Area::create([
                'area_name' => 'UiTM Segamat'
            ]);

            College::create([
                'college_name' => 'Taming Sari (TS)',
                'category' => 'KKA'
            ]);
            College::create([
                'college_name' => 'Sulok Belingkong (SB)',
                'category' => 'KKA'
            ]);
            College::create([
                'college_name' => 'Sri Rempai (SR)',
                'category' => 'KKA'
            ]);
            College::create([
                'college_name' => 'Sri Manja Kini',
                'category' => 'KKC',
            ]);
            College::create([
                'college_name' => 'Nilam',
                'category' => 'KKB',
            ]);
            User::create([
                'username' => 'asyraaf',
                'email' => 'masyraaf14@gmail.com',
                'phone_number' => '0102781087',
                'password' => bcrypt('asyraaf123'),
                'isAdmin' => 1,
                'college_id' => 1,
            ]);
            $merchant = Merchant::create([
                'name' => 'PLFC Port',
                'user_id' => 1,
                'area_id' => 1,
                'address' => 'Jementah, Segamat',
                'description' => null,
                'image' => 'merch-icon/6dakp5XnzRtWlYwxygt9i77RuHga8jHpyYhs7L88.png',
                'NoAccount' => '001253157648',
                'bankName' => 'Maybank',
                'duitnow_qr' => null,
                'isApproved' => 1,
            ]);
            return response()->json($user);
        } catch (\Exception $e) {
            return response('Error creating data' . $e->getMessage());
        }

    }
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

    public function profile(){
        $user  = User::with('college')->findOrFail(auth()->user()->id);
        return view('profile.index',[
            'title' => 'Profile',
            'user' => $user,
        ]);
    }
}
