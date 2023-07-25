<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;

class CartController extends Controller
{
    public function view_cart(){
        return view('view-cart',[
            "carts" => Cart::all()
        ]);
    }

    public function addToCart(Request $request, $productId){
        // dd($productId);
        $product = Product::where('product_id', $productId)->first();
        // Check if the item already exists in the cart
        $cartItem = Cart::where('product_id', $productId)->first();
        if ($cartItem) {
            return redirect('/home')->with('fail', 'Product already in cart');
        }

        Cart::create([
            'product_id' => $product->product_id,
            'product_name' => $product->product_name,
            'product_price' => $product->product_price,
            'product_desc' => $product->product_desc,
            'cart_qty' => "1",
            'total_price' => $product->product_price
        ]);

        return redirect('/view-cart')->with('success', 'Product Added successfully');
    }

    public function delete_cart_product($cart_id){
        $data = Cart::find($cart_id);
        $data->delete();
        return redirect('/view-cart')->with('success', 'Product deleted successfully');
    }
}
