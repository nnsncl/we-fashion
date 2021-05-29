<?php

use App\Http\Controllers\AdministrationController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

// Guests Routes
Route::resource('/', ProductsController::class); 
Route::get('/discount', [ProductsController::class, 'discount']);
Route::get('/details/{product}', [ProductsController::class, 'details'])->where(['id' => '[0-9]+']);
Route::get('/men', [ProductsController::class, 'menProducts']);
Route::get('/women', [ProductsController::class, 'womenProducts']);

// Admins Routes
Auth::routes();
Route::resource('/admin/products', AdministrationController::class);
Route::resource('/admin/categories', CategoryController::class);
