@extends('frontend.layout.parent')
@section('title', "$product->name")

@section('style')
    <!-- new 14.07.24 -->
     
    <!-- plugins css -->
    <link rel="stylesheet preload" href="{{ asset('productAssets/css/plugins.css')}}" as="style">
    <link rel="stylesheet preload" href="{{ asset('productAssets/css/style.css')}}" as="style">
    <!-- end new 14.07.24 -->
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
        <!-- breadcrumb -->
        <div class="container">
            <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
                <!-- <a href="index.html" class="stext-109 cl8 hov-cl1 trans-04">
                    Home
                    <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
                </a>

                <a href="product.html" class="stext-109 cl8 hov-cl1 trans-04">
                    Men
                    <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
                </a> -->

                <span class="stext-109 cl4">
                    {{ $product->name }}
                </span>
            </div>
        </div>
        
    <!-- product-details new dynamic -->
    <div class="rts-chop-details-area rts-section-gap bg_light-1" style="transform: none;">
        <div class="container" style="transform: none;">
            <div class="shopdetails-style-1-wrapper" style="transform: none;">
                <div class="row g-5" style="transform: none;">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="product-details-popup-wrapper in-shopdetails">
                            <div class="rts-product-details-section rts-product-details-section2 product-details-popup-section">
                                <div class="product-details-popup">
                                    <div class="details-product-area">
                                        <div class="product-thumb-area">
                                            <div class="cursor"></div>
                                            <div class="thumb-wrapper one filterd-items figure">
                                                <div class="product-thumb zoom" onmousemove="zoom(event)" style="background-image: url({{ asset('productAssets/images/shop/01.jpg')}}; background-position: 71.3333% 0.225734%;">
                                                    <img src="{{ asset($product->image) }}" alt="product-thumb">
                                                </div>
                                            </div>
                                            <div class="thumb-wrapper two filterd-items hide">
                                                <div class="product-thumb zoom" onmousemove="zoom(event)" style="background-image: url({{ asset('productAssets/images/shop/02.jpg')}}">
                                                    <img src="{{ asset('productAssets/images/shop/02.png')}}" alt="product-thumb">
                                                </div>
                                            </div>
                                            <div class="thumb-wrapper three filterd-items hide">
                                                <div class="product-thumb zoom" onmousemove="zoom(event)" style="background-image: url({{ asset('productAssets/images/shop/03.jpg')}}">
                                                    <img src="({{ asset('productAssets/images/shop/03.png')}}" alt="product-thumb">
                                                </div>
                                            </div>
                                            <div class="thumb-wrapper four filterd-items hide">
                                                <div class="product-thumb zoom" onmousemove="zoom(event)" style="background-image: url(assets/images/shop/04.jpg)">
                                                    <img src="assets/images/shop/04.png" alt="product-thumb">
                                                </div>
                                            </div>
                                            <div class="thumb-wrapper five filterd-items hide">
                                                <div class="product-thumb zoom" onmousemove="zoom(event)" style="background-image: url(assets/images/shop/05.jpg)">
                                                    <img src="assets/images/shop/05.png" alt="product-thumb">
                                                </div>
                                            </div>
                                            <div class="product-thumb-filter-group">
                                                <div class="thumb-filter filter-btn active" data-show=".one">
                                                    <img src="assets/images/shop/01.png" alt="product-thumb-filter"></div>

                                                <div class="thumb-filter filter-btn" data-show=".two">
                                                    <img src="assets/images/shop/02.png" alt="product-thumb-filter"></div>

                                                <div class="thumb-filter filter-btn" data-show=".three">
                                                    <img src="assets/images/shop/03.png" alt="product-thumb-filter"></div>

                                                <div class="thumb-filter filter-btn" data-show=".four">
                                                    <img src="assets/images/shop/04.png" alt="product-thumb-filter"></div>

                                                <div class="thumb-filter filter-btn" data-show=".five">
                                                    <img src="assets/images/shop/05.png" alt="product-thumb-filter"></div>
                                            </div>
                                        </div>
                                        <div class="contents">
                                            
                                            <h2 class="product-title">Kitchen Fade Defy PLUG Air Freshener</h2>
                                            <div class="product-status">
                                                <!-- <span class="product-catagory">Dress</span> -->
                                                <div class="rating-stars-group">
                                                    <div class="rating-star"><i class="fas fa-star"></i></div>
                                                    <div class="rating-star"><i class="fas fa-star"></i></div>
                                                    <div class="rating-star"><i class="fas fa-star-half-alt"></i></div>
                                                    <span>10 Reviews</span>
                                                </div>
                                            </div>
                                           
                                            <div class="product-uniques row">
                                                <!-- <span class="tags product-unipue mb--10"> -->
                                                <div class="col-4">
                                                    <span style="font-weight: 400; margin-right: 10px;">Membership: </span>
                                                </div>
                                                <div class="col-8" >
                                                    <span style="font-weight: 400; margin-right: 10px; float: right;"> BO1D0MX8SJ</span>
                                                </div>
                                            </div>
                                            <div class="product-uniques row">
                                                <!-- <span class="tags product-unipue mb--10"> -->
                                                <div class="col-4">
                                                    <span style="font-weight: 400; margin-right: 10px;">S PAY Payment ratio: </span>
                                                </div>
                                                <div class="col-8" >
                                                    <span style="font-weight: 400; margin-right: 10px; float: right;"> BO1D0MX8SJ</span>
                                                </div>
                                            </div>
                                            <div class="product-uniques row">
                                                <!-- <span class="tags product-unipue mb--10"> -->
                                                <div class="col-4">
                                                    <span style="font-weight: 400; margin-right: 10px;">Cash Payment ratio: </span>
                                                </div>
                                                <div class="col-8" >
                                                    <span style="font-weight: 400; margin-right: 10px; float: right;"> BO1D0MX8SJ</span>
                                                </div>
                                            </div>
                                            <div class="product-uniques row">
                                                <!-- <span class="tags product-unipue mb--10"> -->
                                                <div class="col-4">
                                                    <span style="font-weight: 400; margin-right: 10px;">Product Number : </span>
                                                </div>
                                                <div class="col-8" >
                                                    <span style="font-weight: 400; margin-right: 10px; float: right;"> BO1D0MX8SJ</span>
                                                </div>
                                            </div>
                                                                                        <div class="product-uniques row">
                                                <!-- <span class="tags product-unipue mb--10"> -->
                                                <div class="col-4">
                                                    <span style="font-weight: 400; margin-right: 10px;">Shipping Cost : </span>
                                                </div>
                                                <div class="col-8" >
                                                    <span style="font-weight: 400; margin-right: 10px; float: right;"> BO1D0MX8SJ</span>
                                                </div>
                                            </div>
                                                                                        <div class="product-uniques row">
                                                <!-- <span class="tags product-unipue mb--10"> -->
                                                <div class="col-4">
                                                    <span style="font-weight: 400; margin-right: 10px;">Size: </span>
                                                </div>
                                                <div class="col-8" >
                                                    <span style="font-weight: 400; margin-right: 10px; float: right;"> BO1D0MX8SJ</span>
                                                </div>
                                            </div>
                                            <div class="product-uniques row">
                                                <!-- <span class="tags product-unipue mb--10"> -->
                                                <div class="col-4">
                                                    <span style="font-weight: 400; margin-right: 10px;">Color : </span>
                                                </div>
                                                <div class="col-8" >
                                                    <span style="font-weight: 400; margin-right: 10px; float: right;"> BO1D0MX8SJ</span>
                                                </div>
                                            </div>
                                            <div class="product-uniques row">
                                                <!-- <span class="tags product-unipue mb--10"> -->
                                                <div class="col-4">
                                                    <span style="font-weight: 400; margin-right: 10px;">Product Quantity: </span>
                                                </div>
                                                <div class="col-8" >
                                                    <div class="input-container">
                                                        <div id="minus">-</div>
                                                        <input type="text" id="number" value="0" style="background: #1A5172; color: #fff;">
                                                        <div id="plus">+</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-uniques row">
                                                <!-- <span class="tags product-unipue mb--10"> -->
                                                <div class="col-6">
                                                   <a href="#" class="rts-btn btn-addtocart radious-sm with-icon">
                                                    <div class="btn-text">
                                                        Add To Cart
                                                    </div>
                                                    <!-- <div class="arrow-icon">
                                                        <i class="fa-regular fa-cart-shopping"></i>
                                                    </div>
                                                    <div class="arrow-icon">
                                                        <i class="fa-regular fa-cart-shopping"></i>
                                                    </div> -->
                                                </a>
                                                </div>
                                                <div class="col-6" >
                                                    <a href="#" class="rts-btn btn-buynow radious-sm with-icon">
                                                    <div class="btn-text">
                                                        Buy Now
                                                    </div>
                                                    <!-- <div class="arrow-icon">
                                                        <i class="fa-regular fa-cart-shopping"></i>
                                                    </div>
                                                    <div class="arrow-icon">
                                                        <i class="fa-regular fa-cart-shopping"></i>
                                                    </div> -->
                                                </a>
                                                </div>
                                            </div>
                                               
                                            
                                            <div class="share-option-shop-details">
                                                <div class="single-share-option">
                                                    <div class="icon">
                                                        <i class="fa-regular fa-heart"></i>
                                                    </div>
                                                    <span>Add To Wishlist</span>
                                                </div>
                                                <div class="single-share-option">
                                                    <div class="icon">
                                                        <i class="fa-solid fa-share"></i>
                                                    </div>
                                                    <span>Share On social</span>
                                                </div>
                                                <div class="single-share-option">
                                                    <div class="icon">
                                                        <i class="fa-light fa-code-compare"></i>
                                                    </div>
                                                    <span>Compare</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-discription-tab-shop mt--50">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link active" id="product-details-tab" data-bs-toggle="tab" data-bs-target="#product-details-tab-pane" type="button" role="tab" aria-controls="product-details-tab-pane" aria-selected="true">Product Details</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link" id="product-review-tab" data-bs-toggle="tab" data-bs-target="#product-review-tab-pane" type="button" role="tab" aria-controls="product-review-tab-pane" aria-selected="false">Product Review</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link" id="product-inquery-tab" data-bs-toggle="tab" data-bs-target="#product-inquery-tab-pane" type="button" role="tab" aria-controls="product-inquery-tab-pane" aria-selected="false">Product Inquery</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link" id="policy-tab" data-bs-toggle="tab" data-bs-target="#policy-tab-panes" type="button" role="tab" aria-controls="policy-tab-panes" aria-selected="false">Shipping/Exchang/Return Policy</button>
                                </li>
                              </ul>
                              <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade   show active" id="product-details-tab-pane" role="tabpanel" aria-labelledby="product-details-tab" tabindex="0">
                                    <div class="single-tab-content-shop-details">
                                        <p class="disc">
                                            Uninhibited carnally hired played in whimpered dear gorilla koala depending and much yikes off far quetzal goodness and from for grimaced goodness unaccountably and meadowlark near unblushingly crucial scallop tightly neurotic hungrily some and dear furiously this apart.
                                        </p>
                                        <div class="table-responsive table-shop-details-pd">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Kitchen Fade Defy</th>
                                                        <th>5KG</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>PRAN Full Cream Milk Powder</td>
                                                        <td>3KG</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Net weight</td>
                                                        <td>8KG</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Brand</td>
                                                        <td>Reactheme</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Item code</td>
                                                        <td>4000000005</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Product type</td>
                                                        <td>Powder milk</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <p class="cansellation mt--20">
                                            <span> Return/cancellation:</span> No change will be applicable which are already delivered to customer. If product quality or quantity problem found then customer can return/cancel their order on delivery time with presence of delivery person.
                                        </p>
                                        <p class="note">
                                            <span>Note:</span> Product delivery duration may vary due to product availability in stock.
                                        </p>
                                    </div>
                                    <!-- "{{ asset('productAssets/images/shop/01.png')}}" -->
                                    <img src="{{ asset('productAssets/images/products/details/product-details.jpg')}}" alt="">
                                </div>
                                <div class="tab-pane fade" id="product-review-tab-pane" role="tabpanel" aria-labelledby="product-review-tab" tabindex="0">
                                    <div class="table-responsive table-shop-details-pd">
                                            <div style="padding: 30px 30px; background: #D5E8ED;">
                                                <div style=" padding: 10px; background: #fff;">
                                                    <h4 style="margin-bottom: 0;">Great Faptic</h4>
                                        <p style="margin-bottom: 8px;">love this <br> recommended</p>
                                                    
                                                    <div class="rating-stars-group" style="margin-bottom: 8px;">
                                                        <div class="rating-star"><i class="fas fa-star" style="color: #ffcd00;"></i></div>
                                                        <div class="rating-star"><i class="fas fa-star" style="color: #ffcd00;"></i></div>
                                                        <div class="rating-star"><i class="fas fa-star-half-alt" style="color: #ffcd00;"></i></div>
                                                        <!-- <span>10 Reviews</span> -->
                                                    </div>
                                                     <p style="margin-bottom: 8px;">-- Madison F.</p>
                                                     <p style="margin-bottom: 8px;">Was this review helpful. </p>
                                                      
                                                </div>
                                                

                                            </div>
                                            <div style="padding: 30px 30px; background: #D5E8ED;">
                                                <div style=" padding: 10px; background: #fff;">
                                                    <h4 style="margin-bottom: 0;">Great Faptic</h4>
                                                    <p style="margin-bottom: 8px;">love this <br> recommended</p>
                                                    
                                                    <div class="rating-stars-group" style="margin-bottom: 8px;">
                                                        <div class="rating-star"><i class="fas fa-star" style="color: #ffcd00;"></i></div>
                                                        <div class="rating-star"><i class="fas fa-star" style="color: #ffcd00;"></i></div>
                                                        <div class="rating-star"><i class="fas fa-star-half-alt" style="color: #ffcd00;"></i></div>
                                                        <!-- <span>10 Reviews</span> -->
                                                    </div>
                                                     <p style="margin-bottom: 8px;">-- Madison F.</p>
                                                     <p style="margin-bottom: 8px;">Was this review helpful. </p>
                                                      
                                                </div>
                                                

                                            </div>
                                        </div>
                                </div>
                                <div class="tab-pane fade" id="product-inquery-tab-pane" role="tabpanel" aria-labelledby="product-inquery-tab" tabindex="0">
                                    <div class="single-tab-content-shop-details">
                                        <div class="row">
                                            <div class="col-6"><h4>Product Inquery</h4></div>
                                            <div class="col-6">
                                                <button style="width: auto; height: 50px;float: right;">Contact Us</button>
                                                

                                            </div>
                                        </div>
                                        <div style=" padding: 10px; background: #fff;">
                                            <p style="margin-bottom: 20px;"><i class="fa fa-question-circle" style="margin-right: 5px;"></i>Madison F.</p>
                                            <p style="margin-bottom: 8px;"><i class='far fa-comment' style="margin-right: 5px;"></i>Was this review helpful. </p>
                                                      
                                        </div>
                                        <div style=" padding: 10px; background: #fff;">
                                            <p style="margin-bottom: 20px;"><i class="fa fa-question-circle" style="margin-right: 5px;"></i>Madison F.</p>
                                            <p style="margin-bottom: 8px;"><i class='far fa-comment' style="margin-right: 5px;"></i>Was this review helpful. </p>
                                                      
                                        </div>
                                                
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="policy-tab-panes" role="tabpanel" aria-labelledby="policy-tab" tabindex="0">
                                    <div class="single-tab-content-shop-details">
                                        <div class="table-responsive table-shop-details-pd">
                                            <table class="table">
                                                
                                                <tbody>
                                                    <tr>
                                                        <td style="background-color: #D5E8ED; width: 35%; text-align: center; vertical-align: middle;   ">Shipping Information</td>
                                                        <td>
                                                            <p>n general matters regarding exchanges/returns, relevant laws take precedence over the seller's suggestions. However, if the seller's suggestions are more advantageous to the consumer than the relevant laws, the seller's suggestions will apply</p>
                                                            <p>n general matters regarding exchanges/returns, relevant laws take precedence over the seller's suggestions. However, if the seller's suggestions are more advantageous to the consumer than the relevant laws, the seller's suggestions will apply</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="background-color: #D5E8ED; width: 35%; text-align: center; vertical-align: middle;">Exchange Rules</td>
                                                        <td>
                                                            <p>n general matters regarding exchanges/returns, relevant laws take precedence over the seller's suggestions. However, if the seller's suggestions are more advantageous to the consumer than the relevant laws, the seller's suggestions will apply</p>
                                                            <p>n general matters regarding exchanges/returns, relevant laws take precedence over the seller's suggestions. However, if the seller's suggestions are more advantageous to the consumer than the relevant laws, the seller's suggestions will apply</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="background-color: #D5E8ED; width: 35%; text-align: center; vertical-align: middle;">Return Policies</td>
                                                        <td>
                                                            <p>n general matters regarding exchanges/returns, relevant laws take precedence o   ver the seller's suggestions. However, if the seller's suggestions are more advantageous to the consumer than the relevant laws, the seller's suggestions will apply</p>
                                                            <p>n general matters regarding exchanges/returns, relevant laws take precedence over the seller's suggestions. However, if the seller's suggestions are more advantageous to the consumer than the relevant laws, the seller's suggestions will apply</p>
                                                        </td>
                                                    </tr>
                                                    
                                                </tbody>
                                            </table>
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
                            <h1 class="title">Feed Your Family at the  <br>
                                Best Price</h1>
                            <p class="disc">
                                We have prepared special discounts for you on grocery products. Don't <br> miss these opportunities...
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
        <!-- Product Detail -->
        <section class="sec-product-detail bg0 p-t-65 p-b-60">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-7 p-b-30">
                        <div class="p-l-25 p-r-30 p-lr-0-lg">
                            <div class="wrap-slick3 flex-sb flex-w">
                                <div class="wrap-slick3-dots"></div>
                                <div class="wrap-slick3-arrows flex-sb-m flex-w"></div>


                        </div>
                    </div>
                    
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
                            <h1 class="title">Feed Your Family at the  <br>
                                Best Price</h1>
                            <p class="disc">
                                We have prepared special discounts for you on grocery products. Don't <br> miss these opportunities...
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
    <div class="container-2 single-new-offer-area-border-weekly-selstyle mt--60">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-area-between mb--15">
                        <h2 class="title-left">
                            Recommended Products
                        </h2>
                        <ul class="nav nav-tabs best-selling-grocery" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                              <button class="nav-link active" id="home-tabz" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="false">View All</button>
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
                                               
                                    <img src="{{ asset($product->image) }}" alt="grocery">
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
                                                <h4 class="title">{{$product->name}}</h4>
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
                            <img src="{{ asset($product->image) }}"alt="grocery">
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
                                                <h4 class="title">{{$product->name}}</h4>
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
                    <img src="{{ asset($product->image) }}"alt="grocery">
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
                                                <h4 class="title">{{$product->name}}</h4>
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
        <img src="{{ asset($product->image) }}"alt="grocery">
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
                                                <h4 class="title">{{$product->name}}</h4>
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
                        <img src="{{ asset($product->image) }}"alt="grocery">
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
                                                <h4 class="title">{{$product->name}}</h4>
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
                        <img src="{{ asset($product->image) }}" alt="grocery">
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
                                                <h4 class="title">{{$product->name}}</h4>
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
@endsection
@section('script')
    <!-- new 14.07.24 -->
         <!-- plugins js -->
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
        $(".add-to-cart").click(function() {
            let qty = $("#currentCartQty").val()
            let size = $("#size").val()
            let color = $("#color_variation").val()
            let productId = "{{ $product->id }}"
            let productName = "{{ $product->name }}"
            let productPrice = "{{ $product->sale_off }}"

            if(size == "" || color == "" || qty == 0) {
                Toastify({
                    text: "Please choose size, color and quantity!",
                    duration: 3000,
                    newWindow: true,
                    close: true,
                    gravity: "top", // `top` or `bottom`
                    position: "right", // `left`, `center` or `right`
                    stopOnFocus: true, // Prevents dismissing of toast on hover
                    style: {
                        background: "linear-gradient(to right, #ff6b6b, #ff0000)",
                    },
                    onClick: function(){} // Callback after click
                }).showToast();
                return false;
            }
            Toastify({
                text: "Product added to cart!",
                duration: 3000,
                destination: "{{ url('/cart') }}",
                newWindow: true,
                close: true,
                gravity: "top", // `top` or `bottom`
                position: "right", // `left`, `center` or `right`
                stopOnFocus: true, // Prevents dismissing of toast on hover
                style: {
                    background: "linear-gradient(to right, #00b09b, #96c93d)",
                },
                onClick: function(){} // Callback after click
            }).showToast();

            var cartItems = pullObjectFromStorage('cartItems')

            console.log(cartItems)
            if(cartItems == null) {
                pushObjectToStorage('cartItems', [{
                        productId,
                        productName,
                        productPrice,
                        size,
                        color,
                        qty
                    }]
                )
            } else {
                let index = itemExistInCart(cartItems, productId, size, color)

                if (index !== -1) {
                    // If item exists, replace it
                    cartItems[index] = {
                        productId,
                        productName,
                        productPrice,
                        size,
                        color,
                        qty
                    };
                } else {
                    // If item does not exist, push a new item to the array
                    cartItems.push({
                        productId,
                        productName,
                        productPrice,
                        size,
                        color,
                        qty
                    });
                }

                pushObjectToStorage('cartItems', cartItems)
            }

            var newCartItems = pullObjectFromStorage('cartItems')
            $("#top-cart-count").html(newCartItems.length)

        })

    function itemExistInCart(cartItems, productId, size, color) {
        for (let i = 0; i < cartItems.length; i++) {
            if (cartItems[i].productId === productId && cartItems[i].size == size && cartItems[i].color == color) {
                return i; // Return the index of the existing item
            }
        }
        return -1; // Return -1 if item not found
    }
    </script>
@endsection
