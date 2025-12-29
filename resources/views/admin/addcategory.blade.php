@extends('admin.admindashboard')

@section('addCategory')
     @session('message')
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endsession
    <form method="POST" action="{{ route('admin.addCategoryData') }}" >
        @csrf
        <div class="form-group">
            <label>Category Name</label>
            <input type="text" class="form-control" name="category_name">
        </div>
        <button type="submit" class="btn btn-primary" >Add Category</button>
    </form>
@endsection
