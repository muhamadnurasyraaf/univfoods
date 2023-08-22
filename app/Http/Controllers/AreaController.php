<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AreaController extends Controller
{
    public function index(){
        return view('admin/dashboard.area',[
            'title' => 'Area Management',
            'areas' => Area::all(),
            ]
        );
    }


    public function store(Request $request){
        $datas = $request->validate([
            'area_name' => ['required','min:4','max:40'],
        ]);

        Area::create($datas);

        return Redirect::back()->with('success','Succeedfully Added an Area');
    }

    public function destroy($id){
        $area = Area::find($id);

        if(!$area){
            return Redirect::back()->with('error','Area Not Found');
        }

        $area->delete();

        return Redirect::back()->with('success','Successfully Deleted an Area');
    }
}
