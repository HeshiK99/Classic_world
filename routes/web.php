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


/* FRONTEND ROUTES */
Route::get('/', function () {
    return view('Frontend.home');
})->name('frontend.home');
Route::get('/shop', function () {
    return view('Frontend.shop');
})->name('frontend.shop');
Route::get('/about-us', function () {
    return view('Frontend.about-us');
})->name('frontend.about-us');
Route::get('/contact-us', function () {
    return view('Frontend.contact-us');
})->name('frontend.contact-us');
Route::get('/checkout', function () {
    return view('Frontend.checkout');
})->name('frontend.checkout');


/* BACKEND ROUTES */
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route::get('dashboard', function () {
//     return view('Backend.dashboard');
// })->name('dashboard');

Route::group(
    ['middleware' => 'auth'],
    function ($router) {

        Route::get('brands',[App\Http\Controllers\BrandsController::class,'index'])->name('brands');
        Route::post('brands-store',[App\Http\Controllers\BrandsController::class,'store'])->name('brands.store');
        Route::get('category',[App\Http\Controllers\CategoriesController::class,'index'])->name('categories');
        Route::post('categories-store',[App\Http\Controllers\CategoriesController::class,'store'])->name('categories.store');
        Route::get('product',[App\Http\Controllers\ProductController::class,'index'])->name('product');
        Route::post('product-store',[App\Http\Controllers\ProductController::class,'store'])->name('product.store');
        Route::get('sales', function () {
            return view('Backend.sales');
        })->name('sales');

        Route::get('orders', function () {
            return view('Backend.orders');
        })->name('orders');
        Route::get('stock', function () {
            return view('Backend.stock');
        })->name('stock');


        Route::get('sales-reports', function () {
            return view('Backend.sales-reports');
        })->name('sales-reports');
    }
);