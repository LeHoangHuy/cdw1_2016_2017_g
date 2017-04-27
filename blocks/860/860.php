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
        $less->compileFile('less/860.less', 'css/860.css');
        ?>
        <link href="css/860.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>

    </head>

    <body>
        <div class="type-860">
		<!-- BEGIN TYPE-860 -->
            <div class="container">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-9">
                        <div class="slide-show">
                            <div id="mySlide" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                        <img src="images/1.1.jpg" alt=""/>
                                        <div class=" carousel-caption">
                                            <div class="infor">
                                                <div class="name1">
                                                    <h3>The</h3>
                                                </div>
                                                <div class="product1">
                                                    <h2>Candy Bag</h2>
                                                </div>
                                                <div class="description1">
                                                    <p>Pellentesque vel aliquam ante. Praesent quis facilisis risus, sit amet pulvinar justo.</p>
                                                </div>
                                                <div class="take-look">
                                                    <a href="#">Take Look</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <img src="images/1.2.jpg" alt=""/>
                                        <div class="carousel-caption">
                                            <div class="infor "style=" bottom: 150px;right: -150px;">
                                                <div class="name2">
                                                    <h3>Dresses</h3>
                                                </div>
                                                <div class="product2">
                                                    <h2>For every day</h2>
                                                </div>
                                                <div class="description2">
                                                    <p>Quisque volutpat blandit ipsum eget pulvinar. In viverra, mi ac convallis dictum enim.</p>
                                                </div>
                                                <div class="shop-now">
                                                    <p><a href="#">Shop now</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-slide">
                                    <div id="left-btn">
                                        <a href="#mySlide" role="button"data-slide="prev">
                                            <span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>
                                        </a>
                                    </div>
                                    <div id="right-btn">
                                        <a href="#mySlide" role="button" data-slide="next">
                                            <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			<!-- END TYPE-860 -->
        </div>
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script language="javascript" type="text/javascript">
            $(document).ready(function () {
                $('#left-btn').click(function () {
                    $('.infor').fadeOut().delay(500).fadeIn(1000);
                });
                $('#right-btn').click(function () {
                    $('.infor').fadeOut().delay(500).fadeIn(1000);
                });
            });
        </script>
    </body>
</html>