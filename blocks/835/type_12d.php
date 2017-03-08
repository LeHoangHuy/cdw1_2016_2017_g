<!DOCTYPE html>

<html>

    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/styles.less', 'css/styles.css');
        ?>
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>

        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <link href="css/styles.css" rel="stylesheet" type="text/css" />

    </head>

    <body>
        <div class="type-12d">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="right-side">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class=" widget">
                                        <form role="search" class="search-widget" method="get" action="#">
                                            <div class="form-group">
                                                <input type="text" class="form-control" value="" name="s" placeholder="search here">
                                            </div>
                                            <button type="submit" class="btn btn-search btn-submit">Search</button>
                                        </form>
                                    </div>
                                    <div class=" widget">
                                        <h3 >Categories</h3>
                                        <ul>
                                            <li><a href="#">Bars</a>
                                            </li>
                                            <li><a href="#">Copper Base</a>
                                            </li>
                                            <li><a href="#">Plates</a>
                                            </li>
                                            <li><a href="#">Rails</a>
                                            </li>
                                            <li><a href="#">Rolled</a>
                                            </li>
                                            <li><a href="#">Sheet Steel</a>
                                            </li>
                                            <li><a href="#">Steel Forgings</a>
                                            </li>
                                            <li><a href="#">Steel Pipe</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class=" widget">
                                        <h3 >Archives</h3>
                                        <ul>
                                            <li><a href="#">July 2015</a></li>
                                            <li><a href="#">December 2014</a></li>
                                            <li><a href="#">September 2014</a></li>
                                            <li><a href="#">August 2014</a></li>
                                            <li><a href="#">July 2014</a></li>
                                            <li><a href="#">February 2014</a></li>
                                        </ul>
                                    </div>
                                    <div class=" widget widget_strecentpostswidget">
                                        <h3 >List Posts</h3>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-3 col-xs-12">
                                                <div class="tp-blog-pic">
                                                    <!-- blog-pic -->
                                                    <a href="#">
                                                        <img width="73" height="62" src="images/blog-img1-e1440641700467.jpg" alt="blog-img1" data-lazy-loaded="true" style="display: inline;">
                                                    </a>
                                                </div>
                                                <!-- blog-pic -->
                                            </div>
                                            <div class="col-md-8 col-sm-9 col-xs-12">
                                                <div >
                                                    <!-- blog-info -->
                                                    <h3 class="tp-post-title"><a href="#">The dumbest smartphone debate</a></h3>
                                                    <div class="tp-meta"> <span > <i class="fa fa-calendar"></i>27 July, 2015</span> </div>
                                                </div>
                                                <!-- /.blog-info -->
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-3 col-xs-12">
                                                <div class="tp-blog-pic">
                                                    <!-- blog-pic -->
                                                    <a href="#"><img width="73" height="62" src="images/blog-img2-e1440641680103.jpg" alt="blog-img2" data-lazy-loaded="true" style="display: inline;">
                                                    </a>
                                                </div>
                                                <!-- blog-pic -->
                                            </div>
                                            <div class="col-md-8 col-sm-9 col-xs-12">
                                                <div >
                                                    <!-- blog-info -->
                                                    <h3 class="tp-post-title"><a href="#">Robots Replace Miners In Oz</a></h3>
                                                    <div class="tp-meta"> <span > <i class="fa fa-calendar"></i>27 July, 2015</span> </div>
                                                </div>
                                                <!-- /.blog-info -->
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-3 col-xs-12">
                                                <div class="tp-blog-pic">
                                                    <!-- blog-pic -->
                                                    <a href="#"><img width="73" height="62" src="images/blog-img2-e1440641680103.jpg" alt="blog-img2" data-lazy-loaded="true" style="display: inline;">
                                                    </a>
                                                </div>
                                                <!-- blog-pic -->
                                            </div>
                                            <div class="col-md-8 col-sm-9 col-xs-12">
                                                <div >
                                                    <!-- blog-info -->
                                                    <h3 class="tp-post-title"><a href="#">Lorem ipsum is simply dummy text</a></h3>
                                                    <div class="tp-meta"> <span > <i class="fa fa-calendar"></i>27 July, 2015</span> </div>
                                                </div>
                                                <!-- /.blog-info -->
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-3 col-xs-12">
                                                <div class="tp-blog-pic">
                                                    <!-- blog-pic -->
                                                    <a href="#"><img width="73" height="62" src="images/blog-img3-e1440641680103.jpg" alt="abt-2" data-lazy-loaded="true" style="display: inline;">
                                                    </a>
                                                </div>
                                                <!-- blog-pic -->
                                            </div>
                                            <div class="col-md-8 col-sm-9 col-xs-12">
                                                <div >
                                                    <!-- blog-info -->
                                                    <h3 class="tp-post-title"><a href="#">Maecenas euismod</a></h3>
                                                    <div class="tp-meta"> <span > <i class="fa fa-calendar"></i>27 July, 2015</span> </div>
                                                </div>
                                                <!-- /.blog-info -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" widget widget_tag_cloud">
                                        <h3 >Tags</h3>
                                        <div class="tagcloud"><a href="#" title="5 topics" style="font-size: 18.338461538462pt;">Bars</a>
                                            <a href="#" title="6 topics" style="font-size: 19.846153846154pt;">Copper Base</a>
                                            <a href="#" title="5 topics" style="font-size: 18.338461538462pt;">Industrial</a>
                                            <a href="#" title="8 topics" style="font-size: 22pt;">Industry</a>
                                            <a href="#" title="2 topics" style="font-size: 11.876923076923pt;">Lorem</a>
                                            <a href="#" title="1 topic" style="font-size: 8pt;">Loremsit</a>
                                            <a href="#" title="8 topics" style="font-size: 22pt;">Mining</a>
                                            <a href="#" title="4 topics" style="font-size: 16.615384615385pt;">Simple</a>
                                            <a href="#" title="3 topics" style="font-size: 14.461538461538pt;">Steel Forgings</a>
                                            <a href="#" title="1 topic" style="font-size: 8pt;">Steel Pipe</a></div>
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
