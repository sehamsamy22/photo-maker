<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Setting;
class aboutController extends Controller
{
    public function customers()
    {  $abouts=Setting::where('slug','about_pragh' )->first();
        $logo=Setting::where('slug','logo' )->first();
        $download_profile=Setting::where('slug','download_profile' )->first();
    
        $customers=  Customer::all();
        return view('about',compact('customers','abouts','download_profile','logo'));
    }
   

}
