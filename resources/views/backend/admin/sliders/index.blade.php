@extends('layouts/contentNavbarLayout')

@section('title', 'Dashboard - Sliders')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Slider List</h4>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('admin.sliders.create') }}" class="btn btn-primary">Add Slider</a>
                        <table class="table mt-3">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Title</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sliders as $slider)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $slider->title }}</td>
                                        <td>
                                            <img src="{{ asset($slider->image) }}" alt="" width="50px"
                                                height="50px">
                                        </td>
                                        <td>{{ $slider->status }}</td>
                                        <td>
                                            <a href="{{ route('admin.sliders.edit', $slider->id) }}"
                                                class="btn btn-primary">Edit</a>
                                            <form action="{{ route('admin.sliders.destroy', $slider->id) }}" method="POST"
                                                class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger"
                                                    onclick="return confirm('Are you sure?')">Delete</button>
                                            </form>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{-- {{ $sliders->links() }} --}}
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
