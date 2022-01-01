<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AdminCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class AdminController extends Controller
{
    private $categoryModel;

    public function __construct(AdminCategory $category)
    {
        $this->categoryModel = $category;
    }

    public function index()
    {
        $categories = $this->categoryModel
            ->orderBy('id', 'desc')
            ->paginate();
       return view('admin.categories.index', compact('categories'));

    }
    public function edit($id)
    {
        $category = $this->categoryModel->find($id);

        if ($category)
        {
            return view('admin.categories.edit', compact('category'));
        }

    }

    public function update(Request $request, $id)
    {
        $category = $this->categoryModel->find($id);
        if ($category)
        {
            $category->icon = $request->input('icon');
            $category->title = $request->input('title');
            $category->type = $request->input('type');
            $category->color = $request->input('color');
            $category->save();
        }

        return redirect(route('admin.categories.index'))
            ->with('success', __('Update category\'s success!'));
    }


    public function destroy(Request $request)
    {
        $category = $this->categoryModel->find($request->input('category_id'));
        if ($category)
        {
            DB::beginTransaction();
            try{
                $category->delete();
            }catch(\Throwable $e){
                DB::rollBack();
                Log::error($e->getMessage(), [$e->getTraceAsString()]);
                return redirect(route('admin.categories.index'))
                    ->with('error', __('Category delete has errors!'));
            }
            DB::commit();
            return redirect(route('admin.categories.index'))
                ->with('success', __('Delete category\'s success!'));
        }
        return redirect(route('admin.categories.index'))
            ->with('info', __('Category not found!'));
    }

}
