@extends('layouts/contentNavbarLayout')

@php($title = $formType === 'create' ? 'Create' : 'Edit')
@section('title', $title . ' Category')

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/apex-charts/apex-charts.css') }}">
@endsection

@section('vendor-script')
    <script src="{{ asset('assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>
@endsection

@section('page-script')
    <script src="{{ asset('assets/js/dashboards-analytics.js') }}"></script>
@endsection



@section('content')
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Category {{ $title }}</h5>
                    <small class="text-muted float-end">
                        <a type="button" class="btn btn-icon btn-primary" href="{{ route('admin.categories.index') }}">
                            <i class='bx bx-list-ul'></i>
                        </a>
                    </small>
                </div>
                <div class="card-body">
                    <form
                        action="{{ $formType === 'create' ? route('admin.categories.store') : route('admin.categories.update', $category->id) }}"
                        method="POST" enctype="multipart/form-data">
                        @csrf
                        @if ($formType === 'edit')
                            @method('PUT')
                        @endif
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label

                                        "
                                        for="basic-default-name">
                                        Parent Category</label>
                                    <select class="form-select" id="basic-default-name" name="parent_id">
                                        <option value="">Select Parent Category</option>
                                        @foreach ($parents as $cat)
                                            <option value="{{ $cat->id }}"
                                                {{ isset($category) && $category->parent_id == $cat->id ? 'selected' : '' }}>
                                                {{ $cat->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label

                                        "
                                        for="basic-default-name">Category Name</label>
                                    <input type="text" class="form-control" id="basic-default-name"
                                        placeholder="Category Name" name="name" value="{{ $category->name ?? '' }}" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label

                                            "
                                        for="basic-default-status">Slug</label>
                                    <input type="text" class="form-control" id="basic-default-status" placeholder="Slug"
                                        name="slug" value="{{ $category->slug ?? '' }}" />
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label

                                "
                                for="basic-default-description">Description</label>
                            <textarea id="basic-default-description" class="form-control" placeholder="Description" name="description">{{ $category->description ?? '' }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
