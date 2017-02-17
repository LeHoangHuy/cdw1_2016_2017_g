
<!DOCTYPE html>
<html lang="en-US">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="format-detection" content="telephone=no">
        <link rel="icon" type="image/x-icon" href="images/favicon.ico" />
        
        <title>Tennis Club</title>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700"  type="text/css">
        <link rel="stylesheet" href="css/fontello/css/fontello.min.css" type="text/css" media="all" />
        <link rel="stylesheet" href="js/vendor/revslider/css/settings.min.css" type="text/css" media="all" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
       
  <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/style.less', 'css/style.css');
        ?>
    </head>
	<body>
            <div class="body_wrap">
                <div class="page_wrap">
                    <!-- Header -->
                    <header class="top_panel_wrap top_panel_style_3 scheme_original">
                        <div class="top_panel_wrap_inner top_panel_inner_style_3 top_panel_position_above">
                            <!-- User panel -->
                            <div class="top_panel_top">
                                <div class="content_wrap clearfix">
                                    <div class="top_panel_top_contact_area icon-smartphone">+44 (0) 1234 56789</div>
                                    <div class="top_panel_top_open_hours icon-mail-2">info@sitename.com</div>
                                    <div class="top_panel_top_user_area">
                                        <ul id="menu_user" class="menu_user_nav">
                                            <li class="menu_user_register">
                                                <a href="#popup_registration" class="popup_link popup_register_link icon-pencil">Register</a>
                                            </li>
                                            <li class="menu_user_login">
                                                <a href="#popup_login" class="popup_link popup_login_link icon-user">Login</a>
                                            </li>
                                            <li class="top_panel_top_search">
                                                <div class="search_wrap search_style_regular search_state_fixed">
                                                    <div class="search_form_wrap">
                                                        <form role="search" method="get" class="search_form" action="#">
                                                            <button type="submit" class="search_submit icon-magnifier" title="Start search"></button>
                                                            <input type="text" class="search_field" placeholder="Search" value="" name="s" />
                                                        </form>
                                                    </div>
                                                    <div class="search_results widget_area scheme_original">
                                                        <a class="search_results_close icon-cancel"></a>
                                                        <div class="search_results_content"></div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="menu_user_cart">
                                                <a href="#" class="top_panel_cart_button">
                                                    <span class="contact_icon icon-shopping-cart-2"></span>
                                                    <span class="contact_label contact_cart_label">cart:</span>
                                                    <span class="contact_cart_totals">
                                                        <span class="cart_items">2 Items</span>
                                                    </span>
                                                </a>
                                                <ul class="widget_area sidebar_cart sidebar">
                                                    <li>
                                                        <div class="widget woocommerce widget_shopping_cart">
                                                            <div class="hide_cart_widget_if_empty">
                                                                <div class="widget_shopping_cart_content">
                                                                    <ul class="cart_list product_list_widget ">
                                                                        <li class="mini_cart_item">
                                                                            <a class="remove" title="Remove this item" href="#">×</a>
                                                                            <a href="shop-product-page.html">
                                                                                <img class="attachment-shop_thumbnail size-shop_thumbnail" alt="product" src="images/product-8-180x180.jpg">
                                                                                HEAD Instinct Junior 25 Prestrung Tennis Racquet
                                                                            </a>
                                                                            <span class="quantity">
                                                                                1 ×
                                                                                <span class="amount">£148.00</span>
                                                                            </span>
                                                                        </li>
                                                                        <li class="mini_cart_item">
                                                                            <a class="remove" title="Remove this item" href="#">×</a>
                                                                            <a href="shop-product-page.html">
                                                                                <img class="attachment-shop_thumbnail size-shop_thumbnail" alt="product" src="images/product-10-180x180.jpg">
                                                                                Penn Championship Extra Tennis Duty Balls
                                                                            </a>
                                                                            <span class="quantity">
                                                                                1 ×
                                                                                <span class="amount">£87.00</span>
                                                                            </span>
                                                                        </li>
                                                                    </ul>
                                                                    <p class="total">
                                                                        <strong>Subtotal:</strong>
                                                                        <span class="amount">£235.00</span>
                                                                    </p>
                                                                    <p class="buttons">
                                                                        <a class="button wc-forward" href="cart.html">View Cart</a>
                                                                        <a class="button checkout wc-forward" href="checkout.html">Checkout</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="top_panel_link">
                                                <a href="court-reservation.html">Reserve a court</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- /User panel -->
                            <!-- Top Menu -->
                            <div class="top_panel_middle">
                                <div class="content_wrap">
                                    <div class="contact_logo">
                                        <div class="logo">
                                            <a href="index.html">
                                                <img src="images/logo.png" class="logo_main" alt="">
                                                <img src="images/logo.png" class="logo_fixed" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="menu_main_social_wrap">
                                        <div class="top_panel_top_socials">
                                            <div class="sc_socials sc_socials_type_icons sc_socials_shape_square sc_socials_size_small">
                                                <div class="sc_socials_item">
                                                    <a href="#" target="_blank" class="social_icons social_twitter">
                                                        <span class="icon-twitter"></span>
                                                    </a>
                                                </div><div class="sc_socials_item">
                                                    <a href="#" target="_blank" class="social_icons social_facebook">
                                                        <span class="icon-facebook"></span>
                                                    </a>
                                                </div><div class="sc_socials_item">
                                                    <a href="#" target="_blank" class="social_icons social_gplus">
                                                        <span class="icon-gplus"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="menu_main_wrap">
                                            <a href="#" class="menu_main_responsive_button icon-menu"></a>
                                            <nav class="menu_main_nav_area">
                                                <ul id="menu_main" class="menu_main_nav">
                                                    <li class="menu-item current-menu-ancestor current-menu-parent menu-item-has-children">
                                                        <a href="#">Home</a>
                                                        <ul class="sub-menu">
                                                            <li class="menu-item current-menu-item current_page_item">
                                                                <a href="index.html">Home 1</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="homepage-2.html">Home 2</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item menu-item-has-children">
                                                        <a href="#">Pages</a>
                                                        <ul class="sub-menu">
                                                            <li class="menu-item">
                                                                <a href="typography.html">Typography</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="shortcodes.html">Shortcodes</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="page-404.html">404</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="about-us.html">About Us</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="our-team.html">Our Team</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="player-profile.html">Player&#8217;s Profile</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="reservation.html">Reservation</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="events-calendar.html">Tournaments</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="membership.html">Membership</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="tennis-lessons.html">Lessons</a>
                                                    </li>
                                                    <li class="menu-item menu-item-has-children">
                                                        <a href="#">News</a>
                                                        <ul class="sub-menu">
                                                            <li class="menu-item">
                                                                <a href="blog-classic.html">Classic</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="blog-colored-excerpt.html">Colored Excerpt</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="blog-masonry.html">Masonry</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="blog-portfolio.html">Portfolio</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="post-formats.html">Post Formats</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="shop.html">Pro Shop</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="contacts.html">Contacts</a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Top Menu -->
                        </div>
                    </header>
                    <!-- /Header -->
                    <!-- Header Mobile -->
                    <div class="header_mobile">
                        <div class="content_wrap">
                            <div class="menu_button icon-menu"></div>
                            <div class="logo">
                                <a href="index.html">
                                    <img src="images/logo.png" class="logo_main" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="side_wrap">
                            <div class="close">Close</div>
                            <div class="panel_top">
                                <nav class="menu_main_nav_area">
                                    <ul id="menu_main_mobile" class="menu_main_nav">
                                        <li class="menu-item current-menu-ancestor current-menu-parent menu-item-has-children">
                                            <a href="#">Home</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item current-menu-item current_page_item">
                                                    <a href="index.html">Home 1</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="homepage-2.html">Home 2</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item menu-item-has-children">
                                            <a href="#">Pages</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item">
                                                    <a href="typography.html">Typography</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="shortcodes.html">Shortcodes</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="page-404.html">404</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="about-us.html">About Us</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="our-team.html">Our Team</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="player-profile.html">Player&#8217;s Profile</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="reservation.html">Reservation</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="events-calendar.html">Tournaments</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item">
                                            <a href="membership.html">Membership</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="tennis-lessons.html">Lessons</a>
                                        </li>
                                        <li class="menu-item menu-item-has-children">
                                            <a href="#">News</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item">
                                                    <a href="blog-classic.html">Classic</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="blog-colored-excerpt.html">Colored Excerpt</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="blog-masonry.html">Masonry</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="blog-portfolio.html">Portfolio</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="post-formats.html">Post Formats</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item">
                                            <a href="shop.html">Pro Shop</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="contacts.html">Contacts</a>
                                        </li>
                                    </ul>
                                </nav>
                                <div class="search_wrap search_style_regular search_state_fixed">
                                    <div class="search_form_wrap">
                                        <form method="get" class="search_form" action="#">
                                            <button type="submit" class="search_submit icon-magnifier" title="Start search"></button>
                                            <input type="text" class="search_field" placeholder="Search" value="" name="s" />
                                        </form>
                                    </div>
                                    <div class="search_results widget_area scheme_original">
                                        <a class="search_results_close icon-cancel"></a>
                                        <div class="search_results_content"></div>
                                    </div>
                                </div>
                                <div class="login">
                                    <a href="#popup_login" class="popup_link popup_login_link">Login</a>
                                </div>
                            </div>
                            <div class="panel_bottom">
                                <div class="contact_socials">
                                    <div class="sc_socials sc_socials_type_icons sc_socials_shape_square sc_socials_size_small">
                                        <div class="sc_socials_item">
                                            <a href="#" target="_blank" class="social_icons social_twitter">
                                                <span class="icon-twitter"></span>
                                            </a>
                                        </div>
                                        <div class="sc_socials_item">
                                            <a href="#" target="_blank" class="social_icons social_facebook">
                                                <span class="icon-facebook"></span>
                                            </a>
                                        </div>
                                        <div class="sc_socials_item">
                                            <a href="#" target="_blank" class="social_icons social_gplus">
                                                <span class="icon-gplus"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div></div></div>
       
			<div class="type-5">
			<div class="top_panel_title top_panel_style_3 title_present breadcrumbs_present scheme_original">
                    <div class="top_panel_title_inner top_panel_inner_style_3 title_present_inner breadcrumbs_present_inner">
                        <div class="content_wrap">
                            <h1 class="page_title">Shop</h1>
                            <div class="breadcrumbs">
                                <a class="breadcrumbs_item home" href="index.html">Home</a>
                                <span class="breadcrumbs_delimiter"></span>
                                <span class="breadcrumbs_item current">Shop</span>
                            </div>
                        </div>
                    </div>
			</div></div>
			
			<div class="list-content">
    <div class="top_inner">     
            <div class="container">
                <div class="wrapper">
                    <div class="row">
                        <div class="right">
                            <div class="type-31">
                                <!-- module 1111111111111111111111111111111111 -->
                                <div class="module-1">
                                    <div class="list_products shop_mode_thumbs">
                                        <div class="clearfix"></div>                             
                                        <div class="vc_row wpb_row vc_row-fluid">
                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                <div class="vc_column-inner ">
                                                    <div class="wpb_wrapper">
                                                        <h2 class="sc_title sc_title_underline sc_align_center margin_top_null">Pro Shop</h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- module 222222222222222222222222222222 -->
                                <div class="module-2">              
                                    <div class="vc_row wpb_row vc_row-fluid vc_custom_1454590673115">
                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                            <div class="vc_column-inner ">
                                                <div class="sc_section shop_banner margin_bottom_large">
                                                    <div class="sc_section_inner">
                                                        <div class="sc_section_overlay">
                                                            <div class="sc_section_content padding_on">
                                                                <div class="columns_wrap sc_columns columns_nofluid sc_columns_count_2">
                                                                    <div class="column-1_2 sc_column_item sc_column_item_1 odd first">
                                                                        <div class="sc_section margin_bottom_small alignright">
                                                                            <div class="sc_section_inner">
                                                                                <h3 class="sc_title sc_title_regular sc_align_center margin_top_medium margin_bottom_tiny">New Tennis <br>Footwear</h3>
                                                                                <div class="wpb_text_column wpb_content_element  text_uppercase custom_line_height1">
                                                                                    <div class="wpb_wrapper">
                                                                                        <p><span>Premium quality shoes to fit the level</span><br><span> from beginners to professionals</span></p>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="clearfix"></div>
                                                                                <a href="#" class="sc_button sc_button_square sc_button_style_filled sc_button_size_large aligncenter margin_top_small">
                                                                                    <span class="cube flip-to-top">
                                                                                        <span class="default-state">
                                                                                            <span>Learn more</span>
                                                                                        </span>
                                                                                        <span class="active-state">
                                                                                            <span>Learn more</span>
                                                                                        </span>
                                                                                    </span>
                                                                                </a>
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
                                <div class="clearfix"></div>
                                <!-- module 33333333333333333333333333333333333 --> 
                                <div class="module-3">              
                                    <div class="mode_buttons">
                                        <ul class="nav nav-pills">
                                            <li><a  data-toggle="pill" href="#home" class="active woocommerce_thumbs icon-th" title="Show products as thumbs"></a>
                                            <li><a data-toggle="pill" href="#menu1" class="woocommerce_list icon-th-list" title="Show products as list"></a></li>
                                        </ul> 
                                    </div>
                                    <p class="woocommerce-result-count">
                                        Showing 1&ndash;9 of 10 results</p>
                                    <form class="ordering" method="get">
                                        <select name="orderby" class="orderby">
                                            <option value="menu_order" selected='selected'>Default sorting</option>
                                            <option value="popularity">Sort by popularity</option>
                                            <option value="rating">Sort by average rating</option>
                                            <option value="date">Sort by newness</option>
                                            <option value="price">Sort by price: low to high</option>
                                            <option value="price-desc">Sort by price: high to low</option>
                                        </select>
                                        <input type="hidden" name="q" value="/shop/" />
                                    </form>   
                                    <div class="tab-content">
                                        <div id="home" class="tab-pane fade in active ">
                                            <ul class="products">
                                                <li class="post-10 column-1_3 product">
                                                    <div class="post_item_wrap">
                                                        <div class="post_featured">
                                                            <div class="post_thumb">
                                                                <a class="hover_icon hover_icon_link" href="http://localhost:82/Nhom-J/type-J-detail-46/gop/detail.php">
                                                                    <span class="onsale">Sale!</span>
                                                                    <img width="300" height="300" src="images/product-8-300x300.jpg" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="product-8" title="product-8" /> 
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="post_content">
                                                            <h3>
                                                                <a href="#">HEAD Instinct Junior 25 Prestrung Tennis Racquet</a>
                                                            </h3>
                                                            <div class="star-rating"></div>    
                                                            <span class="price">
                                                                <span class="woocommerce-Price-amount amount">
                                                                <span class="Symbol">&pound;</span>148.00</span>
                                                                <del>
                                                                    <span class="price-amount amount"><span class="Symbol">&pound;</span>199.00</span>
                                                                </del>
                                                            </span>
                                                            <div class="as">
                                                                <a href="#" data-quantity="1" data-product_id="1078" data-product_sku="" class="button">Add to cart</a> 
                                                            </div>   
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="post-10 column-1_3 product">
                                                    <div class="post_item_wrap">
                                                        <div class="post_featured">
                                                            <div class="post_thumb">
                                                                <a class="hover_icon hover_icon_link" href="http://localhost:82/Nhom-J/type-J-detail-46/gop/detail.php">
                                                                    <span class="onsale">Sale!</span>
                                                                    <img width="300" height="300" src="images/product-8-300x300.jpg" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="product-8" title="product-8" /> 
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="post_content">
                                                            <h3>
                                                                <a href="#">HEAD Instinct Junior 25 Prestrung Tennis Racquet</a>
                                                            </h3>
                                                            <div class="star-rating"></div>    
                                                            <span class="price">
                                                                <span class="woocommerce-Price-amount amount">
                                                                <span class="Symbol">&pound;</span>148.00</span>
                                                                <del>
                                                                    <span class="price-amount amount"><span class="Symbol">&pound;</span>199.00</span>
                                                                </del>
                                                            </span>
                                                            <div class="as">
                                                                <a href="#" data-quantity="1" data-product_id="1078" data-product_sku="" class="button">Add to cart</a> 
                                                            </div>   
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="post-10 column-1_3 product">
                                                    <div class="post_item_wrap">
                                                        <div class="post_featured">
                                                            <div class="post_thumb">
                                                                <a class="hover_icon hover_icon_link" href="http://localhost:82/Nhom-J/type-J-detail-46/gop/detail.php">
                                                                    <span class="onsale">Sale!</span>
                                                                    <img width="300" height="300" src="images/product-8-300x300.jpg" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="product-8" title="product-8" /> 
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="post_content">
                                                            <h3>
                                                                <a href="#">HEAD Instinct Junior 25 Prestrung Tennis Racquet</a>
                                                            </h3>
                                                            <div class="star-rating"></div>    
                                                            <span class="price">
                                                                <span class="woocommerce-Price-amount amount">
                                                                <span class="Symbol">&pound;</span>148.00</span>
                                                                <del>
                                                                    <span class="price-amount amount"><span class="Symbol">&pound;</span>199.00</span>
                                                                </del>
                                                            </span>
                                                            <div class="as">
                                                                <a href="#" data-quantity="1" data-product_id="1078" data-product_sku="" class="button">Add to cart</a> 
                                                            </div>   
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div id="menu1" class="tab-pane fade">
                                            <ul class="products-1">
                                                <li class="post-10 column-2_3 product-1">
                                                    <div class="post_item_wrap-1">
                                                        <div class="post_featured-1">
                                                            <div class="post_thumb">
                                                                <a class="hover_icon hover_icon_link" href="http://localhost:82/Nhom-J/type-J-detail-46/gop/detail.php">
                                                                    <span class="onsale">Sale!</span>
                                                                    <img width="300" height="300" src="images/product-8-300x300.jpg" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="product-8" title="product-8" /> 
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="post_content-1">
                                                            <h3>
                                                                <a href="#">HEAD Instinct Junior 25 Prestrung Tennis Racquet</a>
                                                            </h3>
                                                            <div class="star-rating-1"></div> 
                                                            <div class="description"><p>Nullam tincidunt tempus ligula, a dapibus massa ullamcorper et. Aliquam facilisis, massa in malesuada vehicula, odio mauris gravida sem, molestie imperdiet metus urna sit amet ex.</p></div>   
                                                            <span class="price-1">
                                                                <span class="woocommerce-Price-amount amount">
                                                                <span class="Symbol">&pound;</span>148.00</span>
                                                                <del>
                                                                    <span class="price-amount-1 amount"><span class="Symbol">&pound;</span>199.00</span>
                                                                </del>
                                                            </span>
                                                            <div class="as-1">
                                                                <a href="#" data-quantity="1" data-product_id="1078" data-product_sku="" class="button-1">Add to cart</a> 
                                                            </div>   
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="post-10 column-2_3 product-1">
                                                    <div class="post_item_wrap-1">
                                                        <div class="post_featured-1">
                                                            <div class="post_thumb">
                                                                <a class="hover_icon hover_icon_link" href="http://localhost:82/Nhom-J/type-J-detail-46/gop/detail.php">
                                                                    <span class="onsale">Sale!</span>
                                                                    <img width="300" height="300" src="images/product-8-300x300.jpg" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="product-8" title="product-8" /> 
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="post_content-1">
                                                            <h3>
                                                                <a href="#">HEAD Instinct Junior 25 Prestrung Tennis Racquet</a>
                                                            </h3>
                                                            <div class="star-rating-1"></div> 
                                                            <div class="description"><p>Nullam tincidunt tempus ligula, a dapibus massa ullamcorper et. Aliquam facilisis, massa in malesuada vehicula, odio mauris gravida sem, molestie imperdiet metus urna sit amet ex.</p></div>   
                                                            <span class="price-1">
                                                                <span class="woocommerce-Price-amount amount">
                                                                <span class="Symbol">&pound;</span>148.00</span>
                                                                <del>
                                                                    <span class="price-amount-1 amount"><span class="Symbol">&pound;</span>199.00</span>
                                                                </del>
                                                            </span>
                                                            <div class="as-1">
                                                                <a href="#" data-quantity="1" data-product_id="1078" data-product_sku="" class="button-1">Add to cart</a> 
                                                            </div>   
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="post-10 column-2_3 product-1">
                                                    <div class="post_item_wrap-1">
                                                        <div class="post_featured-1">
                                                            <div class="post_thumb">
                                                                <a class="hover_icon hover_icon_link" href="http://localhost:82/Nhom-J/type-J-detail-46/gop/detail.php">
                                                                    <span class="onsale">Sale!</span>
                                                                    <img width="300" height="300" src="images/product-8-300x300.jpg" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="product-8" title="product-8" /> 
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="post_content-1">
                                                            <h3>
                                                                <a href="#">HEAD Instinct Junior 25 Prestrung Tennis Racquet</a>
                                                            </h3>
                                                            <div class="star-rating-1"></div> 
                                                            <div class="description"><p>Nullam tincidunt tempus ligula, a dapibus massa ullamcorper et. Aliquam facilisis, massa in malesuada vehicula, odio mauris gravida sem, molestie imperdiet metus urna sit amet ex.</p></div>   
                                                            <span class="price-1">
                                                                <span class="woocommerce-Price-amount amount">
                                                                <span class="Symbol">&pound;</span>148.00</span>
                                                                <del>
                                                                    <span class="price-amount-1 amount"><span class="Symbol">&pound;</span>199.00</span>
                                                                </del>
                                                            </span>
                                                            <div class="as-1">
                                                                <a href="#" data-quantity="1" data-product_id="1078" data-product_sku="" class="button-1">Add to cart</a> 
                                                            </div>   
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>    
                                    </div>
                                </div>  
                                <div class="clearfix"></div>
                                <div class="module-4"> 
                                    <nav id="pagination" class="pagination_wrap pagination_pages"><span class="pager_current active ">1</span>
                                        <a href="#" class="">2</a>
                                        <a href="#" class="pager_next "></a>
                                        <a href="#" class="pager_last "></a>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="left">
                            <div class="type-37">
                                <div class="category">
                                    <div class="category-content">
                                        <div class="content">
                                            <h5>CATEGORIES</h5>
                                            <ul class="product-categories">
                                                <li class="cat-item cat-item-68"><a href="#">Ball Machines</a></li>
                                                <li class="cat-item cat-item-62"><a href="#">Clothing</a></li>
                                                <li class="cat-item cat-item-66"><a href="#">Equipment Bags</a></li>
                                                <li class="cat-item cat-item-63"><a href="#">Footwear</a></li>
                                                <li class="cat-item cat-item-67"><a href="#">Racquet Grips</a></li>
                                                <li class="cat-item cat-item-64"><a href="#">Racquets</a></li>
                                                <li class="cat-item cat-item-61"><a href="#">Sales & Deals</a></li>
                                                <li class="cat-item cat-item-65"><a href="#">Tennis Balls</a></li>
                                            </ul>
                                        </div>
                                        <!--------------END ------------>

                                        <!--------------START ------------>
                                        <aside id="woocommerce_price_filter-2" class="widget_number_2 widget woocommerce widget_price_filter">
                                            <h5 class="widget_title">Filter by price</h5>
                                            <form>
                                                <div class="price_slider_wrapper">
                                                    <div class="price_slider ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" style="">
                                                        <div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 0%; width: 100%;"></div><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 0%;"></span><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 100%;"></span>
                                                    </div>
                                                    <div class="price_slider_amount">
                                                        <input type="text" id="min_price"  value="" data-min="20"  style="display: none;">
                                                        <input type="text" id="max_price"  value="" data-max="99"  style="display: none;">
                                                        <div class="price_label" style=""> Price: <span class="from">£20</span> — <span class="to">£99</span> </div>
                                                        <button type="submit" class="button" style="margin-top: 30px">Filter</button>
                                                        
                                                        <div class="clear"></div>
                                                    </div>
                                                </div>
                                            </form>
                                        </aside>
                                        <!--------------END ------------>

                                        <!--------------START ------------>
                                        <div class="category-search">
                                            <form role="search" method="get" class="search_form">
                                                <input type="text" class="search_field" placeholder="Search for products …" value="" name="s" title="Search for products:"><button class="search_button icon-search" type="submit"></button>
                                                <input type="hidden" name="post_type" value="product">
                                            </form>
                                        </div>
                                        <!--------------END ------------>
                                    </div>
                                </div>
                            </div>
                            <div class="type-21">
                                <div class="product-tag">
                                    <div class="product-tag-content">
                                        <div class="content2">
                                            <h5>PRODUCT TAGS</h5>
                                            <a href="#" class="content1">apparel</a>
                                            <a href="#" class="content1">bags</a>
                                            <a href="#" class="content1">balls</a>
                                            <a href="#" class="content1">equitment</a>
                                            <a href="#" class="content1">green</a>
                                            <a href="#" class="content1">machine</a>
                                            <a href="#" class="content1">tennis</a>
                                            <a href="#" class="content1">yellow</a>

                                        </div>
                                        <!--------------END ------------>
                                        <aside id="woocommerce_top_rated_products-2" class="widget_number_5 widget woocommerce widget_top_rated_products"><h5 class="widget_title">Top Rated Products</h5>
                                        <ul class="product_list_widget">
                                                <li>
                                                    <a href="#" title="Tourna Mesh Pack of 12 Tennis Balls">
                                                        <img src="images/product-7-300x300.jpg" alt=""/>  <span class="product-title">Tourna Mesh Pack of 12 Tennis Balls</span>

                                                    </a>
                                                    <i class="fa fa-circle" aria-hidden="true"></i>
                                                    <i class="fa fa-circle" aria-hidden="true"></i>
                                                    <i class="fa fa-circle" aria-hidden="true"></i>
                                                    <i class="fa fa-circle" aria-hidden="true"></i>
                                                    <i style="color:#DBDCDE;" class="fa fa-circle" aria-hidden="true"></i></br>
                                                    <div class="money">
                                                        £19.99
                                                    </div>
                                                <li>
                                                    <a href="#" title="Tourna Mesh Pack of 12 Tennis Balls">
                                                        <img src="images/product-8-300x300.jpg" alt=""/> <span class="product-title">HEAD Instinct Junior 25 Prestrung Tennis Racquet</span>
                                                    </a>
                                                    <i class="fa fa-circle" aria-hidden="true"></i>
                                                    <i class="fa fa-circle" aria-hidden="true"></i>
                                                    <i class="fa fa-circle" aria-hidden="true"></i>

                                                    <i style="color:#DBDCDE;" class="fa fa-circle" aria-hidden="true"></i>

                                                    <i style="color:#DBDCDE;" class="fa fa-circle" aria-hidden="true"></i></br>
                                                   <div class="money"style="float:right;">
                                                        <del style="color:black;">£199.00</del>
                                                       £148.00
                                                    </div> 
                                                <li>
                                                    <a href="#" title="Tourna Mesh Pack of 12 Tennis Balls">
                                                        <img src="images/product-11-300x300.jpg" alt=""/> <span class="product-title">Penn Championship Extra Duty Balls</span>
                                                    </a>
                                                   
                                                    <div class="money">
                                                       £87.00
                                                    </div>
                                        </ul></aside>
                                        <!--------------START ------------>


                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>  
                </div>
            </div>
        </div>
            </div>
			
			
			  <div class="mod-custom-4 col-md-12">
            <div class="container">
            <footer class="footer_wrap widget_area ">
                <div class="footer_wrap_inner widget_area_inner">
                    <div class="content_wrap">
                        <div class="columns_wrap">
                            <!-- Widget: Socials -->
                            <aside class="col-md-3">
                                <div class="">
                                    <div class="logo">
                                        <a href="#">
                                            <img src="images/logo.png" class="" alt="">
                                        </a>
                                    </div>
                                    <div class="">Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed do eiusmod tempor incidt dolore magna aliqua.</div>
                                    <div class="sc_socials sc_socials_type_icons  sc_socials_size_small">
                                        <div class="sc_socials_item">
                                            <a href="#" target="_blank" class="social_icons social_twitter">
                                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                        <div class="sc_socials_item">
                                            <a href="#" target="_blank" class="social_icons social_facebook">
                                                <i class="fa fa-facebook" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                        <div class="sc_socials_item">
                                            <a href="#" target="_blank" class="social_icons social_gplus">
                                                <i class="fa fa-google-plus" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </aside>
                            <!-- /Widget: Socials -->
                            <!-- Widget: Recent Entries -->
                            <aside class="col-md-3 ">
                                <h5 class="widget_title">Latest News</h5>
                                <ul>
                                    <li>
                                        <a href="#">Improve Your Strokes Using The Wall</a>
                                    </li>
                                    <li>
                                        <a href="#">The Bad Guy Who Has Done Nothing Wrong</a>
                                    </li>
                                    <li>
                                        <a href="#">From Dreads to Fed: Wimbledon A-Z</a>
                                    </li>
                                </ul>
                            </aside>
                            <!-- /Widget: Recent Entries -->
                            <!-- Widget: Text -->
                            <aside class="col-md-3 ">
                                <h5 class="widget_title">Contact us</h5>
                                <div class="">
                                    <strong>Address</strong>
                                    <p> 8500 Lorem Street, Chicago, IL, 55030</p>
                                    <strong>Call Us</strong>
                                    <p>(123) 456-78-90</p>
                                    <strong>Email</strong>
                                    <p>sales@yoursite.com</p>
                                </div>
                            </aside>
                            <!-- /Widget: Text -->
                            <!-- Widget: RecentPosts -->
                            <aside class="col-md-3 ">
                                <h5 class="widget_title">Latest Posts</h5>
                                <article class="post_item  first">
                                  <div class="col-md-6">
                                    <div class="">
                                        <img alt="Improve Your Strokes Using The Wall" src="images/1.jpg">
                                    </div>
                                  </div>
                                    <div class="col-md-6">
                                    <div class="post_content">
                                        <h6 class="post_title">
                                            <a href="#">Improve Your Strokes Using The Wall</a>
                                        </h6>
                                        <div class="post_info">
                                            <span class="">
                                                <a href="#" class="">December 4, 2015</a>
                                            </span>
                                            <span class="">
                                                <a href="#" class="">By John Doe</a>
                                            </span>
                                            <span class="">
                                                <a href="#" <i class="fa fa-eye" aria-hidden="true"></i>
                                                    <span class="">4</span>
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                    </div>
                                </article>
                                <article class="post_item ">
                                    <div class="col-md-6">
                                    <div class="">
                                        <img alt="The Bad Guy Who Has Done Nothing Wrong" src="images/2.jpg">
                                    </div>
                                        </div>
                                    <div class="col-md-6">
                                    <div class="post_content">
                                        <h6 class="post_title">
                                            <a href="#">The Bad Guy Who Has Done Nothing Wrong</a>
                                        </h6>
                                        <div class="post_info">
                                            <span class="">
                                                <a href="#" class="">December 4, 2015</a>
                                            </span>
                                            <span class="">
                                                <a href="#" class="">By John Doe</a>
                                            </span>
                                            <span class="">
                                                <a href="#" <i class="fa fa-eye" aria-hidden="true"></i>
                                                    <span class="">4</span>
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                        </div>
                                </article>
                            </aside>
                            <!-- /Widget: RecentPosts -->
                        </div>
                    </div>
                </div>
            </footer>
                
            </div>
            <div class=" ">
                    <div class="copyright_wrap_inner">
                        <div class="content_wrap">
                            <div class="copyright_text">ThemeREX © 2016 All Rights Reserved
                                <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
       
			
			
			
	   <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="js/jquery/jquery.js"></script>
        <script type="text/javascript" src="js/_packed.js"></script>
        <script type="text/javascript" src="js/core.utils.min.js"></script>
        <script type="text/javascript" src="js/core.init.min.js"></script>

	<body>
  

</html> 
