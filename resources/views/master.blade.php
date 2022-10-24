<!DOCTYPE html>
<html lang="en">
<head>
<title>Library Project</title>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    
    <title>Library Project</title>
</head>
<body>
{{View::make('header')}}
@yield('content')
{{View::make('footer')}}


<style>

    .custom-login{
        height:500px;
        padding-top:100px;
    }
    
    .myimage{
        border-radius:100px;
        height:150px;
    }

    /* products or books page*/
    .trendingItem{
        float:left;
        width:20%;
    }


    .custom-product{
        margin:30px;
    }

    /*detail page* */
    .myImageTwo{
        height:300px;
    }


    /*header page */
    .mysearch{
        width:500px; !important
    }

    .mycart{
        float:left;
    }
</style>


</body>
</html>