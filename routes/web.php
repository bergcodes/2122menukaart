<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('/category/create', [CategoryController::class, 'getCreate'])->name('category.create');
Route::post('/category/create', [CategoryController::class, 'postCreate'])->name('category.create.post');
Route::get('/product/create', [ProductController::class, 'getCreate'])->name('product.create');
Route::post('/product/create', [ProductController::class, 'postCreate'])->name('product.create.post');

Route::get('/menu', [MenuController::class, 'getMenu'])->name('getMenu');
