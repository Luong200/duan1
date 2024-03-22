<?php
    if(isset($_SESSION['s_user'])&&(count($_SESSION['s_user'])>0)){
        extract($_SESSION['s_user']);
//        '<span ><a href="index.php?pg=myaccount">'.$username.'</a></span>
//        <a href="index.php?pg=logout">Thoát</a>'
        $html_account=  '<a  href="index.php?pg=myaccount" class="text-white">'.$username.'</a>/<a class="text-white" href="index.php?pg=logout">Thoát</a>';

    }else{
        $html_account='<a  href="index.php?pg=dangky" class="text-white">Login</a>/<a class="text-white" href="index.php?pg=dangnhap">Sign Up</a>';
    }
   
?>
<!doctype html>
<html lang="zxx">

<head>

    <!--========= Required meta tags =========-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Radios - Electronics Store WooCommerce Template</title>

    <link rel="shortcut icon" href="assets/img/favicon.png" type="images/x-icon"/>

    <!-- css include -->
    <link rel="stylesheet" href="layout/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="layout/assets/css/fontawesome.css">
    <link rel="stylesheet" href="layout/assets/css/animate.css">
    <link rel="stylesheet" href="layout/assets/css/metisMenu.css">
    <link rel="stylesheet" href="layout/assets/css/uikit.min.css">
    <link rel="stylesheet" href="layout/assets/css/jquery-ui.css">
    <link rel="stylesheet" href="layout/assets/css/slick.css">
    <link rel="stylesheet" href="layout/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="layout/assets/css/main.css">
</head>

<body>
<div class="body_wrap">

    <!-- preloder start  -->
    <div class="preloder_part">
        <div class="spinner">
            <div class="dot1"></div>
            <div class="dot2"></div>
        </div>
    </div>
    <!-- preloder end  -->

    <!-- back to top start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
        </svg>
    </div>
    <!-- back to top end -->

    <!-- header start -->
    <header class="header header__style-one">
        <div class="header__top-info-wrap d-none d-lg-block">
            <div class="container">
                <div class="header__top-info ul_li_between mt-none-10">
                    <ul class="ul_li mt-10">
                        <li><i class="far fa-map-marker-alt"></i>Store Location</li>
                        <li><i class="far fa-truck"></i>Track Your Order</li>
                        <li><i class="fas fa-phone"></i>Call Us For Enquiry</li>
                        <li><i class="fas fa-heart"></i>Welcome to Radios. We provides Best Electronics item</li>
                    </ul>
                    <div class="header__top-right ul_li mt-10">
                        <div class="date">
                            <i class="fal fa-calendar-alt"></i> Friday, July 27, 2020
                        </div>
                        <div class="header__social ml-25">
                            <a href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a href="#!"><i class="fab fa-twitter"></i></a>
                            <a href="#!"><i class="fab fa-instagram"></i></a>
                            <a href="#!"><i class="fab fa-youtube"></i></a>
                            <a href="#!"><i class="fab fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="header__middle ul_li_between justify-content-xs-center">
                <div class="header__logo">
                    <a href="index.html">
                        <img src="layout/assets/img/logo/logo.svg" alt="">
                    </a>
                </div>
                <form class="header__search-box" action="#">
                    <div class="select-box">
                        <select id="category" name="category">
                            <option value="">All Categories</option>
                            <option value="4">Summer collections</option>
                            <option value="5">Breakfast & Dairy</option>
                            <option value="6">Beverage & Drinks</option>
                            <option value="7">Cocolate Box</option>
                            <option value="8">Dried Food Corner</option>
                            <option value="9">Frozen Foods</option>
                            <option value="10">Baby Food Corner</option>
                            <option value="11">Milk & Juices</option>
                            <option value="12">Organic & Snacks</option>
                        </select>
                    </div>
                    <input type="text" name="search" id="search" placeholder="Search For Products"
                           required />
                    <button type="submit"><i class="far fa-search"></i>
                    </button>
                </form>
                <div class="header__lang ul_li">
                    <div class="header__language mr-15">
                        <ul>
                            <li><a href="#!" class="lang-btn">VND</a>

                            </li>
                        </ul>
                    </div>
                    <div class="header__language">
                        <ul>
                            <li><a href="#!" class="lang-btn"><img src="layout/assets/img/icon/usd_flag.png" alt="">Vietnamese </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="header__icons ul_li">
                    <div class="icon">
                        <a href="#!"><img src="layout/assets/img/icon/user.svg" alt=""></a>
                    </div>
                    <div class="icon wishlist-icon">
                        <a href="#!">
                            <img src="layout/assets/img/icon/heart.svg" alt="">
                            <span class="count">0</span>
                        </a>
                    </div>
                    <div class="cart_btn icon">
                        <img src="layout/assets/img/icon/shopping_bag.svg" alt="">
                        <span class="count">0</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="header__cat-wrap" data-uk-sticky="top: 250; animation: uk-animation-slide-top;">
            <div class="container">
                <div class="header__wrap ul_li_between">
                    <div class="header__cat ul_li" >
                        <div class="hamburger_menu">
                            <a href="javascript:void(0);" class="active">
                                <div class="icon bar">
                                    <span><i class="fal fa-bars"></i></span>
                                </div>
                            </a>
                        </div>
                        <ul class="category ul_li">
                            <li><a href="#!"><span><img src="layout/assets/img/icon/hc_01.svg" alt=""></span>Laptops & Computers</a></li>
                            <li><a href="#!"><span><img src="layout/assets/img/icon/hc_02.svg" alt=""></span>CC Tv & Camera</a></li>
                            <li><a href="#!"><span><img src="layout/assets/img/icon/hc_03.svg" alt=""></span>Home Equipment</a></li>
                            <li><a href="#!"><span><img src="layout/assets/img/icon/hc_04.svg" alt=""></span>Tv & Audios</a></li>
                            <li><a href="#!"><span><img src="layout/assets/img/icon/hc_05.svg" alt=""></span>Printers & Ink</a></li>
                            <li><a href="#!"><span><img src="layout/assets/img/icon/hc_06.svg" alt=""></span>Gaming & Fun</a></li>
                        </ul>
                    </div>
                    <div class="login-sign-btn">
                            <div class="thm-btn">
                                 <span class="btn-wrap text-white">
                              <?=$html_account;?>
                                </span>
                            </div>

                    </div>
                </div>
            </div>
        </div>
    </header>



