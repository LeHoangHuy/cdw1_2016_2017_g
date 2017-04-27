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
        $less->compileFile('less/861.less', 'css/861.css');
        ?>
        <link href="css/861.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>

    </head>

    <body> 
        <div class="type-861">
		<!-- BEGIN TYPE-861 -->
            <div class="container">
                <div class="row">
                    <div class="slideshow">
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="item active">
                                    <a href="#"><img src="images/2.1.jpg" alt="" class="col-md-6 col-sm-6 col-xs-6"/></a>
                                    <a href="#"><img src="images/2.2.jpg" alt="" class="col-md-6 col-sm-6 col-xs-6"/></a>
                                </div>
                                <div class="item">
                                    <a href="#"><img src="images/2.2.jpg" alt="" class="col-md-6 col-sm-6 col-xs-6"/></a>
                                    <a href="#"><img src="images/2.1.jpg" alt="" class="col-md-6 col-sm-6 col-xs-6"/></a>
                                </div>
                            </div>
                            <div class="button-slide">
                                <div class="left-button">
                                    <a class="left" href="#myCarousel" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>

                                    </a>
                                </div>
                                <div class="right-button">
                                    <a class="right" href="#myCarousel" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>

                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>   
            </div>
			<!-- END TYPE-861 -->
        </div>        
    </body>

</html>