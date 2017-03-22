<head>
    <?php
    if (!class_exists('lessc')) {
        include ('libs/lessc.inc.php');
    }
    $less = new lessc;
    $less->compileFile('less/type-2-slider.less', 'css/type-2-slider.css');
    ?>
    <link rel="stylesheet" href="css/type-2-slider.css">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
</head
<body>
    <div class="zaro">
        <div id="pattent" class="slidelip white-background">  
            <div class="container container-modify margin-auto header">
                <!--SLIDE VIET-->
                <div class="banner-alysum"> 
                    <div id="zaro-carousel">
                        <table class="title-table">
                            <tbody>
                                <tr>
                                    <td class="col-md-6 col-sm-6">
                                        <span class="title-wing"></span>
                                    </td>

                                    <td class="carousel-title">
                                        <h3> Instagram Feed </h3>
                                        <div class="zaro-prev smooth02 zaro-controls carousel-control" href="#myCarousel" data-slide="prev">
                                            <i class="fa fa-angle-left"></i>
                                        </div>
                                        <div class="zaro-next smooth02 zaro-controls carousel-control" href="#myCarousel" data-slide="next">
                                            <i class="fa fa-angle-right"></i>
                                        </div>
                                    </td>

                                    <td class="col-md-6 col-sm-6">
                                        <span class="title-wing"></span>
                                    </td> 
                                </tr>
                            </tbody>
                        </table>

                        <div class="carousel slide" data-ride="carousel" data-type="viet" data-interval="3000" id="myCarousel">
                            <div class="carousel-inner">
                                <div class="item active">
                                    <div class="col-md-3 col-sm-6 col-xs-6 item-product">
                                        <a href="#">
                                            <img src="images/slide2/instagram2.jpg " class="img-responsive">
                                        </a>
                                        <div class="ig-wrapper tr05">
                                            <div class="laptop">BBBBBBBBBBBBBBBB</div>
                                            <i class="fa fa-eye">3</i> <i class="fa fa-comment">2</i>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-md-3 col-sm-6 col-xs-6 item-product">
                                        <a href="#">
                                            <img src="images/slide2/instagram1.jpg" class="img-responsive">
                                        </a>
                                        <div class="ig-wrapper tr05">
                                            <div class="laptop">#AAAAAAAAAAAAA</div>
                                            <i class="fa fa-eye">3</i> <i class="fa fa-comment">2</i>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-md-3 col-sm-6 col-xs-6 item-product">
                                        <a href="#">
                                            <img src="images/slide2/instagram3.jpg" class="img-responsive">
                                        </a>
                                        <div class="ig-wrapper tr05">
                                            <div class="laptop">#AAAAAAAAAAAAA</div>
                                            <i class="fa fa-eye">3</i> <i class="fa fa-comment">2</i>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-md-3 col-sm-6 col-xs-6 item-product">
                                        <a href="#">
                                            <img src="images/slide2/instagram4.jpg" class="img-responsive">
                                        </a>
                                        <div class="ig-wrapper tr05">
                                            <div class="laptop">#AAAAAAAAAAAAA</div>
                                            <i class="fa fa-eye">3</i> <i class="fa fa-comment">2</i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div> 
                </div>

            </div>

        </div>
    </div>
    <script src="js/jquery-1.11.0.min.js" type="text/javascript"></script>

    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script>
        $(document).ready(function () {
            //CAROUSEL VIET
            window.onresize = function (event) {
                document.location.reload(true);
            };
            $('.carousel[data-type="viet"] .item').each(function () {
                var next = $(this).next();
                if (!next.length) {
                    next = $(this).siblings(':first');
                }
                next.children(':first-child').clone().appendTo($(this));
                if ($(window).width() > 980) {
                    for (var i = 0; i < 2; i++) {
                        next = next.next();
                        if (!next.length) {
                            next = $(this).siblings(':first');
                        }
                        next.children(':first-child').clone().appendTo($(this));
                    }
                } else if ($(window).width() < 728) {
                    for (var i = 0; i < 0; i++) {
                        next = next.next();
                        if (!next.length) {
                            next = $(this).siblings(':first');
                        }
                        next.children(':first-child').clone().appendTo($(this));
                    }
                }
            });
        });
    </script>

</body>