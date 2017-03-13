<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::group(['middleware'=>'auth', 'prefix' => 'admin'],function() {
    Route::get('/', 'AdminControllers\AdminController@index');

    Route::get('/product-list','AdminControllers\ProductController@index');
    Route::get('/create-new-product','AdminControllers\ProductController@create');
    Route::post('/create-new-product','AdminControllers\ProductController@store');
});

Route::get('/', function(){
    return view('website/index');
});

Auth::routes();

Route::get('/admin', 'HomeController@index');
