<head>
    <?php
    if (!class_exists('lessc')) {
        include ('libs/lessc.inc.php');
    }
    $less = new lessc;
    $less->compileFile('less/type-3-slider-2.less', 'css/type-3-slider-2.css');
    $less->compileFile('less/styles.less', 'css/styles-3.css');
    ?>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/type-3-slider-2.css">
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/jquery-1.11.0.min.js" type="text/javascript"></script>
</head
<body>
    <div class="zaro">
        <div id="pattent" class="slidelip white-background">  
            <div class="container container-modify margin-auto"> 
                <div class="type-3-slider-2">
                    <div class="carousel slide multi-item-carousel" id="theCarousel">
                        <div class="owl-carousel">
                            <div class="item">
                                <div class="image-block-3">
                                    <a href="#"><img src="images/slide3/banner-01.jpg"></a>
                                </div> 
                            </div>
                            <div class="item">
                                <div class="image-block-3">
                                    <a href="#"><img src="images/slide3/banner-02.jpg"></a>
                                </div> 
                            </div>
                            <div class="item">
                                <div class="image-block-3">
                                    <a href="#"><img src="images/slide3/banner-01.jpg"></a>
                                </div> 
                            </div>
                            <div class="item">
                                <div class="image-block-3">
                                    <a href="#"><img src="images/slide3/banner-02.jpg"></a>
                                </div> 
                            </div>
                            <div class="item">
                                <div class="image-block-3">
                                    <a href="#"><img src="images/slide3/banner-01.jpg"></a>
                                </div> 
                            </div>
                            <div class="item">
                                <div class="image-block-3">
                                    <a href="#"><img src="images/slide3/banner-02.jpg"></a>
                                </div> 
                            </div>
                            <div class="item">
                                <div class="image-block-3">
                                    <a href="#"><img src="images/slide3/banner-01.jpg"></a>
                                </div> 
                            </div>
                            <div class="item">
                                <div class="image-block-3">
                                    <a href="#"><img src="images/slide3/banner-02.jpg"></a>
                                </div> 
                            </div>
                        </div>

                    </div>
                </div>
            </div> 
        </div>
    </div>
    <script src="js/owl.carousel.min.js" type="text/javascript"></script>
    <script>
//        setInterval(function () {
//            $(".owl-next").click();
//        }, 6000);
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 2
                },
                1000: {
                    items: 2
                }
            }
        })
    </script>
</body>