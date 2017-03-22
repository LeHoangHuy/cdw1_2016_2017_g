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
        $less->compileFile('less/type-i-11.less', 'css/type-i-11.css');
        ?>
        <link href="css/type-i-11.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>

    </head>

    <body>
        <div class="type-i-11">
            <div class="container">
                <div class="col-md-9">
                    <div class="slide1">
                        <div class=" hovereffect">
                            <div class="carousel 1 slide" id="myCarousel">
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <div class="img-responsive"> 
                                            <img class="img-responsive" src="images/1.2.jpg" alt=""/>
                                            <div class="overlay">                               
                                                <h3>dresses</h3>
                                                <h2>for every day</h2>
                                                <p>Quisque volutpat blandit ipsum eget pulvinar. In viverra, mi ac convallis dictum enim.</p>
                                                <p><button class="button exclusive" type="button">Shop now</button></p>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="img-responsive"> 
                                            <img class="img-responsive" src="images/1.1.jpg" alt=""/>
                                            <div class="overlay1">                               
                                                <h3>THE</h3>
                                                <h2 >CANDY BAG</h2>
                                                <P>Pellentesque vel aliquam ante. Praesent quis facilisis risus, sit amet pulvinar justo.</P>
                                                <p><button class="button exclusive" type="button">Take Look</button></p>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                                <div class="bx-controls">
                                    <div class="bx-controls-direction">
                                        <a class="left carousel-control button" href="#myCarousel" data-slide="prev">
                                            <i class="fa fa-angle-left"></i></a>
                                        </a>
                                        <a class="right carousel-control button" href="#myCarousel" data-slide="next">
                                            <i class="fa fa-angle-right"></i></a>
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