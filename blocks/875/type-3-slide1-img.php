<!DOCTYPE html>
<html>

    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php
        if (!class_exists('lessc')) {
            include ('libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/type-3-slider1-img.less', 'css/type-3-slider1-img.css');
        ?>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">

        <script src="js/jquery-1.11.0.min.js"></script>
        <script src="js/bootstrap.min.js"></script> 
        <link rel="stylesheet" href="css/type-3-slider1-img.css">
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>

        <div class="zaro">
            <div id="pattent" class="slidelip white-background">  
                <div class="container container-modify margin-auto header">

                    <div class="clearfix"></div>
                    <!--SLIDE SHOW TUYEN-->
                    <div class="mod_costum_44">  
                        <div class="mod-44">
                            <div class="col-md-4 col-sm-4 col-xs-12 col-custom-main mg-pp-3">
                                <div class="box-main">
                                    <div class="box-content">
                                        <img src="images/slide3/promo_soc.jpg">
                                        <div class="content">
                                            <h4>Socialize With Us!</h4>
                                            <p>Subscribe to the latest news from your favorite brands.</p>
                                            <div class="newsletter_soc">
                                                <div class="col-custom">
                                                    <a href="#">
                                                        <i class="fa fa-youtube"></i>
                                                    </a>
                                                </div>
                                                <div class="col-custom">
                                                    <a href="#">
                                                        <i class="fa fa-twitter"></i>
                                                    </a>
                                                </div>
                                                <div class="col-custom">
                                                    <a href="#">
                                                        <i class="fa fa-facebook-f"></i>
                                                    </a>
                                                </div>
                                                <div class="col-custom">
                                                    <a href="#">
                                                        <i class="fa fa-google"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12 col-custom-main mg-pp-3">
                                <div class="box-main">
                                    <div class="box-content">
                                        <img src="images/slide3/promo_news.jpg" >
                                        <div class="content">
                                            <h4>Socialize With Us!</h4>
                                            <p>Subscribe to the latest news from your favorite brands.</p>  
                                            <form action="#" method="post" class="newsletter_form dib btnsend">
                                                <div class="ind">
                                                    <input type="text" name="email" size="18" value="your e-mail" onfocus="javascript:if (this.value == 'your e-mail')
                                                                this.value = '';" onblur="javascript:if (this.value == '')
                                                                            this.value = 'your e-mail';" class="inputNew">
                                                    <input type="button" value="Send" class="minibutton main_bg_hvr " name="submitNewsletter">
                                                    <input type="hidden" name="action" value="0">
                                                </div>
                                            </form>           
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12 col-custom-main mg-pp-3">
                                <div class="box-main">
                                    <div class="box-content">
                                        <img src="images/slide3/promo.jpg" >

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!----- KẾT THỨC SLIDE THỨ 2 ---->

                    </div>

                </div>

            </div>
        </div> 


    </body> 


</html>