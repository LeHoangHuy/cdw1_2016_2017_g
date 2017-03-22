<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <title>Home – STEEL</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/836.less', 'css/836.css');
        ?>
        <link href="css/836.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </head>

    <body>

        <!-------Header-------->
        <div class="type_3_header">
            <div>
                <div id="tp-top-bar">

                    <div class=" col-sm-4">
                        <ul class="social-icon-ft ">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <div class=" col-sm-8">
                        <div class=" wpb_content_element text-right">
                            <ul class="links">
                                <li><a class="highlight" href="#">24/7 Support | +1 959 603 6035</a></li>
                                <li><a href="#">Helps</a></li>
                                <li><a href="#">FAQ’s</a></li>
                                <li><a href="#">Sitemap</a></li>
                                <li><a href="#">Change Location</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="vc_row header-row tp-navigations vc_custom_1437478756869">
                    <div class="sticky-wrapper">
                        <div class="header-row  stuck">
                            <div class="container">
                                <div class=" col-sm-3 col-md-2 col-xs-12">
                                    <div class=" vc_custom_1438140764928">
                                        <a class="navbar-brand logo">
                                            <img src="images/Steel-Product.png" alt="logo" data-lazy-loaded="true">
                                        </a>
                                    </div>
                                </div>
                                <div class=" col-sm-9 col-md-10 col-xs-12">
                                    <nav class="navbar navbar-default">
                                        <div class="container-fluid">
                                            <div class="navbar-header">
                                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="true">
                                                    <span>Toggle navigation</span>
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                </button>
                                            </div>
                                            <div class="navbar-collapse collapse in" aria-expanded="true">
                                                <ul id="menu-indus-v3" class="nav navbar-nav navbar-right">
                                                    <li class=" current-menu-item current_ menu-item-has-children parent-current-menu-item">
                                                        <a href="#" class=" dropdown-toggle">Home</a>
                                                        <a class="caret-click" data-toggle="dropdown"> <span class="caret"></span></a>
                                                        <ul class="dropdown-menu">
                                                            <li class="menu-item current-menu-item "><a href="#">Home</a>
                                                                <a class="caret-click"></a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="#">Home v2</a>
                                                                <a class="caret-click"></a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="#">Index Header Style 01</a>
                                                                <a class="caret-click"></a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="#">Index Header Style 02</a>
                                                                <a class="caret-click"></a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="#">Index Header Style 03</a>
                                                                <a class="caret-click"></a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class=" menu-item-has-children">
                                                        <a href="#" class=" dropdown-toggle">Company Profile</a>
                                                        <a class="caret-click" data-toggle="dropdown"> <span class="caret"></span></a>
                                                        <ul class="dropdown-menu">
                                                            <li class="menu-item">
                                                                <a href="#">About Us</a>
                                                                <a class="caret-click"></a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="#">About History</a>
                                                                <a class="caret-click"></a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="#">Mission</a>
                                                                <a class="caret-click"></a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="#">Board Member</a>
                                                                <a class="caret-click"></a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class=" menu-item-has-children">
                                                        <a href="#" class=" dropdown-toggle">Product</a>
                                                        <a class="caret-click" data-toggle="dropdown"> <span class="caret"></span></a>
                                                        <ul class="dropdown-menu">
                                                            <li class="menu-item">
                                                                <a href="#">Product</a>
                                                                <a class="caret-click"></a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class=" menu-item-has-children">
                                                        <a href="#" class=" dropdown-toggle">News</a>
                                                        <a class="caret-click" data-toggle="dropdown"> <span class="caret"></span></a>
                                                        <ul class="dropdown-menu">
                                                            <li class=" menu-item-has-children">
                                                                <a href="#" class=" dropdown-toggle">Blog List</a>
                                                                <a class="caret-click" data-toggle="dropdown"> <span class="caret"></span></a>
                                                                <ul class="dropdown-menu">
                                                                    <li class="menu-item">
                                                                        <a href="#">With Right Sidebar</a>
                                                                        <a class="caret-click"></a>
                                                                    </li>
                                                                    <li class="menu-item">
                                                                        <a href="#">With Left Sidebar</a>
                                                                        <a class="caret-click"></a>
                                                                    </li>
                                                                    <li class="menu-item">
                                                                        <a href="#">With No Sidebar</a>
                                                                        <a class="caret-click"></a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li class=" menu-item-has-children">
                                                                <a href="#" class=" dropdown-toggle">Single Layout</a>
                                                                <a class="caret-click" data-toggle="dropdown"> <span class="caret"></span></a>
                                                                <ul class="dropdown-menu">
                                                                    <li class="menu-item">
                                                                        <a href="#">No SideBar</a>
                                                                        <a class="caret-click"></a>
                                                                    </li>
                                                                    <li class="menu-item">
                                                                        <a href="#">With Left Sidebar</a>
                                                                        <a class="caret-click"></a>
                                                                    </li>
                                                                    <li class="menu-item">
                                                                        <a href="#">With Right Sidebar</a>
                                                                        <a class="caret-click"></a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li class=" menu-item-has-children">
                                                                <a href="#" class=" dropdown-toggle">Single Post</a>
                                                                <a class="caret-click" data-toggle="dropdown"> <span class="caret"></span></a>
                                                                <ul class="dropdown-menu">
                                                                    <li class="menu-item">
                                                                        <a href="#">Standard</a>
                                                                        <a class="caret-click"></a>
                                                                    </li>
                                                                    <li class="menu-item">
                                                                        <a href="#">Gallery</a>
                                                                        <a class="caret-click"></a>
                                                                    </li>
                                                                    <li class="menu-item">
                                                                        <a href="#">Video</a>
                                                                        <a class="caret-click"></a>
                                                                    </li>
                                                                    <li class="menu-item">
                                                                        <a href="#">Audio</a>
                                                                        <a class="caret-click"></a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class=" menu-item-has-children">
                                                        <a href="#" class=" dropdown-toggle">Page</a>
                                                        <a class="caret-click" data-toggle="dropdown"> <span class="caret"></span></a>
                                                        <ul class="dropdown-menu">
                                                            <li class="menu-item">
                                                                <a href="#">Customer Services</a>
                                                                <a class="caret-click"></a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="#">Error</a>
                                                                <a class="caret-click"></a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="#">Accordion</a>
                                                                <a class="caret-click"></a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="#">Request Quote</a>
                                                                <a class="caret-click"></a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="#">Alerts</a>
                                                                <a class="caret-click"></a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="#">Tables</a>
                                                                <a class="caret-click"></a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="#">Tabs</a>
                                                                <a class="caret-click"></a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="#">Faq</a>
                                                                <a class="caret-click"></a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class=" menu-item-has-children">
                                                        <a href="#" class=" dropdown-toggle">Service</a>
                                                        <a class="caret-click" data-toggle="dropdown"> <span class="caret"></span></a>
                                                        <ul class="dropdown-menu">
                                                            <li class="menu-item">
                                                                <a href="#">Service</a>
                                                                <a class="caret-click"></a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="#">Service Four</a>
                                                                <a class="caret-click"></a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="#">Service Three</a>
                                                                <a class="caret-click"></a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="#">Contact Us</a>
                                                        <a class="caret-click"></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </body>

</html>