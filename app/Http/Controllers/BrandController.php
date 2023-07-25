<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Brand;

class BrandController extends Controller
{
    public function brand_detail($brand_id){
        $brands = Brand::where('brand_id', $brand_id)->get();
        $products = Product::where('brand_id', $brand_id)->paginate(12);
        return view('brand-detail', ['brands'=>$brands, 'products'=>$products]);
    }

}
