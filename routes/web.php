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
Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/', function () {
    return view('public.index');
});
Route::get('/shop', function () {
    return view('public.shop');
});
Route::get('/product', function () {
    return view('public.product');
});
Route::get('/faq', function () {
    return view('public.faq');
});
Route::get('/ad', function () {
    return view('admin.index');
});


/* Ad-min Panel Routes */

Route::resource('product','ProductController');
Route::resource('blog','BlogController');
Route::resource('gallery','GalleryController');
Route::resource('page','PageController');
Route::resource('service','ServiceController');
Route::resource('member','TeamController');
Route::get('orders','AdminController@OrderList');
Route::get('message','AdminController@ContactMessage');
Route::get('review','AdminController@Review');


Route::post('message/{id}', 'AdminController@destroyMessage');


