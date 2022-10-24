@extends('master');
@section('content')

<div class="custom-product">
<h3>Trending Books</h3>
@foreach($products as $item)
<div class="trendingItem">
<a href="detail/{{$item['id']}}">
<img class="myimage" src="{{$item['Gallery']}}">

<h3>{{$item['Title']}}</h3>
<div>
</a>
</div>
</div>
@endforeach
</div>

</div>


@endsection