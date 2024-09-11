<?php

namespace App\Http\Controllers\backend;

use App\Models\Unit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UnitController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {

    $units = Unit::latest()->get();

    return view('backend.admin.unit.index', compact('units'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    $formType = 'create';
    return view('backend.admin.unit.form', compact('formType'));
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    try {
      Unit::create($request->all());
      return redirect()->route('admin.units.index')->with('success', 'Unit created successfully');
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
  public function edit(Unit $unit)
  {
    $formType = 'edit';
    return view('backend.admin.unit.form', compact('unit', 'formType'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Unit $unit)
  {
    try {
      $unit->update($request->all());
      return redirect()->route('admin.units.index')->with('success', 'Unit updated successfully');
    } catch (\Exception $e) {
      return redirect()->back()->with('error', $e->getMessage());
    }
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Unit $unit)
  {
    try {
      $unit->delete();
      return redirect()->route('admin.units.index')->with('success', 'Unit deleted successfully');
    } catch (\Exception $e) {
      return redirect()->back()->with('error', $e->getMessage());
    }
  }
}
