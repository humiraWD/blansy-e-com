@extends('frontend.layout.parent')
@section('title', 'Check Out')

@section('style')
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

        .table-shopping-cart {
            min-width: auto !important;
        }
    </style>
@endsection
@section('content')
    <!-- <div class="animsition">

        <div class="wrap-header-cart js-panel-cart">
		<div class="s-full js-hide-cart"></div>

		<div class="header-cart flex-col-l p-l-65 p-r-25">
			<div class="header-cart-title flex-w flex-sb-m p-b-8">
				<span class="mtext-103 cl2">
					Your Cart
				</span>

				<div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
					<i class="zmdi zmdi-close"></i>
				</div>
			</div>

			<div class="header-cart-content flex-w js-pscroll">
				<ul class="header-cart-wrapitem w-full">
					<li class="header-cart-item flex-w flex-t m-b-12">
						<div class="header-cart-item-img">
							<img src="https://images.unsplash.com/photo-1441035430039-1c421470b6c0?q=80&w=2670&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="IMG">
						</div>

						<div class="header-cart-item-txt p-t-8">
							<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
								White Shirt Pleat
							</a>

							<span class="header-cart-item-info">
								1 x $19.00
							</span>
						</div>
					</li>

					<li class="header-cart-item flex-w flex-t m-b-12">
						<div class="header-cart-item-img">
							<img src="https://images.unsplash.com/photo-1669055110073-6099dcb0a734?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Njd8fHBhY2tlZCUyMHNocml0fGVufDB8fDB8fHww" alt="IMG">
						</div>

						<div class="header-cart-item-txt p-t-8">
							<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
								Converse All Star
							</a>

							<span class="header-cart-item-info">
								1 x $39.00
							</span>
						</div>
					</li>

					<li class="header-cart-item flex-w flex-t m-b-12">
						<div class="header-cart-item-img">
							<img src="https://images.unsplash.com/photo-1529374255404-311a2a4f1fd9?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nzl8fGNsb3RoJTIwc2hvcHxlbnwwfHwwfHx8MA%3D%3D" alt="IMG">
						</div>

						<div class="header-cart-item-txt p-t-8">
							<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
								Nixon Porter Leather
							</a>

							<span class="header-cart-item-info">
								1 x $17.00
							</span>
						</div>
					</li>
				</ul>

				<div class="w-full">
					<div class="header-cart-total w-full p-tb-40">
						Total: $75.00
					</div>

					<div class="header-cart-buttons flex-w w-full">
						<a href="shoping-cart.html" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
							View Cart
						</a>

						<a href="shoping-cart.html" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
							Check Out
						</a>
					</div>
				</div>
			</div>
		</div>
	</div> -->


        <!-- breadcrumb hhh -->
        <div class="bg0 m-t-23 p-b-140">
            <!-- <h4 style="color:black;text-align:center">Check out</h4> -->
            <div class="container">
                <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
                    <a href="index.html" class="stext-109 cl8 hov-cl1 trans-04">
                        Home
                        <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
                    </a>

                    <span class="stext-109 cl4">
                        Checkout
                    </span>
                </div>
            </div>


            <!-- Shoping Cart -->
            <form class="bg0 p-t-75 p-b-85" action="{{ route('admin.products.store') }}" method="POST"
                enctype="multipart/form-data">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-xl-6 m-lr-auto m-b-50">
                            <div class="m-l-25 m-r--38 m-lr-0-xl">
                                <div class="wrap-table-shopping-cart">
                                    <table class="table-shopping-cart">
                                        <thead>
                                            <tr class="table_head">
                                                <th class="column-1">Product</th>
                                                <th class="column-2"></th>
                                                <th class="column-3">Price</th>
                                                <th class="column-4">Quantity</th>
                                                <th class="column-5">Total</th>
                                            </tr>
                                        </thead>

                                        <tbody id="cartDetails">

                                        </tbody>

                                    </table>
                                </div>

                                <div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
                                    <div class="flex-w flex-m m-r-20 m-tb-5">
                                        <input class="stext-104 cl2 plh4 size-117 bor13 p-lr-20 m-r-10 m-tb-5"
                                            type="text" name="coupon" placeholder="Coupon Code">

                                        <div
                                            class="flex-c-m stext-101 cl2 size-118 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-5">
                                            Apply coupon
                                        </div>
                                    </div>

                                    {{-- <div
                                        class="flex-c-m stext-101 cl2 size-119 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10">
                                        Update Cart
                                    </div> --}}
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 col-lg-6 col-xl-6 m-lr-auto m-b-50">
                            <div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
                                <h4 class="mtext-109 cl2 p-b-30">
                                    Order Info
                                </h4>

                                <div class="flex-w flex-t bor12 p-b-13">
                                    {{-- <div class="size-208">
                                        <span class="stext-110 cl2">
                                            Subtotal:
                                        </span>
                                    </div> --}}

                                    <div class="size-209">
                                        {{-- <span class="mtext-110 cl2">
                                            $79.65
                                        </span> --}}
                                    </div>
                                </div>

                                <div class="flex-w flex-t bor12 p-t-15 p-b-30">
                                    <div class="size-208 w-full-ssm">
                                        <span class="stext-50 cl2">
                                            Shipping Address:
                                        </span>
                                    </div>

                                    <div class="size-209 p-r-18 p-r-0-sm w-full-ssm">
                                        {{-- <p class="stext-111 cl6 p-t-2">
                                            There are no shipping methods available. Please double check your address, or
                                            contact us if you need any help.
                                        </p> --}}

                                        <div class="">
                                            {{-- <span class="stext-112 cl8">
                                                Calculate Shipping
                                            </span> --}}

                                            <div class="rs1-select2 rs2-select2 bor8 bg0 m-b-12 m-t-9">
                                                <select class="js-select2" name="time">
                                                    <option>Select a country...</option>
                                                    <option>USA</option>
                                                    <option>UK</option>
                                                </select>
                                                <div class="dropDownSelect2"></div>
                                            </div>

                                            <div class="bor8 bg0 m-b-12">
                                                <input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text"
                                                    name="state" placeholder="State /  country">
                                            </div>

                                            <div class="bor8 bg0 m-b-22">
                                                <input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text"
                                                    name="postcode" placeholder="Postcode / Zip">
                                            </div>

                                            <div class="flex-w">
                                                {{-- <div
                                                    class="flex-c-m stext-101 cl2 size-115 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer">
                                                    Update Totals
                                                </div> --}}
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="row p-t-27 p-b-33">
                                    <div class="size-50 col-6">
                                        <span class="stext-102 cl2">
                                            Sub Total:
                                        </span>
                                    </div>

                                    <div class="size-50 p-t-1 col-6">
                                        <span class="stext-102 cl2">
                                            $79.65
                                        </span>
                                    </div>
                                </div>
                                <div class="row p-t-27 p-b-33">
                                    <div class="size-50 col-6">
                                        <span class="stext-102 cl2">
                                            Shipping:
                                        </span>
                                    </div>

                                    <div class="size-50 p-t-1 col-6">
                                        <span class="stext-102 cl2">
                                            $0.00
                                        </span>
                                    </div>
                                </div>
                                <div>
                                    <div class="row p-t-27 p-b-33">
                                        <div class="size-50 col-6">
                                            <span class="stext-102 cl2">
                                                Total:
                                            </span>
                                        </div>

                                        <div class="size-50 p-t-1 col-6">
                                            <span class="stext-102 cl2">
                                                $79.65
                                            </span>
                                        </div>
                                    </div>
                                    <div class="row p-t-27 p-b-33">
                                        <div class="size-50 col-6">
                                            <span class="stext-102 cl2">
                                                Discount:
                                            </span>
                                        </div>

                                        <div class="size-50 p-t-1 col-6">
                                            <span class="stext-102 cl2">
                                                $9.65
                                            </span>
                                        </div>
                                    </div>
                                    <div class="row p-t-27 p-b-33">
                                        <div class="size-50 col-6">
                                            <span class="stext-102 cl2">
                                                Grand Total:
                                            </span>
                                        </div>

                                        <div class="size-50 p-t-1 col-6">
                                            <span class="stext-102 cl2">
                                                $70.00
                                            </span>
                                        </div>
                                    </div>
                                    <div class="row p-t-27 p-b-33">
                                        <div class="size-50 col-6">
                                            <span class="stext-102 cl2">
                                                Payment Method:
                                            </span>
                                        </div>

                                        <div class="size-50 p-t-1 col-6">
                                            <span class="stext-102 cl2">
                                                <select class="js-select2" name="time">
                                                    <option>Select...</option>
                                                    <option>Paypal</option>
                                                    <option>Stripe</option>
                                                </select>
                                                <div class="dropDownSelect2"></div>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="row p-t-27 p-b-33">
                                        <div class="size-50 col-6">
                                            <span class="stext-102 cl2">
                                                Transaction ID:
                                            </span>
                                        </div>

                                        <div class="size-50 p-t-1 col-6">
                                            <span class="stext-102 cl2">
                                                <input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text"
                                                    name="transaction_id" placeholder="Transaction ID">
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-w flex-sb-m p-t-26 p-b-30">
                                    <div class="size-50">
                                        <span class="mtext-101 cl2">
                                            <a href="/cart" class="text-danger">Back to Cart</a>
                                        </span>
                                    </div>
                                    <div class="size-50">
                                        <button
                                            class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
                                            <a href="/checkout" class="text-white">Place Order</a>
                                        </button>

                                    </div>
                                </div>

                                {{-- <button
                                        class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
                                        <a href="#" class="text-white">Place Order</a>
                                    </button> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </form>




            <!-- Back to top -->
            <div class="btn-back-to-top" id="myBtn">
                <span class="symbol-btn-back-to-top">
                    <i class="zmdi zmdi-chevron-up"></i>
                </span>
            </div>
        </div>
    @endsection
    @section('script')
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
                        '<td class="column-3" style="text-align:center">' + item.qty + '</td>' +
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
