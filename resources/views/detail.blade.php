@extends('master')
@section("content")

<div class="container">
<div class="row">
  <div class="col-sm-5">

  <img class="detail-img" src="{{$product['gallery']}}">
  </div>

  <div class="col-sm-6">
    <a href="/" >Go Back</a>
    <h2>{{$product['name']}}</h2>
    <h2 name="pp2">Price : {{$product['price']}}</h2>
    <h2>Details :  {{$product['description']}}</h2>
    <h2>Cetegory : {{$product['Cetegory']}}</h2>
    <br><br>
    <form action="/add_to_cart" method="POST">
    @csrf
        <input type="hidden" name="product_id" value={{$product['id']}}>
        <button class="btn btn-primary">Add to Cart</button>
        </form>
    <br><br>
    
    <a href="/" class="btn btn-success" >Buy Now</a>
    <br><br>
    
  </div>
</div>
</div>

@endsection