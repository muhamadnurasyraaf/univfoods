<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Merchant;
use Illuminate\Http\Request;

class EateryController extends Controller
{
    public function index(){
        return view('eatery',[
            'title' => 'Eatery',
            'merchs' => Merchant::all(),
            'areas' => Area::all(),
        ]);
    }

    public function filterArea($id){
        $area = Area::find($id);

        return view('/eatery',[
            'title' => 'Eatery',
            'merchs' => $area->merch(),
            'areas' => Area::all(),
        ]);
    }
}
