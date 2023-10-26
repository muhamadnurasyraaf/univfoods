<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Merchant;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index($id){
        $merch = Merchant::find($id);
        $foods = $merch->products; // Use the `products()` relationship
        return view('foodies',
            [
                'title' => $merch->name,
                'foods' => $foods,
            ]
        );
    }

    public function store(Request $request){
        $validatedata = $request->validate([
            'image' => ['required','file','max:1024'],
            'name' => ['required','min:5','max:20'],
            'price' => ['required','numeric'],
            'description' => ['nullable','string'],
            'merchant_id' => ['required'],
        ]);

        if($request->file('image')){
            $validatedata['image'] = $request->file('image')->store('product-icons');
        }

        // Get the merchant ID from the request object
        $merchantId = $request->input('merchant_id');

        // Set the merchant ID in the new product
        $validatedata['merchant_id'] = $merchantId;

        Product::create($validatedata);
        return back()->with('success add-product','Product Successfully Add');
    }

    public function show($id){
        $product = Product::find($id);
        return view('merch.fooddetails',[
            'title' => 'Foodies (' . $id . ')',
            'food' => $product,
        ]);
    }
}
