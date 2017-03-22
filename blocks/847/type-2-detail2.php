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
        $less->compileFile('less/type-2-detail2.less', 'css/type-2-detail2.css');
        ?> 
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/type-2-detail2.css" rel="stylesheet" type="text/css"/>

    </head> 

    <body>                

        <div class="container container-modify margin-auto header">
            <div class="chi-tiet"> 
                <div class="col-md-6 col-sm-6 col-xs-12 images-container">
                    <div class="img-container">
                        <div class="col-md-9 col-sm-9 col-xs-9 image-block">
                            <span id="view_full_size">
                                <a class="">
                                    <div class="zoomPad">
                                        <img class="img-responsive large-image-block" src="images/dress-anna-sui-ambrosia-lace large 2.jpg">
                                    </div>
                                </a>
                            </span>
                        </div> 
                        <div class="col-md-3 col-sm-3 col-xs-3 views-block">   
                            <div class="view-scroll-spacer">

                            </div>
                            <div class="thumbs-list">
                                <ul class="thumb-list-frame">
                                    <li class="thumbnail_click">
                                        <a>
                                            <img class="img-responsive image-small" src="images/dress-anna-sui-ambrosia-lace small 1.jpg">
                                            <img class="img-responsive image-large" src="images/dress-anna-sui-ambrosia-lace large 1.jpg" style="display: none">
                                        </a>
                                    </li> 
                                    <li class="thumbnail_click">
                                        <a>
                                            <img class="img-responsive image-small" src="images/dress-anna-sui-ambrosia-lace small 2.jpg">
                                            <img class="img-responsive image-large" src="images/dress-anna-sui-ambrosia-lace large 2.jpg" style="display: none">
                                        </a>
                                    </li> 
                                    <li class="thumbnail_click">
                                        <a>
                                            <img class="img-responsive image-small" src="images/dress-anna-sui-ambrosia-lace small 3.jpg">
                                            <img class="img-responsive image-large" src="images/dress-anna-sui-ambrosia-lace large 3.jpg" style="display: none">
                                        </a>
                                    </li> 
                                    <li class="thumbnail_click thumbnail_last">
                                        <a>
                                            <img class="img-responsive image-small" src="images/dress-anna-sui-ambrosia-lace small 4.jpg">
                                            <img class="img-responsive image-large" src="images/dress-anna-sui-ambrosia-lace large 4.jpg" style="display: none">
                                        </a>
                                    </li> 


                                </ul>
                            </div>
                        </div>  
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="carousel slide multi-item-carousel" id="theCarousel">
                        <div class="productscategory_h2">Related products</div>
                        <div class="carousel-margin">
                            <div class="carousel-inner">
                                <div class="item active">
                                    <div class="col-xs-4">
                                        <a href="#1"><img src="images/a1.jpg" class="img-responsive">
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-xs-4">
                                        <a href="#1"><img src="images/a2.jpg" class="img-responsive">
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-xs-4">
                                        <a href="#1"><img src="images/a3.jpg" class="img-responsive">
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-xs-4">
                                        <a href="#1">
                                            <img src="images/a4.jpg" class="img-responsive">
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-xs-4">
                                        <a href="#1">
                                            <img src="images/a5.jpg" class="img-responsive">
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-xs-4">
                                        <a href="#1">
                                            <img src="images/a6.jpg" class="img-responsive">
                                        </a>
                                    </div>
                                </div>
                                <!-- add  more items here -->
                                <!-- Example item start:  -->

                                <div class="item">
                                    <div class="col-xs-4">
                                        <a href="#1">
                                            <img src="images/a7.jpg" class="img-responsive">
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <a class="left carousel-control" href="#theCarousel" data-slide="prev">
                            <i class="fa fa-chevron-left"> </i>
                        </a>
                        <a class="right carousel-control" href="#theCarousel" data-slide="next">
                            <i class="fa fa-chevron-right"></i>
                        </a>

                    </div>


                </div>
            </div>
        </div>

        <script src="scripts/jquery-1.11.0.min.js" type="text/javascript"></script>
        <script src="scripts/bootstrap.min.js" type="text/javascript"></script>
        <script src="scripts/script.js" type="text/javascript"></script>

    </body>

</html>