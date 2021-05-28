<?php

use App\Http\Controllers\AdministrationController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontController;
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
Route::resource('/', FrontController::class);

Route::get('/discount', [FrontController::class, 'discount']);
Route::get('/details/{product}', [FrontController::class, 'details'])->where(['id' => '[0-9]+']);
Route::get('/men', [FrontController::class, 'menProducts']);
Route::get('/women', [FrontController::class, 'womenProducts']);

// Admins Routes
Auth::routes();
Route::resource('/admin/products', AdministrationController::class);
Route::resource('/admin/categories', CategoryController::class);

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
