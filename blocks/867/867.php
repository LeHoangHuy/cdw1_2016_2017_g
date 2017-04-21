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
        $less->compileFile('less/867.less', 'css/867.css');
        ?>
        <link href="css/867.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="type-867">
            <div class="container">
                <div class="col-md-9">
                    <div class="slidebosung">
                        <div class="testimonials">
                            <a href="#" class="stt">Testimonials</a>
                            <div class="item-wrapper">
                                <div class="carousel slide" id="myCarouselac">
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <div class="testimonial">“</div>
                                            <div class="testimonial-message">Ipsum dolor sit amet, consectetur adipiscing elit. Nulla interdum tincidunt felis, id mattis nisi mattis in. Etiam vehicula sem et augue mattis congue. Vivamus consequat congue purus, non imperdiet nulla rhoncus eu. Donec vehicula lor</div>      
                                            <div class="testimonial-author">Marek, 15 of May of</div>
                                        </div>
                                        <div class="item">
                                            <div class="testimonial">“</div>
                                            <div class="testimonial-message">adasdasdaIpsum dolor sit amet, consectetur adipiscing elit. Nulla interdum tincidunt felis, id mattis nisi mattis in. Etiam vehicula sem et augue mattis congue. Vivamus consequat congue purus, non imperdiet nulla rhoncus eu. Donec vehicula lor</div>      
                                            <div class="testimonial-author">Marek, 15 of May of</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flexisel-nav-wrapper1">
                                    <div class="flexisel-nav-l1">
                                        <a href="#myCarouselac" data-slide="prev">
                                            <i class="fa fa-angle-left icon"></i>                                        
                                        </a>
                                    </div>
                                    <div class="flexisel-nav-r1">
                                        <a href="#myCarouselac" data-slide="next">                
                                            <i class="fa fa-angle-right icon"></i>                                
                                        </a>
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