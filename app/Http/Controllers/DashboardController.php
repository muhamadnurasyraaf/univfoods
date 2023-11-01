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
}
