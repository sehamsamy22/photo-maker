<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
use DB;
use PDF;

class addsettingController extends Controller
{
    public function index()
    {
        return view ('admin.addsetting');
    }
    public function store(Request $request)
    {
        // $this ->validate($request,[
           
        //     'url'=>'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        // ]);   
        
                
       $img_name= time() .'.'. $request->logo->getClientOriginalExtension();
       $img_name2= time() .'.'. $request->website_icon->getClientOriginalExtension();
       $uniqueFileName =time() .'.'. $request->download_profile->getClientOriginalExtension() ;

  
       $seting= new Setting;
       $seting->value= $img_name;
       $seting->slug=request('slug') ;
     

       $seting->save();
      
      $request->value-> move(public_path('upload'),$img_name);
      $request->website_icon-> move(public_path('upload'),$img_name2);  
      $request->download_profile->move(public_path('files') , $uniqueFileName);

 
      return redirect('/setting');
   } 
  
  

public function getDownload()
{
    //PDF file is stored under project/public/download/info.pdf
   // $file= public_path(). "/files/ww.pdf";

    $headers = [
        'Content-Type' => 'application/pdf',
     ];

return response()->download($download_profile, 'profile.pdf', $headers);
    }
}
