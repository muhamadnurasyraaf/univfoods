<?php

namespace App\Http\Controllers;

use App\Models\Merchant;
use Illuminate\Http\Request;

class MerchantController extends Controller
{
    public function index(){
        return view('merch.merchs',
        [
            'title' => 'Merchant Dashboard',
            'merchs' => auth()->user()->merchant,
        ]);
    }

    public function showMerch($id){
        return view('merch.dashboard',[
            'title' => 'Merchant Dashboard',
            'merch' => Merchant::find($id),
        ]);
    }
}
