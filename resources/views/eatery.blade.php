@extends('layout.main')

@section('container')
    <div class="row justify-content-end mt-4">
        <div class="col-sm-4 ">
            <form action="/filterarea" method="post" class="input-group">
                <select name="area" id="">
                    @foreach ($areas as $area)
                        <option class="form-control" value="{{ $area->id }}">{{ $area->area_name }}</option>
                    @endforeach
                </select>
                <button class="btn btn-outline-danger">Filter Area</button>
            </form>
        </div>
    </div>
    <div class="row justify-content-md-center mt-5">
        <div class="col-md-4 col-lg-10 ">
            <form action="/search" class="input-group container" method="get">
                <input type="text" class="form-control" name="search" placeholder="Search for a food or restaurant">
                <button class="btn btn-outline-danger">Search</button>
            </form>
        </div>
    </div>

    <div class="d-flex gap-5 mt-5 justify-content-center flex-wrap">
       @foreach ($merchs as $merch)
       <div class="card" class="my-3" style="width: 18rem;">
        <img src="{{ asset('storage/' . $merch->image) }}" class="card-img-top" alt="imageUrl">
        <div class="card-body">
          <h5 class="card-title">{{ $merch->name }}</h5>
          <p class="card-text">{{ $merch->description }}</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
       @endforeach
        
       
    </div>
   
@endsection