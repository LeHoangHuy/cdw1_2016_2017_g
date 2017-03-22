<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/809.css" rel="stylesheet" type="text/css"/>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/809.less', 'css/809.css');
        ?>
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>

    </head>
    <body>
        <div class="type-809">
            <!-- BEGIN SLIDESHOW -->
            <div class="container">
                <div class="row">
                    <div class="slide-show">
                        <div class="testimonials">
                            <div class="Title">
                                <h1>Testimonials</h1>
                            </div>
                            <div id="mySlide" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vulputate sed lorem a congue. Donec consequat et sem in porta." </p>
                                        <span> John Snow, CEO</span>
                                    </div>
                                    <div class="item">
                                        <p>"Excellent project that helps discovering young talents and keep us healthy. Professional coaches and staff are doing great job!"</p>
                                        <span> Martin Moore, Manger </span>
                                    </div>
                                    <div class="item">
                                        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vulputate sed lorem a congue. Donec consequat et sem in porta."</p>
                                        <span>Lisa Kudrow, Manager </span>
                                    </div>
                                </div>
                                <div class="button">
                                    <a href="#mySlide" class="glyphicon glyphicon-chevron-left"role="button" data-slide="prev">
                                    </a>
                                    <a href="#mySlide" class="glyphicon glyphicon-chevron-right" role="button" data-slide="next">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END SLIDESHOW -->
        </div>
    </body>
</html>
