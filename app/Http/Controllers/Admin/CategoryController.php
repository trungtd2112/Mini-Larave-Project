<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\AddCategoryRequest;
use App\Http\Requests\EditCategoryRequest;

class CategoryController extends Controller
{
    public function getCategories()
    {
        $data['categories'] = Category::all();
        return view('backend.category', $data);
    }

    public function addCategory(AddCategoryRequest $request){
        $category = new Category;
        $category->cat_name = $request->cat_name;
        $category->save();
        return back();
    }

    public function loadViewEditCategory($id)
    {
        $data['category_info'] = Category::find($id);
        return view('backend.edit_category', $data);
    }

    public function editCategory(EditCategoryRequest $request, $id){
        $category = Category::find($id);
        $category->cat_name = $request->cat_name;
        $category->save();
        return redirect('admin/category');
    }

    public function deleteCategory($id)
    {
        Category::destroy($id);
        return back();
    }
}
