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

Route::get('auth/login','App\Http\Controllers\userController@getdangnhap');

Route::post('auth/login','App\Http\Controllers\userController@postdangnhap');

Route::get('auth/signup','App\Http\Controllers\userController@getdangky');

Route::post('auth/signup','App\Http\Controllers\userController@postdangky');

Route::get('auth/forgot-password','App\Http\Controllers\userController@getForgotPassword');

Route::post('auth/forgot-password','App\Http\Controllers\userController@postForgotPassword');

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/settings/account', function () {
    return view('settings.account');
});

Route::get('/settings/support', function () {
    return view('settings.support');
});

Route::get('/settings/terms', function () {
    return view('settings.terms');
});
