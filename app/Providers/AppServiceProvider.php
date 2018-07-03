<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $settin =\App\Setting::first();
 
        \View::share('settings', $settin);

        $servic =\App\Contact::first();
 
        \View::share('services', $servic);


        app()->singleton('lang', function(){
            // if there is a authentcated user .. else then check session ...
            if(auth()->user()){
              if(empty(auth()->user()->lang)){
                return 'en';
              } else {
                return auth()->user()->lang;
              }
            } else {
              //if visitor selected the lang get session lang ... else return default lang ...
              if(session()->has('lang')){
                return session()->get('lang');
              } else {
                return 'en';
              }
            }
    
          });
    
        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
