@extends('layout.main')

@section('container')
<div class="d-flex flex-column justify-content-center align-items-center">
    <div class="container mt-5 col-4 border p-4">
        <form action="/merch-signup" class="d-flex  flex-column" method="POST" enctype="multipart/form-data">
            @csrf
            <h4 class="text-center text-danger">Sign Up</h4>
            <div class="mb-3">
                <label for="image" class="form-label">Merchant Icon</label>
                <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image">
                @error('image')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Merchant Name</label>
                <input id="name" type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Merchant Name" autocomplete="off">
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <select name="area_id" class="form-control">
                @foreach ($area as $a)
                    <option value="{{ $a->id }}">{{ $a->area_name }}</option>
                @endforeach
            </select>

            <div class="text-center mt-3">
                <input class="btn btn-danger" type="submit" value="Sign Up">
            </div>
        </form>
    </div>
</div>
<script src="js/signupform.js"></script>
@endsection
