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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('principal');
});

Route::get('/basket', function () {
    return view('basket');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/category-full', function () {
    return view('category-full');
});

Route::get('/category-right', function () {
    return view('category-right');
});

Route::get('/category', function () {
    return view('category');
});

Route::get('/checkout1', function () {
    return view('checkout1');
});

Route::get('/checkout2', function () {
    return view('checkout2');
});

Route::get('/checkout3', function () {
    return view('checkout3');
});

Route::get('/checkout4', function () {
    return view('checkout4');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/customer-account', function () {
    return view('customer-account');
});

Route::get('/customer-order', function () {
    return view('customer-order');
});

Route::get('/customer-orders', function () {
    return view('customer-orders');
});

Route::get('/customer-wishlist', function () {
    return view('customer-wishlist');
});

Route::get('/detail', function () {
    return view('detail');
});

Route::get('/detail', function () {
    return view('detail');
});
Route::get('/faq', function () {
    return view('faq');
});
Route::get('/post', function () {
    return view('post');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/text-right', function () {
    return view('text-right');
});

Route::get('/test', function(){
	echo "Esto es una simple prueba!!";
});
