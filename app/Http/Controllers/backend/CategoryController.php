<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $categories = Category::latest()->get();

    return view('backend.admin.category.index', compact('categories'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    $formType = 'create';
    $parents = Category::where('status', 1)->get();
    return view('backend.admin.category.form', compact('formType', 'parents'));
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {

    try {
      Category::create($request->all());
      return redirect()->route('admin.categories.index')->with('success', 'Category created successfully');
    } catch (\Exception $e) {

      return redirect()->back()->with('error', $e->getMessage());
    }
  }

  /**
   * Display the specified resource.
   */
  public function show(Category $category)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Category $category)
  {
    $formType = 'edit';
    $parents = Category::where('status', 1)->get();
    return view('backend.admin.category.form', compact('category', 'formType', 'parents'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Category $category)
  {
    try {
      $category->update($request->all());
      return redirect()->route('admin.categories.index')->with('success', 'Category updated successfully');
    } catch (\Exception $e) {
      return redirect()->back()->with('error', $e->getMessage());
    }
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Category $category)
  {
    try {
      $category->delete();
      return redirect()->route('admin.categories.index')->with('success', 'Category deleted successfully');
    } catch (\Exception $e) {
      return redirect()->back()->with('error', $e->getMessage());
    }
  }
}
