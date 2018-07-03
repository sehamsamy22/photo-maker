<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Background;
use App\Setting;
class indexController extends Controller
{
    public function backgrounds(Setting $setting)
    { $logo=Setting::where('slug','logo' )->first();
        $backgrounds=Background::all();
        return view('index',compact('backgrounds','logo'));
    }
}
