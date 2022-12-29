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
    return view('shop.pages.home');
});
Route::get('/login', function () {
    return view('shop.pages.login');
});
Route::get('/register', function () {
    return view('shop.pages.register');
});
// Route::get('/home', function () {
//     return view('shop.pages.home');
// });
Route::get('/shop', function () {
    return view('shop.pages.shop');
});
Route::get('/product', function () {
    return view('shop.pages.product');
});
Route::get('/cart', function () {
    return view('shop.pages.cart');
});
Route::get('/checkout', function () {
    return view('shop.pages.checkout');
});
Route::get('/shop/{category_id}', [\App\Http\Controllers\CategoryController::class, 'view'])->name('category');
Route::get('/', [\App\Http\Controllers\CategoryController::class, 'homecat'])->name('homecateg');