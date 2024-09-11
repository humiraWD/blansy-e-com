@extends('frontend.layout.parent')
@section('title', 'Check Out')


@section('content')
<div class="checkout-area rts-section-gap">
    <div class="container">
        <form action="{{ route('placeorder.form') }}" method="POST">
            @csrf
            <div class="row">

                <div class="col-lg-6 pr--40 pr_md--5 pr_sm--5 order-2 order-xl-1 order-lg-2 order-md-2 order-sm-2 mt_md--30 mt_sm--30">
                    <div class="rts-billing-details-area form">
                        <h3 class="title animated fadeIn">Billing Details</h3>
                        <div class="half-input-wrapper">
                            <div class="single-input">
                                <label for="f-name">First Name*</label>
                                <input id="f-name" type="text" required="" name="f_name">
                            </div>
                            <div class="single-input">
                                <label for="l-name">Last Name*</label>
                                <input id="l-name" type="text" name="l_name">
                            </div>
                        </div>
                        <div class="half-input-wrapper">
                            <div class="single-input">
                                <label for="phone">Phone*</label>
                                <input id="phone" type="text" name="phone">
                            </div>
                            <div class="single-input">
                                <label for="email">Email Address*</label>
                                <input id="email" type="text" required="" name="email">
                            </div>
                        </div>
                        <div class="half-input-wrapper">
                            <div class="single-input">
                                <label for="comp">Company Name (Optional)*</label>
                                <input id="comp" type="text" name="company_name">
                            </div>
                            <div class="single-input">
                                <label for="country">Country / Region*</label>
                                <input id="country" type="text" name="country">
                            </div>
                        </div>

                        <div class="half-input-wrapper">
                            <div class="single-input">
                                <label for="state">State*</label>
                                <input id="state" type="text" name="state">
                            </div>
                            <div class="single-input">
                                <label for="street">Street Address*</label>
                                <input id="street" type="text" required="" name="street">
                            </div>
                        </div>
                        <div class="half-input-wrapper">
                            <div class="single-input">
                                <label for="city">Town / City*</label>
                                <input id="city" type="text" name="city">
                            </div>
                            <div class="single-input">
                                <label for="zip">Zip Code*</label>
                                <input id="zip" type="text" required="" name="zipcode">
                            </div>
                        </div>

                        <div class="cottom-cart-right-area">
                            <ul style="list-style: none;">
                                <li>
                                    <label for="f-options">Create an account?</label>
                                </li>
                            </ul>
                            <ul style="list-style: none;">
                                <li>
                                    <label for="f-options">Ship to a different address</label>
                                </li>
                            </ul>
                            <ul style="list-style: none;">
                                <li>
                                    <input type="checkbox" name="sms_receive"> Wants to recieve update & news?
                                </li>
                            </ul>

                        </div>



                        <div class="single-input">
                            <label for="ordernotes">Order Notes*</label>
                            <textarea id="ordernotes" name="notes"></textarea>
                        </div>
                        <!-- <button class="rts-btn btn-primary">Update Cart</button> -->

                    </div>
                </div>
                <div class="col-lg-6 order-1 order-xl-2 order-lg-1 order-md-1 order-sm-1">
                    <h3 class="title-checkout animated fadeIn">Your Order</h3>
                    <div class="right-card-sidebar-checkout">

                        <div class="category-sub-menu card-number-show">
                            <!-- <h5 class="shopping-cart-number">Shopping Cart (03)</h5> -->
                            <div id="checkout-items" class="rts-cart-list-area" style="height:fit-content; max-height: 400px; overflow: scroll;">

                                <div class="single-cart-area-list main  item-parent">
                                    <div class="product-main-cart">

                                        <div class="thumbnail">
                                            <img src="assets/images/shop/02.png" alt="shop" style="width: 120px; height: 120px;">
                                        </div>
                                        <div class="information" style="width:100%;">
                                            <h6 class="title" style="padding: 2px 2px;">SunChips Minis, Garden Salsa
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
                                                    <!-- <div class="input-container">
                                                        <div id="minus">-</div>
                                                        <input type="text" id="number" value="0"
                                                            style="background: #1A5172; color: #fff; text-align: center;">
                                                        <div id="plus">+</div>

                                                    </div> -->
                                                    <div class="quantity-edit">
                                                        <input type="text" class="input" value="1">
                                                        <div class="button-wrapper-action">
                                                            <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                            <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
                                                        </div>
                                                    </div>
                                                    <div class="col-3" style="width: 40%; ">
                                                        <span style="padding-left: 50px;float: right;">
                                                            <button class="section-activation" style="width: 100px;height: 30px; color: #ff0000; border: 1px solid #000;"><i class="fa fa-trash" style="color: #ff0000 !important;"></i>
                                                                Remove</button>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="bottom-cupon-code-cart-area form">
                                    <!-- <form action="#" style="width: 100%;"> -->
                                    <input type="text" placeholder="Cupon Code" style="width:100%;">
                                    <button class="rts-btn btn-primary" style="width:50%;">Apply Coupon</button>
                                    <!-- </form> -->
                                </div>
                            </div>



                        </div>



                        <div class="single-shop-list">
                            <div class="left-area">
                                <span>Subtotal</span>
                            </div>
                            <span class="price">$500.00</span>
                        </div>
                        <div class="single-shop-list">
                            <div class="left-area">
                                <span>Shipping</span>
                            </div>
                            <span class="price">$500.00</span>
                        </div>
                        <div class="single-shop-list">
                            <div class="left-area">
                                <span style="font-weight: 600; color: #2C3C28;">Total Price:</span>
                            </div>
                            <span class="price" style="color: #629D23;">$550.00</span>
                        </div>
                        <div class="cottom-cart-right-area">
                            <ul>
                                <li>
                                    <input type="radio" id="f-options" name="pay_option" value="1">
                                    <label for="f-options">Direct Bank Transfer</label>

                                    <div class="check"></div>
                                </li>
                            </ul>
                            <p class="disc mb--25">
                                Make your payment directly into our bank account. Please use your Order ID as the
                                payment reference. Your order will not be shipped until the funds have cleared in our
                                account.
                            </p>
                            <ul>
                                <li>
                                    <input type="radio" id="f-option" name="pay_option" value="2">
                                    <label for="f-option">Check Payments</label>

                                    <div class="check"></div>
                                </li>

                                <li>
                                    <input type="radio" id="s-option" name="pay_option" value="3">
                                    <label for="s-option">Cash On Delivery</label>

                                    <div class="check">
                                        <div class="inside"></div>
                                    </div>
                                </li>

                                <li>
                                    <input type="radio" id="t-option" name="pay_option" value="4">
                                    <label for="t-option">Paypal</label>

                                    <div class="check">
                                        <div class="inside"></div>
                                    </div>
                                </li>
                            </ul>
                            <p class="mb--20">Your personal data will be used to process your order, support your
                                experience throughout this website, and for other purposes described in our privacy
                                policy.</p>
                            <div class="single-category mb--30">
                                <input id="cat14" type="checkbox" name="agree_terms">I have read and agree terms and conditions *
                                <label for="cat14">
                                </label>
                            </div>
                            <button type="submit" class="rts-btn btn-primary">Place Order</button>
                        </div>
                    </div>
                </div>
            </div>
            <div id="hidden_inputs">

            </div>
        </form>
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
        console.log(cartItems);
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

    // $(document).on("click", ".fa-times", function() {
    //     // Get the index of the item to be removed
    //     let indexToRemove = $(this).closest('.single-cart-item').index();

    //     var cartItems = pullObjectFromStorage('cartItems')
    //     // Remove the item from cartItems array
    //     cartItems.splice(indexToRemove, 1);
    //     pushObjectToStorage('cartItems', cartItems)
    //     renderCartUi(cartItems)

    //     var newCartItems = pullObjectFromStorage('cartItems')
    //     $("#top-cart-count").html(newCartItems.length)
    // })
    
    function removeCartProduct(index) {
        let cartItems = pullObjectFromStorage('cartItems');
        if(cartItems && cartItems.length > index){
            cartItems.splice(index,1);
            pushObjectToStorage('cartItems', cartItems);
            showCart();
            console.log(cartItems);
        }
    }

    showCart();

    function showCart() {

        function removeButton() {
    var element = document.getElementsById("hidebutton");
    element.classList.remove("button1");
  }


        var cartItems = pullObjectFromStorage('cartItems');
        console.log(cartItems);
        var items = "";
        var hiddenItem = "";
        cartItems.forEach(function(item, index) {
            items += `<div id="checkout-items" class="single-cart-area-list main  item-parent" >
                <div class="product-main-cart">
                    <input type="hidden" class="product_id_value" name="product_id[${index}]" value="${item.productId}">        
                    <div class="thumbnail">
                        <img src="${item.productImage}" alt="shop"
                            style="width: 120px; height: 120px;">
                    </div>
                    <div class="information" style="width:100%;">
                        <h6 class="title" style="padding: 2px 2px;">Product Name: ${item.productName}</h6>
                        <div class="price">
                            <p style="padding: 2px 2px;">Price: $${item.productPrice}</p>
                        </div>
                        <div class="price">
                            <p style="padding: 2px 2px;">Color: ${item.color}</p>
                        </div>
                        <div class="price">
                            <p style="padding: 2px 2px;">Size: ${item.size}</p>
                        </div>
                        <div class="price">
                            <div class="row" style="padding:2px 2px;">
                                <p style="width: 35%">Quantity</p>
                                <div class="quantity-edit">
                                    <input type="text" class="input" value="${item.qty}">
                                    <div class="button-wrapper-action">
                                        <button type="button" class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                        <button type="button" class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
                                    </div>
                                </div>
                                <div class="col-3" style="width: 40%; ">
                                    <span style="padding-left: 50px;float: right;">
                                    
                                        <button class="remove_btn"  data-index="${index}" type="button" style="width: 100px;height: 30px; color: #ff0000; border: 1px solid #000;"><i class="fa fa-trash" style="color: #ff0000 !important;"></i>
                                            Remove</button>

                                    </span>

                                </div>


                            </div>

                        </div>
                    </div>
                </div>
            </div>`;
            hiddenItem += `<input type="hidden" name="product_id[${index}]" value="${item.productId}">`;
        });

        $("#checkout-items").html(items);
        //alert(hiddenItem);
        // $("#hidden_inputs").html(hiddenItem);

        $('.remove_btn').click(function() {
            var index = $(this).data('index');
            console.log(index);
            removeCartProduct(index);
        })
        
    }
</script>
@endsection