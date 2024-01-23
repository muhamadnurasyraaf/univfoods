@extends('layout.main')

@section('container')
<div class="d-flex flex-column justify-content-center align-items-center">
    <div class="container mt-5 col-4 border p-4">
        <form action="/signup" class="d-flex  flex-column" method="POST">
            @csrf
            <h4 class="text-center text-danger">Sign Up</h4>
            <div class="mb-3">
                <label for="name" class="form-label">Username</label>
                <input id="name" type="text" name="username" class="form-control @error('username') is-invalid @enderror" placeholder="Username" autocomplete="off">
                @error('username')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input id="email" type="email" name="email" class="form-control  @error('email') is-invalid @enderror" placeholder="email" autocomplete="off">
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="phone_number" class="form-label">Phone Number</label>
                <input id="phone_number" type="number" name="phone_number" class="form-control  @error('phone_number') is-invalid @enderror" placeholder="Phone Number ex..0102345678" autocomplete="off">
                @error('phone_number')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="college">College</label>
                <select class="form-control" name="college_id" id="college">
                    @foreach ($colleges as $college)
                        <option value="{{ $college->id }}">{{ $college->college_name }}</option>
                    @endforeach
                </select>
            </div>
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
    <small class="mt-3">Already got an account?<a href="/login">Login</a></small>
</div>
<script src="js/signupform.js"></script>
@endsection
