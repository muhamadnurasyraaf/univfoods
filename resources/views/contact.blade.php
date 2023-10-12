@extends('layout.main')

@section('container')
<div class="container mt-5">
    <h1>Contact Us</h1>
    <p>Feel free to get in touch with us.</p>
    <div class="row">
        <div class="col-md-6">
            <h3>Contact Information</h3>
            <p>Email: univfoodsofficial@gmail.com</p>
            <p>Phone: (123) 456-7890</p>
            <p>Address: 123 Main Street, Cityville, State, 12345</p>
        </div>
        <div class="col-md-6">
            <h3>Contact Form</h3>
            <form action="#" method="post">
                <div class="form-group">
                    <label for="name">Your Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Your Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group mb-3">
                    <label for="message">Message</label>
                    <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
        </div>
    </div>
</div>

@endsection
