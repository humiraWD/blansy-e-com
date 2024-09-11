@extends('layouts/contentNavbarLayout')
@section('title', 'Product List')


@section('content')
    <div class="container">
        <div class="row">

            <div class="d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Product List</h5>
                <small class="text-muted float-end">
                    <a type="button" class="btn btn-icon btn-primary" href="{{ route('admin.products.create') }}">
                        {{-- <span class="tf-icons bx bx-pie-chart-alt"></span> --}}
                        <i class='bx bx-plus-circle'></i>
                    </a>
                </small>
            </div>


            <div class="table-responsive text-nowrap">
                <table class="table card-table" id="dataTables" style="width: 100%">
                    <thead>
                        <tr>
                            <th>SL#</th>
                            <th>Name</th>
                            <th>Brand</th>
                            <th>Category</th>
                            <th>Slug</th>
                            <th>Sku</th>
                            <th>Image</th>
                            <th>Featured</th>
                            <th>Best Selling</th>
                            <th>New</th>
                            <th>Hot</th>
                            <th>Sale_off</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($products as $key => $product)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->brand?->name }}</td>
                                <td>{{ $product->category?->name }}</td>
                                <td>{{ $product->slug }}</td>
                                <td>{{ $product->sku }}</td>
                                <td>
                                    <img src="{{ asset($product->image) }}" alt="image" width="50">
                                </td>
                                <td>
                                    @if ($product->featured == 1)
                                        <span class="badge bg-success">Yes</span>
                                    @else
                                        <span class="badge bg-danger">No</span>
                                    @endif

                                </td>
                                <td>
                                    @if ($product->best_selling == 1)
                                        <span class="badge bg-success">Yes</span>
                                    @else
                                        <span class="badge bg-danger">No</span>
                                    @endif

                                </td>
                                <td>
                                    @if ($product->new == 1)
                                        <span class="badge bg-success">Yes</span>
                                    @else
                                        <span class="badge bg-danger">No</span>
                                    @endif

                                </td>
                                <td>
                                    @if ($product->hot == 1)
                                        <span class="badge bg-success">Yes</span>
                                    @else
                                        <span class="badge bg-danger">No</span>
                                    @endif

                                </td>
                                <td>

                                    @if ($product->sale_off == 1)
                                        <span class="badge bg-success">Yes</span>
                                    @else
                                        <span class="badge bg-danger">No</span>
                                    @endif

                                </td>
                                <td>
                                    @if ($product->status == 1)
                                        <span class="badge bg-success">Active</span>
                                    @else
                                        <span class="badge bg-danger">Inactive</span>
                                    @endif

                                </td>

                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item"
                                                href="{{ route('admin.products.edit', $product->id) }}"><i
                                                    class="bx bx-edit-alt me-1"></i> Edit</a>
                                            <form action="{{ route('admin.products.destroy', $product->id) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="dropdown-item" href="javascript:void(0);"><i
                                                        class="bx bx-trash me-1"></i>
                                                    Delete</button>

                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection
