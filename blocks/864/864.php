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
        $less->compileFile('less/864.less', 'css/864.css');
        ?>
        <link href="css/864.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div class="type-864">
            <div id="topheader">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <na>
                                <li>
                                    <a href="#">Login</a> or <a href="#">Register</a>
                                    <span>|</span> <span>September 28, 2016</span>
                                </li>
                            </na>
                        </div>
                        <div class="col-md-6">                       
                            <ul>
                                <li><a href="#">WISHLIST</a> |</li>
                                <li><a href="#">STORE</a> |</li>
                                <li><a href="#">MY ACCOUNT</a> |</li>
                                <li class="dropdown-toggle show-on-hover" data-toggle="dropdown"><a href="">ENGLISH</a>
                                    <ul  class="dropdown-menu">
                                        <li><a href="">Vietnamese &nbsp;</a></li>
                                        <li><a href="">Demo &nbsp;</a></li>
                                        <li><a href="">Portugues &nbsp;</a></li>
                                    </ul>
                                </li> 
                            </ul>                                       
                        </div>
                    </div>
                </div>
            </div>
            <!-- navbar -->
            <nav class="navbar navbar-inverse navbar-default affix" data-spy="affix" data-offset-top="50">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="brand" style="margin: 0; float: none;" href="#">
                            <img width="100px" class="img-responsive" src="img/logo.png" /></a>
                    </div>
                    <div class="navbar-header">                        
                        <a class="brand" style="margin: 0; float: none;" href="#">
                            <img width="100px" class="img-responsive" src="img/logo.png" /></a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="#">HOME</a></li>
                            <li class="dropdown mega-dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">SHOP</a>				
                                <ul class="dropdown-menu mega-dropdown-menu">
                                    <li class="col-sm-2">
                                        <ul>
                                            <li><img class="img-responsive" src="img/uploads/2014/12/four.png"</li>
                                            <li class="dropdown-header">SHOP VARIANTS</li>
                                            <li><a href="#">Shop Full Width</a></li>
                                            <li><a href="#">Shop Sidebar Right</a></li>
                                            <li><a href="#">Shop Sidebar Left</a></li>
                                            <li><a href="#">Category Listing</a></li>
                                        </ul>
                                    </li>
                                    <li class="col-sm-2">
                                        <ul
                                            <li><img class="img-responsive" src="img/uploads/2014/12/three.png"</li>
                                            <li class="dropdown-header">Plus</li>
                                            <li><a href="#">Navbar Inverse</a></li>
                                            <li><a href="#">Pull Right Elements</a></li>
                                            <li><a href="#">Coloured Headers</a></li>                            
                                            <li><a href="#">Primary Buttons & Default</a></li>							
                                        </ul>
                                    </li>
                                    <li class="col-sm-2">
                                        <ul>
                                            <li><img class="img-responsive" src="img/uploads/2014/12/two.png"</li>
                                            <li class="dropdown-header">Much more</li>
                                            <li><a href="#">Easy to Customize</a></li>
                                            <li><a href="#">Calls to action</a></li>
                                            <li><a href="#">Custom Fonts</a></li>
                                            <li><a href="#">Slide down on Hover</a></li>                         
                                        </ul>
                                    </li>
                                    <li class="col-sm-2">
                                        <ul>
                                            <li><img class="img-responsive" src="img/uploads/2014/12/one.png"</li>
                                            <li class="dropdown-header">Much more</li>
                                            <li><a href="#">Easy to Customize</a></li>
                                            <li><a href="#">Calls to action</a></li>
                                            <li><a href="#">Custom Fonts</a></li>
                                            <li><a href="#">Slide down on Hover</a></li>                         
                                        </ul>
                                    </li>
                                    <li class="col-sm-2">
                                        <ul>
                                            <li><a href="#"><img class="img-responsive" src="img/blackfriday.png"></a></li>
                                        </ul>
                                    </li>
                                </ul>				
                            </li>
                            <li><a href="#page">PAGES</a>
                            </li>
                            <li><a href="#blogs">BLOGS</a></li>
                            <li><a href="#shortcodes">SHORTCODES</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href=""><i style="font-size:24px" class="fa fa-search"></i></a></li>
                            <li><a href=""><i style="font-size:24px" class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                </div>
            </nav>  
        </div>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/scripts.js"></script>
    </div>
</body>
</html>