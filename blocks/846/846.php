<!DOCTYPE html>
<html style="background-color: #f3f3f4;">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/846.less', 'css/846.css');
        ?>
        <link href="css/846.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="type-846">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                    </div>
                    <div class="col-md-6">
                        <div class="product-detail">
                            <div class="title">
                                <div class="name">
                                    <h3>Lilly Pulitzer Embroidered Blossom</h3>
                                </div>
                                <div class="rating">
                                    <ul>
                                        <li><a href="#"><span class="fa fa-star"></span></a></li>
                                        <li><a href="#"><span class="fa fa-star"></span></a></li>
                                        <li><a href="#"><span class="fa fa-star"></span></a></li>
                                        <li><a href="#"><span class="fa fa-star"></span></a></li>
                                        <li><a href="#" style="color: #d1d1d1;"><span class="fa fa-star"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="description">
                                <p>
                                    <label>Model: </label>
                                    <span>PR0000181</span>
                                </p>
                                <p>
                                    <label>Manufacturer: </label>
                                    <a href="#">Nicole Miller</a>
                                </p>
                                <p>
                                    <label>Condition: </label>
                                    <span>New</span>
                                </p>
                                <p>
                                    <label>Availability: </label>
                                    <span><strong>YES</strong> (996 items in stock)</span>
                                </p>
                            </div>
                            <div class="clearfix"></div>
                            <div class="menu-tab">
                                <ul class="nav nav-pills">
                                    <li class="active"><a data-toggle="pill" href="#home">More info</a></li>
                                    <li><a data-toggle="pill" href="#menu1">Custom Tab</a></li>
                                    <li><a data-toggle="pill" href="#menu2">Video</a></li>
                                    <li><a data-toggle="pill" href="#menu3">Comments</a></li>              
                                </ul>
                                <div class="tab-content tab-info">
                                    <div id="home" class="tab-pane fade in active">
                                        <p>Eorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean quis leo sit amet diam ullamcorper ullamcorper. In eleifend luctus interdum. Cras vel eleifend neque. Phasellus eget est lacus, et aliquet arcu. Morbi vitae sapien</p>
                                        <ul>
                                            <li>Color - White;</li>
                                            <li>100% micro modal;</li>
                                            <li>Ruched knot decoration at the chest;</li>
                                            <li>Unlined;</li>
                                        </ul>
                                        <p>Morbi vitae sapien in elit cursus auctor. Sed lectus nisi, commodo vel hendrerit vel, cursus non sapien. Nullam nec velit ante, vitae placerat odio. Duis sodales nisi ac nunc vestibulum gravida. Phasellus auctor tellus felis, ac cursus ligula.</p>
                                    </div>
                                    <div id="menu1" class="tab-pane fade">          
                                        <div class="row">
                                            <img src="images/custom-tab.jpg" alt=""/>
                                        </div>
                                    </div>
                                    <div id="menu2" class="tab-pane fade">                                       
                                        <p><iframe src="https://www.youtube.com/embed/pasdC5q4GRA" frameborder="0" allowfullscreen></iframe></p>
                                    </div>
                                    <div id="menu3" class="tab-pane fade">                                      
                                        <div class="comment">                                              
                                            <h5>Grade: </h5>
                                            <div class="rate">
                                                <ul>
                                                    <li><span class="fa fa-star"></span></li>
                                                    <li><span class="fa fa-star"></span></li>
                                                    <li><span class="fa fa-star"></span></li>
                                                    <li><span class="fa fa-star"></span></li>
                                                    <li><span class="fa fa-star"></span></li>
                                                </ul>
                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="time">
                                                <h5>a sdasd 02/25/2015</h5>
                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="cmt">
                                                <h1>asdasd</h1>
                                            </div>
                                            <div class="name">
                                                <span>asd asd asd</span>
                                            </div>
                                        </div>
                                        <div class="comment">                                              
                                            <h5>Grade: </h5>
                                            <div class="rate">
                                                <ul>
                                                    <li><span class="fa fa-star"></span></li>
                                                    <li><span class="fa fa-star"></span></li>
                                                    <li><span class="fa fa-star"></span></li>
                                                    <li class="star-empty"><span class="fa fa-star"></span></li>
                                                    <li class="star-empty"><span class="fa fa-star"></span></li>
                                                </ul>
                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="time">
                                                <h5>권익한 08/27/2014</h5>
                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="cmt">
                                                <h1>테스트 테스트</h1>
                                            </div>
                                            <div class="name">
                                                <span>테스트ㅡ</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="addtocart">
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <div class="row">
                                        <div class="cbb-size">
                                            <span> Size : </span>
                                            <select>
                                                <option>S</option>
                                                <option>M</option>
                                                <option>L</option>
                                                <option>XL</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <div class="row">
                                        <div class="cbb-color">
                                            <span> Color : </span>
                                            <select>
                                                <option>Red</option>
                                                <option>Blue</option>
                                                <option>Black</option>
                                                <option>White</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="quantity">
                                    <span>Quantity</span>
                                    <input type="text" value="1">
                                </div>

                            </div>
                            <div class="clearfix"></div>
                            <div class="price">
                                <span >$804.00</span> 
                                <a href="#">Add to cart</a>
                            </div>
                            <div class="clearfix"></div>
                            <div class="link">
                                <ul>
                                    <li><a href="#"><img src="images/logo-facebook.png" alt=""/></a></li>
                                    <li><a href="#"><img src="images/logo-twitter.png" alt=""/></a></li> 
                                    <li><a href="#"><img src="images/logo-print.png" alt=""/></a></li> 
                                    <li><a href="#"><img src="images/logo-email.jpg" alt=""/></a></li> 
                                    <li><a href="#"><img src="images/logo-add.png" alt=""/></a></li>
                                    <li class="addmywistlist"><a href="#" class="fa fa-angle-double-right">Add to my wistlist</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>