@extends('layout.main')

@section('container')
    <h4 class="text-decoration-underline mt-4" style="font-family: Poppins">{{ $merch->name }}'s Dashboard</h1>
        <div class="container mt-3 mb-3">
            <div class="row">
                <div class="col-md-4">
                    <div class="card p-5 text-center">
                        <h5 class="card-title" >Weekly Orders</h5>
                        <p class="card-text">0</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-5 text-center">
                        <h5 class="card-title" >Weekly Orders Amount(RM)</h5>
                        <p class="card-text">0.0</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-5 text-center">
                        <h5 class="card-title" >This Week Fees(RM)</h5>
                        <p class="card-text">0.0</p>
                    </div>
                </div>
            </div>
        </div>

        <a href="/merchprofile/{{ $merch->id }}" class="btn btn-danger">Edit Merchant Profile</a>
    <div class="container mt-5">
        <h1>Product Details</h1>
        <table class="table">
            <a href="/add-product" class="btn btn-danger">Add a product</a>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Image</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td>
                        <p>Product 1</p>
                        <button class="btn btn-primary">Manage</button>
                    </td>
                    <td>$19.99</td>
                    <td>This is the description of Product 1.</td>
                    <td><img src="https://via.placeholder.com/100" alt="Product 1"></td>
                </tr>
                <tr>
                    <td>
                        <p>Product 2</p>
                        <button class="btn btn-primary">Manage</button>
                    </td>
                    <td>$29.99</td>
                    <td>This is the description of Product 2.</td>
                    <td><img src="https://via.placeholder.com/100" alt="Product 2"></td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
