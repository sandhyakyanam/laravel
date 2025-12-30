@extends('admin.admindashboard')
<base href='/public'>
@section('editCategory')

@if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif

<form method="POST" action="{{ route('admin.updateCategoryData', $data->id) }}">
    @csrf

    <div class="form-group">
        <label>Category Name</label>
        <input type="text"
               class="form-control"
               name="category_name"
                value="{{ $data->category_name }}"
               required>
    </div>

    <button type="submit" class="btn btn-primary">
        Update Category
    </button>
</form>

@endsection
