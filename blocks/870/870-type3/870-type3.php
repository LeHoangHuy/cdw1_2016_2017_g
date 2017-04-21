<!DOCTYPE html>

<html>

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
        $less->compileFile('less/870-type3.less', 'css/870-type3.css');
        ?>
        <link href="css/870-type3.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>

    </head>

    <body>
        <div class="type-870-type3">
            <div class="page_width">
                <div id="columns" class="clearfix">
                    <div id="left_column" class="column">
                        <!--FEATURED POSTS----------------------------------------->
                        <div class="ph_simpleblog simpleblog-featured block">
                            <h4 class="title_block">Featured Posts</h4>
                            <div class="ph_row blogpost-list-feat">
                                <section class="blog-item">
                                    <div class="post-item" data-postid="4">
                                        <figure>
                                            <a href="#">
                                                <img src="images/4-thumb.jpg" alt="" class="img-responsive"/>
                                            </a>
                                            <div class="blog-info">
                                                <div class="blog-date main_bg">
                                                    <div>9<span>Mar</span></div>
                                                </div>
                                                <div class="blog-post-likes grayshadow">
                                                    <i class="fa fa-heart" aria-hidden="true" style="color: #fff;"></i>
                                                    <div>74</div>
                                                </div>
                                            </div>

                                        </figure>
                                        <h2><a href="#">Aenean tortor urna, auctor nec felis non</a></h2>
                                        <div class="post-content">
                                            <p>Phasellus pharetra ligula eget erat imperdiet mattis. Quisque vitae nulla...</p>
                                        </div>
                                        <a href="#" class="colored">Read more</a>
                                        <div class="clearfix"></div>
                                    </div>
                                </section>
                            </div>
                            <div class="ph_row blogpost-list-feat">
                                <section class="blog-item">
                                    <div class="post-item" data-postid="4">
                                        <figure>
                                            <a href="#">
                                                <img src="images/4-thumb.jpg" alt="" class="img-responsive"/>
                                            </a>
                                            <div class="blog-info">
                                                <div class="blog-date main_bg">
                                                    <div>9<span>Mar</span></div>
                                                </div>
                                                <div class="blog-post-likes grayshadow">
                                                    <i class="fa fa-heart" aria-hidden="true" style="color: #fff;"></i>
                                                    <div>74</div>
                                                </div>
                                            </div>

                                        </figure>
                                        <h2><a href="#">Aenean tortor urna, auctor nec felis non</a></h2>
                                        <div class="post-content">
                                            <p>Phasellus pharetra ligula eget erat imperdiet mattis. Quisque vitae nulla...</p>
                                        </div>
                                        <a href="#" class="colored">Read more</a>
                                        <div class="clearfix"></div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>