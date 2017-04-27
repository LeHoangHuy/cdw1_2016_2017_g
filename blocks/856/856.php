<!DOCTYPE html>

<html>
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
        $less->compileFile('less/856.less', 'css/856.css');
        ?>
        <link href="css/856.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery.min.js" type="text/javascript"></script>

    </head>
    <body>
        <div class="type-856">
		<!-- BEGIN TYPE-856 -->
            <div class="container">
                <div class="row">
                    <!-- BEGIN BLOCK -->
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="block">
                            <div class="title">
                                <h1>Featured</h1>
                            </div>
                            <div class="border-title"></div>
                            <div class="border-title"></div>
                            <div class="items">
                                <div class="image col-md-5 col-sm-5 col-xs-5">
                                    <a href="#"><img src="images/1.jpg" alt=""/></a>
                                </div>
                                <div class="info col-md-7 col-sm-7 col-xs-7">
                                    <div class="name">
                                        <a href="#">Billionaire Boys</a>
                                    </div>
                                    <div class="price">
                                        <span>£20.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="border-title"></div>
                            <div class="items">
                                <div class="image col-md-5 col-sm-5 col-xs-5">
                                    <a href="#"><img src="images/2.jpg" alt=""/></a>
                                </div>
                                <div class="info col-md-7 col-sm-7 col-xs-7">
                                    <div class="name">
                                        <a href="#">Coolkids</a>
                                    </div>
                                    <div class="price">
                                        <span>£3.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="border-title"></div>
                            <div class="items">
                                <div class="image col-md-5 col-sm-5 col-xs-5">
                                    <a href="#"><img src="images/3.jpg" alt=""/></a>
                                </div>
                                <div class="info col-md-7 col-sm-7 col-xs-7">
                                    <div class="name">
                                        <a href="#">Dialog</a>
                                    </div>
                                    <div class="price">
                                        <span>£15.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <!-- END BLOCK -->
                    <!-- BEGIN BLOCK -->
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="block">
                            <div class="title">
                                <h1>New products</h1>
                            </div>
                            <div class="border-title"></div>
                            <div class="border-title"></div>
                            <div class="items">
                                <div class="image col-md-5 col-sm-5 col-xs-5">
                                    <a href="#"><img src="images/4.jpg" alt=""/></a>
                                </div>
                                <div class="info col-md-7 col-sm-7 col-xs-7">
                                    <div class="name">
                                        <a href="#">Butterfly</a>
                                    </div>
                                    <div class="price">
                                        <span>£18.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="border-title"></div>
                            <div class="items">
                                <div class="image col-md-5 col-sm-5 col-xs-5">
                                    <a href="#"><img src="images/5.jpg" alt=""/></a>
                                </div>
                                <div class="info col-md-7 col-sm-7 col-xs-7">
                                    <div class="name">
                                        <a href="#">Stonedetail</a>
                                    </div>
                                    <div class="price">
                                        <span>£20.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="border-title"></div>
                            <div class="items">
                                <div class="image col-md-5 col-sm-5 col-xs-5">
                                    <a href="#"><img src="images/6.jpg" alt=""/></a>
                                </div>
                                <div class="info col-md-7 col-sm-7 col-xs-7">
                                    <div class="name">
                                        <a href="#">Festival stone</a>
                                    </div>
                                    <div class="price">
                                        <span>£13.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <!-- END BLOCK -->
                    <!-- BEGIN BLOCK -->
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="block">
                            <div class="title">
                                <h1>On sale</h1>
                            </div>
                            <div class="border-title"></div>
                            <div class="border-title"></div>
                            <div class="items-sale">
                                <div class="image col-md-5 col-sm-5 col-xs-5">
                                    <a href="#"><img src="images/7.jpg" alt=""/></a>
                                </div>
                                <div class="info col-md-7 col-sm-7 col-xs-7">
                                    <div class="name">
                                        <a href="#">Cheap monday</a>
                                    </div>
                                    <div class="price">
                                        <span class="current-price">£20.00</span>
                                        <span class="old-price">£35.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="border-title"></div>
                            <div class="items-sale">
                                <div class="image col-md-5 col-sm-5 col-xs-5">
                                    <a href="#"><img src="images/8.jpg" alt=""/></a>
                                </div>
                                <div class="info col-md-7 col-sm-7 col-xs-7">
                                    <div class="name">
                                        <a href="#">Obilivion</a>
                                    </div>
                                    <div class="price">
                                        <span class="current-price">£18.00</span>
                                        <span class="old-price">£20.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="border-title"></div>
                            <div class="items-sale">
                                <div class="image col-md-5 col-sm-5 col-xs-5">
                                    <a href="#"><img src="images/9.jpg" alt=""/></a>
                                </div>
                                <div class="info col-md-7 col-sm-7 col-xs-7">
                                    <div class="name">
                                        <a href="#">Sweetheart</a>
                                    </div>
                                    <div class="price">
                                        <span class="current-price">£20.00</span>
                                        <span class="old-price">£35.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <!-- END BLOCK -->
                    <!-- BEGIN BLOCK -->
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="block">
                            <div class="title">
                                <h1>Top rated</h1>
                            </div>
                            <div class="border-title"></div>
                            <div class="border-title"></div>
                            <div class="items">
                                <div class="image col-md-5 col-sm-5 col-xs-5">
                                    <a href="#"><img src="images/10.jpg" alt=""/></a>
                                </div>
                                <div class="info col-md-7 col-sm-7 col-xs-7">
                                    <div class="name">
                                        <a href="#">Paul smith</a>
                                    </div>
                                    <div class="price">
                                        <span>£45.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="border-title"></div>
                            <div class="items">
                                <div class="image col-md-5 col-sm-5 col-xs-5">
                                    <a href="#"><img src="images/11.jpg" alt=""/></a>
                                </div>
                                <div class="info col-md-7 col-sm-7 col-xs-7">
                                    <div class="name">
                                        <a href="#">Spitfire</a>
                                    </div>
                                    <div class="price">
                                        <span>£35.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="border-title"></div>
                            <div class="items">
                                <div class="image col-md-5 col-sm-5 col-xs-5">
                                    <a href="#"><img src="images/12.jpg" alt=""/></a>
                                </div>
                                <div class="info col-md-7 col-sm-7 col-xs-7">
                                    <div class="name">
                                        <a href="#">Leather one</a>
                                    </div>
                                    <div class="price">
                                        <span>£35.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <!-- END BLOCK -->
                </div>
            </div>
        </div>
		<!-- END TYPE-856 -->
    </div>
</body>


</html>