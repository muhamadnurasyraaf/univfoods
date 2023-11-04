<?php

namespace App\Http\Controllers;

use App\Models\BankAccount;
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

    public function profile($id){
        return view('merch.profile',[
            'title' => 'Merchant Profile',
            'merch' => Merchant::find($id)
        ]);
    }

    public function showMerch($id){
        $merch = Merchant::find($id);
        $title = 'Merchant Dashboard';
        $foods = $merch->products;
        return view('merch.dashboard',compact('title','merch','foods'));
    }

    public function addProductDisplay($id){
        $merch = Merchant::find($id);
        return view('merch.add_product',[
            'title' => 'Add Product',
            'merch_id' => $merch->id,
        ]);
    }


    public function editMerchProfile(Request $request){
        $data = $request->validate([
            'name' => 'string|min:5|max:20|unique:merchants|required',
            'address' => 'string',
            'description' => 'string',
        ]);

        $merch = Merchant::find($request->merch_id);

        if (!$merch) {
            return back()->with('error', 'Merchant not found');
        }

        $bank = $merch->bankAccount;

      dd($data);
      dd($merch);
    }


    public function bankEditView($id){
        $title = 'Bank Account';
        $merch = Merchant::find($id);
        $bank = $merch->bankAccount;
        return view('merch.bank-acc',compact('merch','bank','title'));
    }

}
