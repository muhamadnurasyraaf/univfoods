<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MerchantController extends Controller
{
    public function index(){
        return view('merch.dashboard',
        [
            'title' => 'Merchant Dashboard',
            'merch' => auth()->user()->merchant,
        ]);
    }
}
