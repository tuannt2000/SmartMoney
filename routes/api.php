<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Category;
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

Route::get('/user', function (){
    return User::all();
});

Route::get('/user/{id}', function ($id){
    return User::find($id);
});

Route::post('/user', function (Request $request){
    return User::create($request->all());
});

Route::get('/category', function (){
    $category = Category::where('type','income')->where('create_by',6)->get();
   
});