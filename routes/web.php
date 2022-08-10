<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\authController;
use App\Http\Controllers\cartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\likeController;
use App\Http\Controllers\ProdactController;
use App\Http\Controllers\SearchController;
use App\Http\Middleware\Authenticate;
use App\Http\Middleware\AuthenticationAdmin;
use App\Http\Middleware\NotAuthenticate;
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

Route::middleware([Authenticate::class])->group(function () {

    Route::get('/', [HomeController::class, 'index']);

    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::get('/search', [SearchController::class, 'index'])->name('search');

    Route::get('/prodact/{id}', [ProdactController::class, 'index']);

    Route::get('/like', [likeController::class, 'index']);

    Route::get('/cart', [cartController::class, 'index']);

    Route::post('/create_oreder', [ProdactController::class, 'create_order'])->name('create.order');

    Route::post('/add_cart', [cartController::class,'add_cart'])->name('add.cart');

    Route::post('/remove_cart', [cartController::class,'remove_cart'])->name('remove.cart');

    Route::post('/add_like', [likeController::class,'add_like'])->name('add.like');

    Route::post('/remove_like', [likeController::class,'remove_like'])->name('remove.like');


});
Route::middleware([NotAuthenticate::class])->group(function () {

    Route::get('/login', [AuthController::class, 'index']);

    Route::get('/signup', [AuthController::class, 'index']);

    Route::get('/auth', [AuthController::class, 'index']);

    Route::get('/admin', [AdminController::class, 'login_for_admin_page'])->name('login_admin_page');

    Route::post('/signup', [AuthController::class, 'signup'])->name('signup');

    Route::post('/login', [AuthController::class, 'login'])->name('login');

    Route::post('/admin', [AdminController::class, 'login_for_admin'])->name("login_admin");
});


Route::middleware([AuthenticationAdmin::class])->group(function () {
    Route::get('/create', [AdminController::class, 'create_prodact']);

    Route::post('/create', [ProdactController::class, 'create_prodact'])->name('prodact.create');

    Route::get('/change', [AdminController::class, 'change_admin_information_page']);

    Route::get('/orders', [AdminController::class, 'orders']);
});
