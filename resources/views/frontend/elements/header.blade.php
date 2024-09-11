<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <meta name="viewport" content="width=1291">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="Content-Type" content="text/html; charset=euc-kr">
    <meta name="csrf-token" content="{{ csrf_token() }}"> -->
    <title>@yield('title', 'Blensky') | {{ config('businessinfo.name') }}</title>
    <link rel="SHORTCUT ICON" href="https://adpanchok.co.kr/favicon.ico">
    <!-- <META HTTP-EQUIV="imagetoolbar" CONTENT="no">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/default_v2a51c.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/font.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/lightbox.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/best100b28d.css?v=1698210160') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/brand6550.css?v=1698210628') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/mainc5e1.css?v=1710402706') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/slick5e1f.css?v=2') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/ns-windowe2ea.css?time=1') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.theme.default.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/swiper-bundle.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/rollingddc5.css?v=2024012603') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/custom.css?v=2024012607') }}">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css"> -->

    <meta charset="UTF-8">
    <meta name="description" content="Ekomart-Grocery-Store(e-Commerce) HTML Template: A sleek, responsive, and user-friendly HTML template designed for online grocery stores.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Grocery, Store, stores">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/fav.png">
    <!-- plugins css -->
    <link rel="stylesheet preload" href="{{ asset('frontend/new_assets/css/plugins.css') }}" as="style">
    <link rel="stylesheet preload" href="{{ asset('frontend/new_assets/css/style.css') }}" as="style">
    <link rel="stylesheet preload" href="{{ asset('frontend/new_assets/css/tabcontrol.css') }}" as="style">
    <!-- <script defer src="{{ asset('frontend/js/jquery-1.11.1.min.js') }}"></script> -->
    <script src="{{ asset('frontend/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
    @yield('style')
    <script>
        function goToCart() {
            window.location.href = '/cart';
        }
    </script>
</head>

<body>
     <!-- header style two start -->
     <header class="header-style-two bg-primary-header">
        
        <div class="search-header-area-main">
            <div class="container-2">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="logo-search-category-wrapper">
                            <a href="index.html" class="logo-area">
                                <img src="{{ asset('frontend/new_assets/images/logo/logo.png')}}" alt="logo-main" class="logo" style="height: auto; width:60%">
                            </a>
                            <div class="category-search-wrapper">
                                
                                <form action="{{ url('/search') }}" method="get" class="search-header">
                                    <input type="text" placeholder="검색" required="" name="search">
                                    <button type="submit" class="rts-btn  radious-sm with-icon">
                                        
                                        <div class="arrow-icon">
                                            <i class="fa-solid fa-magnifying-glass" style="color:black"></i>
                                        </div>
                                        <div class="arrow-icon">
                                            <i class="fa-solid fa-magnifying-glass" style="color:black"></i>
                                        </div>
                                    </button>
                                </form>
                            </div>
                            <a href="index.html" class="logo-area">
                                <img src="{{ asset('frontend/new_assets/images/logo/logo-contact.svg')}}" alt="logo-main" class="logo" >
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="rts-header-nav-area-one header--sticky">
            <div class="container-2">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="nav-and-btn-wrapper">
                            <div class="nav-area">
    <nav>
        <ul class="parent-nav">
          
            @php
                use App\Models\Category;
                $categories = Category::where('status',1)->orderBy('level','asc')->get();
            @endphp
            @foreach ($categories as $category)                
                <li class="parent"><a href="{{ route('cat_wise_products',$category->slug)}}">{{$category->name}}</a></li>
            @endforeach
        </ul>
    </nav>
