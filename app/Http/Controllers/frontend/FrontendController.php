<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\OrderLifeCycle;
use App\Models\OrderLine;
use App\Models\Order;
use App\Models\Product;
use App\Models\Review;
use App\Models\ProductVariation;
class FrontendController extends Controller
{
        public function products() {
            $products = Product::latest()->get();
            return view('frontend.home.product', compact('products'));
        }

        public function allProducts(Request $request, $id) {
            if($id == 'best-selling-products'){
                $bestSellingProducts = Product::where('status',1)->where('best_seller',1)->get();
                //  dd('best');
            }elseif($id == 'featured-products'){
                $bestSellingProducts = Product::where('status',1)->where('featured',1)->get();
                // dd('featured');
            }elseif($id == 'food-health'){
                $bestSellingProducts = Product::where('status',1)->where("category_id",4)->get();
                // dd('Food');
            }else{
                return response()->json('message', 'Nothing Products');
                dd('Nothing Products.');
                // dd($bestSellingProducts->all());
            }
            return view('frontend.home.product', compact('bestSellingProducts'));
        }

        public function cat_wise_products(Request $request, $slug) {        
            $categories = Category::where('status',1)->get();
            $category = Category::where('slug',$slug)->first();
            $products = Product::with('category','variations')->where('status',1)
                                ->where('category_id',$category->id)
                                ->get();
            // $products = Product::with('category')->get();
           
            // dd($products->variations->all());
            return view('frontend.home.catWiseProducts', compact('products','categories','category'));
        }

        public function productDetails($id) {
            $product = Product::findOrFail($id);
            $recomended_products = Product::where('status',1)->where('category_id',$product->category_id)->limit(6)->with('variations')->get();
            // dd($recomended_products->all());
            $categories = Category::where('status',1)->get();
            $reviews = Review::where('product_id',$product->id)->get();
            $variations= ProductVariation::where("product_id", $id)->join('colors', 'color_id', '=', 'colors.id')->get();
            // dd($categories);
            return view('frontend.home.product-details',compact('product','categories','reviews','recomended_products','variations'));
        }  

        // public function shopping_cart() {        
        // $categories = Category::where('status',1)->get();
        // $products = Product::all();
        
        // return view('frontend.home.shopping-cart',compact('products','categories'));
        // }

        public function checkout() {
            $categories = Category::where('status',1)->get();
            $products = Product::all();
        return view('frontend.home.checkout',compact('products','categories'));
        
        }

        public function placeorder(Request $request) {
            $order = Order::create([
                'full_name' => $request->f_name." ".$request->l_name,
                'email' => $request->email,
                'country' => $request->country,
                'city' => $request->city,
                'zip' => $request->zipcode,
                'state' => $request->state,
    
    
    
              ]);
              $order_id = $order->id;
              //event(new Registered($order));
              $life_cycle = OrderLifeCycle::create([
                "order_id" => $order_id ,
                "description" => "empty"
              ]);
    
              foreach($request->product_id as $id){
                $life_cycle = OrderLine::create([
                    "order_id" => $order_id ,
                    "product_id" => $id
                  ]);
              }
          
            return view('frontend.home.placeorder',compact('request'));
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
