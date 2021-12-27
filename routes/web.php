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

Route::post('dashboard/createWallet/{id}','App\Http\Controllers\dashboardController@createWallet');

Route::get('budgets', 'App\Http\Controllers\budgetController@budget');

Route::post('budgets/create', 'App\Http\Controllers\budgetController@createBudget');

Route::get('budgetsDetail/{id_budget}', 'App\Http\Controllers\budgetController@budgetsDetail');

Route::post('budgetsDetail/fix/{id_budget}', 'App\Http\Controllers\budgetController@fixBudgetsDetail');

Route::get('budgetsDetail/delete/{id_budget}', 'App\Http\Controllers\budgetController@deleteBudgetsDetail');

Route::group(['prefix'=>'wallet/{id}'],function(){
    Route::get('transactions', 'App\Http\Controllers\transactionController@transactionWallets');

    Route::post('transactions/create', 'App\Http\Controllers\transactionController@createTransaction');

    Route::post('transactions/fix/{idTransaction}', 'App\Http\Controllers\transactionController@fixTransaction');

    Route::post('transactions/delete', 'App\Http\Controllers\transactionController@deleteTransaction');

    Route::get('overview', 'App\Http\Controllers\transactionController@overViewWallets');

    Route::get('budgets','App\Http\Controllers\budgetController@budgetWallets');

    Route::post('budgets/create','App\Http\Controllers\budgetController@createBudgetWallets');

    Route::get('budgetsDetail/{id_budget}','App\Http\Controllers\budgetController@budgetDetailWallets');

    Route::post('budgetsDetail/fix/{id_budget}','App\Http\Controllers\budgetController@fixBudgetDetailWallets');

    Route::get('budgetsDetail/delete/{id_budget}','App\Http\Controllers\budgetController@deleteBudgetDetailWallets');

    Route::group(['prefix'=>'settings'],function(){
        Route::get('general','App\Http\Controllers\walletController@generalWallets');

        Route::post('general/fix','App\Http\Controllers\walletController@fixWallets');

        Route::post('general/delete','App\Http\Controllers\walletController@deleteWallets');

        Route::get('categories','App\Http\Controllers\categoryController@getCategories');

        Route::post('categories/create','App\Http\Controllers\categoryController@createCategories');

        Route::post('categories/fix/{idCategory}','App\Http\Controllers\categoryController@fixCategories');

        Route::post('categories/delete','App\Http\Controllers\categoryController@deleteCategories');
    });
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

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::prefix('categories')->name('categories.')->group(function () {
        Route::get('', [\App\Http\Controllers\Admin\AdminController::class, 'index'])->name('index');
        Route::get('/edit/{id}', [\App\Http\Controllers\Admin\AdminController::class, 'edit'])->name('edit');
        Route::put('/edit/{id}', [\App\Http\Controllers\Admin\AdminController::class, 'update'])->name('edit.update');
        Route::get('/create', [\App\Http\Controllers\Admin\AdminController::class, 'create'])->name('create');
        Route::post('/create', [\App\Http\Controllers\Admin\AdminController::class, 'store'])->name('store');
        Route::delete('/delete',[\App\Http\Controllers\Admin\AdminController::class, 'destroy'])->name('delete');
    });
});
