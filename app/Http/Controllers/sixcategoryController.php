<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sixcategoryController extends Controller
{
    public function index()
    {
        return view ('admin.category.categorysix');
    }
}
