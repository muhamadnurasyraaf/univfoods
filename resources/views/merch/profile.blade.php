@extends('layout.main')

@section('container')
<div class="container mt-5">
    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <h2>Merchant Profile</h2>
    <form method="POST" action="/edit" class="mb-3">
        @csrf
        @method('put')
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

        <input type="hidden" name="merch_id" value="{{ $merch->id }}">
        <button type="button" class="btn mt-4 btn-primary" id="editButton">Edit</button>
        <input type="submit" class="btn btn-success d-none" id="saveButton" value="Save">
    </form>
    <a href="/bank/{{ $merch->id }}" class="btn btn-danger">Update Bank Account Information</a>
</div>
<script>
    const editbtn = document.getElementById('editButton');
    const saveBtn = document.getElementById('saveButton');
    const inputGrp = document.querySelectorAll('input');
    const textArea = document.querySelector('textarea');
    const form = document.querySelector('form');

    editbtn.addEventListener('click', ()=>{
        textArea.removeAttribute('readonly');
        inputGrp.forEach( (input) => {
            input.removeAttribute('readonly');
        });
        saveBtn.removeAttribute('d-none');

    });





</script>
@endsection
