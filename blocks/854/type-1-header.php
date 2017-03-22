<!DOCTYPE html>
<html>

    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php
        if (!class_exists('lessc')) {
            include ('libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/styles.less', 'css/styles.css');
        $less->compileFile('less/type-1-header.less', 'css/type-1-header.css');
        ?>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">

        <link rel="stylesheet" href="css/styles.css">   
        <link rel="stylesheet" href="css/type-1-header.css">   

        <script src="js/jquery-1.11.0.min.js"></script>
        <script src="js/bootstrap.min.js"></script> 
    </head>
    <body>
        <div class="zaro-header">
            <div id="pattent" class="slidelip white-background"> 
                <div class="container container-modify margin-auto header">
                    <!--HEADER--> 
                    <div id="header">
                        <!--CURRENCY-->
                        <div id="currencies_block_top" class="dib">
                            <form id="setCurrency" action="#" method="post" class="dropdown">
                                <div id="currencyHolder" class="dropdown dropdown1">
                                    <span class="dib smooth02">  
                                        <span>Dollar</span>
                                        <i class="fa fa-angle-down"></i>
                                    </span>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-option smooth02 main-bg-hover" data-value="2" onclick="setCurrency($(this).data('value'));">
                                            <span class="currency-sign main-background">
                                                <span class="main_color">€</span>
                                            </span>Euro
                                        </li>
                                        <li class="dropdown-option smooth02 main-bg-hover" data-value="3" onclick="setCurrency($(this).data('value'));"> 
                                            <span class="currency-sign main-background">
                                                <span class="main_color">₤</span>
                                            </span>Pound
                                        </li>
                                    </ul> 
                                </div>

                            </form>
                        </div>

                        <!--LANGUAGE-->
                        <div id="languages_block_top" class="dib">
                            <div id="countries" class="dropdown dropdown1">
                                <span class="selected_language smooth02">
                                    <img src="images/header/1.jpg" class="dib" width="16" height="11" alt="en">
                                    <a class="dib" href="#">English</a>
                                    <i class="fa fa-angle-down"></i>
                                </span>
                                <ul id="first-languages" class="dropdown-menu">
                                    <li class="smooth02 main-bg-hover"> 
                                        <img src="images/header/2.jpg" class="dib">
                                        <a href="#" title="Deutsch">Deutsch</a>
                                    </li>
                                    <li class="smooth02 main-bg-hover">
                                        <img src="images/header/3.jpg" class="dib">
                                        <a href="#" title="Español">Español</a>
                                    </li>
                                    <li class="smooth02 main-bg-hover">
                                        <img src="images/header/4.jpg" class="dib" >
                                        <a href="#" title="Français">Français</a>
                                    </li>
                                    <li class="smooth02 main-bg-hover">
                                        <img src="images/header/7.jpg" class="dib">
                                        <a href="#" title="العربية">العربية
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!--LOGIN-->
                        <div id="header_user" class="dib">
                            <ul>
                                <li>
                                    <a href="#" class="main-color-hover">Sign in</a>
                                    or 
                                    <a href="#" class="main-color-hover">Register</a>
                                </li>
                            </ul>
                        </div>

                        <!--MENU HEADER-->
                        <div id="menu-header" class="dib">
                            <ul>
                                <li class="pk_account dropdown dropdown1 dib smooth02 main-bg-hover">
                                    <a href="#" title="My Account">
                                        <i class="fa fa-user"></i>
                                        <span>My Account</span></a>
                                    <div class="dropdown-menu main-background">
                                        <div class="indent">
                                            <ul>
                                                <li><a href="#" title="My orders" rel="nofollow">My orders</a></li>
                                                <li><a href="#" title="My credit slips" rel="nofollow">My credit slips</a></li>
                                                <li><a href="#" title="My addresses" rel="nofollow">My addresses</a></li>
                                                <li><a href="#" title="Manage my personal information">My personal info</a></li>
                                                <li><a href="#" title="My vouchers" rel="nofollow">My vouchers</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="pk_wishlist dropdown dropdown1 dib smooth02 main-bg-hover">
                                    <a href="#" title="My Wishlist">
                                        <i class="fa fa-gift"></i>
                                        <span>My Wishlist (<span class="wlQty">0</span>)</span>
                                    </a>
                                    <div id="pk_wishlist" class="dropdown-menu main-background ">
                                        <div class="indent">
                                            <ul class="wishlist-list">
                                                <li class="no-products">No products</li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="pk_watchlist dropdown  dropdown1 dib smooth02 main-bg-hover">
                                    <a href="#" title="Recently viewed products">
                                        <i class="fa fa-eye"></i>
                                        <span>Watch List <span>(4)</span></span>
                                    </a>
                                    <div class="watchlist dropdown-menu main-background"  >
                                        <div class="indent">
                                            <ul> 
                                                <li class="clearfix item">
                                                    <a href="#" title="About Infinite Shirt" class="content_img">
                                                        <img width="63" height="63" src="images/header/ports-1961-galaxy-shine.jpg" alt=""> </a>
                                                    <div class="text_desc"> <span class="pName"> 
                                                            <a href="#" title="About Infinite Shirt">Infinite Shirt</a> </span>
                                                        <div class="price">112,42 €</div>
                                                    </div>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <!--LOGO-->
                        <div id="header_logo" class="align-center">
                            <a id="header_logo_img" href="home" title="Alysum">
                                <img class="logo" src="images/header/logo.jpg" alt="Alysum" width="250" height="72"> 
                                <span id="logo_text" class="hidden"> 
                                    <span class="logo">Alysum</span>
                                    <span class="slogan"></span>
                                </span>
                            </a>
                        </div>

                        <!--SHOPPING CART-->
                        <div id="shopping_cart" class="smooth05 dropdown  dropdown1">
                            <a href="#" title="View my shopping cart" rel="nofollow">
                                <i class="fa fa-shopping-basket"></i>
                                <b>Cart:</b> 
                                <span class="ajax_cart_quantity mobile_cart_num main-bg-hover">1</span> 
                                <span class="ajax_cart_quantity">1</span>
                                <span class="ajax_cart_product_txt">Product</span> 
                                <span class="ajax_cart_product_txt_s unvisible">Products</span>
                                <span class="ajax_cart_total"> 112,42 € </span> 
                                <span class="ajax_cart_no_product unvisible">(empty)</span>
                            </a>
                            <div class="dropdown-menu cart_block block exclusive" style="display: none;">
                                <div class="block_content">
                                    <div class="cart_block_list">
                                        <dl class="products"> 
                                            <dt data-id="cart_block_product_110_1745_0" class="first_item"> 
                                                <a class="cart-images" href="#" title="Infinite Shirt">
                                                    <img src="images/header/calvin-klein-white-cap-colorblock.jpg" alt="Infinite Shirt">
                                                </a>
                                                <div class="cart-info">
                                                    <div class="product-name"> 
                                                        <span class="quantity-formated">
                                                            <span class="quantity">1</span>&nbsp;x&nbsp;
                                                        </span>
                                                        <a class="cart_block_product_name" href="#" title="Infinite Shirt">Infinite Shirt</a>
                                                    </div>
                                                    <div class="product-atributes hidden">
                                                        <a href="#" title="Product detail">(S, Red)</a>
                                                    </div>
                                                    <span class="price lmroman"> 112,42 € </span>
                                                </div> 
                                                <span class="remove_link">
                                                    <a class="ajax_cart_block_remove_link" href="#"  title="remove this product from my cart">
                                                        <i class="fa fa-remove"></i>
                                                    </a> 
                                                </span>
                                                <div class="clearfix"></div>
                                            </dt>
                                            <dd data-id="cart_block_combination_of_110_1745_0" class="first_item"></dd>
                                        </dl>
                                        <p class="cart_block_no_products unvisible"> No products</p>
                                        <div id="cart-prices">
                                            <div class="cart-prices-line first-line">
                                                <span class="unvisible"> Shipping </span> 
                                                <span class="price cart_block_shipping_cost ajax_cart_shipping_cost unvisible"> To be determined </span>
                                            </div>
                                            <div class="cart-prices-line"> 
                                                <span>Tax:</span>
                                                <span id="cart_block_tax_cost" class="price ajax_cart_tax_cost lmroman">0,00 €</span>
                                            </div>
                                            <div class="cart-prices-line last-line"> 
                                                <span>Total:</span>
                                                <span id="cart_block_total" class="price ajax_block_cart_total lmroman main-color">112,42 €</span>
                                            </div>
                                        </div>
                                        <p id="cart-buttons">
                                            <a id="button_order_cart" class="btn btn-default button button-small lmromancaps" href="r" title="Check out" >Checkout </a></p>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--SEARCH-->
                        <div id="search_block_top" class="smooth05">
                            <form id="searchbox" method="get" action="#">
                                <input type="hidden" name="controller" value="search">
                                <input type="hidden" name="orderby" value="position">
                                <input type="hidden" name="orderway" value="desc">
                                <input class="search_query ac_input" type="text" id="search_query_top" name="search_query" placeholder="Search..." autocomplete="off">
                                <button type="submit" name="submit_search" class="searchbutton smooth02 main_bg_hvr">
                                    <i class="fa fa-search"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </body>

    <script>
        $(document).ready(function () {
            //HEADER
            $(".dropdown1").hover(
                    function () {
                        $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).fadeIn("400");
                        $(this).toggleClass('open');
                    },
                    function () {
                        $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).fadeOut("400");
                        $(this).toggleClass('open');
                    }
            );
            //SEARCH RESIZE
            if ($(window).width() > 728) {
                $('.search_query', this).click(function () {
                    $('#search_block_top').css({'width': '300px'});
                });
                //CLICK OUTSIDE
                $('.search_query', this).blur(function () {
                    $('#search_block_top').css({'width': '230px'});
                });
            }
            window.onresize = function (event)
            {
                if ($(window).width() < 727) {
                    $('#search_block_top').css({'width': '300px'});
                } else {
                    $('#search_block_top').css({'width': '230px'});
                }
            };

        });
    </script>
</html>