@extends('master')
@section('content')

<div class="custom-product">

		

   

  
    <div class="carousel-wrapper">
      <h1>Trending Product</h1>
   @foreach($Products as $item)

   <div class="trending-left">
   <a href="detail/{{$item['id']}}">
      <img class="sllider-img" src="{{$item['gallery']}}">

<div class="trending-item">
  <h3>{{$item['name']}}</h3>
  <p>{{$item['description']}}</p>
  <p>{{$item['price']}}</p>
</a>
</div>
</div>
@endforeach
</div>
</div>


	
	</div>
	@endsection