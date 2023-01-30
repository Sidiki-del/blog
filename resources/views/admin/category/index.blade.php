@extends('layouts.master')

@section('title', 'Category')

@section('content')

<div class="container-fluid px-4">

    <div class="card mt-4">
        <div class="card-header">
                        <h4>View Category <a class="btn btn-primary btn-sm float-end" href="{{ url('admin/add_category') }}">Add Category</a></h4>


        </div>
        <div class="card-body">
    @if(session('message'))
                            <div class="alert alert-success">{{ session('message') }}</div>
                        @endif

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Category Name</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($category as $item)
                                     <tr>
                                    <td>{{ $item -> id }}</td>
                                    <td>{{ $item -> name }}</td>
                                    <td><img height="50px" width="50px" src="{{ asset('uploads/category/'. $item -> image) }}" alt="Img"></td>
                                    <td>{{ $item -> status == '1' ? 'Hidden': 'Show' }}</td>
                                    <td></td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>

        </div>
    </div>

</div>

@endsection
