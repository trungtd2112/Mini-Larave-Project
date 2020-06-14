<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Barryvdh\Debugbar\Facade;

class ProductController extends Controller
{
    public function getProducts(){
        $data["products_list"] = DB::table('products')
        ->select('products.*', 'categories.cat_name')
        ->join('categories', 'prd_category', '=', 'categories.id')
        ->orderBy('products.id', 'ASC')
        //->get()
        ->paginate(3);

        //$users = DB::table('products')->simplePaginate(5);

        
        return view('backend.product', $data);
    }

    public function loadViewAddProduct(Request $request){
        return view('backend.add_product');
    }

    public function addProduct(){}
}
