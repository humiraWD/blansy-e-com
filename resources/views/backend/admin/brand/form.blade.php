@extends('layouts/contentNavbarLayout')

@php($title = $formType === 'create' ? 'Create' : 'Edit')
@section('title', $title . ' Brand')

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
                    <h5 class="mb-0">Brand Create </h5>
                    <small class="text-muted float-end">
                        <a type="button" class="btn btn-icon btn-primary" href="{{ route('admin.brands.index') }}">
                            <i class='bx bx-list-ul'></i>
                        </a>
                    </small>
                </div>
                <div class="card-body">
                    <form
                        action="{{ $formType === 'create' ? route('admin.brands.store') : route('admin.brands.update', $brand->id) }}"
                        method="POST" enctype="multipart/form-data">
                        @csrf
                        @if ($formType === 'edit')
                            @method('PUT')
                        @endif
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-name">Brand Name</label>
                                    <input type="text" class="form-control" id="basic-default-name"
                                        placeholder="Brand Name" name="name" value="{{ $brand->name ?? '' }}" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label " for="basic-default-status">Slug</label>
                                    <input type="text" class="form-control" id="basic-default-status" placeholder="Slug"
                                        name="slug" value="{{ $brand->slug ?? '' }}" />
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-description">Description</label>
                            <textarea id="basic-default-description" class="form-control" placeholder="Description" name="description">{{ $brand->description ?? '' }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
