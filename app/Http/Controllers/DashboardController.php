<?php

namespace App\Http\Controllers;

use App\Models\Merchant;
use Illuminate\Http\Request;
use App\Mail\MerchantCreated;
use Illuminate\Support\Facades\Mail;

class DashboardController extends Controller
{
    public function index(){
        return view('admin/dashboard.index',['title' => 'Dashboard']);
    }

    public function showMerchReg(){
        $merchs = Merchant::all();
        $title = 'Admin Registration';
        return view('admin.merchreg',compact('title','merchs'));
    }

    public function approve($id){
        $merchant = Merchant::findOrFail($id);
        $merchant->isApproved = 1;
        $user = $merchant->user;
        $user->merchant_owner = 1;
        $user->save();
        $merchant->save();
        Mail::to($user->email)->queue(new MerchantCreated($user,$merchant));;
        return back()->with('approve','Successfully approved the registration');
    }

    public function reject($id){
        $merchant = Merchant::findOrFail($id);
        $merchant->delete();
        return back()->with('delete','Successfully rejected the registration');
    }
}
