@extends('master')
@section("content")

<div class="mycart">
<h4>Result for Products</h4>
<a href="ordernow">Borrow Now</a><br><br>
@foreach($products as $item)
<div>
<a href="detail/{{$item->id}}">
<img src="{{$item->Gallery}}">
<div>
<h2>{{$item->Title}}</h2>
<h5>{{$item->Description}}</h5>
<h5>{{$item->cart_id}}<h5>
</div>
</a>
</div>
<div>
    <a href="/removecart/{{$item->cart_id}}">Remove to cart</a>
</div>
@endforeach
</div>
</div>


@endsection()