<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use App\Models\Merchant;
use Illuminate\Http\Request;
use App\Mail\MerchantCreated;
use Illuminate\Support\Facades\Mail;

class DashboardController extends Controller
{
    public function index(){
        $orders = Order::with('product.merchant')->get();
        return view('admin/dashboard.index',[
            'title' => 'Dashboard',
            'orders' => $orders,
        ]);
    }

    public function products(){
        $products = Product::with('merchant')->get();
        return view('admin.dashboard.products',[
            'title' => 'Products',
            'products' => $products,
        ]);

    }

    public function customers(){
        $customers = User::where('isAdmin',0)->get();
        return view('admin.dashboard.customers',[
            'title' => 'Customers',
            'customer' => $customers,
        ]);
    }
    public function showMerchReg(){
        $merchs = Merchant::where('isApproved',0)->get();
        $title = 'Admin Registration';
        return view('admin.merchreg',compact('title','merchs'));
    }

    public function approve($id){
        $merchant = Merchant::findOrFail($id);
        $merchant->isApproved = 1;
        $user = $merchant->user;
        $user->merchant_owner = 1;
        $user->save();
        $merchant->save();
        Mail::to($user->email)->queue(new MerchantCreated($user,$merchant));;
        return back()->with('approve','Successfully approved the registration');
    }

    public function reject($id){
        $merchant = Merchant::findOrFail($id);
        $merchant->delete();
        return back()->with('delete','Successfully rejected the registration');
    }
}
