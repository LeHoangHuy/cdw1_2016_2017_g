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
        $less->compileFile('less/type-I-7.less', 'css/type-3.css');
        ?>
        <link href="css/type-3.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>

    </head>

    <body>
        <div class="type-I-7">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                    </div>

                    <div class="col-sm-9">
                        <ul class="product_list">
                            <div class="product-image-container">
                                <div class="hinh">
                                    <a class="product_img_link" href=""> 
                                        <img class="img0"src="images/black-bag.png" width="213"height="352"> 
                                        <div class="olay">
                                            <img class="img1"src="images/black-bag1.png" />
                                        </div>
                                        <span class="flags"><span class="new">New</span></span>
                                        <div class="compare"> 
                                            <a class="add_to_compare" href="#">Add to Compare</a>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="product-info">
                                <h3> <a  href="#"> Black Bag </a></h3>
                                <p class="product-desc"> Nulla ut eros in sem faucibus interdum. Maecenas mollis condimentum velit, sed tristique justo sagittis non. Pellentesque at metus ac odio ultrices faucibus. Proin lobortis ante non justo</p>
                            </div>
                            <div class="right_block">
                                <div class="button-container"> 
                                    <a class="button btn btn-default" href="#">ADD TO CART   </a>
                                </div>
                                <div class="search">
                                    <a class="glyphicon glyphicon-search" href="#"></a>
                                </div>
                                <div class="price"> $100.00</div>
                            </div>

                            <div class="clearfix"></div>
                        </ul>
                        
                        <div class="type-2">
                            <div class="content_sortPagiBar">
                                <div class="sort">
                                    <div class="views_float"> 
                                        <form id="" action="#" class="productsSortForm">
                                            <div class="select"> 
                                                <label  class="lmromandemi"> SHOW </label>

                                                <p class="selector" >
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
    </body>

</html>