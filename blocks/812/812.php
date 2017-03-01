<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/812.css" rel="stylesheet" type="text/css"/>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/812.less', 'css/812.css');
        ?>
        <script src="js/112.js" type="text/javascript"></script>
        <script src="js/npm.js" type="text/javascript"></script>
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>

    </head>
    <body>
        <div class="type-812">
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
    </body>
</html>
