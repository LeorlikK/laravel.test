<!DOCTYPE html>
<html lang="en">
<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>sungla</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->
<body class="test main-layout position_head">
<!-- loader  -->
<div class="loader_bg">
    <div class="loader"><img src="images/loading.gif" alt="#" /></div>
</div>
<!-- end loader -->
<!-- header -->
<header>
    <!-- header inner -->
    <div class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                    <div class="full">
                        <div class="center-desk">
                            <div class="logo">
                                <a href="index.html"><img src="images/logo.png" alt="#" /></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                    <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item ">
                                    <a class="nav-link" href="index.html">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about.html">About</a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="glasses.html">Our Glasses</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="shop.html">Shop</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.html">Contact Us</a>
                                </li>
                                <li class="nav-item d_none login_btn">
                                    <a class="nav-link" href="#">Login</a>
                                </li>
                                <li class="nav-item d_none">
                                    <a class="nav-link" href="#">Register</a>
                                </li>
                                <li class="nav-item d_none sea_icon">
                                    <a class="nav-link" href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i><i class="fa fa-search" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- end header inner -->
<!-- end header -->
<!-- Our  Glasses section -->
<div class="glasses">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="titlepage">
                    <h2>Our Glasses</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labor
                        e et dolore magna aliqua. Ut enim ad minim veniam, qui
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <a href="{{ route('glasses_create_get') }}"><h3>Create</h3></a>

        <form action="" method="get">
            @if(@isset($filter['name']))
                <input name="name" placeholder="Find" value="{{ $filter['name'] }}">
            @else
                <input name="name" placeholder="Find">
            @endif

            <a href="{{ route('get_all_my') }}"><button type="submit">Find</button></a>

            <div>
                <label for="selector_sorted">Order by...</label>
                <select multiple name=sorted_select[] id="selector_sorted">
                    <option value="...">...</option>
                    <option value="name">Alphabet</option>
                    <option value="Price_min">Price_min</option>
                    <option value="Price_max">Price_max</option>
                </select>

                <label for="selector_brand">Brand</label>
                <select name="brand_select" id="selector_brand">
                    <option value="...">...</option>
                    @foreach($brands as $brand)
                        <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                    @endforeach
                </select>

                <label for="selector_category">Categories</label>
                <select name=category_select id="selector_category">
                    <option value="...">...</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
        </form>

        <div class="row">
            @if(is_array($data) || is_object($data)))
                @foreach($data as $item)
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <div class="glasses_box">
                            <figure><img src="images/glass1.png" alt="#"/></figure>
                            <h3><span class="blu">$</span>{{$item->price}}</h3>
                            <p>Model: {{$item->name}}</p>
                            <p>Category: {{$item->brand->name}}</p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <a class="read_more" href="{{ route('glasses_read', [$item->id, 0]) }}">Read More</a>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</div>
<!-- end Our  Glasses section -->
<!--  footer -->
<footer>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <ul class="location_icon">
                        <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i></a><br> Location</li>
                        <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i></a><br> +01 1234567890</li>
                        <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a><br> demo@gmail.com</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p>© 2019 All Rights Reserved. Design by<a href="https://html.design/"> Free Html Templates</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- end footer -->
<!-- Javascript files-->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery-3.0.0.min.js"></script>
<!-- sidebar -->
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>