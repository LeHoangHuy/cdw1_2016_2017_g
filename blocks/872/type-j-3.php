<!DOCTYPE html>

<html style="background-color: #f3f3f4;">

    <head>
        <title>Aurum - Fashion</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/type-7.less', 'css/type-7.css');
        ?>
        <link href="css/swiper.min.css" rel="stylesheet" type="text/css" />
        <link href="css/type-7.css" rel="stylesheet" type="text/css" />


    </head>

    <body>
        <div class="type-7">

            <!-- Main Content -->

            <div class="maincontent">
                <div class="container">
                    <div class="row product-cat">
                        <h2 class="text-center">ACCESSORIES
                            <small>BEST ACCESSORIES FOR LADIES</small>
                        </h2>

                    </div>
                    <div class="row">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">

                                <div class="col-md-4 swiper-slide">
                                    <div class="row photo">
                                        <img src="img/uploads/2014/11/image1xxl-290x370.jpg" class="img-responsive" alt="a">
                                        <img class="img" src="img/uploads/2014/11/image4xxl1-290x370.jpg" class="img-responsive" alt="a">
                                    </div>
                                    <div class="row info">
                                        <p>hihi</p>
                                    </div>
                                </div>
                                <div class="col-md-4 swiper-slide">
                                    <div class="row photo">
                                        <img src="img/uploads/2014/11/image1xxl-290x370.jpg" class="img-responsive" alt="a">
                                        <img class="img" src="img/uploads/2014/11/image4xxl1-290x370.jpg" class="img-responsive" alt="a">
                                    </div>
                                </div>
                                <div class="col-md-4 swiper-slide">
                                    <div class="row photo">
                                        <img src="img/uploads/2014/11/image1xxl-290x370.jpg" class="img-responsive" alt="a">
                                        <img class="img" src="img/uploads/2014/11/image4xxl1-290x370.jpg" class="img-responsive" alt="a">
                                    </div>
                                </div>
                                <div class="col-md-4 swiper-slide">
                                    <div class="row photo">
                                        <img src="img/uploads/2014/11/image1xxl-290x370.jpg" class="img-responsive" alt="a">
                                        <img class="img" src="img/uploads/2014/11/image4xxl1-290x370.jpg" class="img-responsive" alt="a">
                                    </div>
                                </div>
                                
                                
                                

                                


                            </div>
                            <div class="swipper-btn">
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>
                    </div>
                    <br>





                </div>

            </div>


            <!-- /Main Content -->




            <!-- Bootstrap core JavaScript
            ================================================== -->
            <!-- Placed at the end of the document so the pages load faster -->
            <script src="js/jquery.min.js"></script>

            <script src="js/bootstrap.min.js"></script>
            <script src="js/scripts.js"></script>
            <script src="js/swiper.min.js"></script>
            <script>
                var swiper = new Swiper('.swiper-container', {
                    pagination: '.swiper-pagination',
                    nextButton: '.swiper-button-next',
                    prevButton: '.swiper-button-prev',
                    slidesPerView: 3,
                    paginationClickable: true,
                    spaceBetween: 30,
                    /* autoplay: 3000, */
                    autoplayDisableOnInteraction: false
                });
            </script>
        </div>
    </body>


</html>