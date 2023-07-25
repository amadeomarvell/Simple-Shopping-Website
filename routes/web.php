<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('outer-home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/home', [ProductController::class, 'products']);
Route::get('/hot-items', [ProductController::class, 'hot_items']);
Route::get('/product-detail/{id}', [ProductController::class, 'product_detail']);
Route::get('/brand-detail/{id}', [BrandController::class, 'brand_detail']);
Route::get('/category-product/{id}', [CategoryController::class, 'category_detail']);
Route::get('/home/{id}',[ProductController::class, 'search_product']);
Route::get('/view-profile',[UserController::class, 'view_profile']);
Route::get('/view-cart',[CartController::class, 'view_cart']);
Route::get('/transaction',[TransactionController::class, 'transaction']);
Route::post('/cart/add/{productId}', [CartController::class, 'addToCart'])->name('cart.add');
Route::post('/checkout', [TransactionController::class, 'checkout'])->name('checkout');
Route::get('/update-profile/{id}',[UserController::class, 'update_profile_view']);
Route::post('/update-profile', [UserController::class, 'update_profile'])->name('update-profile');
Route::get('/delete-profile/{id}', [UserController::class, 'delete_profile']);
Route::get('/delete-cart/{id}', [CartController::class, 'delete_cart_product']);
