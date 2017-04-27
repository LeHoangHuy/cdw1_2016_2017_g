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
        $less->compileFile('less/858.less', 'css/858.css');
        ?>
        <link href="css/858.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>

    </head>

    <body>
        <div class="type-858">
		<!-- BEGIN TYPE-858 -->
            <div class="container">
                <div class="row">
                    <div class="col-md-6">

                    </div>

                    <div class="col-md-6">
                        <div class="product-detail">
                            <div class="title">
                                <div class="name">
                                    <h3>Black Bag</h3>
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
                                    <label>Model : </label>
                                    <span>PR00001013</span>
                                </p>
                                <p>
                                    <label>Manufacturer : </label>
                                    <a href="#">Prada</a>
                                </p>
                                <p>
                                    <label>Condition : </label>
                                    <span>New</span>
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
                                        <p>Nulla ut eros in sem faucibus interdum. Maecenas mollis condimentum velit, sed tristique justo sagittis non. Pellentesque at metus ac odio ultrices faucibus. Proin lobortis ante non justo elementum gravida. Donec justo purus, elementum non est quis, fermentum faucibus dolor. Pellentesque non sem et quam sodales feugiat eu at metus. Proin tincidunt et diam non placerat. Vestibulum porttitor sodales enim sit amet ultricies. Maecenas non aliquam dolor. Curabitur placerat enim eget nunc scelerisque placerat. Fusce convallis ipsum a orci ultrices, id adipiscing nibh viverra. Maecenas volutpat nisi et vehicula semper. Nullam venenatis sollicitudin pretium. Donec ultrices velit vehicula, aliquam eros eget, tincidunt massa. Donec faucibus in nisl sit amet suscipit.</p>
                                    </div>
                                    <div id="menu1" class="tab-pane fade">          
                                        <p>
                                            <img src="images/custom-tab.jpg" alt=""/>
                                        </p>
                                    </div>
                                    <div id="menu2" class="tab-pane fade">                                       
                                        <p><iframe src="https://www.youtube.com/embed/pasdC5q4GRA" frameborder="0" allowfullscreen></iframe></p>
                                    </div>
                                    <div id="menu3" class="tab-pane fade">                                      
                                        <div class="comment">                                              
                                            <h5>Grade : </h5>
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
                                                <h5>Date : 04/22/2014</h5>
                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="cmt">
                                                <h1>Good!</h1>
                                            </div>
                                            <div class="name">
                                                <span>John Lucas</span>
                                            </div>
                                        </div>

                                        <div class="comment">                                              
                                            <h5>Grade : </h5>
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
                                                <h5>Date : 07/14/2014</h5>
                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="cmt">
                                                <h1>Good!</h1>
                                            </div>
                                            <div class="name">
                                                <span>Kathy Simon</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="clearfix"></div>
                            <div class="addtocart">
                                <div class="col-md-4 col-sm-4 col-xs-12">
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
                                <div class="col-md-4 col-sm-4 col-xs-12">
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
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <span class="col-md-6 col-sm-6 col-xs-6">Quantity</span>
                                    <input type="text" value="1" class="col-md-6 col-sm-6 col-xs-6">
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="price">
                                <span class="col-md-4 col-sm-4 col-xs-4">$100.00</span> 
                                <a href="#" class="col-md-6 col-sm-6 col-xs-6">Add to cart</a>
                            </div>
                            <div class="clearfix"></div>
                            <div class="link">
                                <ul>
                                    <li><a href="#"><img src="images/logo-facebook.png" alt=""/></a></li>
                                    <li><a href="#"><img src="images/logo-twitter.png" alt=""/></a></li> 
                                    <li><a href="#"><img src="images/logo-print.png" alt=""/></a></li> 
                                    <li><a href="#"><img src="images/logo-email.jpg" alt=""/></a></li> 
                                    <li><a href="#"><img src="images/logo-add.png" alt=""/></a></li>
                                    <li class="addmywistlist"><a href="#"  class="fa fa-angle-double-right">Add to my wistlist</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!-- END TYPE-858 -->
    </div>
</body>

</html>