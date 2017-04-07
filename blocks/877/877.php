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
        $less->compileFile('less/877.less', 'css/877.css');
        ?>
        <link href="css/877.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>

    </head>

    <body>
        <div class="type-i-1">
            <div class="container">
                <div class="row">    
                    <div class="col-xs-12 col-sm-12 col-md-9">
                        <div class="type-i-21">
                            <div class="content_scene_cat">
                                <div>
                                    <img class="cat_image" src="images/1.1.jpg" alt=""/>
                                </div>
                                <div class="cat_desc ">
                                    <h2 > Women</h2>
                                    <div class="texts">Etiam elementum consectetur felis ut<br>
                                        ullamcorper. Sed viverra efficitur leo, nec egestas<br>
                                        metus tempus sit amet.
                                    </div> 
                                </div>
                            </div>
                            <div class="content_sortPagiBar">
                                <div class="sort">
                                    <div class="views_float">
                                        <form method="post" action="#" class="compare-form"> 
                                            <button type="submit" class="smooth02" disabled="disabled"> 
                                                <span>Compare (<strong >0</strong>)
                                                    <i class="icon-chevron-right right"></i>
                                                </span>
                                            </button> 

                                        </form>
                                        <form  action="#" class="productsSortForm">
                                            <div class="select"> 
                                                <label for="selectProductSort">Sort by</label>
                                                <p class="selector" id="uniform-selectProductSort" style="width: 148px; height: 23px;">
                                                    <select id="" class="selectProductSort">
                                                        <option value="position:desc" selected="selected">--</option>
                                                        <option value="price:asc">Price: Lowest first</option>
                                                        <option value="price:desc">Price: Highest first</option>
                                                        <option value="name:asc">Product Name: A to Z</option>
                                                        <option value="name:desc">Product Name: Z to A</option>
                                                        <option value="quantity:desc">In stock</option>
                                                        <option value="reference:asc">Reference: Lowest first</option>
                                                        <option value="reference:desc">Reference: Highest first</option>
                                                    </select>
                                                </p>  
                                            </div>
                                        </form>
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a class=" grid-1"  data-toggle="tab" href="#grid">
                                                    <i class="glyphicon glyphicon-th-large"></i>
                                                    <p>Grid</p></a></li>
                                            <li><a class="grid-2" data-toggle="tab" href="#list">
                                                    <i class="glyphicon glyphicon-menu-hamburger"></i>
                                                    <p>List</p>
                                                </a></li>  
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="tab-content">
                                    <div id="grid" class="tab-pane fade in active">
                                        <div class="sp">
                                            <div class="row"> 

                                                <div class="col-md-3  col-sm-6 col-xs-12">
                                                    <div class="one">
                                                        <div class="ima" href="../tuan5/type-i-2/trunk/type-i-2.php">
                                                            <img class="image" src="images/2.1.jpg" alt=""/>
                                                            <div class="olay">
                                                                <img class="image1" src="images/2.2.jpg" alt=""/>
                                                            </div>
                                                        </div>
                                                        <h3 class="ellipsis">
                                                            <a href="#"> Black Bag </a>
                                                        </h3>
                                                        <div class="item">
                                                            <span class="product-price"> $100.00</span>
                                                            <div class="olay1">
                                                                <a class="btn-add" href="#">ADD TO CART </a>    
                                                                <a class="btn-search" href="#"><i class="glyphicon glyphicon-search"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3  col-sm-6 col-xs-12">
                                                    <div class="one">
                                                        <div class="ima" href="#">
                                                            <img class="image" src="images/3.1.jpg" alt=""/>
                                                            <div class="olay">
                                                                <img class="image1" src="images/3.2.jpg" alt=""/>
                                                            </div>
                                                        </div>
                                                        <h3 class="ellipsis">
                                                            <a  href="#"> Black Bag </a>
                                                        </h3>
                                                        <div class="item">
                                                            <span class="product-price"> $100.00</span>
                                                            <div class="olay1">
                                                                <a class="btn-add" href="#">ADD TO CART </a>    
                                                                <a class="btn-search" href="#"><i class="glyphicon glyphicon-search"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-xs-12 ">
                                                    <div class="one">
                                                        <div class="ima" href="#">
                                                            <img class="image" src="images/4.1.jpg" alt=""/>
                                                            <div class="olay">
                                                                <img class="image1" src="images/4.2.jpg" alt=""/>
                                                            </div>
                                                        </div>
                                                        <h3 class="ellipsis">
                                                            <a  href="#"> Black Bag </a>
                                                        </h3>
                                                        <div class="item">
                                                            <span class="product-price"> $100.00</span>
                                                            <div class="olay1">
                                                                <a class="btn-add" href="#">ADD TO CART </a>    
                                                                <a class="btn-search" href="#"><i class="glyphicon glyphicon-search"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-xs-12 ">
                                                    <div class="one">
                                                        <div class="ima" href="#">
                                                            <img class="image" src="images/5.1.jpg" alt=""/>
                                                            <div class="olay">
                                                                <img class="image1" src="images/5.2.jpg" alt=""/>
                                                            </div>
                                                        </div>
                                                        <h3 class="ellipsis">
                                                            <a  href="#"> Black Bag </a>
                                                        </h3>
                                                        <div class="item">
                                                            <span class="product-price"> $100.00</span>
                                                            <div class="olay1">
                                                                <a class="btn-add" href="#">ADD TO CART </a>    
                                                                <a class="btn-search" href="#"><i class="glyphicon glyphicon-search"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3  col-sm-6 col-xs-12">
                                                    <div class="one">
                                                        <div class="ima" href="../tuan5/type-i-2/trunk/type-i-2.php">
                                                            <img class="image" src="images/2.1.jpg" alt=""/>
                                                            <div class="olay">
                                                                <img class="image1" src="images/2.2.jpg" alt=""/>
                                                            </div>
                                                        </div>
                                                        <h3 class="ellipsis">
                                                            <a href="#"> Black Bag </a>
                                                        </h3>
                                                        <div class="item">
                                                            <span class="product-price"> $100.00</span>
                                                            <div class="olay1">
                                                                <a class="btn-add" href="#">ADD TO CART </a>    
                                                                <a class="btn-search" href="#"><i class="glyphicon glyphicon-search"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3  col-sm-6 col-xs-12">
                                                    <div class="one">
                                                        <div class="ima" href="#">
                                                            <img class="image" src="images/3.1.jpg" alt=""/>
                                                            <div class="olay">
                                                                <img class="image1" src="images/3.2.jpg" alt=""/>
                                                            </div>
                                                        </div>
                                                        <h3 class="ellipsis">
                                                            <a  href="#"> Black Bag </a>
                                                        </h3>
                                                        <div class="item">
                                                            <span class="product-price"> $100.00</span>
                                                            <div class="olay1">
                                                                <a class="btn-add" href="#">ADD TO CART </a>    
                                                                <a class="btn-search" href="#"><i class="glyphicon glyphicon-search"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-xs-12 ">
                                                    <div class="one">
                                                        <div class="ima" href="#">
                                                            <img class="image" src="images/4.1.jpg" alt=""/>
                                                            <div class="olay">
                                                                <img class="image1" src="images/4.2.jpg" alt=""/>
                                                            </div>
                                                        </div>
                                                        <h3 class="ellipsis">
                                                            <a  href="#"> Black Bag </a>
                                                        </h3>
                                                        <div class="item">
                                                            <span class="product-price"> $100.00</span>
                                                            <div class="olay1">
                                                                <a class="btn-add" href="#">ADD TO CART </a>    
                                                                <a class="btn-search" href="#"><i class="glyphicon glyphicon-search"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-xs-12 ">
                                                    <div class="one">
                                                        <div class="ima" href="#">
                                                            <img class="image" src="images/5.1.jpg" alt=""/>
                                                            <div class="olay">
                                                                <img class="image1" src="images/5.2.jpg" alt=""/>
                                                            </div>
                                                        </div>
                                                        <h3 class="ellipsis">
                                                            <a  href="#"> Black Bag </a>
                                                        </h3>
                                                        <div class="item">
                                                            <span class="product-price"> $100.00</span>
                                                            <div class="olay1">
                                                                <a class="btn-add" href="#">ADD TO CART </a>    
                                                                <a class="btn-search" href="#"><i class="glyphicon glyphicon-search"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3  col-sm-6 col-xs-12">
                                                    <div class="one">
                                                        <div class="ima" href="../tuan5/type-i-2/trunk/type-i-2.php">
                                                            <img class="image" src="images/2.1.jpg" alt=""/>
                                                            <div class="olay">
                                                                <img class="image1" src="images/2.2.jpg" alt=""/>
                                                            </div>
                                                        </div>
                                                        <h3 class="ellipsis">
                                                            <a href="#"> Black Bag </a>
                                                        </h3>
                                                        <div class="item">
                                                            <span class="product-price"> $100.00</span>
                                                            <div class="olay1">
                                                                <a class="btn-add" href="#">ADD TO CART </a>    
                                                                <a class="btn-search" href="#"><i class="glyphicon glyphicon-search"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3  col-sm-6 col-xs-12">
                                                    <div class="one">
                                                        <div class="ima" href="#">
                                                            <img class="image" src="images/3.1.jpg" alt=""/>
                                                            <div class="olay">
                                                                <img class="image1" src="images/3.2.jpg" alt=""/>
                                                            </div>
                                                        </div>
                                                        <h3 class="ellipsis">
                                                            <a  href="#"> Black Bag </a>
                                                        </h3>
                                                        <div class="item">
                                                            <span class="product-price"> $100.00</span>
                                                            <div class="olay1">
                                                                <a class="btn-add" href="#">ADD TO CART </a>    
                                                                <a class="btn-search" href="#"><i class="glyphicon glyphicon-search"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-xs-12 ">
                                                    <div class="one">
                                                        <div class="ima" href="#">
                                                            <img class="image" src="images/4.1.jpg" alt=""/>
                                                            <div class="olay">
                                                                <img class="image1" src="images/4.2.jpg" alt=""/>
                                                            </div>
                                                        </div>
                                                        <h3 class="ellipsis">
                                                            <a  href="#"> Black Bag </a>
                                                        </h3>
                                                        <div class="item">
                                                            <span class="product-price"> $100.00</span>
                                                            <div class="olay1">
                                                                <a class="btn-add" href="#">ADD TO CART </a>    
                                                                <a class="btn-search" href="#"><i class="glyphicon glyphicon-search"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-xs-12 ">
                                                    <div class="one">
                                                        <div class="ima" href="#">
                                                            <img class="image" src="images/5.1.jpg" alt=""/>
                                                            <div class="olay">
                                                                <img class="image1" src="images/5.2.jpg" alt=""/>
                                                            </div>
                                                        </div>
                                                        <h3 class="ellipsis">
                                                            <a  href="#"> Black Bag </a>
                                                        </h3>
                                                        <div class="item">
                                                            <span class="product-price"> $100.00</span>
                                                            <div class="olay1">
                                                                <a class="btn-add" href="#">ADD TO CART </a>    
                                                                <a class="btn-search" href="#"><i class="glyphicon glyphicon-search"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div id="list" class="tab-pane fade">
                                        <div class="sp">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <div class="one">
                                                        <a class="ima" href="#">
                                                            <img class="image" src="images/2.1.jpg" alt=""/>
                                                            <div class="olay">
                                                                <img class="image1" src="images/2.2.jpg" alt=""/>
                                                            </div>
                                                        </a>
                                                        <h3 class="ellipsis">
                                                            <a href="#"> Black Bag </a>
                                                        </h3>
                                                        <div class="item">
                                                            <span class="product-price"> $100.00</span>
                                                            <div class="olay1">
                                                                <a class="btn-add" href="#">ADD TO CART </a>    
                                                                <a class="btn-search" href="#"><i class="glyphicon glyphicon-search"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <img class="image" src="images/2.2.jpg" alt=""/>
                                                </div>
                                                <div class="col-sm-3">
                                                    <img class="image" src="images/2.1.jpg" alt=""/>
                                                </div>
                                                <div class="col-sm-3">
                                                    <img class="image" src="images/2.1.jpg" alt=""/>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="type-2">
                                <div class="content_sortPagiBar">
                                    <div class="sort">
                                        <div class="views_float"> 
                                            <form action="#" class="productsSortForm">
                                                <div class="select"> 
                                                    <label  class="lmromandemi"> SHOW </label>

                                                    <p class="selector" id="uniform-selectProductSort">
                                                        <select id="" class="selectProductSort">
                                                            <option value="position:desc" selected="selected">12</option>
                                                            <option value="price:asc">24</option>
                                                            <option value="price:desc">60</option>
                                                            <option value="name:asc">93</option>
                                                        </select>
                                                    </p>
                                                    <div class="btn-show1">
                                                        <a class="btn-show" href="#">SHOW ALL </a>    
                                                    </div>
                                                    <div class="phantrang">
                                                        <ul class="pt"> 
                                                            <li class="active">1</li>
                                                            <li><a href="#">2</a></li>
                                                            <li><a href="#">3</a></li>
                                                            <li><a href="#">...</a></li>
                                                            <li><a href="#">9</a></li>
                                                            <li class="next"><a href="#">Next »</a></li>
                                                        </ul>
                                                    </div>  
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="js/scripts.js" type="text/javascript"></script>
    </body>

</html>