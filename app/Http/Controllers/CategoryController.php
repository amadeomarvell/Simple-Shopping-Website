<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class CategoryController extends Controller
{
    public function category_detail($category_id)
    {
        $categories = Category::where('category_id', $category_id)->get();
        $products = Product::where('category_id', $category_id)->paginate(12);
        return view('category-product', ['categories'=>$categories, 'products'=>$products]);
    }
}
