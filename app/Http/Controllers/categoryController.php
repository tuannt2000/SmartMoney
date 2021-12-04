<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\UserCategory;
use App\Models\UserColor;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    public function getCategories(){
        $income = Category::where('type','income')->get();
        $outcome = Category::where('type','outcome')->get();
        $userCategory = UserCategory::all();
        $userColor = UserColor::all();
        return view('settings.all-categories',['income'=>$income,'outcome'=>$outcome,'userCategory'=>$userCategory,'userColor'=>$userColor]);
    }
}
