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
Route::get('/our-service', function () {
    return view('public.service');
});
Route::get('/faq', function () {
    return view('public.faq');
});
Route::get('/our-blog', function () {
    return view('public.blog');
});
Route::get('/contact-us', function () {
    return view('public.contact-us');
});

Route::get('/cart', function () {
    return view('public.cart');
});

Route::get('/about-us', 'PublicController@TeamMember');
Route::get('/shop', 'PublicController@allProduct');
Route::get('/our-service/{id}/{slug}', 'PublicController@servicedetails');
Route::get('/our-blog/{id}/{slug}', 'PublicController@blogdetails');
Route::get('/products/{id}/{slug}', 'PublicController@Productdetails');

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


