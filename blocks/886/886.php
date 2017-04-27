<html>
    <head>
        <title>title</title>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/886.less', 'css/886.css');
        ?>
        <link href="css/886.css" rel="stylesheet" type="text/css" />   
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <link href="css/swiper.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
        <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    </head>
    <body>
        <div class="type-886">
		<!-- BEGIN TYPE-886 -->
            <div class="container">
                <div class="row">
                    <div class="banner">
                        <div class="info">
                            <h1>What client say</h1>
                            <p>Real Estate agents are Property consisting of land and the buildings on it, along with its seds naturals resources such seds as crops, minerals, or water</p>
                        </div>
                        <div class="slideshow">
                            <div class="col-md-3">
                                <div class="block">
                                    <div class="image">
                                        <img src="images/testi-image-1.jpg" alt=""/>
                                    </div>
                                    <div class="name">
                                        <h2>Missar Hub</h2>
                                    </div>
                                    <div class="job">
                                        <span>Co- Founder at Houzz </span>
                                    </div>
                                    <div class="description">
                                        <p><i>“We know that sometimes it’s difficult to get to the phone if you are in the middle of something and you don’t want to miss.”</i></p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="block">
                                    <div class="image">
                                        <img src="images/testi-image-2.jpg" alt=""/>
                                    </div>
                                    <div class="name">
                                        <h2>Jack Willshere</h2>
                                    </div>
                                    <div class="job">
                                        <span>Co- Founder at Houzz </span>
                                    </div>
                                    <div class="description">
                                        <p>“We know that sometimes it’s difficult to get to the phone if you are in the middle of something and you don’t want to miss.”</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">

                                <div class="block">
                                    <div class="image">
                                        <img src="images/testi-image-3.jpg" alt=""/>
                                    </div>
                                    <div class="name">
                                        <h2>Missar Hub</h2>
                                    </div>
                                    <div class="job">
                                        <span>Co- Founder at Houzz </span>
                                    </div>
                                    <div class="description">
                                        <p>“We know that sometimes it’s difficult to get to the phone if you are in the middle of something and you don’t want to miss.”</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="block">
                                    <div class="image">
                                        <img src="images/testi-image-2.jpg" alt=""/>
                                    </div>
                                    <div class="name">
                                        <h2>Jack Willshere</h2>
                                    </div>
                                    <div class="job">
                                        <span>Co- Founder at Houzz </span>
                                    </div>
                                    <div class="description">
                                        <p>“We know that sometimes it’s difficult to get to the phone if you are in the middle of something and you don’t want to miss.”</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">                             
                                <div class="block">
                                    <div class="image">
                                        <img src="images/testi-image-3.jpg" alt=""/>
                                    </div>
                                    <div class="name">
                                        <h2>Missar Hub</h2>
                                    </div>
                                    <div class="job">
                                        <span>Co- Founder at Houzz </span>
                                    </div>
                                    <div class="description">
                                        <p>“We know that sometimes it’s difficult to get to the phone if you are in the middle of something and you don’t want to miss.”</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
			<!-- END TYPE-886 -->
        </div>

        <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
        <script src="js/jquery-migrate-1.3.0.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="slick/slick.min.js"></script>
        <script>
            $(document).ready(function () {
                $('.slideshow').slick({
                    slidesToShow: 3,
                    arrows: false,
                    dots: true,
                    autoplay: true
                });
            });
        </script>
    </body>
</html>