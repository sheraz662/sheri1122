@extends('master')
@section('content')

<div class="custom-product">

		

   
<a href="/" class="btn btn-primary"> continue shoping  </a>
<a href="/ordernow" class="btn btn-primary"> order now  </a>
  
    <div class="carousel-wrapper">
      <h1>Trending Product</h1>
   @foreach($sheri as $item)

   <div class="trending-left">
   <a href="detail/{{$item->id}}">
      <img class="sllider-img" src="{{$item->gallery}}">

<div class="trending-item">
  <h3>{{$item->name}}</h3>
  <p>{{$item->description}}</p>
  <p>{{$item->price}}</p>
  <tr><a href="removecart/{{$item->cart_id}}" class="btn btn-primary">remove from cart</a></tr>
</a>
</div>
</div>
@endforeach

</div>
</div>


	
	</div>
	@endsection