<!DOCTYPE html>
<html lang=en>

<head>
    <meta charset=UTF-8>
    <!-- <meta name=viewport content=width=device-width, initial-scale=1.0> -->
    <meta http-equiv=X-UA-Compatible content=ie=edge>
    <title>Chocolate</title>
    <link rel="stylesheet" href="./static/external/bootstrap/dist/css/bootstrap.css">
    <script src="./static/external/jquery/dist/jquery.js" charset="utf-8"></script>
    <link rel="stylesheet" href="./static/external/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="./static/external/slick-carousel/slick/slick-theme.css">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <link rel=stylesheet href=./static/css/master.css>
    <link rel="stylesheet" href="./static/external/font-awesome/css/font-awesome.min.css">
</head>

<body>
    <div class="container">
        <header>
            <div class="row">
                <div class="col-md-2 col-md-push-5">
                    <h1>Chocolate</h1>
                </div>
            </div>
            <nav class="navbar">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1, #navbar-collapse-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Chocolate</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="./index.html">Home</a></li>
                        <li><a href="#">Nos Boutiques</a></li>
                        <li><a href="#">Offres</a></li>
                        <li><a href="#">Contact</a></li>
                        <li>
                            <a class=" collapsed" data-toggle="collapse" href="#nav-collapse1" aria-expanded="false" aria-controls="nav-collapse1">Catalogue</a>
                        </li>
                    </ul>
                    <ul class="collapse nav navbar-nav nav-collapse" id="nav-collapse1">
                        <li><a href="./catalogue.php">Chocolats noirs</a></li>
                        <li><a href="#">Chocolats au lait</a></li>
                        <li><a href="#">Chocolats blancs</a></li>
                        <li><a href="#">Nougats</a></li>
                        <li><a href="#">Coffrets</a></li>
                        <li><a href="#">Chocolats de Pâques</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <span class="glyphicon glyphicon-user"></span>
                                <strong>Whatever</strong>
                                <span class="glyphicon glyphicon-chevron-down"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="navbar-login">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <p class="text-center">
                                                    <span class="glyphicon glyphicon-user icon-size"></span>
                                                </p>
                                            </div>
                                            <div class="col-lg-8">
                                                <p class="text-left"><strong>whatever</strong></p>
                                                <p class="text-left small">justdemo@gmail.com</p>
                                                <p class="text-left">
                                                    <a href="#" class="btn btn-primary btn-block btn-sm">Logout</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <div class="navbar-login navbar-login-session">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <p>
                                                    <a href="#" class="btn btn-primary btn-block">My Profile</a>
                                                    <a href="#" class="btn btn-danger btn-block">Change Password</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </nav>
            <!-- /.navbar -->
            <div class="row">
                <div class="col-md-8" id="seach">
                    <div class="input-group">
                        <div class="input-group-btn search-panel">
                            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                                <span id="search_concept">Categories</span> <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#Chocolats">Chocolats</a></li>
                                <li><a href="#Toffees">Toffees</a></li>
                                <li><a href="#Nougats">Nougats</a></li>
                                <li><a href="#Cadeaux">Cadeaux</a></li>
                                <li class="divider"></li>
                                <li><a href="#all">Toutes</a></li>
                            </ul>

                        </div>
                        <input type="hidden" name="search_param" value="all" id="search_param">
                        <input type="text" class="form-control" name="x" placeholder="Search term...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
                        </span>
                    </div>
                </div>
                <a href="cart.php" class="btn btn-lg">
                    <span class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart
                </a>
            </div>
        </header>
