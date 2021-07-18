@extends('master')
@section('content')

<div class="custom-product">

		

   
<a href="/" class="btn btn-primary"> continue shoping  </a>
<!-- <a href="/ordernow" class="btn btn-primary"> order now  </a> -->
  
    <div class="carousel-wrapper">
      <h1>my order detail</h1>
   @foreach($myorder as $item)

   <div class="trending-left">
   <a href="detail/{{$item->id}}">
      <img class="sllider-img" src="{{$item->gallery}}">

<div class="trending-item">
  <h3>{{$item->name}}</h3>
  <p>{{$item->status}}</p>
  <p>{{$item->price}}</p>
  <p>{{$item->Payment_method}}</p>
  <p>{{$item->Payment_status}}</p>
  <p>{{$item->address}}</p>
  
 </a>
</div>
</div>
@endforeach

</div>
</div>


	
	</div>
	@endsection