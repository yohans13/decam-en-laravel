@extends('master')
@section("content")


<div class="custom-product">
  <div class="col-sm-10">

  <div class="tranding-wrapper">
 
     <h2>Cart Items</h2>
     <a class="btn btn-success" href="ordernow">Order Now</a></br</br>
      @foreach($products as $item)
        <div class="row search-item cart-list-divider">

          <div class=col-sm-3>
            <a href="detail/{{$item->id}}">
            <img class="trending-img" src="{{$item->gallery}}">
              
              </a>
          </div>

          <div class=col-sm-4>
              <div class="">
                    <h2>{{$item->name}}</h2>
                    <p>{{$item->description}}</p>
                  </div>
             </div>
            <div class=col-sm-3>
          
                <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">Remove to Cart </a>
              </div>
              </div>
        @endforeach
      </div>
      <a class="btn btn-success" href="ordernow">Order Now</a></br</br>
  </div>

</div>
    


@endsection