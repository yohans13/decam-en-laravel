@extends('master')
@section("content")


<div class="custom-product">

  <div class="col-sm-4">
    <a href="#">Filter</a>
  </div> 

  <div class="col-sm-4">

  <div class="tranding-wrapper">
     <div>
     <h2>Search resalt</h2>
      @foreach($products as $item)
        <div class="search-item">
          <a href="detail/{{$item['id']}}">
            <img  class="trending-img" src="{{$item['gallery']}}" >
              <div class="">
                <h2>{{$item['name']}}</h2>
                <p>{{$item['description']}}</p>
              </div>
              </a>
          </div>
        @endforeach
      </div>
     
  </div>

</div>
    


@endsection