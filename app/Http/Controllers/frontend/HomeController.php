<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Slider;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function index()
  {



    $mainSliders = Slider::query()
      ->where('slider_location', 1)
      ->where('status', 1)
      ->get();

    $planSlider = Slider::query()
      ->where('slider_location', 4)
      ->where('status', 1)
      ->get();
    //SELECT * FROM `products` WHERE status=1 order by category_id;

    // $categories = Category::with('products')->get();

    // return view('home', compact('categories'));

   
    // $id = Product::where("SELECT product_variations.*, products.* FROM product_variations JOIN products ON product_variations.product_id = products.id",1)->get();
    // dd($id);
    // $id = Product::join('product_variations', 'product_variations.product_id', '=', 'products.id')
    // ->where('products.id', 1)
    // ->get();

            $best_seller_products = Product::join('product_variations', 'products.id', '=', 'product_variations.product_id')
            ->selectRaw('products.* , MAX(price) as max_price, MIN(price) as min_price')
            ->where('products.best_seller', 1)
            ->groupBy('products.id')
            ->get();

            $featured_products = Product::join('product_variations', 'products.id', '=', 'product_variations.product_id')
            ->selectRaw('products.* , MAX(price) as max_price, MIN(price) as min_price')
            ->where('products.featured', 1)
            ->groupBy('products.id')
            ->get();

            $food_health = Product::leftjoin('product_variations', 'products.id', '=', 'product_variations.product_id')
            ->selectRaw('products.* , MAX(price) as max_price, MIN(price) as min_price')
            ->where('products.category_id',4)
            ->groupBy('products.id')
            ->get();

            // dd($food_health->all());



            // $category_id = Product::where('status',1)->where("category_id",4)->get();
            // dd($category_id->all());
            $categories = Category::where('status',1)->orderBy('level','asc')->get();
            // dd($categories);
            // $best_seller_products = Product::where("best_seller",1)->get();
            // $featured_products = Product::where("featured",1)->get();
            
            // $product_of_categories = Product::join("categories","products.category_id","=","categories.id")->groupBy("products.id","category_id")->get();

            return view('frontend.home.home', compact('mainSliders', 'planSlider',"best_seller_products","featured_products",'food_health','categories'));
            // return view('frontend.home.index');
          }
        }
