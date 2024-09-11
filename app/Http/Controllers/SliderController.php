<?php

namespace App\Http\Controllers;

use App\Http\Requests\SliderRequest;
use App\Models\Slider;
use App\Services\FileUpload;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    function __construct(private FileUpload $fileUpload)
    {
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      // dd('hi');

        $sliders = Slider::latest()->get();

        return view('backend.admin.sliders.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.admin.sliders.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      // dd($request->all());
        $input = $request->all();

        if (isset($request->image)) {
            $image = $this->fileUpload->handleFile($request->image, 'sliders');
            $input['image'] = $image;
        }

        Slider::create($input);

        return redirect()->route('admin.sliders.index')->with('success', 'Slider created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Slider $slider)
    {

        return view('backend.admin.sliders.create', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Slider $slider)
    {

        $input = $request->all();

        if (isset($request->image)) {
            $this->fileUpload->deleteFile('sliders', $slider->image);
            $image = $this->fileUpload->handleFile($request->image, 'sliders');
            $input['image'] = $image;
        }

        $slider->update($input);

        return redirect()->route('admin.sliders.index')->with('success', 'Slider updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Slider $slider)
    {
        try {
            $this->fileUpload->deleteFile('sliders', $slider->image);
            $slider->delete();
            return redirect()->route('admin.sliders.index')->with('success', 'Slider deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }

    }
}
