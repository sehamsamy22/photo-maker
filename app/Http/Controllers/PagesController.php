<?php

namespace App\Http\Controllers;
use DB;

use App\User;
use App\Ourservice;
use App\Setting;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
      $logo=Setting::where('slug','logo' )->first();
       return view('index',compact('settings','logo'));
    }

   

   

    public function getPill() {
      return view('pill');
    }

    public function services() {
      $logo=Setting::where('slug','logo' )->first();
      $services=Ourservice::all();
      return view('services',compact('services','logo'));
    }

    public function getCategory() {
      return view('category');
    }
    public function test() {
      return view('admin.test');
    }
    
    public function addicategoryimages() {
      return view('admin.addicategoryimages');
    }
    public function getwelcome() {
      return view('welcome');
    }
    public function users() {
      $users=User::all();
      return view('admin.users',compact('users'));
    }

    public function  login (Request $req)
    {
        $username = $req->input('name');
        $password = $req->input('password');
        $checklogin =DB::table('users')->where(['name'=>$username,'password'=>$password])->get();
        if(count($checklogin)> 0)
      {
        return view('admin.start');
      } else{
 return view('admin.adminlogin');
      }
      
     
    }
   public function deleteuser($id){
      DB::table('users')->where('id','=',$id)->delete();
      $users=User::all();
      return view('admin.users',compact('users'));
       
   }
   public function ourservice() {
    $services=Ourservice::all();
    return view('admin.ourservice',compact('services'));
  }
  public function addservice() {
    $services=Ourservice::all();
    return view('admin.addservice',compact('services'));
  }
public function store(Request $request)
{
  $services= new Ourservice;
 
  $services->title=request('title') ;
  $services->body=request('body') ;

  $services->save();
  return view('admin.ourservice',compact('services'));
}
public function deleteservice($id){
  DB::table('ourservices')->where('id','=',$id)->delete();
  $services=Ourservice::all();
  return view('admin.ourservice',compact('services'));
   
}
public function edit( $id)
{
 
  $services =Ourservice::find($id);
  $services->title=request('title');
  $services->body=request('body');
  $services->save();
  $services=Ourservice::get();
   // return back();
return view('admin.ourservice',compact('services'));
}
public function editservice($id) {
  $service =Ourservice::find($id);
  return view('admin.editservice',compact('service'));
}
    
}
