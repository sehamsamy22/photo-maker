<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class threecategoryController extends Controller
{
    public function index()
    {
        return view ('admin.category.categorythree');
    }
}
