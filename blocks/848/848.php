<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <?php
        if (!class_exists('lessc')) {
            include ('libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/848.less', 'css/848.css');
        ?>
        <link href="css/848.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-3.2.0.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </head> 

    <body>                
        <div class="type-848">
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <button type="button" class="footer-btn" data-toggle="collapse" data-target="#footer-info">INFORMATION</button>
                            <div id="footer-info" class="collapse">
                                <h4>infomation</h4>
                                <ul>
                                    <li><a href="#">Specials</a></li>
                                    <li><a href="#">New products</a></li>
                                    <li><a href="#">Top sellers</a></li>
                                    <li><a href="#">Our stores</a></li>
                                    <li><a href="#">Contact us</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <button type="button" class="footer-btn" data-toggle="collapse" data-target="#footer-link">USEFUL LINKS</button>
                            <div id="footer-link" class="collapse">
                                <h4>useful links</h4>
                                <ul>
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Delivery</a></li>
                                    <li><a href="#">Legal Notice</a></li>
                                    <li><a href="#">Secure Payment</a></li>
                                    <li><a href="#">Terms & conditions</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <button type="button" class="footer-btn" data-toggle="collapse" data-target="#footer-tweet">LATEST TWEETS</button>
                            <div id="footer-tweet" class="collapse">
                                <h4>latest tweets</h4>
                                <div class="tweet-content">
                                    <div class="tweet-icon fa fa-twitter"></div>
                                    <p>Download dual-panel file manager for Mac OS X - Commander One</p>
                                    <a href="#" ><div class="tweet-link">mac.eltima.com/commander-one-…</div></a>
                                    <div class="clearfix"></div>
                                    <a href="#" class="tweet-day"><i>about 44 days ago</i></a>
                                </div>
                                <div class="tweet-content">
                                    <div class="tweet-icon fa fa-twitter"></div>
                                    <p>RT @</p>
                                    <a href="#" ><div class="tweet-link">wylsacom</div></a>
                                    <p>Презентация iPhone 7 вместе с Wylsacom + розыгрыш iPhone 7!</p>
                                    <a href="#" ><div class="tweet-link">youtu.be/Z4Hs_j-CHCA</div></a>
                                    <div class="clearfix"></div>
                                    <a href="#" class="tweet-day"><i>about 204 days ago</i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <button type="button" class="footer-btn" data-toggle="collapse" data-target="#footer-fb">FACEBOOK</button>
                            <div id="footer-fb" class="collapse">
                                <h4>facebook</h4>
                                <a href="#" class="like-button fa fa-thumbs-up">Like</a>
                                <div class="clearfix"></div>
                                <p class="people-like">3277 people like <a href="#">Promokit Co.</a></p>
                                <ul>
                                    <li><a href="#"><img src="images/footer-fb-1.png" alt=""/></a></li>
                                    <li><a href="#"><img src="images/footer-fb-2.png" alt=""/></a></li>
                                    <li><a href="#"><img src="images/footer-fb-3.png" alt=""/></a></li>
                                    <li><a href="#"><img src="images/footer-fb-4.png" alt=""/></a></li>
                                    <li><a href="#"><img src="images/footer-fb-5.png" alt=""/></a></li>
                                    <li><a href="#"><img src="images/footer-fb-6.png" alt=""/></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <div class="sub-footer">
                <div class="container">
                    <p>© 2016 Powered by Prestashop™. All Rights Reserved.</p>
                    <ul>
                        <li><img src="images/payment-1.png"></li>
                        <li><img src="images/payment-2.png"></li>
                        <li><img src="images/payment-3.png"></li>
                        <li><img src="images/payment-4.png"></li>
                        <li><img src="images/payment-5.png"></li>
                        <li><img src="images/payment-6.png"></li>
                    </ul>
                </div>
            </div>
        </div>
    </body>
</html>