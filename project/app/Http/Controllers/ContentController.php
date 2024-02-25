<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\content;
use App\Models\gallary;

class ContentController extends Controller
{
    public function store(Request $request){
        $content=new content;
        $content->photo=$request['photo'];

        if($request->hasFile('photo')) { $file=$request->file('photo');
        $name=$file->getClientOriginalName();
        $request->file('photo')->storeAs('photo/',$name);
        $file->move(public_path('photo/'),$name);
        $content->photo = $name;
        }


        $content->head=$request['head'];
        $content->catagory_id=$request['catagory_id'];
        $content->story=$request['story'];
        $content->date=$request['date'];
        $content->name=$request['name'];
        $content->save();
        return back();
    }

    public function show(){
        $content=content::all();
        return view('content.content_show',compact('content'));

    }

    public function delete($id){
    $content=content::find($id)->delete();
    return back();
    }

    public function update($id){
        $gallary=gallary::all();
        $content=content::find($id);
        if ($id==null) {
            return back()->with('id is not found');
        }else{
            $url=url('/upload')."/".$id;
            return view('content.upload',compact('content','url','gallary'));
        }

    }


    public function out($id, Request $request){
        $content=content::find($id);


        if($request->hasFile('photo')) { $file=$request->file('photo');
            // $content->photo=$request['photo'];
        $name=$file->getClientOriginalName();
        $request->file('photo')->storeAs('photo/',$name);
        $file->move(public_path('photo/'),$name);
        $content->photo = $name;
        }


        $content->head=$request['head'];
        $content->story=$request['story'];
        $content->catagory_id=$request['catagory_id'];
        $content->date=$request['date'];
        $content->name=$request['name'];
        $content->save();

        return redirect('list');
    }

}
