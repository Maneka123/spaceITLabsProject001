@extends('master')
@section("content")

<div >
<h4>Result for Products</h4>
<a href="ordernow">Borrow Now</a><br><br>
@foreach($orders as $item)
<div>

<img class="myimage" src="{{$item->Gallery}}" >
<div>
<h2>{{$item->Title}}</h2>
<h5>{{$item->Description}}</h5>
<h5></h5>
</div>
</a>
</div>
<div>
<a href="removemyborrowing/{{$item->order_id}}">Remove to borrowing</a>
  
</div>
@endforeach
</div>
</div>


@endsection()