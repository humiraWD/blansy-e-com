<?php

namespace App\Http\Controllers\backend;

use App\Models\Size;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SizeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sizes = Size::latest()->get();
        return view('backend.admin.sizes.index', compact('sizes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $formType = 'create';
        return view('backend.admin.sizes.create', compact('formType'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        try {
            $input = $request->only('name', 'status');
            Size::create($input);
            return redirect()->route('admin.sizes.index')->with('success', 'Size created successfully');
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
        $size = Size::find($id);
        return view('backend.admin.sizes.create', compact('formType', 'size'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        try {
            $input = $request->only('name', 'status');
            $size = Size::find($id);
            $size->update($input);
            return redirect()->route('admin.sizes.index')->with('success', 'Size updated successfully');
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
            $size = Size::find($id);
            $size->delete();
            return redirect()->route('admin.sizes.index')->with('success', 'Size deleted successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
