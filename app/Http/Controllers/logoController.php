<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;

class logoController extends Controller
{
    public function index()
    {

return view ('admin.setting');
}
public function logo()

{
$logos=Setting::all();

return view ('admin.setting',compact("logos"));
}
}
