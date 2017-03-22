<!DOCTYPE html>

<html style="background-color: #f3f3f4;">

    <head>
        <title>footer</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/type-I-8.less', 'css/type-3.css');
        ?>
        <link href="css/type-3.css" rel="stylesheet" type="text/css" />

    </head>

    <body>
        <div class="type-I-8">
            <div class="footer-top">
                <div class="khung">
                    <div class="container">
                        <div id="newsletter_block_left" class="block">
                            <h4 class="dib">sign up to receive the latest news</h4>
                            <div class="block_content dib">
                                <form action="" method="post" class="dib">
                                    <input type="text" name="email" value="your e-mail" class="inputNew">
                                    <input type="submit" value="Sign Up" class="button_mini lmromancaps" name="submitNewsletter">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-4 col-xs-12">
                            <div class="block_content dropdown">
                                <h4 data-toggle="dropdown"><span class="icon glyphicon glyphicon-menu-down"></span>INFORMATION</h4>
                                
                                <ul class="dropdown-menu">
                                    <li class="item1"> <a href="" title="Specials"> Specials </a></li>
                                    <li class="item"> <a href="" title="New products"> New products </a></li>
                                    <li class="item"> <a href="" title="Top sellers"> Top sellers </a></li>
                                    <li class="item"> <a href="" title="Our stores"> Our stores </a></li>
                                    <li class="item"> <a href="" title="Contact us"> Contact us </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-12">
                            <div class="block_content dropdown">
                                <h4 data-toggle="dropdown"><span class="icon glyphicon glyphicon-menu-down"></span>USEFUL LINKS</h4>
                                
                                <ul class="dropdown-menu">
                                    <li class="item1"> <a href="" title="Specials"> About Us </a></li>
                                    <li class="item"> <a href="" title="New products"> Delivery </a></li>
                                    <li class="item"> <a href="" title="Top sellers"> Legal Notice </a></li>
                                    <li class="item"> <a href="" title="Our stores"> Secure Payment </a></li>
                                    <li class="item"> <a href="" title="Contact us"> Terms & Conditions </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-12">
                            <div class="block_content dropdown">
                                <h4 data-toggle="dropdown"><span class="icon glyphicon glyphicon-menu-down"></span>LATEST TWEETS</h4>
                                <div class=" borderList dropdown-menu">
                                    <li class="tweet_first tweet_odd">
                                        <span class="tweet_text">
                                            RT @
                                            <a class="color" href="">wylsacom</a>
                                            Презентация iPhone 7 вместе с Wylsacom + розыгрыш iPhone 7!
                                            <a class="color"href="">youtu.be/Z4Hs_j-CHCA</a>
                                            Отличная презентация, отличные призы. #Wylsacom7
                                        </span>
                                        <a href="" class="svgic svgic-twitter"><i class="fa fa-twitter"></i></a>
                                        <span class="tweet_time">
                                            <a href="">about 38 days ago</a>
                                        </span>
                                    </li>
                                    <li class="tweet_even">
                                        <span class="tweet_text">
                                            Find a lot of helpful information for Alysum theme. Documentation
                                            <a class="color" class="">alysum.promokit.eu/documentation</a>
                                            and Wiki
                                            <a class="color" href="">docs.promokit.eu/doku.php/alysum</a>
                                            @
                                            <a class="color" href="">PromokitInfo</a>
                                        </span>
                                        <a href="" class="svgic svgic-twitter"><i class="fa fa-twitter"></i></a>
                                        <span class="tweet_time">
                                            <a href="">about 86 days ago</a>
                                        </span>
                                    </li>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 ">
                            <div class="block_content dropdown">
                                <h4 class="day" data-toggle="dropdown"><span class="icon glyphicon glyphicon-menu-down"></span>FACEBOOK</h4>
                                <div class="facebook-box dropdown-menu">
                                    <div class="like">
                                        <a href=""><i class="glyphicon glyphicon-thumbs-up"></i>Like</a>
                                    </div>
                                    <div class="fb_fans">3259 people like <a href="">Promokit Co.</a></div>
                                    <div class="hidden"></div>
                                    <ul class="fb_followers">
                                        <li class="face-1">
                                            <a href="#"><img src="images/laixe.png"></a>
                                            <div class="fb_name ellipsis">Mikaely</div>
                                        </li>
                                        <li class="face-2">
                                            <a href="#"><img src="images/laixe.png"></a>
                                            <div class="fb_name ellipsis">Mikaely</div>
                                        </li>
                                        <li class="face-3">
                                            <a href="#"><img src="images/laixe.png"></a>
                                            <div class="fb_name ellipsis">Mikaely</div>
                                        </li>
                                        <li class="face-4">
                                            <a href="#"><img src="images/laixe.png"></a>
                                            <div class="fb_name ellipsis">Mikaely</div>
                                        </li>
                                        <li class="face-5">
                                            <a href="#"><img src="images/laixe.png"></a>
                                            <div class="fb_name ellipsis">Mikaely</div>
                                        </li>
                                        <li class="face-6">
                                            <a href="#"><img src="images/laixe.png"></a>
                                            <div class="fb_name ellipsis">Mikaely</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="footer_text">© 2016 Powered by Prestashop™. All Rights Reserved.</div>
                    <div class="footer_bottom_hook dib">
                        <div id="socialnetworks">
                            <ul class="socialnetworks_menu dib">
                                <li class="facebook dib sec_bg">
                                    <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                </li>
                                <li class="twitter dib sec_bg">
                                    <a href="" ><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                </li>
                                <li class="gplus dib sec_bg">
                                    <a href="" ><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                </li>
                                <li class="youtube dib sec_bg">
                                    <a href="" ><i class="fa fa-youtube" aria-hidden="true"></i></a>
                                </li>
                                <li class="flickr dib sec_bg">
                                    <a href="" ><i class="fa fa-flickr" aria-hidden="true"></i></i></a>
                                </li>
                                <li class="instagram dib sec_bg">
                                    <a href="" ><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                </li>
                                <li class="pinterest dib sec_bg">
                                    <a href="" ><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                                </li>
                                <li class="linkedin dib sec_bg">
                                    <a href="" ><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>