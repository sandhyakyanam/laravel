@extends('admin.admindashboard')
@section('addProduct')
<div class="container mt-5">
    @if(session('message'))
        <div class="alert alert-success text-center">
            {{ session('message') }}
        </div>
    @endif
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">

            <div class="card shadow-sm">
                <div class="card-header text-center">
                    <h4 class="mb-0">Add Product</h4>
                </div>

                <div class="card-body">
                    <form action="{{ route('admin.storeproduct') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <!-- Product Name -->
                        <div class="mb-3">
                            <label for="product_name" class="form-label fw-bold">
                                Product Name
                            </label>
                            <input type="text"
                                   id="product_name"
                                   name="product_name"
                                   class="form-control"
                                   placeholder="Enter product name"
                                   required>
                        </div>

                        <!-- Product Description -->
                        <div class="mb-3">
                            <label for="product_description" class="form-label fw-bold">
                                Product Description
                            </label>
                            <textarea id="product_description"
                                      name="product_description"
                                      class="form-control"
                                      rows="4"
                                      placeholder="Enter product description"
                                      required></textarea>
                        </div>

                        <!-- Product Quantity -->
                        <div class="mb-3">
                            <label for="product_quantity" class="form-label fw-bold">
                                Product Quantity
                            </label>
                            <input type="number"
                                   id="product_quantity"
                                   name="product_quantity"
                                   class="form-control"
                                   min="1"
                                   placeholder="Enter quantity"
                                   required>
                        </div>

                        <div class="mb-3">
                            <label for="product_price" class="form-label fw-bold">
                                Product Price
                            </label>
                            <input type="number"
                                   id="product_price"
                                   name="product_price"
                                   class="form-control"
                                   min="1"
                                   placeholder="Enter price"
                                   required>
                        </div>

                        <!-- Category ID -->
                        <div class="mb-3">
                            <label for="category_id" class="form-label fw-bold">
                                Category
                            </label>
                            <select id="category_id"
                                    name="category_id"
                                    class="form-select"
                                    required>
                                <option value="">Select Category</option>
                                @foreach ($categories as $cat)
                                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Product Photos -->
                        <div class="mb-4">
                            <label for="product_photos" class="form-label fw-bold">
                                Product Photos
                            </label>
                            <input type="file"
                                   id="product_photos"
                                   name="product_photos"
                                   class="form-control"
                                   multiple
                                   accept="image/*">
                            <div class="form-text">
                                You can upload multiple images.
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">
                                Save Product
                            </button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection


