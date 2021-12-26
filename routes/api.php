<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Budget;    
use App\Models\Transaction;    
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('wallet/{id}/myChart1','App\Http\Controllers\apiController@myChart1Api');

Route::get('wallet/{id}/myChart2','App\Http\Controllers\apiController@myChart2Api');

Route::get('wallet/{id}/myChart3','App\Http\Controllers\apiController@myChart3Api');

Route::get('wallet/{id}/myChart4','App\Http\Controllers\apiController@myChart4Api');

Route::get('budget',function(){
    $budget = Budget::where('id',1)->first();

    foreach ($budget->budget_category as $value) {
        if(count($value->category->transaction->where('date','>=',$budget->start_date)->where('date','<=',$budget->end_date)) != 0){
            foreach ($value->category->transaction->where('date','>=',$budget->start_date)->where('date','<=',$budget->end_date) as $v){
                echo $v->amount."<hr>";
            }
        }
    }

});