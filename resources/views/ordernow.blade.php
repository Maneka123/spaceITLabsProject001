@extends('master')
@section("content")

<div class="mycart">
<div>


<table>

</table>
<tr>You have borrowed books of <td>${{$total}}</td> rupees<tr>

</div>
<br><br><br>
</div>
</div>
<br><br><br>
<form action="/orderplace"  method="post">
    @csrf
<button>Order now</button>
</form>
@endsection()