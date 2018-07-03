<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class fivecategoryController extends Controller
{
    public function index()
    {
        return view ('admin.category.categoryfive');
    }
}
