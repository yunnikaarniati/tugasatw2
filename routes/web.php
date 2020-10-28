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
    return view('welcome');
});
Route::get('/layout', function () {
    return view('user.layout');
});
Route::get('/checkout', function () {
    return view('checkout');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/product', function () {
    return view('product');
});

Route::get('/admin', function () {
    return view('user.admin');
});
Route::get('/checkout2', function () {
    return view("checkout2");
});
Route::get('/contact2', function () {
    return view("contact2");
});
Route::get('/login2', function () {
    return view("login2");
});
Route::get('/product2', function () {
    return view("product2");
});