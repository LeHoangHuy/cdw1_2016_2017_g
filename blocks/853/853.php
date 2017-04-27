<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <?php
        if (!class_exists('lessc')) {
            include ('libs/lessc.inc.php');
        }
        $less = new lessc;

        $less->compileFile('less/853.less', 'css/853.css');
        ?>
        <link rel="stylesheet" href="css/853.css">   
        <script src="js/jquery-1.11.0.min.js"></script>
        <script src="js/bootstrap.min.js"></script> 
    </head>

    <body>
        <div class="type-853">
		<!--BEGIN TYPE-853 -->
            <div class="header-menu">
                <div class="container">
                    <div class="row">
                        <div class="menu-header">
                            <div class="left-menu">
                                <ul>
                                    <li>
                                        <div class="dropdown-left">
                                            <a href="#" class="dropbtn-left">My Account</a>
                                            <div class="dropdown-content-left">
                                                <a href="#">My orders</a>
                                                <a href="#">My credit slips</a>
                                                <a href="#">My addresses</a>
                                                <a href="#">My personal info</a>
                                                <a href="#">My vouchers</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="dropdown-left">
                                            <a href="#" class="dropbtn-left">My Wistlists (0) </a>
                                            <div class="dropdown-content-left">
                                                <a href="#"><i>No products</i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="dropdown-left">
                                            <a href="#" class="dropbtn-left">Watch List(0)</a>
                                            <div class="dropdown-content-left">
                                                <a href="#"><i>No viewed products yet.</i></a>
                                            </div>
                                        </div>
                                        
                                    </li>
                                    <a href="#">Sign in</a><span> or </span><a href="#">Register</a>
                                </ul>
                            </div>
                            <div class="right-menu">
                                <ul>
                                    <li>
                                        <div class="dropdown-right">
                                            <a href="#" class="dropbtn-right"><img src="images/1.jpg" alt=""/> English <i class="fa fa-angle-down"></i></a>
                                            <div class="dropdown-content-right">
                                                <a href="#"><img src="images/2.jpg" alt=""/> Deutsch</a>
                                                <a href="#"><img src="images/3.jpg" alt=""/> Español</a>
                                                <a href="#"><img src="images/4.jpg" alt=""/> Français</a>
                                                <a href="#"><img src="images/5.jpg" alt=""/> العربية</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="dropdown-right">
                                            <a href="#" class="dropbtn-right">Dollar <i class="fa fa-angle-down"></i></a>
                                            <div class="dropdown-content-right money">
                                                <a href="#">Euro</a>
                                                <a href="#">Pound</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <header>
                <div class="container">
                    <div class="cart col-md-2 col-sm-12 col-xs-12">
                        <a href="#" class="fa fa-shopping-basket"><span> Cart : (empty) </span></a>
                    </div>
                    <div class="logo col-md-6 col-sm-12 col-xs-12">
                        <div class="row">
                            <img src="images/logo.jpg" alt=""/>
                        </div>
                    </div>
                    <div class="search col-md-3 col-sm-12 col-xs-12">  
                        <div class="col-md-9 col-sm-9 col-xs-9">
                            <div class="input">
                                <div class="row">
                                    <input type="text" placeholder="Search..." style="border: none; padding: 10px 0px; outline: none;"/>
                                </div>
                            </div>
                        </div>
                        <div class="btnsearch col-md-3 col-sm-3 col-xs-3">
                            <div class="row">
                                <a href="#" class="fa fa-search"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
			<!-- END TYPE-853 -->
        </div>  
    </body>
</html>