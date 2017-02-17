
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
       
			<div class="mod-custom-5">
            <div class="content_wrap-2">
			<div class="container">
            	<div class="wrapper">
                	<div class="row">
			            <div class="breadcrumbs">
			                <a class="breadcrumbs_item home" href="#">Home</a>
			                <span class="breadcrumbs_delimiter">

			                </span><a class="breadcrumbs_item all" href="#">Shop</a>
			                <span class="breadcrumbs_delimiter"></span>
			                <a class="breadcrumbs_item " href="#">Racquet Grips</a>
			                <span class="breadcrumbs_delimiter"></span>
			                <span class="breadcrumbs_item ">HEAD Instinct Junior 25 Prestrung Tennis Racquet</span>
			            </div>
			        </div>    
		        </div>
		    </div>        
        </div>
            <div class="page_content_wrap ">
                
                    <!-- Content -->
                    <div class="container">
                        <article class=" ">
                            <div class="col-md-6">
                                <div class="product ">
                                    <span class="onsale">Sale!</span>
                                    <div class="">
                                        <a class="hover_icon hover_icon_view" href="#">
                                            <img src="images/1.jpg" alt="product-8" title="product-8">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <!-- Summary -->
                                <div class="summary ">
                                    <h1 class="product_title entry-title">HEAD Instinct Junior 25 Prestrung Tennis Racquet</h1>
                                       <i class="fa fa-circle" aria-hidden="true"></i>
	                                <i class="fa fa-circle" aria-hidden="true"></i>
	                                <i class="fa fa-circle" aria-hidden="true"></i>
	                                <i style=" color: #d3ced2;" class="fa fa-circle" aria-hidden="true"></i>
	                                <i style=" color: #d3ced2;" class="fa fa-circle" aria-hidden="true"></i>
                                    <div>
                                        <p class="hell1">

                                            <span class="amount">£148.00</span>

                                            <del>
                                                <span class="amount1">£190.00</span>
                                            </del>
                                        </p>
                                    </div>
                                        <div class="description">
                                    <p>Nullam tincidunt tempus ligula, a dapibus massa ullamcorper et. Aliquam facilisis, massa in malesuada vehicula, odio mauris gravida sem, molestie imperdiet metus urna sit amet ex.</p>
                                        </div>
                                    <form class="cart" method="post">
                                        <div class="">
                                            <input type="number" step="1" min="1" name="quantity" value="1" title="Qty" class="  text" size="4">

                                          <button type="submit" class="single_add_to_cart_button button alt">Add to cart</button>
                                    </form>
                                    <div class="posttt">
                                        <span class="posted_in">Categories:
                                            <a href="#">Racquet Grips</a>,
                                            <a href="#">Racquets</a>,
                                            <a href="#">Sales &amp; Deals</a>
                                        </span>
                                        <br>
                                        <span class="tagged_as">Tags:
                                            <a href="#">equipment</a>,
                                            <a href="#">tennis</a>
                                        </span>
                                        <br>
                                        <span class="product_id">Product ID:1078

                                        </span>

                                    </div>

                                    <!-- /Summary -->
                                    <!-- Woocommerce tabs -->
                                    <div class=""></div>
                                    <!-- /Woocommerce tabs -->
                                    <!-- Related Products -->

                                    <!-- /Related Products -->
                                </div>
                            </div>
                        </article>
                    </div>
                    <!-- /Content -->
              
            </div>
        </div>
		
		
		
		<div class="mod-custom-6">
    	<div class="back">
    		<div class="container">
    			<div class="wrapper">
	    			<div class="abn">
	    				<div class="">
				            <ul class="nav nav-pills">
				            	<li><a  data-toggle="pill" href="#home" title="Show products as thumbs">
				            		Description
				            	</a></li>
				                <li><a data-toggle="pill" href="#menu1" title="Show products as list">
				                	Additional Information
				                </a></li>
				                <li><a data-toggle="pill" href="#menu2" title="Show products as list">
				                	Reviews (2)
				                </a></li>
	                        </ul> 
				        </div>
				        <div class="tab-content">
	                    	<div id="home" class="text-1 tab-pane fade in active ">
	                    		<h2>Product Description</h2>
	                    		<p class="a">
	                    			Nullam justo nibh, luctus id ornare non, rutrum ac ligula. Vestibulum vitae lacus vitae sapien pretium scelerisque quis nec leo. Vestibulum nec justo nisl. Sed vulputate, ligula at blandit tempus, turpis turpis viverra turpis, nec faucibus velit lorem a lacus. Fusce nunc dolor, pretium luctus elit at, interdum sollicitudin lectus. Quisque finibus consequat molestie. Aenean cursus lorem eu fringilla euismod. Pellentesque ullamcorper tempus nisl at sollicitudin. Ut ut maximus lectus, ut condimentum augue. Curabitur non tortor neque. Donec euismod diam sit amet pretium molestie. Sed quis pellentesque velit, vitae rhoncus dolor. Aliquam erat volutpat. Aenean malesuada, risus sed lobortis iaculis, massa erat tristique purus, eu suscipit magna ipsum eu elit. Ut eu orci eget est vestibulum pretium quis ultrices eros.
	                    		</p>
	                    		<p>
	                    			Mauris non rhoncus mauris, ut porta nunc. Nullam tincidunt tempus ligula, a dapibus massa ullamcorper et. Aliquam facilisis, massa in malesuada vehicula, odio mauris gravida sem, molestie imperdiet metus urna sit amet ex. Praesent egestas, nisi vel finibus finibus, dui nulla aliquam metus, sit amet lacinia diam justo sed mauris. Sed efficitur, eros vitae ultricies bibendum, eros nibh pretium massa, ut consequat nisl felis eu libero. Aenean sait amet convallis nisl. Vestibulum sollicitudin nec sem sit amet aliquam. Integer rutrum vel neque nec porttitor.
	                    		</p>
	                    	</div>
	                    	<div id="menu1" class="text-2 tab-pane fade">
	                    		<h2>Additional Information</h2>
	                    		<table class="shop_attributes">
									<tbody>
										<tr>
											<th>Quality</th>
											<td>
												<p>Excellent</p>
											</td>
										</tr>
									</tbody>
								</table>
	                    	</div>
	                    	<div id="menu2" class="text-3 tab-pane fade">
	                    		<h2>2 reviews for HEAD Instinct Junior 25 Prestrung Tennis Racquet</h2>
	                    		<ul class="content-menu">
	                    			<li>
	                    				<div class="user">
	                    					<div class="img">
	                    						<img src="images/user.png">
	                    					</div>
	                    					<div class="comment">
	                    						<div class="star">
													<i class="fa fa-circle ab" aria-hidden="true"></i>
					                                <i class="fa fa-circle ab" aria-hidden="true"></i>
					                                <i class="fa fa-circle ab" aria-hidden="true"></i>
					                                <i class="fa fa-circle ab" aria-hidden="true"></i>
					                                <i class="fa fa-circle ac" aria-hidden="true"></i>
												</div>
	                    						<p class="meta">
													<strong itemprop="author">TRX_admin</strong> – <time itemprop="datePublished" datetime="2016-02-03T08:25:35+00:00">February 3, 2016</time>:
												</p>
	                    					</div>
	                    					<div class="comment-text">
	                    						<p>
					                    			Lorem ipsum dolor sit amet, tibique sadipscing vel in, eros vocent rationibus et quo. Debet euismod mandamus an vim. Ea alia elaboraret vim, in perfecto adolescens quo, ornatus pericula vis an. Vix et movet everti assueverit. Putent apeirian ad his. Consul petentium ad mel.
					                    		</p>
					                    		<p>
					                    			Enim quidam noster vim ut, debitis definiebas vix ei, ut adhuc congue efficiantur pro. Putent quaeque torquatos id mei. Graeco albucius aliquando ius eu, ad usu summo sensibus. Wisi reque vivendum vel no, no harum adipisci eum, sit lorem vocibus aliquando no.
					                    		</p>
	                    					</div>
	                    				</div>
	                    			</li>
	                    			<li>
	                    				<div class="user">
	                    					<div class="img">
	                    						<img src="images/user.png">
	                    					</div>
	                    					<div class="comment">
	                    						<div class="star">
													<i class="fa fa-circle ab" aria-hidden="true"></i>
					                                <i class="fa fa-circle ab" aria-hidden="true"></i>
					                                <i class="fa fa-circle ac" aria-hidden="true"></i>
					                                <i class="fa fa-circle ac" aria-hidden="true"></i>
					                                <i class="fa fa-circle ac" aria-hidden="true"></i>
												</div>
	                    						<p class="meta">
													<strong itemprop="author">TRX_admin</strong> – <time itemprop="datePublished" datetime="2016-02-03T08:25:35+00:00">February 3, 2016</time>:
												</p>
	                    					</div>
	                    					<div class="comment-text">
	                    						<p>Lorem ipsum</p>
	                    					</div>
	                    					<div id="respond" class="">
                                                            <form action="#" method="post" id="" class="">
                                                                <p class="">
                                                                    <label for="rating">Your Rating</label>
                                                                    
                                                                </p>
                                                                <p class="">
                                                                    <label for="comment">Your Review</label>
                                                                    <textarea id="comment" name="comment" cols="45" rows="8" aria="true"></textarea>
                                                                </p>
                                                                <p class="">
                                                                    <label for="author">Name <span class="">*</span></label>
                                                                    <input id="" name="author" type="text" value="" size="30" aria="true">
                                                                </p>
                                                                <p class="">
                                                                    <label for="email">Email <span class="">*</span></label>
                                                                    <input id="" name="email" type="text" value="" size="30" aria="true">
                                                                </p>
                                                                <p class="">
                                                                    <input name="submit" type="submit" id="submit" class="submit" value="Submit">
                                                                </p>
                                                            </form>
                                                        </div>
	                    				</div>
	                    			</li>
	                    		</ul>
	                    	</div>
	                    </div>
	                </div>    	
    			</div>
    		</div>
    	</div>
	</div>            
			
			
			<div class="mod-custom-7">
            <div class="container">

                <div class="related products">
                    <h2>Related Products</h2>
                    <ul class="products">
                        <!-- Product item -->
                        <div class="col-md-3">
                        <li class="first product ">
                            <div class="">
                                <div class="">
                                    <div class="">
                                        <a class="hover_icon hover_icon_view" href="#">
                                        
                                            <img src="images/1.jpg" width="228px" height="228px" alt="product-10" />
                                       </a>
                                        
                                    </div>
                                </div>
                                <div class="post_content">
                                    <h3>
                                        <a href="shop-product-page.html">Penn Championship Extra Tennis Duty</a>
                                    </h3>
                                    <span class="">
                                        <span class="amount">&pound;87.00</span>
                                    </span>
                                    <br>
                                    <br>
                                    <a href="#" class="button product_type_simple add_to_cart_button">Add to cart</a>
                                </div>
                            </div>
                        </li>
                        </div>
                        <!-- /Product item -->
                        <!-- Product item -->
                         <div class="col-md-3">
                        <li class="product  ">
                            <div class="">
                                <div class="">
                                    <div class="">
                                        <a class="hover_icon hover_icon_view" href="#">
                                            <span class="onsale">Sale!</span>
                                            <img src="images/2.jpg"width="207px" height="228px" alt="product-6" />
                                        </a>
                                    </div>
                                </div>
                                <div class="post_content">
                                    <h3>
                                        <a href="shop-product-page.html">Men&#8217;s Climacool Leap Running Tennis Shoe</a>
                                    </h3>
                                    <span class="">
                                        
                                        
                                            <span class="amount">&pound;160.00</span>
                                        
                                    </span>
                                    <br>
                                    <br>
                                    <a href="#" class="button product_type_simple add_to_cart_button">Add to cart</a>
                                </div>
                            </div>
                        </li>
                        <!-- /Product item -->
                        <!-- Product item -->
                         </div>
                         <div class="col-md-3">
                        <li class="product ">
                            <div class="">
                                <div class="">
                                    <div class="">
                                       <a class="hover_icon hover_icon_view" href="#">
                                            <img src="images/3.jpg "width="228px" height="228px" alt="product-1" />
                                        </a>
                                    </div>
                                </div>
                                <div class="post_content">
                                    <h3>
                                        <a href="shop-product-page.html">Tourna Pete Sampras  Ballport, Holds 80</a>
                                    </h3>
                                    <span class="">
                                        <span class="amount">&pound;55.00</span>
                                    </span>
                                    <br>
                                    <br>
                                    <a href="#" class="button product_type_simple add_to_cart_button">Add to cart</a>
                                </div>
                            </div>
                        </li>
                        <!-- /Product item -->
                        <!-- Product item -->
                         </div>
                         <div class="col-md-3">
                        <li class="last product ">
                            <div class="">
                                <div class="">
                                    <div class="">
                                        <a class="hover_icon hover_icon_view" href="#">
                                            <img src="images/4.jpg"width="228ppx" height="228px" alt="product-2" />
                                        </a>
                                    </div>
                                </div>
                                <div class="post_content">
                                    <h3>
                                        <a href="shop-product-page.html">Tourna Fill &#038; Drill  Tennis Trainer</a>
                                    </h3>
                                    <span class="">
                                        <span class="amount">&pound;24.00</span>
                                    </span>
                                    <br>
                                    <br>
                                    <a href="#" class="button product_type_simple add_to_cart_button">Add to cart</a>
                                </div>
                            </div>
                        </li>
                         </div>
                        <!-- /Product item -->
                    </ul>
                </div>
            </div>
        </div>
			
			
			<div class="mod-custom-4">
            <div class="container">
            <footer class="footer_wrap widget_area scheme_original">
                <div class="footer_wrap_inner widget_area_inner">
                    <div class="content_wrap">
                        <div class="columns_wrap">
                            <!-- Widget: Socials -->
                            <aside class="col-md-3">
                                <div class="widget_inner">
                                    <div class="logo">
                                        <a href="index.html">
                                            <img src="images/logo.png" class="logo_main" alt="">
                                        </a>
                                    </div>
                                    <div class="logo_descr">Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed do eiusmod tempor incidt dolore magna aliqua.</div>
                                    <div class="sc_socials sc_socials_type_icons sc_socials_shape_square sc_socials_size_small">
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
                                        <a href="post-single.html">Improve Your Strokes Using The Wall</a>
                                    </li>
                                    <li>
                                        <a href="post-single.html">The Bad Guy Who Has Done Nothing Wrong</a>
                                    </li>
                                    <li>
                                        <a href="post-single.html">From Dreads to Fed: Wimbledon A-Z</a>
                                    </li>
                                </ul>
                            </aside>
                            <!-- /Widget: Recent Entries -->
                            <!-- Widget: Text -->
                            <aside class="col-md-3 ">
                                <h5 class="widget_title">Contact us</h5>
                                <div class="textwidget">
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
                                <article class="post_item with_thumb first">
                                  <div class="col-md-6">
                                    <div class="post_thumb">
                                        <img alt="Improve Your Strokes Using The Wall" src="images/1.jpg">
                                    </div>
                                  </div>
                                    <div class="col-md-6">
                                    <div class="post_content">
                                        <h6 class="post_title">
                                            <a href="post-single.html">Improve Your Strokes Using The Wall</a>
                                        </h6>
                                        <div class="post_info">
                                            <span class="post_info_item post_info_posted">
                                                <a href="#" class="post_info_date">December 4, 2015</a>
                                            </span>
                                            <span class="post_info_item post_info_posted_by">
                                                <a href="#" class="post_info_author">By John Doe</a>
                                            </span>
                                            <span class="post_info_item post_info_counters">
                                                <a href="#" <i class="fa fa-eye" aria-hidden="true"></i>
                                                    <span class="post_counters_number">4</span>
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                    </div>
                                </article>
                                <article class="post_item with_thumb">
                                    <div class="col-md-6">
                                    <div class="post_thumb">
                                        <img alt="The Bad Guy Who Has Done Nothing Wrong" src="images/2.jpg">
                                    </div>
                                        </div>
                                    <div class="col-md-6">
                                    <div class="post_content">
                                        <h6 class="post_title">
                                            <a href="post-single.html">The Bad Guy Who Has Done Nothing Wrong</a>
                                        </h6>
                                        <div class="post_info">
                                            <span class="post_info_item post_info_posted">
                                                <a href="#" class="post_info_date">December 4, 2015</a>
                                            </span>
                                            <span class="post_info_item post_info_posted_by">
                                                <a href="#" class="post_info_author">By John Doe</a>
                                            </span>
                                            <span class="post_info_item post_info_counters">
                                                <a href="#" <i class="fa fa-eye" aria-hidden="true"></i>
                                                    <span class="post_counters_number">4</span>
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
            <div class="copyright_wrap copyright_style_menu">
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
