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

//Payment Gateway API Routes

Route::get('payPremium', ['as'=>'payPremium','uses'=>'PaypalController@payPremium']);
Route::post('getCheckout', ['as'=>'getCheckout','uses'=>'PaypalController@getCheckout']);
Route::get('getDone', ['as'=>'getDone','uses'=>'PaypalController@getDone']);
Route::get('getCancel', ['as'=>'getCancel','uses'=>'PaypalController@getCancel']);

Route::post('order-post', ['as'=>'order-post','uses'=>'PaymentController@orderPost']);

Route::get('/bl',['as'=>'pages.blog', 'uses'=>'PagesController@getBlog']);
Route::get('blog/{slug}',['as' =>'pages.single','uses' => 'PagesController@getSingle'])->where('slug','[\w\d\-\_]+');

//English Routes
Route::get('/eg',['as'=>'en.index', 'uses'=>'EnController@getIndex']);
Route::get('en/gallery','EnController@getGallery');
Route::get('en/packages','EnController@getPackage');
Route::get('en/hotspot','EnController@getHotspot');
Route::get('en/transport','EnController@getTransport');
Route::get('en/service','EnController@getService');
Route::get('en/contact','EnController@getContact');
Route::get('en/about','EnController@getAbout');

//Japanese Routes

Route::get('process','PagesController@getProcess');
Route::get('download','PagesController@getDownload');
Route::get('gallery','PagesController@getGallery');
Route::get('/faq','PagesController@getFaq');
Route::get('/swahili','PagesController@getSwahili');
Route::get('/park','PagesController@getPark');
Route::get('/koen','PagesController@getKoen');
Route::get('/package','PagesController@getPackage');
Route::get('/hotspot','PagesController@getHotspot');
Route::get('/satsuei','PagesController@getSatsuei');
Route::get('/transport','PagesController@getTransport');
Route::get('/service','PagesController@getService');
Route::get('/contact','PagesController@getContact');
Route::get('/about','PagesController@getAbout');
Route::get('/','PagesController@getIndex');
