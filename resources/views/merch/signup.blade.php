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

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <div class="input-group">
                    <input id="password" type="password" name="password" class="form-control  @error('password') is-invalid @enderror" placeholder="password" autocomplete="off">
                    <button type="button" id="see_password" class="btn"><i class="bi bi-eye"></i></button>
                </div>
                
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Password Confirmation</label>
                <div class="input-group">
                    <input id="password_confirmation" type="password" name="password_confirmation" class="form-control  @error('password') is-invalid @enderror" placeholder="password confirmation" autocomplete="off">
                    <button type="button" id="see_confirmation" class="btn"><i class="bi bi-eye"></i></button>
                </div>
                
                @if($errors->has('password_confirmation'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('password_confirmation')}}</strong>
                    </span>
                @endif
            </div>
            <div class="text-center">
                <input class="btn btn-danger" type="submit" value="Sign Up">
            </div>
        </form>
    </div>
</div>
<script src="js/signupform.js"></script>
@endsection