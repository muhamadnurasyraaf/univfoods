<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\OrderDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{

    public function cartOrOrdered(Request $request){
        $data = $request->validate([
           'user_id' => 'required|integer',
           'product_id' => 'required|integer',
           'quantity' => 'required|integer|min:1|default:1',
        ]);
        //TODO
        Order::create($data);
    }

}
