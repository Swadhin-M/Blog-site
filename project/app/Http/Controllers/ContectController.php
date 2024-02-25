<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contect;

class ContectController extends Controller
{
    public function index(Request $request){
        $contect= new contect;
        $contect->full_name=$request['full_name'];
        $contect->email=$request['email'];
        $contect->subject=$request['subject'];
        $contect->massage=$request['massage'];
        $contect->save();
        return back()->with('message','Message send succesfully!');
    }
    public function delete($id){
        $contect=contect::find($id)->delete();
        return back()->with('message','Delete Successfully');
    }
}
