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
        <div class="type-12a">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 style="text-align: center;">Latest From Blog News</h1>
                        <p style="text-align: center;">Quisque porttitor sem liberoet auctor lorem fringilla sit amehasellus gravida nisi elitam egestda.</p>
                        <div class="tp-news-section">
                            <div class="tp-blog-page">

                                <div class="col-sm-6">
                                    <div class="tp-blog-pic">
                                        <a href="#"> <img alt="blog-img" title="blog-img" class="img-responsive" src="images/blog-img1-e1440641700467.jpg"></a>
                                    </div>
                                    <div class="tp-blog-info">
                                        <!-- blog-info -->
                                        <div class="row">
                                            <div class="col-md-2 col-xs-4">
                                                <div class="tp-meta">
                                                    <!-- tp-meta -->
                                                    <span class="tp-meta-date">27 / 07</span>
                                                    <span class="tp-meta-year">2015</span>
                                                </div>
                                                <!-- /.tp-meta -->
                                            </div>
                                            <div class="col-md-10 col-xs-8">
                                                <h1 class="tp-post-title">
                                                    <a href="#">The dumbest smartphone debate</a></h1>
                                                <span class="tp-meta">  <i class="fa fa-comments-o"></i>0 <a href="#">Comment</a> <i class="fa fa-user"></i><a href="#">admin</a> <i class="fa fa-tags"></i><a href="#" rel="tag">Bars</a>, <a href="#" rel="tag">Copper Base</a> <span class="the_category">in</span> <a href="#" rel="category tag">Plates</a>, <a href="#" rel="category tag">Rolled</a> </span>
                                            </div>
                                            <div class="col-md-12">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis consequat hendrerit. Etiam et aliquet mauris. Fusce nunc nisl, varius non nulla vitae, euismod ultricies ligula. </p>
                                                <a href="#" class="btn btn-outline">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="tp-blog-pic">
                                        <a href="#"><img alt="blog-img" title="blog-img" class="img-responsive" src="images/blog-img2-e1440641680103.jpg"></a>
                                    </div>
                                    <div class="tp-blog-info">
                                        <!-- blog-info -->
                                        <div class="row">
                                            <div class="col-md-2 col-xs-4">
                                                <div class="tp-meta">
                                                    <!-- tp-meta -->
                                                    <span class="tp-meta-date">27 / 07</span>
                                                    <span class="tp-meta-year">2015</span>
                                                </div>
                                                <!-- /.tp-meta -->
                                            </div>
                                            <div class="col-md-10 col-xs-8">
                                                <h1 class="tp-post-title"><a href="#">Robots Replace Miners In Oz</a></h1>
                                                <span class="tp-meta">  <i class="fa fa-comments-o"></i>0 <a href="#">Comment</a> <i class="fa fa-user"></i><a href="#">admin</a> <i class="fa fa-tags"></i><a href="#" rel="tag">Industrial</a>, <a href="#" rel="tag">Mining</a>, <a href="#" rel="tag">Steel Forgings</a>  <span class="the_category">in</span> <a href="#" rel="category tag">Bars</a>, <a href="#" rel="category tag">Plates</a>, <a href="#" rel="category tag">Sheet Steel</a></span>
                                            </div>
                                            <div class="col-md-12">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis consequat hendrerit. Etiam et aliquet mauris. Fusce nunc nisl, varius non nulla vitae, euismod ultricies ligula.</p>
                                                <a href="#" class="btn btn-outline">Read More</a>
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
    </body>

</html>