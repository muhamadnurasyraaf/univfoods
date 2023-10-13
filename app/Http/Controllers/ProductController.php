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

    public function store(Request $request){
        $validatedata = $request->validate([
            'image' => ['required','file','max:1024'],
            'name' => ['required','min:5','max:20'],
            'price' => ['required','numeric'],
            'description' => ['nullable','string'],
        ]);

        if($request->file('image')){
            $validatedata['image'] = $request->file('image')->store('product-icons');
        }


    }
}
