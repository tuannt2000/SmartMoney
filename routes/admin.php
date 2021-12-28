<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;


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

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::prefix('categories')->name('categories.')->group(function () {
        Route::get('', [\App\Http\Controllers\Admin\AdminController::class, 'index'])->name('index');
        Route::get('/edit/{id}', [\App\Http\Controllers\Admin\AdminController::class, 'edit'])->name('edit');
        Route::put('/edit/{id}', [\App\Http\Controllers\Admin\AdminController::class, 'update'])->name('edit.update');
        Route::delete('/delete',[\App\Http\Controllers\Admin\AdminController::class, 'destroy'])->name('delete');
    });

    Route::prefix('users')->name('users.')->group(function() {
        Route::get('/', [\App\Http\Controllers\Admin\UserController::class, 'index'])->name('index');
        Route::get('/edit/{id?}', [\App\Http\Controllers\Admin\UserController::class, 'edit'])->name('edit');
        Route::post('/create', [\App\Http\Controllers\Admin\UserController::class, 'create'])->name('create');
        Route::post('/edit/{id}', [\App\Http\Controllers\Admin\UserController::class, 'update'])->name('edit.update');
        Route::post('/delete', [\App\Http\Controllers\Admin\UserController::class, 'delete'])->name('delete');

    });
});

