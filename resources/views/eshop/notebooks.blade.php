<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link href="https://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Online Shop</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid" >
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">EShop</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Main<span class="sr-only">(current)</span></a></li>
                <li><a href="#">Sales</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categories <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Computers</a></li>
                        <li><a href="#">Notebooks & Laptops</a></li>
                        <li><a href="#">Peripheral Devices & Accesories</a></li>
                    </ul>
                </li>
            </ul>
            <form class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li><button type="button" class="btn btn-default btn-sm" style="margin-top: 10px;"><span class="glyphicon glyphicon-user"></span> Login</button></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> <span class="glyphicon glyphicon-shopping-cart"></span> 1 - Item(s)<span class="caret"></span></a>
                    <ul class="dropdown-menu dropdown-cart" role="menu">
                        <li>
							  <span class="item">
								<span class="item-left" >
									<img src="https://i1.rozetka.ua/goods/2040778/copy_asus_rog_strix_gl702vs_gb106t_593967b956e7a_images_2040778344.jpg" style= "width: 30px; height:25px;"alt="" />
									<span class="item-info">
										<span>Acer Nitro</span>
										<span>1700$</span>
									</span>
								</span>
								<span class="item-right">
									<button class="btn btn-xs btn-danger pull-right">x</button>
								</span>
							</span>
                        </li>
                        <li class="divider"></li>
                        <li><a class="text-center" href="">View Cart</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container" style="height: 180px;">
    <div id="myCarousel" class="carousel slide" style="height: 180px;" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="img/34ef4b.jpg" style="margin:auto;" alt="Los Angeles">
            </div>

            <div class="item">
                <img src="img/banner1.png" style="margin:auto;" alt="Chicago">
            </div>

            <div class="item">
                <img src="img/Holiday-Sale-Banner-Background.png" style="margin:auto;" alt="New York">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

</div>

<div class="col-md-12">
    <div class="container">
        <div class="well well-sm">
            <strong>All</strong>
            <div class="btn-group">
                <a href="#" id="list" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-th-list">
							</span>List</a> <a href="#" id="grid" class="btn btn-default btn-sm"><span
                            class="glyphicon glyphicon-th"></span>Grid</a>
            </div>
        </div>

        <div id="products" class="row list-group">
            @foreach($notebooks as $notebook)
                <div class="item  col-xs-4 col-lg-4">
                    <div class="thumbnail">
                        <img class="group list-group-image" src="{{$notebook->img}}" alt="" />
                        <div class="caption">
                            <a href="{{action('Notebooks_controller@show', $notebook->id)}}"><h4 class="group inner list-group-item-heading">
                                    {{$notebook->brand}} {{$notebook->model}}</h4></a>
                            <p class="group inner list-group-item-text">
                                Product description</p>
                            <div class="row">
                                <div class="col-xs-12 col-md-6">
                                    <p class="lead">
                                        {{$notebook->price}}</p>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <a class="btn btn-success" href="#">Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

            <div class="item  col-xs-4 col-lg-4">
                <div class="thumbnail">
                    <img class="group list-group-image" src="img/razer-hammerhead-pro-v2-18671818864014.jpg"  alt="" />
                    <div class="caption">
                        <a href="prod2.html"><h4 class="group inner list-group-item-heading">
                                Razer Hammerhead Pro V2</h4></a>
                        <p class="group inner list-group-item-text">
                            Product description</p>
                        <div class="row">
                            <div class="col-xs-12 col-md-6">
                                <p class="lead">
                                    $100.00</p>
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <a class="btn btn-success" href="#">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <div class="col-md-12">
            <div class="row" >
                <div class="col-md-12 col-sm-6 footerleft " style="background-color: #fefbd8">
                    <p><i class="fa fa-map-pin"></i> Almaty Towers, Zhandosov st, 050000, KAZAKHSTAN</p>
                    <p><i class="fa fa-phone"></i> Phone : +77081515132</p>
                    <p><i class="fa fa-envelope"></i> E-mail : nofantasyno@gmail.com</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--footer start from here-->

<div class="copyright">
    <div class="container">
        <div class="col-md-12" style="background-color: #fefbd8;">
            <p>© 2018 - All Rights Reserved</p>
        </div>
    </div>
</div>



<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
