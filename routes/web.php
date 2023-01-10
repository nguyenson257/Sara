<?php

use App\Http\Controllers\AccountManagerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderManagerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\admin\CategoriesController;
use App\Http\Controllers\admin\AdminProductController;

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

    Route::get('/product', [AdminProductController::class, 'index'])->name('productadmin');
    Route::get('/product/delete/{id}', [AdminProductController::class, 'destroy'])->name('productdelete');
    Route::get('/product/delete/image/{id}', [AdminProductController::class, 'deleteProductImage'])->name('productImageDelete');
    Route::get('/product/add', [AdminProductController::class, 'getadd'])->name('productGetadd');
    Route::post('/product/add', [AdminProductController::class, 'postadd'])->name('productPostadd');
    Route::get('/product/edit/{id}', [AdminProductController::class, 'edit'])->name('productGetedit');
    Route::post('/product/edit/{id}', [AdminProductController::class, 'update'])->name('productPostedit');

    Route::get('/account', [AccountManagerController::class, 'index'])->name('showAccout');
    Route::get('/all-account', [AccountManagerController::class, 'all_user'])->name('allUser');
    Route::get('/orderadmin', [OrderManagerController::class, 'index'])->name('orderAdmin');
    Route::get('/all-orderadmin', [OrderManagerController::class, 'all_order'])->name('all_orderAdmin');
    Route::post('/update-status/{user_id}', [OrderManagerController::class, 'update_status'])->name('update-status');
    Route::get('/view_profile/{user_id}', [AccountManagerController::class, 'view_profile'])->name('view-profile');
    Route::get('/view_order/{id_order}', [OrderManagerController::class, 'view_order'])->name('view-order');
    Route::post('/search', [AccountManagerController::class, 'search'])->name('searchname');
    Route::get('/print-order/{checkcode}', [OrderManagerController::class, 'print_order'])->name('print-order');
    Route::get('/delete-order/{order_id}', [OrderManagerController::class, 'delete_order'])->name('delete_order');
});
Route::get('/checkout', [PaymentController::class, 'create'])->name('checkout');
Route::post('/payment', [PaymentController::class, 'store'])->name('payment');
// Route::post('/vnpay_payment', [PaymentController::class, 'vnpay_payment'])->name('vnpay_payment');
Route::get('/return_vnpay', [PaymentController::class, 'return_vnpay'])->name('return_pay');
Route::get('/order', [OrderController::class, 'create'])->name('order');
