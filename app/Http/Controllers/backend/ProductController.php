<?php

namespace App\Http\Controllers\backend;

use App\Models\Size;
use App\Models\Brand;
use App\Models\Color;
use App\Models\Product;
use App\Models\Category;
use App\Services\FileUpload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
// view all
// public function index()
// {
//     $products = Product::all();
//     return view('products.index', compact('products'));
// }




  function __construct(private FileUpload $fileUpload)
  {


  }
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    
    $products = Product::with('category','brand')->latest()->get();
    // $best_seller_products = Product::where('is_best_seller', true)->get();
    // $products = Product::all();

    $categories = Category::where('status',1)->orderBy('level','asc')->get();
    
    return view('backend.admin.product.index', compact('products'));
    // return view('products.index', compact('best_seller_products'));
    // return view('products.index', compact('products'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    $formType = 'create';
    $categories = Category::where('status', 1)->get();
    $brands = Brand::where('status', 1)->get();
    $colors = Color::latest()->get();
    $sizes = Size::latest()->get();
    return view('backend.admin.product.form', compact('formType', 'categories', 'brands','colors','sizes'));
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    try {
      DB::beginTransaction();
      $input = $request->only('name', 'category_id', 'brand_id', 'sku', 'slug', 'status','featured','best_seller','new','hot','sale_off','description');
      $productVariationInput = $request->variations;

      $images = [];
      $productVariations = [];

      if ($request->hasFile('image')) {
        foreach ($request->file('image') as $file) {
          $image = $this->fileUpload->handleFile($file, 'products');
          $images[] = ['image' => $image];
          if (!isset($input['image'])) {
            $input['image'] = $image;
          }
        }
      }


      $product = Product::create($input);
      $product->images()->createMany($images);

      foreach ($productVariationInput as $variation) {
        $composite_key = $product->id . '-' . $variation['color_id'] . '-' . $variation['size'];

        $variation_image = null;
        if (isset($variation['image'])) {
          $variation_image = $this->fileUpload->handleFile($variation['image'], 'products');
        }

        $productVariations[] = [
          'color_id' => $variation['color_id'],
          'size' => $variation['size'],
          'price' => $variation['price'],
          'image' => $variation_image,
          'stock' => $variation['stock'],
          'composite_key' => $composite_key
        ];
      }

      //check if product variations composite are unique
      $compositeKeys = array_column($productVariations, 'composite_key');
      if (count($compositeKeys) !== count(array_unique($compositeKeys))) {
        throw new \Exception('Same color and size can not be duplicated.');
      }

      $product->variations()->createMany($productVariations);

      DB::commit();
      return redirect()->route('admin.products.index')->with('success', 'Product created successfully');
    } catch (\Exception $e) {
      DB::rollBack();
      return redirect()->back()->with('error', $e->getMessage());
    }
  }

  /**
   * Display the specified resource.
   */
  public function showAllProducts()
  {
      $products = Product::all();
      return view('frontend.home.product', compact('products'));
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Product $product)
  {
    $formType = 'edit';
    $categories = Category::where('status', 1)->get();
    $brands = Brand::where('status', 1)->get();
    $product->load('variations');
    $product->load('images');
    $colors = Color::latest()->get();
    $sizes = Size::latest()->get();
    return view('backend.admin.product.form', compact('product', 'formType', 'categories', 'brands','colors','sizes'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Product $product)
  {

    // dd($request->all());

    try {
      DB::beginTransaction();
      $input = $request->only('name', 'category_id', 'brand_id', 'sku', 'slug', 'status','featured','best_seller','new','hot','sale_off','description');

      //multiple file upload
      $images = [];



      if ($request->hasFile('image')) {
        $this->fileUpload->deleteFile($product->image);
        // delete files from folder
       foreach ($product->images as $image) {
         $this->fileUpload->deleteFile($image->image);
        }
        foreach ($request->file('image') as $file) {
          $image = $this->fileUpload->handleFile($file, 'products', $product->image);
          $images[] = ['image' => $image];
          //first image will be the main image of the product
          if (!isset($input['image'])) {
            $input['image'] = $image;
          }
        }
        $product->images()->createMany($images);
      }
      $product->update($input);

      $productVariationInput = $request->variations;

      $productVariations = [];

      foreach ($productVariationInput as $variation) {
        $composite_key = $product->id . '-' . $variation['color_id'] . '-' . $variation['size'];

        $variation_image = null;
        if (isset($variation['image'])) {
          $this->fileUpload->deleteFile($variation['image']);
          $variation_image = $this->fileUpload->handleFile($variation['image'], 'products');
        }

        $productVariations[] = [
          'color_id' => $variation['color_id'],
          'size' => $variation['size'],
          'price' => $variation['price'],
          'image' => $variation_image,
          'stock' => $variation['stock'],
          'composite_key' => $composite_key
        ];
      }

      //check if product variations composite are unique
      $compositeKeys = array_column($productVariations, 'composite_key');
      if (count($compositeKeys) !== count(array_unique($compositeKeys))) {
        throw new \Exception('Same color and size can not be duplicated.');
      }

      $product->variations()->delete();

      $product->variations()->createMany($productVariations);

      DB::commit();
      return redirect()->route('admin.products.index')->with('success', 'Product updated successfully');
    } catch (\Exception $e) {
      DB::rollBack();
      return redirect()->back()->with('error', $e->getMessage());
    }
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Product $product)
  {
    try {
      DB::beginTransaction();
      $this->fileUpload->deleteFile($product->image);
      foreach ($product->images as $image) {
        $this->fileUpload->deleteFile($image->image);
      }
      foreach ($product->variations as $variation) {
        $this->fileUpload->deleteFile($variation->image);
      }
      $product->variations()->delete();
      $product->images()->delete();
      $product->delete();
      DB::commit();
      return redirect()->route('admin.products.index')->with('success', 'Product deleted successfully');
    } catch (\Exception $e) {
      DB::rollBack();
      return redirect()->back()->with('error', $e->getMessage());
    }
  }
}
