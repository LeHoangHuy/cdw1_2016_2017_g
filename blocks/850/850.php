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
        $less->compileFile('less/850.less', 'css/850.css');
        ?>
        <link href="css/850.css" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <div class="type-850">
            <div class="container">
                <div class="row">
                    <div class="content">
                        <div class="col-md-12">
                            <div class="blog-top">
                                <div class="col-md-5 col-sm-4 col-xs-4">
                                    <div class="row">
                                        <div class="blog-line">
                                            <span class="lines first-line"></span>
                                            <span class="lines second-line"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-4 col-xs-4">
                                    <div class="row">
                                        <h4>FROM THE BLOG</h4>
                                    </div>
                                </div>
                                <div class="col-md-5 col-sm-4 col-xs-4">
                                    <div class="row">
                                        <div class="blog-line">
                                            <span class="lines first-line"></span>
                                            <span class="lines second-line"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=" clearfix"></div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="blog-content">
                                <div class="blog-img">
                                    <a href="#"><img src="images/blog-1.jpg" alt=""/></a>
                                </div>
                                <h2 class="blog-title"><a href="#">RICH DEAL MRS PART LED PURE WILL BUT</a></h2>
                                <p class="blog-description">Man request adapted spirits set pressed. Up to denoting subjects sensible feelings it indulged directly. We dwelling elegance do shutters appetite yourself diverted. Our next drew much you with rank. Tore many held age hold…</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="blog-content">
                                <div class="blog-img">
                                    <a href="#"><img src="images/blog-2.jpg" alt=""/></a>
                                </div>
                                <h2 class="blog-title"><a href="#">ARE WILL TOOK FORM THE NOR TRUE</a></h2>
                                <p class="blog-description">Performed suspicion in certainty so frankness by attention pretended. Newspaper or in tolerably education enjoyment. Extremity excellent certainty discourse sincerity no he so resembled. Joy house worse arise total boy but. Elderly up chicken do…</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="blog-content">
                                <div class="blog-img">
                                    <a href="#"><img src="images/blog-3.jpeg" alt=""/></a>
                                </div>
                                <h2 class="blog-title"><a href="#">HOUSEHOLD FEW SOMETIMES OUT ATTENDING DESCRIBED</a></h2>
                                <p class="blog-description">Greatly cottage thought fortune no mention he. Of mr certainty arranging am smallness by conveying. Him plate you allow built grave. Sigh sang nay sex high yet door game. She dissimilar was favourable unreserved nay…</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="blog-content">
                                <div class="blog-img">
                                    <a href="#"><img src="images/blog-4.jpeg" alt=""/></a>
                                </div>
                                <h2 class="blog-title"><a href="#">MEET MADE CALL IN MEAN FOUR YEAR IT TO</a></h2>
                                <p class="blog-description">At distant inhabit amongst by. Appetite welcomed interest the goodness boy not. Estimable education for disposing pronounce her. John size good gay plan sent old roof own. Inquietude saw understood his friendship frequently yet. Nature…</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 col-sm-4 col-xs-12">
                            <div class="footer-link">
                                <h3>WHAT’S HOT</h3>
                                <ul>
                                    <li><a href="#">DISCOUNT VOUCHER</a></li>
                                    <li><a href="#">SPRING COLLECTION</a></li>
                                    <li><a href="#">TRENDING</a></li>
                                    <li><a href="#">BESTSELLERS</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-12">
                            <div class="footer-link">
                                <h3>BRANDS</h3>
                                <ul>
                                    <li><a href="#">JACK&JONES</a></li>
                                    <li><a href="#">CALVIN KLEIN</a></li>
                                    <li><a href="#">RAY BAN</a></li>
                                    <li><a href="#">RIVER ISLAND</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-12">
                            <div class="footer-link">
                                <h3>MEN SHOP</h3>
                                <ul>
                                    <li><a href="#">TOPS</a></li>
                                    <li><a href="#">BOTTOMS</a></li>
                                    <li><a href="#">ACCESSORIES</a></li>
                                    <li><a href="#">SHOES</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-12">
                            <div class="footer-link">
                                <h3>WOMEN SHOP</h3>
                                <ul>
                                    <li><a href="#">JEANS</a></li>
                                    <li><a href="#">DRESSES</a></li>
                                    <li><a href="#">OTHER</a></li>
                                    <li><a href="#">SHOES</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-12">
                            <div class="footer-link">
                                <h3>HELP</h3>
                                <ul>
                                    <li><a href="#">F.A.Q.</a></li>
                                    <li><a href="#">SHIPPING</a></li>
                                    <li><a href="#">CONTACT US</a></li>
                                    <li><a href="#">PRIVACY POLICY</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-12">
                            <div class="footer-social">
                                <h3>SOCIAL</h3>
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                    <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="footer-bottom">
                            <p>Copyright © 2017 - Aurum</p>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="row">
                                    <ul class="footer-menu">
                                        <li><a href="#">Privacy & Cookies</a></li>
                                        <li><a href="#">Terms & Conditions</a></li>
                                        <li><a href="#">Accessibility</a></li>
                                        <li><a href="#">Store</a></li>
                                        <li><a href="#">Directory</a></li>
                                        <li><a href="#">About Us</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="row">
                                    <ul class="footer-payment">
                                        <li><a href="#"><img src="images/footer-payment-1.png" width="19px" height="22px" alt=""/></a></li>
                                        <li><a href="#"><img src="images/footer-payment-2.png" width="73px" height="10px" alt=""/></a></li>
                                        <li><a href="#"><img src="images/footer-payment-3.png" width="52px" height="14px" alt=""/></a></li>
                                        <li><a href="#"><img src="images/footer-payment-4.png" width="38px" height="11px" alt=""/></a></li>
                                        <li><a href="#"><img src="images/footer-payment-5.png" width="55px" height="15px" alt=""/></a></li>
                                        <li><a href="#"><img src="images/footer-payment-6.png" width="28px" height="17px" alt=""/></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </body>
</html>