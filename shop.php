<?php
    include('dbconnection.php');
    include('session.php');
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
                <li class="active">Shop </li>
            </ul>
        </div>
    </div>
</div>
<div class="shop-area pt-95 pb-100">
    <div class="container">
        <div class="row flex-row-reverse">
            <div class="col-lg-9">
                <div class="shop-top-bar">
                    <div class="select-shoing-wrap">
                        <div class="shop-select">
                            <select>
                                <option value="">Sort by newness</option>
                                <option value="">A to Z</option>
                                <option value=""> Z to A</option>
                                <option value="">In stock</option>
                            </select>
                        </div>
                        <p>Showing 1–12 of 20 result</p>
                    </div>
                    <div class="shop-tab nav">
                        <a class="active" href="#shop-1" data-bs-toggle="tab">
                            <i class="fa fa-table"></i>
                        </a>
                        <a href="#shop-2" data-bs-toggle="tab">
                            <i class="fa fa-list-ul"></i>
                        </a>
                    </div>
                </div>
                <div class="shop-bottom-area mt-35">
                    <div class="tab-content jump">
                        <div id="shop-1" class="tab-pane active">
                            <div class="row">
                                <?php foreach($data as $products1){ ?>
                                <div class="col-xl-4 col-md-6 col-lg-6 col-sm-6">
                                    <div class="product-wrap mb-25 scroll-zoom">
                                        <div class="product-img">
                                            <a href="product-details.php">
                                                <img class="default-img" src="http://localhost/flone-minimalist-ecommerce-template/flone/image/<?= $products1['product_image']?>" alt="">
                                                <img class="hover-img" src="http://localhost/flone-minimalist-ecommerce-template/flone/image/<?= $products1['product_image']?>" alt="">
                                            </a>
                                            <span class="pink">-10%</span>
                                            <div class="product-action">
                                                <div class="pro-same-action pro-wishlist">
                                                    <a title="Wishlist" href="#"><i class="pe-7s-like"></i></a>
                                                </div>
                                                <div class="pro-same-action pro-cart">
                                                    <a title="Add To Cart" href="#" onclick="add_To_Cart2(<?= $products1['product_id']?>)"><i class="pe-7s-cart"></i> Add to cart</a>
                                                </div>
                                                <div class="pro-same-action pro-quickview">
                                                    <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-content text-center">
                                            <h3><a href="product-details.php"><?= $products1['product_name']?></a></h3>
                                            <div class="product-rating">
                                                <i class="fa fa-star-o yellow"></i>
                                                <i class="fa fa-star-o yellow"></i>
                                                <i class="fa fa-star-o yellow"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="product-price">
                                                <span><?= $products1['product_price']?></span>
                                                <span class="old">$ 60.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                        <div id="shop-2" class="tab-pane">
                            <div class="shop-list-wrap mb-30">
                                <div class="row">
                                    <?php foreach($data as $products2){ ?>
                                    <div class="col-xl-4 col-lg-5 col-md-5 col-sm-6">
                                        <div class="product-wrap">
                                            <div class="product-img">
                                                <a href="product-details.php">
                                                    <img class="default-img" src="http://localhost/flone-minimalist-ecommerce-template/flone/image/<?= $products2['product_image']?>" alt="">
                                                    <img class="hover-img" src="http://localhost/flone-minimalist-ecommerce-template/flone/image/<?= $products2['product_image']?>" alt="">
                                                </a>
                                                <span class="pink">-10%</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-8 col-lg-7 col-md-7 col-sm-6">
                                        <div class="shop-list-content">
                                            <h3><a href="#"><?= $products2['product_name']?></a></h3>
                                            <div class="product-list-price">
                                                <span><?= $products2['product_price']?></span>
                                                <span class="old">$ 90.00</span>
                                            </div>
                                            <div class="rating-review">
                                                <div class="product-list-rating">
                                                    <i class="fa fa-star-o yellow"></i>
                                                    <i class="fa fa-star-o yellow"></i>
                                                    <i class="fa fa-star-o yellow"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <a href="#">3 Reviews</a>
                                            </div>
                                            <p> ipsum dolor sit amet, consecteto adipisic elit eiusm tempor incidid ut labore et dolore magna aliqua Ut enim ad minim </p>
                                            <div class="shop-list-btn btn-hover">
                                                <a href="#">ADD TO CART</a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pro-pagination-style text-center mt-30">
                        <ul>
                            <li><a class="prev" href="#"><i class="fa fa-angle-double-left"></i></a></li>
                            <li><a class="active" href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a class="next" href="#"><i class="fa fa-angle-double-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="sidebar-style mr-30">
                    <div class="sidebar-widget">
                        <h4 class="pro-sidebar-title">Search </h4>
                        <div class="pro-sidebar-search mb-50 mt-25">
                            <form class="pro-sidebar-search-form" action="#">
                                <input type="text" placeholder="Search here...">
                                <button>
                                    <i class="pe-7s-search"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="sidebar-widget">
                        <h4 class="pro-sidebar-title">Refine By </h4>
                        <div class="sidebar-widget-list mt-30">
                            <ul>
                                <li>
                                    <div class="sidebar-widget-list-left">
                                        <input type="checkbox"> <a href="#">On Sale <span>4</span> </a> 
                                        <span class="checkmark"></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="sidebar-widget-list-left">
                                        <input type="checkbox" value=""> <a href="#">New <span>4</span></a> 
                                        <span class="checkmark"></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="sidebar-widget-list-left">
                                        <input type="checkbox" value=""> <a href="#">In Stock <span>4</span> </a>
                                        <span class="checkmark"></span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-widget mt-45">
                        <h4 class="pro-sidebar-title">Filter By Price </h4>
                        <div class="price-filter mt-10">
                            <div class="price-slider-amount">
                                <input type="text" id="amount" name="price"  placeholder="Add Your Price" />
                            </div>
                            <div id="slider-range"></div>
                        </div>
                    </div>
                    <div class="sidebar-widget mt-50">
                        <h4 class="pro-sidebar-title">Colour </h4>
                        <div class="sidebar-widget-list mt-20">
                            <ul>
                                <li>
                                    <div class="sidebar-widget-list-left">
                                        <input type="checkbox" value=""> <a href="#">Green <span>4</span> </a>
                                        <span class="checkmark"></span> 
                                    </div>
                                </li>
                                <li>
                                    <div class="sidebar-widget-list-left">
                                        <input type="checkbox" value=""> <a href="#">Cream <span>4</span> </a>
                                        <span class="checkmark"></span> 
                                    </div>
                                </li>
                                <li>
                                    <div class="sidebar-widget-list-left">
                                        <input type="checkbox" value=""> <a href="#">Blue <span>4</span> </a>
                                        <span class="checkmark"></span> 
                                    </div>
                                </li>
                                <li>
                                    <div class="sidebar-widget-list-left">
                                        <input type="checkbox" value=""> <a href="#">Black <span>4</span> </a>
                                        <span class="checkmark"></span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-widget mt-40">
                        <h4 class="pro-sidebar-title">Size </h4>
                        <div class="sidebar-widget-list mt-20">
                            <ul>
                                <li>
                                    <div class="sidebar-widget-list-left">
                                        <input type="checkbox" value=""> <a href="#">XL</a>
                                        <span class="checkmark"></span> 
                                    </div>
                                </li>
                                <li>
                                    <div class="sidebar-widget-list-left">
                                        <input type="checkbox" value=""> <a href="#">L</a>
                                        <span class="checkmark"></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="sidebar-widget-list-left">
                                        <input type="checkbox" value=""> <a href="#">SM</a>
                                        <span class="checkmark"></span> 
                                    </div>
                                </li>
                                <li>
                                    <div class="sidebar-widget-list-left">
                                        <input type="checkbox" value=""> <a href="#">XXL</a>
                                        <span class="checkmark"></span> 
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-widget mt-50">
                        <h4 class="pro-sidebar-title">Tag </h4>
                        <div class="sidebar-widget-tag mt-25">
                            <ul>
                                <li><a href="#">Clothing</a></li>
                                <li><a href="#">Accessories</a></li>
                                <li><a href="#">For Men</a></li>
                                <li><a href="#">Women</a></li>
                                <li><a href="#">Fashion</a></li>
                            </ul>
                        </div>
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


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-5 col-sm-12 col-xs-12">
                        <div class="tab-content quickview-big-img">
                            <div id="pro-1" class="tab-pane fade show active">
                                <img src="assets/img/product/quickview-l1.jpg" alt="">
                            </div>
                            <div id="pro-2" class="tab-pane fade">
                                <img src="assets/img/product/quickview-l2.jpg" alt="">
                            </div>
                            <div id="pro-3" class="tab-pane fade">
                                <img src="assets/img/product/quickview-l3.jpg" alt="">
                            </div>
                            <div id="pro-4" class="tab-pane fade">
                                <img src="assets/img/product/quickview-l2.jpg" alt="">
                            </div>
                        </div>
                        <!-- Thumbnail Large Image End -->
                        <!-- Thumbnail Image End -->
                        <div class="quickview-wrap mt-15">
                            <div class="quickview-slide-active owl-carousel nav nav-style-1" role="tablist">
                                <a class="active" data-bs-toggle="tab" href="#pro-1"><img src="assets/img/product/quickview-s1.jpg" alt=""></a>
                                <a data-bs-toggle="tab" href="#pro-2"><img src="assets/img/product/quickview-s2.jpg" alt=""></a>
                                <a data-bs-toggle="tab" href="#pro-3"><img src="assets/img/product/quickview-s3.jpg" alt=""></a>
                                <a data-bs-toggle="tab" href="#pro-4"><img src="assets/img/product/quickview-s2.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-12 col-xs-12">
                        <div class="product-details-content quickview-content">
                            <h2>Products Name Here</h2>
                            <div class="product-details-price">
                                <span>$18.00 </span>
                                <span class="old">$20.00 </span>
                            </div>
                            <div class="pro-details-rating-wrap">
                                <div class="pro-details-rating">
                                    <i class="fa fa-star-o yellow"></i>
                                    <i class="fa fa-star-o yellow"></i>
                                    <i class="fa fa-star-o yellow"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <span>3 Reviews</span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisic elit eiusm tempor incidid ut labore et dolore magna aliqua. Ut enim ad minim venialo quis nostrud exercitation ullamco</p>
                            <div class="pro-details-list">
                                <ul>
                                    <li>- 0.5 mm Dail</li>
                                    <li>- Inspired vector icons</li>
                                    <li>- Very modern style  </li>
                                </ul>
                            </div>
                            <div class="pro-details-size-color">
                                <div class="pro-details-color-wrap">
                                    <span>Color</span>
                                    <div class="pro-details-color-content">
                                        <ul>
                                            <li class="blue"></li>
                                            <li class="maroon active"></li>
                                            <li class="gray"></li>
                                            <li class="green"></li>
                                            <li class="yellow"></li>
                                            <li class="white"></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pro-details-size">
                                    <span>Size</span>
                                    <div class="pro-details-size-content">
                                        <ul>
                                            <li><a href="#">s</a></li>
                                            <li><a href="#">m</a></li>
                                            <li><a href="#">l</a></li>
                                            <li><a href="#">xl</a></li>
                                            <li><a href="#">xxl</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="pro-details-quality">
                                <div class="cart-plus-minus">
                                    <input class="cart-plus-minus-box" type="text" name="qtybutton" value="2">
                                </div>
                                <div class="pro-details-cart btn-hover">
                                    <a href="#">Add To Cart</a>
                                </div>
                                <div class="pro-details-wishlist">
                                    <a href="#"><i class="fa fa-heart-o"></i></a>
                                </div>
                                <div class="pro-details-compare">
                                    <a href="#"><i class="pe-7s-shuffle"></i></a>
                                </div>
                            </div>
                            <div class="pro-details-meta">
                                <span>Categories :</span>
                                <ul>
                                    <li><a href="#">Minimal,</a></li>
                                    <li><a href="#">Furniture,</a></li>
                                    <li><a href="#">Electronic</a></li>
                                </ul>
                            </div>
                            <div class="pro-details-meta">
                                <span>Tag :</span>
                                <ul>
                                    <li><a href="#">Fashion, </a></li>
                                    <li><a href="#">Furniture,</a></li>
                                    <li><a href="#">Electronic</a></li>
                                </ul>
                            </div>
                            <div class="pro-details-social">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal end -->









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

<script type="text/javascript">
    //################################################ HERE ######################################################## HERE #################### Here #################################
        function add_To_Cart2(pro_Id){
        //console.log(pro_Id);
        var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
              if (this.readyState == 4 && this.status == 200) {
                //document.getElementById("status2").innerHTML = this.responseText;
              }
            };
            xmlhttp.open("GET",'shop.php?pro_ID='+pro_Id,true);
            xmlhttp.send();
        <?php
            error_reporting(0);
            $pro_id = intval($_GET['pro_ID']);
            if ($pro_id == true) {
                $serialdata = "SELECT product_id,quantity FROM shopping_cart WHERE user_id = '$login_session_id'";
                $cartQue = mysqli_query($conn, $serialdata);
                $cart_Data = $cartQue->fetch_array(MYSQLI_ASSOC);
                //$cartpros = array();
                //$cartproqs = array();
                $cartpros = (unserialize($cart_Data['product_id']));
                //print_r($cartpros);
                $cartproqs = (unserialize($cart_Data['quantity']));
                //print_r($cartproqs);
                if (is_array($cartpros) == true){
                    if (in_array($pro_id, $cartpros) == true) {
                        $cartproqs['quantity'][$pro_id]+= 1;
                        $serialcartpqs = serialize($cartproqs);
                        $quantupQ = "UPDATE shopping_cart SET quantity = '$serialcartpqs' WHERE user_id = '$login_session_id'";
                        $upQuery = mysqli_query($conn, $quantupQ);
                    }
                    else{
                        //push new value to product id array
                        array_push($cartpros, $pro_id);
                        //print_r($cartpros);
                        //Serialize and update query of productId
                        $serialcartp = serialize($cartpros);
                        $cartupdQ = "UPDATE shopping_cart SET product_id = '$serialcartp' WHERE user_id = '$login_session_id'";
                        $upQuery = mysqli_query($conn, $cartupdQ);
                        $cartproqs['quantity'][$pro_id] = 1;
                        $serialcartpqs = serialize($cartproqs);
                        $quantupQ = "UPDATE shopping_cart SET quantity = '$serialcartpqs' WHERE user_id = '$login_session_id'";
                        $upqunQuery = mysqli_query($conn, $quantupQ);
                    }
                }
            }
        ?>
    }
        //################################################ HERE ######################################################## HERE #################### Here #################################
</script>


</body>

</html>