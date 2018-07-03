<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class onecategoryController extends Controller
{
    public function index(Request $request)
    { $request->session()->put('name',$request->input('name'));

        return view ('admin.category.categoryone')->with('name',$request->Session()->get('name'));
    }
    

    
}
