<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use  DB;
use App\Image;
class categoryController extends Controller
{
   
    public function index($name )
{  
    
    // $category= DB::table('categorys')
    //                     ->select('id')
    //                     ->where('name', '=',$name )->get();
                     $images=   Category::where('name',$name)->first()->images;
                     
                        
    
    return view ('category')->with(compact('images','name'));
}  
    
     
    public function show()
    {
        return view ('category');
    }
    public function all()
    {
        return view ('admin.categorys');
    }

    public function categorys()
{    
    $categorys=Category::all();
    return view('admin.ourcategory',compact('categorys','logo'));
}



function deletecategory($id){
    DB::table('categorys')->where('id','=',$id)->delete();
   
    $categorys =Category::all();
    return view('admin.category',compact("categorys"));
     
 }
 public function index2 (Request $request)
 { $request->session()->put('name',$request->input('name'));

     return view ('admin.category.categoryone')->with('name',$request->Session()->get('name'));
 }
}
