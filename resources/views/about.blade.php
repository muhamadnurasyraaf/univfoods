@extends('layout.main')

@section('container')
<section class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <h2>About Us</h2>
            <p>Welcome to Food Delivery App! We're passionate about delivering delicious, high-quality food right to your doorstep.</p>
            <p>Our mission is to make your dining experience as convenient as possible. Whether you're craving nasi lemak, noodles or a hearty burger, we've got you covered.</p>
            <p>Need Help? <a href="/contact">Contact Us Here</a></p>
        </div>
        <div class="col-md-6">
            <img src="{{ asset('storage/icons/food-delivery.png') }}" alt="About Us Image" class="img-fluid">
        </div>
    </div>
</section>
@endsection
