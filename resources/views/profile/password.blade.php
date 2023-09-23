@extends('layout.main')

@section('container')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Change Password</div>
                <div class="card-body">
                    <form action="/changepass" method="post">
                        @csrf
                        <div class="mb-3">
                            <div class="form-group">
                                <label for="current_password">Current Password</label>
                                <input type="password" class="form-control @if($errors->has('current_password')) is-invalid @endif" id="current_password" name="current_password" required>
                            </div>
                            @error('current_password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <div class="form-group">
                                <label for="new_password">New Password</label>
                                <div class="input-group">
                                    <input type="password" class="form-control @if($errors->has('new_password')) is-invalid @endif" id="new_password" name="new_password" required>
                                    <button id="passwordToggler" type="button" class="btn"><i class="bi bi-eye"></i></button>
                                </div>

                            </div>
                            @error('new_password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Update Password</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="js/password.js"></script>
@endsection
