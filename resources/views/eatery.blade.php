@extends('layout.main')

@section('container')
    <div class="row justify-content-md-center mt-5">
        <div class="col-md-4 col-lg-10 ">
            <form action="/search" class="input-group container" method="get">
                <input type="text" class="form-control" name="search" placeholder="Search for a food or restaurant">
                <button class="btn btn-outline-danger">Search</button>
            </form>
        </div>
    </div>

    <div class="d-flex gap-5 mt-5 justify-content-center flex-wrap">
        @for ($i = 0; $i < 10; $i++)
        <div class="card" class="my-3" style="width: 18rem;">
            <img src="delivery-bike.png" class="card-img-top" alt="imageUrl">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        @endfor
       
    </div>
   
@endsection