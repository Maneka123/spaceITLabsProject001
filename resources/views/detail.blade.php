@extends('master');
@section('content')

<div class="container">
<div>
<div>

<img class="myImageTwo" src="{{$products['Gallery']}}">

</div>

<div >
    <a href="/">Go back</a>
    <h2>{{$products['Title']}}</h2>
    <h3>Price : {{$products['Price']}}</h3>
    <h4>Description : {{$products['Description']}}</h4>
    <h4>Genre : {{$products['Genre']}}</h4>
   
    <form action="/add_to_cart" method="POST">
        @csrf
        <input type="hidden" name="product_id" value="{{$products['id']}}">
    <button>Add to cart</button>
    </form>
    <br><br>
    <button>Borrow now</button>
    <br><br>
    <br></br>
</div>


</div>
</div>


@endsection