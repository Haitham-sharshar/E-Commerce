
<?php ob_start();?>
<?php include "db.php";?>
<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>eCommerce HTML-5 Template </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

		<!-- CSS here -->
            <link rel="stylesheet" href="assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="assets/css/flaticon.css">
            <link rel="stylesheet" href="assets/css/slicknav.css">
            <link rel="stylesheet" href="assets/css/animate.min.css">
            <link rel="stylesheet" href="assets/css/magnific-popup.css">
            <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="assets/css/themify-icons.css">
            <link rel="stylesheet" href="assets/css/slick.css">
            <link rel="stylesheet" href="assets/css/nice-select.css">
            <link rel="stylesheet" href="assets/css/style.css">
   
            <script src="./assets/js/ajax.js"></script>

   </head>
   <body>
       
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/logo.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->

    <header>
        <!-- Header Start -->
       <div class="header-area">
            <div class="main-header ">
                <div class="header-top top-bg d-none d-lg-block">
                   <div class="container-fluid">
                       <div class="col-xl-12">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="header-info-left d-flex">
                                    <div class="flag">
                                        <img src="assets/img/icon/header_icon.png" alt="">
                                    </div>
                                    <div class="select-this">
                                        <form action="#">
                                            <div class="select-itms">
                                                <select name="select" id="select1">
                                                    <option value="">USA</option>
                                                    <option value="">SPN</option>
                                                    <option value="">CDA</option>
                                                    <option value="">USD</option>
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                    <ul class="contact-now">     
                                        <li>+777 2345 7886</li>
                                    </ul>
                                </div>
                                <div class="header-info-right">
                                   <ul>                                          
                                       <li><a href="#">                                    
                                                        </a></li>
                                       <li><a href="product_list.php">Wish List  </a></li>
                                       <li><a href="cart.php">Shopping</a></li>
                                       <li><a href="cart.php">Cart</a></li>
                                       <li><a href="checkout.php">Checkout</a></li>
                                   </ul>
                                </div>
                            </div>
                       </div>
                   </div>
                </div>
               <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2 col-md-1 col-sm-2">
                                <div class="logo">
                                  <a href="index.php"><img src="assets/img/logo/logo.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav>                                                
                                        <ul id="navigation">                                                                                                                                     
                                            <li><a href="index.php">Home</a></li>
                                            <li><a href="#category1">Catagori</a></li>
                                            <li class="hot"><a href="#">Latest</a>
                                                <ul class="submenu">
                                                    <li><a href="#nav-tabContent"> Product list</a></li>
                                                    <li><a href="single-product.php"> Product Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="blog.php">Blog</a>
                                                <ul class="submenu">
                                                    <li><a href="blog.php">Blog</a></li>
                                                    <li><a href="single-blog.php">Blog Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Pages</a>
                                                <ul class="submenu">
                                                    <li><a href="login.php">Login</a></li>
                                                    <li><a href="login.php">Sign up</a></li>
                                                    <li><a href="cart.php">Card</a></li>
                                                    <li><a href="elements.php">Element</a></li>
                                                    <li><a href="about.php">About</a></li>
                                                    <li><a href="confirmation.php">Confirmation</a></li>
                                                    <li><a href="cart.php">Shopping Cart</a></li>
                                                    <li><a href="checkout.php">Product Checkout</a></li>
                                                    <li><a href="contact.php">Contact</a></li>
                                                </ul>
                                            </li>
                                           
                                        </ul>
                                    </nav>
                                </div>
                            </div> 
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 fix-card">
                                <ul class="header-right f-right d-none d-lg-block d-flex justify-content-between">
                                    <li class="d-none d-xl-block">  
                                        <form id="form1">     
                                        <div class="form-box f-right" >                           
                                            <input type="text" name="Search" placeholder="Search products" id="search">
                                            <div class="search-icon">
                                            <a href="#nav-tabContent">
                                                <i class="fas fa-search special-tag" id="sss"></i>
                                            </a> 
                                            </div>
                                        </div>
                                     </form>
                                     </li>
                                    <li>
                                        <div class="shopping-card">
                                            <a href="cart.php"><i class="fas fa-shopping-cart"></i></a>
                                        </div>
                                    </li>
                              <?php 
                                session_start();
                              if(!empty($_SESSION['username'])){
			
                           
                           echo    " <li> <h5  style='text-align: center; color: white background:black ; text-shadow:1px 1px black'; > Welcome" .' ' . $_SESSION['username']."</h5></li><li class='d-none d-lg-block'> <a href='logout.php' class='btn header-btn'>logout</a></li> ";
                                }  else{
                                  echo"  <li class='d-none d-lg-block'> <a href='login.php' class='btn header-btn'>Sign in</a></li>  <li class='d-none d-lg-block'> <a href='signup.php' class='btn header-btn'>Sign up</a></li>";

                           }
                           ?>
                                </ul>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none" style="text-decoration: s" ></div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
       </div>
        <!-- Header End -->
        <?php ob_end_flush();?>
    </header>
