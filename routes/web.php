<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\authController;
use App\Http\Controllers\cartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\likeController;
use App\Http\Controllers\ProdactController;
use App\Http\Controllers\SearchController;
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

Route::get('/', [HomeController::class,'index']);

Route::get('/home', [HomeController::class,'index']);

Route::get('/login', [AuthController::class,'index']);

Route::get('/signup', [AuthController::class,'index']);

Route::get('/auth', [AuthController::class,'index']);

Route::get('/search', [SearchController::class,'index']);

Route::get('/prodact/{id}', [ProdactController::class,'index']);

Route::get('/admin', [AdminController::class,'login_for_admin']);

Route::get('/create', [AdminController::class,'create_prodact']);

Route::get('/change', [AdminController::class,'change_admin_information']);

Route::get('/orders', [AdminController::class,'orders']);

Route::get('/like', [likeController::class,'index']);

Route::get('/cart', [cartController::class,'index']);
