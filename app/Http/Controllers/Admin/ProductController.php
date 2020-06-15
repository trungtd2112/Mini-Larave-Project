<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Barryvdh\Debugbar\Facade;
use App\Http\Requests\AddCategoryRequest;
use App\Http\Requests\AddProductRequest;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function getProducts()
    {
        $data["products_list"] = DB::table('products')
            ->select('products.*', 'categories.cat_name')
            ->join('categories', 'products.cat_id', '=', 'categories.id')
            ->orderBy('products.id', 'ASC')
            //->get()
            ->paginate(3);

        return view('backend.product', $data);
    }

    public function loadViewAddProduct(Request $request)
    {
        $data['categories_info'] = Category::all();
        return view('backend.add_product', $data);
    }

    public function addProduct(AddProductRequest $request)
    {
        $product = new Product;
        $product->prd_name = $request->prd_name;
        $product->prd_price = $request->prd_price;
        $product->prd_warranty = $request->prd_warranty;
        $product->prd_details = $request->prd_details;
        $product->prd_status = $request->prd_status;
        $product->prd_featured = $request->prd_featured;
        $product->cat_id = $request->cat_id;
        $product->prd_accessories = $request->prd_accessories;
        $product->prd_promotion = $request->prd_promotion;
        $product->prd_new = $request->prd_new;

        $filename = $request->prd_image->getClientOriginalName();
        $product->prd_image = $filename;
        $product->save();
        $request->prd_image->storeAs('images', $filename);
        Storage::move('app/storage/app/images/' . $filename, 'public/admin/images/products/' . $filename);
        return redirect('admin/product');
    }

    public function loadViewEditProduct($id)
    {
        $data['product_info'] = Product::find($id);
        $data['categories'] = Category::all();
        return view('backend.edit_product', $data);
    }

    public function editProduct(Request $request, $id)
    {
        $data = [
            'prd_name' => $request->prd_name,
            'prd_price' => $request->prd_price,
            'prd_warranty' => $request->prd_warranty,
            'prd_details' => $request->prd_details,
            'prd_status' => $request->prd_status,
            'prd_featured' => $request->prd_featured,
            'cat_id' => $request->cat_id,
            'prd_accessories' => $request->prd_accessories,
            'prd_promotion' => $request->prd_promotion,
            'prd_new' => $request->prd_new
        ];
        if ($request->hasFile('prd_image')) {
            $data['prd_image'] = $request->prd_image->getClientOriginalName();
            $request->prd_image->storeAs('images', $data['prd_image']);
            Storage::move('storage/app/images/' . $data['prd_image'], 'public/admin/images/products/' . $data['prd_image']);
        }
        $product = Product::where('id', '=', $id)->update($data);
        return redirect('admin/product');
    }
}
