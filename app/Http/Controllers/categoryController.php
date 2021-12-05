<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\UserCategory;
use App\Models\UserColor;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    public function getAllCategories(){
        $income = Category::where('type','income')->where('create_by', Auth::user()->id)->get();
        $outcome = Category::where('type','outcome')->where('create_by', Auth::user()->id)->get();
        $userCategory = UserCategory::all();
        $userColor = UserColor::all();
        return view('settings.all-categories',['income'=>$income,'outcome'=>$outcome,'userCategory'=>$userCategory,'userColor'=>$userColor]);
    }

    public function createAllCategories(Request $request){
        $this->validate($request,
            [
                'title' => 'unique:categories',
            ],
            [
                'title.unique' => 'Tên danh mục đã tồn tại',
            ]
        );

        $category = new Category;
        $category->icon = $request->icon;
        $category->title = $request->title;
        $category->color = $request->color;
        if($request->type == 'Thu thập'){
            $category->type = "income";
        }else{
            $category->type = "outcome";
        }
        $category->create_by = Auth::user()->id;
        $category->totalTransaction = 0;

        $category->save();

        return redirect('settings/all-categories')->with('thongbao',"Tạo thành công");
    }

    public function fixAllCategories(Request $request,$id){
        $category = Category::find($id);

        $category->icon = $request->icon;
        $category->title = $request->title;
        $category->color = $request->color;

        $category->save();

        return redirect('settings/all-categories')->with('thongbao',"Sửa thành công");
    }

    public function deleteAllCategories(Request $request){
        $category = Category::find($request->id);

        $category->delete();

        return redirect('settings/all-categories')->with('thongbao',"Xóa thành công");
    }

    public function getCategories(){
        $income = Category::where('type','income')->where('create_by', Auth::user()->id)->get();
        $outcome = Category::where('type','outcome')->where('create_by', Auth::user()->id)->get();
        $userCategory = UserCategory::all();
        $userColor = UserColor::all();
        return view('wallet.settings.categories',['income'=>$income,'outcome'=>$outcome,'userCategory'=>$userCategory,'userColor'=>$userColor]);
    }

    public function createCategories(Request $request){
        $this->validate($request,
            [
                'title' => 'unique:categories',
            ],
            [
                'title.unique' => 'Tên danh mục đã tồn tại',
            ]
        );

        $category = new Category;
        $category->icon = $request->icon;
        $category->title = $request->title;
        $category->color = $request->color;
        if($request->type == 'Thu thập'){
            $category->type = "income";
        }else{
            $category->type = "outcome";
        }
        $category->create_by = Auth::user()->id;
        $category->totalTransaction = 0;

        $category->save();

        return redirect('wallet/settings/categories')->with('thongbao',"Tạo thành công");
    }

    public function fixCategories(Request $request,$id){
        $category = Category::find($id);

        $category->icon = $request->icon;
        $category->title = $request->title;
        $category->color = $request->color;

        $category->save();

        return redirect('wallet/settings/categories')->with('thongbao',"Sửa thành công");
    }

    public function deleteCategories(Request $request){
        $category = Category::find($request->id);

        $category->delete();

        return redirect('wallet/settings/categories')->with('thongbao',"Xóa thành công");
    }
}
