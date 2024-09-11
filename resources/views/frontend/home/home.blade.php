@extends('frontend.layout.parent')
@section('title', 'Home')

@section('content')
    
    <div id="side-bar" class="side-bar header-two">
    <button class="close-icon-menu"><i class="far fa-times"></i></button>


    <form action="#" class="search-input-area-menu mt--30">
        <input type="text" placeholder="Search..." required>
        <button><i class="fa-light fa-magnifying-glass"></i></button>
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
                                            <li><a href="product-detail.html"></a>Shop Details 2</li>
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
                                            <li><a href="{{route('shopping_cart')}}"></a>Cart</li>
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
<div class="banner-three-swiper-main-wrapper" >
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
                    <!-- rts banner area start -->
                  
        <div class="rts-section-gap rts-banner-area-three banner-bg-full_1">
            @foreach ($mainSliders as $slider)
            <img src="{{ $slider->image }}" alt="" style="width: 33.33%; ">
            @endforeach
            {{-- <img src="{{ asset('sliders/rNFV8qjrPy1720855371.jpg') }}" alt="" style="width: 33.33%; "> --}}
                    </div>
                    <!-- rts banner area end -->
                </div>
                </tr>
              
                </div>
                <!-- single swiper start -->
                 <button class="swiper-button-next"><i class="fa-regular fa-chevron-right"></i></button>
                 <button class="swiper-button-prev"><i class="fa-regular fa-chevron-left"></i></button>
            </div>
        
        </div>
    </div>

    @if($best_seller_products)
    <div class="container-2 single-new-offer-area-border-weekly-selstyle mt--60">
            <div class="row">
            {{-- @foreach($products as $product) --}}
                <div class="col-lg-12">
              
                    <div class="title-area-between mb--15">
                   
                        <h2 class="title-left">
                            Best Selling Products
                        </h2>
                        <ul class="nav nav-tabs best-selling-grocery" id="myTab" role="tablist">
                            
                            <li class="nav-item" role="presentation">
                            <!-- <a href="{{route('products.all')}}"  class="nav-link active" id="home-tabz" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="false">View All</a> -->

                            <a href="{{route('product.all','best-selling-products')}}" class="btn btn-primary">View All</a> 
                            </li>
                            
                        </ul>
                       
                    </div>
                    
                </div>
                {{-- @endforeach --}}
            </div>
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="tab-content" id="myTabContentd">
                        <!-- first tabs area start-->
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tabz">
                            <div class="row g-4 mt--0">
                                @foreach ($best_seller_products as $product)
                                <div class="col-lg-20 col-md-4 col-sm-6 col-12">
                                    <div class="single-shopping-card-one deals-of-day">
                                        
                                        <div class="image-and-action-area-wrapper">
                                                <a href="{{route('product-details',$product->id)}}" class="thumbnail-preview">
                                                    <img src="{{ $product->image }}" alt="grocery">
                                                </a>
                                                <div class="onsale-offer">
                                                    <span>{{ $product->sale_off}}</span>
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
                                            
                                            <a href="product-detail.html">
                                                <h4 class="title">{{ $product->name }}</h4>
                                            </a>
                                            
                                            <!-- <span class="availability">500g Pack</span> -->
                                            <div class="price-area">
                                                @if($product->sale_off==1)
                                                <span class="current">{{ $product->min_price*.75}}</span>
                                                <div class="previous">{{ $product->min_price}}</div>
                                                @else
                                                <div class="current">{{ $product->min_price}}</div>
                                                @endif
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
                                @endforeach
                                
                                
                                
                                
                                
                                
                            </div>
                        </div>
                        <!-- first tabs area start-->

                        

                    </div>
                </div>
            </div>
            

            
        </div>
    @endif

    @if($featured_products)
    <div class="container-2 single-new-offer-area-border-weekly-selstyle mt--60">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-area-between mb--15">
                        <h2 class="title-left">
                            Featured Products
                        </h2>
                        <ul class="nav nav-tabs best-selling-grocery" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                              <!-- <button class="nav-link active" id="home-tabz" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="false">View All</button> -->
                               
                              <a href="{{route('product.all','featured-products')}}" class="btn btn-primary">View All</a>  
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
                                @foreach ($featured_products as $product)
                                <div class="col-lg-20 col-md-4 col-sm-6 col-12">
                                    <div class="single-shopping-card-one deals-of-day">
                                        
                                        <div class="image-and-action-area-wrapper">
                                <a href="{{route('product-details',$product->id)}}" class="thumbnail-preview">
                                                    <img src="{{ $product->image }}" alt="grocery">
                                                </a>
                                                <div class="onsale-offer">
                                                    <span>{{ $product->sale_off}}</span>
                                                </div>
                                         
                                        </div>
                                        <div class="body-content">
                                            
                                            <a href="product-detail.html">
                                                <h4 class="title">{{ $product->name }}</h4>
                                            </a>
                                            
                                            <!-- <span class="availability">500g Pack</span> -->
                                            <div class="price-area">
                                            @if($product->sale_off==1)
                                                <span class="current">{{ $product->min_price*.75}}</span>
                                                <div class="previous">{{ $product->min_price}}</div>
                                                @else
                                                <div class="current">{{ $product->min_price}}</div>
                                                @endif
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
                                @endforeach
                                
                                
                                
                                
                                
                                
                            </div>
                        </div>
                        <!-- first tabs area start-->

                        

                    </div>
                </div>
            </div>
            

            
        </div>
     @endif
   



  
     @if($food_health)
    <div class="container-2 single-new-offer-area-border-weekly-selstyle mt--60">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-area-between mb--15">
                        <h2 class="title-left">
                         Food/healthitem
                           <!-- Oksem Cook -->
                          {{-- {{$category->name}} --}}
                        </h2>
                        <ul class="nav nav-tabs best-selling-grocery" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                              <!-- <button class="nav-link active" id="home-tabz" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="false">View All</button> -->
                              <a href="{{route('product.all','food-health')}}" class="btn btn-primary">View All</a> 
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
                             
                                @foreach($food_health as $product)
                                <div class="col-lg-20 col-md-4 col-sm-6 col-12">
                                    <div class="single-shopping-card-one deals-of-day">
                                        
                                        <div class="image-and-action-area-wrapper">
                                                <a href="product-detail.html" class="thumbnail-preview">
                                                    <img src="{{ $product->image }}" alt="grocery">
                                                </a>
                                                <div class="onsale-offer">
                                                    <!-- <span>25% Off</span> -->
                                                    <span>{{ $product->sale_off}}</span>
                                                </div>
                                        
                                        </div>
                                        <div class="body-content">
                                            
                                            <a href="product-detail.html">
                                                <h4 class="title">{{ $product->name }}</h4>
                                            </a>
                                            
                                            <!-- <span class="availability">500g Pack</span> -->
                                            <div class="price-area">
                                                @if($product->sale_off==1)
                                                    <span class="current">{{ $product->min_price*.75}}</span>
                                                    <div class="previous">{{ $product->min_price}}</div>
                                                @else
                                                    <div class="current">{{ $product->min_price}}</div>
                                                @endif
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
                                @endforeach
                                
                                
                                
                                
                                
                                
                            </div>
                        </div>
                        <!-- first tabs area start-->

                        

                    </div>
                </div>
            </div>
            

            
        </div>
    @endif






@endsection
