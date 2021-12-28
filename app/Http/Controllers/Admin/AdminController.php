<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class AdminController extends Controller
{
    private $categoryModel;

    public function __construct(Category $category)
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
            $category->title = $request->input('title');
            $category->type = $request->input('type');
            $category->color = $request->input('color');
            $category->save();
        }

        return redirect(route('admin.categories.index'))
            ->with('success', __('Update category\'s success!'));
    }

    public function create()
    {
        $category = $this->categoryModel;
        return view('admin.categories.create', compact('category'));
    }

    public function store(Request $request)
    {
        $data = $request->except(['_token']);
        //$data = array_filter($data, 'strlen');
        $categoryData = [];



        DB::beginTransaction();
        try{
            $category = $this->categoryModel->create($categoryData);
            DB::commit();
        }catch (\Throwable $e)
        {
            DB::rollBack();
            die($e->getMessage());

        }
        if ($request->ajax())
        {
            return ['success' => 'done'];
        }

        if ($category)
        {
            return redirect(route('admin.categories.index'))
                ->with('success', __('Create category\'s success!'));
        }

        return redirect(route('admin.categories.create'))
            ->with('error', __('Has errors in create process!'));
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
