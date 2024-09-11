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
    @yield('style')
    <script>
        function goToCart() {
            window.location.href = '/cart';
        }
    </script>
</head>

<body>
    <span itemscope="" itemtype="http://schema.org/Organization">
        <link itemprop="url" href="http://adpanchok.co.kr/">
        <a itemprop="sameAs" href="https://www.facebook.com/koreagiftmall"></a>
        <a itemprop="sameAs" href="https://blog.naver.com/PostList.nhn?blogId=korea_gift"></a>
    </span>
    <!-- header #1 -->
    <div class="top_bar_full">
        <div class="top_bar_adjust">
            <div class="top_bar">
                <ul>
                    <li class="left"><a class="top_line" href="#" target="_blank">Apply
                            for store entry</a></li>
                    <li class="left ml"><a class="top_line" href="#" target="_blank">About us</a></li>
                    <li class="right ml"><img src="{{ asset('frontend/image/faq_icon.png') }}" align="absmiddle"
                            style="margin:0 2px 3px 0;"><a href="#" class="top_line"
                            style="color:#0a97e7;">Frequiently asked qustion</a></li>
                    <li class="right ml"><a href="#" class="top_line">Customer service center</a></li>
                    <li class="right ml submenu">
                        <a href="mypage973a.html?query=order" class="top_line">My page<span class="arrow">^</span></a>
                        <div class="submenu_div">
                            <a href="mypage973a.html?query=order" class="top_line2">Order</a><br>
                            <a href="cart.html" class="top_line2">Shopping Cart</a><br>
                            <a href="mypage5a76.html?query=cash" class="top_line2">Points</a><br>
                        </div>
                    </li>
                    <li class="right ml"><a href="#" class="top_line">Join membership</a></li>
                    <li class="right ml"><a href="#" class="top_line">Login</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- header #1 end -->


    <input type="hidden" id="ztop_click_id">

    {{-- header #2 --}}

    <div class="head_bar_full">
        <div class="head_bar_adjust">
            <div class="head_bar">
                <div class="head_left">
                    <a href="index.html"><img width="100px" src="{{ asset('frontend/logo/logo382x163.png') }}"
                            alt="head logo" class="head_logo"></a>
                    <!-- <a href="index.html"><img src="{{ asset('frontend/image/logo766a.gif?time=20240401230214') }}"
                            alt="head logo" class="head_logo"></a> -->
                </div>
                <div class="head_center">
                    <div class="head_search_bg" style="width: 100%; display: flex; justify-content: center;">
                        <form action="{{ url('/search') }}" method="get" style="width: 100%; display: flex;
                        align-items: end;
                        justify-content: center;">
                            <div class="form-group" style="position: relative; width: 100%;">
                                <input type="text" name="search" class="form-control" style="padding: 0 5px;
                                height: 40px;
                                font-size: 20px; width: calc(100% - 40px)" placeholder="Search">
                                <button type="submit" class="btn btn-primary" style="cursor: pointer; padding: 0; position: absolute; width: 45px; right: 0; top: 0; height: 100%; border-radius: 0 5px 5px 0;">
                                    <img src="https://adpanchok.co.kr/ndesign/nimg/main/fh/fh_find.png" alt="" srcset="" width="100%" height="100%">
                                </button>
                            </div>
                        </form>
                    </div>
                    
                </div>
                <div class="head_right">
                    <img src="{{ asset('frontend/image/hm_tel5e1f.png?v=2') }}" alt="company_info"
                        usemap="#company_info">
                    <map name="company_info">
                        <area shape="rect" coords="218,84,293,105" href="javascript:void(0)"
                            onclick="nsWindow('blue', '��������Ʈ', '610', '590', 'gangnam');nsWindowReset();"
                            onfocus="blur();">
                    </map>
                </div>
                <div class="head_popular">
                    <span class="head_popular_title">Popular Search</span><span
                        class="head_popular_prev">&lt;</span><span class="head_popular_next">&gt;</span>
                    <div id="popular" class="swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"><a href=""><span class="popular_keyword"><span
                                            class="number">1</span><span class="word">Bag</span></span></a>
                                <a href="#"><span class="popular_keyword"><span class="number">2</span><span
                                            class="word">Watch</span></span></a>
                                <a href=""><span class="popular_keyword"><span class="number">3</span><span
                                            class="word">Cap</span></span></a>
                                <a href="#"><span class="popular_keyword"><span class="number">4</span><span
                                            class="word">Head</span></span></a>
                                <a href="#"><span class="popular_keyword"><span class="number">5</span><span
                                            class="word">Pen</span></span></a>
                            </div>
                            <div class="swiper-slide"><a href="#"><span class="popular_keyword"><span
                                            class="number">6</span><span class="word">Gift Card</span></span></a>
                                <a href="#"><span class="popular_keyword"><span class="number">7</span><span
                                            class="word">Pen</span></span></a>
                                <a href=""><span class="popular_keyword"><span class="number">8</span><span
                                            class="word">pen</span></span></a>
                                <a href="#"><span class="popular_keyword"><span class="number">9</span><span
                                            class="word">Pen</span></span></a>
                                <a href=""><span class="popular_keyword"><span class="number">10</span><span
                                            class="word">Pen</span></span></a>
                            </div>
                        </div>
                        <div id="popular_effect"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- header #2 end --}}

    <div id="test2" style="margin-top:270px;display:none;"></div>


    <div class="custom_search_bg"></div>

    {{-- navbar start --}}
    <div class="top_gnb_container">
        <div class="top_gnb_div_adjust" style="position:relative;">
            <div style='position:absolute;margin:50px 0 0 16px;width:177px;'>

                {{-- <ul class="left_category d1row">
                    <li class="d1">
                        <div class="lct1">Option</div>
                        <ul class="d2row">
                            <li class="d2"><a href="#" class="lct2">Mall-1</a><span
                                    class="more">&gt;</span>
                                <ul class="d3row">
                                    <li class="d3" onclick="">
                                        Mall 2
                                    <li class="d3" onclick="">
                                        Mall 3
                                    <li class="d3" onclick="">
                                        Mall 4
                                    <li class="d3" onclick="">
                                        mall 5

                                </ul>
                            </li>

                        </ul>
                    </li>
                    <li class="d1">
                        <div class="lct1">Option 2</div>
                        <ul class="d2row">
                            <li class="d2"><a href="#" class="lct2">Mall-1</a><span
                                    class="more">&gt;</span>
                                <ul class="d3row">
                                    <li class="d3" onclick="">
                                        Mall 2
                                    <li class="d3" onclick="">
                                        Mall 3
                                    <li class="d3" onclick="">
                                        Mall 4
                                    <li class="d3" onclick="">
                                        mall 5

                                </ul>
                            </li>

                        </ul>
                    </li>

                </ul> --}}


            </div>
            <div class="top_gnb unselectable">
                <div>
                    <!-- <div class="total_category" onclick="toggle_category_all()"><img
                            style="margin: -9px;" src ="{{ asset('frontend/image/all_category.png') }}" alt="Category"></div> -->
                    
                    <div class="menu border-left" onclick=""><a href="#">Oksem Cook</a></div>
                    <div class="menu border-left" onclick=""><a href="#">Food/Health Item</a></div>
                    <div class="menu border-left" onclick=""><a href="#">Kitchen/Daily Life</a></div>
                    <div class="menu border-left" onclick=""><a href="#">Electronics/Digital</a></div>
                    <div class="menu border-left" onclick=""><a href="#">Beauti Makeup</a></div>
                    <div class="menu border-left" onclick=""><a href="#">Fasion</a></div>
                    <!-- <div class="menu border-left" onclick=""><a href="#">Car Accessories</a></div>
                    <div class="menu border-left" onclick=""><a href="#">Pay Shop</a></div>
                    <div class="menu border-left" onclick=""><a href="#">1st Bendor product</a></div> -->





                    <!-- <div class="menu border-left" onclick=""><img
                            src="{{ asset('frontend/image/hm01_off5e1f.png?v=2') }}"></div>
                    <div class="menu" onclick=""><img
                            src="{{ asset('frontend/image/hm02_off5e1f.png?v=2') }}"></div>
                    <div class="menu" onclick="#">
                        <img src="{{ asset('frontend/image/hm03_off5e1f.png?v=2') }}">
                    </div>
                    <div class="menu border-right" onclick="#"><img
                            src="{{ asset('frontend/image/hm04_off5e1f.png?v=2') }}"></div> -->


                    <!-- <div class="select">
                        <form name="formCS" id="formCS" action="#"
                            onsubmit="return check_custom_search(this)">
                            <div class="ck_area">
                                <input type="text" name="csk" id="csk" class="k" value=""
                                    maxlength="20" autocomplete="off" placeholder="search"><img
                                    src="{{ asset('frontend/image/n.gif') }}" class="ck_submit">
                            </div>
                            <div class="custom_search">
                                <img class="cs_close">
                                <div class="head"><img
                                        src="{{ asset('frontend/image/custom_search_head30f4.png?v=3') }}">
                                </div>
                                <div class="title">
                                    <div class="title2">Select</div>
                                    <div class="selected"></div>
                                </div>
                                <div class="content">
                                    <div><label><input type="checkbox" name="csb[]" class="chk_cs"
                                                value="1"><span>Publicity of goverment</span></label></div>
                                    <div><label><input type="checkbox" name="csb[]" class="chk_cs"
                                                value="2"><span>School event</span></label></div>

                                </div>
                                <div class="title">
                                    <div class="title2">Event</div>
                                    <div class="selected"></div>
                                </div>
                                <div class="content">
                                    <div><label><input type="checkbox" name="cse[]" class="chk_cs"
                                                value="1"><span>Event 1</span></label></div>
                                    <div><label><input type="checkbox" name="cse[]" class="chk_cs"
                                                value="2"><span>Event 2</span></label></div>

                                </div>



                                <div class="cs_submit"></div>
                            </div>
                        </form>

                    </div> -->

                    <div class="btn_add user" onclick="#"><img
                            src="{{ asset('frontend/image/add_btn_user25e1f.png?v=2') }}" alt="User">
                        <div>User</div>
                    </div>
                    <div class="cart" onclick="goToCart()" style="position: relative"><img
                            src="{{ asset('frontend/image/add_btn_cart25e1f.png?v=2') }}" alt="cart">
                        <span id="top-cart-count" style="color: white; background: rgba(233, 0, 0, 0.81); padding: 5px 10px; border-radius: 100%; font-size: 12px; position: absolute; top: 2px; right: 3px;">0</span>
                    </div>

                </div>
            </div>
        </div>
        <!-- Total Category -->
        <!-- <div id="div_category_all">

            <table class="tc_tabs">
                <tr>
                    <td class="tc_tab tc_tab_0 active" data-tab="0">Category New</td>
                    <td class="tc_tab tc_tab_1" data-tab="1">Box</td>
                    <td class="tc_tab tc_tab_2" data-tab="2">USB</td>
                    <td class="tc_tab tc_tab_3" data-tab="3">BAG</td>
                    <td class="tc_tab tc_tab_4" data-tab="4">Sunglass</td>
                    <td class="tc_tab tc_tab_5" data-tab="5">Head</td>
                    <td class="tc_tab tc_tab_6" data-tab="6">Pen</td>
                </tr>
            </table>

            <table class="tc_tab_open tc_tab_open_0">
                <tr>
                    <td>
                        <a class="tc_sub" href="/products">cat 1</a>
                        <a class="tc_link" href="/products">cat 2</a><br>
                        <a class="tc_link" href="/products">cat 3</a><br>

                    </td>
                    <td>
                        <a class="tc_sub" href="/products">cat 1</a>
                        <a class="tc_link" href="/products">cat 2</a><br>
                        <a class="tc_link" href="/products">cat 3</a><br>
                    </td>
                    <td>
                        <a class="tc_sub" href="/products">cat 1</a>
                        <a class="tc_link" href="/products">cat 2</a><br>
                        <a class="tc_link" href="/products">cat 3</a><br>
                    </td>
                    <td>
                        <a class="tc_sub" href="/products">cat 1</a>
                        <a class="tc_link" href="/products">cat 2</a><br>
                        <a class="tc_link" href="/products">cat 3</a><br>
                    </td>
                    <td>
                        <a class="tc_sub" href="/products">cat 1</a>
                        <a class="tc_link" href="/products">cat 2</a><br>
                        <a class="tc_link" href="/products">cat 3</a><br>
                    </td>
                    <td>
                        <a class="tc_sub" href="/products">cat 1</a>
                        <a class="tc_link" href="/products">cat 2</a><br>
                        <a class="tc_link" href="/products">cat 3</a><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a class="tc_sub" href="/products">cat 1</a>
                        <a class="tc_link" href="/products">cat 2</a><br>
                        <a class="tc_link" href="/products">cat 3</a><br>
                    </td>
                    <td>
                        <a class="tc_sub" href="/products">cat 1</a>
                        <a class="tc_link" href="/products">cat 2</a><br>
                        <a class="tc_link" href="/products">cat 3</a><br>
                    </td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
            </table>
            <table class="tc_tab_open tc_tab_open_1">
                <tr>
                    <td>
                        <a class="tc_sub" href="/products">cat 1</a>
                        <a class="tc_link" href="/products">cat 2</a><br>
                        <a class="tc_link" href="/products">cat 3</a><br>
                    </td>
                    <td>
                        <a class="tc_sub" href="/products">cat 1</a>
                        <a class="tc_link" href="/products">cat 2</a><br>
                        <a class="tc_link" href="/products">cat 3</a><br>
                    </td>
                    <td>
                        <a class="tc_sub" href="/products">cat 1</a>
                        <a class="tc_link" href="/products">cat 2</a><br>
                        <a class="tc_link" href="/products">cat 3</a><br>
                    </td>
                    <td>
                        <a class="tc_sub" href="/products">cat 1</a>
                        <a class="tc_link" href="/products">cat 2</a><br>
                        <a class="tc_link" href="/products">cat 3</a><br>
                    </td>
                    <td>
                        <a class="tc_sub" href="/products">cat 1</a>
                        <a class="tc_link" href="/products">cat 2</a><br>
                        <a class="tc_link" href="/products">cat 3</a><br>
                    </td>
                    <td>
                        <a class="tc_sub" href="/products">cat 1</a>
                        <a class="tc_link" href="/products">cat 2</a><br>
                        <a class="tc_link" href="/products">cat 3</a><br>
                    </td>
                </tr>
            </table>
            <table class="tc_tab_open tc_tab_open_2">
                <tr>
                    <td>
                        <a class="tc_sub" href="/products">cat 1</a>
                        <a class="tc_link" href="/products">cat 2</a><br>
                        <a class="tc_link" href="/products">cat 3</a><br>
                    </td>
                    <td>
                        <a class="tc_sub" href="/products">cat 1</a>
                        <a class="tc_link" href="/products">cat 2</a><br>
                        <a class="tc_link" href="/products">cat 3</a><br>
                    </td>
                    <td>
                        <a class="tc_sub" href="/products">cat 1</a>
                        <a class="tc_link" href="/products">cat 2</a><br>
                        <a class="tc_link" href="/products">cat 3</a><br>
                    </td>
                    <td>
                        <a class="tc_sub" href="/products">cat 1</a>
                        <a class="tc_link" href="/products">cat 2</a><br>
                        <a class="tc_link" href="/products">cat 3</a><br>
                    </td>
                    <td>
                        <a class="tc_sub" href="/products">cat 1</a>
                        <a class="tc_link" href="/products">cat 2</a><br>
                        <a class="tc_link" href="/products">cat 3</a><br>
                    </td>
                    <td>
                        <a class="tc_sub" href="/products">cat 1</a>
                        <a class="tc_link" href="/products">cat 2</a><br>
                        <a class="tc_link" href="/products">cat 3</a><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a class="tc_sub" href="/products">cat 1</a>
                        <a class="tc_link" href="/products">cat 2</a><br>
                        <a class="tc_link" href="/products">cat 3</a><br>
                    </td>
                    <td>
                        <a class="tc_sub" href="/products">cat 1</a>
                        <a class="tc_link" href="/products">cat 2</a><br>
                        <a class="tc_link" href="/products">cat 3</a><br>
                    </td>
                    <td>
                        <a class="tc_sub" href="/products">cat 1</a>
                        <a class="tc_link" href="/products">cat 2</a><br>
                        <a class="tc_link" href="/products">cat 3</a><br>
                    </td>
                    <td>
                        <a class="tc_sub" href="/products">cat 1</a>
                        <a class="tc_link" href="/products">cat 2</a><br>
                        <a class="tc_link" href="/products">cat 3</a><br>
                    </td>
                    <td>
                        <a class="tc_sub" href="/products">cat 1</a>
                        <a class="tc_link" href="/products">cat 2</a><br>
                        <a class="tc_link" href="/products">cat 3</a><br>
                    </td>
                    <td>&nbsp;</td>
                </tr>
            </table>
            <table class="tc_tab_open tc_tab_open_3">
                <tr>
                    <td>
                        <a class="tc_sub" href="/products">cat 1</a>
                        <a class="tc_link" href="/products">cat 2</a><br>
                        <a class="tc_link" href="/products">cat 3</a><br>
                    </td>
                    <td>
                        <a class="tc_sub" href="/products">cat 1</a>
                        <a class="tc_link" href="/products">cat 2</a><br>
                        <a class="tc_link" href="/products">cat 3</a><br>
                    </td>
                    <td>
                        <a class="tc_sub" href="/products">cat 1</a>
                        <a class="tc_link" href="/products">cat 2</a><br>
                        <a class="tc_link" href="/products">cat 3</a><br>
                    </td>
                    <td>
                        <a class="tc_sub" href="/products">cat 1</a>
                        <a class="tc_link" href="/products">cat 2</a><br>
                        <a class="tc_link" href="/products">cat 3</a><br>
                    </td>
                    <td>
                        <a class="tc_sub" href="/products">cat 1</a>
                        <a class="tc_link" href="/products">cat 2</a><br>
                        <a class="tc_link" href="/products">cat 3</a><br>
                    </td>
                    <td>
                        <a class="tc_sub" href="/products">cat 1</a>
                        <a class="tc_link" href="/products">cat 2</a><br>
                        <a class="tc_link" href="/products">cat 3</a><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a class="tc_sub" href="/products">cat 1</a>
                        <a class="tc_link" href="/products">cat 2</a><br>
                        <a class="tc_link" href="/products">cat 3</a><br>
                    </td>
                    <td>
                        <a class="tc_sub" href="/products">cat 1</a>
                        <a class="tc_link" href="/products">cat 2</a><br>
                        <a class="tc_link" href="/products">cat 3</a><br>
                    </td>
                    <td>
                        <a class="tc_sub" href="/products">cat 1</a>
                        <a class="tc_link" href="/products">cat 2</a><br>
                        <a class="tc_link" href="/products">cat 3</a><br>
                    </td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
            </table>
            <table class="tc_tab_open tc_tab_open_4">
                <tr>
                    <td>
                        <a class="tc_sub" href="/products">cat 1</a>
                        <a class="tc_link" href="/products">cat 2</a><br>
                        <a class="tc_link" href="/products">cat 3</a><br>
                    </td>
                    <td>
                        <a class="tc_sub" href="/products">cat 1</a>
                        <a class="tc_link" href="/products">cat 2</a><br>
                        <a class="tc_link" href="/products">cat 3</a><br>
                    </td>
                    <td>
                        <a class="tc_sub" href="/products">cat 1</a>
                        <a class="tc_link" href="/products">cat 2</a><br>
                        <a class="tc_link" href="/products">cat 3</a><br>
                    </td>
                    <td>
                        <a class="tc_sub" href="/products">cat 1</a>
                        <a class="tc_link" href="/products">cat 2</a><br>
                        <a class="tc_link" href="/products">cat 3</a><br>
                    </td>
                    <td>
                        <a class="tc_sub" href="/products">cat 1</a>
                        <a class="tc_link" href="/products">cat 2</a><br>
                        <a class="tc_link" href="/products">cat 3</a><br>
                    </td>
                    <td>
                        <a class="tc_sub" href="/products">cat 1</a>
                        <a class="tc_link" href="/products">cat 2</a><br>
                        <a class="tc_link" href="/products">cat 3</a><br>
                    </td>
                </tr>
            </table>
            <table class="tc_tab_open tc_tab_open_5">
                <tr>
                    <td>
                        <a class="tc_sub" href="/products">cat 1</a>
                        <a class="tc_link" href="/products">cat 2</a><br>
                        <a class="tc_link" href="/products">cat 3</a><br>
                    </td>
                    <td>
                        <a class="tc_sub" href="/products">cat 1</a>
                        <a class="tc_link" href="/products">cat 2</a><br>
                        <a class="tc_link" href="/products">cat 3</a><br>
                    </td>
                    <td>
                        <a class="tc_sub" href="/products">cat 1</a>
                        <a class="tc_link" href="/products">cat 2</a><br>
                        <a class="tc_link" href="/products">cat 3</a><br>
                    </td>
                    <td>
                        <a class="tc_sub" href="/products">cat 1</a>
                        <a class="tc_link" href="/products">cat 2</a><br>
                        <a class="tc_link" href="/products">cat 3</a><br>
                    </td>
                    <td>
                        <a class="tc_sub" href="/products">cat 1</a>
                        <a class="tc_link" href="/products">cat 2</a><br>
                        <a class="tc_link" href="/products">cat 3</a><br>
                    </td>
                    <td>
                        <a class="tc_sub" href="/products">cat 1</a>
                        <a class="tc_link" href="/products">cat 2</a><br>
                        <a class="tc_link" href="/products">cat 3</a><br>
                    </td>
                    <td>
                        <a class="tc_sub" href="/products">cat 1</a>
                        <a class="tc_link" href="/products">cat 2</a><br>
                        <a class="tc_link" href="/products">cat 3</a><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a class="tc_sub" href="/products">cat 1</a>
                        <a class="tc_link" href="/products">cat 2</a><br>
                        <a class="tc_link" href="/products">cat 3</a><br>
                    </td>
                    <td>
                        <a class="tc_sub" href="/products">cat 1</a>
                        <a class="tc_link" href="/products">cat 2</a><br>
                        <a class="tc_link" href="/products">cat 3</a><br>
                    </td>
                    <td>
                        <a class="tc_sub" href="/products">cat 1</a>
                        <a class="tc_link" href="/products">cat 2</a><br>
                        <a class="tc_link" href="/products">cat 3</a><br>
                    </td>
                    <td>
                        <a class="tc_sub" href="/products">cat 1</a>
                        <a class="tc_link" href="/products">cat 2</a><br>
                        <a class="tc_link" href="/products">cat 3</a><br>
                    </td>
                    <td>
                        <a class="tc_sub" href="/products">cat 1</a>
                        <a class="tc_link" href="/products">cat 2</a><br>
                        <a class="tc_link" href="/products">cat 3</a><br>
                    </td>
                    <td>
                        <a class="tc_sub" href="/products">cat 1</a>
                        <a class="tc_link" href="/products">cat 2</a><br>
                        <a class="tc_link" href="/products">cat 3</a><br>
                    </td>
                    <td>&nbsp;</td>
                </tr>
            </table>
            <table class="tc_tab_open tc_tab_open_6">
                <tr>
                    <td>
                        <a class="tc_sub" href="/products">cat 1</a>
                        <a class="tc_link" href="/products">cat 2</a><br>
                        <a class="tc_link" href="/products">cat 3</a><br>
                    </td>
                    <td>
                        <a class="tc_sub" href="/products">cat 1</a>
                        <a class="tc_link" href="/products">cat 2</a><br>
                        <a class="tc_link" href="/products">cat 3</a><br>
                    </td>
                    <td>
                        <a class="tc_sub" href="/products">cat 1</a>
                        <a class="tc_link" href="/products">cat 2</a><br>
                        <a class="tc_link" href="/products">cat 3</a><br>
                    </td>
                    <td>
                        <a class="tc_sub" href="/products">cat 1</a>
                        <a class="tc_link" href="/products">cat 2</a><br>
                        <a class="tc_link" href="/products">cat 3</a><br>
                    </td>
                    <td>&nbsp;</td>
                </tr>
            </table>
            <div class="btn_close_all_category"><img src="{{ asset('frontend/image/btn_close_all_category.png') }}">
            </div>

        </div> -->
        <!-- /Total Category -->

    </div>

    {{-- navbar end --}}


    {{-- fixed header --}}
    <div id="fixed_header">
        <div class="fh_adjust">
            <div class="fh_bar">
                <ul>
                    <li><img src="{{ asset('frontend/image/fh_all.png') }}" onclick="toggle_category_all()"
                            class="fh_hover">
                    </li>
                    <li><a href="index.html" target="_self"><img src="{{ asset('frontend/image/fh_logo.png') }}"
                                alt="logo"></a></li>
                    <li></li>
                    <li><img src="{{ asset('frontend/image/fh_tel.png') }}"></li>
                    <li><img src="{{ asset('frontend/image/fh_region.png') }}"
                            onclick="nsWindow('blue', '��������Ʈ', '610', '590', 'gangnam');nsWindowReset();"
                            class="fh_hover"></li>
                    <li class="fh_link" onclick="#"><img src="{{ asset('frontend/image/fh_user.png') }}"
                            alt="user">
                        <div>User</div>
                    </li>
                    <li class="fh_link" onclick="#"><img src="{{ asset('frontend/image/fh_cart.png') }}"
                            alt="cart">
                        <div>cart</div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div id="fixed_blank"></div>

    {{-- fixed header end --}}
    <div class="container">
