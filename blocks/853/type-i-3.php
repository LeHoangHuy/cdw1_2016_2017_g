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
        $less->compileFile('less/type-i-3.less', 'css/type-i-3.css');
        ?>
        <link href="css/type-i-3.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>

    </head>

    <body>
        <div class="type-i-3">
            <div class="container">
                <div id="pb-left-column" class="col-sm-6 col-xs-12">
                    <div class="clearfix blockproductscategory">
                        <div class="productscategory_h2">Related products</div>
                        <div id="productscategory" class="carousel fdi-Carousel slide">
                            <!-- Carousel items -->
                            <div class="carousel fdi-Carousel slide" id="productscategory_slider" data-interval="0">
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <div class="col-xs-12 col-sm-6 col-md-4">
                                            <a href="#">
                                                <img src="images/girl1.jpg" alt="" class="img-responsive center-block"/>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="col-xs-12 col-sm-6 col-md-4">
                                            <a href="#">
                                                <img src="images/girl2.jpg" alt="" class="img-responsive center-block"/>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="col-xs-12 col-sm-6 col-md-4">
                                            <a href="#">
                                                <img src="images/girl3.jpg" alt="" class="img-responsive center-block"/>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="left carousel-control fa fa-angle-left" href="#productscategory" data-slide="prev"></a>
                            <a class="right carousel-control fa fa-angle-right" href="#productscategory" data-slide="next"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="js/scripts.js" type="text/javascript"></script>
    </body>
</html>