@extends('layout.main')

@section('container')
<div class="d-flex flex-column gap-5 mt-5 justify-content-center flex-wrap">
    @foreach ( $foods as $f )
    <div class="card p-2 mb-3 text-decoration-none">
        <div class="card-content">
            <div class="image-container">
                <img src="{{ asset('storage/' . $f->image ) }}" alt="No image available">
            </div>
            <div class="card-details">
                <h5 class="card-title">{{ $f->name }}</h5>
                <p class="card-text">{{ $f->description }}</p>
                <a href="/foods/{{ $f->id }}" class="btn btn-primary">Details</a>
                <form action="{{ route('cart.add') }}" method="post">
                    <input type="hidden" name="food_id" value="{{ $f->id }}">
                    <input type="hidden" name="quantity" value="1">
                     <button type="submit" class="btn btn-danger"><i class='bi bi-cart'></i>Add to Cart</button>
                </form>
            </div>
        </div>
    </div>

    @endforeach
    <style>

    </style>
 </div>
@endsection
