@extends('layout.main')

@section('container')
    <div class="container mt-5" style="width: 50%">
        <p class="text-center fw-bold fs-4" style="font-family:Poppins;text-decoration:overline;">Update Email</p>
        <form action="/update-email" method="post" class="mt-5">
            @csrf
            <div class="mb-3">
                <input type="email" name="old_email" placeholder="Old Email" class="form-control @error('old_email') is_invalid @enderror" required autocomplete="off">
                @error('old_email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <input type="email" name="new_email" placeholder="New Email" class="form-control @error('new_email') is_invalid @enderror" required autocomplete="off">

                @error('new_email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button class="btn btn-danger">Update</button>
        </form>
    </div>

@endsection
