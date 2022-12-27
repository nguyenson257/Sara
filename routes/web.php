<?php

use App\Http\Controllers\UserController;
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
Route::get('/register', [UserController::class, 'create']);
Route::post('/create_user', [UserController::class, 'store'])->name('create_user');



Route::get('/home', function () {
    return view('shop.pages.home');
});
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
