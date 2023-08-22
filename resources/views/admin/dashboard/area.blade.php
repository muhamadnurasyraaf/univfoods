@extends('layout.main')

@section('container')
    <div class="container">
            @if(session('success'))
            <div class="alert alert-success m-3">
                {{ session('success') }}
            </div>
            @endif

        <div class="row">
            <form action="/area" class="col-6 m-5" method="post">
                @csrf
                <label for="area_name" class="mb-2 text-decoration-underline">Add an Area</label>
                <input id="area_name" name="area_name" type="text" class="form-control mb-3 @error('area_name') is_invalid @enderror">
                @error('area_name')
                    <div class="invalid-feedback mb-3">{{ $message }}</div>
                @enderror
                <input type="submit" name="submit" value="Add" class="btn btn-danger mb-3">
            </form>
        </div>
    </div>
    
    <div class="container">
        <h1>Available Areas and Merchants</h1>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Area Name</th>
              <th scope="col">Merchants Available</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($areas as $area)
            <tr>
                <td>{{ $area->id }}</td>
                <td>{{ $area->area_name }}</td>
                <td>{{ $area->merchant()->count() }}</td>
                <td>
                   <form action="/delete-area/{{ $area->id}}" method="post">
                    @csrf
                    <input type="submit" value="Delete" class="btn btn-danger">
                   </form>
                </td>
            </tr>
            @endforeach
            
          </tbody>
        </table>
      </div>
@endsection