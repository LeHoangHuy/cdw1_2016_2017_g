<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/3.css" rel="stylesheet" type="text/css"/>
        <link href="fontello/css/fontello.css" rel="stylesheet" type="text/css"/>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/3.less', 'css/3.css');
        ?>
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>

    </head>
    <body>
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
    </body>
</html>
