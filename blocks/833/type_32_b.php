<!DOCTYPE html>
<html >
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/bootstrap.min_1.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/responsive_1.css" rel="stylesheet" type="text/css"/>

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/styles.less', 'css/styles.css');
        ?>

        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/owl.carousel.stmin.js" type="text/javascript"></script>
        <link href="css/styles.css" rel="stylesheet" type="text/css"/>


    </head>


    <body >
        <div class="type_32_b">
            <div class="container">
                <div class="vc_row  vc_custom_1437530809851">
                    <div class=" col-sm-12">
                        <div class="wpb_text_column wpb_content_element ">
                            <h1 style="text-align: center;">Provides a Wide Range of Products</h1>
                        </div>
                        <div class="filter-wrapper">
                            <div class="portfolioFilter " data-readmore="yes" data-num="8" data-order="ASC" data-orderby="Post Name" data-catlist="">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#menu0" data-filter="*" class="btn-outline"> All</a></li> 
                                    <li><a data-toggle="tab" href="#menu1" data-filter=".bars" class="btn-outline1">Bars</a></li>
                                    <li><a data-toggle="tab" href="#menu2" data-filter=".copper-base" class="btn-outline2">Copper Base</a></li>
                                    <li><a data-toggle="tab" href="#menu3" data-filter=".plates" class="btn-outline3">Plates</a></li>
                                    <li><a data-toggle="tab" href="#menu4" data-filter=".rails" class="btn-outline4">Rails</a></li>
                                    <li><a data-toggle="tab" href="#menu5" data-filter=".rolled" class="btn-outline5">Rolled</a></li>
                                    <li><a data-toggle="tab" href="#menu6" data-filter=".sheet-steel" class="btn-outline6">Sheet Steel</a></li>
                                    <li><a data-toggle="tab" href="#menu7" data-filter=".steel-forgings" class="btn-outline7">Steel Forgings</a></li>
                                    <li><a data-toggle="tab" href="#menu8" data-filter=".steel-pipes" class="btn-outline8">Steel Pipes</a></li>
                                </ul>
                            </div>




                            <div class="portfolioContainer " style=" overflow: hidden; height: auto">
                                <div class="tab-content" style="padding-right: 24px">
                                    <div id="menu0" class="tab-pane fade in active"  >
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <div class="sheet-steel isotope-item"  >
                                                <div class="box image-scale">
                                                    <img  src="images/1.jpg"  alt="rolled-steel1"  data-lazy-loaded="true" style="display: block;">
                                                    <div class="caption scale-caption">
                                                        <a href="#"><h1>Bars</h1></a>
                                                        <!--<a href="#" >View details</a>--->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <div class="rolled isotope-item">
                                                <div class="tp-pic box image-scale" >
                                                    <img  src="images/2.jpg"  alt="steel-pipes1" data-lazy-loaded="true" style="display: block;">
                                                    <div class="caption scale-caption">
                                                        <a href="#"><h1>Plates</h1></a>
                                                        <!--<a href="#" >View details</a>--->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <div class="steel-pipes isotope-item">
                                                <div class="tp-pic box image-scale" >
                                                    <img  src="images/3.jpg"  alt="steel-rail" data-lazy-loaded="true" style="display: block;">
                                                    <div class="caption scale-caption">
                                                        <a href="#"><h1>Steel Rails</h1></a>
                                                        <!--<a href="#" >View details</a>--->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <div class="rolled1 isotope-item">
                                                <div class="tp-pic box image-scale">
                                                    <img  src="images/4.jpg"  alt="steel-plate1" data-lazy-loaded="true" style="display: block;">
                                                    <div class="caption scale-caption">
                                                        <a href="#"><h1>Steel Forgings</h1></a>
                                                        <!--<a href="#" >View details</a>--->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <div class="sheet-steel1 isotope-item" >
                                                <div class="tp-pic box image-scale">
                                                    <img  src="images/5.jpg" alt="project"   data-lazy-loaded="true" style="display: block;">
                                                    <div class="caption scale-caption">
                                                        <a href="#"><h1>Shipping Project</h1></a>
                                                        <!--<a href="#" >View details</a>--->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <div class="copper-base isotope-item" >
                                                <div class="tp-pic box image-scale">
                                                    <img  src="images/6.jpg"  alt="project-2"   data-lazy-loaded="true" style="display: block;">
                                                    <div class="caption scale-caption">
                                                        <a href="#"><h1>Copper Base</h1></a>
                                                        <!--<a href="#" >View details</a>--->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <div class="copper-base steel-forgings isotope-item">
                                                <div class="tp-pic box image-scale">
                                                    <img src="images/7.jpg"  alt="sheet-steel2"   data-lazy-loaded="true" style="display: block;">
                                                    <div class="caption scale-caption">
                                                        <a href="#"><h1>Food Service</h1></a>
                                                        <!--<a href="#" >View details</a>--->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <div class="rails rolled isotope-item">                                           
                                                <div class="tp-pic box image-scale">
                                                    <img src="images/8.jpg"  alt="steel-pipes"   data-lazy-loaded="true" style="display: block;">
                                                    <div class="caption scale-caption">
                                                        <a href="#"><h1>Steel Pipes</h1></a>
                                                        <!--<a href="#" >View details</a>--->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>


                                    <div id="menu1" class="tab-pane fade"></div>

                                    <div id="menu2" class="tab-pane fade">
                                        <div class="col-md-3 col-sm-4 col-xs-12">
                                            <div class="copper-base isotope-item" >
                                                <div class="tp-pic box image-scale">
                                                    <img  src="images/6.jpg"  alt="11"   data-lazy-loaded="true" style="display: block;">
                                                    <div class="caption scale-caption">
                                                        <a href="#"><h1>Copper Base</h1></a>
                                                        <!--<a href="#" >View details</a>--->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3 col-sm-4 col-xs-12">
                                            <div class="steel-forgings  isotope-item" >
                                                <div class="tp-pic box image-scale">
                                                    <img width="100%" src="images/7.jpg"  alt="s22"   data-lazy-loaded="true" style="display: block;">
                                                    <div class="caption scale-caption">
                                                        <a href="#"><h1>Food Service</h1></a>
                                                        <!--<a href="#" >View details</a>--->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div id="menu3" class="tab-pane fade"></div>

                                    <div id="menu4" class="tab-pane fade">
                                        <div class="col-md-3 col-sm-4 col-xs-12">
                                            <div class="copper-base  isotope-item" >
                                                <div class="tp-pic box image-scale">
                                                    <img  src="images/8.jpg"  alt="333"   data-lazy-loaded="true" style="display: block;">
                                                    <div class="caption scale-caption">
                                                        <a href="#"><h1>Steel Pipes</h1></a>
                                                        <!--<a href="#" >View details</a>--->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="menu5" class="tab-pane fade"> 
                                        <div class="col-md-3 col-sm-4 col-xs-12">
                                            <div class="rolled2 isotope-item" >
                                                <div class="tp-pic box image-scale">
                                                    <img width="100%" src="images/2.jpg"  alt="steel-pipes1"   data-lazy-loaded="true" style="display: block;">
                                                    <div class="caption scale-caption">
                                                        <a href="#"><h1>Plates</h1></a>
                                                        <!--<a href="#" >View details</a>--->
                                                    </div>
                                                </div>
                                            </div>    
                                        </div>
                                        <div class="col-md-3 col-sm-4 col-xs-12">
                                            <div class="rolled3 isotope-item" >
                                                <div class="tp-pic box image-scale">
                                                    <img width="100%" src="images/4.jpg"  alt="steel-plate1"   data-lazy-loaded="true" style="display: block;">
                                                    <div class="caption scale-caption">
                                                        <a href="#"><h1>Steel Forgings</h1></a>
                                                        <!--<a href="#" >View details</a>--->
                                                    </div>
                                                </div>
                                            </div> 
                                        </div>
                                        <div class="col-md-3 col-sm-4 col-xs-12">
                                            <div class="rails1 rolled isotope-item" >
                                                <div class="tp-pic box image-scale">
                                                    <img width="100%" src="images/8.jpg"  alt="steel-pipes"   data-lazy-loaded="true" style="display: block;">
                                                    <div class="caption scale-caption">
                                                        <a href="#"><h1>Steel Pipes</h1></a>
                                                        <!--<a href="#" >View details</a>--->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="menu6" class="tab-pane fade">
                                        <div class="col-md-3 col-sm-4 col-xs-12">
                                            <div class="sheet-steel2 isotope-item" >
                                                <div class=" box image-scale">
                                                    <img width="100%" src="images/1.jpg"  alt="rolled-steel1"  data-lazy-loaded="true" style="display: block;">
                                                    <div class="caption scale-caption">
                                                        <a href="#"><h1>Bars</h1></a>
                                                        <!--<a href="#" >View details</a>--->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-4 col-xs-12">
                                            <div class="sheet-steel3 isotope-item" >
                                                <div class="tp-pic box image-scale">
                                                    <img width="100%" src="images/5.jpg" alt="project"   data-lazy-loaded="true" style="display: block;">
                                                    <div class="caption scale-caption">
                                                        <a href="#"><h1>Shipping Project</h1></a>
                                                        <!--<a href="#" >View details</a>--->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="menu7" class="tab-pane fade">
                                        <div class="col-md-3 col-sm-4 col-xs-12">
                                            <div class="steel-forgings3 isotope-item" >
                                                <div class="tp-pic box image-scale">
                                                    <img width="100%" src="images/7.jpg"  alt="sheet-steel2"   data-lazy-loaded="true" style="display: block;">
                                                    <div class="caption scale-caption">
                                                        <a href="#"><h1>Food Service</h1></a>
                                                        <!--<a href="#" >View details</a>--->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="menu8" class="tab-pane fade">
                                        <div class="col-md-3 col-sm-4 col-xs-12">
                                            <div class="steel-pipes1 isotope-item" >
                                                <div class="tp-pic box image-scale">
                                                    <img width="100%" src="images/3.jpg"  alt="steel-rail"   data-lazy-loaded="true" style="display: block;">
                                                    <div class="caption scale-caption">
                                                        <a href="#"><h1>Steel Rails</h1></a>
                                                        <!--<a href="#" >View details</a>--->
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
        </div>

    </body>
</html>
