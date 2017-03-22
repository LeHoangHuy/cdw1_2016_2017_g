<!DOCTYPE html>

<html style="background-color: #f3f3f4;">

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/type-i-1.less', 'css/type-i-1.css');
        ?>
        <link href="css/type-i-1.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/scripts_1.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="type-i-1">
            <div id="index" class="index not_content_only lang_en preset4 bigscr">
                <div id="white_bg" class="smooth05">
                    <div>
                        <!--header-->
                        <div class="page_width header">
                            <div id="header">
                                <!--language block top-->
                                <div id="languages_block_top" class="dib">
                                    <div id="countries" class="dropdown">
                                        <span class="selected_language smooth02">
                                            <img src="images/1.jpg" class="dib" width="16" height="11" alt="en">
                                            <a class="dib" href="#">English</a>
                                            <i class="fa fa-angle-down"></i>
                                        </span>
                                        <ul id="first-languages" class="dropdown-menu">

                                            <li class="smooth02 main_bg_hvr"> 
                                                <img src="images/2.jpg" class="dib">
                                                <a href="#" title="Deutsch">Deutsch</a>
                                            </li>
                                            <li class="smooth02 main_bg_hvr">
                                                <img src="images/3.jpg" class="dib">
                                                <a href="#" title="Espa�ol">Espa�ol</a>
                                            </li>
                                            <li class="smooth02 main_bg_hvr">
                                                <img src="images/4.jpg" class="dib" >
                                                <a href="#" title="Fran�ais">Français</a>
                                            </li>
                                            <li class="smooth02 main_bg_hvr">
                                                <img src="images/7.jpg" class="dib">
                                                <a href="#">العربية</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                <!--currencies_block_top-->
                                <div id="currencies_block_top" class="dib">
                                    <form id=""   method="post" class="dropdown">
                                        <div id="currencyHolder" class="dropdown">
                                            <span class="dib smooth02">  
                                                <i class="fa fa-money"></i>
                                                <span>Dollar</span>
                                                <i class="fa fa-angle-down" id="color-down"></i>
                                            </span>
                                            <ul class="dropdown-menu">
                                                <li class="smooth02" data-value="2" onclick="setCurrency($(this).data('value'));">
                                                    <span class="currency-sign">
                                                        <span>�</span>
                                                    </span>Euro
                                                </li>
                                                <li class="smooth02" data-value="3" onclick="setCurrency($(this).data('value'));"> 
                                                    <span class="currency-sign">
                                                        <span>?</span>
                                                    </span>Pound
                                                </li>
                                            </ul> 
                                        </div>

                                    </form>
                                </div>


                                <div id="pk_customlinks" class="dib">
                                    <ul>
                                        <!--my account-->
                                        <li class="pk_account dib smooth02 main_bg_hvr dropdown"> 
                                            <a href="#" title="My Account" class="dropdown-toggle" data-toggle="dropdown">
                                                <i class="fa fa-user"></i>
                                                <span class="remove">My Account</span>
                                            </a>
                                            <div class="dd_container main_bg dropdown-menu">
                                                <div class="indent">
                                                    <ul >
                                                        <li>
                                                            <a href="#" title="My orders" rel="nofollow">My orders</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="My credit slips" rel="nofollow">My credit slips</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="My addresses" rel="nofollow">My addresses</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Manage my personal information" rel="nofollow">My personal info</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="My vouchers" rel="nofollow">My vouchers</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <!--wish list-->
                                        <li class="pk_wishlist dib smooth02 main_bg_hvr dropdown"> 
                                            <a href="#" title="My Wishlist">
                                                <i class="fa fa-gift"></i>
                                                <span class="remove">My Wishlist (<span>0</span>)</span>
                                            </a>
                                            <div class="dd_container main_bg dropdown-menu">
                                                <div class="indent">
                                                    <ul class="wishlist-list">
                                                        <li class="no-products">No products</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <!--watch list-->
                                        <li class="pk_watchlist dib smooth02 main_bg_hvr dropdown">
                                            <a href="#" title="Recently viewed products">
                                                <i class="fa fa-eye"></i>
                                                <span class="remove">Watch List 
                                                    <span>(0)</span>
                                                </span>
                                            </a>
                                            <div class="dd_container main_bg dropdown-menu">
                                                <div class="indent">
                                                    <ul>
                                                        <li class="no-products">No viewed products yet.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!--logo-->
                                <div id="header_logo"> 
                                    <a href="#" title="Alysum"> 
                                        <img src="images/Alysum.PNG" width="250" height="72">
                                        <span class="hidden"> 
                                            <span>Alysum</span>
                                        </span> 
                                    </a>
                                </div>
                                <!--user login-->
                                <div id="header_user" class="dib">
                                    <ul id="header_nav">
                                        <li id="header_user_info">
                                            <i class="fa fa-sign-in"></i>
                                            <a href="#" class="main_color_hvr">Sign in</a>
                                            or 
                                            <a href="#" class="main_color_hvr">Register</a>
                                        </li>
                                    </ul>
                                </div>
                                <!--search-->
                                <div id="search_block_top" class="smooth05">
                                    <form id="" method="get" action="#">
                                        <input type="hidden" name="controller" value="search">
                                        <input type="hidden" name="orderby" value="position">
                                        <input type="hidden" name="orderway" value="desc">
                                        <input class="search_query" type="text" id="search_query_top" name="search_query" placeholder="Search..." autocomplete="off">
                                        <button type="submit" name="submit_search" class="searchbutton smooth02">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </form>
                                </div>
                                <!--shopping-->
                                <div id="shopping_cart" class="smooth05 dropdown">
                                    <a href="#" title="View my shopping cart" rel="nofollow">
                                        <i class="fa fa-shopping-basket"></i>
                                        <b>Cart:</b> 
                                        <span class="ajax_cart_quantity mobile_cart_num">1</span>
                                        <span class="ajax_cart_product_txt">(empty)</span> 
                                        <span class=" unvisible">Products</span>
                                        <span class="ajax_cart_total"> 112,42 � </span> 
                                        <span class=" unvisible">(empty)</span>
                                    </a>
                                </div>
                                <!--contact-->
                                <div class="c_block">
                                    <div class="header-box contact-phones pull-left clearfix">
                                        <span class="dib">
                                            <i class="fa fa-headphones"></i>
                                        </span>
                                        <ul class="pull-left dib">
                                            <li>+(404) 158 14 25 78</li>
                                            <li>+(404) 851 21 48 15</li>
                                        </ul>
                                    </div>
                                    <div class="header-box contact-phones pull-right">
                                        <ul>
                                            <li>
                                                <span class=" ">
                                                    <i class="fa fa-skype" aria-hidden="true"></i>
                                                </span>alysum_store
                                            </li>
                                            <li>
                                                <span>
                                                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                                </span>alysum@gmail.com
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--mega menu-->
                        <div class="flexmenu-container">
                            <div class="page_width">
                                <div class="menu-container flexmenu">
                                    <div class="mega-menu">
                                        <div class="mobileMenuTitle">Menu</div>
                                        <ul class="mega-menu-ul">
                                            <li class="dropdown mega-menu-item">
                                                <a href="#" class="menu-item dropdown-toggle">
                                                    <span>Women</span> 
                                                </a>	
                                                <a href="#" class="opener"></a>
                                                <div class="dropdown-menu mega-dropdown-menu" >
                                                    <div class="col-md-2 col-sm-3 mobile-hide">
                                                        <ul class="first-item">
                                                            <li class="dropdown-header">OUR OFFER</li>  
                                                            <div class="item active">
                                                                <a href="#">
                                                                    <img src="images/dress-tibi-red-rococo-print.jpg" class="img-responsive" alt="">
                                                                </a> 
                                                            </div>

                                                            <li class="divider"></li>
                                                            <li>
                                                                <a href="#">Dress Tibi Red...</a>
                                                                <span class="price">$365.00</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-10 col-sm-10">
                                                        <ul>
                                                            <li class="col-md-2 col-sm-3 ">
                                                                <ul>
                                                                    <li class="dropdown-header"><a href="#">HANDBAGS</a></li>
                                                                    <li><a href="#">Totes</a></li>
                                                                    <li><a href="#">Clutches</a></li>
                                                                    <li><a href="#">Cross body</a></li>
                                                                    <li><a href="#">Satchels</a></li>
                                                                    <li><a href="#">Shoulder</a></li> 
                                                                </ul>
                                                            </li>
                                                            <li class="col-md-2 col-sm-3  ">
                                                                <ul>
                                                                    <li class="dropdown-header"><a href="#">ACCESSORIES</a></li>
                                                                    <li><a href="#">Bags and Purces</a></li>
                                                                    <li><a href="#">Belts</a></li>
                                                                    <li><a href="#">Scarves</a></li>
                                                                    <li><a href="#">Gloves</a></li>
                                                                    <li><a href="#">Jewellery</a></li>
                                                                    <li><a href="#">Sunglasses</a></li>							
                                                                </ul>
                                                            </li>
                                                            <li class="col-md-2 col-sm-3 ">
                                                                <ul>
                                                                    <li class="dropdown-header"><a href="#">TOPS</a></li>
                                                                    <li><a href="#">Sleeveless</a></li>
                                                                    <li><a href="#">Tanks</a></li>
                                                                    <li><a href="#">Tunics</a></li>
                                                                    <li><a href="#">Short Sleeved</a></li>
                                                                    <li><a href="#">Long Sleeved</a></li>
                                                                    <li><a href="#">Evening Tops</a></li>                        
                                                                </ul>
                                                            </li>
                                                            <li class="col-md-2 col-sm-3 ">
                                                                <ul>
                                                                    <li class="dropdown-header"><a href="#">DRESSES</a></li>
                                                                    <li><a href="#">Strapless Dresses</a></li>
                                                                    <li><a href="#">Evening Dresses</a></li>
                                                                    <li><a href="#">Casual Dresses</a></li>
                                                                    <li><a href="#">Party Dresses</a></li>
                                                                    <li><a href="#">Maxi Dresses</a></li>
                                                                    <li><a href="#">Midi Dresses</a></li>                         
                                                                </ul>
                                                            </li>
                                                            <li class="col-md-2 col-sm-3 ">
                                                                <ul>
                                                                    <li class="dropdown-header"><a href="#">CLOTHES</a></li>
                                                                    <li><a href="#">Suits</a></li>
                                                                    <li><a href="#">T-Shorts</a></li>
                                                                    <li><a href="#">Polo Shirts</a></li>
                                                                    <li><a href="#">Jeans</a></li>
                                                                    <li><a href="#">Trousers</a></li>
                                                                    <li><a href="#">Chinos</a></li>                       
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-10 col-sm-10 mobile-hide deskimg clearfix">
                                                        <a>
                                                            <img src="images/banner-bottom.jpg">
                                                        </a>
                                                    </div>
                                                </div>	
                                            </li>
                                            <li class="dropdown mega-menu-item">
                                                <a href="#" class="menu-item dropdown-toggle" data-toggle="dropdown">
                                                    <span>Men</span>
                                                </a>				
                                                <a href="#" class="opener"></a>
                                                <div class="container dropdown-menu mega-dropdown-menu" >
                                                    <div class="col-md-2 col-sm-3 mobile-hide">
                                                        <ul class="first-item">
                                                            <div class="item active">
                                                                <a href="#">
                                                                    <img src="images/banner-left.jpg" class="img-responsive" alt="">
                                                                </a>
                                                            </div> 
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-8 col-sm-8 ">
                                                        <ul>
                                                            <li class="col-md-3 col-sm-6">
                                                                <ul>
                                                                    <li class="dropdown-header"><a href="#">HANDBAGS</a></li>
                                                                    <li><a href="#">Totes</a></li>
                                                                    <li><a href="#">Clutches</a></li>
                                                                    <li><a href="#">Cross body</a></li>
                                                                    <li><a href="#">Satchels</a></li>
                                                                    <li><a href="#">Shoulder</a></li> 
                                                                </ul>
                                                            </li>
                                                            <li class="col-md-3 col-sm-6">
                                                                <ul>
                                                                    <li class="dropdown-header"><a href="#">ACCESSORIES</a></li>
                                                                    <li><a href="#">Bags and Purces</a></li>
                                                                    <li><a href="#">Belts</a></li>
                                                                    <li><a href="#">Scarves</a></li>
                                                                    <li><a href="#">Gloves</a></li>
                                                                    <li><a href="#">Jewellery</a></li>
                                                                    <li><a href="#">Sunglasses</a></li>							
                                                                </ul>
                                                            </li>
                                                            <li class="col-md-3 col-sm-6">
                                                                <ul>
                                                                    <li class="dropdown-header"><a href="#">TOPS</a></li>
                                                                    <li><a href="#">Sleeveless</a></li>
                                                                    <li><a href="#">Tanks</a></li>
                                                                    <li><a href="#">Tunics</a></li>
                                                                    <li><a href="#">Short Sleeved</a></li>
                                                                    <li><a href="#">Long Sleeved</a></li>
                                                                    <li><a href="#">Evening Tops</a></li>                          
                                                                </ul>
                                                            </li>
                                                            <li class="col-md-3 col-sm-6">
                                                                <ul>
                                                                    <li class="dropdown-header"><a href="#">DRESSES</a></li>
                                                                    <li><a href="#">Strapless Dresses</a></li>
                                                                    <li><a href="#">Evening Dresses</a></li>
                                                                    <li><a href="#">Casual Dresses</a></li>
                                                                    <li><a href="#">Party Dresses</a></li>
                                                                    <li><a href="#">Maxi Dresses</a></li>
                                                                    <li><a href="#">Midi Dresses</a></li>                          
                                                                </ul>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                    <div class="col-md-2 col-sm-2 mobile-hide">
                                                        <ul class="first-item">
                                                            <li class="dropdown-header">Men Collection</li>  
                                                            <div class="item active">
                                                                <a href="#">
                                                                    <img src="images/sid-sweat-orange.jpg" class="img-responsive" alt="">
                                                                </a>
                                                            </div>

                                                            <li class="divider"></li>
                                                            <li>
                                                                <a href="#">View all Collection 

                                                                </a >
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>	
                                            </li>


                                            <li class="dropdown mega-menu-item">
                                                <a href="#"class="menu-item">
                                                    <span>About Us</span>
                                                </a>
                                                <a href="#" class="opener"></a>

                                                <div class="container dropdown-menu mega-dropdown-menu" style="text-align: center;">
                                                    <div class="align-center">
                                                        <h2>Alysum -  is the universal theme, with the pleasant and clean design.</h2>
                                                        <p>With this theme you can easily create your unique shop, choosing any colors & over 500 Google fonts. </p>
                                                    </div>
                                                    <div class="col-md-3 col-sm-3 clearfix align-center">
                                                        <img src="images/mic01.png">
                                                        <h4>Responsive design</h4>
                                                        <p> Alysum 100% responsive and supports all&nbsp;devices from desktop to small cell phones.</p>
                                                    </div>
                                                    <div class="col-md-3 col-sm-3 align-center">
                                                        <img src="images/mic02.png">
                                                        <h4>Responsive design</h4>
                                                        <p> Alysum 100% responsive and supports all&nbsp;devices from desktop to small cell phones.</p>
                                                    </div>
                                                    <div class="col-md-3 col-sm-3 align-center">
                                                        <img src="images/mic03.png">
                                                        <h4>Responsive design</h4>
                                                        <p> Alysum 100% responsive and supports all&nbsp;devices from desktop to small cell phones.</p>
                                                    </div>
                                                    <div class="col-md-3 col-sm-3 align-center">
                                                        <img src="images/mic04.png">
                                                        <h4>Responsive design</h4>
                                                        <p> Alysum 100% responsive and supports all&nbsp;devices from desktop to small cell phones.</p>
                                                    </div>

                                                </div>

                                            </li>

                                            <li class="dropdown mega-menu-item">
                                                <a href="#"class="menu-item">
                                                    <span>Brands</span>
                                                </a>
                                                <a href="#" class="opener"></a>
                                                <ul class="container dropdown-menu mega-dropdown-menu" >
                                                    <li class="col-md-2 col-sm-2 brand">
                                                        <img src="images/4-manu_alysum.jpg" class="img-responsive">
                                                    </li> 
                                                    <li class="col-md-2 col-sm-2 brand">
                                                        <img src="images/4-manu_alysum.jpg" class="img-responsive">
                                                    </li> 
                                                    <li class="col-md-2 col-sm-2 brand">
                                                        <img src="images/4-manu_alysum.jpg" class="img-responsive">
                                                    </li> 
                                                    <li class="col-md-2 col-sm-2 brand">
                                                        <img src="images/4-manu_alysum.jpg" class="img-responsive">
                                                    </li>  
                                                    <li class="col-md-2 col-sm-2 brand">
                                                        <img src="images/4-manu_alysum.jpg" class="img-responsive">
                                                    </li> 
                                                    <li class="col-md-2 col-sm-2 brand">
                                                        <img src="images/4-manu_alysum.jpg" class="img-responsive">
                                                    </li> 
                                                    <li class="col-md-2 col-sm-2 brand">
                                                        <img src="images/4-manu_alysum.jpg" class="img-responsive">
                                                    </li> 
                                                    <li class="col-md-2 col-sm-2 brand">
                                                        <img src="images/4-manu_alysum.jpg" class="img-responsive">
                                                    </li> 
                                                    <li class="col-md-2 col-sm-2 brand">
                                                        <img src="images/4-manu_alysum.jpg" class="img-responsive">
                                                    </li> 
                                                    <li class="col-md-2 col-sm-2 brand">
                                                        <img src="images/4-manu_alysum.jpg" class="img-responsive">
                                                    </li> 
                                                    <li class="col-md-2 col-sm-2 brand">
                                                        <img src="images/4-manu_alysum.jpg" class="img-responsive">
                                                    </li> 
                                                    <li class="col-md-2 col-sm-2 brand">
                                                        <img src="images/4-manu_alysum.jpg" class="img-responsive">
                                                    </li> 
                                                </ul>	
                                            </li>

                                            <li class="dropdown mega-menu-item">
                                                <a href="" class="menu-item">
                                                    <span>Blog</span>

                                                </a> 
                                                <a href="#" class="opener"></a>
                                            </li>
                                            <li class="dropdown mega-menu-item">
                                                <a href="#"class="menu-item">
                                                    <span>Demos</span>
                                                </a>
                                                <a href="#" class="opener"></a>
                                                <ul class="dropdown-menu mega-dropdown-menu demos" >
                                                    <li><a href="#">Demo 01 - Alysum</a></li>
                                                    <li><a href="#">Demo 01 - Alysum</a></li>
                                                    <li><a href="#">Demo 01 - Alysum</a></li>
                                                    <li><a href="#">Demo 01 - Alysum</a></li>
                                                    <li><a href="#">Demo 01 - Alysum</a></li>
                                                    <li><a href="#">Demo 01 - Alysum</a></li>
                                                    <li><a href="#">Demo 01 - Alysum</a></li>
                                                </ul>
                                            </li>
                                        </ul> 

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>