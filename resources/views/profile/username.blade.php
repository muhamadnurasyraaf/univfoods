@extends('layout.main')

@section('container')
    <div class="container mt-5" style="width: 50%">
        <p class="text-center fw-bold fs-4" style="font-family:Poppins;text-decoration:overline;">Update Username</p>
        <form action="/update-email" method="post" class="mt-5">
            @csrf
            <div class="mb-3">
                <input type="text" name="current_username" placeholder="Current Username" class="form-control @error('current_username') is_invalid @enderror" required autocomplete="off">
                @error('current_username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <input type="text" name="new_username" placeholder="New Username" class="form-control @error('new_username') is_invalid @enderror" required autocomplete="off">

                @error('new_username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button class="btn btn-danger">Update</button>
        </form>
    </div>

@endsection
