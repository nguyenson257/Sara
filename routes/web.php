<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\admin\CategoriesController;

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
Route::get('/',  [CategoryController::class, 'home'])->name('home');
Route::get('/login', [UserController::class, 'index'])->name('login');
Route::post('/check_login', [UserController::class, 'check_login'])->name('check_login');

//login with facebook
Route::get('/auth/facebook', function () {
    return Socialite::driver('facebook')->redirect();
})->name('login_facebook');
Route::get('/auth/facebook/callback', [UserController::class, 'login_facebook']);

//login with gg
Route::get('/google/callback', [UserController::class, 'login_google']);
Route::get('/google', function () {

    return Socialite::driver('google')->redirect();
})->name('login_google');

Route::get('/register', [UserController::class, 'create'])->name('register');
Route::post('/create_user', [UserController::class, 'store'])->name('create_user');

Route::get('/logout', [UserController::class, 'logout'])->name('logout');

Route::get('/profile', [UserController::class, 'show'])->name('profile');
Route::get('/edit_profile', [UserController::class, 'edit']);
Route::post('/edit_profile', [UserController::class, 'update'])->name('edit_profile');

Route::get('/home', function () {
    return view('shop.pages.home');
});
Route::get('/shop', function () {
    return view('shop.pages.shop');
});
Route::get('/product/{product}', [ProductController::class, 'show'])->name('productDetail');
Route::get('/cart', [CartController::class, 'show'])->name('showCard');
Route::post('/add-to-cart', [CartController::class, 'addProduct'])->name('addCart');
Route::post('/update-cart', [CartController::class, 'updateProduct'])->name('updateCart');
Route::get('/delete-cart', [CartController::class, 'deleteProduct'])->name('deleteCart');
Route::get('/checkout', function () {
    return view('shop.pages.checkout');
});
Route::get('/category/{category_id}', [CategoryController::class, 'view'])->name('category');
// search
Route::post('/search', [CategoryController::class, 'search'])->name('search');
// admin 
Route::group([
    'prefix'=>'/admin',
    'middleware' => 'check_admin',
    ], function() {
    Route::get('/', function (){
        return view('admin.pages.dashboard');
    });
    Route::get('/category', [CategoriesController::class, 'index'])->name('categoryadmin');
    Route::get('/category/delete/{id}', [CategoriesController::class, 'destroy'])->name('categorydelete');
    Route::get('/category/add', [CategoriesController::class, 'getadd'])->name('categoryGetadd');
    Route::post('/category/add', [CategoriesController::class, 'postadd'])->name('categoryPostadd');
    Route::get('/category/edit/{id}', [CategoriesController::class, 'edit'])->name('categoryGetedit');
    Route::post('/category/edit/{id}', [CategoriesController::class, 'update'])->name('categoryPostedit');
});
Route::get('/checkout', [PaymentController::class, 'create'])->name('checkout');
Route::post('/payment', [PaymentController::class, 'store'])->name('payment');
// Route::post('/vnpay_payment', [PaymentController::class, 'vnpay_payment'])->name('vnpay_payment');
Route::get('/return_vnpay', [PaymentController::class, 'return_vnpay'])->name('return_pay');
Route::get('/order', [OrderController::class, 'create'])->name('order');
