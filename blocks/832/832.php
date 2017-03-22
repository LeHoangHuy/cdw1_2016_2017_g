<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/832.less', 'css/832.css');
        ?>

        <link href="css/832.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="type-832">
            <!-- BEGIN FOOTER -->
            <footer>
                <div class="container">
                    <div class="row">
                        <!-- BEGIN COLUMNS -->
                        <div class="columns col-md-3">
                            <div class="title">
                                <img src="images/Steel-Product.png" alt=""/>
                            </div>
                            <div class="clearfix"></div>
                            <ul class="nav">
                                <li class="items"> 4578 Marmora Road, MG Glasgow Lesten- D04 89GR, Australia</li>
                                <li class="items"> Phone : 800-2345-6789 / 6889800-2345-6789 / 6890</li>
                                <li class="items"> Fax : 800-2345-6789 / 6889800-2345-6789 / 6890</li>
                                <li class="items"> E-Mail : info@indusmining.com</li>
                            </ul>
                        </div>
                        <!-- END COLUMNS -->
                        <!-- BEGIN COLUMNS -->
                        <div class="columns col-md-3">
                            <div class="title">
                                <h3> Quick Links </h3>
                            </div>
                            <div class="clearfix"></div>
                            <ul class="nav">
                                <li><a href="#" class="fa fa-angle-double-right"> Company Profile</a></li>
                                <li><a href="#" class="fa fa-angle-double-right">Products</a></li>
                                <li><a href="#" class="fa fa-angle-double-right"> Services</a></li>
                                <li><a href="#" class="fa fa-angle-double-right">  News</a></li>
                                <li><a href="#" class="fa fa-angle-double-right">  Contact</a></li>
                            </ul>
                        </div>
                        <!-- END COLUMNS -->
                        <!-- BEGIN COLUMNS -->
                        <div class="columns col-md-3">
                            <div class="title">
                                <h3> Twitter Indus </h3>
                            </div>
                            <div class="clearfix"></div>
                            <ul class="nav">
                                <a href="#"> envato</a><span> RT @EnvatoElements: So exciting - there are now over 1000 fonts on Elements! Check out the library at</span>
                                <a href="#"> https://t.co/IxTRltT7ca.</a><span>4 hours ago</span>          
                            </ul>
                            <ul class="nav">
                                <a href="#"> envato</a><span> Learn some cool new CSS tricks in this @tutsplus course. </span>
                                <a href="#"> https://t.co/slRA54uwYa</a><span> 7 hours ago</span>          
                            </ul>

                        </div>
                        <!-- END COLUMNS -->
                        <!-- BEGIN COLUMNS -->
                        <div class="columns col-md-3">
                            <div class="title">
                                <h3 class="last"> Sign up For Newsletter </h3>
                            </div>
                            <div class="clearfix"></div>
                            <ul class="nav">
                                <li> Lorem ipsum dolor sit amet, tetuer sit adipiscing elisent dolor amet sit.</li>
                                <li class="email">
                                    <h4> Email Address :</h4>
                                    <form action="#">
                                        <input type="text" placeholder="Your email address">
                                    </form>
                                </li>
                            </ul>
                            <button>
                                <a href="#"><span>Sign Up</span></a>
                            </button>

                        </div>
                        <!-- END COLUMNS -->
                    </div>
                </div>
            </footer>
            <!-- END FOOTER -->
            <!-- BEGIN SUB-FOOTER -->
            <div class="sub-footer">
                <div class="container">
                    <div class="row">
                        <div class="copy col-md-6 col-xs-6">
                            <div >
                                <span>© 2015 Indusminingcompany | Privacy policy</span>
                            </div>
                        </div>
                        <div class="menu-footer col-md-6 col-xs-6">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END SUB-FOOTER -->
        </div>
    </body>
</html>
