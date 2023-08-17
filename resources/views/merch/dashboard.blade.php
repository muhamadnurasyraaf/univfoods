@extends('layout.main')

@section('container')
<div class="container mt-5">
    <h2>Merchant Profile</h2>
    <form method="post" action="}}">
        @csrf
        <div class="form-group">
            <label for="name">Merchant Name:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $merch->name }}" readonly>
        </div>
        <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" class="form-control" id="address" name="address" value="{{ $merch->address }}" readonly>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control" id="description" name="description" rows="3" readonly>{{ $merch->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password" value="********" readonly>
        </div>
        <button type="button" class="btn btn-primary" id="editButton">Edit</button>
        <button type="submit" class="btn btn-success d-none" id="saveButton">Save</button>
    </form>
</div>
@endsection