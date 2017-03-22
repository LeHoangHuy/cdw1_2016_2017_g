
<!DOCTYPE html>
<html lang="en-US">

    <head>
        <meta charset="UTF-8" />
        <link rel="icon" type="image/x-icon" href="images/favicon.ico" />
        <title>Products &#8211; Tennis club</title>
        
        <link rel="stylesheet" href="css/fontello/css/fontello.min.css" type="text/css" media="all" />
        <link rel="stylesheet" href="css/woocommerce/woocommerce.css" type="text/css" media="all" />        
        <link rel="stylesheet" href="css/plugin.woocommerce.css" type="text/css" media="all" />    
        
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>     
    </head>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/817.less', 'css/817.css');
        ?>
     <link href="css/817.css" rel="stylesheet" type="text/css"/>
         
        <div class="type-6">
    <body class="archive woocommerce woocommerce-page tennisclub_body body_style_wide body_filled article_style_stretch top_panel_show top_panel_above sidebar_show sidebar_left">
              <div class="container">
            <div class="row">
                <div class="page_content_wrap page_paddings_yes">
                    <div class="content_wrap">
                        <div class="sidebar widget_area scheme_original">
                            <div class="sidebar_inner widget_area_inner col-md-12">
                                <aside class="widget woocommerce widget_product_categories col-md-12">
                                    <h5 class="widget_title">Categories</h5>
                                    <ul class="product-categories">
                                        <li class="cat-item">
                                            <a href="#" class="padd">Ball Machines</a>
                                        </li>
                                        <li class="cat-item">
                                            <a href="#" class="padd">Clothing</a>
                                        </li>
                                        <li class="cat-item">
                                            <a href="#" class="padd">Equipment Bags</a>
                                        </li>
                                        <li class="cat-item">
                                            <a href="#" class="padd">Footwear</a>
                                        </li>
                                        <li class="cat-item">
                                            <a href="#" class="padd">Racquet Grips</a>
                                        </li>
                                        <li class="cat-item">
                                            <a href="#" class="padd">Racquets</a>
                                        </li>
                                        <li class="cat-item">
                                            <a href="#" class="padd">Sales &amp; Deals</a>
                                        </li>
                                        <li class="cat-item">
                                            <a href="#" class="padd">Tennis Balls</a>
                                        </li>
                                    </ul>
                                </aside>
                                <aside class="widget woocommerce widget_price_filter col-md-12">
                                    <h5 class="widget_title">Filter by price</h5>
                                    <form method="get" action="#">
                                        <div class="price_slider_wrapper">
                                            <div class="price_slider display_none"></div>
                                            <div class="price_slider_amount">
                                                <input type="text" id="min_price" name="min_price" value="" data-min="19" placeholder="Min price" />
                                                <input type="text" id="max_price" name="max_price" value="" data-max="386" placeholder="Max price" />
                                                <button type="submit" class="button">Filter</button>
                                                <div class="price_label display_none">
                                                    Price:
                                                    <span class="from"></span> &mdash;
                                                    <span class="to"></span>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    </form>
                                </aside>
                                <aside class="widget woocommerce widget_product_search col-md-12">
                                    <form method="get" class="search_form" action="#">
                                        <input type="text" class="search_field" placeholder="Products Search&hellip;" value="" name="s" title="Products search:" />
                                        <button class="search_button icon-search" type="submit"></button>
                                    </form>
                                </aside>
                                <aside class="widget woocommerce widget_product_tag_cloud col-md-12">
                                    <h5 class="widget_title">Product Tags</h5>
                                    <div class="tagcloud">
                                        <a href="#" title="2 topics">apparel</a>
                                        <a href="#" title="2 topics">bags</a>
                                        <a href="#" title="2 topics">balls</a>
                                        <a href="#" title="7 topics">equipment</a>
                                        <a href="#" title="1 topic">green</a>
                                        <a href="#" title="1 topic">machine</a>
                                        <a href="#" title="7 topics">tennis</a>
                                        <a href="#" title="1 topic">yellow</a>
                                    </div>
                                </aside>
                                <aside class="widget woocommerce widget_top_rated_products col-md-12">
                                    <h5 class="widget_title">Top Rated Products</h5>
                                    <ul class="product_list_widget">
                                        <li>
                                            <a href="shop-product-page.html" title="Tourna Mesh Pack of 12 Tennis Balls">
                                                <img src="images/product-7-180x180.jpg" alt="product-7" />
                                                <span class="product-title">Tourna Mesh Pack of 12 Tennis Balls</span>
                                            </a>
                                            <div class="star-rating" title="Rated 4 out of 5">
                                                <span class="width_80_per">
                                                    <strong class="rating">4</strong> out of 5
                                                </span>
                                            </div>
                                            <span class="amount">&pound;19.99</span>
                                        </li>
                                        <li>
                                            <a href="shop-product-page.html" title="HEAD Instinct Junior 25 Prestrung Tennis Racquet">
                                                <img src="images/product-8-180x180.jpg" alt="product-8" />
                                                <span class="product-title">HEAD Instinct Junior 25 Prestrung Tennis Racquet</span>
                                            </a>
                                            <div class="star-rating" title="Rated 3 out of 5">
                                                <span class="width_80_per">
                                                    <strong class="rating">3</strong> out of 5
                                                </span>
                                            </div>
                                            <del>
                                                <span class="amount">&pound;199.00</span>
                                            </del>
                                            <ins>
                                                <span class="amount">&pound;148.00</span>
                                            </ins>
                                        </li>
                                        <li>
                                            <a href="shop-product-page.html" title="Penn Championship Extra Duty Balls">
                                                <img src="images/product-11-180x180.jpg" alt="product-11" />
                                                <span class="product-title">Penn Championship Extra Duty Balls</span>
                                            </a>
                                            <span class="amount">&pound;87.00</span></li>
                                    </ul>
                                </aside>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
              </div></div>
        


        <script type="text/javascript" src="js/jquery/jquery.js"></script>
        <script type="text/javascript" src="js/_packed.js"></script>
        <script type="text/javascript" src="js/global.min.js"></script>
        <script type="text/javascript" src="js/vendor/woocommerce/woocommerce.min.js"></script>
        <script type="text/javascript" src="js/vendor/woocommerce/cart-fragments.min.js"></script>
        <script type="text/javascript" src="js/vendor/woocommerce/jquery-ui-touch-punch/jquery-ui-touch-punch.min.js"></script>
        <script type="text/javascript" src="js/vendor/woocommerce/price-slider.min.js"></script>
        <link href="../type-2/type-2/css/plugin.tribe-events_1.css" rel="stylesheet" type="text/css"/>
    </body>

</html>