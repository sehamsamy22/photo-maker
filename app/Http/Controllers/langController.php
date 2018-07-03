<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class langController extends Controller
{
      public function langs($lang){
        
        //if there is a lang in the routing and exist in web site .. else set default lang ...
        if( in_array($lang, ['ar','en']) ) {
          //if there is a user exist on website then deal with DB ... else deal with session ...
          if(auth()->user()) {
            $user = auth()->user();
            $user->lang = $lang;
            $user->save();
          } else {
            //if session exist then remove it ...
            if(session()->has('lang')){
              session()->forget('lang');
            }
            //set session if not exist ...
            session()->put('lang', $lang);
          }

        } else {
          //if there is a user exist on website then deal with DB ... else deal with session ...
          if(auth()->user()) {
            $user = auth()->user();
            $user->lang = 'en';
            $user->save();
          } else {
            //if session exist then remove it ...
            if(session()->has('lang')){
              session()->forget('lang');
            }
            //set session if not exist ...
            session()->put('lang', 'en');
          }
        }

        return back();

      }
}
