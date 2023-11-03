<?php

namespace App\Http\Controllers;

use App\Models\Merchant;
use Illuminate\Http\Request;

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
        $merchant->save();
        return back()->with('approve','Successfully approved the registration');
    }

    public function reject($id){
        $merchant = Merchant::findOrFail($id);
        $merchant->delete();
        return back()->with('delete','Successfully rejected the registration');
    }
}