</div>
                            <!-- button-area -->
                            <div class="right-location-area">
                                <!-- <i class="fa-solid fa-location-dot"></i>
                                <p>Delivery: <a href="#">258 FKD Street, Berlin</a></p> -->
                                <div class="accont-wishlist-cart-area-header">
                                <a href="{{route('login')}}" class="btn-border-only account" style="border: 0;">
                                    <i class="fa-light fa-user"></i>    
                                </a>

                                <div class="btn-border-only cart category-hover-header openuptip cta-quickview product-details-popup-btn" onclick="showCart()"
                                        data-flow="up" style="border: 0;">
                                        <i class="fa-sharp fa-regular fa-cart-shopping"></i>
                                        <span></span>
                                        
                                        <!-- <a href="cart.html" class="over_link"></a> -->
                                </div>
                            </div>
                            </div>
                            <!-- button-area end -->
                        </div>
                        <div class="logo-search-category-wrapper">
                            <a href="index.html" class="logo-area">
                                <img src="{{ asset('frontend/new_assets/images/logo/logo.png') }}" alt="logo-main" class="logo" style="height: auto; width:40%" >
                            </a>
                            <div class="category-search-wrapper">
                                <div class="category-btn category-hover-header">
                                    <img class="parent" src="assets/images/icons/bar-1.svg" alt="icons">
                                    <span>Categories</span>
                                    <ul class="category-sub-menu">
                                        <li>
                                            <a href="#" class="menu-item">
                                                <img src="{{ asset('frontend/new_assets/images/icons/01.svg')}}" alt="icons">
                                                <span>Breakfast &amp; Dairy</span>
                                                <i class="fa-regular fa-plus"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="menu-item">
                                                <img src="{{ asset('frontend/new_assets/images/icons/02.svg')}}"alt="icons">
                                                <span>Meats &amp; Seafood</span>
                                                <i class="fa-regular fa-plus"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="menu-item">
                                                <img src="{{ asset('frontend/new_assets/images/icons/03.svg')}}" alt="icons">
                                                <span>Breads &amp; Bakery</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="menu-item">
                                                <img src="{{ asset('frontend/new_assets/images/icons/04.svg')}}" alt="icons">
                                                <span>Chips &amp; Snacks</span>
                                                <i class="fa-regular fa-plus"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="menu-item">
                                                <img src="{{ asset('frontend/new_assets/images/icons/05.svg')}}" alt="icons">
                                                <span>Medical Healthcare</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="menu-item">
                                                <img src="{{ asset('frontend/new_assets/images/icons/06.svg')}}" alt="icons">
                                                <span>Breads &amp; Bakery</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="menu-item">
                                                <img src="{{ asset('frontend/new_assets/images/icons/07.svg')}}" alt="icons">
                                                <span>Biscuits &amp; Snacks</span>
                                                <i class="fa-regular fa-plus"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="menu-item">
                                                <img src="{{ asset('frontend/new_assets/images/icons/08.svg')}}" alt="icons">
                                                <span>Frozen Foods</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="menu-item">
                                                <img src="{{ asset('frontend/new_assets/images/icons/09.svg')}}" alt="icons">
                                                <span>Grocery &amp; Staples</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="menu-item">
                                                <img src="{{ asset('frontend/new_assets/images/icons/10.svg')}}" alt="icons">
                                                <span>Other Items</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <form action="{{ url('/search') }}" class="search-header" method="get">
                                    <input type="text" placeholder="Search for products, categories" required="" >
                                    <input type="submit" value="Search">
                                    <!-- <a href="javascript:void(0);" class="rts-btn btn-primary radious-sm with-icon">
                                        <div class="btn-text">
                                            Search
                                        </div>
                                        <div class="arrow-icon">
                                            <i class="fa-light fa-magnifying-glass"></i>
                                        </div>
                                        <div class="arrow-icon">
                                            <i class="fa-light fa-magnifying-glass"></i>
                                        </div>
                                    </a> -->
                                </form>
                            </div>
                            <div class="main-wrapper-action-2 d-flex">
                                <div class="accont-wishlist-cart-area-header">
                                    <a href="account.html" class="btn-border-only account">
                                        <i class="fa-light fa-user"></i>
                                        Account
                                    </a>
                                    <!-- <a href="wishlist.html" class="btn-border-only wishlist">
                                        <i class="fa-regular fa-heart"></i>
                                        Wishlist
                                    </a> -->
                                    <div class="btn-border-only cart category-hover-header">
                                        <i class="fa-sharp fa-regular fa-cart-shopping"></i>
                                        <span>My Cart</span>
                                        <div class="category-sub-menu card-number-show">
                                            <h5 class="shopping-cart-number">Shopping Cart (03)</h5>
                                            <div class="cart-item-1 border-top">
                                                <div class="img-name">
                                                    <div class="thumbanil">
                                                        <img src="assets/images/shop/cart-1.png" alt="">
                                                    </div>
                                                    <div class="details">
                                                        <a href="shop-details.html">
                                                            <h5 class="title">Foster Farms Breast Nuggets Shaped Chicken</h5>
                                                        </a>
                                                        <div class="number">
                                                            1 <i class="fa-regular fa-x"></i>
                                                            <span>$36.00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="close-c1">
                                                    <i class="fa-regular fa-x"></i>
                                                </div>
                                            </div>
                                            <div class="cart-item-1">
                                                <div class="img-name">
                                                    <div class="thumbanil">
                                                        <img src="assets/images/shop/05.png" alt="">
                                                    </div>
                                                    <div class="details">
                                                        <a href="shop-details.html">
                                                            <h5 class="title">Foster Farms Breast Nuggets Shaped Chicken</h5>
                                                        </a>
                                                        <div class="number">
                                                            1 <i class="fa-regular fa-x"></i>
                                                            <span>$36.00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="close-c1">
                                                    <i class="fa-regular fa-x"></i>
                                                </div>
                                            </div>
                                            <div class="cart-item-1">
                                                <div class="img-name">
                                                    <div class="thumbanil">
                                                        <img src="assets/images/shop/04.png" alt="">
                                                    </div>
                                                    <div class="details">
                                                        <a href="shop-details.html">
                                                            <h5 class="title">Foster Farms Breast Nuggets Shaped Chicken</h5>
                                                        </a>
                                                        <div class="number">
                                                            1 <i class="fa-regular fa-x"></i>
                                                            <span>$36.00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="close-c1">
                                                    <i class="fa-regular fa-x"></i>
                                                </div>
                                            </div>
                                            <div class="sub-total-cart-balance">
                                                <div class="bottom-content-deals mt--10">
                                                    <div class="top">
                                                        <span>Sub Total:</span>
                                                        <span class="number-c">$108.00</span>
                                                    </div>
                                                    <div class="single-progress-area-incard">
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" role="progressbar" style="width: 80%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <p>Spend More <span>$125.00</span> to reach <span>Free Shipping</span></p>
                                                </div>
                                                <div class="button-wrapper d-flex align-items-center justify-content-between">
                                                    <a href="cart.html" class="rts-btn btn-primary ">View Cart</a>

                                                    <a href="checkout.html" class="rts-btn btn-primary border-only">CheckOut</a>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="cart.html" class="over_link"></a>
                                    </div>
                                </div>
                                <div class="actions-area">
                                    <div class="search-btn" id="search">
            
                                        <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M15.75 14.7188L11.5625 10.5312C12.4688 9.4375 12.9688 8.03125 12.9688 6.5C12.9688 2.9375 10.0312 0 6.46875 0C2.875 0 0 2.9375 0 6.5C0 10.0938 2.90625 13 6.46875 13C7.96875 13 9.375 12.5 10.5 11.5938L14.6875 15.7812C14.8438 15.9375 15.0312 16 15.25 16C15.4375 16 15.625 15.9375 15.75 15.7812C16.0625 15.5 16.0625 15.0312 15.75 14.7188ZM1.5 6.5C1.5 3.75 3.71875 1.5 6.5 1.5C9.25 1.5 11.5 3.75 11.5 6.5C11.5 9.28125 9.25 11.5 6.5 11.5C3.71875 11.5 1.5 9.28125 1.5 6.5Z" fill="#1F1F25"></path>
                                        </svg>
            
                                    </div>
                                    <div class="menu-btn" id="menu-btn">
            
                                        <svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect y="14" width="20" height="2" fill="#1F1F25"></rect>
                                            <rect y="7" width="20" height="2" fill="#1F1F25"></rect>
                                            <rect width="20" height="2" fill="#1F1F25"></rect>
                                        </svg>
            
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header style two end -->

    <!-- rts header area start -->
    <!-- header style two -->
