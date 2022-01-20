<?php
    include('dbconnection.php');
    include('session.php');

    if ($login_session != 'guest') {
?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Flone - Minimal eCommerce HTML Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
    
    <!-- CSS
	============================================ -->
   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="assets/css/icons.min.css">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins.css">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
<header class="header-area header-in-container clearfix">
    <div class="header-top-area">
        <div class="container">
            <div class="header-top-wap">
                <div class="language-currency-wrap">
                    <div class="same-language-currency language-style">
                        <a href="#">English <i class="fa fa-angle-down"></i></a>
                        <div class="lang-car-dropdown">
                            <ul>
                                <li><a href="#">Arabic </a></li>
                                <li><a href="#">Bangla </a></li>
                                <li><a href="#">Hindi  </a></li>
                                <li><a href="#">Spanish </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="same-language-currency use-style">
                        <a href="#">USD  <i class="fa fa-angle-down"></i></a>
                        <div class="lang-car-dropdown">
                            <ul>
                                <li><a href="#">Taka (BDT) </a></li>
                                <li><a href="#">Riyal (SAR) </a></li>
                                <li><a href="#">Rupee (INR)  </a></li>
                                <li><a href="#">Dirham (AED) </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="same-language-currency">
                        <p>Call Us 3965410</p>
                    </div>
                </div>
                <div class="header-offer">
                    <p>Free delivery on order over <span>$200</span></p>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom sticky-bar header-res-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-2 col-lg-2 col-md-6 col-4">
                    <div class="logo">
                        <a href="index.php">
                            <img alt="" src="assets/img/logo/logo.png">
                        </a>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8 d-none d-lg-block">
                    <div class="main-menu">
                        <nav>
                            <ul>
                                <li><a href="index.php">Home <i class="fa fa-angle-down"></i></a>
                                    <ul class="mega-menu mega-menu-padding">
                                        <li>
                                            <ul>
                                                <li class="mega-menu-title"><a href="#">Demo Group 01</a></li>
                                                <li><a href="index.php">Home 1 – Fashion</a></li>
                                                <li><a href="index-2.php">Home 2 – Fashion</a></li>
                                                <li><a href="index-3.php">Home 3 – Fashion</a></li>
                                                <li><a href="index-4.php">Home 4 – Fashion</a></li>
                                                <li><a href="index-5.php">Home 5 – Fashion</a></li>
                                                <li><a href="index-6.php">Home 6 – Fashion</a></li>
                                                <li><a href="index-7.php">Home 7 – Fashion</a></li>
                                                <li><a href="index-8.php">Home 8 – Minimal</a></li>
                                                <li><a href="index-9.php">Home 9 – Electronics</a></li>
                                                <li><a href="index-10.php">Home 10 – Furniture</a></li>
                                                <li><a href="index-11.php">Home 11 - showcase slider</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <ul>
                                                <li class="mega-menu-title"><a href="#">Demo Group 02</a></li>
                                                <li><a href="index-12.php">Home 12 – Plants</a></li>
                                                <li><a href="index-13.php">Home 13 – Cosmetic</a></li>
                                                <li><a href="index-14.php">Home 14 – Christmas</a></li>
                                                <li><a href="index-15.php">Home 15 – Fruit</a></li>
                                                <li><a href="index-16.php">Home 16 –  Black Friday</a></li>
                                                <li><a href="index-17.php">Home 17 – Flower</a></li>
                                                <li><a href="index-18.php">Home 18 – Book</a></li>
                                                <li><a href="index-19.php">Home 19 – Fashion</a></li>
                                                <li><a href="index-20.php">Home 20 – Electronics</a></li>
                                                <li><a href="index-21.php">Home 21 – Furniture</a></li>
                                                <li><a href="index-22.php">Home 22 – Handmade</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <ul>
                                                <li class="mega-menu-title"><a href="#">Demo Group 03</a></li>
                                                <li><a href="index-23.php">Home 23 – Organic</a></li>
                                                <li><a href="index-24.php">Home 24 – Pet Food</a></li>
                                                <li><a href="index-25.php">Home 25 – Auto Parts</a></li>
                                                <li><a href="index-26.php">Home 26 – Cake Shop</a></li>
                                                <li><a href="index-27.php">Home 27 – Kids Fashion</a></li>
                                                <li><a href="index-28.php">Home 28 – Book Shop</a></li>
                                                <li><a href="index-29.php">Home 29 – Flower Shop</a></li>
                                                <li><a href="index-30.php">Home 30 – Instagram</a></li>
                                                <li><a href="index-31.php">Home 31 – Black Friday</a></li>
                                                <li><a href="index-32.php">Home 32 – Valentine Day</a></li>
                                                <li><a href="index-33.php">Home 33 – Medical Equipment</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="shop.php"> Shop <i class="fa fa-angle-down"></i> </a>
                                    <ul class="mega-menu">
                                        <li>
                                            <ul>
                                                <li class="mega-menu-title"><a href="#">shop layout</a></li>
                                                <li><a href="shop.php">standard style</a></li>
                                                <li><a href="shop-filter.php">Grid filter style</a></li>
                                                <li><a href="shop-grid-2-col.php">Grid 2 column</a></li>
                                                <li><a href="shop-no-sidebar.php">Grid No sidebar</a></li>
                                                <li><a href="shop-grid-fw.php">Grid full wide </a></li>
                                                <li><a href="shop-right-sidebar.php">Grid right sidebar</a></li>
                                                <li><a href="shop-list.php">list 1 column box </a></li>
                                                <li><a href="shop-list-fw.php">list 1 column full wide </a></li>
                                                <li><a href="shop-list-fw-2col.php">list 2 column  full wide</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <ul>
                                                <li class="mega-menu-title"><a href="#">product details</a></li>
                                                <li><a href="product-details.php">tab style 1</a></li>
                                                <li><a href="product-details-2.php">tab style 2</a></li>
                                                <li><a href="product-details-3.php">tab style 3</a></li>
                                                <li><a href="product-details-4.php">sticky style</a></li>
                                                <li><a href="product-details-5.php">gallery style </a></li>
                                                <li><a href="product-details-slider-box.php">Slider style</a></li>
                                                <li><a href="product-details-affiliate.php">affiliate style</a></li>
                                                <li><a href="product-details-6.php">fixed image style </a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <ul>
                                                <li class="mega-menu-img"><a href="shop.php"><img src="assets/img/banner/banner-12.png" alt=""></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="shop.php">Collection</a></li>
                                <li><a href="#"> Pages <i class="fa fa-angle-down"></i></a>
                                    <ul class="submenu">
                                        <li><a href="about.php">about us</a></li>
                                        <li><a href="cart-page.php">cart page</a></li>
                                        <li><a href="checkout.php">checkout </a></li>
                                        <li><a href="wishlist.php">wishlist </a></li>
                                        <li><a href="my-account.php">my account</a></li>
                                        <li><a href="login-register.php">login / register </a></li>
                                        <li><a href="contact.php">contact us </a></li>
                                        <li><a href="404.php">404 page </a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Blog <i class="fa fa-angle-down"></i></a>
                                    <ul class="submenu">
                                        <li><a href="blog.php">blog standard</a></li>
                                        <li><a href="blog-no-sidebar.php">blog no sidebar</a></li>
                                        <li><a href="blog-right-sidebar.php">blog right sidebar</a></li>
                                        <li><a href="blog-details.php">blog details 1</a></li>
                                        <li><a href="blog-details-2.php">blog details 2</a></li>
                                        <li><a href="blog-details-3.php">blog details 3</a></li>
                                    </ul>
                                </li>
                                <li><a href="about.php"> About </a></li>
                                <li><a href="contact.php"> Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-6 col-8">
                       <div class="header-right-wrap">
                        <div class="same-style header-search">
                            <a class="search-active" href="#"><i class="pe-7s-search"></i></a>
                            <div class="search-content">
                                <form action="#">
                                    <input type="text" placeholder="Search" />
                                    <button class="button-search"><i class="pe-7s-search"></i></button>
                                </form>
                            </div> 
                        </div>
                        <div class="same-style account-satting">
                        <a class="account-satting-active" href="#"><i class="pe-7s-user-female"></i></a>
                        <div class="account-dropdown">
                            <ul>
                                <li><a href="login-register.php">Login</a></li>
                                <li><a href="logout.php">Logout</a></li>
                                <li><a href="login-register.php">Register</a></li>
                                <li><a href="wishlist.php">Wishlist  </a></li>
                                <li><a href="my-account.php">My account <?= $login_session?></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="same-style header-wishlist">
                        <a href="wishlist.php"><i class="pe-7s-like"></i></a>
                    </div>
                    <div class="same-style cart-wrap">
                        <button class="icon-cart">
                            <i class="pe-7s-shopbag"></i>
                            <span class="count-style">!</span>
                        </button>
                        <div class="shopping-cart-content">
                            <ul>
                                <?php 
    //################################################ HERE ######################################################## HERE #################### Here ##### ############################
                                $forcartdata = "SELECT product_id,quantity FROM shopping_cart WHERE user_id = '$login_session_id'";
                                $forcartQue = mysqli_query($conn, $forcartdata);
                                $fcart_Data = $forcartQue->fetch_array(MYSQLI_ASSOC);
                                $procar_id = unserialize($fcart_Data['product_id']);
                                $carproquan = unserialize($fcart_Data['quantity']);
                                if (is_array($procar_id)) {
                                foreach ($procar_id as $key) {
                                    $carproQ = "SELECT * FROM products where product_id = '$key'";
                                    $cPQu = mysqli_query($conn, $carproQ);
                                    $cart_key = $cPQu->fetch_array(MYSQLI_ASSOC);
                                    //print_r($cart_key);
                                    ?>
                                    <li class="single-shopping-cart">
                                        <div class="shopping-cart-img">
                                            <a href="#"><img alt="" src="http://localhost/flone-minimalist-ecommerce-template/flone/image/<?= $cart_key['product_image']?>" width="120px"></a>
                                        </div>
                                        <div class="shopping-cart-title">
                                            <h4><a href="#"><?= $cart_key['product_name']?></a></h4>
                                            <h6>Qty: <?= $carproquan['quantity'][$key]?></h6>
                                            <span><?= $cart_key['product_price']?></span>
                                        </div>
                                        <div class="shopping-cart-delete">
                                            <a href="#"><i class="fa fa-times-circle"></i></a>
                                        </div>
                                    </li>
                                <?php
                                 }
                             }
    //################################################ HERE ######################################################## HERE #################### Here ##### ############################
                                ?>
                            </ul>
                                <div class="shopping-cart-total">
                                    <h4>Shipping : <span>$20.00</span></h4>
                                    <h4>Total : <span class="shop-total">$260.00</span></h4>
                                </div>
                                <div class="shopping-cart-btn btn-hover text-center">
                                    <a class="default-btn" href="cart-page.php">view cart</a>
                                    <a class="default-btn" href="checkout.php">checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-menu-area">
                <div class="mobile-menu">
                    <nav id="mobile-menu-active">
                        <ul class="menu-overflow">
                            <li><a href="index.php">HOME</a>
                                <ul>
                                    <li><a href="#">Demo Group 01</a>
                                        <ul>
                                            <li><a href="index.php">Home 1 – Fashion</a></li>
                                            <li><a href="index-2.php">Home 2 – Fashion</a></li>
                                            <li><a href="index-3.php">Home 3 – Fashion</a></li>
                                            <li><a href="index-4.php">Home 4 – Fashion</a></li>
                                            <li><a href="index-5.php">Home 5 – Fashion</a></li>
                                            <li><a href="index-6.php">Home 6 – Fashion</a></li>
                                            <li><a href="index-7.php">Home 7 – Fashion</a></li>
                                            <li><a href="index-8.php">Home 8 – Minimal</a></li>
                                            <li><a href="index-9.php">Home 9 – Electronics</a></li>
                                            <li><a href="index-10.php">Home 10 – Furniture</a></li>
                                            <li><a href="index-11.php">Home 11 - showcase slider</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Demo Group 02</a>
                                        <ul>
                                            <li><a href="index-12.php">Home 12 – Plants</a></li>
                                            <li><a href="index-13.php">Home 13 – Cosmetic</a></li>
                                            <li><a href="index-14.php">Home 14 – Christmas</a></li>
                                            <li><a href="index-15.php">Home 15 – Fruit</a></li>
                                            <li><a href="index-16.php">Home 16 –  Black Friday</a></li>
                                            <li><a href="index-17.php">Home 17 – Flower</a></li>
                                            <li><a href="index-18.php">Home 18 – Book</a></li>
                                            <li><a href="index-19.php">Home 19 – Fashion</a></li>
                                            <li><a href="index-20.php">Home 20 – Electronics</a></li>
                                            <li><a href="index-21.php">Home 21 – Furniture</a></li>
                                            <li><a href="index-22.php">Home 22 – Handmade</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Demo Group 03</a>
                                        <ul>
                                            <li><a href="index-23.php">Home 23 – Organic</a></li>
                                            <li><a href="index-24.php">Home 24 – Pet Food</a></li>
                                            <li><a href="index-25.php">Home 25 – Auto Parts</a></li>
                                            <li><a href="index-26.php">Home 26 – Cake Shop</a></li>
                                            <li><a href="index-27.php">Home 27 – Kids Fashion</a></li>
                                            <li><a href="index-28.php">Home 28 – Book Shop</a></li>
                                            <li><a href="index-29.php">Home 29 – Flower Shop</a></li>
                                            <li><a href="index-30.php">Home 30 – Instagram</a></li>
                                            <li><a href="index-31.php">Home 31 – Black Friday</a></li>
                                            <li><a href="index-32.php">Home 32 – Valentine Day</a></li>
                                            <li><a href="index-33.php">Home 33 – Medical Equipment</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="shop.php">Shop</a>
                                <ul>
                                    <li><a href="#">shop layout</a>
                                        <ul>
                                            <li><a href="shop.php">standard style</a></li>
                                            <li><a href="shop-filter.php">Grid filter style</a></li>
                                            <li><a href="shop-grid-2-col.php">Grid 2 column</a></li>
                                            <li><a href="shop-no-sidebar.php">Grid No sidebar</a></li>
                                            <li><a href="shop-grid-fw.php">Grid full wide </a></li>
                                            <li><a href="shop-right-sidebar.php">Grid right sidebar</a></li>
                                            <li><a href="shop-list.php">list 1 column box </a></li>
                                            <li><a href="shop-list-fw.php">list 1 column full wide </a></li>
                                            <li><a href="shop-list-fw-2col.php">list 2 column  full wide</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">product details</a>
                                        <ul>
                                            <li><a href="product-details.php">tab style 1</a></li>
                                            <li><a href="product-details-2.php">tab style 2</a></li>
                                            <li><a href="product-details-3.php">tab style 3</a></li>
                                            <li><a href="product-details-4.php">sticky style</a></li>
                                            <li><a href="product-details-5.php">gallery style </a></li>
                                            <li><a href="product-details-slider-box.php">Slider style</a></li>
                                            <li><a href="product-details-affiliate.php">affiliate style</a></li>
                                            <li><a href="product-details-6.php">fixed image style </a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="shop.php">Collection</a></li>
                            <li><a href="#">Pages</a>
                                <ul>
                                    <li><a href="about.php">about us</a></li>
                                    <li><a href="cart-page.php">cart page</a></li>
                                    <li><a href="checkout.php">checkout </a></li>
                                    <li><a href="wishlist.php">wishlist </a></li>
                                    <li><a href="my-account.php">my account</a></li>
                                    <li><a href="login-register.php">login / register </a></li>
                                    <li><a href="contact.php">contact us </a></li>
                                    <li><a href="404.php">404 page </a></li>
                                </ul>
                            </li>
                            <li><a href="blog.php">Blog</a>
                                <ul>
                                    <li><a href="blog.php">blog standard</a></li>
                                    <li><a href="blog-no-sidebar.php">blog no sidebar</a></li>
                                    <li><a href="blog-right-sidebar.php">blog right sidebar</a></li>
                                    <li><a href="blog-details.php">blog details 1</a></li>
                                    <li><a href="blog-details-2.php">blog details 2</a></li>
                                    <li><a href="blog-details-3.php">blog details 3</a></li>
                                </ul>
                            </li>
                            <li><a href="about.php">About us</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="breadcrumb-area pt-35 pb-35 bg-gray-3">
    <div class="container">
        <div class="breadcrumb-content text-center">
            <ul>
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li class="active">Checkout </li>
            </ul>
        </div>
    </div>
</div>
<div class="checkout-area pt-95 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="billing-info-wrap">
                    <h3>Billing Details</h3>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="billing-info mb-20">
                                <label>First Name</label>
                                <input type="text">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="billing-info mb-20">
                                <label>Last Name</label>
                                <input type="text">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="billing-info mb-20">
                                <label>Company Name</label>
                                <input type="text">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="billing-select mb-20">
                                <label>Country</label>
                                <select>
                                    <option>Select a country</option>
                                    <option>Azerbaijan</option>
                                    <option>Bahamas</option>
                                    <option>Bahrain</option>
                                    <option>Bangladesh</option>
                                    <option>Barbados</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="billing-info mb-20">
                                <label>Street Address</label>
                                <input class="billing-address" placeholder="House number and street name" type="text">
                                <input placeholder="Apartment, suite, unit etc." type="text">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="billing-info mb-20">
                                <label>Town / City</label>
                                <input type="text">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="billing-info mb-20">
                                <label>State / County</label>
                                <input type="text">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="billing-info mb-20">
                                <label>Postcode / ZIP</label>
                                <input type="text">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="billing-info mb-20">
                                <label>Phone</label>
                                <input type="text">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="billing-info mb-20">
                                <label>Email Address</label>
                                <input type="text">
                            </div>
                        </div>
                    </div>
                    <div class="checkout-account mb-50">
                        <input class="checkout-toggle2" type="checkbox">
                        <span>Create an account?</span>
                    </div>
                    <div class="checkout-account-toggle open-toggle2 mb-30">
                        <input placeholder="Email address" type="email">
                        <input placeholder="Password" type="password">
                        <button class="btn-hover checkout-btn" type="submit">register</button>
                    </div>
                    <div class="additional-info-wrap">
                        <h4>Additional information</h4>
                        <div class="additional-info">
                            <label>Order notes</label>
                            <textarea placeholder="Notes about your order, e.g. special notes for delivery. " name="message"></textarea>
                        </div>
                    </div>
                    <div class="checkout-account mt-25">
                        <input class="checkout-toggle" type="checkbox">
                        <span>Ship to a different address?</span>
                    </div>
                    <div class="different-address open-toggle mt-30">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-20">
                                    <label>First Name</label>
                                    <input type="text">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-20">
                                    <label>Last Name</label>
                                    <input type="text">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="billing-info mb-20">
                                    <label>Company Name</label>
                                    <input type="text">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="billing-select mb-20">
                                    <label>Country</label>
                                    <select>
                                        <option>Select a country</option>
                                        <option>Azerbaijan</option>
                                        <option>Bahamas</option>
                                        <option>Bahrain</option>
                                        <option>Bangladesh</option>
                                        <option>Barbados</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="billing-info mb-20">
                                    <label>Street Address</label>
                                    <input class="billing-address" placeholder="House number and street name" type="text">
                                    <input placeholder="Apartment, suite, unit etc." type="text">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="billing-info mb-20">
                                    <label>Town / City</label>
                                    <input type="text">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-20">
                                    <label>State / County</label>
                                    <input type="text">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-20">
                                    <label>Postcode / ZIP</label>
                                    <input type="text">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-20">
                                    <label>Phone</label>
                                    <input type="text">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-20">
                                    <label>Email Address</label>
                                    <input type="text">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="your-order-area">
                    <h3>Your order</h3>
                    <div class="your-order-wrap gray-bg-4">
                        <div class="your-order-product-info">
                            <div class="your-order-top">
                                <ul>
                                    <li>Product</li>
                                    <li>Total</li>
                                </ul>
                            </div>
                            <div class="your-order-middle">
                                <ul>
                                    <li><span class="order-middle-left">Product Name  X  1</span> <span class="order-price">$329 </span></li>
                                    <li><span class="order-middle-left">Product Name  X  1</span> <span class="order-price">$329 </span></li>
                                </ul>
                            </div>
                            <div class="your-order-bottom">
                                <ul>
                                    <li class="your-order-shipping">Shipping</li>
                                    <li>Free shipping</li>
                                </ul>
                            </div>
                            <div class="your-order-total">
                                <ul>
                                    <li class="order-total">Total</li>
                                    <li>$329</li>
                                </ul>
                            </div>
                        </div>
                        <div class="payment-method">
                            <div class="payment-accordion element-mrg">
                                <div class="panel-group" id="accordion">
                                    <div class="panel payment-accordion">
                                        <div class="panel-heading" id="method-one">
                                            <h4 class="panel-title">
                                                <a data-bs-toggle="collapse" href="#method1">
                                                    Direct bank transfer
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="method1" class="panel-collapse collapse show" data-bs-parent="#accordion">
                                            <div class="panel-body">
                                                <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel payment-accordion">
                                        <div class="panel-heading" id="method-two">
                                            <h4 class="panel-title">
                                                <a class="collapsed" data-bs-toggle="collapse" href="#method2">
                                                    Check payments
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="method2" class="panel-collapse collapse" data-bs-parent="#accordion">
                                            <div class="panel-body">
                                                <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel payment-accordion">
                                        <div class="panel-heading" id="method-three">
                                            <h4 class="panel-title">
                                                <a class="collapsed" data-bs-toggle="collapse" href="#method3">
                                                    Cash on delivery
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="method3" class="panel-collapse collapse" data-bs-parent="#accordion">
                                            <div class="panel-body">
                                                <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="Place-order mt-25">
                        <a class="btn-hover" href="#">Place Order</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="footer-area bg-gray pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-4 col-sm-4">
                <div class="copyright mb-30">
                    <div class="footer-logo">
                        <a href="index.php">
                            <img alt="" src="assets/img/logo/logo.png">
                        </a>
                    </div>
                    <p>© 2021 <a href="#">Flone</a>.<br> All Rights Reserved</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4">
                <div class="footer-widget mb-30 ml-30">
                    <div class="footer-title">
                        <h3>ABOUT US</h3>
                    </div>
                    <div class="footer-list">
                        <ul>
                            <li><a href="about.php">About us</a></li>
                            <li><a href="#">Store location</a></li>
                            <li><a href="contact.php">Contact</a></li>
                            <li><a href="#">Orders tracking</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4">
                <div class="footer-widget mb-30 ml-50">
                    <div class="footer-title">
                        <h3>USEFUL LINKS</h3>
                    </div>
                    <div class="footer-list">
                        <ul>
                            <li><a href="#">Returns</a></li>
                            <li><a href="#">Support Policy</a></li>
                            <li><a href="#">Size guide</a></li>
                            <li><a href="#">FAQs</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="footer-widget mb-30 ml-75">
                    <div class="footer-title">
                        <h3>FOLLOW US</h3>
                    </div>
                    <div class="footer-list">
                        <ul>
                            <li><a href="#">Facebook</a></li>
                            <li><a href="#">Twitter</a></li>
                            <li><a href="#">Instagram</a></li>
                            <li><a href="#">Youtube</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="footer-widget mb-30 ml-70">
                    <div class="footer-title">
                        <h3>SUBSCRIBE</h3>
                    </div>
                    <div class="subscribe-style">
                        <p>Get E-mail updates about our latest shop and special offers.</p>
                        <div id="mc_embed_signup" class="subscribe-form">
                            <form id="mc-embedded-subscribe-form" class="validate" novalidate="" target="_blank" name="mc-embedded-subscribe-form" method="post" action="https://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef">
                                <div id="mc_embed_signup_scroll" class="mc-form">
                                    <input class="email" type="email" required="" placeholder="Enter your email here.." name="EMAIL" value="">
                                    <div class="mc-news" aria-hidden="true">
                                        <input type="text" value="" tabindex="-1" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef">
                                    </div>
                                    <div class="clear">
                                        <input id="mc-embedded-subscribe" class="button" type="submit" name="subscribe" value="Subscribe">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>









<!-- All JS is here
============================================ -->

<script src="assets/js/vendor/modernizr-3.11.7.min.js"></script>
<script src="assets/js/vendor/jquery-v3.6.0.min.js"></script>
<script src="assets/js/vendor/jquery-migrate-v3.3.2.min.js"></script>
<script src="assets/js/vendor/popper.min.js"></script>
<script src="assets/js/vendor/bootstrap.min.js"></script>
<script src="assets/js/plugins.js"></script>
<!-- Ajax Mail -->
<script src="assets/js/ajax-mail.js"></script>
<!-- Main JS -->
<script src="assets/js/main.js"></script>

</body>

</html>
<?php 
    
    }
    else{
        header('location: login-register.php');
    }

?>