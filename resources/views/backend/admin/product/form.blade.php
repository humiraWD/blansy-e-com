@extends('layouts/contentNavbarLayout')

@section('page-style')
    <style>
        .image-container {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            margin-top: 20px;
        }

        .image-item {
            position: relative;
            width: 150px;
            height: 150px;
            overflow: hidden;
            border-radius: 8px;
            border: 1px solid #ddd;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .image-item img {
            max-width: 100%;
            max-height: 100%;
            display: block;
        }

        .remove-btn {
            position: absolute;
            top: 5px;
            right: 5px;
            background: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            border-radius: 50%;
            width: 25px;
            height: 25px;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
        }

        .btn-custom-h-w {
            width: 42px !important;
            height: 36px !important;
        }
    </style>

@endsection

@php($title = $formType === 'create' ? 'Create' : 'Edit')
@section('title', $title . ' product')


@section('content')
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Product Create </h5>
                    <small class="text-muted float-end">
                        <a type="button" class="btn btn-icon btn-primary" href="{{ route('admin.products.index') }}">
                            <i class='bx bx-list-ul'></i>
                        </a>
                    </small>
                </div>
                <div class="card-body">
                    <form
                        action="{{ $formType === 'create' ? route('admin.products.store') : route('admin.products.update', $product->id) }}"
                        method="POST" enctype="multipart/form-data">
                        @csrf
                        @if ($formType === 'edit')
                            @method('PUT')
                        @endif
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-category">Category</label>
                                    <select class="form-select" id="basic-default-category" name="category_id">
                                        <option value="">Select Category</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}"
                                                {{ old('category_id', $product->category_id ?? null) == $category->id ? 'selected' : '' }}>
                                                {{ $category->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-brand">Brand</label>
                                    <select class="form-select" id="basic-default-brand" name="brand_id">
                                        <option value="">Select Brand</option>
                                        @foreach ($brands as $brand)
                                            <option value="{{ $brand->id }}"
                                                {{ old('brand_id', $product->brand_id ?? null) == $brand->id ? 'selected' : '' }}>
                                                {{ $brand->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-name">Product Name</label>
                                    <input type="text" class="form-control" id="basic-default-name"
                                        placeholder="Product Name" name="name"
                                        value="{{ old('name') ? old('name') : (!empty($product->name) ? $product->name : null) }}" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-sku">SKU</label>
                                    <input type="text" class="form-control" id="basic-default-sku" placeholder="SKU"
                                        name="sku"
                                        value="{{ old('sku') ? old('sku') : (!empty($product->sku) ? $product->sku : null) }}" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-slug">Slug</label>
                                    <input type="text" class="form-control" id="basic-default-slug" placeholder="Slug"
                                        name="slug"
                                        value="{{ old('slug') ? old('slug') : (!empty($product->slug) ? $product->slug : null) }}" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-status">Status</label>
                                    <select name="status" id="status" class="form-select">
                                        <option value="" disabled selected>Select Status</option>
                                        <option value="1"
                                            {{ old('status', $product->status ?? null) == '1' ? 'selected' : '' }}>
                                            Active</option>
                                        <option value="0"
                                            {{ old('status', $product->status ?? null) == '0' ? 'selected' : '' }}>
                                            Inactive</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-featured">Featured</label>
                                    <select class="form-select" id="basic-default-featured" name="featured">
                                        <option value="1"
                                            {{ old('featured', $product->featured ?? null) == 1 ? 'selected' : '' }}>
                                            Yes</option>
                                        <option value="0"
                                            {{ old('featured', $product->featured ?? null) == 0 ? 'selected' : '' }}>
                                            No</option>
                                    </select>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-best_seller">Best Seller</label>
                                    <select class="form-select" id="basic-default-best_seller" name="best_seller">
                                        <option value="1"
                                            {{ old('best_seller', $product->best_seller ?? null) == 1 ? 'selected' : '' }}>
                                            Yes</option>
                                        <option value="0"
                                            {{ old('best_seller', $product->best_seller ?? null) == 0 ? 'selected' : '' }}>
                                            No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-new">New</label>
                                    <select class="form-select" id="basic-default-new" name="new">
                                        <option value="1"
                                            {{ old('new', $product->new ?? null) == 1 ? 'selected' : '' }}>
                                            Yes</option>
                                        <option value="0"
                                            {{ old('new', $product->new ?? null) == 0 ? 'selected' : '' }}>
                                            No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label
                                        "
                                        for="basic-default-hot">Hot</label>
                                    <select class="form-select" id="basic-default-hot" name="hot">
                                        <option value="1"
                                            {{ old('hot', $product->hot ?? null) == 1 ? 'selected' : '' }}>
                                            Yes</option>
                                        <option value="0"
                                            {{ old('hot', $product->hot ?? null) == 0 ? 'selected' : '' }}>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-sale_off">Sale Off</label>
                                    <select class="form-select" id="basic-default-sale_off" name="sale_off">
                                        <option value="1"
                                            {{ old('sale_off', $product->sale_off ?? null) == 1 ? 'selected' : '' }}>
                                            Yes</option>
                                        <option value="0"
                                            {{ old('sale_off', $product->sale_off ?? null) == 0 ? 'selected' : '' }}>
                                            No</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        {{-- // for image --}}
                        <div class="mb-3">
                            <label class="form-label"for="basic-default-image">Image</label>
                            {{-- <input type="file" class="form-control" id="basic-default-image" name="image[]" /> --}}
                            <input type="file" class="form-control" id="imageInput" name="image[]" multiple />
                            {{-- hidden input for old images --}}
                            @if ($formType === 'edit' && !empty($product->images))
                                @foreach ($product->images as $image)
                                    <input type="hidden" name="old_images[]" value="{{ $image->id }}">
                                @endforeach
                            @endif
                        </div>

                        <div class="image-container mt-4" id="imageContainer">
                            @if ($formType === 'edit' && !empty($product->images))
                                @foreach ($product->images as $index => $image)
                                    <div class="image-item">
                                        <img src="{{ asset($image->image) }}" alt="Product Image">
                                        <button class="remove-btn" type="button"
                                            onclick="removeExistingImage({{ $index }})">&times;</button>
                                    </div>
                                @endforeach
                            @endif
                        </div>

                        {{-- table for input product variation  --}}
                        <div class="mb-3">
                            <label class="form-label mt-4" for="basic-default-variation">Variation</label>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Color</th>
                                        <th>Size</th>
                                        <th>Price</th>
                                        <th>Image</th>
                                        <th>Stock</th>
                                        <th>
                                            <button type="button" class="btn btn-primary btn-custom-h-w"
                                                onclick="addVariation()">
                                                <i class='bx bx-plus circle'></i>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody id="variationTable">
                                    @if ($formType === 'edit' && !empty($product->variations))
                                        @foreach ($product->variations as $variation)
                                            <tr>
                                                <td>
                                                    <select name="variations[{{ $variation->id }}][color_id]"
                                                        class="form-select">
                                                        <option value="">Select Color</option>
                                                        @foreach ($colors as $color)
                                                            <option value="{{ $color->id }}"
                                                                {{ $variation->color_id == $color->id ? 'selected' : '' }}>
                                                                {{ $color->name }}
                                                            </option>
                                                        @endforeach
                                                </td>
                                                <td>
                                                    <select name="variations[{{ $variation->id }}][size]"
                                                        class="form-select">
                                                        <option value="">Select Size</option>
                                                        @foreach ($sizes as $size)
                                                            <option value="{{ $size->name }}"
                                                                {{ $variation->size == $size->name ? 'selected' : '' }}>
                                                                {{ $size->name }}
                                                            </option>
                                                        @endforeach
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control"
                                                        name="variations[{{ $variation->id }}][price]"
                                                        value="{{ $variation->price }}">
                                                </td>
                                                <td>
                                                    <input type="file" class="form-control"
                                                        name="variations[{{ $variation->id }}][image]"
                                                        value="{{ $variation->image }}">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control"
                                                        name="variations[{{ $variation->id }}][stock]"
                                                        value="{{ $variation->stock }}">
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-danger btn-custom-h-w"
                                                        onclick="removeVariation(this)">
                                                        <i class='bx bx-minus-circle'></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td>
                                                <select name="variations[0][color_id]" class="form-select select2">
                                                    <option value="">Select Color</option>
                                                    @foreach ($colors as $color)
                                                        <option value="{{ $color->id }}">{{ $color->name }}</option>
                                                    @endforeach
                                                </select>
                                            </td>
                                            <td>
                                                <select name="variations[0][size]" class="form-select select2">
                                                    <option value="">Select Size</option>
                                                    @foreach ($sizes as $size)
                                                        <option value="{{ $size->name }}">{{ $size->name }}</option>
                                                    @endforeach
                                                </select>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" name="variations[0][price]">
                                            </td>
                                            <td>
                                                <input type="file" class="form-control" name="variations[0][image]">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" name="variations[0][stock]">
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-danger btn-custom-h-w"
                                                    onclick="removeVariation(this)">
                                                    <i class='bx bx-minus-circle'></i>
                                                </button>
                                            </td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>

                        </div>


                        <div class="mb-3">
                            <label class="form-label" for="basic-default-description">Description</label>
                            <textarea id="CkEditor" class="form-control" cols="20" placeholder="Description" name="description">
                                {{ old('description') ? old('description') : (!empty($product->description) ? $product->description : null) }}
                            </textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('page-script')
    <script>
        const imageInput = document.getElementById('imageInput');
        const imageContainer = document.getElementById('imageContainer');
        let selectedFiles = [];

        @if ($formType === 'edit' && !empty($product->images))
            let existingImages = @json($product->images);
        @else
            let existingImages = [];
        @endif

        imageInput.addEventListener('change', function(event) {
            const files = Array.from(event.target.files);

            if (files.length > 0) {
                selectedFiles = selectedFiles.concat(files);
                updateImagePreviews();
                updateInputFiles();
            }
        });

        function updateImagePreviews() {
            imageContainer.innerHTML = '';
            existingImages.forEach((image, index) => {
                const imageItem = document.createElement('div');
                imageItem.className = 'image-item';

                const img = document.createElement('img');
                img.src = `{{ asset('') }}${image.image}`; // Use Laravel asset function for correct path

                const removeBtn = document.createElement('button');
                removeBtn.className = 'remove-btn';
                removeBtn.innerHTML = '&times;';
                removeBtn.onclick = function() {
                    removeExistingImage(index);
                };

                imageItem.appendChild(img);
                imageItem.appendChild(removeBtn);
                imageContainer.appendChild(imageItem);
            });

            selectedFiles.forEach((file, index) => {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const imageItem = document.createElement('div');
                    imageItem.className = 'image-item';

                    const img = document.createElement('img');
                    img.src = e.target.result;

                    const removeBtn = document.createElement('button');
                    removeBtn.className = 'remove-btn';
                    removeBtn.innerHTML = '&times;';
                    removeBtn.onclick = function() {
                        removeImage(index);
                    };

                    imageItem.appendChild(img);
                    imageItem.appendChild(removeBtn);
                    imageContainer.appendChild(imageItem);
                };
                reader.readAsDataURL(file);
            });
        }

        function removeImage(index) {
            selectedFiles.splice(index, 1);
            updateImagePreviews();
            updateInputFiles();
        }

        function removeExistingImage(index) {
            existingImages.splice(index, 1);
            updateImagePreviews();
        }

        function updateInputFiles() {
            const dataTransfer = new DataTransfer();
            selectedFiles.forEach(file => dataTransfer.items.add(file));
            imageInput.files = dataTransfer.files;
        }

        updateImagePreviews();

        // for variation
        let variationIndex = 1;

        function addVariation() {
            const variationTable = document.getElementById('variationTable');
            const tr = document.createElement('tr');
            tr.innerHTML = `
                <td>
                    <select name="variations[${variationIndex}][color_id]" class="form-select">
                        <option value="">Select Color</option>
                        @foreach ($colors as $color)
                            <option value="{{ $color->id }}">{{ $color->name }}</option>
                        @endforeach
                    </select>
                </td>
                <td>
                    <select name="variations[${variationIndex}][size]" class="form-select">
                        <option value="">Select Size</option>
                        @foreach ($sizes as $size)
                            <option value="{{ $size->name }}">{{ $size->name }}</option>
                        @endforeach
                    </select>
                </td>
                <td>
                    <input type="text" class="form-control" name="variations[${variationIndex}][price]">
                </td>
                <td>
                    <input type="file" class="form-control" name="variations[${variationIndex}][image]">
                </td>
                <td>
                    <input type="text" class="form-control" name="variations[${variationIndex}][stock]">
                </td>
                <td>
                    <button type="button" class="btn btn-danger btn-custom-h-w" onclick="removeVariation(this)">
                      <i class='bx bx-minus-circle'></i></button>
                </td>
            `;
            variationTable.appendChild(tr);
            variationIndex++;
        }

        function removeVariation(button) {
            button.closest('tr').remove();
        }
    </script>


@endsection
