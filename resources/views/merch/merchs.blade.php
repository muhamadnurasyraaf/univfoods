@extends('layout.main')

@section('container')
<div class="container mt-5">
    <h1 class="text-center mb-4">Merchant List</h1>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        @foreach ($merchs as $merch)
        <div class="col-md-4">
            <div class="card mb-4" style="width:18rem">
                <img src="{{ asset('storage/' . $merch->image)  }}" class="card-img-top img-fluid" alt="Merchant 1">
                <div class="card-body text-center">
                    <h5 class="card-title">{{ $merch->name }}</h5>
                    <a href="/merchdash/{{ $merch->id }}" class="btn btn-danger">Manage</a>
                </div>
            </div>
        </div>
        @endforeach
  </div>
</div>
@endsection