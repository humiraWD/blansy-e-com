@extends('layouts/contentNavbarLayout')

@section('title', 'Dashboard - Sliders')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Create Slider</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.sliders.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="slider_location">Slider Location <span class="text-danger">*</span></label>
                    <select class="form-select" id="slider_location" name="slider_location" required>
                        <option value="0">Select Location</option>
                        <option value="1"
                            {{ old('slider_location', $slider->slider_location ?? null) == '1' ? 'selected' : '' }}>Home
                            Page Main Slider</option>
                        <option value="2"
                            {{ old('slider_location', $slider->slider_location ?? null) == '2' ? 'selected' : '' }}>Home
                            Page Middle Slider</option>
                        <option value="3"
                            {{ old('slider_location', $slider->slider_location ?? null) == '3' ? 'selected' : '' }}>Home
                            Page Buttom Slider</option>
                        <option value="4"
                            {{ old('slider_location', $slider->slider_location ?? null) == '4' ? 'selected' : '' }}>Plan
                            Slider</option>
                    </select>
                    <div class="valid-feedback"> Looks good! </div>
                    <div class="invalid-feedback"> Please select your slider location. </div>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="image">Image <span class="text-danger">*</span></label>
                    <input type="file" class="form-control" id="image" name="image" required>
                    {{-- preview image --}}
                    <img id="preview-image" src="" alt="preview image"
                        style="display: none; max-height: 200px; margin-top:10px;">
                </div>
                <div class="mb-3">
                    <label class="d-block form-label">Status</label>
                    <div class="form-check mb-2">
                        <input type="radio" id="ative" name="status" value="1" class="form-check-input"
                            {{ old('status', $slider->status ?? null) == '1' ? 'checked' : '' }} required />
                        <label class="form-check-label" for="ative">Active</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" id="inactive" name="status" value="0" class="form-check-input"
                            {{ old('status', $slider->status ?? null) == '0' ? 'checked' : '' }} required />
                        <label class="form-check-label" for="inactive">Inactive</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('page-script')
    <script>
        $(document).ready(function() {
            // if edit page then show preview image
            $('#image').change(function() {
                let reader = new FileReader();
                reader.onload = (e) => {
                    $('#preview-image').attr('src', e.target.result);
                    $('#preview-image').css('display', 'block');
                }
                reader.readAsDataURL(this.files[0]);
            });

        });

        // show preview image if edit page
        @if (isset($slider))
            $('#preview-image').attr('src', '{{ asset($slider->image) }}');
            $('#preview-image').css('display', 'block');
        @endif
    </script>
@endsection
