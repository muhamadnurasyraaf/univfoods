@extends('layout.main')


@section('container')
    @foreach($customer as $cust)
    <h2 class="my-4">Customer List</h2>
    <div class="card customer-card">
        <div class="card-header customer-card-header">
            Customer #{{ $cust->id }} - {{ $cust->username }}
        </div>
        <div class="card-body customer-details">
            <h5 class="card-title">Name: {{ $cust->username }}</h5>
            <p class="card-text">Email: {{ $cust->email }}</p>
            <p class="card-text">Phone: {{ $cust->phone_number }}</p>
            <a href="#" class="btn btn-primary">View Details</a>
        </div>
    </div>

    @endforeach
@endsection
