<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function products(){
        $products = Product::with('brands')->paginate(12);
        return view('home', ['products'=>$products]);
    }

    public function hot_items(){
        $products = Product::where('hot_items_flag', 1)->paginate(12);
        return view('hot-items', ['products'=>$products]);
    }

    public function product_detail($product_id)
    {
        $products = Product::with(['brands', 'category'])->where('product_id', $product_id)->get();
        return view('product-detail', ['products'=>$products]);
    }

    public function search_product(Request $request, $product_id){
        $searchTerm = $request->input('query');

        $query = Product::query();

        if ($searchTerm) {
            $query->where('product_name', $searchTerm);

            $query->orWhereHas('brands', function($q) use ($searchTerm) {
                $q->where('brand_name', 'like', '%'.$searchTerm.'%');
            });

            // Search by category name (assuming there is a 'categories' table with 'category_name' column)
            $query->orWhereHas('category', function($q) use ($searchTerm) {
                $q->where('category_name', 'like', '%'.$searchTerm.'%');
            });
        }


        $products = $query->get();

        return view('home', [
            'products' => $products,
            'searchTerm' => $searchTerm
        ]);
    }

}
