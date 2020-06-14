<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function getCategories()
    {
        $data['categories'] = Category::all();
        return view('backend.category', $data);
    }

    public function editCategory()
    {
    }

    public function deleteCategory()
    {
    }
}
