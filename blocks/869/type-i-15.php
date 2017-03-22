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
        $less->compileFile('less/type-i-15.less', 'css/type-i-15.css');
        ?>
        <link href="css/type-i-15.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>


    </head>

    <body>
        <div class="type-i-15">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="slide3">
                            <div class="hovereffect-2">
                                <div class="carousel-title">
                                    <h3 class="lmroman1"> New Products</h3>
                                    <div class="bx-controls ">
                                        <div class="bx-controls-direction1">     
                                            <a class="left carousel-control nextbutton" href="#carouselABC"data-slide="prev">
                                                <i class="fa fa-angle-left"></i>
                                            </a>
                                            <a class="right carousel-control prebutton" href="#carouselABC"data-slide="next">
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="trangsanpham new">
                                <div class="carousel carousel-showmanymoveone slide" id="carouselABC">
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <div class="col-xs-12 col-sm-6 col-md-3">
                                                <div class="sp">
                                                    <div class="ima">
                                                        <img class="ima1" src="images/3.1.jpg" alt=""/>
                                                    </div>
                                                    <div class="giang2">
                                                        <h4 class="addcart1" href="#">New</h4>
                                                    </div>
                                                    <div class="bx-controls  giang">
                                                        <div class="bx-controls-direction">
                                                            <a class="dib button smooth02" href="">
                                                                <svg class="svgic ">
                                                                <i class="glyphicon glyphicon-folder-close icon4"></i>
                                                                </svg>
                                                            </a>
                                                            <a class="dib button smooth02" href="">
                                                                <svg class="svgic">
                                                                <i class="glyphicon glyphicon-heart icon4 icon5"></i>                                     
                                                                </svg>
                                                            </a>
                                                            <a class="dib button smooth02" href="">
                                                                <svg class="svgic ">
                                                                <i class="glyphicon glyphicon-search icon4 icon6"></i>                                       
                                                                </svg>
                                                            </a>
                                                        </div>

                                                    </div>
                                                    <p class="price_container"> <span class="price"><b>$805.00</b></span></p>
                                                    <h5 class="s_title_block altview">
                                                        <a class="ellipsis" href="#" title="Cream Pencil Skirt">Cream Pencil Skirt</a>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-xs-12 col-sm-6 col-md-3">
                                                <div class="sp">
                                                    <div class="ima">
                                                        <img class="ima1"src="images/3.4.jpg"  alt=""/>
                                                    </div>
                                                    <div class="giang2">
                                                        <h4 class="addcart1" href="#">New</h4>
                                                    </div>
                                                    <div class="bx-controls  giang">
                                                        <div class="bx-controls-direction">
                                                            <a class="dib button smooth02" href="">
                                                                <svg class="svgic ">
                                                                <i class="glyphicon glyphicon-folder-close icon4"></i>
                                                                </svg>
                                                            </a>
                                                            <a class="dib button smooth02" href="">
                                                                <svg class="svgic">
                                                                <i class="glyphicon glyphicon-heart icon4 icon5"></i>                                     
                                                                </svg>
                                                            </a>
                                                            <a class="dib button smooth02" href="">
                                                                <svg class="svgic ">
                                                                <i class="glyphicon glyphicon-search icon4 icon6"></i>                                       
                                                                </svg>
                                                            </a>
                                                        </div>

                                                    </div>
                                                    <p class="price_container"> <span class="price"><b>$805.00</b></span></p>
                                                    <h5 class="s_title_block altview">
                                                        <a class="ellipsis" href="#" title="Cream Pencil Skirt">Cream Pencil Skirt</a>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-xs-12 col-sm-6 col-md-3">
                                                <div class="sp">
                                                    <div class="ima">
                                                        <img class="ima1" src="images/3.2.jpg" alt=""/>
                                                    </div>
                                                    <div class="giang2">
                                                        <h4 class="addcart1" href="#">New</h4>
                                                    </div>
                                                    <div class="bx-controls  giang">
                                                        <div class="bx-controls-direction">
                                                            <a class="dib button smooth02" href="">
                                                                <svg class="svgic ">
                                                                <i class="glyphicon glyphicon-folder-close icon4"></i>
                                                                </svg>
                                                            </a>
                                                            <a class="dib button smooth02" href="">
                                                                <svg class="svgic">
                                                                <i class="glyphicon glyphicon-heart icon4 icon5"></i>                                     
                                                                </svg>
                                                            </a>
                                                            <a class="dib button smooth02" href="">
                                                                <svg class="svgic ">
                                                                <i class="glyphicon glyphicon-search icon4 icon6"></i>                                       
                                                                </svg>
                                                            </a>
                                                        </div>

                                                    </div>
                                                    <p class="price_container"> <span class="price"><b>$805.00</b></span></p>
                                                    <h5 class="s_title_block altview">
                                                        <a class="ellipsis" href="#" title="Cream Pencil Skirt">Cream Pencil Skirt</a>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-xs-12 col-sm-6 col-md-3">
                                                <div class="sp">
                                                    <div class="ima">
                                                        <img class="ima1" src="images/3.3.jpg" alt=""/>
                                                    </div>
                                                    <div class="giang2">
                                                        <h4 class="addcart1" href="#">New</h4>
                                                    </div>
                                                    <div class="bx-controls  giang">
                                                        <div class="bx-controls-direction">
                                                            <a class="dib button smooth02" href="">
                                                                <svg class="svgic ">
                                                                <i class="glyphicon glyphicon-folder-close icon4"></i>
                                                                </svg>
                                                            </a>
                                                            <a class="dib button smooth02" href="">
                                                                <svg class="svgic">
                                                                <i class="glyphicon glyphicon-heart icon4 icon5"></i>                                     
                                                                </svg>
                                                            </a>
                                                            <a class="dib button smooth02" href="">
                                                                <svg class="svgic ">
                                                                <i class="glyphicon glyphicon-search icon4 icon6"></i>                                       
                                                                </svg>
                                                            </a>
                                                        </div>

                                                    </div>
                                                    <p class="price_container"> <span class="price"><b>$805.00</b></span></p>
                                                    <h5 class="s_title_block altview">
                                                        <a class="ellipsis" href="#" title="Cream Pencil Skirt">Cream Pencil Skirt</a>
                                                    </h5>
                                                </div>  
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-xs-12 col-sm-6 col-md-3">
                                                <div class="sp">
                                                    <div class="ima">
                                                        <img class="ima1" src="images/3.3.jpg" alt=""/>
                                                    </div>
                                                    <div class="giang2">
                                                        <h4 class="addcart1" href="#">New</h4>
                                                    </div>
                                                    <div class="bx-controls  giang">
                                                        <div class="bx-controls-direction">
                                                            <a class="dib button smooth02" href="">
                                                                <svg class="svgic ">
                                                                <i class="glyphicon glyphicon-folder-close icon4"></i>
                                                                </svg>
                                                            </a>
                                                            <a class="dib button smooth02" href="">
                                                                <svg class="svgic">
                                                                <i class="glyphicon glyphicon-heart icon4 icon5"></i>                                     
                                                                </svg>
                                                            </a>
                                                            <a class="dib button smooth02" href="">
                                                                <svg class="svgic ">
                                                                <i class="glyphicon glyphicon-search icon4 icon6"></i>                                       
                                                                </svg>
                                                            </a>
                                                        </div>

                                                    </div>
                                                    <p class="price_container"> <span class="price"><b>$805.00</b></span></p>
                                                    <h5 class="s_title_block altview">
                                                        <a class="ellipsis" href="#" title="Cream Pencil Skirt">Cream Pencil Skirt</a>
                                                    </h5>
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
            <script src="js/scripts.js" type="text/javascript"></script>
    </body>

</html>