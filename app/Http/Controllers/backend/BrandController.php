<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $brands = Brand::latest()->get();

    return view('backend.admin.brand.index', compact('brands'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    $formType = 'create';
    $parents = Brand::where('status', 1)->get();
    return view('backend.admin.brand.form', compact('formType', 'parents'));
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {

    try {
      Brand::create($request->all());
      return redirect()->route('admin.brands.index')->with('success', 'Brand created successfully');
    } catch (\Exception $e) {
      return redirect()->back()->with('error', $e->getMessage());
    }
  }

  /**
   * Display the specified resource.
   */
  public function show(Brand $brand)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Brand $brand)
  {
    $formType = 'edit';
    $parents = Brand::where('status', 1)->get();
    return view('backend.admin.brand.form', compact('brand', 'formType', 'parents'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Brand $brand)
  {
    try {
      $brand->update($request->all());
      return redirect()->route('admin.brands.index')->with('success', 'Brand updated successfully');
    } catch (\Exception $e) {
      return redirect()->back()->with('error', $e->getMessage());
    }
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Brand $brand)
  {
    try {
      $brand->delete();
      return redirect()->route('admin.brands.index')->with('success', 'Brand deleted successfully');
    } catch (\Exception $e) {
      return redirect()->back()->with('error', $e->getMessage());
    }
  }
}
