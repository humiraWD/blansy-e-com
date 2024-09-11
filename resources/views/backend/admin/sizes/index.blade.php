@extends('layouts/contentNavbarLayout')
@section('title', 'Size List')


@section('content')
    <div class="container">
        <div class="row">

            <div class="d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Size List</h5>
                <small class="text-muted float-end">
                    <a type="button" class="btn btn-icon btn-primary" href="{{ route('admin.sizes.create') }}">
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
                            <th>Slug</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($sizes as $key => $data)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $data->name }}</td>
                                <td>
                                   {{ $data->slug }}
                                </td>

                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{ route('admin.sizes.edit', $data->id) }}"><i
                                                    class="bx bx-edit-alt me-1"></i> Edit</a>
                                            <form action="{{ route('admin.sizes.destroy', $data->id) }}" method="POST">
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
