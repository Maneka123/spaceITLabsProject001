@extends('master');
@section('content')

<div class="custom-product">
<h3>Searched Books</h3>
@foreach($products as $item)
<div class="searcheditem">
<a href="detail/{{$item['id']}}">
<img class="myimage" src="{{$item['Gallery']}}">

<h2>{{$item['Title']}}</h2>
<h5>{{$item['Description']}}</h5>

<div>
</a>
</div>
</div>
@endforeach
</div>

</div>


@endsection