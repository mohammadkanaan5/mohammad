<?php

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




Route::get('/', [App\Http\Controllers\webController::class, 'home'])->name('home');

Route::get('/categories/{category}', [App\Http\Controllers\webController::class, 'categoryProducts']);

Route::get('/products/{product}', [App\Http\Controllers\webController::class, 'productsDetails']);



Route::prefix('admin')->group(function(){


    Route::get('/login', [App\Http\Controllers\UserController::class, 'login'])->name('login');

    Route::post('/login', [App\Http\Controllers\UserController::class, 'loginData'])->name('admin.loginData');


    Route::middleware('auth')->group(function(){


        Route::get('/', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

        Route::get('/products', [App\Http\Controllers\ProductController::class, 'index'])->name('products.index');
        
        Route::get('/products/create', [App\Http\Controllers\ProductController::class, 'create'])->name('products.create');
        
        Route::post('/products', [App\Http\Controllers\ProductController::class, 'store'])->name('products.store');


        
        Route::get('/categories', [App\Http\Controllers\CategoryController::class, 'index'])->name('categories.index');
        
        
        
        
        Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('users.index');

        Route::get('/users/create', [App\Http\Controllers\UserController::class, 'create'])->name('users.create');

        Route::post('/users', [App\Http\Controllers\UserController::class, 'store'])->name('users.store');


    });


});