@extends('master')
@section("content")


<div class="custom-product">
  <div class="col-sm-10">

  <div class="tranding-wrapper">
 
     <h2>My Orders</h2>
     <a class="btn btn-success" href="/">Back</a></br</br>
      @foreach($orders as $item)
        <div class="row search-item cart-list-divider">

          <div class=col-sm-3>
            <a href="detail/{{$item->id}}">
            <img class="trending-img" src="{{$item->gallery}}">
              
              </a>
          </div>

          <div class=col-sm-4>
              <div class="">
                    <h2>Name : {{$item->name}}</h2>
                    <p>Delivaery Status : {{$item->status}}</p>
                    <p> Address : {{$item->address}}</p>  
                    <p>Payment Status : {{$item->payment_status}}</p>
                    <p>Payment Method : {{$item->payment_method}}</p>
                    

                  </div>
             </div>
            
              </div>
        @endforeach
      </div>
     
  </div>

</div>
    


@endsection