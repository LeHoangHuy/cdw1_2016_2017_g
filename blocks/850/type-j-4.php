<!DOCTYPE html>

<html style="background-color: #f3f3f4;">

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
        $less->compileFile('less/type-7.less', 'css/type-7.css');
        ?>
        <link href="css/type-7.css" rel="stylesheet" type="text/css" />


    </head>

    <body>
        <div class="type-7">
            


           



            <!-- Main Content -->

            <div class="maincontent">
                <div class="container">
                   
                   
                    <br>

                    <!-- BLOG -->

                    <div class="row blog_cat">
                        <span><hr size="6"></span>
                        <h4 class="text-center">FROM THE BLOG</h4>
                    </div>

                    <div class="row blog">
                        <div class="col-md-3">
                            <a href="#">
                                <img class="img-responsive" src="img/uploads/2014/11/blog1.jpg" alt="">
                            </a>
                            <h5>
                                <a href="#">RICH DEAL MRS PART LED PURE WILL BUT</a>
                            </h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                        </div>
                        <div class="col-md-3">
                            <a href="#">
                                <img class="img-responsive" src="img/uploads/2014/11/blog2.jpg" alt="">
                            </a>
                            <h5>
                                <a href="#">ARE WILL TOOK FORM THE NOR TRUE</a>
                            </h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                        </div>
                        <div class="col-md-3">
                            <a href="#">
                                <img class="img-responsive" src="img/uploads/2014/11/blog3.jpg" alt="">
                            </a>
                            <h5>
                                <a href="#">HOUSEHOLD FEW SOMETIMES OUT ATTENDING DESCRIBED</a>
                            </h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                        </div>
                        <div class="col-md-3">
                            <a href="#">
                                <img class="img-responsive" src="img/uploads/2014/11/blog4.jpg" alt="">
                            </a>
                            <h5>
                                <a href="#">MEET MADE CALL IN MEAN FOUR YEAR IT TO</a>
                            </h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                        </div>
                    </div>
                    <!-- /.row -->

                    <!-- Projects Row -->



                </div>

            </div>


            <!-- /Main Content -->






            <!-- footer -->

            <footer id="footer">
                <div class="container">
                    <div class="row finfo">
                        <div class="col-md-2">
                            <h5>WHAT'S HOT</h5>
                            <ul>
                                <li>DISCOUNT VOUCHER</li>
                                <li>SPRING COLLECTION</li>
                                <li>TRENDING</li>
                                <li>BESTSELLERS</li>
                            </ul>
                        </div>
                        <div class="col-md-2">
                            <h5>BRANDS</h5>
                            <ul>
                                <li>JACK&JONES</li>
                                <li>CALVIN KLEIN</li>
                                <li>RAY BAN</li>
                                <li>RIVER ISLAND</li>
                            </ul>
                        </div>

                        <div class="col-md-2">
                            <h5>MEN SHOP</h5>
                            <ul>
                                <li>TOPS</li>
                                <li>BOTTOMS</li>
                                <li>ACCESSORIES</li>
                                <li>SHOES</li>
                            </ul>
                        </div>

                        <div class="col-md-2">
                            <h5>WOMEN SHOP</h5>
                            <ul>
                                <li>JEANS</li>
                                <li>DRESSES</li>
                                <li>OTHER</li>
                                <li>SHOES</li>
                            </ul>
                        </div>

                        <div class="col-md-2"> <h5>HELP</h5>
                            <ul>
                                <li>F.A.Q.</li>
                                <li>SHIPPING</li>
                                <li>CONTACT US</li>
                                <li>PRIVACY POLICY</li>
                            </ul>
                        </div>

                        <div class="col-md-2 social">
                            <h5>SOCIAL</h5>
                            <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            <a href=""><i class="fa fa-youtube" aria-hidden="true"></i></a>
                            <a href=""><i class="fa fa-vimeo" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            Copyright © 2016 - Aurum	
                            <br />

                            <div class="footer-menu">
                                <ul>
                                    <li><a href="#">Privacy & Cookies</a>|</li>
                                    <li><a href="#">Terms & Conditions</a>|</li>
                                    <li><a href="#">Accessibility</a>|</li>
                                    <li><a href="#">Store</a>|</li>
                                    <li><a href="#">Directory</a>|</li>
                                    <li><a href="#">About Us</a></li>
                                </ul></div>					
                        </div>
                        <div class="col-md-6">

                            <ul class="payment-methods pull-right">
                                <li>
                                    <a href="#">
                                        <img src="img\uploads\2016\04\ups.png" alt="ups" width="19" height="22">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="img/uploads/2016/04/dhl.png" alt="dhl" width="73" height="10">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="img/uploads/2016/04/fedex.png" alt="fedex" width="52" height="14">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="img/uploads/2016/04/visa.png" alt="visa" width="38" height="11">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="img/uploads/2016/04/paypal.png" alt="paypal" width="55" height="15">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="img/uploads/2016/04/mastercard.png" alt="mastercard" width="28" height="17">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>


            <!-- /footer -->


            <!-- Bootstrap core JavaScript
            ================================================== -->
            <!-- Placed at the end of the document so the pages load faster -->
            <script src="js/jquery.min.js"></script>

            <script src="js/bootstrap.min.js"></script>
            <script src="js/scripts.js"></script>
        </div>
    </body>


</html>