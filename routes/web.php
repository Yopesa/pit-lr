<?php

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


Auth::routes();

Route::get('/', [App\Http\Controllers\WebController::class, 'index'])->name('home');
Route::get('/catalog', [App\Http\Controllers\ProductController::class, 'catalog'])->name('catalog');

Route::get('/basket', [App\Http\Controllers\BasketController::class, 'basket'])->name('basket');
Route::get('/about', [App\Http\Controllers\WebController::class, 'about'])->name('about');
Route::get('/sales', [App\Http\Controllers\WebController::class, 'sales'])->name('sales');

Route::get('/admin', [App\Http\Controllers\WebController::class, 'admin'])->name('admin');
