<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Image;
use DB;

class imagesController extends Controller
 {  
    public function category(Category $category)
        {
           
            
            return view ('admin.addimage',compact('category'));
        }
    

public function categorys(Category $category )
{ 
    return view ('admin.category.categoryone')->with(compact('category'));
} 
public function store (Request $request, Category $category)
{
   
    $img_name= time() .'.'. $request->url->getClientOriginalExtension();
    $images= new Image;
    $images->url= $img_name;
    $images->category_id=$category->id;
    $images->save();
    
    $request->url-> move(public_path('upload'),$img_name);

    return view ('admin.category.categoryone',compact('category','images'));
} 

 }