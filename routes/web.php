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
 Route::get('/', function () {
     return view('Student/registration');
 });

 Route::match(['get','post'],'registration','Student\LoginController@registration');
  Route::match(['get','post'],'login','Student\LoginController@login');
  Route::match(['get','match'],'logout','Student\LoginController@logout');

Route::group(['prefix'=>'user','middleware'=>'CheckUserAuth'],function(){
	
	Route::match(['get','post'],'/dashboard','Student\LoginController@index');
	Route::match(['get','post'],'/burgershow','Student\LoginController@burgerShow');
   
});

Route::get('admin',function(){
	return view('Admin/login');
});
Route::match(['get','post'],'getLogin','admin\LoginController@getLogin');

Route::group(['prefix'=>'admin','middleware'=>'CheckAdminAuth'],function(){

	Route::match(['get','post'],'/dashboard','admin\LoginController@index');
});



// Route::resource('ajax-crud', 'AjaxCrudController');

// Route::post('ajax-crud/update', 'AjaxCrudController@update')->name('ajax-crud.update');

// Route::get('ajax-crud/destroy/{id}', 'AjaxCrudController@destroy');
