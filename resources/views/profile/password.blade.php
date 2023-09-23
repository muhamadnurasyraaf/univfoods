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
                        <div class="form-group mb-3">
                            <label for="current_password">Current Password</label>
                            <input type="password" class="form-control @error('current_password')
                               is-invalid
                            @enderror" id="current_password" name="current_password" required>

                            @error('current_password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="new_password">New Password</label>
                            <input type="password" class="form-control @error('new_password')
                            is-invalid
                            @enderror" id="new_password" name="new_password" required>

                            @error('new_password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="confirm_password">Confirm Password</label>
                            <input type="password" class="form-control @error('confirm_password')
                                is-invalid
                            @enderror" id="confirm_password" name="confirm_password" required>
                        </div>

                        @error('confirm_password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                        @enderror
                        <button type="submit" class="btn btn-primary mt-3">Update Password</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
