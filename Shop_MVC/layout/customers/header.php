<?php 
    $tam = '';
    $_SESSION['cart_quantity'] = 0;
    if (isset($_SESSION['cart'])){
        foreach ($_SESSION['cart'] as $id => $value) {
            # code...
            if ($tam != $id){
                $_SESSION['cart_quantity']++;
                $tam = $id;
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="create ecommerce website template for your online store, responsive mobile templates">
    <meta name="keywords" content="ecommerce website templates, online store,">
    <title> Mobistore Online Mobile Store Template </title>
    <!-- Bootstrap -->
    <link href="webroot/index/css/bootstrap.min.css" rel="stylesheet">
    <!-- Style CSS -->
    <link href="webroot/index/css/style.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
    <!-- owl-carousel -->
    <link href="webroot/index/css/owl.carousel.css" rel="stylesheet">
    <link href="webroot/index/css/owl.theme.default.css" rel="stylesheet">
    <!-- FontAwesome CSS -->
    <link href="webroot/index/css/font-awesome.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <!-- top-header-->
    <div class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-7 col-sm-6 hidden-xs">
                    <p class="top-text">Flexible Delivery, Fast Delivery.</p>
                </div>
                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12">
                    <ul>
                        <li>+180-123-4567</li>
                        <li>info@demo.com</li>
                        <li><a href="#">Help</a></li>
                    </ul>
                </div>
            </div>
            <!-- /.top-header-->
        </div>
    </div>
    <!-- header-section-->
    <div class="header-wrapper">
        <div class="container">
            <div class="row">
                <!-- logo -->
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-8">
                    <div class="logo">
                        <a href="index.php"><img src="webroot/index/images/logo.png" alt=""> </a>
                    </div>
                </div>
                <!-- /.logo -->
                <!-- search -->
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="search-bg">
                        <input type="text" class="form-control" placeholder="Search Here">
                        <button type="Submit"><i class="fa fa-search"></i></button>
                    </div>
                </div>
                <!-- /.search -->
                <!-- account -->
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="account-section">
                        <ul>
                        	<?php if (isset($_SESSION['login'])){
                                if ($_SESSION['login']['role'] == 'customer') {?>
                            	<li><a href="#" class="title hidden-xs">Hi, <?php echo $_SESSION['login']['name'];?></a></li>
                                <li class="hidden-xs">|</li>
                                <li><a href="index.php?controller=user&action=logout" class="title hidden-xs">Logout</a></li>
                            <?php } else
                            { ?>
                            <li><a href="index.php?controller=user&action=login" class="title hidden-xs">Login</a></li>
                            <li class="hidden-xs">|</li>
                            <li><a href="index.php?controller=user&action=register" class="title hidden-xs">Register</a></li>
                        <?php }
                    }else {
                        ?>
                        <li><a href="index.php?controller=user&action=login" class="title hidden-xs">Login</a></li>
                            <li class="hidden-xs">|</li>
                            <li><a href="index.php?controller=user&action=register" class="title hidden-xs">Register</a></li>
                        <?php }?>
                            <li class="hidden-xs">|</li>
                            
                            <li><a href="index.php?controller=product&action=show_cart" class="title"><i class="fa fa-shopping-cart"></i>   <sup class="cart-quantity"><?php if (isset($_SESSION['cart_quantity'])) echo $_SESSION['cart_quantity'];
                            else echo 0?></sup></a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.account -->
                </div>
                <!-- search -->
            </div>
        </div>
        <!-- navigation -->
        <div class="navigation">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <!-- navigations-->
                        <div id="navigation">
                            <ul>
                                <li class="active"><a href="index.php">Home</a></li>
                                <li class="has-sub"><a href="#">Mobiles</a>
                                    <ul>
                                        <li><a href="index.php?controller=product&action=list_product">Mobile List</a></li>
                                        <li><a href="product-single.html">Mobile Single </a></li>
                                    </ul>
                                </li>
                                <li><a href="about.html">About</a>
                                </li>
                                <li class="has-sub"><a href="#">Pages</a>
                                    <ul>
                                        <li><a href="checkout.html">Checkout Form</a></li>
                                        <li><a href="cart.html">Cart</a> </li>
                                        <li><a href="login-form.html">Login</a> </li>
                                        <li><a href="signup-form.html">Signup</a> </li>
                                        <li><a href="404-page.html">404-page</a> </li>
                                        <li><a href="styleguide.html">styleguide</a> </li>
                                    </ul>
                                </li>
                                <li class="has-sub"><a href="#">Blog</a>
                                    <ul>
                                        <li><a href="blog-default.html">Blog Default</a></li>
                                        <li><a href="blog-single.html">Blog Single</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact-us.html">Contact Us</a>
                                </li>
                                <li><a href="template-feature.html">Template Feature</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.navigations-->
                </div>
            </div>
        </div>
    </div>
    <!-- /. header-section-->