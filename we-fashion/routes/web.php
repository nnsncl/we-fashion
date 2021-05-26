<?php

use App\Http\Controllers\ProductsController;
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

// Client Routes
Route::resource('/', ProductsController::class);

Route::get('/discount', [ProductsController::class, 'discount']);
Route::get('/details/{product}', [ProductsController::class, 'details'])->where(['id' => '[0-9]+']);

Route::get('/men', [ProductsController::class, 'menProducts']);
Route::get('/women', [ProductsController::class, 'womenProducts']);

// Admin Routes
Route::get('/products/edit', [ProductsController::class, 'editProducts']);