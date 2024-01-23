@extends('layout.main')

@section('container')
<h2 class="my-4">Order History</h2>

<!-- Example order cards -->
@foreach($orders as $order)
<div class="card order-card">
    <div class="card-header order-card-header">
        Order #{{ $order->id }} - Date: {{ $order->created_at }}
    </div>
    <div class="card-body order-details">
        <h5 class="card-title">Product Name: {{ $order->product->name }}</h5>
        <p class="card-text">Quantity: {{ $order->quantity }}</p>
        <p class="card-text">Total Amount: RM{{ number_format($order->product->price,2) }}</p>
        <a href="#" class="btn btn-primary">View Details</a>
    </div>
</div>
@endforeach



<style>

    .order-card {
        margin-bottom: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .order-card-header {
        background-color: #f8f9fa;
        padding: 10px;
        border-bottom: 1px solid #dee2e6;
    }

    .order-details {
        padding: 20px;
    }

    @media (max-width: 576px) {
        .order-details {
            padding: 10px;
        }
    }
</style>
@endsection
