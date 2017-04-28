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
        $less->compileFile('less/876.less', 'css/876.css');
        ?>
        <link href="css/876.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="type-i-16">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="tab-pill">
                            <div class="sanpham">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a class="navfix"  data-toggle="tab" href="#home"><p>ALL</p></a></li>
                                    <li><a class="navfix" data-toggle="tab" href="#menu1"><p>FEATURED</p></a></li>
                                    <li><a class="navfix" data-toggle="tab" href="#menu2"><p>LATEST</p></a></li>
                                    <li><a class="navfix" data-toggle="tab" href="#menu3"><p>BEATSELLERS</p></a></li>
                                </ul>
                            </div>
                            <div class="trangsanpham">
                                <div class="tab-content">
                                    <div id="home" class="tab-pane fade in active ">
                                        <div class="row">
                                            <div class="col-sm-3 col-xs-6">
                                                <div class="sp">
                                                    <div class="ima">
                                                        <img class="ima1" src="images/3.1.jpg" alt=""/>
                                                    </div>
                                                    <div class="giang bx-controls ">
                                                        <div class="bx-controls-direction">
                                                            <a class="dib button smooth02 bb" href="">
                                                                <svg class="svgic">
                                                                <i class="glyphicon glyphicon-folder-close icon4"></i> 
                                                                </svg>
                                                            </a>
                                                            <a class="dib button smooth02 bb" href="">
                                                                <svg class="svgic">
                                                                <i class="glyphicon glyphicon-heart icon4 icon5"></i>                                        
                                                                </svg>
                                                            </a>
                                                            <a class="dib button smooth02 bb" href="">
                                                                <svg class="svgic">
                                                                <i class="glyphicon glyphicon-search icon4 icon6"></i>                                         
                                                                </svg>
                                                            </a>
                                                        </div>
                                                        <div class="giang1">
                                                            <a class="addcart" href="#">Add to cart</a>
                                                        </div>
                                                    </div>
                                                    <p class="price_container"> <span class="price"><b>$805.00</b></span></p>
                                                    <h5 class="s_title_block altview">
                                                        <a class="ellipsis" href="#" title="Cream Pencil Skirt">Cream Pencil Skirt</a>
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 col-xs-6">
                                                <div class="sp">
                                                    <div class="ima">
                                                        <img class="ima1" src="images/3.2.jpg" alt=""/>
                                                    </div>
                                                    <div class="giang bx-controls ">
                                                        <div class="bx-controls-direction">
                                                            <a class="dib button smooth02 bb" href="">
                                                                <svg class="svgic">
                                                                <i class="glyphicon glyphicon-folder-close icon4"></i> 
                                                                </svg>
                                                            </a>
                                                            <a class="dib button smooth02 bb" href="">
                                                                <svg class="svgic">
                                                                <i class="glyphicon glyphicon-heart icon4 icon5"></i>                                        
                                                                </svg>
                                                            </a>
                                                            <a class="dib button smooth02 bb" href="">
                                                                <svg class="svgic">
                                                                <i class="glyphicon glyphicon-search icon4 icon6"></i>                                         
                                                                </svg>
                                                            </a>
                                                        </div>
                                                        <div class="giang1">
                                                            <a class="addcart" href="#">Add to cart</a>
                                                        </div>
                                                    </div>
                                                    <p class="price_container"> <span class="price"><b>$805.00</b></span></p>
                                                    <h5 class="s_title_block altview">
                                                        <a class="ellipsis" href="#" title="Cream Pencil Skirt">Cream Pencil Skirt</a>
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 col-xs-6">
                                                <div class="sp">
                                                    <div class="ima">
                                                        <img class="ima1" src="images/3.3.jpg" alt=""/>
                                                    </div>
                                                    <div class="giang bx-controls ">
                                                        <div class="bx-controls-direction">
                                                            <a class="dib button smooth02 bb" href="">
                                                                <svg class="svgic">
                                                                <i class="glyphicon glyphicon-folder-close icon4"></i> 
                                                                </svg>
                                                            </a>
                                                            <a class="dib button smooth02 bb" href="">
                                                                <svg class="svgic">
                                                                <i class="glyphicon glyphicon-heart icon4 icon5"></i>                                        
                                                                </svg>
                                                            </a>
                                                            <a class="dib button smooth02 bb" href="">
                                                                <svg class="svgic">
                                                                <i class="glyphicon glyphicon-search icon4 icon6"></i>                                         
                                                                </svg>
                                                            </a>
                                                        </div>
                                                        <div class="giang1">
                                                            <a class="addcart" href="#">Add to cart</a>
                                                        </div>
                                                    </div>
                                                    <p class="price_container"> <span class="price"><b>$805.00</b></span></p>
                                                    <h5 class="s_title_block altview">
                                                        <a class="ellipsis" href="#" title="Cream Pencil Skirt">Cream Pencil Skirt</a>
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 col-xs-6">
                                                <div class="sp">
                                                    <div class="ima">
                                                        <img class="ima1" src="images/3.4.jpg" alt=""/>
                                                    </div>
                                                    <div class="giang bx-controls ">
                                                        <div class="bx-controls-direction">
                                                            <a class="dib button smooth02 bb" href="">
                                                                <svg class="svgic">
                                                                <i class="glyphicon glyphicon-folder-close icon4"></i> 
                                                                </svg>
                                                            </a>
                                                            <a class="dib button smooth02 bb" href="">
                                                                <svg class="svgic">
                                                                <i class="glyphicon glyphicon-heart icon4 icon5"></i>                                        
                                                                </svg>
                                                            </a>
                                                            <a class="dib button smooth02 bb" href="">
                                                                <svg class="svgic">
                                                                <i class="glyphicon glyphicon-search icon4 icon6"></i>                                         
                                                                </svg>
                                                            </a>
                                                        </div>
                                                        <div class="giang1">
                                                            <a class="addcart" href="#">Add to cart</a>
                                                        </div>
                                                    </div>
                                                    <p class="price_container"> <span class="price"><b>$805.00</b></span></p>
                                                    <h5 class="s_title_block altview">
                                                        <a class="ellipsis" href="#" title="Cream Pencil Skirt">Cream Pencil Skirt</a>
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 col-xs-6">
                                                <div class="sp">
                                                    <div class="ima">
                                                        <img class="ima1" src="images/3.3.jpg" alt=""/>
                                                    </div>
                                                    <div class="giang bx-controls ">
                                                        <div class="bx-controls-direction">
                                                            <a class="dib button smooth02 bb" href="">
                                                                <svg class="svgic">
                                                                <i class="glyphicon glyphicon-folder-close icon4"></i> 
                                                                </svg>
                                                            </a>
                                                            <a class="dib button smooth02 bb" href="">
                                                                <svg class="svgic">
                                                                <i class="glyphicon glyphicon-heart icon4 icon5"></i>                                        
                                                                </svg>
                                                            </a>
                                                            <a class="dib button smooth02 bb" href="">
                                                                <svg class="svgic">
                                                                <i class="glyphicon glyphicon-search icon4 icon6"></i>                                         
                                                                </svg>
                                                            </a>
                                                        </div>
                                                        <div class="giang1">
                                                            <a class="addcart" href="#">Add to cart</a>
                                                        </div>
                                                    </div>
                                                    <p class="price_container"> <span class="price"><b>$805.00</b></span></p>
                                                    <h5 class="s_title_block altview">
                                                        <a class="ellipsis" href="#" title="Cream Pencil Skirt">Cream Pencil Skirt</a>
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 col-xs-6">
                                                <div class="sp">
                                                    <div class="ima">
                                                        <img class="ima1" src="images/3.4.jpg" alt=""/>
                                                    </div>
                                                    <div class="giang bx-controls ">
                                                        <div class="bx-controls-direction">
                                                            <a class="dib button smooth02 bb" href="">
                                                                <svg class="svgic">
                                                                <i class="glyphicon glyphicon-folder-close icon4"></i> 
                                                                </svg>
                                                            </a>
                                                            <a class="dib button smooth02 bb" href="">
                                                                <svg class="svgic">
                                                                <i class="glyphicon glyphicon-heart icon4 icon5"></i>                                        
                                                                </svg>
                                                            </a>
                                                            <a class="dib button smooth02 bb" href="">
                                                                <svg class="svgic">
                                                                <i class="glyphicon glyphicon-search icon4 icon6"></i>                                         
                                                                </svg>
                                                            </a>
                                                        </div>
                                                        <div class="giang1">
                                                            <a class="addcart" href="#">Add to cart</a>
                                                        </div>
                                                    </div>
                                                    <p class="price_container"> <span class="price"><b>$805.00</b></span></p>
                                                    <h5 class="s_title_block altview">
                                                        <a class="ellipsis" href="#" title="Cream Pencil Skirt">Cream Pencil Skirt</a>
                                                    </h5>
                                                </div>
                                            </div> 
                                            <div class="col-sm-3 col-xs-6">
                                                <div class="sp">
                                                    <div class="ima">
                                                        <img class="ima1" src="images/3.3.jpg" alt=""/>
                                                    </div>
                                                    <div class="giang bx-controls ">
                                                        <div class="bx-controls-direction">
                                                            <a class="dib button smooth02 bb" href="">
                                                                <svg class="svgic">
                                                                <i class="glyphicon glyphicon-folder-close icon4"></i> 
                                                                </svg>
                                                            </a>
                                                            <a class="dib button smooth02 bb" href="">
                                                                <svg class="svgic">
                                                                <i class="glyphicon glyphicon-heart icon4 icon5"></i>                                        
                                                                </svg>
                                                            </a>
                                                            <a class="dib button smooth02 bb" href="">
                                                                <svg class="svgic">
                                                                <i class="glyphicon glyphicon-search icon4 icon6"></i>                                         
                                                                </svg>
                                                            </a>
                                                        </div>
                                                        <div class="giang1">
                                                            <a class="addcart" href="#">Add to cart</a>
                                                        </div>
                                                    </div>
                                                    <p class="price_container"> <span class="price"><b>$805.00</b></span></p>
                                                    <h5 class="s_title_block altview">
                                                        <a class="ellipsis" href="#" title="Cream Pencil Skirt">Cream Pencil Skirt</a>
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 col-xs-6">
                                                <div class="sp">
                                                    <div class="ima">
                                                        <img class="ima1" src="images/3.4.jpg" alt=""/>
                                                    </div>
                                                    <div class="giang bx-controls ">
                                                        <div class="bx-controls-direction">
                                                            <a class="dib button smooth02 bb" href="">
                                                                <svg class="svgic">
                                                                <i class="glyphicon glyphicon-folder-close icon4"></i> 
                                                                </svg>
                                                            </a>
                                                            <a class="dib button smooth02 bb" href="">
                                                                <svg class="svgic">
                                                                <i class="glyphicon glyphicon-heart icon4 icon5"></i>                                        
                                                                </svg>
                                                            </a>
                                                            <a class="dib button smooth02 bb" href="">
                                                                <svg class="svgic">
                                                                <i class="glyphicon glyphicon-search icon4 icon6"></i>                                         
                                                                </svg>
                                                            </a>
                                                        </div>
                                                        <div class="giang1">
                                                            <a class="addcart" href="#">Add to cart</a>
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
                                    <div id="menu1" class="tab-pane fade">
                                        <div class="row">
                                            <div class="col-sm-3 col-xs-6">
                                                <div class="sp">
                                                    <div class="ima">
                                                        <img class="ima1" src="images/3.3.jpg" alt=""/>
                                                    </div>
                                                    <div class="giang bx-controls ">
                                                        <div class="bx-controls-direction">
                                                            <a class="dib button smooth02 bb" href="">
                                                                <svg class="svgic">
                                                                <i class="glyphicon glyphicon-folder-close icon4"></i> 
                                                                </svg>
                                                            </a>
                                                            <a class="dib button smooth02 bb" href="">
                                                                <svg class="svgic">
                                                                <i class="glyphicon glyphicon-heart icon4 icon5"></i>                                        
                                                                </svg>
                                                            </a>
                                                            <a class="dib button smooth02 bb" href="">
                                                                <svg class="svgic">
                                                                <i class="glyphicon glyphicon-search icon4 icon6"></i>                                         
                                                                </svg>
                                                            </a>
                                                        </div>
                                                        <div class="giang1">
                                                            <a class="addcart" href="#">Add to cart</a>
                                                        </div>
                                                    </div>
                                                    <p class="price_container"> <span class="price"><b>$805.00</b></span></p>
                                                    <h5 class="s_title_block altview">
                                                        <a class="ellipsis" href="#" title="Cream Pencil Skirt">Cream Pencil Skirt</a>
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 col-xs-6">
                                                <div class="sp">
                                                    <div class="ima">
                                                        <img class="ima1" src="images/3.4.jpg" alt=""/>
                                                    </div>
                                                    <div class="giang bx-controls ">
                                                        <div class="bx-controls-direction">
                                                            <a class="dib button smooth02 bb" href="">
                                                                <svg class="svgic">
                                                                <i class="glyphicon glyphicon-folder-close icon4"></i> 
                                                                </svg>
                                                            </a>
                                                            <a class="dib button smooth02 bb" href="">
                                                                <svg class="svgic">
                                                                <i class="glyphicon glyphicon-heart icon4 icon5"></i>                                        
                                                                </svg>
                                                            </a>
                                                            <a class="dib button smooth02 bb" href="">
                                                                <svg class="svgic">
                                                                <i class="glyphicon glyphicon-search icon4 icon6"></i>                                         
                                                                </svg>
                                                            </a>
                                                        </div>
                                                        <div class="giang1">
                                                            <a class="addcart" href="#">Add to cart</a>
                                                        </div>
                                                    </div>
                                                    <p class="price_container"> <span class="price"><b>$805.00</b></span></p>
                                                    <h5 class="s_title_block altview">
                                                        <a class="ellipsis" href="#" title="Cream Pencil Skirt">Cream Pencil Skirt</a>
                                                    </h5>
                                                </div>
                                            </div> 
                                            <div class="col-sm-3 col-xs-6">
                                                <div class="sp">
                                                    <div class="ima">
                                                        <img class="ima1" src="images/3.3.jpg" alt=""/>
                                                    </div>
                                                    <div class="giang bx-controls ">
                                                        <div class="bx-controls-direction">
                                                            <a class="dib button smooth02 bb" href="">
                                                                <svg class="svgic">
                                                                <i class="glyphicon glyphicon-folder-close icon4"></i> 
                                                                </svg>
                                                            </a>
                                                            <a class="dib button smooth02 bb" href="">
                                                                <svg class="svgic">
                                                                <i class="glyphicon glyphicon-heart icon4 icon5"></i>                                        
                                                                </svg>
                                                            </a>
                                                            <a class="dib button smooth02 bb" href="">
                                                                <svg class="svgic">
                                                                <i class="glyphicon glyphicon-search icon4 icon6"></i>                                         
                                                                </svg>
                                                            </a>
                                                        </div>
                                                        <div class="giang1">
                                                            <a class="addcart" href="#">Add to cart</a>
                                                        </div>
                                                    </div>
                                                    <p class="price_container"> <span class="price"><b>$805.00</b></span></p>
                                                    <h5 class="s_title_block altview">
                                                        <a class="ellipsis" href="#" title="Cream Pencil Skirt">Cream Pencil Skirt</a>
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 col-xs-6">
                                                <div class="sp">
                                                    <div class="ima">
                                                        <img class="ima1" src="images/3.4.jpg" alt=""/>
                                                    </div>
                                                    <div class="giang bx-controls ">
                                                        <div class="bx-controls-direction">
                                                            <a class="dib button smooth02 bb" href="">
                                                                <svg class="svgic">
                                                                <i class="glyphicon glyphicon-folder-close icon4"></i> 
                                                                </svg>
                                                            </a>
                                                            <a class="dib button smooth02 bb" href="">
                                                                <svg class="svgic">
                                                                <i class="glyphicon glyphicon-heart icon4 icon5"></i>                                        
                                                                </svg>
                                                            </a>
                                                            <a class="dib button smooth02 bb" href="">
                                                                <svg class="svgic">
                                                                <i class="glyphicon glyphicon-search icon4 icon6"></i>                                         
                                                                </svg>
                                                            </a>
                                                        </div>
                                                        <div class="giang1">
                                                            <a class="addcart" href="#">Add to cart</a>
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
                                    <div id="menu2" class="tab-pane fade">
                                        <div class="row">
                                            <div class="col-sm-3 col-xs-6">
                                                <div class="sp">
                                                    <div class="ima">
                                                        <img class="ima1" src="images/3.3.jpg" alt=""/>
                                                    </div>
                                                    <div class="giang bx-controls ">
                                                        <div class="bx-controls-direction">
                                                            <a class="dib button smooth02 bb" href="">
                                                                <svg class="svgic">
                                                                <i class="glyphicon glyphicon-folder-close icon4"></i> 
                                                                </svg>
                                                            </a>
                                                            <a class="dib button smooth02 bb" href="">
                                                                <svg class="svgic">
                                                                <i class="glyphicon glyphicon-heart icon4 icon5"></i>                                        
                                                                </svg>
                                                            </a>
                                                            <a class="dib button smooth02 bb" href="">
                                                                <svg class="svgic">
                                                                <i class="glyphicon glyphicon-search icon4 icon6"></i>                                         
                                                                </svg>
                                                            </a>
                                                        </div>
                                                        <div class="giang1">
                                                            <a class="addcart" href="#">Add to cart</a>
                                                        </div>
                                                    </div>
                                                    <p class="price_container"> <span class="price"><b>$805.00</b></span></p>
                                                    <h5 class="s_title_block altview">
                                                        <a class="ellipsis" href="#" title="Cream Pencil Skirt">Cream Pencil Skirt</a>
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 col-xs-6">
                                                <div class="sp">
                                                    <div class="ima">
                                                        <img class="ima1" src="images/3.4.jpg" alt=""/>
                                                    </div>
                                                    <div class="giang bx-controls ">
                                                        <div class="bx-controls-direction">
                                                            <a class="dib button smooth02 bb" href="">
                                                                <svg class="svgic">
                                                                <i class="glyphicon glyphicon-folder-close icon4"></i> 
                                                                </svg>
                                                            </a>
                                                            <a class="dib button smooth02 bb" href="">
                                                                <svg class="svgic">
                                                                <i class="glyphicon glyphicon-heart icon4 icon5"></i>                                        
                                                                </svg>
                                                            </a>
                                                            <a class="dib button smooth02 bb" href="">
                                                                <svg class="svgic">
                                                                <i class="glyphicon glyphicon-search icon4 icon6"></i>                                         
                                                                </svg>
                                                            </a>
                                                        </div>
                                                        <div class="giang1">
                                                            <a class="addcart" href="#">Add to cart</a>
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
                                    <div id="menu3" class="tab-pane fade">
                                        <div class="row">
                                            <div class="col-sm-3 col-xs-6">
                                                <div class="sp">
                                                    <div class="ima">
                                                        <img class="ima1" src="images/3.4.jpg" alt=""/>
                                                    </div>
                                                    <div class="giang bx-controls ">
                                                        <div class="bx-controls-direction">
                                                            <a class="dib button smooth02 bb" href="">
                                                                <svg class="svgic">
                                                                <i class="glyphicon glyphicon-folder-close icon4"></i> 
                                                                </svg>
                                                            </a>
                                                            <a class="dib button smooth02 bb" href="">
                                                                <svg class="svgic">
                                                                <i class="glyphicon glyphicon-heart icon4 icon5"></i>                                        
                                                                </svg>
                                                            </a>
                                                            <a class="dib button smooth02 bb" href="">
                                                                <svg class="svgic">
                                                                <i class="glyphicon glyphicon-search icon4 icon6"></i>                                         
                                                                </svg>
                                                            </a>
                                                        </div>
                                                        <div class="giang1">
                                                            <a class="addcart" href="#">Add to cart</a>
                                                        </div>
                                                    </div>
                                                    <p class="price_container"> <span class="price"><b>$805.00</b></span></p>
                                                    <h5 class="s_title_block altview">
                                                        <a class="ellipsis" href="#" title="Cream Pencil Skirt">Cream Pencil Skirt</a>
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 col-xs-6">
                                                <div class="sp">
                                                    <div class="ima">
                                                        <img class="ima1" src="images/3.3.jpg" alt=""/>
                                                    </div>
                                                    <div class="giang bx-controls ">
                                                        <div class="bx-controls-direction">
                                                            <a class="dib button smooth02 bb" href="">
                                                                <svg class="svgic">
                                                                <i class="glyphicon glyphicon-folder-close icon4"></i> 
                                                                </svg>
                                                            </a>
                                                            <a class="dib button smooth02 bb" href="">
                                                                <svg class="svgic">
                                                                <i class="glyphicon glyphicon-heart icon4 icon5"></i>                                        
                                                                </svg>
                                                            </a>
                                                            <a class="dib button smooth02 bb" href="">
                                                                <svg class="svgic">
                                                                <i class="glyphicon glyphicon-search icon4 icon6"></i>                                         
                                                                </svg>
                                                            </a>
                                                        </div>
                                                        <div class="giang1">
                                                            <a class="addcart" href="#">Add to cart</a>
                                                        </div>
                                                    </div>
                                                    <p class="price_container"> <span class="price"><b>$805.00</b></span></p>
                                                    <h5 class="s_title_block altview">
                                                        <a class="ellipsis" href="#" title="Cream Pencil Skirt">Cream Pencil Skirt</a>
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 col-xs-6">
                                                <div class="sp">
                                                    <div class="ima">
                                                        <img class="ima1" src="images/3.4.jpg" alt=""/>
                                                    </div>
                                                    <div class="giang bx-controls ">
                                                        <div class="bx-controls-direction">
                                                            <a class="dib button smooth02 bb" href="">
                                                                <svg class="svgic">
                                                                <i class="glyphicon glyphicon-folder-close icon4"></i> 
                                                                </svg>
                                                            </a>
                                                            <a class="dib button smooth02 bb" href="">
                                                                <svg class="svgic">
                                                                <i class="glyphicon glyphicon-heart icon4 icon5"></i>                                        
                                                                </svg>
                                                            </a>
                                                            <a class="dib button smooth02 bb" href="">
                                                                <svg class="svgic">
                                                                <i class="glyphicon glyphicon-search icon4 icon6"></i>                                         
                                                                </svg>
                                                            </a>
                                                        </div>
                                                        <div class="giang1">
                                                            <a class="addcart" href="#">Add to cart</a>
                                                        </div>
                                                    </div>
                                                    <p class="price_container"> <span class="price"><b>$805.00</b></span></p>
                                                    <h5 class="s_title_block altview">
                                                        <a class="ellipsis" href="#" title="Cream Pencil Skirt">Cream Pencil Skirt</a>
                                                    </h5>
                                                </div>
                                            </div> 
                                            <div class="col-sm-3 col-xs-6">
                                                <div class="sp">
                                                    <div class="ima">
                                                        <img class="ima1" src="images/3.3.jpg" alt=""/>
                                                    </div>
                                                    <div class="giang bx-controls ">
                                                        <div class="bx-controls-direction">
                                                            <a class="dib button smooth02 bb" href="">
                                                                <svg class="svgic">
                                                                <i class="glyphicon glyphicon-folder-close icon4"></i> 
                                                                </svg>
                                                            </a>
                                                            <a class="dib button smooth02 bb" href="">
                                                                <svg class="svgic">
                                                                <i class="glyphicon glyphicon-heart icon4 icon5"></i>                                        
                                                                </svg>
                                                            </a>
                                                            <a class="dib button smooth02 bb" href="">
                                                                <svg class="svgic">
                                                                <i class="glyphicon glyphicon-search icon4 icon6"></i>                                         
                                                                </svg>
                                                            </a>
                                                        </div>
                                                        <div class="giang1">
                                                            <a class="addcart" href="#">Add to cart</a>
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
        </div>
    </body>
</html>