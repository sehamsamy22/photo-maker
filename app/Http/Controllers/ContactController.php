<?php

namespace App\Http\Controllers;
use App\Mail\OrderShipped;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Contact;
use App\Service;
use App\Setting;
use Mail;
use PDF;

class ContactController extends Controller
{
  
    public function showConatctForm(){
      $service=['fernture','food','hotel','events','bluilding' ,'devices','people'];
      $logo=Setting::where('slug','logo' )->first();
      $contact_email=Setting::where('slug','contact_email' )->first();
      $contact_phone=Setting::where('slug','contact_phone' )->first();
      return view('contact',compact('service','contact_email','contact_phone','logo'));
    }
    public function  reply_to_mail(Request $id){
      $service=Contact::find($id);
      return view('admin.reply_to_mail',compact('service'));
    }
    public function service(){
$services=Contact::all();
      return view('admin.service',compact('services'));
    }

    public function saveContactData(Request $request){
   
      $this-> validate($request,[
        'name' => 'required|min:3',
        'activity' => 'required',
        'phone' => 'required|numeric',
        'email' => 'required|email',
        'file' => 'mimes:jpeg,bmp,png,jpg,gif,svg,pdf,ppt,docx,doc,xls,ods,xlsx',
        
        
           ]);


      $data = array(
            'name' => $request->name,
            'activity' => $request->activity,
            'phone' => $request->phone,
            'email' => $request->email,
            'file' => $request->file,
            'service' => $request->service,
            'number' => $request->number,
            'attribute' => $request->attribute,
          );
         
               
          //   return $pdf->download('test.pdf');
          Mail::send('mails.contact', $data, function($message) use ($data){
                $message->to('ssfs2@sfs.csds');
                $message->from($data['email'], $data['name']);
                $message->subject($data['activity']);
                $message->attach($data['file']->getRealPath(), array(
                  'as' => 'file is '. $data['file']->getClientOriginalExtension() ,
                  'mime' => $data['file']->getMimeType()
                ));
                $pdf = PDF::loadView('mails.contact', $data);
                $message->attachData($pdf->output(),'test.pdf');
                     
              });  
        
            $uniqueFileName =time() .'.'. $request->file->getClientOriginalExtension() ;


              $services= new Contact;
              $services->name= request('name');
              $services->email=request('email');
              $services->activity= request('activity');
              $services->phone=request('phone');
               $services->file= $uniqueFileName;
             
              $services->save();
              $request->file->move(public_path('upload') , $uniqueFileName);
              
              $service=new Service;
              $service->service =request('service');
              $service->number =request('number');
              $service->attribute =request('attribute');
               $service->save();
}


}
