@extends('layout.main')

@section('container')
<div class="col-lg-6 mt-5">
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if(session('email_changed'))
        <div class="alert alert-success alert-dismissable fade show">
            {{ session('email_changed') }}
        </div>
    @endif

    <h2>User Profile</h2>
    <table class="table">
        <tbody>
            <tr>
                <td>ID</td>
                <td>{{ auth()->user()->id }}</td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input class="form-control" type="text" readonly value="{{ auth()->user()->username }}"></td>
                <td><a href="/change-username" class="btn btn-outline-danger">Edit</a> </td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" class="form-control" readonly value="{{ auth()->user()->email }}"></td>
                <td><a href="/change-email" class="btn btn-outline-danger">Edit</a></td>
            </tr>
            <tr>
                <td>Email Verified At</td>
                <td><input type="text" class="form-control" readonly value="{{ auth()->user()->email_verified_at }}"></td>

            </tr>
            <tr>
                <td>Merchant Owner</td>
                <td><input type="text" class="form-control" readonly value="{{ auth()->user()->merchant_owner }}"></td>
                @if(auth()->user()->merchant_owner === 1)
                    <td><a href="/merchdash" class="btn btn-primary">Manage your restaurant</a></td>
                @else
                    <td>Wanna start an online restaurant?<a href="/merch-signup" >Register one here</a></td>
                @endif
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="text" class="form-control" readonly value="********"></td>
                <td><a href="/changepass" class="btn btn-outline-secondary">Change your password</a></td>
            </tr>
            <tr>
                <td>Created At</td>
                <td><input type="text" class="form-control" readonly value="{{ auth()->user()->created_at }}"></td>
            </tr>
            <tr>
                <td>Updated At</td>
                <td><input type="text" class="form-control" readonly value="{{ auth()->user()->updated_at }}"></td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
