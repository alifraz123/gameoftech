<?php

use Illuminate\Support\Facades\Route;

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
    return view('client/pages/index');
});

Route::get('aboutus',function(){
    return view('client/pages/aboutus');
});

Route::get('contactus',function(){
    return view('client/pages/contactus');
});
Route::get('privacypolicy',function(){
    return view('client/pages/privacy');
});
Route::get('exchange_and_return',function(){
    return view('client/pages/exchange_and_return');
});
Route::get('cart',function(){
    return view('client/pages/cart');
});
Route::get('checkout',function(){
    return view('client/pages/checkout');
});
Route::get('detail',function(){
    return view('client/pages/detail');
});
Route::get('brands',function(){
    return view('client/pages/brands');
});
Route::get('categories',function(){
    return view('client/pages/categories');
});
Route::get('category',function(){
    return view('client/pages/category');
});
Route::get('subcategory',function(){
    return view('client/pages/subcategory');
});
Route::get('subdowncategory',function(){
    return view('client/pages/subdowncategory');
});

