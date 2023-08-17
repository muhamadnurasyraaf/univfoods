@extends('layout.main')

@section('container')
<div class="container d-flex flex-column justify-content-center">
    <div class="row mt-5">
        @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="col-4 mx-auto">
            <form action="/login" class="border p-4 rounded" method="POST">
                @csrf
                <h4 class="text-center text-primary">Login</h4>
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input id='username' type="text" name="username" placeholder="Username.." class="form-control @error('username') is_invalid @enderror" autofocus>
                    @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="password" class="form-label">Username</label>
                    <div class="input-group">
                        <input id="password" type="password" name="password" placeholder="Password.." class="form-control @error('password') is-invalid @enderror" >
                        <button id="passwordToggler" type="button" class="btn"><i class="bi bi-eye"></i></button>
                    </div>
                    
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </form>
            <small>Not Registered Yet?<a href="/signup">Sign Up</a></small>
        </div>
    </div>
</div>

<script src="js/loginform.js"></script>
@endsection