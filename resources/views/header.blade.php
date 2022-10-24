
<?php
use App\Http\Controllers\ProductController;
$total=0;

if(Session::has('user'))
{
    $total=ProductController::cartItem();
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<ul>

<li><a href="/">My Library</a></li>
<li><a href="/myorders">Borrowed Books</a></li>
<li><a href="/cartlist">Cart ({{$total}})</a></li>

@if(Session::has('user'))
<li>
    <a>{{Session::get('user')['name']}}
    <span></span></a>
<ul>
<li><a href="/logout">Logout</a></li>

</ul>
</li>
@else
<li><a href="/login">Login</a></li>
@endif

</ul>

<form action ="/search">

<input type="text" name="query" placeholder="search" class="mysearch">
<button type="submit">Search</button>
</form>


</body>
</html>