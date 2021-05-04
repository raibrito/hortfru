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
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\UserController;
//Route::get('/', function () {
//    return view('home');
//});

Route::match(['get', 'post'], '/', [ProductController::class, 'index'])->name('home');

Route::match(['get', 'post'], '/category', [ProductController::class, 'category'])->name('category');

Route::match(['get', 'post'], '/{idcategory}/category', [ProductController::class, 'category'])->name('category_id');

Route::match(['get', 'post'], '/register', [ClientController::class, 'register'])->name('register');

Route::match(['get', 'post'], '/client/register', [ClientController::class, 'registerClient'])->name('register_client');

Route::match(['get', 'post'], '/login', [UserController::class, 'login'])->name('login');

Route::match(['get', 'post'], '/{idproduct}/cart/add', [ProductController::class, 'addCart'])->name('add_cart');

Route::match(['get', 'post'], '/cart', [ProductController::class, 'viewCart'])->name('view_cart');

Route::match(['get', 'post'], '/{index}/cartdelete', [ProductController::class, 'cartDelete'])->name('cart_delete');
