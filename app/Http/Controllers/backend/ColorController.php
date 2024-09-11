<?php

namespace App\Http\Controllers\backend;

use App\Models\Color;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

      $colors = Color::latest()->get();
      return view('backend.admin.colors.index', compact('colors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      $formType = 'create';
      return view('backend.admin.colors.create', compact('formType'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       try {
         $input = $request->only('name', 'code', 'status');
          Color::create($input);
          return redirect()->route('admin.colors.index')->with('success', 'Color created successfully');
        } catch (\Exception $e) {
          return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

      $formType = 'edit';
      $color = Color::find($id);
      return view('backend.admin.colors.create', compact('formType', 'color'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

      try {
        $input = $request->only('name', 'code', 'status');
        $color = Color::find($id);
        $color->update($input);
        return redirect()->route('admin.colors.index')->with('success', 'Color updated successfully');
      } catch (\Exception $e) {
        return redirect()->back()->with('error', $e->getMessage());
      }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

      try {
        $color = Color::find($id);
        $color->delete();
        return redirect()->route('admin.colors.index')->with('success', 'Color deleted successfully');
      } catch (\Exception $e) {
        return redirect()->back()->with('error', $e->getMessage());
      }
    }
}
