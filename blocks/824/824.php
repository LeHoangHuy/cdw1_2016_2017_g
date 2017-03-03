<!DOCTYPE html>

<html style="background-color: #f3f3f4;">

    <head>
        <title></title>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
          <link href ="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
          <link href="css/824.css" rel="stylesheet" type="text/css" />
          <!-- <link href="css/abc.css" rel="stylesheet" type="text/css" /> -->

          <script src="js/jquery-2.1.4.min.js"></script>
          <script src="js/bootstrap.min.js"></script>
          <script src="js/javascript.js" type="text/javascript"></script>

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/824.less', 'css/824.css');
        ?>
        <script>
            
        </script>
        
    </head>
    <body>
        <div class="header">
            <header id="lms_header">
                <div class="lms_header_top">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="lms_any_que_wrapper">
                                    <p>Have any question?</p>
                                    <div class="lms_mobile">
                                        <i class="fa fa-phone"></i>
                                        <span >(00) 123 456 789</span>
                                    </div>
                                    <div class="lms_email"><i class="fa fa-envelope"></i>
                                        <a href="#">info@lms.com</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="lms_login_wrapper">
                                    <ul>
                                        <li> <a href="#" title="Register">Register </a></li>  
                                        <li> <a href="#" title="Register">Login </a></li>                             
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="container"> -->
                <div class="container logo_container">
                    <h1 class="logo"> 
                        <a> <img alt="Porto" data-sticky-width="82" data-sticky-height="40" src="images/logo.png"> </a>
                    </h1>
                    <button class="lms_menu_toggle" data-toggle="collapse" data-target=".nav-main-collapse"><i class="fa fa-bars"></i></button> 

                </div>

                <!-- </div> -->
                <div class="navbar-collapse nav-main-collapse collapse navigation_menu">
                    <div class="container mega_menu_container">
                        <nav class="nav-main mega-menu">
                            <ul id="mainMenu" class="nav nav-pills nav-main">
                                <li class="dropdown main_item main_item_click">
                                    <a href="#" class="dropdown-toggle par_dropdown_toggle">Home</a>
                                </li>
                                <li class="dropdown main_item mega_menu_item main_item_click">
                                    <a href="#" class="dropdown-toggle par_dropdown_toggle active">Courses</a>
                                </li>
                                <li class="dropdown main_item  main_item_click">
                                    <a href="#" class="dropdown-toggle par_dropdown_toggle">Element</a>
                                </li>
                                <li class="dropdown main_item main_item_click">
                                    <a href="#" class="dropdown-toggle par_dropdown_toggle">Blog</a>
                                </li>
                                <li class="dropdown main_item main_item_click">
                                    <a href="#" class="dropdown-toggle par_dropdown_toggle">Pages</a>
                                </li>
                                <li class="dropdown main_item">
                                    <a href="#" class="dropdown-toggle par_dropdown_toggle">About</a>
                                </li>
                                <li class="dropdown main_item">
                                    <a href="#" class="dropdown-toggle par_dropdown_toggle">Contact Us</a>
                                </li>
                            </ul>

                        </nav>
                        <div class="lms_search_toggle" onclick="openSearch()" >
                            <a class="fa fa-search"></a>
                        </div>
                        <div class="lms_search_wrapper" id="my_search_box" style="display: none"> 
                            <form method="get" action="#">
                                <input type="search" value="" placeholder="Search..." name="s" id="cs" class="form-control">
                            </form> 
                        </div>
                    </div>
                </div>
                <div style="clear: both;"></div>
            </header>

            <div class="lms_page_title">
                <div class="lms_page_title_bg" data-stellar-vertical-offset="-150" data-stellar-background-ratio="" style="">
                    <div class="lms_page_title_bg_overlay">
                        <div class="container">
                            <div class="lms_title">Fundamentals of Project Management</div>
                            <div class="pull-right">
                                <ol class="breadcrumb">
                                    <li><a>Home</a></li>
                                    <li><a>lp_course</a></li>
                                    <li>Fundamentals of Project Management</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </body>

</html>