<html>
    <head>
        <title>title</title>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/885.less', 'css/885.css');
        ?>
        <link href="css/885.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div class="type-885">
		<!-- BEGIN TYPE-885 -->
            <section class="section">
                <div class=" col-md-12">
                    <!--Agent Section-->
                    <section class="agent-section">
                        <div class="col-md-5 col-sm-12 col-xs-12">
                            <figure class="agent-image" data delay="300ms" duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 300ms;    ">
                                <a href="#"><img src="images/image-1.jpg" class="img-circle" alt=""></a>
                            </figure>
                        </div>
                        <div class="col-md-7 col-sm-12 col-xs-12">
                            <div class="bordered-title">
                                <h2>ABOUT <span class="theme_color">AGENT </span></h2>
                            </div>
                            <div class="designation">
                                <h3>Mark Pine</h3>
                                <p>Senior Agent of Dream land</p>
                            </div>
                            <div class="desc-text">
                                <p>But I must explain to you how all this mistaken idea of denouncing pleasure and the praising pain was born and I will give you a complete account of the system, and ip expound the actual teachings of the great explorer </p>
                            </div>
                            <div class="info-box">
                                <div class="info">
                                    <div class="icon col-md-1 col-sm-1 col-xs-2">
                                        <div class="row">
                                            <h4 class="fa fa-address-book"></h4>
                                        </div>
                                    </div>
                                    <div class="description col-md-11 col-sm-11 col-xs-10">
                                        <div class="row">
                                            <h5>address</h5> 
                                            <p>Mirpur New Bazar Road, Block-c, Dhaka-1210</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="info">
                                    <div class="icon col-md-1 col-sm-1 col-xs-2">
                                        <div class="row">
                                            <h4 class="fa fa-phone"></h4>
                                        </div>
                                    </div>
                                    <div class="description col-md-11 col-sm-11 col-xs-10">
                                        <div class="row">
                                            <h5>phone</h5> 
                                            <p>(732) 803-01 03, (732) 806-01 04, (880)172380129 </p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="button">
                                <a href="#">Contact Now</a>
                            </div>
                        </div>
                    </section>
                </div>
            </section>
			<!-- END TYPE-885 -->
        </div>
    </body>
</html>