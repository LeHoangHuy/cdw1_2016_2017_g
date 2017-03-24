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
        $less->compileFile('less/swipe-slider.less', 'css/swipe-slider.css');
        $less->compileFile('less/type-1-slider.less', 'css/type-1-slider.css');
        ?>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">

        <link rel="stylesheet" href="css/styles.css">   
        <link rel="stylesheet" href="css/swipe-slider.css">   
        <link rel="stylesheet" href="css/type-1-slider.css">   

        <script src="js/jquery-1.11.0.min.js"></script>
        <script src="js/bootstrap.min.js"></script> 
    </head>
    <body>
        <div class="zaro-slider">
            <div id="pattent" class="slidelip white-background">  
                <div class="container container-modify margin-auto header">
                    <!--SLIDE DUONGTM-->   
                    <div id="zaro-carousel" class="margin-auto">
                        <table class="title-table">
                            <tbody>
                                <tr>
                                    <td class="col-md-6 col-sm-6">
                                        <span class="title-wing"></span>
                                    </td>
                                    <td class="carousel-title">
                                        <h3> Featured Products </h3>
                                        <div  id="carousel_prev" class="smooth02 zaro-controls carousel-control  " href="#myCarousel" data-slide="prev">
                                            <i class="fa fa-angle-left"></i>
                                        </div>
                                        <div  id="carousel_next" class="zaro-next smooth02 zaro-controls  " href="#myCarousel" data-slide="next">
                                            <i class="fa fa-angle-right"></i>
                                        </div>
                                    </td>
                                    <td class="col-md-6 col-sm-6">
                                        <span class="title-wing"></span>
                                    </td> 
                                </tr>
                            </tbody>
                        </table>
                        <div class="homepage_carousel__wrap">  
                            <div class="homepage_carousel">
                                <div id="homepage_carousel__1" class="swiper-container">
                                    <div class="swiper-wrapper"> 
                                        <div class="swiper-slide">
                                            <div class="product_wrapper">
                                                <div class="product_img product_sale">  
                                                    <div class="img_change" href="#">
                                                        <a href="#">
                                                            <img src="images/slide1/calvin-klein-white-cap-colorblock (1).jpg"/>
                                                            <img class="image-hover" src="images/slide1/calvin-klein-white-cap-colorblock.jpg" />
                                                        </a>
                                                        <div class="product_badges" >
                                                            <span class="sale">-5%</span> 
                                                        </div> 
                                                        <div id="countdown"class="countdown"> 
                                                        </div>

                                                    </div> 
                                                    <div class="product_actions"> 
                                                        <a class="actions_btn wishlist_add_login" href="#">
                                                            <i class="fa fa-search"></i>
                                                        </a>  
                                                    </div>
                                                </div>

                                                <div class="product_info">  
                                                    <div class="rating"> 
                                                        <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span> 
                                                    </div>
                                                    <div class="product_name ellipsis">
                                                        <a href="#">Most popular and it is really hard to offer computer hardware because of g</a>
                                                    </div>
                                                    <div class="product_price product_sale>
                                                         <span class="money product_price_with_sale">
                                                         123
                                                         </span>
                                                        <span class="money money_sale">
                                                            2222
                                                        </span>
                                                    </div>
                                                    <div class="product_links">
                                                        <form method="post" action="/cart/add">  
                                                            <button class="btn btn-cart homepage_btn" type="submit">Add to cart</button>
                                                            <button class="btn homepage_btn"><i class="fa fa-heart"></i></button>
                                                            <button class="btn homepage_btn"><i class="fa fa-gift"></i></button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>   
                                         <div class="swiper-slide">
                                            <div class="product_wrapper">
                                                <div class="product_img product_sale">  
                                                    <div class="img_change" href="#">
                                                        <a href="#">
                                                            <img src="images/slide1/halston-heritage-au-naturale (1).jpg"/>
                                                            <img class="image-hover" src="images/slide1/halston-heritage-au-naturale.jpg" />
                                                        </a>
                                                        <div class="product_badges" >
                                                            <span class="sale">-5%</span> 
                                                        </div> 
                                                        <div id="countdown"class="countdown"> 
                                                        </div>

                                                    </div> 
                                                    <div class="product_actions"> 
                                                        <a class="actions_btn wishlist_add_login" href="#">
                                                            <i class="fa fa-search"></i>
                                                        </a>  
                                                    </div>
                                                </div>

                                                <div class="product_info">  
                                                    <div class="rating"> 
                                                        <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span> 
                                                    </div>
                                                    <div class="product_name ellipsis">
                                                        <a href="#">Most popular and it is really hard to offer computer hardware because of g</a>
                                                    </div>
                                                    <div class="product_price product_sale>
                                                         <span class="money product_price_with_sale">
                                                         123
                                                         </span>
                                                        <span class="money money_sale">
                                                            2222
                                                        </span>
                                                    </div>
                                                    <div class="product_links">
                                                        <form method="post" action="/cart/add">  
                                                            <button class="btn btn-cart homepage_btn" type="submit">Add to cart</button>
                                                            <button class="btn homepage_btn"><i class="fa fa-heart"></i></button>
                                                            <button class="btn homepage_btn"><i class="fa fa-gift"></i></button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>   
                                         <div class="swiper-slide">
                                            <div class="product_wrapper">
                                                <div class="product_img product_sale">  
                                                    <div class="img_change" href="#">
                                                        <a href="#">
                                                            <img src="images/slide1/dress-mark-james-badgley-mischka-sweetheart (1).jpg"/>
                                                            <img class="image-hover" src="images/slide1/dress-mark-james-badgley-mischka-sweetheart.jpg" />
                                                        </a>
                                                        <div class="product_badges" >
                                                            <span class="sale">-5%</span> 
                                                        </div> 
                                                        <div id="countdown"class="countdown"> 
                                                        </div>

                                                    </div> 
                                                    <div class="product_actions"> 
                                                        <a class="actions_btn wishlist_add_login" href="#">
                                                            <i class="fa fa-search"></i>
                                                        </a>  
                                                    </div>
                                                </div>

                                                <div class="product_info">  
                                                    <div class="rating"> 
                                                        <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span> 
                                                    </div>
                                                    <div class="product_name ellipsis">
                                                        <a href="#">Most popular and it is really hard to offer computer hardware because of g</a>
                                                    </div>
                                                    <div class="product_price product_sale>
                                                         <span class="money product_price_with_sale">
                                                         123
                                                         </span>
                                                        <span class="money money_sale">
                                                            2222
                                                        </span>
                                                    </div>
                                                    <div class="product_links">
                                                        <form method="post" action="/cart/add">  
                                                            <button class="btn btn-cart homepage_btn" type="submit">Add to cart</button>
                                                            <button class="btn homepage_btn"><i class="fa fa-heart"></i></button>
                                                            <button class="btn homepage_btn"><i class="fa fa-gift"></i></button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>   
                                         <div class="swiper-slide">
                                            <div class="product_wrapper">
                                                <div class="product_img product_sale">  
                                                    <div class="img_change" href="#">
                                                        <a href="#">
                                                            <img src="images/slide1/lilly-pulitzer-embroidered-blossom.jpg"/>
                                                            <img class="image-hover" src="images/slide1/lilly-pulitzer-embroidered-blossom1.jpg" />
                                                        </a>
                                                        <div class="product_badges" >
                                                            <span class="sale">-5%</span> 
                                                        </div> 
                                                        <div id="countdown"class="countdown"> 
                                                        </div>

                                                    </div> 
                                                    <div class="product_actions"> 
                                                        <a class="actions_btn wishlist_add_login" href="#">
                                                            <i class="fa fa-search"></i>
                                                        </a>  
                                                    </div>
                                                </div>

                                                <div class="product_info">  
                                                    <div class="rating"> 
                                                        <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span> 
                                                    </div>
                                                    <div class="product_name ellipsis">
                                                        <a href="#">Most popular and it is really hard to offer computer hardware because of g</a>
                                                    </div>
                                                    <div class="product_price product_sale>
                                                         <span class="money product_price_with_sale">
                                                         123
                                                         </span>
                                                        <span class="money money_sale">
                                                            2222
                                                        </span>
                                                    </div>
                                                    <div class="product_links">
                                                        <form method="post" action="/cart/add">  
                                                            <button class="btn btn-cart homepage_btn" type="submit">Add to cart</button>
                                                            <button class="btn homepage_btn"><i class="fa fa-heart"></i></button>
                                                            <button class="btn homepage_btn"><i class="fa fa-gift"></i></button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>   
                                         <div class="swiper-slide">
                                            <div class="product_wrapper">
                                                <div class="product_img product_sale">  
                                                    <div class="img_change" href="#">
                                                        <a href="#">
                                                            <img src="images/slide1/moschino-cheap-and-chic-yacht.jpg"/>
                                                            <img class="image-hover" src="images/slide1/ports-1961-galaxy-shine (1).jpg" />
                                                        </a>
                                                        <div class="product_badges" >
                                                            <span class="sale">-5%</span> 
                                                        </div> 
                                                        <div id="countdown"class="countdown"> 
                                                        </div>

                                                    </div> 
                                                    <div class="product_actions"> 
                                                        <a class="actions_btn wishlist_add_login" href="#">
                                                            <i class="fa fa-search"></i>
                                                        </a>  
                                                    </div>
                                                </div>

                                                <div class="product_info">  
                                                    <div class="rating"> 
                                                        <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span> 
                                                    </div>
                                                    <div class="product_name ellipsis">
                                                        <a href="#">Most popular and it is really hard to offer computer hardware because of g</a>
                                                    </div>
                                                    <div class="product_price product_sale>
                                                         <span class="money product_price_with_sale">
                                                         123
                                                         </span>
                                                        <span class="money money_sale">
                                                            2222
                                                        </span>
                                                    </div>
                                                    <div class="product_links">
                                                        <form method="post" action="/cart/add">  
                                                            <button class="btn btn-cart homepage_btn" type="submit">Add to cart</button>
                                                            <button class="btn homepage_btn"><i class="fa fa-heart"></i></button>
                                                            <button class="btn homepage_btn"><i class="fa fa-gift"></i></button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>   
                                         <div class="swiper-slide">
                                            <div class="product_wrapper">
                                                <div class="product_img product_sale">  
                                                    <div class="img_change" href="#">
                                                        <a href="#">
                                                            <img src="images/slide1/ports-1961-galaxy-shine (1).jpg"/>
                                                            <img class="image-hover" src="images/slide1/ports-1961-galaxy-shine.jpg" />
                                                        </a>
                                                        <div class="product_badges" >
                                                            <span class="sale">-5%</span> 
                                                        </div> 
                                                        <div id="countdown"class="countdown"> 
                                                        </div>

                                                    </div> 
                                                    <div class="product_actions"> 
                                                        <a class="actions_btn wishlist_add_login" href="#">
                                                            <i class="fa fa-search"></i>
                                                        </a>  
                                                    </div>
                                                </div>

                                                <div class="product_info">  
                                                    <div class="rating"> 
                                                        <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span> 
                                                    </div>
                                                    <div class="product_name ellipsis">
                                                        <a href="#">Most popular and it is really hard to offer computer hardware because of g</a>
                                                    </div>
                                                    <div class="product_price product_sale>
                                                         <span class="money product_price_with_sale">
                                                         123
                                                         </span>
                                                        <span class="money money_sale">
                                                            2222
                                                        </span>
                                                    </div>
                                                    <div class="product_links">
                                                        <form method="post" action="/cart/add">  
                                                            <button class="btn btn-cart homepage_btn" type="submit">Add to cart</button>
                                                            <button class="btn homepage_btn"><i class="fa fa-heart"></i></button>
                                                            <button class="btn homepage_btn"><i class="fa fa-gift"></i></button>
                                                        </form>
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
                <script src="js/jquery.js" type="text/javascript"></script>
                <script src="js/jquery.swiper.min.js" type="text/javascript"></script>
                <script>
                    jQuery(document).ready(function ($) {
                        var homepage_carousel__1 = new Swiper('#homepage_carousel__1', {
                            loop: true,
                            speed: 500,
                            slidesPerView: 5,
                            spaceBetween: 0,
                            prevButton: '#carousel_prev',
                            nextButton: '#carousel_next',
                            breakpoints: {
                                991: {
                                    slidesPerView: 3
                                },
                                767: {
                                    slidesPerView: 2
                                }
                            }
                        });
                    });
                </script>

            </div>
        </div>
    </body> 
</html>