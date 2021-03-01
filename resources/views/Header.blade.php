<?php 
use App\Http\Controllers\ProductController;
$total =0;
if(Session::has('user')){
  $total = ProductController::cartItem();

}

?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/">DECAM</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/myorders">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Orders</a>
      </li>
   
     
    <form action="/search" class="form-inline my-2 my-lg-0">
      <input name="query" class="form-control mr-sm-2 search-details" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
  </div>

  <ul class="nav navbar-nav ">
      <li class="nav-item">
        <a class="nav-link" href="/cartList">Cart({{$total}})</a>
       
        @if(Session::has('user'))
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        {{Session::get('user')['name']}}
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="/logout">Log Out</a>
          
        </div>
      </li>
      @else
      <li><a href="/login">Login</a></li>
      <li><a href="/register">Register</a></li>

        @endif
      </li>


      </ul>
   
</nav>



