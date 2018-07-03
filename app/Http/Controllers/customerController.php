<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use DB;

class customerController extends Controller
{
    public function index()
    {
        return view ('admin.customer');
    }
    public function customers()
{
    $customers=Customer::all();
    return view('admin.customer',compact('customers'));
}

function deletecustomer($id){
    DB::table('customers')->where('id','=',$id)->delete();
  
    $customers =Customer::all();
    return view('admin.customer',compact("customers"));
     
 }
}
