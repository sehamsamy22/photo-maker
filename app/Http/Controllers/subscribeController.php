<?php

namespace App\Http\Controllers;
use App\subscribe;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

class subscribeController extends Controller
{
    public function store(Request $request){
      $validatedData = $request->validate([
        'email' => 'required|email',
      ]);

      $emailData = $request->email;

      $request->session()->flash('status', 'You Subscribed successfully !!');

      //return $emailData;
      return Redirect::to('contact');

    }
    public function index (){
      return view ('admin.subscriber');
    }
    public function save(Request $request){

        $subscribers=new Subscriber();
        $subscribers->email=request('email');
        $subscribers->reply=request('reply');
        $subscribers->save();
      return view ('admin.subscriber',compact('subscribers'));
    }

}
