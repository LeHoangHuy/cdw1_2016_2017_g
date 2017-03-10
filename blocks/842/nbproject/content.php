

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
        $less->compileFile('less/type-5.less', 'css/type-5.css');
        ?>
        <link href="css/type-5.css" rel="stylesheet" type="text/css" />
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/type-3.less', 'css/type-3.css');
        ?>
        <link href="css/type-3.css" rel="stylesheet" type="text/css" />
</head>

<body>       
        <div class="type-5">
            <div class="tabberlive_outer_sub">
                <div class="container-width">
                    <div class="htabs">
                        <ul class="tabbernav_product">
                            <li class="tab1">
                                <a href="#" class="tab-text selected">
                                    
                                    <span>LATEST</span>
                                </a>
                            </li>
                            <li class="tab2">
                                <a href="#" class="tab-text">
                                    <span>BEST SELLER</span>
                                </a>
                            </li>
                            <li class="tab3">
                                <a href="#" class="tab-text">
                                    <span>SPECIAL</span>
                                </a>
                            </li>
                            <li class="tab4">
                                <a href="#" class="tab-text">
                                    <span>FEATURED</span>
                                </a>
                            </li>
                        </ul>   
                    </div>
                    <div class="tabs">
                        <div class="col-md-3">
                            <div class="product-image-block-inner">
                                <div class="product-image-block">
                                    <img class="hide-1" src="images/lastest_1_1.jpg">
                                    <img class="show-1" src="images/lastest_1_2.jpg">
                                    <div class="add">
                                        <a href="#" class="add-cart"> add to cart</a>
                                    </div>
                                    <div class="new">New</div>
                                </div>
                                <div class="product_desc">
                                    <h2 class="product-name">
                                        <a href="#">Arcu vitae imperdiet simply</a>
                                    </h2>
                                    <div class="price-box">
                                        <span class="regular-price">
                                            <span class="price">$554.00</span>
                                        </span>
                                    </div>
                                    <div class="ratings">
                                        <div class="rating-box">
                                            <div class="rating" style="width: 0%"></div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="product-image-block-inner">
                                <div class="product-image-block">
                                    <img class="hide-1" src="images/lastest_2_1.jpg">
                                    <img class="show-1" src="images/lastest_2_2.jpg">
                                    <div class="add">
                                        <a href="#" class="add-cart"> add to cart</a>
                                    </div>
                                    <div class="new">New</div>
                                </div>
                                <div class="product_desc">
                                    <h2 class="product-name">
                                        <a href="#">Arcu vitae imperdiet simply  Nemo</a>
                                    </h2>
                                    <div class="price-box">
                                        <span class="regular-price">
                                            <span class="price">$998.00</span>
                                        </span>
                                    </div>
                                    <div class="ratings">
                                        <div class="rating-box">
                                            <div class="rating" style="width: 0%"></div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="product-image-block-inner">
                                <div class="product-image-block">
                                    <img class="hide-1" src="images/lastest_3_1.jpg">
                                    <img class="show-1" src="images/lastest_3_2.jpg">
                                    <div class="add">
                                        <a href="#" class="add-cart"> add to cart</a>
                                    </div>
                                    <div class="new">New</div>
                                </div>
                                <div class="product_desc">
                                    <h2 class="product-name">
                                        <a href="#">consectetur adipiscing  available Ipsum</a>
                                    </h2>
                                    <div class="price-box">
                                        <span class="regular-price">
                                            <span class="price">$1.541.00</span>
                                        </span>
                                    </div>
                                    <div class="ratings">
                                        <div class="rating-box">
                                            <div class="rating" style="width: 0%"></div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="product-image-block-inner">
                                <div class="product-image-block">
                                    <img class="hide-1" src="images/lastest_4_1.jpg">
                                    <img class="show-1" src="images/lastest_4_2.jpg">
                                    <div class="add">
                                        <a href="#" class="add-cart"> add to cart</a>
                                    </div>
                                    <div class="new">New</div>
                                </div>
                                <div class="product_desc">
                                    <h2 class="product-name">
                                        <a href="#">consectetur adipiscing Ipsum available</a>
                                    </h2>
                                    <div class="price-box">
                                        <span class="regular-price">
                                            <span class="price">$444.00</span>
                                        </span>
                                    </div>
                                    <div class="ratings">
                                        <div class="rating-box">
                                            <div class="rating" style="width: 0%"></div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom">
                            <span class="fa fa-angle-left"></span>
                            <span class="fa fa-angle-right"></span>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="container-fluid content-2">
                <div class="row ">
                        <div class="col-md-8 wrapper">
                            <img src="images/prlx-chair.png">
                            <div class="text-left">
                                <p>Get Best Furniture</p>
                                <p style="letter-spacing: 2.5px;">Extra sale on all items</p>
                                <h2> 50% off </h2>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="block-subscribe">
                                <div class="envelope">  </div>
                                <div class="newshead"> subscribe to our 
                                    <span class="newstext">Newsletter</span>
                                </div>
                                <div class="text-content">Readable content of page when looking at its layout.</div>
                                <div class="input-box">
                                    <input type="text" name="email" id="newsletter" class="input-text"                                                    
                                       placeholder="Enter your email address ...">
                                    <div class="sub">
                                        <a href="#" class="subscribe"> SUBSCRIBE </a>
                                    </div>
                                </div>
                                       
                            </div>
                        </div>
                   
                </div>
                <div class="clear"></div>
            </div>
            <div class="container-fluid">
                <div class="content-3">
                    <div class="container-width">
                        <div class="cms-banner">
                            <div class="cms-banner-inner">
                                <a>
                                    <img src="images/single_banner.jpg">
                                </a>
                                <div class="hover_content">
                                    <div class="hover_content_bf">
                                    <div class="hover_data">
                                        <div class="desc-text">new style</div>
                                        <div class="title3">swivel chair</div>
                                        <div class="border-3">  </div>
                                        <div class="shop-now">
                                            <a href="#">shop now ► </a>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial">
                            <div class="testimonial_title">
                                <h2> Customer Testimonial </h2>
                            </div>
                            <div class="testimonial_outer">
                                <div class="image-block">
                                    <img src="images/user1.jpg">
                                </div>
                                <div class="post-content-inner">
                                    <div class="cms-box-heading">
                                        <a>-linen vain</a>
                                        <span style="color: 9a9a9a">webdesign</span>
                                    </div>
                                    <div class="post-description" style="color: 9a9a9a">
                                        "Passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in Middle of text. All the."
                                    </div>
                                </div>
                            </div>
                            <div class="slider-controls clickable">
                                <div class="slider-page active">
                                    <span class="page2"></span>
                                </div>
                                <div class="slider-page">
                                    <span class="page2"></span>
                                </div>
                                <div class="slider-page">
                                    <span class="page2"></span>
                                </div>
                        </div>
                        </div>
                        
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="blog">
                <div class="container-width">
                    <div class="blog_title">
                        <h3>Latest News</h3>
                    </div>
                    <div class="clear">
                        <div class="col-md-4">
                            <div class="product-image-inner-blog">
                                <div class="blog-left">
                                    <div class="image-block2">
                                        <a href="#">
                                            <img src="images/blog_img1.jpg">
                                        </a>
                                    </div>
                                </div>
                                <div class="blog-right">
                                    <div class="post-title">
                                        <a href="#">Contrary to all popular belief</a>
                                    </div>
                                    <div class="view-blog">
                                        <div class="post-date">19/02/2016</div>
                                        <div class="read-more">
                                            <a href="#"> read more </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="product-image-inner-blog">
                                <div class="blog-left">
                                    <div class="image-block2">
                                        <a href="#">
                                            <img src="images/blog_img2.jpg">
                                        </a>
                                    </div>
                                </div>
                                <div class="blog-right">
                                    <div class="post-title">
                                        <a href="#">Excepteur sint occaecat cupidatat</a>
                                    </div>
                                    <div class="view-blog">
                                        <div class="post-date">19/02/2016</div>
                                        <div class="read-more">
                                            <a href="#"> read more </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="product-image-inner-blog">
                                <div class="blog-left">
                                    <div class="image-block2">
                                        <a href="#">
                                            <img src="images/blog_img3.jpg">
                                        </a>
                                    </div>
                                </div>
                                <div class="blog-right">
                                    <div class="post-title">
                                        <a href="#">Excepteur sint occaecat cupidatat</a>
                                    </div>
                                    <div class="view-blog">
                                        <div class="post-date">19/02/2016</div>
                                        <div class="read-more">
                                            <a href="#"> read more </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="product-image-inner-blog">
                                <div class="blog-left">
                                    <div class="image-block2">
                                        <a href="#">
                                            <img src="images/blog_img4.jpg">
                                        </a>
                                    </div>
                                </div>
                                <div class="blog-right">
                                    <div class="post-title">
                                        <a href="#">Excepteur sint occaecat cupidatat</a>
                                    </div>
                                    <div class="view-blog">
                                        <div class="post-date">19/02/2016</div>
                                        <div class="read-more">
                                            <a href="#"> read more </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="product-image-inner-blog">
                                <div class="blog-left">
                                    <div class="image-block2">
                                        <a href="#">
                                            <img src="images/blog_img5.jpg">
                                        </a>
                                    </div>
                                </div>
                                <div class="blog-right">
                                    <div class="post-title">
                                        <a href="#">Excepteur sint occaecat cupidatat</a>
                                    </div>
                                    <div class="view-blog">
                                        <div class="post-date">19/02/2016</div>
                                        <div class="read-more">
                                            <a href="#"> read more </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="product-image-inner-blog">
                                <div class="blog-left">
                                    <div class="image-block2">
                                        <a href="#">
                                            <img src="images/blog_img6.jpg">
                                        </a>
                                    </div>
                                </div>
                                <div class="blog-right">
                                    <div class="post-title">
                                        <a href="#">Excepteur sint occaecat cupidatat</a>
                                    </div>
                                    <div class="view-blog">
                                        <div class="post-date">19/02/2016</div>
                                        <div class="read-more">
                                            <a href="#"> read more </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="clear"></div>
                    </div>
                    
                </div>
            </div>
            <div class="manufacturer-product-outer">
                <div class="container-width">
                    <div class="customNavigation">
                        <a class="btn prev">  </a>
                        <a class="btn next">  </a>
                    </div>
                    <ul class="product-carousel">
                        <div class="slider-wrapper-outer">
                            <li class="slider-item">
                                <div class="product-block">
                                    <div class="product-block-inner">
                                        <a href="#">
                                            <img src="images/01.png">
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="slider-item">
                                <div class="product-block">
                                    <div class="product-block-inner">
                                        <a href="#">
                                            <img src="images/02.png">
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="slider-item">
                                <div class="product-block">
                                    <div class="product-block-inner">
                                        <a href="#">
                                            <img src="images/03.png">
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="slider-item">
                                <div class="product-block">
                                    <div class="product-block-inner">
                                        <a href="#">
                                            <img src="images/04.png">
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="slider-item">
                                <div class="product-block">
                                    <div class="product-block-inner">
                                        <a href="#">
                                            <img src="images/05.png">
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="slider-item">
                                <div class="product-block">
                                    <div class="product-block-inner">
                                        <a href="#">
                                            <img src="images/06.png">
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
    <div class="type-3">
        
            <footer>
                <div class="container-fluid">
                    <div class="footer_inner" id="footer">
                        <div class="footer col-md-4">
                            
                          
                            <ul class="block2" >
                                <li>
                                    <div class="logo">
                                        <a href="#">
                                            <img src="images/footer-logo.png"/>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="address">507-Union Trade Center,Udhana Darvaja Surat</div>
                                </li>
                                <li>
                                    <div class="phone">Call us:0123-456-789</div>
                                </li>
                                <li>
                                    <div class="email">
                                        <a href="#" target="_blank">support@templatemela.com</a>
                                    </div>
                                </li>
                                 <li>
                                    <ul class="block" >
                                        <li class="facebook item">
                                        <a href="#">
                                            <i class="fa fa-facebook-square">  </i>
                                        </a>
                                </li>
                                <li class="twitter item">
                                        <a href="#">
                                            <i class="fa fa-twitter-square">  </i>
                                        </a>
                                </li >
                                <li class="g-plus item">
                                        <a href="#">
                                            <i class="fa fa-google-plus-square">  </i>
                                        </a>
                                </li>
                                <li class="pinit item">
                                        <a href="#">
                                            <i class="fa fa-pinterest-square">  </i>
                                        </a>
                                </li>
                                <li class="linkdin item">
                                        <a href="#">
                                            <i class="fa fa-linkedin-square">  </i>
                                        </a>
                                </li>
                                <li class="rss item">
                                        <a href="#">
                                            <i class="fa fa-rss-square">  </i>
                                        </a>
                                </li>
                                <li class="share item">
                                        <a href="#">
                                            <i class="fa fa-share-square">  </i>
                                        </a>
                                </li>
                                <li class="youtube item">
                                        <a href="#">
                                            <i class="fa fa-youtube-square">  </i>
                                        </a>
                                </li>
                            </ul>
                                </li>
                            </ul>
                                
                        </div>
                        <div class="col-md-8">
                         <div class="col-md-4 footer-area">
                           <h6 id="ten"> MY ACCOUNT </h6>
                            <ul class="block">
                                <li>
                                    <a href="#"> Ask In forum </a>
                                </li>
                                <li>
                                    <a href="#"> Help Desk </a>
                                </li>
                                <li>
                                    <a href="#"> Payment Method </a>
                                </li>
                                <li>
                                    <a href="#"> Promotions </a>
                                </li>
                                <li>
                                    <a href="#"> Terms & condition </a>
                                </li>
                                <li>
                                    <a href="#"> payment Method </a>
                                </li>
                                <li>
                                    <a href="#"> Shipping Policy </a>
                                </li>
                            </ul>
                        </div>
                          <div class="col-md-4 footer-area">
                            <h6 id="ten"> SHOP </h6>
                            <ul class="block">
                                <li>
                                    <a href="#"> Accessories </a>
                                </li>
                                <li>
                                    <a href="#"> Balcony Tables </a>
                                </li>
                                <li>
                                    <a href="#"> Bar Units </a>
                                </li>
                                <li>
                                    <a href="#"> Fine Art </a>
                                </li>
                                <li>
                                    <a href="#"> Beds </a>
                                </li>
                                <li>
                                    <a href="#"> Rules </a>
                                </li>
                            </ul>
                        </div>
                          <div class="col-md-4 footer-area">
                            <h6 id="ten"> SELLERS </h6>
                            <ul class="block">
                                <li>
                                    <a href="#"> Seller login </a>
                                </li>
                                <li>
                                    <a href="#"> Seller Signup </a>
                                </li>
                                <li>
                                    <a href="#"> Seller Handbook </a>
                                </li>
                                <li>
                                    <a href="#"> Shipping & Refund </a>
                                </li>
                                <li>
                                    <a href="#"> Wholesale Policy </a>
                                </li>
                            </ul>
                        </div>
                            
                        </div>
                        
                        <div class="clear"></div>
                    </div>
                <div class="footer_bottom">
                    
                    <ul class="link">
                        <li>
                            <a href="#"title="Site Map">Site Map</a>
                        </li>
                        <li>
                            <a href="#"title="Search Terms">Search Terms</a>
                        </li>
                        <li>
                            <a href="#"title=" Advanced Search">Advanced Search</a>
                        </li>
                        <li>
                            <a href="#"title="Orders and Returns">Orders and Returns</a>
                        </li>
                        <li class="last">
                            <a href="#"title="Contact Us">Contact Us</a>
                        </li>
                    </ul>
                    </div>
                   
                        <p> © 2016 Magento Demo Store. All Rights Reserved.</p>
                        <ul class="icon">
                            <li class="discover">
                                <a href="#">
                                    <span> discover </span>
                                </a>
                            </li>
                            <li class="visa">
                                <a href="#">
                                    <span> visa </span>
                                </a>
                            </li>
                            <li class="maestro">
                                <a href="#">
                                    <span> maestro </span>
                                </a>
                            </li>
                            <li class="paypal">
                                <a href="#">
                                    <span> paypal</span>
                                </a>
                            </li>
                            <li class="american">
                                <a href="#">
                                    <span>american</span>
                                </a>
                            </li>
                            <li class="g-wall">
                                <a href="#">
                                    <span> g-wall </span>
                                </a>
                            </li>
                        </ul>
                    
                       
                            </div>

            </footer>
        </div>
    </body>