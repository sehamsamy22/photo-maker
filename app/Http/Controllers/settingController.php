<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
use DB;

class settingController extends Controller
{
    public function index()
            {
       
        return view ('admin.setting');
    }
    public function settings()
    {
        $settings=Setting::all();
       
        return view ('admin.setting',compact("settings"));
    }
    public function contact()
    {
        $texts=Setting::all();
       
        return view ('contact',compact("texts"));
    }

    public function image( $id)
    {
        $setting=Setting::where('id','=',$id)->first();
       
        return view ('admin.addimagesetting',compact('setting'));
    }
    public function pdf( $id)
    {
        $setting=Setting::where('id','=',$id)->first();
       
        return view ('admin.addpdf',compact('setting'));
    }
    public function links( $id)
    {
        $settings=Setting::find($id);
       
        return view ('admin.addlink',compact('settings'));
    }
    public function storeimage(Request $request,$id)
    {
        $this->validate(request(),[

         
    
            'value' => 'image|mimes:jpeg,png,jpg,svg',
    
          
    
        ]);
        $img_name= time() .'.'. $request->value->getClientOriginalExtension();
       
  
        $settings =Setting::find($id);
       $settings->value= $img_name;
       $settings->save();
       $settings=Setting::get();
      $request->value-> move(public_path('upload'),$img_name);
      return view('admin.setting',compact('settings'));
    }
    public function storepdf(Request $request,$id)
    {
        $this->validate(request(),[
            'value' => 'required|mimes:pdf',     
        ]);
        $uniqueFileName =time() .'.'. $request->value->getClientOriginalExtension() ;

        $settings =Setting::find($id);
       $settings->value=  $uniqueFileName;
       $settings->save();
       $settings=Setting::get();
      $request->value-> move(public_path('upload'),$uniqueFileName);
    
         return view('admin.setting',compact('settings'));
    }

    public function save( $id)
    {
     
        $settings =Setting::find($id);
        $settings->value=request('facebook');
        $settings->save();
        $settings=Setting::get();
       // return back();
   return view('admin.setting',compact('settings'));
    }
    public function about_pragh($id)
    {  
         $settings=Setting::find($id); 
        return view ('admin.addtext',compact('settings'));
    }

    
  


    function deletesetting($id){
        DB::table('settings')->where('id','=',$id)->delete();
        
        $settings =Setting::all();
        return back();
       // return view('admin.setting',compact("settings"));
         
     }
}
