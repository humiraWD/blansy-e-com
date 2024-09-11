@extends('layouts/contentNavbarLayout')

@php($headerName = 'Role')

@section('title', $headerName . ' List')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">{{ $headerName }} List</h5>
                        <small class="text-muted float-end">
                            <a type="button" class="btn btn-icon btn-primary" href="{{ route('admin.roles.create') }}">
                                {{-- <span class="tf-icons bx bx-pie-chart-alt"></span> --}}
                                <i class='bx bx-plus-circle'></i>
                            </a>
                        </small>
                    </div>
                    <div class="card-body">
                        {{-- <a href="{{ route('admin.roles.create') }}" class="btn btn-primary">Add {{ $headerName }}</a> --}}
                        <table class="table mt-3">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                  
                                    <th>Type</th>
                                    <th>Identity</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($roles as $role)
                                    <tr>
                                        <td>{{ $role->id }}</td>
                                       
                                        <td>{{ $role->type }}</td>
                                        <td>{{ $role->identity }}</td>
                                        <td>
                                            <a href="{{ route('admin.roles.edit', $role->id) }}" class="btn btn-primary"> <i
                                                    class='bx bxs-edit-alt'></i></a>
                                            <form action="{{ route('admin.roles.destroy', $role->id) }}" method="POST"
                                                style="display: inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">
                                                    {{-- <span class="tf-icons bx bx-pie-chart-alt">
                                                    </span> --}}
                                                    <i class='bx bxs-trash'></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{-- {{ $roles->links() }} --}}
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
