<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/shop-item.css" rel="stylesheet">
    <style>
        form{
            display: inline;
        }
        form button, button{
            background: transparent;
            padding: 0px;
            border: 0px;
        }
        form button i, button {
            color: #337ab7;
        }
    </style>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Online Shop</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" style="font-size: 15px">
    <div class="container">
        <a class="navbar-brand" href="{{route('index')}}"><h2>EShop</h2></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive" style="color:white;list-style: none">
            <li class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('index')}}">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categories</a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Computers</a></li>
                            <li><a href="{{route('notebook.categorize',1)}}">Notebooks & Laptops</a></li>
                            <li><a href="#">Peripheral Devices & Accesories</a></li>
                        </ul>
                    </li>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Sales</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
        {!! Form::open(['method'=>'GET','route'=>'notebook.search','class'=>'navbar-form navbar-left','role'=>'search'])  !!}
            <div class="form-group">
                <input type="text" id="keyword" name="keyword" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        {!! Form::close() !!}
        <div  class="nav navbar-nav navbar-right">
            @if($user = Auth::user())
                <li class="dropdown">
                    <a href="/home" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{$user->name}}</a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('logout')}}">Logout</a></li>
                        <li><a href="{{route('cabinet')}}">Cabinet</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> <span class="glyphicon glyphicon-shopping-cart"></span> 1 - Item(s)<span class="caret"></span></a>
                    <ul class="dropdown-menu dropdown-cart" id="cart-block" role="menu">
                        @include('eshop.cartItem')
                        <li class="divider"></li>
                        <li><a class="text-center" href="">View Cart</a></li>
                    </ul>
                </li>
            @else
                <li><a href="/login"><span class="glyphicon glyphicon-user"></span>Login</a></li>
            @endif
        </div>
    </div>
</nav>

<div class="container">
@yield('content')
</div>
<footer class="py-5 bg-dark">
    <div id="footer">
        <p class="m-0 text-center text-white"><i class="fa fa-map-pin"></i> Almaty Towers, Zhandosov st, 050000, KAZAKHSTAN</p>
        <p class="m-0 text-center text-white"><i class="fa fa-phone"></i> Phone : +77081515132</p>
        <p class="m-0 text-center text-white"><i class="fa fa-envelope"></i> E-mail : nofantasyno@gmail.com</p>
        <p class="m-0 text-center text-white">© 2018 - All Rights Reserved</p>
    </div>
    <!-- /.container -->
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</body>
</html>
