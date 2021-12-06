<?php

use Illuminate\Support\Facades\Route;
use App\Models\Wallet;
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
Route::group(['prefix'=>'auth'],function(){
    Route::get('login','App\Http\Controllers\userController@getdangnhap');

    Route::post('login','App\Http\Controllers\userController@postdangnhap');
    
    Route::get('signup','App\Http\Controllers\userController@getdangky');
    
    Route::post('signup','App\Http\Controllers\userController@postdangky');
    
    Route::get('forgot-password','App\Http\Controllers\userController@getForgotPassword');
    
    Route::post('forgot-password','App\Http\Controllers\userController@postForgotPassword');
});

Route::get('dashboard','App\Http\Controllers\dashboardController@getDashboard');

Route::group(['prefix'=>'wallet/{id}'],function(){
    Route::get('transactions', function ($id) {
        $wallet = Wallet::find($id);
        return view('wallet.transactions',['wallet'=>$wallet]);
    });

    Route::get('overview', function ($id) {
        $wallet = Wallet::find($id);
        return view('wallet.overview',['wallet'=>$wallet]);
    });

    Route::get('budgets', function ($id) {
        $wallet = Wallet::find($id);
        return view('wallet.budgetsDetail',['wallet'=>$wallet]);
    });

    Route::group(['prefix'=>'settings'],function(){
        Route::get('general','App\Http\Controllers\walletController@generalWallets');

        Route::get('categories','App\Http\Controllers\categoryController@getCategories');

        Route::post('categories/create','App\Http\Controllers\categoryController@createCategories');
    
        Route::post('categories/fix/{idCategory}','App\Http\Controllers\categoryController@fixCategories');
    
        Route::post('categories/delete','App\Http\Controllers\categoryController@deleteCategories');
    });
});

Route::get('budgets', function () {
    return view('budgetsDetail');
});

Route::group(['prefix'=>'settings'],function(){
    Route::get('account','App\Http\Controllers\settingsController@getAccount');
    
    Route::post('account/{id}','App\Http\Controllers\settingsController@postAccount');

    Route::get('account/delete/{id}','App\Http\Controllers\settingsController@deleteAccount');
    
    Route::get('support', function () {
        return view('settings.support');
    });
    
    Route::get('terms', function () {
        return view('settings.terms');
    });

    Route::get('all-categories','App\Http\Controllers\categoryController@getAllCategories');

    Route::post('all-categories/create','App\Http\Controllers\categoryController@createAllCategories');

    Route::post('all-categories/fix/{id}','App\Http\Controllers\categoryController@fixAllCategories');

    Route::post('all-categories/delete','App\Http\Controllers\categoryController@deleteAllCategories');
});

