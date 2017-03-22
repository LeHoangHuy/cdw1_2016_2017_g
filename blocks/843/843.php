<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>  
    <a href="fonts/FontAwesome.otf"></a>
    <?php
    if (!class_exists('lessc')) {
        include ('./libs/lessc.inc.php');
    }
    $less = new lessc;
    $less->compileFile('less/843.less', 'css/843.css');
    ?>
    <link href="css/843.css" rel="stylesheet" type="text/css"/>
    <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <script src="js/jquery.js" type="text/javascript"></script>


</head>
<body>
    <div class="type-843">
        <!-- BEGIN FOOTER -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="logo-footer col-md-3 col-sm-3 col-xs-12">
                        <div class="logo">
                            <img src="images/footer-logo.png" alt=""/>
                        </div>
                        <div class="address">
                            <p> 507-Union Trade Center,Udhana Darvaja Surat </p>
                            <p> Call us: 0123-456-789</p>
                            <p><a href="#"> support@templatemela.com</a></p>
                        </div>
                        <div class="link">
                            <ul>
                                <li><a href="#" class="fa fa-facebook-square"></a></li>
                                <li><a href="#" class="fa fa-twitter-square"></a></li>
                                <li><a href="#" class="fa fa-google-plus-square"></a></li>
                                <li><a href="#" class="fa fa-pinterest-square"></a></li>
                                <li><a href="#" class="fa fa-linkedin-square"></a></li>
                                <li><a href="#" class="fa fa-rss-square"></a></li>
                                <li><a href="#"class="fa fa-share-alt-square"></a></li>
                                <li><a href="#" class="fa fa-youtube-square"></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- BEGIN COLUMNS -->
                    <div class="columns col-md-3 col-sm-3 col-xs-12">
                        <div class="title">
                            <h6>MY ACCOUNT</h6>
                        </div>
                        <div class="list">
                            <ul>
                                <li><a href="#">Ask In forum</a></li>
                                <li><a href="#"> Help Desk</a></li>
                                <li><a href="#"> Payment Method</a></li>
                                <li><a href="#"> Promotions</a></li>
                                <li><a href="#"> Terms & Condition</a></li>
                                <li><a href="#"> Payment Method</a></li>
                                <li><a href="#"> Shipping Policy</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- END COLUMNS -->
                    <!-- BEGIN COLUMNS -->
                    <div class="columns col-md-3 col-sm-3 col-xs-12">
                        <div class="title">
                            <h6>SHOP</h6>
                        </div>
                        <div class="list">
                            <ul>
                                <li><a href="#">Accessories</a></li>
                                <li><a href="#">Balcony Tables</a></li>
                                <li><a href="#">Bar Units</a></li>
                                <li><a href="#">Fine Art</a></li>
                                <li><a href="#">Beds</a></li>
                                <li><a href="#">Rules</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- END COLUMNS -->
                    <!-- BEGIN COLUMNS -->
                    <div class="columns col-md-3 col-sm-3 col-xs-12">
                        <div class="title">
                            <h6>SELLERS</h6>
                        </div>
                        <div class="list">
                            <ul>
                                <li><a href="#">Seller Login</a></li>
                                <li><a href="#">Seller Signup</a></li>
                                <li><a href="#">Seller Handbook</a></li>
                                <li><a href="#">Shipping & Refund</a></li>
                                <li><a href="#"> Wholesale Policy</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- END COLUMNS -->
                </div>
            </div>
            <div class="container">
                <div class="border-bottom">
                </div> 
                <div class="sub-footer">
                    <div class="menu-sub">
                        <ul>
                            <li><a href="#">Site Map</a></li>
                            <li><a href="#">|</a></li>
                            <li><a href="#">Search Terms</a></li>
                            <li><a href="#">|</a></li>
                            <li><a href="#">Advanced Search</a></li>
                            <li><a href="#">|</a></li>
                            <li><a href="#">Orders and Returns</a></li>
                            <li><a href="#">|</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="copy">
                        <p>© 2016 Magento Demo Store. All Rights Reserved.</p>
                    </div>
                    <div class="link-sub col-md-12 col-sm-12 col-xs-12">
                        <div class="image">
                            <img src="images/payment.png" alt=""/>
                        </div>   
                    </div>
                </div>
            </div>

        </footer>
        <!-- END FOOTER -->
    </div>
</body>
</html>




