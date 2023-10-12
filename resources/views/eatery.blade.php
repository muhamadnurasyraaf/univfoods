@extends('layout.main')

@section('container')


    <div class="d-flex gap-5 mt-5 justify-content-center flex-wrap">
       @foreach ($merchs as $merch)
        <div class="card" class="my-3" style="width: 18rem;">
            <img src="{{ asset('storage/' . $merch->image) }}" class="card-img-top" alt="imageUrl">
            <div class="card-body">
                <h5 class="card-title">{{ $merch->name }}</h5>
                <p class="card-text">{{ $merch->description }}</p>
                <a href="/foodies/{{ $merch->id }}" class="btn btn-primary">Foodies</a>
            </div>
        </div>
       @endforeach
    </div>

@endsection
