@extends('frontend.layout.parent-cart')
@section('title', 'Cart Details')

@section('style')
<!-- 15.07.24 -->
<link rel="stylesheet preload" href="{{ asset('productAssets/css/plugins.css')}}" as="style">
<link rel="stylesheet preload" href="{{ asset('productAssets/css/style.css')}}" as="style">



    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/fonts/iconic/css/material-design-iconic-font.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/fonts/linearicons-v1.0.0/icon-font.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/vendor/animate/animate.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/vendor/css-hamburgers/hamburgers.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/vendor/animsition/css/animsition.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/vendor/select2/select2.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/vendor/daterangepicker/daterangepicker.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/vendor/slick/slick.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/vendor/MagnificPopup/magnific-popup.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/vendor/perfect-scrollbar/perfect-scrollbar.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/main.css') }}">
    <!--===============================================================================================-->
    <style>
        .wrap-header-cart {
            position: relative !important;
            height: auto !important;
            margin-top: 350px;
        }
    </style>
@endsection
@section('content')
    <div class="animsition">




    <div class="banner-three-swiper-main-wrapper">
        <div class="swiper mySwiper-category-1 swiper-data" data-swiper='{
            "spaceBetween":0,
            "slidesPerView":1,
            "loop": true,
            "speed": 700,
            "effect": "fade",
            "navigation":{
                "nextEl":".swiper-button-next",
                "prevEl":".swiper-button-prev"
              },
            "breakpoints":{
            "0":{
                "slidesPerView":1,
                "spaceBetween": 0},
            "320":{
                "slidesPerView":1,
                "spaceBetween":0},
            "480":{
                "slidesPerView":1,
                "spaceBetween":0},
            "640":{
                "slidesPerView":1,
                "spaceBetween":0},
            "840":{
                "slidesPerView":1,
                "spaceBetween":0},
            "1140":{
                "slidesPerView":1,
                "spaceBetween":0},
            "1540":{
                "slidesPerView":1,
                "spaceBetween":0},
            "1840":{
                "slidesPerView":1,
                "spaceBetween":0}
            }
        }'>
            <div class="swiper-wrapper swiper-button-between">
                <!-- single swiper start -->
                <div class="swiper-slide">
                <!-- "{{ asset('productAssets/images/shop/02.png')}}"  -->
                    <!-- rts banner area start -->
                    <div class="rts-section-gap rts-banner-area-three banner-bg-full_1">
                        <img src="{{ asset('productAssets/images/banner/image 6.jpg')}}" alt="" style="width: 33.33%; ">
                        <img src="{{ asset('productAssets/images/banner/image 7.jpg')}}"  alt="" style="width: 33.33%; ">
                        <img src="{{ asset('productAssets/images/banner/image 5.jpg')}}"  alt="" style="width: 33.33%; ">

                    </div>
                    <!-- rts banner area end -->
                </div>
                <!-- single swiper start -->
                <!-- single swiper start -->
                <div class="swiper-slide">
                    <!-- rts banner area start -->
                    <div class="rts-section-gap rts-banner-area-three img-two banner-bg-full_1">
                        <!-- <div class="container-2">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="banner-inner-content-three">
                                        <span class="pre">
                                            Get up to 10% off on your first $250 purchase
                                        </span>
                                        <h1 class="title">
                                            Check out our incredible <br> deals today
                                        </h1>
                                        <p class="dsicription">
                                            We have prepared special discounts for you on grocery products. Don't miss these opportunities...
                                        </p>
                                        <a href="#" class="rts-btn btn-primary radious-sm with-icon">
                                            <div class="btn-text">
                                                Shop Now
                                            </div>
                                            <div class="arrow-icon">
                                                <i class="fa-light fa-arrow-right"></i>
                                            </div>
                                            <div class="arrow-icon">
                                                <i class="fa-light fa-arrow-right"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <img src="assets/images/banner/image 7.jpg" alt="" style="width: 33.33%; ">
                        <img src="assets/images/banner/image 5.jpg" alt="" style="width: 33.33%;">
                        <img src="assets/images/banner/image 7.jpg" alt="" style="width: 33.33%; ">
                    </div>
                    <!-- rts banner area end -->
                </div>
                <!-- single swiper start -->
                <button class="swiper-button-next"><i class="fa-regular fa-chevron-right"></i></button>
                <button class="swiper-button-prev"><i class="fa-regular fa-chevron-left"></i></button>
            </div>
        </div>
    </div>



    <div class="container-2 single-new-offer-area-border-weekly-selstyle mt--60">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-area-between mb--15">
                    <h2 class="title-left">
                        Best Selling Products
                    </h2>
                    <ul class="nav nav-tabs best-selling-grocery" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tabz" data-bs-toggle="tab" data-bs-target="#home"
                                type="button" role="tab" aria-controls="home" aria-selected="false">View All</button>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="tab-content" id="myTabContentd">
                    <!-- first tabs area start-->
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tabz">
                        <div class="row g-4 mt--0">
                            <div class="col-lg-20 col-md-4 col-sm-6 col-12">
                                <div class="single-shopping-card-one deals-of-day">

                                    <div class="image-and-action-area-wrapper">
                                        <a href="shop-details-2.html" class="thumbnail-preview">
                                            <img src="assets/images/grocery/image 8.png" alt="grocery">
                                        </a>
                                        <div class="onsale-offer">
                                            <span>25% Off</span>
                                        </div>
                                        <!-- <div class="action-share-option">
                                                    <div class="single-action openuptip message-show-action" data-flow="up" title="Add To Wishlist">
                                                        <i class="fa-light fa-heart"></i>
                                                    </div>
                                                    <div class="single-action openuptip" data-flow="up" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        <i class="fa-solid fa-arrows-retweet"></i>
                                                    </div>
                                                    <div class="single-action openuptip cta-quickview product-details-popup-btn" data-flow="up" title="Quick View">
                                                        <i class="fa-regular fa-eye"></i>
                                                    </div>
                                                </div> -->
                                    </div>
                                    <div class="body-content">

                                        <a href="shop-details-2.html">
                                            <h4 class="title">Xestle Cerelac Mixed Fruits &amp;
                                                Wheat with Milk</h4>
                                        </a>

                                        <!-- <span class="availability">500g Pack</span> -->
                                        <div class="price-area">
                                            <span class="current">$36.00</span>
                                            <div class="previous">$36.00</div>
                                            <div class="start-area-rating">
                                                <i class="fa-solid fa-star font-star-fa"></i>
                                                <i class="fa-solid fa-star font-star-fa"></i>
                                                <i class="fa-solid fa-star font-star-fa"></i>
                                                <i class="fa-solid fa-star font-star-fa"></i>
                                                <i class="fa-solid fa-star font-star-fa"></i>
                                            </div>
                                        </div>
                                        <div class="cart-counter-action">
                                            <a href="#" class="rts-btn ">
                                                <div class="btn-text">
                                                    Add to Cart
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-20 col-md-4 col-sm-6 col-12">
                                <div class="single-shopping-card-one deals-of-day">

                                    <div class="image-and-action-area-wrapper">
                                        <a href="shop-details-2.html" class="thumbnail-preview">
                                            <img src="assets/images/grocery/image 8.png" alt="grocery">
                                        </a>
                                        <div class="onsale-offer">
                                            <span>25% Off</span>
                                        </div>
                                        <!-- <div class="action-share-option">
                                                    <div class="single-action openuptip message-show-action" data-flow="up" title="Add To Wishlist">
                                                        <i class="fa-light fa-heart"></i>
                                                    </div>
                                                    <div class="single-action openuptip" data-flow="up" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        <i class="fa-solid fa-arrows-retweet"></i>
                                                    </div>
                                                    <div class="single-action openuptip cta-quickview product-details-popup-btn" data-flow="up" title="Quick View">
                                                        <i class="fa-regular fa-eye"></i>
                                                    </div>
                                                </div> -->
                                    </div>
                                    <div class="body-content">

                                        <a href="shop-details-2.html">
                                            <h4 class="title">Xestle Cerelac Mixed Fruits &amp;
                                                Wheat with Milk</h4>
                                        </a>

                                        <!-- <span class="availability">500g Pack</span> -->
                                        <div class="price-area">
                                            <span class="current">$36.00</span>
                                            <div class="previous">$36.00</div>
                                            <div class="start-area-rating">
                                                <i class="fa-solid fa-star font-star-fa"></i>
                                                <i class="fa-solid fa-star font-star-fa"></i>
                                                <i class="fa-solid fa-star font-star-fa"></i>
                                                <i class="fa-solid fa-star font-star-fa"></i>
                                                <i class="fa-solid fa-star font-star-fa"></i>
                                            </div>
                                        </div>
                                        <div class="cart-counter-action">
                                            <a href="#" class="rts-btn ">
                                                <div class="btn-text">
                                                    Add to Cart
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-20 col-md-4 col-sm-6 col-12">
                                <div class="single-shopping-card-one deals-of-day">

                                    <div class="image-and-action-area-wrapper">
                                        <a href="shop-details-2.html" class="thumbnail-preview">
                                            <img src="assets/images/grocery/image 8.png" alt="grocery">
                                        </a>
                                        <div class="onsale-offer">
                                            <span>25% Off</span>
                                        </div>
                                        <!-- <div class="action-share-option">
                                                    <div class="single-action openuptip message-show-action" data-flow="up" title="Add To Wishlist">
                                                        <i class="fa-light fa-heart"></i>
                                                    </div>
                                                    <div class="single-action openuptip" data-flow="up" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        <i class="fa-solid fa-arrows-retweet"></i>
                                                    </div>
                                                    <div class="single-action openuptip cta-quickview product-details-popup-btn" data-flow="up" title="Quick View">
                                                        <i class="fa-regular fa-eye"></i>
                                                    </div>
                                                </div> -->
                                    </div>
                                    <div class="body-content">

                                        <a href="shop-details-2.html">
                                            <h4 class="title">Xestle Cerelac Mixed Fruits &amp;
                                                Wheat with Milk</h4>
                                        </a>

                                        <!-- <span class="availability">500g Pack</span> -->
                                        <div class="price-area">
                                            <span class="current">$36.00</span>
                                            <div class="previous">$36.00</div>
                                            <div class="start-area-rating">
                                                <i class="fa-solid fa-star font-star-fa"></i>
                                                <i class="fa-solid fa-star font-star-fa"></i>
                                                <i class="fa-solid fa-star font-star-fa"></i>
                                                <i class="fa-solid fa-star font-star-fa"></i>
                                                <i class="fa-solid fa-star font-star-fa"></i>
                                            </div>
                                        </div>
                                        <div class="cart-counter-action">
                                            <a href="#" class="rts-btn ">
                                                <div class="btn-text">
                                                    Add to Cart
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-20 col-md-4 col-sm-6 col-12">
                                <div class="single-shopping-card-one deals-of-day">

                                    <div class="image-and-action-area-wrapper">
                                        <a href="shop-details-2.html" class="thumbnail-preview">
                                            <img src="assets/images/grocery/image 8.png" alt="grocery">
                                        </a>
                                        <div class="onsale-offer">
                                            <span>25% Off</span>
                                        </div>
                                        <!-- <div class="action-share-option">
                                                    <div class="single-action openuptip message-show-action" data-flow="up" title="Add To Wishlist">
                                                        <i class="fa-light fa-heart"></i>
                                                    </div>
                                                    <div class="single-action openuptip" data-flow="up" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        <i class="fa-solid fa-arrows-retweet"></i>
                                                    </div>
                                                    <div class="single-action openuptip cta-quickview product-details-popup-btn" data-flow="up" title="Quick View">
                                                        <i class="fa-regular fa-eye"></i>
                                                    </div>
                                                </div> -->
                                    </div>
                                    <div class="body-content">

                                        <a href="shop-details-2.html">
                                            <h4 class="title">Xestle Cerelac Mixed Fruits &amp;
                                                Wheat with Milk</h4>
                                        </a>

                                        <!-- <span class="availability">500g Pack</span> -->
                                        <div class="price-area">
                                            <span class="current">$36.00</span>
                                            <div class="previous">$36.00</div>
                                            <div class="start-area-rating">
                                                <i class="fa-solid fa-star font-star-fa"></i>
                                                <i class="fa-solid fa-star font-star-fa"></i>
                                                <i class="fa-solid fa-star font-star-fa"></i>
                                                <i class="fa-solid fa-star font-star-fa"></i>
                                                <i class="fa-solid fa-star font-star-fa"></i>
                                            </div>
                                        </div>
                                        <div class="cart-counter-action">
                                            <a href="#" class="rts-btn ">
                                                <div class="btn-text">
                                                    Add to Cart
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-20 col-md-4 col-sm-6 col-12">
                                <div class="single-shopping-card-one deals-of-day">

                                    <div class="image-and-action-area-wrapper">
                                        <a href="shop-details-2.html" class="thumbnail-preview">
                                            <img src="assets/images/grocery/image 8.png" alt="grocery">
                                        </a>
                                        <div class="onsale-offer">
                                            <span>25% Off</span>
                                        </div>
                                        <!-- <div class="action-share-option">
                                                    <div class="single-action openuptip message-show-action" data-flow="up" title="Add To Wishlist">
                                                        <i class="fa-light fa-heart"></i>
                                                    </div>
                                                    <div class="single-action openuptip" data-flow="up" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        <i class="fa-solid fa-arrows-retweet"></i>
                                                    </div>
                                                    <div class="single-action openuptip cta-quickview product-details-popup-btn" data-flow="up" title="Quick View">
                                                        <i class="fa-regular fa-eye"></i>
                                                    </div>
                                                </div> -->
                                    </div>
                                    <div class="body-content">

                                        <a href="shop-details-2.html">
                                            <h4 class="title">Xestle Cerelac Mixed Fruits &amp;
                                                Wheat with Milk</h4>
                                        </a>

                                        <!-- <span class="availability">500g Pack</span> -->
                                        <div class="price-area">
                                            <span class="current">$36.00</span>
                                            <div class="previous">$36.00</div>
                                            <div class="start-area-rating">
                                                <i class="fa-solid fa-star font-star-fa"></i>
                                                <i class="fa-solid fa-star font-star-fa"></i>
                                                <i class="fa-solid fa-star font-star-fa"></i>
                                                <i class="fa-solid fa-star font-star-fa"></i>
                                                <i class="fa-solid fa-star font-star-fa"></i>
                                            </div>
                                        </div>
                                        <div class="cart-counter-action">
                                            <a href="#" class="rts-btn ">
                                                <div class="btn-text">
                                                    Add to Cart
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-20 col-md-4 col-sm-6 col-12">
                                <div class="single-shopping-card-one deals-of-day">

                                    <div class="image-and-action-area-wrapper">
                                        <a href="shop-details-2.html" class="thumbnail-preview">
                                            <img src="assets/images/grocery/image 8.png" alt="grocery">
                                        </a>
                                        <div class="onsale-offer">
                                            <span>25% Off</span>
                                        </div>
                                        <!-- <div class="action-share-option">
                                                    <div class="single-action openuptip message-show-action" data-flow="up" title="Add To Wishlist">
                                                        <i class="fa-light fa-heart"></i>
                                                    </div>
                                                    <div class="single-action openuptip" data-flow="up" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        <i class="fa-solid fa-arrows-retweet"></i>
                                                    </div>
                                                    <div class="single-action openuptip cta-quickview product-details-popup-btn" data-flow="up" title="Quick View">
                                                        <i class="fa-regular fa-eye"></i>
                                                    </div>
                                                </div> -->
                                    </div>
                                    <div class="body-content">

                                        <a href="shop-details-2.html">
                                            <h4 class="title">Xestle Cerelac Mixed Fruits &amp;
                                                Wheat with Milk</h4>
                                        </a>

                                        <!-- <span class="availability">500g Pack</span> -->
                                        <div class="price-area">
                                            <span class="current">$36.00</span>
                                            <div class="previous">$36.00</div>
                                            <div class="start-area-rating">
                                                <i class="fa-solid fa-star font-star-fa"></i>
                                                <i class="fa-solid fa-star font-star-fa"></i>
                                                <i class="fa-solid fa-star font-star-fa"></i>
                                                <i class="fa-solid fa-star font-star-fa"></i>
                                                <i class="fa-solid fa-star font-star-fa"></i>
                                            </div>
                                        </div>
                                        <div class="cart-counter-action">
                                            <a href="#" class="rts-btn ">
                                                <div class="btn-text">
                                                    Add to Cart
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>




                        </div>
                    </div>
                    <!-- first tabs area start-->



                </div>
            </div>
        </div>
    </div>

    <div class="container-2 single-new-offer-area-border-weekly-selstyle mt--60">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-area-between mb--15">
                    <h2 class="title-left">
                        Our Features Product
                    </h2>
                    <ul class="nav nav-tabs best-selling-grocery" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tabz" data-bs-toggle="tab" data-bs-target="#home"
                                type="button" role="tab" aria-controls="home" aria-selected="false">View All</button>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="tab-content" id="myTabContentd">
                    <!-- first tabs area start-->
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tabz">
                        <div class="row g-4 mt--0">
                            <div class="col-lg-20 col-md-4 col-sm-6 col-12">
                                <div class="single-shopping-card-one deals-of-day">

                                    <div class="image-and-action-area-wrapper">
                                        <a href="shop-details-2.html" class="thumbnail-preview">
                                            <img src="assets/images/grocery/image 8.png" alt="grocery">
                                        </a>
                                        <div class="onsale-offer">
                                            <span>25% Off</span>
                                        </div>
                                        <!-- <div class="action-share-option">
                                                    <div class="single-action openuptip message-show-action" data-flow="up" title="Add To Wishlist">
                                                        <i class="fa-light fa-heart"></i>
                                                    </div>
                                                    <div class="single-action openuptip" data-flow="up" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        <i class="fa-solid fa-arrows-retweet"></i>
                                                    </div>
                                                    <div class="single-action openuptip cta-quickview product-details-popup-btn" data-flow="up" title="Quick View">
                                                        <i class="fa-regular fa-eye"></i>
                                                    </div>
                                                </div> -->
                                    </div>
                                    <div class="body-content">

                                        <a href="shop-details-2.html">
                                            <h4 class="title">Xestle Cerelac Mixed Fruits &amp;
                                                Wheat with Milk</h4>
                                        </a>

                                        <!-- <span class="availability">500g Pack</span> -->
                                        <div class="price-area">
                                            <span class="current">$36.00</span>
                                            <div class="previous">$36.00</div>
                                            <div class="start-area-rating">
                                                <i class="fa-solid fa-star font-star-fa"></i>
                                                <i class="fa-solid fa-star font-star-fa"></i>
                                                <i class="fa-solid fa-star font-star-fa"></i>
                                                <i class="fa-solid fa-star font-star-fa"></i>
                                                <i class="fa-solid fa-star font-star-fa"></i>
                                            </div>
                                        </div>
                                        <div class="cart-counter-action">
                                            <a href="#" class="rts-btn ">
                                                <div class="btn-text">
                                                    Add to Cart
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-20 col-md-4 col-sm-6 col-12">
                                <div class="single-shopping-card-one deals-of-day">

                                    <div class="image-and-action-area-wrapper">
                                        <a href="shop-details-2.html" class="thumbnail-preview">
                                            <img src="assets/images/grocery/image 8.png" alt="grocery">
                                        </a>
                                        <div class="onsale-offer">
                                            <span>25% Off</span>
                                        </div>
                                        <!-- <div class="action-share-option">
                                                    <div class="single-action openuptip message-show-action" data-flow="up" title="Add To Wishlist">
                                                        <i class="fa-light fa-heart"></i>
                                                    </div>
                                                    <div class="single-action openuptip" data-flow="up" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        <i class="fa-solid fa-arrows-retweet"></i>
                                                    </div>
                                                    <div class="single-action openuptip cta-quickview product-details-popup-btn" data-flow="up" title="Quick View">
                                                        <i class="fa-regular fa-eye"></i>
                                                    </div>
                                                </div> -->
                                    </div>
                                    <div class="body-content">

                                        <a href="shop-details-2.html">
                                            <h4 class="title">Xestle Cerelac Mixed Fruits &amp;
                                                Wheat with Milk</h4>
                                        </a>

                                        <!-- <span class="availability">500g Pack</span> -->
                                        <div class="price-area">
                                            <span class="current">$36.00</span>
                                            <div class="previous">$36.00</div>
                                            <div class="start-area-rating">
                                                <i class="fa-solid fa-star font-star-fa"></i>
                                                <i class="fa-solid fa-star font-star-fa"></i>
                                                <i class="fa-solid fa-star font-star-fa"></i>
                                                <i class="fa-solid fa-star font-star-fa"></i>
                                                <i class="fa-solid fa-star font-star-fa"></i>
                                            </div>
                                        </div>
                                        <div class="cart-counter-action">
                                            <a href="#" class="rts-btn ">
                                                <div class="btn-text">
                                                    Add to Cart
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-20 col-md-4 col-sm-6 col-12">
                                <div class="single-shopping-card-one deals-of-day">

                                    <div class="image-and-action-area-wrapper">
                                        <a href="shop-details-2.html" class="thumbnail-preview">
                                            <img src="assets/images/grocery/image 8.png" alt="grocery">
                                        </a>
                                        <div class="onsale-offer">
                                            <span>25% Off</span>
                                        </div>
                                        <!-- <div class="action-share-option">
                                                    <div class="single-action openuptip message-show-action" data-flow="up" title="Add To Wishlist">
                                                        <i class="fa-light fa-heart"></i>
                                                    </div>
                                                    <div class="single-action openuptip" data-flow="up" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        <i class="fa-solid fa-arrows-retweet"></i>
                                                    </div>
                                                    <div class="single-action openuptip cta-quickview product-details-popup-btn" data-flow="up" title="Quick View">
                                                        <i class="fa-regular fa-eye"></i>
                                                    </div>
                                                </div> -->
                                    </div>
                                    <div class="body-content">

                                        <a href="shop-details-2.html">
                                            <h4 class="title">Xestle Cerelac Mixed Fruits &amp;
                                                Wheat with Milk</h4>
                                        </a>

                                        <!-- <span class="availability">500g Pack</span> -->
                                        <div class="price-area">
                                            <span class="current">$36.00</span>
                                            <div class="previous">$36.00</div>
                                            <div class="start-area-rating">
                                                <i class="fa-solid fa-star font-star-fa"></i>
                                                <i class="fa-solid fa-star font-star-fa"></i>
                                                <i class="fa-solid fa-star font-star-fa"></i>
                                                <i class="fa-solid fa-star font-star-fa"></i>
                                                <i class="fa-solid fa-star font-star-fa"></i>
                                            </div>
                                        </div>
                                        <div class="cart-counter-action">
                                            <a href="#" class="rts-btn ">
                                                <div class="btn-text">
                                                    Add to Cart
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-20 col-md-4 col-sm-6 col-12">
                                <div class="single-shopping-card-one deals-of-day">

                                    <div class="image-and-action-area-wrapper">
                                        <a href="shop-details-2.html" class="thumbnail-preview">
                                            <img src="assets/images/grocery/image 8.png" alt="grocery">
                                        </a>
                                        <div class="onsale-offer">
                                            <span>25% Off</span>
                                        </div>
                                        <!-- <div class="action-share-option">
                                                    <div class="single-action openuptip message-show-action" data-flow="up" title="Add To Wishlist">
                                                        <i class="fa-light fa-heart"></i>
                                                    </div>
                                                    <div class="single-action openuptip" data-flow="up" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        <i class="fa-solid fa-arrows-retweet"></i>
                                                    </div>
                                                    <div class="single-action openuptip cta-quickview product-details-popup-btn" data-flow="up" title="Quick View">
                                                        <i class="fa-regular fa-eye"></i>
                                                    </div>
                                                </div> -->
                                    </div>
                                    <div class="body-content">

                                        <a href="shop-details-2.html">
                                            <h4 class="title">Xestle Cerelac Mixed Fruits &amp;
                                                Wheat with Milk</h4>
                                        </a>

                                        <!-- <span class="availability">500g Pack</span> -->
                                        <div class="price-area">
                                            <span class="current">$36.00</span>
                                            <div class="previous">$36.00</div>
                                            <div class="start-area-rating">
                                                <i class="fa-solid fa-star font-star-fa"></i>
                                                <i class="fa-solid fa-star font-star-fa"></i>
                                                <i class="fa-solid fa-star font-star-fa"></i>
                                                <i class="fa-solid fa-star font-star-fa"></i>
                                                <i class="fa-solid fa-star font-star-fa"></i>
                                            </div>
                                        </div>
                                        <div class="cart-counter-action">
                                            <a href="#" class="rts-btn ">
                                                <div class="btn-text">
                                                    Add to Cart
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-20 col-md-4 col-sm-6 col-12">
                                <div class="single-shopping-card-one deals-of-day">

                                    <div class="image-and-action-area-wrapper">
                                        <a href="shop-details-2.html" class="thumbnail-preview">
                                            <img src="assets/images/grocery/image 8.png" alt="grocery">
                                        </a>
                                        <div class="onsale-offer">
                                            <span>25% Off</span>
                                        </div>
                                        <!-- <div class="action-share-option">
                                                    <div class="single-action openuptip message-show-action" data-flow="up" title="Add To Wishlist">
                                                        <i class="fa-light fa-heart"></i>
                                                    </div>
                                                    <div class="single-action openuptip" data-flow="up" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        <i class="fa-solid fa-arrows-retweet"></i>
                                                    </div>
                                                    <div class="single-action openuptip cta-quickview product-details-popup-btn" data-flow="up" title="Quick View">
                                                        <i class="fa-regular fa-eye"></i>
                                                    </div>
                                                </div> -->
                                    </div>
                                    <div class="body-content">

                                        <a href="shop-details-2.html">
                                            <h4 class="title">Xestle Cerelac Mixed Fruits &amp;
                                                Wheat with Milk</h4>
                                        </a>

                                        <!-- <span class="availability">500g Pack</span> -->
                                        <div class="price-area">
                                            <span class="current">$36.00</span>
                                            <div class="previous">$36.00</div>
                                            <div class="start-area-rating">
                                                <i class="fa-solid fa-star font-star-fa"></i>
                                                <i class="fa-solid fa-star font-star-fa"></i>
                                                <i class="fa-solid fa-star font-star-fa"></i>
                                                <i class="fa-solid fa-star font-star-fa"></i>
                                                <i class="fa-solid fa-star font-star-fa"></i>
                                            </div>
                                        </div>
                                        <div class="cart-counter-action">
                                            <a href="#" class="rts-btn ">
                                                <div class="btn-text">
                                                    Add to Cart
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-20 col-md-4 col-sm-6 col-12">
                                <div class="single-shopping-card-one deals-of-day">

                                    <div class="image-and-action-area-wrapper">
                                        <a href="shop-details-2.html" class="thumbnail-preview">
                                            <img src="assets/images/grocery/image 8.png" alt="grocery">
                                        </a>
                                        <div class="onsale-offer">
                                            <span>25% Off</span>
                                        </div>
                                        <!-- <div class="action-share-option">
                                                    <div class="single-action openuptip message-show-action" data-flow="up" title="Add To Wishlist">
                                                        <i class="fa-light fa-heart"></i>
                                                    </div>
                                                    <div class="single-action openuptip" data-flow="up" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        <i class="fa-solid fa-arrows-retweet"></i>
                                                    </div>
                                                    <div class="single-action openuptip cta-quickview product-details-popup-btn" data-flow="up" title="Quick View">
                                                        <i class="fa-regular fa-eye"></i>
                                                    </div>
                                                </div> -->
                                    </div>
                                    <div class="body-content">

                                        <a href="shop-details-2.html">
                                            <h4 class="title">Xestle Cerelac Mixed Fruits &amp;
                                                Wheat with Milk</h4>
                                        </a>

                                        <!-- <span class="availability">500g Pack</span> -->
                                        <div class="price-area">
                                            <span class="current">$36.00</span>
                                            <div class="previous">$36.00</div>
                                            <div class="start-area-rating">
                                                <i class="fa-solid fa-star font-star-fa"></i>
                                                <i class="fa-solid fa-star font-star-fa"></i>
                                                <i class="fa-solid fa-star font-star-fa"></i>
                                                <i class="fa-solid fa-star font-star-fa"></i>
                                                <i class="fa-solid fa-star font-star-fa"></i>
                                            </div>
                                        </div>
                                        <div class="cart-counter-action">
                                            <a href="#" class="rts-btn ">
                                                <div class="btn-text">
                                                    Add to Cart
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>




                        </div>
                    </div>
                    <!-- first tabs area start-->


                </div>
            </div>
        </div>
    </div>

    <!-- modal -->
    <div id="myModal-1" class="modal fade" role="dialog">
        <div class="modal-dialog bg_image">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-bs-dismiss="modal"><i class="fa-light fa-x"></i></button>
                </div>
                <div class="modal-body text-center">
                    <div class="inner-content">
                        <div class="content">
                            <span class="pre-title">Get up to 30% off on your first $150 purchase</span>
                            <h1 class="title">Feed Your Family at the <br>
                                Best Price</h1>
                            <p class="disc">
                                We have prepared special discounts for you on grocery products. Don't <br> miss these
                                opportunities...
                            </p>
                            <div class="rts-btn-banner-area">
                                <a href="#" class="rts-btn btn-primary radious-sm with-icon">
                                    <div class="btn-text">
                                        Shop Now
                                    </div>
                                    <div class="arrow-icon">
                                        <i class="fa-light fa-arrow-right"></i>
                                    </div>
                                    <div class="arrow-icon">
                                        <i class="fa-light fa-arrow-right"></i>
                                    </div>
                                </a>
                                <div class="price-area">
                                    <span>
                                        from
                                    </span>
                                    <h3 class="title animated fadeIn">$80.99</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('frontend/home/cart-popup')
    <!-- cart popup -->
    {{--<div class="product-details-popup-wrapper">
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


                                            <div class="single-cart-area-list main  item-parent">
                                                <div class="product-main-cart">

                                                    <div class="thumbnail">
                                                        <img src="assets/images/shop/02.png" alt="shop"
                                                            style="width: 120px; height: 120px;">
                                                    </div>
                                                    <div class="information" style="width:100%;">
                                                        <h6 class="title" style="padding: 2px 2px;">SunChips Minis,
                                                            Garden
                                                            Salsa
                                                            Flavored Canister, Multigrain Chips</h6>
                                                        <div class="price">
                                                            <p style="padding: 2px 2px;">$550.00</p>
                                                        </div>
                                                        <div class="price">
                                                            <p style="padding: 2px 2px;">Color</p>
                                                        </div>
                                                        <div class="price">
                                                            <div class="row" style="padding:2px 2px;">
                                                                <p style="width: 35%">Product Quantity </p>
                                                                <div class="input-container">
                                                                    <div id="minus">-</div>
                                                                    <input type="text" id="number" value="0"
                                                                        style="background: #1A5172; color: #fff; text-align: center;">
                                                                    <div id="plus">+</div>

                                                                </div>
                                                                <div class="col-3" style="width: 40%; ">
                                                                    <span style="padding-left: 50px;float: right;">
                                                                        <button class="section-activation"
                                                                            style="width: 100px;height: 30px; color: #ff0000; border: 1px solid #000;"><i
                                                                                class="fa fa-trash"
                                                                                style="color: #ff0000 !important;"></i>
                                                                            Remove</button>

                                                                    </span>

                                                                </div>


                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="single-cart-area-list main  item-parent">
                                                <div class="product-main-cart">

                                                    <div class="thumbnail">
                                                        <img src="assets/images/shop/02.png" alt="shop"
                                                            style="width: 120px; height: 120px;">
                                                    </div>
                                                    <div class="information" style="width:100%;">
                                                        <h6 class="title" style="padding: 2px 2px;">SunChips Minis,
                                                            Garden
                                                            Salsa
                                                            Flavored Canister, Multigrain Chips</h6>
                                                        <div class="price">
                                                            <p style="padding: 2px 2px;">$550.00</p>
                                                        </div>
                                                        <div class="price">
                                                            <p style="padding: 2px 2px;">Color</p>
                                                        </div>
                                                        <div class="price">
                                                            <div class="row" style="padding:2px 2px;">
                                                                <p style="width: 35%">Product Quantity </p>
                                                                <div class="input-container">
                                                                    <div id="minus">-</div>
                                                                    <input type="text" id="number" value="0"
                                                                        style="background: #1A5172; color: #fff; text-align: center;">
                                                                    <div id="plus">+</div>

                                                                </div>
                                                                <div class="col-3" style="width: 40%; ">
                                                                    <span style="padding-left: 50px;float: right;">
                                                                        <button class="section-activation"
                                                                            style="width: 100px;height: 30px; color: #ff0000; border: 1px solid #000;"><i
                                                                                class="fa fa-trash"
                                                                                style="color: #ff0000 !important;"></i>
                                                                            Remove</button>

                                                                    </span>

                                                                </div>


                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="single-cart-area-list main  item-parent">
                                                <div class="product-main-cart">

                                                    <div class="thumbnail">
                                                        <img src="assets/images/shop/02.png" alt="shop"
                                                            style="width: 120px; height: 120px;">
                                                    </div>
                                                    <div class="information" style="width:100%;">
                                                        <h6 class="title" style="padding: 2px 2px;">SunChips Minis,
                                                            Garden
                                                            Salsa
                                                            Flavored Canister, Multigrain Chips</h6>
                                                        <div class="price">
                                                            <p style="padding: 2px 2px;">$550.00</p>
                                                        </div>
                                                        <div class="price">
                                                            <p style="padding: 2px 2px;">Color</p>
                                                        </div>
                                                        <div class="price">
                                                            <div class="row" style="padding:2px 2px;">
                                                                <p style="width: 35%">Product Quantity </p>
                                                                <div class="input-container">
                                                                    <div id="minus">-</div>
                                                                    <input type="text" id="number" value="0"
                                                                        style="background: #1A5172; color: #fff; text-align: center;">
                                                                    <div id="plus">+</div>

                                                                </div>
                                                                <div class="col-3" style="width: 40%; ">
                                                                    <span style="padding-left: 50px;float: right;">
                                                                        <button class="section-activation"
                                                                            style="width: 100px;height: 30px; color: #ff0000; border: 1px solid #000;"><i
                                                                                class="fa fa-trash"
                                                                                style="color: #ff0000 !important;"></i>
                                                                            Remove</button>

                                                                    </span>

                                                                </div>


                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="single-cart-area-list main  item-parent">
                                                <div class="product-main-cart">

                                                    <div class="thumbnail">
                                                        <img src="assets/images/shop/02.png" alt="shop"
                                                            style="width: 120px; height: 120px;">
                                                    </div>
                                                    <div class="information" style="width:100%;">
                                                        <h6 class="title" style="padding: 2px 2px;">SunChips Minis,
                                                            Garden
                                                            Salsa
                                                            Flavored Canister, Multigrain Chips</h6>
                                                        <div class="price">
                                                            <p style="padding: 2px 2px;">$550.00</p>
                                                        </div>
                                                        <div class="price">
                                                            <p style="padding: 2px 2px;">Color</p>
                                                        </div>
                                                        <div class="price">
                                                            <div class="row" style="padding:2px 2px;">
                                                                <p style="width: 35%">Product Quantity </p>
                                                                <div class="input-container">
                                                                    <div id="minus">-</div>
                                                                    <input type="text" id="number" value="0"
                                                                        style="background: #1A5172; color: #fff; text-align: center;">
                                                                    <div id="plus">+</div>

                                                                </div>
                                                                <div class="col-3" style="width: 40%; ">
                                                                    <span style="padding-left: 50px;float: right;">
                                                                        <button class="section-activation"
                                                                            style="width: 100px;height: 30px; color: #ff0000; border: 1px solid #000;"><i
                                                                                class="fa fa-trash"
                                                                                style="color: #ff0000 !important;"></i>
                                                                            Remove</button>

                                                                    </span>

                                                                </div>


                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
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
                        <a href="#" class="rts-btn btn-primary ">Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>--}}
    @endsection
    @section('script')

    <script defer src="{{ asset('productAssets/js/plugins.js') }}"></script>

    <!-- custom js -->
    <script defer src="{{ asset('productAssets/js/main.js') }}"></script>
    <!-- header style two End -->



        <!--===============================================================================================-->
        <script src="{{ asset('frontend/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
        <!--===============================================================================================-->
        <script src="{{ asset('frontend/vendor/animsition/js/animsition.min.js') }}"></script>
        <!--===============================================================================================-->
        <script src="{{ asset('frontend/vendor/bootstrap/js/popper.js') }}"></script>
        <script src="{{ asset('frontend/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
        <!--===============================================================================================-->
        <script src="{{ asset('frontend/vendor/select2/select2.min.js') }}"></script>
        <script>
            $(".js-select2").each(function() {
                $(this).select2({
                    minimumResultsForSearch: 20,
                    dropdownParent: $(this).next('.dropDownSelect2')
                });
            })
        </script>
        <!--===============================================================================================-->
        <script src="{{ asset('frontend/vendor/daterangepicker/moment.min.js') }}"></script>
        <script src="{{ asset('frontend/vendor/daterangepicker/daterangepicker.js') }}"></script>
        <!--===============================================================================================-->
        <script src="{{ asset('frontend/vendor/slick/slick.min.js') }}"></script>
        <script src="{{ asset('frontend/js/slick-custom.js') }}"></script>
        <!--===============================================================================================-->
        <script src="{{ asset('frontend/vendor/parallax100/parallax100.js') }}"></script>
        <script>
            $('.parallax100').parallax100();
        </script>
        <!--===============================================================================================-->
        <script src="{{ asset('frontend/vendor/MagnificPopup/jquery.magnific-popup.min.js') }}"></script>
        <script>
            $('.gallery-lb').each(function() { // the containers for all your galleries
                $(this).magnificPopup({
                    delegate: 'a', // the selector for gallery item
                    type: 'image',
                    gallery: {
                        enabled: true
                    },
                    mainClass: 'mfp-fade'
                });
            });
        </script>
        <!--===============================================================================================-->
        <script src="{{ asset('frontend/vendor/isotope/isotope.pkgd.min.js') }}"></script>
        <!--===============================================================================================-->
        <script src="{{ asset('frontend/vendor/sweetalert/sweetalert.min.js') }}"></script>
        <script>
            $('.js-addwish-b2, .js-addwish-detail').on('click', function(e) {
                e.preventDefault();
            });

            $('.js-addwish-b2').each(function() {
                var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
                $(this).on('click', function() {
                    swal(nameProduct, "is added to wishlist !", "success");

                    $(this).addClass('js-addedwish-b2');
                    $(this).off('click');
                });
            });

            $('.js-addwish-detail').each(function() {
                var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

                $(this).on('click', function() {
                    swal(nameProduct, "is added to wishlist !", "success");

                    $(this).addClass('js-addedwish-detail');
                    $(this).off('click');
                });
            });

            /*---------------------------------------------*/

            $('.js-addcart-detail').each(function() {
                var nameProduct = $(this).parent().parent().parent().parent().parent().find('.js-name-detail').html();
                $(this).on('click', function() {
                    swal(nameProduct, "is added to cart !", "success");
                });
            });
        </script>
        <!--===============================================================================================-->
        <script src="{{ asset('frontend/vendor/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
        <script>
            $('.js-pscroll').each(function() {
                $(this).css('position', 'relative');
                $(this).css('overflow', 'hidden');
                var ps = new PerfectScrollbar(this, {
                    wheelSpeed: 1,
                    scrollingThreshold: 1000,
                    wheelPropagation: false,
                });

                $(window).on('resize', function() {
                    ps.update();
                })
            });
        </script>
        <!--===============================================================================================-->
        <script src="{{ asset('frontend/js/main.js') }}"></script>
        <script>
            function changeQty(index, qty) {

                var cartItems = pullObjectFromStorage('cartItems')

                let quantity = parseInt(cartItems[index].qty)
                quantity += qty

                if (quantity == 0 || quantity == 1) {
                    quantity = 1
                    $("#cartMinus").addClass("text-disabled")
                }

                if (quantity > 1) {
                    $("#cartMinus").removeClass("text-disabled")
                }
                $(".cartQty").html(quantity)
                cartItems[index].qty = quantity
                pushObjectToStorage('cartItems', cartItems)
                renderCartUi(cartItems)

            }


            $(document).ready(function() {
                var cartItems = pullObjectFromStorage('cartItems')
                $("#itemCounts").html(cartItems.length + " items")
                renderCartUi(cartItems)
            })

            function renderCartUi(cartItems) {
                $("#cartDetails").empty();

                let subtotal = 0;
                // Loop through cartItems and create HTML for each item
                cartItems.forEach(function(item, index) {
                    subtotal += parseFloat(item.qty) * parseFloat(item.productPrice);

                    let singleCartItem = $('<tr class="table_row">' +
                        '<td class="column-1">' +
                        '<div class="how-itemcart1">' +
                        '<img src="https://images.unsplash.com/photo-1669055110073-6099dcb0a734?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Njd8fHBhY2tlZCUyMHNocml0fGVufDB8fDB8fHww" alt="IMG">' +
                        '</div>' +
                        '</td>' +
                        '<td class="column-2"><p>' + item.productName + '</p><p style="font-size: 0.8rem">Size: ' +
                        item.size + '<br/> Color: ' + item.color + '</p></td>' +
                        '<td class="column-3">' + parseFloat(item.productPrice).toFixed(2) + '</td>' +
                        '<td class="column-4">' +
                        '<div class="wrap-num-product flex-w m-l-auto m-r-0">' +
                        '<div onclick="changeQty(' + index +
                        ', -1)" id="cartMinus" class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">' +
                        '<i class="fs-16 zmdi zmdi-minus"></i>' +
                        '</div>' +

                        '<input class="cart-qty mtext-104 cl3 txt-center num-product" type="number" name="num-product1" value="' +
                        item.qty + '">' +

                        '<div onclick="changeQty(' + index +
                        ', 1)" class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">' +
                        '<i class="fs-16 zmdi zmdi-plus"></i>' +
                        '</div>' +
                        '</div>' +
                        '</td>' +
                        '<td class="column-5">' + parseFloat(item.qty * parseFloat(item.productPrice)).toFixed(2) +
                        '</td>' +
                        '</tr>');

                    // Append the created HTML to the #cartDetails div
                    $("#cartDetails").append(singleCartItem);
                });

                $("#total-amount").html(subtotal)
            }

            $(document).on("click", ".fa-times", function() {
                // Get the index of the item to be removed
                let indexToRemove = $(this).closest('.single-cart-item').index();

                var cartItems = pullObjectFromStorage('cartItems')
                // Remove the item from cartItems array
                cartItems.splice(indexToRemove, 1);
                pushObjectToStorage('cartItems', cartItems)
                renderCartUi(cartItems)

                var newCartItems = pullObjectFromStorage('cartItems')
                $("#top-cart-count").html(newCartItems.length)
            })
        </script>
    @endsection
