<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8" />
        <link rel="icon" type="image/x-icon" href="images/favicon.ico" />
        <title>Products &#8211; Tennis club</title>
        <link href="css/4.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="css/fontello/css/fontello.min.css" type="text/css" media="all" />
        <link rel="stylesheet" href="css/woocommerce/woocommerce.css" type="text/css" media="all" />
        <link rel="stylesheet" href="css/plugin.woocommerce.css" type="text/css" media="all" />
        <link href="css/shortcodes.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="css/skin.css" type="text/css" media="all" />


    </head>
    <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/819.less', 'css/819.css');
        ?> 
    <body class="archive woocommerce woocommerce-page tennisclub_body body_style_wide body_filled article_style_stretch top_panel_show top_panel_above sidebar_show sidebar_left">

            <div class="container">
                <div class="row">
                    <div class="page_content_wrap page_paddings_yes ">
                        <div class="content_wrap col-md-12">
                            <div class="show_product">
                            <div class="content col-md-8">
                                <div class="list_products shop_mode_thumbs">
                                    
                                    <div class="mode_buttons">
                                        <a href="#" class="woocommerce_thumbs icon-th" title="Show products as thumbs"></a>
                                        <a href="#" class="woocommerce_list icon-th-list" title="Show products as list"></a>
                                    </div>
                                    <p class="woocommerce-result-count">
                                        Showing 1–9 of 10 results
                                    </p>
                                    <form class="woocommerce-ordering" method="get">
                                        <select name="orderby" class="orderby">
                                            <option value="menu_order" selected="selected">Default sorting</option>
                                            <option value="popularity">Sort by popularity</option>
                                            <option value="rating">Sort by average rating</option>
                                            <option value="date">Sort by newness</option>
                                            <option value="price">Sort by price: low to high</option>
                                            <option value="price-desc">Sort by price: high to low</option>
                                        </select>
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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