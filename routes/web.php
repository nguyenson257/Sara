<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
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
Route::get('/home', function () {
    return view('shop.pages.home');
});
Route::get('/shop', function () {
    return view('shop.pages.shop');
});
Route::get('/product/{product}', [ProductController::class, 'show']);
Route::get('/cart', [CartController::class, 'show'])->name('showCard');
Route::post('/add-to-cart', [CartController::class, 'addProduct'])->name('addCart');
Route::post('/update-cart', [CartController::class, 'updateProduct'])->name('updateCart');
Route::post('/delete-cart', [CartController::class, 'deleteProduct'])->name('deleteCart');
Route::get('/checkout', function () {
    return view('shop.pages.checkout');
});
