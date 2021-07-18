@extends('master')
@section('content')

<table class="table">
<tbody>
    <tr>
      <td>price</td>
     <td>{{$sheri}}</td>
      
    </tr>
  
    <tr>
      
      <td>TAX</td>
      <td>110</td>
    
    </tr>
    <tr>
    <td>delivery cahrgers</td>
      <td>200</td>
      
   
    </tr>
    <tr>
      
      <td>total amout</td>
      <td>{{$sheri+200+110}}</td>
    
    </tr>
  </tbody>
</table>
<br>
<br>
<form action="orderplace" method="post">
	@csrf

<div class="form-group">
   
    <textarea class="form-control" id="exampleFormControlTextarea1" name="address" rows="3" placeholder="ENTER YOUR ADDRESS"></textarea>


  </div>
  <div class="form-group">
   
   <P> <input type="radio" value="cash" name="payment" ><span>cash on delivery</span></P>
   <P> <input type="radio" value="cash" name="payment" ><span>online payment</span></P>
   <P> <input type="radio" value="cash" name="payment" ><span>Q Wallet</span></P>
   


  </div>
<div>
	<button class="btn btn-primary" type="submit">order nows</button>
</div>

  </form>
@endsection