<div id="side-bar" class="side-bar header-two">
    <button class="close-icon-menu"><i class="far fa-times"></i></button>


    <form action="{{ url('/search') }}"  method="get" class="search-input-area-menu mt--30">
        <input type="text" placeholder="Search..." required name="search">
        <button type="submit"><i class="fa-light fa-magnifying-glass"></i></button>
    </form>

    <div class="mobile-menu-nav-area tab-nav-btn mt--20">

        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
              <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Menu</button>
              <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Category</button>
            </div>
          </nav>

          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                <!-- mobile menu area start -->
                <div class="mobile-menu-main">
                    <nav class="nav-main mainmenu-nav mt--30">
                        <ul class="mainmenu metismenu" id="mobile-menu-active">
                            <li class="has-droupdown">
                                <a href="#" class="main">Home</a>
                                <ul class="submenu mm-collapse">
                                    <li><a class="mobile-menu-link" href="index.html">Home One</a></li>
                                    <li><a class="mobile-menu-link" href="index-two.html">Home Two</a></li>
                                    <li><a class="mobile-menu-link" href="index-three.html">Home Three</a></li>
                                    <li><a class="mobile-menu-link" href="index-four.html">Home Four</a></li>
                                    <li><a class="mobile-menu-link" href="index-five.html"> Home Five</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="about.html" class="main">About</a>
                            </li>
                            <li class="has-droupdown">
                                <a href="#" class="main">Pages</a>
                                <ul class="submenu mm-collapse">
                                    <li><a class="mobile-menu-link" href="about.html">About</a></li>
                                    <li><a class="mobile-menu-link" href="faq.html">Faq's</a></li>
                                    <li><a class="mobile-menu-link" href="invoice.html">Invoice</a></li>
                                    <li><a class="mobile-menu-link" href="contact.html">Contact</a></li>
                                    <li><a class="mobile-menu-link" href="register.html">Register</a></li>
                                    <li><a class="mobile-menu-link" href="login.html">Login</a></li>
                                    <li><a class="mobile-menu-link" href="privacy-policy.html">Privacy Policy</a></li>
                                    <li><a class="mobile-menu-link" href="cookies-policy.html">Cookies Policy</a></li>
                                    <li><a class="mobile-menu-link" href="terms-condition.html">Terms Condition</a></li>
                                    <li><a class="mobile-menu-link" href="404.html">Error Page</a></li>
                                </ul>
                            </li>
                            <li class="has-droupdown">
                                <a href="#" class="main">Shop</a>
                                <ul class="submenu mm-collapse">
                                    <li class="has-droupdown third-lvl">
                                        <a class="main" href="#">Shop Layout</a>
                                        <ul class="submenu-third-lvl mm-collapse">
                                            <li><a href="shop-grid-sidebar.html"></a>Shop Grid Sidebar</li>
                                            <li><a href="shop-list-sidebar.html"></a>Shop List Sidebar</li>
                                            <li><a href="shop-grid-top-filter.html"></a>Shop Grid Top Filter</li>
                                            <li><a href="shop-list-top-filter.html"></a>Shop List Top Filter</li>
                                        </ul>
                                    </li>
                                    <li class="has-droupdown third-lvl">
                                        <a class="main" href="#">Shop Details</a>
                                        <ul class="submenu-third-lvl mm-collapse">
                                            <li><a href="shop-details.html"></a>Shop Details</li>
                                            <li><a href="shop-details-2.html"></a>Shop Details 2</li>
                                            <li><a href="shop-grid-top-filter.html"></a>Shop Grid Top Filter</li>
                                            <li><a href="shop-list-top-filter.html"></a>Shop List Top Filter</li>
                                        </ul>
                                    </li>
                                    <li class="has-droupdown third-lvl">
                                        <a class="main" href="#">Product Feature</a>
                                        <ul class="submenu-third-lvl mm-collapse">
                                            <li><a href="shop-details-variable.html"></a>Shop Details Variable</li>
                                            <li><a href="shop-details-affiliats.html"></a>Shop Details Affiliats</li>
                                            <li><a href="shop-details-group.html"></a>Shop Details Group</li>
                                            <li><a href="shop-compare.html"></a>Shop Compare</li>
                                        </ul>
                                    </li>
                                    <li class="has-droupdown third-lvl">
                                        <a class="main" href="#">Shop Others</a>
                                        <ul class="submenu-third-lvl mm-collapse">
                                            <li><a href="cart.html"></a>Cart</li>
                                            <li><a href="checkout.html"></a>Checkout</li>
                                            <li><a href="trackorder.html"></a>Trackorder</li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-droupdown">
                                <a href="#" class="main">Blog</a>
                                <ul class="submenu mm-collapse">
                                    <li><a class="mobile-menu-link" href="blog.html">Blog</a></li>
                                    <li><a class="mobile-menu-link" href="blog-list-left-sidebar.html">Blog Left Sidebar</a></li>
                                    <li><a class="mobile-menu-link" href="blog-list-right-sidebar.html">Blog List Right Sidebar</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="contact.html" class="main">Contact Us</a>
                            </li>
                        </ul>
                    </nav>

                </div>
                <!-- mobile menu area end -->
            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                <div class="category-btn category-hover-header menu-category">
                    <ul class="category-sub-menu" id="category-active-menu">
                        <li>
                            <a href="#" class="menu-item">
                                <img src="assets/images/icons/01.svg" alt="icons">
                                <span>Breakfast &amp; Dairy</span>
                                <i class="fa-regular fa-plus"></i>
                            </a>
                            <ul class="submenu mm-collapse">
                                <li><a class="mobile-menu-link" href="#">Breakfast</a></li>
                                <li><a class="mobile-menu-link" href="#">Dinner</a></li>
                                <li><a class="mobile-menu-link" href="#"> Pumking</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="menu-item">
                                <img src="assets/images/icons/02.svg" alt="icons">
                                <span>Meats &amp; Seafood</span>
                                <i class="fa-regular fa-plus"></i>
                            </a>
                            <ul class="submenu mm-collapse">
                                <li><a class="mobile-menu-link" href="#">Breakfast</a></li>
                                <li><a class="mobile-menu-link" href="#">Dinner</a></li>
                                <li><a class="mobile-menu-link" href="#"> Pumking</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="menu-item">
                                <img src="assets/images/icons/03.svg" alt="icons">
                                <span>Breads &amp; Bakery</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="menu-item">
                                <img src="assets/images/icons/04.svg" alt="icons">
                                <span>Chips &amp; Snacks</span>
                                <i class="fa-regular fa-plus"></i>
                            </a>
                            <ul class="submenu mm-collapse">
                                <li><a class="mobile-menu-link" href="#">Breakfast</a></li>
                                <li><a class="mobile-menu-link" href="#">Dinner</a></li>
                                <li><a class="mobile-menu-link" href="#"> Pumking</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="menu-item">
                                <img src="assets/images/icons/05.svg" alt="icons">
                                <span>Medical Healthcare</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="menu-item">
                                <img src="assets/images/icons/06.svg" alt="icons">
                                <span>Breads &amp; Bakery</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="menu-item">
                                <img src="assets/images/icons/07.svg" alt="icons">
                                <span>Biscuits &amp; Snacks</span>
                                <i class="fa-regular fa-plus"></i>
                            </a>
                            <ul class="submenu mm-collapse">
                                <li><a class="mobile-menu-link" href="#">Breakfast</a></li>
                                <li><a class="mobile-menu-link" href="#">Dinner</a></li>
                                <li><a class="mobile-menu-link" href="#"> Pumking</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="menu-item">
                                <img src="assets/images/icons/08.svg" alt="icons">
                                <span>Frozen Foods</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="menu-item">
                                <img src="assets/images/icons/09.svg" alt="icons">
                                <span>Grocery &amp; Staples</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="menu-item">
                                <img src="assets/images/icons/10.svg" alt="icons">
                                <span>Other Items</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    
    </div>

    <!-- button area wrapper start -->
     <div class="button-area-main-wrapper-menuy-sidebar mt--50">
        <div class="contact-area">
            <div class="phone">
                <i class="fa-light fa-headset"></i>
                <a href="#">02345697871</a>
            </div>
            <div class="phone">
                <i class="fa-light fa-envelope"></i>
                <a href="#">02345697871</a>
            </div>
        </div>
        <div class="buton-area-bottom">
            <a href="login.html" class="rts-btn btn-primary">Sign In</a>
            <a href="register.html" class="rts-btn btn-primary">Sign Up</a>
        </div>
     </div>
    <!-- button area wrapper end -->

