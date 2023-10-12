<?php

namespace App\Http\Controllers;

use App\Models\Merchant;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index($id){
        $merch = Merchant::find($id);
        $food = $merch->product;
        return view('foodies',
        [
            'title' => $merch->name,
            'foods' => $food,
        ]);
    }
}
