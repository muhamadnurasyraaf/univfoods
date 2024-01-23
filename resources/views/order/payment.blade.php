@extends('layout.main')

@section('container')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">Payment Details</h3>
                </div>
                <div class="card-body">
                    <!-- Merchant Bank Information -->
                    <div class="mb-4">
                        <h4>Merchant Bank Information</h4>
                        <p>Bank Name: Your Bank Name</p>
                        <p>Account Holder: {{ $order->merchant->name }}</p>
                        <p>Account Number: {{ $order->merchant->NoAccount }}</p>
                        <p>Branch: {{ $order->merchant->area->area_name }}</p>
                    </div>

                    <!-- Product Details -->
                    <div class="mb-4">
                        <h4>Product Details</h4>
                        <p>Product Name: {{ $order->product->name }}</p>
                        <p>Price: RM{{ number_format($order->product->price,2) }}</p>
                        <!-- Add more details as needed -->
                    </div>

                    <!-- Payment Receipt Upload Form -->
                    <form action="{{ route('submit.payment') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="paymentReceipt" class="form-label">Upload Payment Receipt</label>
                            <input type="file" class="form-control" id="paymentReceipt" name="payment_receipt" accept=".pdf, .jpg, .jpeg, .png" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit Payment</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
