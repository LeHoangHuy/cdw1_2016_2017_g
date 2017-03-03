<!DOCTYPE html>

<html style="background-color: #f3f3f4;">

    <head>
        <title></title>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
          <link href ="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
          <link href="css/header.css" rel="stylesheet" type="text/css" />
          <!-- <link href="css/abc.css" rel="stylesheet" type="text/css" /> -->

          <script src="js/jquery-2.1.4.min.js"></script>
          <script src="js/bootstrap.min.js"></script>
          <script src="js/javascript.js" type="text/javascript"></script>

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/header.less', 'css/header.css');
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
                                            <li>
                                                <a href="#" title="Register">Register </a>                               
                                            </li>
                                            <li>
                                                 <a href="#" title="Login">Login</a>
                                            </li>
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
                         <button class="lms_menu_toggle" data-toggle="collapse" data-target=".nav-main-collapse"><i class="fa fa-bars"></i> 
                        </button>   
                        </div>
                        
                    <!-- </div> -->
                    <div class="navbar-collapse nav-main-collapse collapse navigation_menu">
                        <div class="container mega_menu_container">
                            <nav class="nav-main mega-menu">
                                <ul id="mainMenu" class="nav nav-pills nav-main">
                                   <li class="dropdown main_item main_item_click">
                                        <a href="#" class="dropdown-toggle par_dropdown_toggle">Home</a>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown-submenu">
                                                <a >Sliders</a>
                                                <ul class="dropdown-menu" style="margin-left: 0px;">
                                                    <li class="menu-item">
                                                        <a class="dropdown-toggle">Revolution Slider</a>
                                                    </li>       
                                                    <li class="menu-item">
                                                        <a class="dropdown-toggle">Simple Slider</a>
                                                    </li>    
                                                </ul>
                                             </li>   
                                             <li  class="menu-item">
                                                 <a class="dropdown-toggle">Home – Video</a>
                                             </li> 
                                             <li  class="menu-item ">
                                                 <a class="dropdown-toggle">Home – Version 1</a>
                                             </li> 
                                             <li  class="menu-item">
                                                 <a class="dropdown-toggle">Home – Version 2</a>
                                             </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown main_item mega_menu_item main_item_click">
                                        <a href="#" class="dropdown-toggle par_dropdown_toggle active">Courses</a>
                                        <ul class="dropdown-menu">
                                          <li>
                                              <div class="mega-menu-content">
                                                  <div class="row">
                                                      <div class="col-md-2">
                                                            <ul class="sub-menu">
                                                              <li>
                                                                <span class="mega-menu-sub-title">Courses</span>
                                                                  <ul class="sub-menu">
                                                                    <li class="menu-item">
                                                                        <a class="dropdown-toggle">Courses Page</a>
                                                                    </li> 
                                                                    <li class="menu-item">
                                                                        <a class="dropdown-toggle">Course Right</a>
                                                                    </li> 
                                                                    <li class="menu-item">
                                                                        <a class="dropdown-toggle">Course Left</a>
                                                                    </li> 
                                                                    <li class="menu-item">
                                                                        <a class="dropdown-toggle">Course Category</a>
                                                                    </li> 
                                                                    <li class="menu-item">
                                                                        <a class="dropdown-toggle">Free Course</a>
                                                                    </li> 
                                                                  </ul>
                                                              </li> 
                                                          </ul>
                                                      </div>
                                                      <div class="col-md-2">
                                                            <ul class="sub-menu">
                                                              <li>
                                                                <span class="mega-menu-sub-title">Courses</span>
                                                                  <ul class="sub-menu">
                                                                    <li class="menu-item">
                                                                        <a class="dropdown-toggle">Courses Page</a>
                                                                    </li> 
                                                                    <li class="menu-item">
                                                                        <a class="dropdown-toggle">Course Right</a>
                                                                    </li> 
                                                                    <li class="menu-item">
                                                                        <a class="dropdown-toggle">Course Left</a>
                                                                    </li> 
                                                                    <li class="menu-item">
                                                                        <a class="dropdown-toggle">Course Category</a>
                                                                    </li> 
                                                                    <li class="menu-item">
                                                                        <a class="dropdown-toggle">Free Course</a>
                                                                    </li> 
                                                                     <li class="menu-item">
                                                                        <a class="dropdown-toggle">Free Course</a>
                                                                    </li> 
                                                                  </ul>
                                                              </li> 
                                                          </ul>
                                                      </div>
                                                      <div class="col-md-2">
                                                            <ul class="sub-menu">
                                                              <li>
                                                                <span class="mega-menu-sub-title">Courses</span>
                                                                  <ul class="sub-menu">
                                                                    <li class="menu-item">
                                                                        <a class="dropdown-toggle">Courses Page</a>
                                                                    </li> 
                                                                    <li class="menu-item">
                                                                        <a class="dropdown-toggle">Course Right</a>
                                                                    </li> 
                                                                    <li class="menu-item">
                                                                        <a class="dropdown-toggle">Course Left</a>
                                                                    </li> 
                                                                    <li class="menu-item">
                                                                        <a class="dropdown-toggle">Course Category</a>
                                                                    </li> 
                                                                    <li class="menu-item">
                                                                        <a class="dropdown-toggle">Free Course</a>
                                                                    </li> 
                                                                    <li class="menu-item">
                                                                        <a class="dropdown-toggle">Free Course</a>
                                                                    </li> 
                                                                  </ul>
                                                              </li> 
                                                          </ul>
                                                      </div>
                                                      <div class="col-md-2">
                                                            <ul class="sub-menu">
                                                              <li>
                                                                <span class="mega-menu-sub-title">Courses</span>
                                                                  <ul class="sub-menu">
                                                                    <li class="menu-item">
                                                                        <a class="dropdown-toggle">Courses Page</a>
                                                                    </li> 
                                                                    <li class="menu-item">
                                                                        <a class="dropdown-toggle">Course Right</a>
                                                                    </li> 
                                                                    <li class="menu-item">
                                                                        <a class="dropdown-toggle">Course Left</a>
                                                                    </li> 
                                                                  </ul>
                                                              </li> 
                                                          </ul>
                                                      </div>
                                                      <div class="col-md-2">
                                                            <ul class="sub-menu">
                                                              <li>
                                                                <span class="mega-menu-sub-title">Courses</span>
                                                                  <ul class="sub-menu">
                                                                    <li class="menu-item">
                                                                        <a class="dropdown-toggle">Courses Page</a>
                                                                    </li> 
                                                                    <li class="menu-item">
                                                                        <a class="dropdown-toggle">Course Right</a>
                                                                    </li> 
                                                                    <li class="menu-item">
                                                                        <a class="dropdown-toggle">Course Left</a>
                                                                    </li> 
                                                                    <li class="menu-item">
                                                                        <a class="dropdown-toggle">Course Category</a>
                                                                    </li> 
                                                                    <li class="menu-item">
                                                                        <a class="dropdown-toggle">Free Course</a>
                                                                    </li> 
                                                                    <li class="menu-item">
                                                                        <a class="dropdown-toggle">Free Course</a>
                                                                    </li>
                                                                     <li class="menu-item">
                                                                        <a class="dropdown-toggle">Free Course</a>
                                                                    </li>
                                                                     <li class="menu-item">
                                                                        <a class="dropdown-toggle">Free Course</a>
                                                                    </li>

                                                                  </ul>
                                                              </li> 
                                                          </ul>
                                                      </div>
                                                      <div class="col-md-2">
                                                            <ul class="sub-menu">
                                                              <li>
                                                                <span class="mega-menu-sub-title">Courses</span>
                                                                  <ul class="sub-menu">
                                                                    <li class="menu-item">
                                                                        <a class="dropdown-toggle">Courses Page</a>
                                                                    </li> 
                                                                    <li class="menu-item">
                                                                        <a class="dropdown-toggle">Course Right</a>
                                                                    </li> 
                                                                    <li class="menu-item">
                                                                        <a class="dropdown-toggle">Course Left</a>
                                                                    </li> 
                                                                    <li class="menu-item">
                                                                        <a class="dropdown-toggle">Course Category</a>
                                                                    </li> 
                                                                    <li class="menu-item">
                                                                        <a class="dropdown-toggle">Free Course</a>
                                                                    </li> 
                                                                     <li class="menu-item">
                                                                        <a class="dropdown-toggle">Free Course</a>
                                                                    </li> <li class="menu-item">
                                                                        <a class="dropdown-toggle">Free Course</a>
                                                                    </li>
                                                                  </ul>
                                                              </li> 
                                                          </ul>
                                                      </div>
                                                  </div>
                                              </div>
                                          </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown main_item  main_item_click">
                                        <a href="#" class="dropdown-toggle par_dropdown_toggle">Element</a>
                                        <ul class="dropdown-menu">
                                            <li  class="menu-item">
                                                 <a class="dropdown-toggle">Accordions</a>
                                            </li>   
                                            <li  class="menu-item">
                                                 <a class="dropdown-toggle">Animations</a>
                                            </li>   
                                            <li  class="menu-item">
                                                 <a class="dropdown-toggle">Buttons</a>
                                            </li> 
                                            <li  class="menu-item">
                                                 <a class="dropdown-toggle">Featured Box</a>
                                            </li>   
                                            <li  class="menu-item">
                                                 <a class="dropdown-toggle">Grid System</a>
                                            </li> 
                                            <li  class="menu-item">
                                                 <a class="dropdown-toggle">Grid System</a>
                                            </li> 
                                            <li  class="menu-item">
                                                 <a class="dropdown-toggle">Grid System</a>
                                            </li> 
                                            <li  class="menu-item">
                                                 <a class="dropdown-toggle">Grid System</a>
                                            </li> 
                                        </ul>
                                    </li>
                                    <li class="dropdown main_item main_item_click">
                                        <a href="#" class="dropdown-toggle par_dropdown_toggle">Blog</a>
                                        <ul class="dropdown-menu">
                                             <li class="menu-item">
                                                 <a class="dropdown-toggle">Blog Full Width</a>
                                             </li>
                                              <li class="menu-item">
                                                 <a class="dropdown-toggle">Blog Full Width</a>
                                             </li>
                                              <li class="menu-item">
                                                 <a class="dropdown-toggle">Blog Full Width</a>
                                             </li>
                                              <li class="menu-item">
                                                 <a class="dropdown-toggle">Blog Full Width</a>
                                             </li>
                                              <li class="menu-item">
                                                 <a class="dropdown-toggle">Blog Full Width</a>
                                             </li>
                                              <li class="menu-item">
                                                 <a class="dropdown-toggle">Blog Full Width</a>
                                             </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown main_item main_item_click">
                                        <a href="#" class="dropdown-toggle par_dropdown_toggle">Pages</a>
                                        <ul class="dropdown-menu">
                                             <li class="menu-item">
                                                 <a class="dropdown-toggle">Blog Full Width</a>
                                             </li>
                                              <li class="menu-item">
                                                 <a class="dropdown-toggle">Blog Full Width</a>
                                             </li>
                                              <li class="menu-item">
                                                 <a class="dropdown-toggle">Blog Full Width</a>
                                             </li>
                                        </ul>
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
                <p>
                <br> <br>  <br> <br>  <br> <br>  <br> <br>  <br> <br>  <br> <br>  <br> <br>  <br> <br>  <br> <br>  <br> <br>  <br> <br>  <br> <br>  <br> <br>  <br> <br>  <br> <br>  <br> <br>  <br> <br>  <br> <br>  <br> <br>  <br> <br>  <br> <br>  <br> <br>  <br> <br>  <br> <br>  <br> <br>  <br> <br>  <br> <br>  <br> <br>  <br> <br>  <br> <br>  <br> <br>  <br> <br>  <br> <br>  <br> <br>  <br> <br>  <br> <br>  <br> <br>  <br> <br>  <br> <br>  <br> <br>  <br> <br>  <br> <br>  <br> <br>  <br> <br>  <br> <br>  <br> <br>  <br> <br>  <br> <br>  <br> <br>  <br> <br>  <br> <br>  <br> <br>  <br> <br>  <br> <br>  <br> <br>  <br> <br>  <br> <br>  <br> <br>  <br> <br>  <br> <br>  <br> <br>  <br> <br>  <br> <br>  <br> <br>  <br> <br>  <br> <br>  <br> <br>  <br> <br>  <br> <br>  <br> <br>  <br> <br>  <br> <br>  <br> <br>  <br> <br>  <br> <br>  <br> <br>  <br> <br>  <br> <br>  <br> <br>  <br> <br>  <br> <br>  <br> <br>  <br> <br>  <br> <br>  <br> <br>  <br> <br>  <br> <br>  <br> <br> 
                </p>
        </div> 
    </body>

</html>