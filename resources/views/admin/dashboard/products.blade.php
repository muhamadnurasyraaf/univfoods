@extends('layout.main')

@section('container')
<h2 class="my-4">Product List</h2>
<a href="/dashboard">back to dashboard</a>
@foreach($products as $pro)
    <div class="card product-card">
        <div class="card-header product-card-header">
            Product #{{ $pro->id }} - {{ $pro->created_at}}
        </div>
        <div class="card-body product-details">
            <h5 class="card-title">Product Name: {{ $pro->name }}</h5>
            <p class="card-text">Description: {{ $pro->descriptio }}</p>
            <p class="card-text">Price: RM{{ number_format($pro->price) }}</p>
            <a href="#" class="btn btn-primary">View Details</a>
        </div>
    </div>
@endforeach
<style>
       .product-card {
            margin-bottom: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .product-card-header {
            background-color: #f8f9fa;
            padding: 10px;
            border-bottom: 1px solid #dee2e6;
        }

        .product-details {
            padding: 20px;
        }

        @media (max-width: 576px) {
            .product-details {
                padding: 10px;
            }
        }
</style>
@endsection
