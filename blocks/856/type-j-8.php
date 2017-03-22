<!DOCTYPE html>

<html style="background-color: #f3f3f4;">

    <head>
        <title>Aurum - Fashion</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/cloud-zoom.css" rel="stylesheet" type="text/css" />
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/type-j-10.less', 'css/type-j-10.css');
        ?>
        <link href="css/type-j-10.css" rel="stylesheet" type="text/css" />

    </head>

    <body>
        <div class="type-j-10">
            <div class="arrow_left"><a href=""><li class="fa fa-arrow-left"></li></a></div>
            <div class="arrow_right"><a href=""><li class="fa fa-arrow-right"></li></a></div>
            
            <div class="content">
                <div class="container">

                    <div class="row">

                        <div class="col-md-6">
                            <div class="zoom-section">    	  

                                <div class="zoom-desc">
                                    <h3></h3>       

                                    <ul>
                                        <li><a href='img/product-detail-1.jpg' class='cloud-zoom-gallery' title='Red' rel="useZoom: 'zoom1', smallImage: 'img/product-detail-1.jpg' "><img width="100%" class="zoom-tiny-image" src="img/product-detail-1.jpg" alt = "Thumbnail 1"/></a></li>

               
                                    </ul>
                                </div>
                                <div class="zoom-small-image" style="width:450px">
                                    <a href='img/product-item-1024.jpg' class = 'cloud-zoom' id='zoom1' rel="adjustX:10, adjustY:-4">
                                        <img width="100%" src="img/product-item-1024.jpg" alt='' title="" /></a></div>
                            </div><!--zoom-section end-->



                        </div>

                        <div class="col-md-6">
                            <div class="product-title">CHEAP MONDAY</div>
                            <p class="text-muted">MEN</p>
                            <div class="product-rating"><i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star-o"></i> <span>(1 customer review)</span> </div>
                            <div class="product-desc">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. bag</div>
                            <br>
                            <div class="product-price">$ 1234.00</div>
                            <hr>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                                                <span class="glyphicon glyphicon-minus"></span>
                                            </button>
                                        </span>
                                        <input type="text" name="quant[1]" class="form-control input-number" value="1" min="1" max="100">
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]">
                                                <span class="glyphicon glyphicon-plus"></span>
                                            </button>
                                        </span>
                                    </div>

                                </div>

                                <div class="col-md-3">

                                    <div class="btn-group cart">
                                        <button type="button" class="btn btn-default">
                                            Add to cart 
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="btn-group wishlist">
                                <button type="button" class="btn btn-default">
                                    <span class="fa fa-heart"></span> Add to wishlist 
                                </button>
                            </div>
                            <hr>
                            <p>PRODUCT ID: <strong>283</strong></p>
                            <p>SKU: <strong>124.</strong></p>
                            <p>CATEGORY:<strong> MEN.</strong></p>
                            <p>TAGS:<strong> BAG, BAGS.</strong></p>
                        </div>
                    </div> 
                </div>
                <div class="container-fluid">		
                    <div class="col-md-12 product-info">
                        <ul id="myTab" class="nav nav-tabs nav_tabs">

                            <li class="active"><a href="#service-one" data-toggle="tab">DESCRIPTION</a></li>
                            <li><a href="#service-two" data-toggle="tab">PRODUCT INFO</a></li>
                            <li><a href="#service-three" data-toggle="tab">REVIEWS</a></li>

                        </ul>
                        <div id="myTabContent" class="tab-content">
                            <div class="tab-pane fade in active" id="service-one">

                                <section class="container product-info">
                                    The Corsair Gaming Series GS600 power supply is the ideal price-performance solution for building or upgrading a Gaming PC. A single +12V rail provides up to 48A of reliable, continuous power for multi-core gaming PCs with multiple graphics cards. The ultra-quiet, dual ball-bearing fan automatically adjusts its speed according to temperature, so it will never intrude on your music and games. Blue LEDs bathe the transparent fan blades in a cool glow. Not feeling blue? You can turn off the lighting with the press of a button.

                                    <h3>Corsair Gaming Series GS600 Features:</h3>
                                    <li>It supports the latest ATX12V v2.3 standard and is backward compatible with ATX12V 2.2 and ATX12V 2.01 systems</li>
                                    <li>An ultra-quiet 140mm double ball-bearing fan delivers great airflow at an very low noise level by varying fan speed in response to temperature</li>
                                    <li>80Plus certified to deliver 80% efficiency or higher at normal load conditions (20% to 100% load)</li>
                                    <li>0.99 Active Power Factor Correction provides clean and reliable power</li>
                                    <li>Universal AC input from 90~264V — no more hassle of flipping that tiny red switch to select the voltage input!</li>
                                    <li>Extra long fully-sleeved cables support full tower chassis</li>
                                    <li>A three year warranty and lifetime access to Corsair’s legendary technical support and customer service</li>
                                    <li>Over Current/Voltage/Power Protection, Under Voltage Protection and Short Circuit Protection provide complete component safety</li>
                                    <li>Dimensions: 150mm(W) x 86mm(H) x 160mm(L)</li>
                                    <li>MTBF: 100,000 hours</li>
                                    <li>Safety Approvals: UL, CUL, CE, CB, FCC Class B, TÜV, CCC, C-tick</li>
                                </section>

                            </div>
                            <div class="tab-pane fade" id="service-two">

                                <section class="container">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Firstname</th>
                                                <th>Lastname</th>
                                                <th>Email</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>John</td>
                                                <td>Doe</td>
                                                <td>john@example.com</td>
                                            </tr>
                                            <tr>
                                                <td>Mary</td>
                                                <td>Moe</td>
                                                <td>mary@example.com</td>
                                            </tr>
                                            <tr>
                                                <td>July</td>
                                                <td>Dooley</td>
                                                <td>july@example.com</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </section>

                            </div>
                            <div class="tab-pane fade" id="service-three">
                                <div class="container">
                                    <div class="row">
                                        <br>
                                        <div class="col-sm-2">
                                            <div class="thumbnail">
                                                <img class="img-responsive user-photo img-circle" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
                                            </div><!-- /thumbnail -->
                                        </div><!-- /col-sm-1 -->

                                        <div class="col-sm-8">
                                            <br>
                                            <p>
                                                <strong>myusername</strong>
                                            </p>
                                            <p class="text-muted">NOVEMBER 24, 2014</p>
                                            <br>
                                            <p>
                                                Panel content
                                            </p><!-- /panel panel-default -->
                                        </div><!-- /col-sm-5 -->
                                        <div class="col-sm-2">
                                            <div class="product-rating"><i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star-o"></i> </div>
                                        </div><!-- /col-sm-1 -->
                                    </div>
                                    <!-- Add review -->
                                    <div class="row">
                                        <h2>ADD NEW REVIEW</h2>
                                        <p class="text-muted">YOUR RATING</p>
                                        <div class="product-rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star "></i> <i class="fa fa-star"></i> </div>
                                        <div class="row">
                                            <form class="form-horizontal">
                                                <fieldset>

                                                    <!-- Textarea -->
                                                    <div class="form-group">  

                                                        <div class="col-md-12">
                                                            <textarea class="form-control" id="request-description" name="request-description"></textarea>
                                                        </div>
                                                    </div>

                                                    <!-- Text input-->
                                                    <div class="form-group">

                                                        <div class="col-md-6">
                                                            <input id="full_name" name="full_name" type="text" placeholder="" class="form-control input-md" required="">

                                                        </div>

                                                        <div class="col-md-6">
                                                            <input id="service-request" name="service-request" type="text" placeholder="" class="form-control input-md" required="">

                                                        </div>
                                                    </div>


                                                    <!-- Button -->
                                                    <div class="form-group">
                                                        <div class="col-md-1 pull-right">
                                                            <button id="singlebutton" name="singlebutton" class="btn btn-primary">Send</button>
                                                        </div>
                                                    </div>

                                                </fieldset>
                                            </form>

                                        </div>

                                    </div>
                                    <!-- End Add review -->


                                    <!-- Like Product -->



                                    <!-- End Like Product -->


                                    <!-- Relate Product -->


                                    <!-- End Relate Product -->
                                </div>
                            </div>
                        </div>
                        <hr>

                    </div>

                </div>

                <!-- END TAB PILLS -->

                <!-- Relate Product -->

                <div class="container">
                    <div class="row">

                        <div class="col-md-3">
                            <h3>FEATURED</h3>
                            <div class="space"></div>
                            <hr>
                            <ul class="list-group">

                                <li class="row">
                                    <div class="col-md-3 thumbnail">
                                        <img src="img/image1xxl-110-90x90.jpg" alt=""/>

                                    </div>
                                    <div class="col-md-9 text-muted">
                                        <h5>BILLIONAIRE BOY</h5>
                                        <p>20.00</p>
                                    </div>
                                </li>
                                <li class="row">
                                    <div class="col-md-3 thumbnail">
                                        <img src="img/image1xxl-110-90x90.jpg" alt=""/>

                                    </div>
                                    <div class="col-md-9 text-muted">
                                        <h5>BILLIONAIRE BOY</h5>
                                        <p>20.00</p>
                                    </div>
                                </li>

                                <li class="row">
                                    <div class="col-md-3 thumbnail">
                                        <img src="img/image1xxl-110-90x90.jpg" alt=""/>

                                    </div>
                                    <div class="col-md-9 text-muted">
                                        <h5>BILLIONAIRE BOY</h5>
                                        <p>20.00</p>
                                    </div>
                                </li>

                                <li class="row">
                                    <div class="col-md-3 thumbnail">
                                        <img src="img/image1xxl-110-90x90.jpg" alt=""/>

                                    </div>
                                    <div class="col-md-9 text-muted">
                                        <h5>BILLIONAIRE BOY</h5>
                                        <p>20.00</p>
                                    </div>
                                </li>

                            </ul>
                        </div>
                        <div class="col-md-3">
                            <h3>NEW PRODUCTS</h3>
                            <div class="space"></div>
                            <hr>
                            <ul class="list-group">

                                <li class="row">
                                    <div class="col-md-3 thumbnail">
                                        <img src="img/image1xxl-110-90x90.jpg" alt=""/>

                                    </div>
                                    <div class="col-md-9 text-muted">
                                        <h5>BILLIONAIRE BOY</h5>
                                        <p>20.00</p>
                                    </div>
                                </li>
                                <li class="row">
                                    <div class="col-md-3 thumbnail">
                                        <img src="img/image1xxl-110-90x90.jpg" alt=""/>

                                    </div>
                                    <div class="col-md-9 text-muted">
                                        <h5>BILLIONAIRE BOY</h5>
                                        <p>20.00</p>
                                    </div>
                                </li>

                                <li class="row">
                                    <div class="col-md-3 thumbnail">
                                        <img src="img/image1xxl-110-90x90.jpg" alt=""/>

                                    </div>
                                    <div class="col-md-9 text-muted">
                                        <h5>BILLIONAIRE BOY</h5>
                                        <p>20.00</p>
                                    </div>
                                </li>

                                <li class="row">
                                    <div class="col-md-3 thumbnail">
                                        <img src="img/image1xxl-110-90x90.jpg" alt=""/>

                                    </div>
                                    <div class="col-md-9 text-muted">
                                        <h5>BILLIONAIRE BOY</h5>
                                        <p>20.00</p>
                                    </div>
                                </li>

                            </ul>
                        </div>
                        <div class="col-md-3">
                            <h3>ON-SALE</h3>
                            <div class="space"></div>
                            <hr>
                            <ul class="list-group text-center">

                                <li class="row">
                                    <div class="col-md-3 thumbnail">
                                        <img src="img/image1xxl-110-90x90.jpg" alt=""/>

                                    </div>
                                    <div class="col-md-9 text-muted  text-center">
                                        <h5>BILLIONAIRE BOY</h5>
                                        <p>20.00</p>
                                    </div>
                                </li>
                                <li class="row">
                                    <div class="col-md-3 thumbnail">
                                        <img src="img/image1xxl-110-90x90.jpg" alt=""/>

                                    </div>
                                    <div class="col-md-9 text-muted">
                                        <h5>BILLIONAIRE BOY</h5>
                                        <p>20.00</p>
                                    </div>
                                </li>

                                <li class="row">
                                    <div class="col-md-3 thumbnail">
                                        <img src="img/image1xxl-110-90x90.jpg" alt=""/>

                                    </div>
                                    <div class="col-md-9 text-muted">
                                        <h5>BILLIONAIRE BOY</h5>
                                        <p>20.00</p>
                                    </div>
                                </li>

                                <li class="row">
                                    <div class="col-md-3 thumbnail">
                                        <img src="img/image1xxl-110-90x90.jpg" alt=""/>

                                    </div>
                                    <div class="col-md-9 text-muted">
                                        <h5>BILLIONAIRE BOY</h5>
                                        <p>20.00</p>
                                    </div>
                                </li>

                            </ul>
                        </div>
                        <div class="col-md-3">
                            <h3>TOP RATED</h3>
                            <div class="space"></div>
                            <hr>
                            <ul class="list-group">

                                <li class="row">
                                    <div class="col-md-3 thumbnail">
                                        <img src="img/image1xxl-110-90x90.jpg" alt=""/>

                                    </div>
                                    <div class="col-md-9 text-muted">
                                        <h5>BILLIONAIRE BOY</h5>
                                        <p>20.00</p>
                                    </div>
                                </li>
                                <li class="row">
                                    <div class="col-md-3 thumbnail">
                                        <img src="img/image1xxl-110-90x90.jpg" alt=""/>

                                    </div>
                                    <div class="col-md-9 text-muted">
                                        <h5>BILLIONAIRE BOY</h5>
                                        <p>20.00</p>
                                    </div>
                                </li>

                                <li class="row">
                                    <div class="col-md-3 thumbnail">
                                        <img src="img/image1xxl-110-90x90.jpg" alt=""/>

                                    </div>
                                    <div class="col-md-9 text-muted">
                                        <h5>BILLIONAIRE BOY</h5>
                                        <p>20.00</p>
                                    </div>
                                </li>

                                <li class="row">
                                    <div class="col-md-3 thumbnail">
                                        <img src="img/image1xxl-110-90x90.jpg" alt=""/>

                                    </div>
                                    <div class="col-md-9 text-muted">
                                        <h5>BILLIONAIRE BOY</h5>
                                        <p>20.00</p>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>

                </div>
            </div>

            <!--End Relate Product -->
            
            
         


            <!-- /footer -->



        </div>






    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>

    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/cloud-zoom.1.0.2.min.js"></script>
    <script src="js/scripts.js"></script>
</div>
</body>


</html>