@extends('master');
@section('content')

<div class="custom-login">
<form action="/login" method="POST">
@csrf
<label>Email Address</label>
<input type="email" name="email" placeholder="email">
<br>
<label>Password</label>
<input type="password" name="password" placeholder="email">
<br>
<button type="submit">Login</button>
</form>
</div>



@endsection