<!DOCTYPE html>

<html>

    <head>
        <title>footer</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/859.less', 'css/859.css');
        ?>
        <link href="css/859.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="type-859">
            <div class="signup">
                <div class="border"></div>
                <div class="clearfix"></div>
                <div class="container">               
                    <div class="title col-md-6 col-sm-6 col-xs-12">
                        <h4>sign up to receive the latest news</h4> 
                    </div>
                    <div class="submit col-md-6 col-sm-6 col-xs-12 ">
                        <div class="input">
                            <input type="text" class="col-md-8 col-sm-8 col-xs-7" placeholder="Your email"style="padding: 5px 0px; border-radius: 5px;">  
                            <div class="btn col-md-4 col-sm-4 col-xs-5 ">sign up</button> 
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="border"></div>
            </div>
            <div class="clearfix"></div>
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="clearfix"></div>
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
                                    <a href="#" class="tweet-day"><i>about 50 days ago</i></a>
                                </div>
                                <div class="tweet-content">
                                    <div class="tweet-icon fa fa-twitter"></div>
                                    <p>RT @</p>
                                    <a href="#" ><div class="tweet-link">wylsacom</div></a>
                                    <p>Презентация iPhone 7 вместе с Wylsacom + розыгрыш iPhone 7!</p>
                                    <a href="#" ><div class="tweet-link">youtu.be/Z4Hs_j-CHCA</div></a>
                                    <p>Отличная презентация, отличные призы. #Wylsacom7</p>
                                    <div class="clearfix"></div>
                                    <a href="#" class="tweet-day"><i>about 210 days ago</i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <button type="button" class="footer-btn" data-toggle="collapse" data-target="#footer-fb">FACEBOOK</button>
                            <div id="footer-fb" class="collapse">
                                <h4 class="facebook">facebook</h4>
                                <span class="like"><a href="#"  class="fa fa-thumbs-up">Like</a></span>
                                <div class="clearfix"></div>
                                <span class="view">3277 people like </span><a href="#" class="link">Promokit Co.</a>
                                <div class="clearfix"></div>
                                <ul>
                                    <li><a href="#"><img src="images/footer-fb-6.png" alt=""/></a></li>
                                    <li><a href="#"><img src="images/footer-fb-5.png" alt=""/></a></li>
                                    <li><a href="#"><img src="images/footer-fb-4.png" alt=""/></a></li>
                                    <li><a href="#"><img src="images/footer-fb-3.png" alt=""/></a></li>
                                    <li><a href="#"><img src="images/footer-fb-2.png" alt=""/></a></li>
                                    <li><a href="#"><img src="images/footer-fb-1.png" alt=""/></a></li>
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
                        <li><a href="#" class="fa fa-facebook"style="padding: 10px 13px;"></a></li>
                        <li><a href="#" class="fa fa-twitter"></a></li>
                        <li><a href="#" class="fa fa-google"></a></li>
                        <li><a href="#" class="fa fa-youtube"></a></li>
                        <li><a href="#" class="fa fa-flickr"></a></li>
                        <li><a href="#" class="fa fa-instagram"></a></li>
                        <li><a href="#" class="fa fa-pinterest"></a></li>
                        <li><a href="#" class="fa fa-linkedin"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </body>
</html>