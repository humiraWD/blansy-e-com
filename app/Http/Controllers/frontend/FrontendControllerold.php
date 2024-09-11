<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Review;

class FrontendController extends Controller
{
    public function products() {
        $products = Product::latest()->get();
        return view('frontend.home.product', compact('products'));
    }

    public function cat_wise_products(Request $request, $slug) {        
        $categories = Category::where('status',1)->get();
        $category = Category::where('slug',$slug)->first();
        $products = Product::with('category')->where('status',1)
                            ->where('category_id',$category->id)->get();
        // $products = Product::with('category')->get();
        // dd($products->all());
        return view('frontend.home.catWiseProducts', compact('products','categories','category'));
    }

    public function productDetails($id) {
        dd($id);
        $product = Product::findOrFail($id);
        $categories = Category::where('status',1)->get();
        $reviews = Review::where('product_id',$product->id)->get();
        dd($categories);
        return view('frontend.home.product-details',compact('product','categories','reviews'));
    }    

    public function shopping_cart() {        
        $categories = Category::where('status',1)->get();
        $products = Product::all();
        return view('frontend.home.shopping-cart',compact('products','categories'));
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
