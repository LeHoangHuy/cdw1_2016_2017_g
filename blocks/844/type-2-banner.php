<!DOCTYPE html>
<html>

    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php
        if (!class_exists('lessc')) {
            include ('libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/type-2-banner.less', 'css/type-2-banner.css');
        ?>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">

        <script src="js/jquery-1.11.0.min.js"></script>
        <script src="js/bootstrap.min.js"></script> 
        <link rel="stylesheet" href="css/type-2-banner.css">
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <div id="pattent" class="slidelip white-background"> 
            <div class="container container-modify margin-auto header">
                <div class="banner-alysum"> 
                    <div class="col-md-6 col-sm-12 col-xs-12 margin-padding">

                        <div id="wowslider-container1">
                            <div class="ws_images"><ul>
                                    <li>
                                        <img src="images/banner/promo01-44-04.jpg" alt="" title="" id="wows1_0"/>
                                        <div class="button_container smooth02 item_0">
                                            <a href="#" class="button_small smooth02 lmromancaps dib">View</a>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="images/banner/promo02-44-30.jpg" alt="full screen slider" title="" id="wows1_1"/>
                                        <div class="button_container smooth02 item_1">
                                            <a href="#" class="button_small smooth02 lmromancaps dib">View</a>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="images/banner/promo03-44-44.jpg" alt="" title="" id="wows1_2"/>
                                        <div class="button_container smooth02 item_2">
                                            <a href="#" class="button_small smooth02 lmromancaps dib">View</a>
                                        </div>
                                    </li>
                                </ul></div>
                            <div class="ws_bullets"><div>
                                    <a href="#" title="">1</a>
                                    <a href="#" title="">2</a>
                                    <a href="#" title="">3</a>
                                </div></div><span class="wsl"><a href="#"></a></span>
                            <div class="ws_shadow"></div>
                        </div>	


                    </div>

                    <div class="col-md-6 col-sm-12 col-xs-12  margin-padding">
                        <div class="promo_section">
                            <ul class="products clearfix">
                                <li class="col-md-6 col-sm-6 col-xs-6 smooth02 top_item">
                                    <div class="promoborder">
                                        <div class="indent">
                                            <a href="#" class="imgLink"> <img src="images/banner/banner_1.jpg" alt="" title="Dress Proenza Schouler Desire Me"> </a>
                                            <div class="productInfo smooth02 ">
                                                <div class="wrap"></div>
                                                <div class="info smooth02">
                                                    <div class="clearfix"> <span class="manufacturer_name trajan ellipsis">Nicole Miller</span> <span class="reduction dib trajan"> -26% </span> <span class="name ellipsis">Dress Proenza Schouler Desi...</span> <a class="button lmromandemi" href="#">Buy now!</a></div>
                                                </div>
                                            </div>
                                            <div class="price_with_reduction smooth02 trajan"> <span class="now trajan">Now</span> <span class="price lmromandunh"> $577.20 </span> <a class="button lmromandemi" href="#">Buy now!</a></div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-sm-6 col-xs-6 smooth02 top_item">
                                    <div class="promoborder">
                                        <div class="indent">
                                            <a href="#" class="imgLink"> <img src="images/banner/banner_2.jpg" alt="" title="Dress Proenza Schouler Desire Me"> </a>
                                            <div class="productInfo smooth02 ">
                                                <div class="wrap"></div>
                                                <div class="info smooth02">
                                                    <div class="clearfix"> <span class="manufacturer_name trajan ellipsis">Nicole Miller</span> <span class="reduction dib trajan"> -26% </span> <span class="name ellipsis">Dress Proenza Schouler Desi...</span> <a class="button lmromandemi" href="#">Buy now!</a></div>
                                                </div>
                                            </div>
                                            <div class="price_with_reduction smooth02 trajan"> <span class="now trajan">Now</span> <span class="price lmromandunh"> $577.20 </span> <a class="button lmromandemi" href="#">Buy now!</a></div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-sm-6 col-xs-6 smooth02 top_item">
                                    <div class="promoborder">
                                        <div class="indent">
                                            <a href="#" class="imgLink"> <img src="images/banner/banner_3.jpg" alt="" title="Dress Proenza Schouler Desire Me"> </a>
                                            <div class="productInfo smooth02 ">
                                                <div class="wrap"></div>
                                                <div class="info smooth02">
                                                    <div class="clearfix"> <span class="manufacturer_name trajan ellipsis">Nicole Miller</span> <span class="reduction dib trajan"> -26% </span> <span class="name ellipsis">Dress Proenza Schouler Desi...</span> <a class="button lmromandemi" href="#">Buy now!</a></div>
                                                </div>
                                            </div>
                                            <div class="price_with_reduction smooth02 trajan"> 
                                                <span class="now trajan">Now</span> 
                                                <span class="price lmromandunh"> $577.20 </span>
                                                <a class="button lmromandemi" href="#">Buy now!</a></div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-sm-6 col-xs-6 smooth02 top_item">
                                    <div class="promoborder">
                                        <div class="indent">
                                            <a href="#" class="imgLink"> <img src="images/banner/banner_4.jpg" alt="" title="Dress Proenza Schouler Desire Me"> </a>
                                            <div class="productInfo smooth02 ">
                                                <div class="wrap"></div>
                                                <div class="info smooth02">
                                                    <div class="clearfix"> <span class="manufacturer_name trajan ellipsis">Nicole Miller</span> <span class="reduction dib trajan"> -26% </span> <span class="name ellipsis">Dress Proenza Schouler Desi...</span> <a class="button lmromandemi" href="#">Buy now!</a></div>
                                                </div>
                                            </div>
                                            <div class="price_with_reduction smooth02 trajan"> <span class="now trajan">Now</span> <span class="price lmromandunh"> $577.20 </span> <a class="button lmromandemi" href="#">Buy now!</a></div>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div> 

                </div>
            </div>
        </div> 

        <script src="js/wowslider.js" type="text/javascript"></script>
        <script src="js/slide-wow.js" type="text/javascript"></script>
    </body> 


</html>