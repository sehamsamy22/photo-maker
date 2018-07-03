<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;

class changelogoController extends Controller
{
    public function index()
    {
        return view ('admin.changelogo');
    }
    public function store(Request $request)
    {
         
                
       $img_name= time() .'.'. $request->logo->getClientOriginalExtension();
       
       $logos= new Setting;
       $logos->logo= $img_name;
       $logos->save();
      
      $request->logo-> move(public_path('upload'),$img_name); 
      
 
      return redirect('/setting');
   }
}
