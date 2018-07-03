<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Text;

class textController extends Controller
{
    public function index()
    {
        return view ('admin.setting');
    }
    public function texts()
{
    $texts=Text::all();
    return view('admin.text',compact('texts'));
}

function deletetext($id){
    DB::table('texts')->where('id','=',$id)->delete();
    //return view('posts.addPost');
    $texts =Text::all();
    return view('admin.setting',compact("texts"));
     
 }
}
