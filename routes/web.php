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
    return view('Frontend.home');
})->name('home');
Route::get('/shop', function () {
    return view('Frontend.shop');
})->name('shop');
Route::get('/about-us', function () {
    return view('Frontend.about-us');
})->name('about-us');
Route::get('/contact-us', function () {
    return view('Frontend.contact-us');
})->name('contact-us');

Route::get('dashboard', function () {
    return view('Backend.dashboard');
})->name('dashboard');
Route::get('checkout', function () {
    return view('Frontend.checkout');
})->name('checkout');
Route::get('models', function () {
    return view('Backend.models');
})->name('models');
Route::get('sales', function () {
    return view('Backend.sales');
})->name('sales');
Route::get('orders', function () {
    return view('Backend.orders');
})->name('orders');
Route::get('stock', function () {
    return view('Backend.stock');
})->name('stock');
Route::get('products', function () {
    return view('Backend.products');
})->name('products');
Route::get('categories', function () {
    return view('Backend.categories');
})->name('categories');
Route::get('sales-reports', function () {
    return view('Backend.sales-reports');
})->name('sales-reports');