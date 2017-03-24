<!DOCTYPE html>

<html style="background-color: #f3f3f4;">

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
        $less->compileFile('less/type-i-12.less', 'css/type-i-12.css');
        ?>
        <link href="css/type-i-12.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>

    </head>

    <body> 
        <div class="type-i-12">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="slide2">
                            <div class="hovereffect-simple2">
                                <div class="hovereffect-1">
                                    <div class="carousel carousel-showmanymoveone slide" id="carousel123">
                                        <div class="carousel-inner">
                                            <div class="item active">
                                                <div class="col-xs-12 col-sm-6">
                                                    <div class="banners_carousel_wrap"> 
                                                        <a href="#" class="img-hover">
                                                            <img class="img-responsive" src="images/2.1.jpg" alt=""/>
                                                        </a>
                                                    </div> 
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="col-xs-12 col-sm-6 ">                                               
                                                    <div class="banners_carousel_wrap"> 
                                                        <a href="#" class="img-hover">
                                                            <img class="img-responsive" src="images/2.2.jpg" alt=""/>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="col-xs-12 col-sm-6">                                               
                                                    <div class="banners_carousel_wrap"> 
                                                        <a href="#" class="img-hover">
                                                            <img class="img-responsive" src="images/2.2.jpg" alt=""/>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>


                                    </div> 
                                    <div class="flexisel-nav-wrapper">
                                        <div class="flexisel-nav-l">
                                            <a class="left carousel-control" href="#carousel123"data-slide="prev">
                                                <i class="fa fa-angle-left"></i>
                                            </a>
                                        </div>
                                        <div class="flexisel-nav-r">
                                            <a class="right carousel-control" href="#carousel123"data-slide="next">
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>

                </div>   
            </div>

        </div>

        <script src="js/scripts.js" type="text/javascript"></script>
    </body>

</html>