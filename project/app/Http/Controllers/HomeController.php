<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\content;
use App\Models\setting;
use App\Models\gallary;
use App\Models\contect;

class HomeController extends Controller
{
    public function index(){
        $catagory=gallary::all();
        $setting=setting::latest()->limit('1')->get();
        $content=gallary::all();
        return view('content.input', compact('content','catagory') );
    }
    public function list(){
        $catagory=gallary::all();
        $content=content::latest()->get();
        return view('content.list_content', compact('content'));
    }
    public function control(){
        $setting=setting::latest()->limit('1')->get();
        return view('front_theme.layout.head', compact('setting'));
    }


    public function test(){
        $setting=setting::latest()->limit('1')->get();
        $catagory=gallary::all();
        $content=content::limit(4)->get();
        $contenthead=content::limit(1)->latest()->get();
        $contents=content::latest()->get();
        return view('front_theme.content',compact('setting','content','catagory','contents','contenthead'));
    }
    public function view(){


        return view('front_theme.view');
    }
    public function footer(){
        $setting=setting::latest()->limit('1')->get();
        $content=content::latest()->limit('9')->get();
        $catagory=gallary::all();

        return view('front_theme.layout.footer',compact('setting','content','catagory'));
    }

    public function catagoryblog($id){
        $setting=setting::latest()->limit('1')->get();
        $catagorys=gallary::find($id);
        $catagory=gallary::all();

        $contents=content::where('catagory_id',$id)->get();
        return view('catagory.catagory_wise_show', compact('contents','catagory','setting','catagorys'));
    }
    public function contect(){
        $catagory=gallary::all();
        $setting=setting::latest()->limit('1')->get();

        return view('front_theme.contect',compact('setting','catagory'));
    }
    public function blog(){
        $catagory=gallary::all();
        $contents=content::all();
        $setting=setting::latest()->limit('1')->get();
        return view('front_theme.blog', compact('contents','setting','catagory'));
    }
    public function setting(){

        return view('settings.input');
    }

    public function show(){
        $setting=setting::all();
        return view('settings.list', compact('setting'));
    }

    public function catagory(){

        return view('catagory.input');
    }
    public function catagorylist(){
        $catagory=gallary::all();

        return view('catagory.list', compact('catagory'));
    }
    public function con(){
        $contect=contect::all();

        return view('front_theme.contect_list', compact('contect'));
    }
    public function single($id){

        $catagory=gallary::all();
        $setting=setting::latest()->limit('1')->get();
        $content=content::find($id);
        $contents=content::latest()->limit('6')->get();

            return view('single',compact('content','setting','catagory','contents'));




    }
}
