<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\OrderDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{


    public function index($id){
        $p = Product::find($id);
        return view('order.cart-confirmation',[
            'title' => 'Add to Cart | Product ' . $p->id ,
            'product' => $p,
        ]
        );
    }
    public function cartOrOrdered(Request $request)
    {
        $data = $request->validate([
            'product_id' => 'required|integer',
            'quantity' => 'required|integer|min:1',
        ]);

        $product = Product::findOrFail($data['product_id']);
        $user = auth()->user();

        Order::create([
            'product_id' => $product->id,
            'quantity' => $data['quantity'],
            'user_id' => $user->id,
            'orderdetails_id' => 1,
        ]);

        return redirect()->route('addcart', $product->id)->with('addtocartsuccess', 'Added to Cart');
    }


}
