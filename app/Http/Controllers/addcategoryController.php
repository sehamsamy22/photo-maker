<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class addcategoryController extends Controller
{
    public function index()
    {
        return view ('admin.addcategory');
    }
    public function store(Request $request)
    {
        // $this ->validate($request,[
           
        //     'url'=>'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        // ]);   
                
       $img_name= time() .'.'. $request->header_image->getClientOriginalExtension();
       
       $category= new Category;
       $category->name=request('name');
       $category->header_image= $img_name;
       $category->save();
      
      $request->header_image-> move(public_path('upload'),$img_name); 
      
 
      return redirect('/ourcategory');
   } 
}
