<!DOCTYPE html>
<html style="background-color: #f3f3f4;">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/840.less', 'css/840.css');
        ?>
        <link href="css/840.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
    </head>

    <body>
        <div class="type-840">
            <div class="container" style="margin-bottom: 30px">
                <div class="col-md-59">
                    <div class="inner1">
                        <a><img class="max-width" src="images/sub1.jpg"></a>
                        <div class="hover_content_inner">
                            <div class="hover_content_bf_inner1">
                                <div class="hover_data">
                                    <div class="desc-text">Big sale</div>
                                    <div class="title3">sWooden bench</div>
                                    <div class="border-3">  </div>
                                    <div class="shop-now">
                                        <a href="#">view all offers ► </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--end-inner1-->
                    <div class="inner2 col-md-inner2">
                        <div class="hover_content_inner2">
                            <a><img class="max-width" src="images/sub2.jpg"></a>
                        </div>
                        <div class="hover_content_inner">
                            <div class="hover_data">
                                <div class="desc-text">sprout side table</div>
                                <div class="title">some assembly required</div>
                            </div>
                        </div>
                    </div><!--end-inner2-->
                    <div class="inner3 col-md-inner3">
                        <a href="#"><img style="width: 100%" src="images/sub3.jpg" alt=""/></a>
                    </div><!--end-inner3-->
                    <div class="inner4">
                        <a href="#"><img class="max-width" src="images/sub4.jpg" alt=""/></a>
                        <div id="video_content">
                            <a href="#" data-videosite="vimeo" data-videoid="#">&nbsp;</a>
                        </div>
                        <div class="hover_data">
                            <div class="title">home furniture</div>
                            <div class="desc-text">video guideline for online shopper</div>
                        </div>
                    </div><!--end-inner4-->
                </div>
                <div class="col-md-41">
                    <div class="inner5">
                        <div class="hover_content_inner2">
                            <a><img class="max-width" src="images/sub5.jpg"></a>
                        </div>
                        <div class="hover_content_inner">
                            <div class="hover_data">
                                <div class="desc-text">SAVE <br> UP TO 50% OFF</div>
                                <div class="title">MORDEN FURNITURE IN GLORY SHOP</div>
                                <div class="shop-now">
                                    <a href="#">shop now ► </a>
                                </div>
                            </div>
                        </div>
                    </div><!--end-inner5-->
                    <div class="inner6">
                        <a><img class="max-width" src="images/sub6.jpg"></a>
                        <div class="hover_content_inner">
                            <div class="hover_content_bf_inner1">
                                <div class="hover_data">
                                    <div class="title3">EXTENDING TABLE</div>
                                    <div class="desc-text">UP TO 40% OFF</div>
                                    <div class="border-3"></div>
                                    <div class="shop-now">
                                        <a href="#">SHOP NOW ► </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--end-inner6-->
                </div>
            </div>
        </div>
    </body>
</html>