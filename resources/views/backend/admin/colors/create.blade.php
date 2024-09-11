@extends('layouts/contentNavbarLayout')

@section('page-style')

    <style scoped>
        .rounded-color-input {
            width: 200px;
            /* Adjust size as needed */
            height: 60px;
            /* Adjust size as needed */
            padding: 0;
            /* Remove default padding if needed */
        }
    </style>
@endsection

@php($title = $formType === 'create' ? 'Create' : 'Edit')
@section('title', $title . ' Color')

@section('content')
    <form action="{{ $formType === 'create' ? route('admin.colors.store') : route('admin.colors.update', $color->id) }}"
        method="POST" enctype="multipart/form-data">
        @csrf
        @if ($formType === 'edit')
            @method('PUT')
        @endif
        <div class="row">
            <div class="col-xl">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Color Create </h5>
                        <small class="text-muted float-end">
                            <a type="button" class="btn btn-icon btn-primary" href="{{ route('admin.colors.index') }}">
                                <i class='bx bx-list-ul'></i>
                            </a>
                        </small>
                    </div>
                    <div class="card-body">

                        <div class="row">

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-name">Name <span
                                            style="color: red;">*</span></label>
                                    <input type="text" class="form-control" id="basic-default-name"
                                        placeholder="color Name" name="name"
                                        value="{{ old('name') ? old('name') : (!empty($color->name) ? $color->name : null) }}" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-sku">Code <span
                                            style="color: red;">*</span></label>
                                    {{-- round shaped input --}}
                                    <input type="color" class="form-control rounded-color-input" id="basic-default-sku"
                                        placeholder="Code" name="code"
                                        value="{{ old('code') ? old('code') : (!empty($color->code) ? $color->code : null) }}" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
