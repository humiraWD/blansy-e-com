@extends('layouts/contentNavbarLayout')

@section('title', 'Dashboard - Categories')
@php($headerName = 'Category')

@section('title', $headerName . ' List')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">{{ $headerName }} List</h5>
                        <small class="text-muted float-end">
                            <a type="button" class="btn btn-icon btn-primary" href="{{ route('admin.categories.create') }}">
                                {{-- <span class="tf-icons bx bx-pie-chart-alt"></span> --}}
                                <i class='bx bx-plus-circle'></i>
                            </a>
                        </small>
                    </div>
                    <div class="card-body">
                        <table class="table mt-3">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Unit Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $key => $category)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $category->name }}</td>
                                        <td>
                                            <a href="{{ route('admin.categories.edit', $category->id) }}"
                                                class="btn btn-primary">
                                                <i class='bx bxs-edit-alt'></i>
                                            </a>
                                            <form action="{{ route('admin.categories.destroy', $category->id) }}"
                                                method="POST" style="display: inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">
                                                    <i class='bx bxs-trash'></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{-- {{ $units->links() }} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
