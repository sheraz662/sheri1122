@extends('master')
@section('content')

<div class="container">
  <div class="row">
    <div class="col-sm-6">

      <img class="img-height" src="{{$products['gallery']}}">
    </div>

    <div class="col-sm-6">

<a href="/"> go back </a>

<h2>Name:  {{$products['name']}}</h2>
<h3>price:  {{$products['price']}}</h3>
<h4>category: {{$products['category']}}</h4>
<h4>category: {{$products['description']}}</h4>
<br><br>

<form action="/add-to-cart" method="post">
 
  <input type="hidden" name="product_id" value="{{$products['id']}}">
   @csrf
<button class="btn btn-primary">add to cart</button>
</form>
<button class="btn btn-danger">BUY NOW</button>


    </div>

  </div>
  


</div>


		



	@endsection