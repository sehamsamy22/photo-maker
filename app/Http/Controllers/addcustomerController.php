<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class addcustomerController extends Controller
{
    public function index()
    {
        return view ('admin.addcustomer');
    }
    public function store(Request $request)
    {
        // $this ->validate($request,[
           
        //     'url'=>'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        // ]);   
                
       $img_name= time() .'.'. $request->url->getClientOriginalExtension();
       
       $customer= new Customer;
       $customer->image= $img_name;
       $customer->save();
      
      $request->url-> move(public_path('upload'),$img_name); 
      
 
      return redirect('/customer');
   }
}
