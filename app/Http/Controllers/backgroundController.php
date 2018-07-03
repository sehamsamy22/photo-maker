<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Background;
use DB;

class backgroundController extends Controller
{
    public function index()
    {
        return view ('admin.background');
    }


public function backgrounds()
{
    $backgrounds=Background::all();
    return view('admin.background',compact('backgrounds'));
}


 public function edit($id)
 { $backgrounds=Background::find($id);
    return view('admin.editbackground',compact("backgrounds")); 
     
 }
function deletebackground($id){
    DB::table('backgrounds')->where('id','=',$id)->delete();
  
    $backgrounds =Background::all();
    return view('admin.background',compact("backgrounds"));
     
 }
 function editbackground(Request $request ,$id){
    
    $this ->validate($request,[
           
        'url'=>'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
     ]);   
            
   $img_name= time() .'.'. $request->url->getClientOriginalExtension();
 
   $backgrounds=Background::find($id);
   $backgrounds->url= $img_name;
   $backgrounds->save();
   $backgrounds =Background::get();
  $request->url-> move(public_path('upload'),$img_name); 
  
   

   
    
    return view('admin.background',compact("backgrounds"));
     
 }
}
