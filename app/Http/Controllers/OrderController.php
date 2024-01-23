<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    public function history(){
        $user = auth()->user()->id;

        $orders = Order::with('product')->where('user_id',$user)->get();

        return view('profile.order-history',[
            'title' => 'Order History',
            'orders' => $orders,
        ]);
    }


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
        try {
            $data = $request->validate([
                'product_id' => 'required|integer',
                'quantity' => 'required|integer|min:1',
            ]);

            $product = Product::findOrFail($data['product_id']);
            $user = auth()->user();

            $sessionId = session()->getId();
            $cartOrder = Order::where('session_id',$sessionId)
            ->where('status','cart')
            ->first();

            if(!$cartOrder){
                $cartOrder = Order::create([
                    'product_id' => $product->id,
                    'session_id' => $sessionId,
                    'status' => 'cart',
                    'quantity' => $data['quantity'],
                ]);
            }

            $orderdetail = OrderDetail::create([
                'order_id' => $cartOrder->id,
                'user_id' => $user->id,
                'merchant_id' => $product->merchants->id,
            ]);
            dd($orderdetail);
            return redirect()->route('home');
        } catch (\Exception $e) {
            return back()->withErrors($e->getMessage());
        }

    }

    public function purchase(Request $request)
    {
        try {
            $data = $request->validate([
                'product_id' => 'required',
                'quantity' => 'integer|min:1',
            ]);

            $product = Product::findOrFail($data['product_id']);

            if ($product->merchant) {
                Order::create([
                    'product_id' => $product->id,
                    'quantity' => $data['quantity'],
                    'user_id' => auth()->user()->id,
                    'merchant_id' => $product->merchant->id,
                ]);

                return redirect()->route('foodie', ['id' => $product->merchant->id]);
            } else {
                // Handle the case when $product->merchants is null
                return back()->withErrors(['error' => 'Merchant information not available.']);
            }
        } catch (\Exception $e) {
            return back()->withErrors(['error' => $e->getMessage()]);
        }
    }




}
