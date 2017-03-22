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
        $less->compileFile('less/styles.less', 'css/styles.css');
        $less->compileFile('less/type-1-menu.less', 'css/type-1-menu.css');
        ?>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">

        <link rel="stylesheet" href="css/styles.css">   
        <link rel="stylesheet" href="css/type-1-menu.css">   

        <script src="js/jquery-1.11.0.min.js"></script>
        <script src="js/bootstrap.min.js"></script> 
    </head>
    <body>
        <div class="zaro-menu">
            <div id="pattent" class="slidelip white-background">  
                <div class="container container-modify margin-auto header">
                    <!--MEGA MENU-->
                    <div class="menu-container">

                        <div class="mega-menu">
                            <div class="mobileMenuTitle">Menu</div>
                            <ul class="mega-menu-ul">
                                <li class="dropdown dropdown2 mega-dropdown mega-menu-item hasChildren">
                                    <a href="list" class="menu-item dropdown-toggle">
                                        <span>Women</span> 
                                    </a>	
                                    <span  class="opener"></span>
                                    <div class="margin-auto dropdown-menu mega-dropdown-menu" >
                                        <div class="col-md-3 col-sm-3 col-xs-3 mobile-hide">
                                            <ul class="first-item">
                                                <li class="dropdown-header">Men Collection</li>  
                                                <div class="item active">
                                                    <a href="#">
                                                        <img src="images/menu/dress-anna-sui-ambrosia-lace.jpg" class="img-responsive" alt="product 1">
                                                    </a> 
                                                </div>

                                                <li class="divider"></li>
                                                <li>
                                                    <a href="#">Dress Anna Sui....</a>
                                                    <span class="price">$309.00</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-9 col-sm-9 col-xs-9 full-width-mn">
                                            <ul class="full-width women" >
                                                <li class="col-md-4 col-sm-4 col-xs-4">
                                                    <ul>
                                                        <li class="dropdown-header">Features</li>
                                                        <li><a href="#">Auto Carousel</a></li>
                                                        <li><a href="#">Carousel Control</a></li>
                                                        <li><a href="#">Left & Right Navigation</a></li>
                                                        <li><a href="#">Four Columns Grid</a></li>
                                                        <li class="divider"></li> 
                                                    </ul>
                                                </li>
                                                <li class="col-md-4 col-sm-4  col-xs-4">
                                                    <ul>
                                                        <li class="dropdown-header">Plus</li>
                                                        <li><a href="#">Navbar Inverse</a></li>
                                                        <li><a href="#">Pull Right Elements</a></li>
                                                        <li><a href="#">Coloured Headers</a></li>                            
                                                        <li><a href="#">Primary Buttons & Default</a></li>							
                                                    </ul>
                                                </li>
                                                <li class="col-md-4 col-sm-4 col-xs-4">
                                                    <ul>
                                                        <li class="dropdown-header">Much more</li>
                                                        <li><a href="#">Easy to Customize</a></li>
                                                        <li><a href="#">Calls to action</a></li>
                                                        <li><a href="#">Custom Fonts</a></li>
                                                        <li><a href="#">Slide down on Hover</a></li>                         
                                                    </ul>
                                                </li>
                                                <li class="col-md-4 col-sm-4 col-xs-4">
                                                    <ul>
                                                        <li class="dropdown-header">Much more</li>
                                                        <li><a href="#">Easy to Customize</a></li>
                                                        <li><a href="#">Calls to action</a></li>
                                                        <li><a href="#">Custom Fonts</a></li>
                                                        <li><a href="#">Slide down on Hover</a></li>                         
                                                    </ul>
                                                </li> 
                                            </ul>
                                        </div>
                                        <div class="col-md-9 col-sm-12  col-xs-12 mobile-hide clearfix">
                                            <a>
                                                <img src="images/menu/banner-bottom.jpg" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>	
                                </li>
                                <li class="dropdown dropdown2 mega-dropdown mega-menu-item">
                                    <a href="#" class="menu-item dropdown-toggle" data-toggle="dropdown">
                                        <span>Men</span>
                                    </a>				
                                    <span  class="opener"></span>
                                    <div class="container margin-auto dropdown-menu mega-dropdown-menu" >
                                        <div class="col-md-3 col-sm-3 col-xs-3 mobile-hide">
                                            <div class="box-img-left">
                                                <a href="#" class="banner-left">
                                                    <img src="images/menu/banner-left.jpg" class="img-responsive" alt="product 1">
                                                </a>   
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6 full-width-mn">
                                            <ul class="full-width men">
                                                <li class="col-md-6 col-sm-6 col-xs-6">
                                                    <ul>
                                                        <li class="dropdown-header">Features</li>
                                                        <li><a href="#">Auto Carousel</a></li>
                                                        <li><a href="#">Carousel Control</a></li>
                                                        <li><a href="#">Left & Right Navigation</a></li>
                                                        <li><a href="#">Four Columns Grid</a></li>
                                                        <li class="divider"></li> 
                                                    </ul>
                                                </li>
                                                <li class="col-md-6 col-sm-6 col-xs-6">
                                                    <ul>
                                                        <li class="dropdown-header">Plus</li>
                                                        <li><a href="#">Navbar Inverse</a></li>
                                                        <li><a href="#">Pull Right Elements</a></li>
                                                        <li><a href="#">Coloured Headers</a></li>                            
                                                        <li><a href="#">Primary Buttons & Default</a></li>							
                                                    </ul>
                                                </li>
                                                <li class="col-md-6 col-sm-6 col-xs-6">
                                                    <ul>
                                                        <li class="dropdown-header">Features</li>
                                                        <li><a href="#">Auto Carousel</a></li>
                                                        <li><a href="#">Carousel Control</a></li>
                                                        <li><a href="#">Left & Right Navigation</a></li>
                                                        <li><a href="#">Four Columns Grid</a></li>
                                                        <li class="divider"></li> 
                                                    </ul>
                                                </li>
                                                <li class="col-md-6 col-sm-6 col-xs-6">
                                                    <ul>
                                                        <li class="dropdown-header">Plus</li>
                                                        <li><a href="#">Navbar Inverse</a></li>
                                                        <li><a href="#">Pull Right Elements</a></li>
                                                        <li><a href="#">Coloured Headers</a></li>                            
                                                        <li><a href="#">Primary Buttons & Default</a></li>							
                                                    </ul>
                                                </li>

                                            </ul>
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-3 mobile-hide">
                                            <ul class="item-men-right">
                                                <li class="dropdown-header">Men Collection</li>  
                                                <a href="#" class="banner-right">
                                                    <img src="images/menu/dress-anna-sui-ambrosia-lace.jpg" class="img-responsive" alt="product 1">
                                                </a> 
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="#">View all Collection 

                                                    </a >
                                                </li>
                                            </ul>
                                        </div>
                                    </div>	
                                </li>

                                <li class="dropdown dropdown2 mega-dropdown mega-menu-item">
                                    <a href="blog" class="menu-item">
                                        <span>Blog</span>

                                    </a> 
                                    <span  class="opener"></span>
                                </li>
                                <li class="dropdown dropdown2 mega-dropdown mega-menu-item">
                                    <a href="#"class="menu-item">
                                        <span>About Us</span>
                                    </a>
                                    <span  class="opener"></span>

                                    <div class="container margin-auto dropdown-menu mega-dropdown-menu" >
                                        <div class="align-center full-width">
                                            <h2>Alysum -  is the universal theme, with the pleasant and clean design.</h2>
                                            <p>With this theme you can easily create your unique shop, choosing any colors & over 500 Google fonts. </p>
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-3 full-width-mn clearfix align-center">
                                            <img src="images/menu/mic01.png">
                                            <h4>Responsive design</h4>
                                            <p> Alysum 100% responsive and supports all&nbsp;devices from desktop to small cell phones.</p>
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-3 full-width-mn align-center">
                                            <img src="images/menu/mic02.png">
                                            <h4>Responsive design</h4>
                                            <p> Alysum 100% responsive and supports all&nbsp;devices from desktop to small cell phones.</p>
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-3 full-width-mn align-center">
                                            <img src="images/menu/mic03.png">
                                            <h4>Responsive design</h4>
                                            <p> Alysum 100% responsive and supports all&nbsp;devices from desktop to small cell phones.</p>
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-3 full-width-mn align-center">
                                            <img src="images/menu/mic04.png">
                                            <h4>Responsive design</h4>
                                            <p> Alysum 100% responsive and supports all&nbsp;devices from desktop to small cell phones.</p>
                                        </div>

                                    </div>

                                </li>

                                <li class="dropdown dropdown2 mega-dropdown mega-menu-item">
                                    <a href="#"class="menu-item">
                                        <span>Brands</span>
                                    </a>
                                    <span  class="opener"></span>
                                    <ul class="container margin-auto dropdown-menu mega-dropdown-menu" >
                                        <li class="col-md-2 col-sm-2 brand">
                                            <img src="images/menu/1-manu_alysum.jpg" class="img-responsive">
                                        </li> 
                                        <li class="col-md-2 col-sm-2 brand">
                                            <img src="images/menu/1-manu_alysum.jpg" class="img-responsive">
                                        </li> 
                                        <li class="col-md-2 col-sm-2 brand">
                                            <img src="images/menu/1-manu_alysum.jpg" class="img-responsive">
                                        </li> 
                                        <li class="col-md-2 col-sm-2 brand">
                                            <img src="images/menu/1-manu_alysum.jpg" class="img-responsive">
                                        </li>  
                                        <li class="col-md-2 col-sm-2 brand">
                                            <img src="images/menu/1-manu_alysum.jpg" class="img-responsive">
                                        </li> 
                                        <li class="col-md-2 col-sm-2 brand">
                                            <img src="images/menu/1-manu_alysum.jpg" class="img-responsive">
                                        </li> 
                                        <li class="col-md-2 col-sm-2 brand">
                                            <img src="images/menu/1-manu_alysum.jpg" class="img-responsive">
                                        </li> 
                                        <li class="col-md-2 col-sm-2 brand">
                                            <img src="images/menu/1-manu_alysum.jpg" class="img-responsive">
                                        </li> 
                                        <li class="col-md-2 col-sm-2 brand">
                                            <img src="images/menu/1-manu_alysum.jpg" class="img-responsive">
                                        </li> 
                                        <li class="col-md-2 col-sm-2 brand">
                                            <img src="images/menu/1-manu_alysum.jpg" class="img-responsive">
                                        </li> 
                                        <li class="col-md-2 col-sm-2 brand">
                                            <img src="images/menu/1-manu_alysum.jpg" class="img-responsive">
                                        </li> 
                                        <li class="col-md-2 col-sm-2 brand">
                                            <img src="images/menu/1-manu_alysum.jpg" class="img-responsive">
                                        </li> 
                                    </ul>	
                                </li>

                                <li class="dropdown dropdown2 mega-dropdown mega-menu-item">
                                    <a href="#"class="menu-item">
                                        <span>Demos</span>
                                    </a>
                                    <span  class="opener"></span>
                                    <ul class="dropdown-menu mega-dropdown-menu demos" >
                                        <li>Demo 01 - Alysum</li>
                                        <li>Demo 01 - Alysum</li>
                                        <li>Demo 01 - Alysum</li>
                                        <li>Demo 01 - Alysum</li>
                                        <li>Demo 01 - Alysum</li>
                                        <li>Demo 01 - Alysum</li>
                                        <li>Demo 01 - Alysum</li>
                                    </ul>
                                </li>
                            </ul> 

                        </div><!-- /.nav-collapse -->

                    </div>
                </div>
            </div>
        </div> 
    </body>

    <script>
        $(document).ready(function () {
            //  DROPDOWN
            if ($(window).width() > 728) {
                $(".dropdown2").hover(
                        function () {
                            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).fadeIn("600");
                            $(this).toggleClass('open');
                        },
                        function () {
                            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).fadeOut("600");
                            $(this).toggleClass('open');
                        }
                );
            }
            if ($(window).width() < 728) {
                var i = 0;
                $(".dropdown2", this).click(function () {
                    if (i % 2 !== 0) {
                        $('span.opener', this).removeClass("close");
                        $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).fadeOut("600");
                        $(this).toggleClass('open');
                    } else {
                        $('span.opener', this).addClass("close").css({'font-size': '28px', 'color': '#009900', 'opacity': '1'});
                        $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).fadeIn("600");
                        $(this).toggleClass('open');
                    }
                    i++;

                });
            }
        });

    </script>
</html>