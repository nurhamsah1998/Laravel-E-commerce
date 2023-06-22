<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// ADMIN
Route::get('/admin', [AdminController::class,'index']);
Route::get('/admin/category', [CategoryController::class,'index']);
Route::get('/admin/product-api', [ProductController::class,'index']);
Route::get('/admin/product', [AdminController::class,'list_product']);
Route::get('/admin/setting', [AdminController::class,'setting']);

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
