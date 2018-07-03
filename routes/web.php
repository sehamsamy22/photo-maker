<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/lang/{lang}' , function ($lang){
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
});
Route::get('/test', 'PagesController@test');
Route::group(['middleware' => 'Lang'], function(){

  Route::get('/welcome', 'PagesController@getwelcome');

  Route::get('/', 'PagesController@index');

 

  Route::get('/category/{category}', 'categoryController@index');

  Route::get('/contact', 'ContactController@showConatctForm');

  Route::post('/contact', 'ContactController@saveContactData');

  Route::get('/service', 'ContactController@service');
  Route::get('/reply_to_mail/{id}', 'ContactController@reply_to_mail');
 

 

  Route::get('/pill', 'PagesController@getPill');

  Route::get('/services', 'PagesController@services');

  Route::post('/subscribe', 'subscribeController@store');

  Auth::routes();

  Route::get('/home', 'HomeController@index')->name('home');
  Route::get('/user', 'usersController@index');
  Route::get('/setting', 'settingController@index');
  Route::get('/background', 'backgroundController@index');

  Route::get('/addbackground', 'addbackgroundController@index');
///
Route::post('/addbackground/store','addbackgroundController@store' );

Route::get('/editbackground/{id}','backgroundController@edit' );
Route::get('/background','backgroundController@backgrounds' );
Route::get('background/delete/{id}',"backgroundController@deletebackground");
//Route::get('background/edit',"backgroundController@edit");
Route::post('editbackground/{id}/store',"backgroundController@editbackground");
Route::get('/index','indexController@backgrounds' );
Route::get('/','indexController@backgrounds' );

Route::get('/customer', 'customerController@index');

///
Route::post('/addcustomer/store','addcustomerController@store' );
Route::get('/customer','customerController@customers' );
Route::get('/addcustomer', 'addcustomerController@index');
Route::get('/delete/{id}',"customerController@deletecustomer");
Route::get('/about','aboutController@customers' );


////store_pragraph 
Route::get('/addtext', 'addtextController@index');
Route::post('/addtext/store','addtextController@store_pragraph' );
Route::get('/setting','settingController@settings' );
Route::post('/addmail/store','addtextController@store_pragraph' );
Route::post('/addphone/store','addtextController@store_pragraph' );
Route::get('/addmail', 'addmailController@index');
Route::get('/addphone', 'addphoneController@index');
Route::get('/delete/{id}',"settingController@deletesetting");
//Route::get('/contact','ContactController@index' );
// logo
Route::get('/changelogo', 'changelogoController@index');
Route::post('/changelogo/store','changelogoController@store' );


//category

;
Route::get('/ourcategory', 'categoryController@index');
Route::get('/ourcategory', 'categoryController@categorys');
Route::get('/ourcategory/{category}', 'imagesController@categorys');
Route::post('/addcategory/store','addcategoryController@store' );
Route::get('/addcategory','addcategoryController@index' );
// Route::get('/delete/{id}',"categoryController@deletecategory");
Route::get('/gallery','galleryController@categorys' );
Route::get('/addsetting','addsettingController@index' );
Route::get('/categorys', 'categoryController@all');
Route::post('/addsetting/store','addsettingController@store' );


 
Route::get('/addimage/{category}', 'imagesController@category');
Route::post('/addimage/{category}/store','imagesController@store' );

Route::post('/addservice/{id}/store', 'PagesController@edit');
Route::get('/service/edit/{id}', 'PagesController@editservice');
Route::get('/service/delete/{id}', 'PagesController@deleteservice');
Route::post('/addservice/store', 'PagesController@store');
Route::get('/addservice', 'PagesController@addservice');
Route::get('/ourservice', 'PagesController@ourservice');
Route::get('/ourservice', 'PagesController@ourservice');
//
Route::get('/subscriber', 'subscribeController@index');
Route::get('/subscriber/store', 'subscribeController@save');
Route::get('/download', 'addsettingController@getDownload');
// Route::get('/delete/{id}',"PagesController@deleteuser");
Route::get('/users', 'PagesController@users');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/start','PagesController@login' );

Route::get('addlink/edit/{id}', 'settingController@links');
Route::post('addlink/save/{id}', 'settingController@save');
Route::get('/deletesetting/{id}', 'settingController@deletesetting');
Route::get('addimagesetting/edit/{id}', 'settingController@image');
Route::post('addimagesetting/{id}/store', 'settingController@storeimage');
Route::get('addtext/edit/{id}', 'settingController@about_pragh');
Route::get('addpdf/edit/{id}', 'settingController@pdf');
Route::post('addpdf/{id}/store', 'settingController@storepdf');
});



Route::get('/start', function () {
  return view('admin.start');
});

  Route::get('/adminlogin', function () {
    return view('admin.adminlogin');
  });

  
