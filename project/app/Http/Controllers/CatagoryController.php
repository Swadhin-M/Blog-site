<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\gallary;

class CatagoryController extends Controller
{
    public function index(Request $request){
        $catagory= new gallary;
        $catagory->Name=$request['Name'];
        $catagory->save();

        return back();
    }

    public function edit($id){
        $catagory=gallary::find($id);
        if ($id==null) {
            return back()->with('id is not found');
        } else {
            $url=url('catagory/update')."/".($id);
           return view('catagory.edit', compact('catagory','url'));
        }


    }
    public function delete($id){
        $catagory=gallary::find($id)->delete();
             return back();


    }

    public function update($id,Request $request){
        $catagory=gallary::find($id);
        $catagory->Name=$request['Name'];
        $catagory->save();

        return redirect('catagory/list');
    }
}
