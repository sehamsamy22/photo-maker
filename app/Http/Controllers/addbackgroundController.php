<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Background;

class addbackgroundController extends Controller
{
    public function index()
    {
        return view ('admin.addbackground');
    }
    public function store(Request $request)
    {
         $this ->validate($request,[
           
            'url'=>'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
         ]);   
                
       $img_name= time() .'.'. $request->url->getClientOriginalExtension();
       
       $background= new Background;
       $background->url= $img_name;
       $background->save();
      
      $request->url-> move(public_path('upload'),$img_name); 
      
 
      return redirect('/background');
   } 
}
