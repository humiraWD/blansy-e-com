<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
class FrontendController extends Controller
{
    public function products() {
        $products = Product::latest()->get();
        return view('frontend.home.product', compact('products'));
    }

    public function productDetails($id) {
        $product = Product::findOrFail($id);
        return view('frontend.home.product-detail',compact('product'));
    }

    public function cart() {
        return view('frontend.home.shopping-cart');
    }

    public function checkout() {
        return view('frontend.home.checkout');
    }

    public function search(Request $request) {
        // $products = Product::where('name', 'like', '%'.$request->search.'%')->get();
        $products = Product::join('product_variations', 'products.id', '=', 'product_variations.product_id')
    ->selectRaw('products.* , MAX(price) as max_price, MIN(price) as min_price')
    ->where('name', 'like', '%'.$request->search.'%')
    ->groupBy('products.id')
    ->get();
        return view('frontend.home.search', compact('products'));
    }

}