</div>
<div class="product-details-popup-wrapper" style="background-color: #a3a3a345;">
        <div class="rts-product-details-section rts-product-details-section2 product-details-popup-section">
            <div class="product-details-popup">
                <button class="product-details-close-btn"><i class="fal fa-times"></i></button>
                <div class="details-product-area">

                    <div class="rts-cart-area rts-section-gap bg_light-1" style="width: 100%;">
                        <div class="container">
                            <div class="row g-5">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                    <!-- <div class="cart-area-main-wrapper">
                        <div class="cart-top-area-note">
                            <p>Add <span>$59.69</span> to cart and get free shipping</p>
                            <div class="bottom-content-deals mt--10">
                                <div class="single-progress-area-incard">
                                    <div class="progress">
                                        <div class="progress-bar wow fadeInLeft" role="progressbar" style="width: 80%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                                    <div style="overflow: auto; max-height: 400px;">
                                        <div class="rts-cart-list-area">

                                          <div id="cart-showing-area">

                                          </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div >
                    <div class="bottom-cupon-code-cart-area" style="padding: 10px 10px;">

                        <!-- <input type="text" placeholder="Cupon Code"> -->
                        <button class="rts-btn " style="color: #000; border: 1px solid #000;">Total
                            item: 2</button>
                        <button class="rts-btn " style="color: #000; border: 1px solid #000;">Sub
                            Total Item: 5300</button>
                        <button class="rts-btn " style="color: #000; border: 1px solid #000;">Total:
                            5300</button>
                        
                        <a href="#" class="rts-btn btn-primary ">Continue Shopping</a>
                        <a href="{{ route('checkout')}}" class="rts-btn btn-primary ">Checkout</a>
                         <!-- {{-- <li class="parent"><a href="{{ route('cat_wise_products',$category->slug)}}" --}} -->
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        
        function pullObjectFromStorage(key){
            let data = localStorage.getItem(key);
            return data ? JSON.parse(data) : null;
        }

        function pushObjectToStorage(key, obj){
            localStorage.setItem(key, JSON.stringify(obj));
        }
        
        function removeCartProduct(index) {
            let cartItems = pullObjectFromStorage('cartItems');
            if(cartItems && cartItems.length > index){
                cartItems.splice(index,1);
                pushObjectToStorage('cartItems', cartItems);
                showCart();
                console.log(cartItems);
            }
        }

        function showCart(){
            var cartItems = pullObjectFromStorage('cartItems');
            console.log(cartItems);
            alert;
            var items="";
            cartItems.forEach(function(item, index) {
                items+=`<div class="single-cart-area-list main  item-parent">
                            <div class="product-main-cart">

                                <div class="thumbnail">
                                    <img src="${item.productImage}" alt="shop"
                                        style="width: 120px; height: 120px;">
                                </div>
                                <div class="information" style="width:100%;">
                                    <h6 class="title" style="padding: 2px 2px;">${item.productName}</h6>
                                    <div class="price">
                                        <p style="padding: 2px 2px;">${item.productPrice}</p>
                                    </div>
                                    <div class="price">
                                        <p style="padding: 2px 2px;">Size: ${item.size}</p>
                                    </div>
                                    <div class="price">
                                        <div class="row" style="padding:2px 2px;">
                                            <p style="width: 35%">Product Quantity </p>
                                            <div class="input-container">
                                                <div id="minus">-</div>
                                                <input type="text" id="number" value="${item.qty}"
                                                    style="background: #1A5172; color: #fff; text-align: center;">
                                                <div id="plus">+</div>

                                            </div>
                                            
                                            <div class="col-3" style="width: 40%; ">
                                                <span style="padding-left: 50px;float: right;">
                                                    <button class="remove_btn"  data-index="${index}" style="width: 100px;height: 30px; color: #ff0000; border: 1px solid #000;">
                                                        <i class="fa fa-trash" style="color: #ff0000 !important;"></i>
                                                        Remove</button>

                                                </span>

                                            </div>


                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>`
            })

            $("#cart-showing-area").html(items);

            $('.remove_btn').click(function() {
                var index = $(this).data('index');
                console.log(index);
                removeCartProduct(index);
            })
        }

    </script>