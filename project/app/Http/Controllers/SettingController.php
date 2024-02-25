<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\setting;

class SettingController extends Controller
{
   public function store(Request $request){
    $setting=new setting;
    $setting->logo=$request['logo'];


    if($request->hasFile('logo')) { $file=$request->file('logo');
        $name=$file->getClientOriginalName();
        $request->file('logo')->storeAs('logo/',$name);
        $file->move(public_path('logo/'),$name);
        $setting->logo = $name;
        }

        $setting->facebook=$request['facebook'];
        $setting->google=$request['google'];
        $setting->contect_number=$request['contect_number'];
        $setting->email=$request['email'];
        $setting->address=$request['address'];
        $setting->twiter=$request['twiter'];
        $setting->instagram=$request['instagram'];
        $setting->about=$request['about'];
        $setting->save();
        return redirect('setting/list');
   }

   public function delete($id){
    $setting=setting::find($id)->delete();
    return back();
   }
   public function edit($id){
    $setting=setting::find($id);
    if ($id==null) {
        return back()->with('id is not found');
    } else {

        $url=url('/setting/update')."/".$id;
        return view('settings.edit',compact('setting','url'));
    }


   }

   public function update($id, Request $request){
    $setting=setting::find($id);
    if($request->hasFile('logo')) { $file=$request->file('logo');
     $setting->logo=$request['logo'];
    $name=$file->getClientOriginalName();
    $request->file('logo')->storeAs('logo/',$name);
    $file->move(public_path('logo/'),$name);
    $setting->logo = $name;
    }


    $setting->facebook=$request['facebook'];
    $setting->google=$request['google'];
    $setting->twiter=$request['twiter'];
    $setting->instagram=$request['instagram'];
    $setting->contect_number=$request['contect_number'];
    $setting->email=$request['email'];
    $setting->address=$request['address'];
    $setting->about=$request['about'];
    $setting->save();
    return redirect('setting/list');
   }
}
