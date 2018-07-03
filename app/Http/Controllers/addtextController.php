<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
class addtextController extends Controller
{
    public function index()
    {
        return view ('admin.addtext');
    }
    public function store_pragraph(Request $request)
    {


        $text =  new Setting;
        $text->about_pragraph=request('about_pragraph');
        $text->contact_mail=request('contact_mail'); 
        $text->contact_phone=request('contact_phone');
        $text->facebook_icon=request('facebook_icon');
        $text->save();
        
        $texts = Setting::get();
      
        return view('admin.setting',compact("texts"));

       
    }
}
