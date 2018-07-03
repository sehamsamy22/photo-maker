<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Setting;

class galleryController extends Controller
{
    public function categorys()
    {$logo=Setting::where('slug','logo' )->first();
        $categorys=   Category::all();
        return view('gallery',compact('categorys','logo'));
    }
}
