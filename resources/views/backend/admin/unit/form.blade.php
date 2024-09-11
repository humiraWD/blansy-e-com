@extends('layouts/contentNavbarLayout')

@php($headerName = 'Unit')

@php($title = $formType === 'create' ? 'Create' : 'Edit')

@section('title', $title . ' ' . $headerName)


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
                    <h5 class="mb-0">{{ $title }} {{ $headerName }}</h5>
                    <small class="text-muted float-end">
                        <a type="button" class="btn btn-icon btn-primary" href="{{ route('admin.units.index') }}">
                            {{-- <span class="tf-icons bx bx-pie-chart-alt"></span> --}}
                            <i class='bx bx-list-ul'></i>
                        </a>
                    </small>
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @error('error')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="card-body">
                    <form
                        action="{{ $formType === 'create' ? route('admin.units.store') : route('admin.units.update', $unit->id) }}"
                        method="POST" enctype="multipart/form-data">
                        @csrf
                        @if ($formType === 'edit')
                            @method('PUT')
                        @endif
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-name">Unit Name</label>
                                    <input type="text" class="form-control" id="basic-default-name"
                                        placeholder="Unit Name" name="name" value="{{ $unit->name ?? '' }}" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-short-name">Short Name</label>
                                    <input type="text" class="form-control" id="basic-default-short-name"
                                        placeholder="Short Name" name="short_name" value="{{ $unit->short_name ?? '' }}" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label " for="basic-default-status">Slug</label>
                                    <input type="text" class="form-control" id="basic-default-status" placeholder="Slug"
                                        name="slug" value="{{ $unit->slug ?? '' }}" />
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-description">Description</label>
                            <textarea id="basic-default-description" class="form-control" placeholder="Description" name="description">{{ $unit->description ?? '' }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
