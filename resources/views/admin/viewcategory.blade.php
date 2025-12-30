@extends('admin.admindashboard')

@section('viewCategory')
    @session('message')
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endsession
    <div class="container">
        <h2>Categories</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                </tr>
            </thead>
            <tbody>
                @foreach($category as $cat)
               <tr>
                        <td>{{ $cat->id }}</td>
                        <td>{{ $cat->name }}</td>
                        <td><a href="{{ route('admin.editCategory', $cat->id) }}">Edit</a></td>
                        <td><a href="{{ route('admin.deleteCategory', $cat->id) }}">Delete</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>    
    </div>
@endsection