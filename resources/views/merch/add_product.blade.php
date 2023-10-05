@extends('layout.main')

@section('container')

<div class="d-flex flex-column justify-content-center align-items-center">
    <div class="container mt-5 col-4 border p-4">
        <form action="/add-product" class="d-flex  flex-column" method="POST" enctype="multipart/form-data">
            @csrf
            <h4 class="text-center text-danger">Add Product</h4>
            <div class="mb-3">
                <label for="image" class="form-label">Product Image</label>
                <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image">
                @error('image')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Product Name</label>
                <input id="name" type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Product Name" autocomplete="off">
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="price">Product Price</label>
                <input type="number" id="price" name="price" class="form-control" placeholder="Product Price(RM)">

                @error('price')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description">Product Description</label>
                <textarea type="text" id="description" name="description" class="form-control" placeholder="Product Description"></textarea>

                @error('price')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>




            <div class="text-center mt-3">
                <input class="btn btn-danger" type="submit" value="Register Product">
            </div>
        </form>
    </div>
</div>
@endsection
