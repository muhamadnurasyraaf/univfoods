@extends('layout.main')

@section('container')
<div class="d-flex flex-column gap-5 mt-5 justify-content-center flex-wrap">
    @foreach ( $foods as $f )
        <a href="/foods/" class="card mb-3 text-decoration-none " style="max-width: 540px;">
            <div class="row g-0">
            <div class="col-md-4 d-flex flex-column justify-content-center">
                <img src="{{ asset('storage/icons/test.jpg') }}" class="img-fluid rounded-start" alt="No image available">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Food Name</h5>
                    <p class="card-text">Food Description</p>
                </div>
            </div>
            </div>
        </a>
    @endforeach

 </div>
@endsection
