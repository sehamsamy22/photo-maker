<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class twocategoryController extends Controller
{
    public function index()
    {
        return view ('admin.category.categorytwo');
    }
}
