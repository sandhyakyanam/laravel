@extends('admin.admindashboard')

@section('viewProductListing')
    <div class="container">
        <h2>Products Listing</h2>
        <table class="table" id="productTable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Category</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Photo</th>
                </tr>
            </thead>
            <tbody>
                @foreach($product as $pp)
               <tr>
                        <td>{{ $pp->id }}</td>
                        <td>{{ $pp->category_id }}</td>
                        <td>{{ $pp->name }}</td>
                        <td>{{ $pp->description }}</td>
                        <td>{{ $pp->price }}</td>
                        <td>{{ $pp->quantity }}</td>
                        <td><img src="{{ asset('admin/img/product_images/' . $pp->photo) }}" alt="Product Photo" style="width: 100px;"></td>
                </tr>
                @endforeach
            </tbody>
        </table>  
        

    </div>
    
@endsection
