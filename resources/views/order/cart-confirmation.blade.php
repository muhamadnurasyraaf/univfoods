@extends('layout.main')

@section('container')

<div class="container">
    @if(session('addtocart'))
        <div class="alert alert-success dismissible">
        {{ session('addtocartsuccess') }}
        </div>
    @endif
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <div class="product">
          <div class="row">
            <div class="col-md-12">
              <img src="{{ asset('storage/' . $product->image) }}" alt="Product Image" class="product-image">
            </div>
          </div>
          <div class="row">
            <form action="/addtocart" method="POST" class="col-md-12">
                @csrf
              <h2>{{ $product->name }}</h2>
              <p>{{ $product->description }}</p>
              <p>{{ $product->price }}</p>
              <input type="hidden" name="product_id" value="{{ $product->id }}">
                <div class="quantityselect">
                    <button type="button" id="increase" class="btn btn-secondary"> + </button>
                    <input id="quantity" name="quantity" type="number" value="1" class="form-control" readonly>
                    <button type="button" id="decrease" class="btn btn-secondary"> - </button>
                </div>
              <button type="submit" class="btn btn-primary">Add to Cart</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
<script>
    let incBtn = document.getElementById('increase')
    let decBtn = document.getElementById('decrease')
    let qty = document.getElementById('quantity')

    incBtn.addEventListener('click', function (){
        let currentValue = parseInt(qty.value);
        qty.value = currentValue + 1
    })

    decBtn.addEventListener('click',function (){
        let currentValue = parseInt(qty.value)
        if(currentValue >= 1){
            qty.value = currentValue - 1
        }
    })


</script>
  <style>
    .product {
      margin-top: 50px;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 8px;
      background-color: #f9f9f9;
    }
    .product-image {
      max-width: 100%;
      height: auto;
    }
  </style>



@endsection
