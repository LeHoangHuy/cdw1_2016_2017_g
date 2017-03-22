<!DOCTYPE html>
<head>
    <?php
    if (!class_exists('lessc')) {
        include ('libs/lessc.inc.php');
    }
    $less = new lessc;
    $less->compileFile('less/type-1-list-product.less', 'css/type-1-list-product.css');
    $less->compileFile('less/type-1-list-banner.less', 'css/type-1-list-banner.css');
    $less->compileFile('less/styles.less', 'css/styles.css');
    ?>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/styles.css" rel="stylesheet" type="text/css"/>
    <link href="css/type-1-list-product.css" rel="stylesheet" type="text/css"/>
    <link href="css/type-1-list-banner.css" rel="stylesheet" type="text/css"/>
    <script src="js/jquery-1.11.0.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
</head>
<body>
    <div class="zaro">
        <div id="pattent" class="slidelip white-background"> 
            <div class="container container-modify margin-auto header"> 

                <!--BANNER-->
                <div class="breadcrumb clearfix"> 
                    <a href="#" title="return to Home" itemprop="url">Home</a> 
                    <span class="navigation-pipe">&gt;</span>
                    <span class="navigation_page">Women</span>
                </div>  
                <div class="banner-list">
                    <div class="col-md-9 col-sm-8 center-containt">
                        <h1 class="page-heading product-listing"> Women&nbsp;</h1>
                        <div class="content_scene_cat">
                            <div class="content_scene_cat_bg">
                                <img class="cat_image img-responsive" src="images/women.jpg" alt="" title="Etiam elementum consectetur felis ut ullamcorper. Sed viverra efficitur leo, nec egestas metus tempus sit amet.">
                                <div class="cat_desc background-light">
                                    <h2 class="category-name trajan"> Women</h2>
                                    <div>Etiam elementum consectetur felis ut ullamcorper. Sed viverra efficitur leo, nec egestas metus tempus sit amet.</div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="content_sortPagiBar">
                            <div class="sortPagiBar clearfix">
                                <div class="views_float">
                                    <form method="post" class="compare-form">
                                        <button type="submit" class="smooth02 btn btn-default button button-medium bt_compare bt_compare" > 
                                            <span>Compare (<strong class="total-compare-val">0</strong>)<i class="icon-chevron-right right"></i></span>
                                        </button>

                                    </form>
                                    <form id="productsSortForm" class="productsSortForm">
                                        <p class="select">
                                            <label for="selectProductSort">Sort by</label>
                                        </p>
                                        <div class="selector" style="width: 148px;">
                                            <a class="btn btn-default btn-select">
                                                <input type="hidden" class="btn-select-input" id="" name="" value="" />
                                                <span class="btn-select-value">Select an Item</span>
                                                <span class="fa fa-sort-desc"></span>
                                                <ul class="dropdown-menu">
                                                    <li>--</li>
                                                    <li>Option 2</li>
                                                    <li>Option 3</li>
                                                    <li>Option 4</li>
                                                </ul>
                                            </a>
                                        </div> 
                                    </form>
                                </div>
                                <div class="views-list">
                                    <span id="grid-show">
                                        <span class="fa fa-th view_btn dib active smooth02 act_btn" title="grid"></span>
                                        <span class="grid_title"title="grid"><a href="#">Grid</a></span>
                                    </span>
                                    <span id="list-show" >
                                        <span class="fa fa-list view_btn dib smooth02" title="list"></span>
                                        <span class="list_title"title="list"><a href="#">List</a></span>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="listting-views">
                            <div class="list-products product-grid">  
                                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-6 item-product">
                                    <div class="box-product">
                                        <div class="box-contain"> 
                                            <a href="#select"><div id="select" class="compare"></div> </a>
                                            <div class="box-img ">
                                                <img class="img-responsive" src="images/slide1/calvin-klein-white-cap-colorblock (1).jpg">
                                                <img class="img-responsive" src="images/slide1/calvin-klein-white-cap-colorblock.jpg">
                                            </div>
                                        </div>
                                        <div class="box-details ellipsis">
                                            <a class="product-name clearfix " href="details">Product Design & Manufacturing</a>
                                            <p class="product-details" style="display: none">Product Design & Manufacturing</p>
                                        </div>
                                        <div class="box-bottom">
                                            <div class="add-to-cart"> 
                                                <div>
                                                    <a class="btn-add" href="#"><i class="text-cart">Add To Cart</i><i class="fa fa-shopping-cart"></i></a>
                                                </div>
                                                <div>
                                                    <a class="btn-cart" href="#"><i class="fa fa-shopping-bag"></i></a>
                                                </div>
                                                <div>
                                                    <a class="btn-search" href="#"><i class="fa fa-search"></i></a>
                                                </div>
                                            </div>
                                            <div class="price"><span> 77,00 €</span> </div>
                                        </div>
                                    </div>
                                </div> 
                                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-6 item-product">
                                    <div class="box-product">
                                        <div class="box-contain"> 
                                            <a href="#select"><div id="select" class="compare"></div> </a>
                                            <div class="box-img ">
                                                <img class="img-responsive" src="images/slide1/dress-mark-james-badgley-mischka-sweetheart (1).jpg">
                                                <img class="img-responsive" src="images/slide1/dress-mark-james-badgley-mischka-sweetheart.jpg">
                                            </div>
                                        </div>
                                        <div class="box-details ellipsis">
                                            <a class="product-name clearfix " href="details">Product Design & Manufacturing</a>
                                            <p class="product-details" style="display: none">Product Design & Manufacturing</p>
                                        </div>
                                        <div class="box-bottom">
                                            <div class="add-to-cart"> 
                                                <div>
                                                    <a class="btn-add" href="#"><i class="text-cart">Add To Cart</i><i class="fa fa-shopping-cart"></i></a>
                                                </div>
                                                <div>
                                                    <a class="btn-cart" href="#"><i class="fa fa-shopping-bag"></i></a>
                                                </div>
                                                <div>
                                                    <a class="btn-search" href="#"><i class="fa fa-search"></i></a>
                                                </div>
                                            </div>
                                            <div class="price"><span> 77,00 €</span> </div>
                                        </div>
                                    </div>
                                </div> 
                                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-6 item-product">
                                    <div class="box-product">
                                        <div class="box-contain"> 
                                            <a href="#select"><div id="select" class="compare"></div> </a>
                                            <div class="box-img ">
                                                <img class="img-responsive" src="images/slide1/halston-heritage-au-naturale (1).jpg">
                                                <img class="img-responsive" src="images/slide1/halston-heritage-au-naturale.jpg">
                                            </div>
                                        </div>
                                        <div class="box-details ellipsis">
                                            <a class="product-name clearfix " href="details">Product Design & Manufacturing</a>
                                            <p class="product-details" style="display: none">Product Design & Manufacturing</p>
                                        </div>
                                        <div class="box-bottom">
                                            <div class="add-to-cart"> 
                                                <div>
                                                    <a class="btn-add" href="#"><i class="text-cart">Add To Cart</i><i class="fa fa-shopping-cart"></i></a>
                                                </div>
                                                <div>
                                                    <a class="btn-cart" href="#"><i class="fa fa-shopping-bag"></i></a>
                                                </div>
                                                <div>
                                                    <a class="btn-search" href="#"><i class="fa fa-search"></i></a>
                                                </div>
                                            </div>
                                            <div class="price"><span> 77,00 €</span> </div>
                                        </div>
                                    </div>
                                </div> 
                                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-6 item-product">
                                    <div class="box-product">
                                        <div class="box-contain"> 
                                            <a href="#select"><div id="select" class="compare"></div> </a>
                                            <div class="box-img ">
                                                <img class="img-responsive" src="images/slide1/lilly-pulitzer-embroidered-blossom.jpg">
                                                <img class="img-responsive" src="images/slide1/lilly-pulitzer-embroidered-blossom1.jpg">
                                            </div>
                                        </div>
                                        <div class="box-details ellipsis">
                                            <a class="product-name clearfix " href="details">Product Design & Manufacturing</a>
                                            <p class="product-details" style="display: none">Product Design & Manufacturing</p>
                                        </div>
                                        <div class="box-bottom">
                                            <div class="add-to-cart"> 
                                                <div>
                                                    <a class="btn-add" href="#"><i class="text-cart">Add To Cart</i><i class="fa fa-shopping-cart"></i></a>
                                                </div>
                                                <div>
                                                    <a class="btn-cart" href="#"><i class="fa fa-shopping-bag"></i></a>
                                                </div>
                                                <div>
                                                    <a class="btn-search" href="#"><i class="fa fa-search"></i></a>
                                                </div>
                                            </div>
                                            <div class="price"><span> 77,00 €</span> </div>
                                        </div>
                                    </div>
                                </div> 
                                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-6 item-product">
                                    <div class="box-product">
                                        <div class="box-contain"> 
                                            <a href="#select"><div id="select" class="compare"></div> </a>
                                            <div class="box-img ">
                                                <img class="img-responsive" src="images/slide1/ports-1961-galaxy-shine (1).jpg">
                                                <img class="img-responsive" src="images/slide1/ports-1961-galaxy-shine.jpg">
                                            </div>
                                        </div>
                                        <div class="box-details ellipsis">
                                            <a class="product-name clearfix " href="details">Product Design & Manufacturing</a>
                                            <p class="product-details" style="display: none">Product Design & Manufacturing</p>
                                        </div>
                                        <div class="box-bottom">
                                            <div class="add-to-cart"> 
                                                <div>
                                                    <a class="btn-add" href="#"><i class="text-cart">Add To Cart</i><i class="fa fa-shopping-cart"></i></a>
                                                </div>
                                                <div>
                                                    <a class="btn-cart" href="#"><i class="fa fa-shopping-bag"></i></a>
                                                </div>
                                                <div>
                                                    <a class="btn-search" href="#"><i class="fa fa-search"></i></a>
                                                </div>
                                            </div>
                                            <div class="price"><span> 77,00 €</span> </div>
                                        </div>
                                    </div>
                                </div> 
                                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-6 item-product">
                                    <div class="box-product">
                                        <div class="box-contain"> 
                                            <a href="#select"><div id="select" class="compare"></div> </a>
                                            <div class="box-img ">
                                                <img class="img-responsive" src="images/slide1/calvin-klein-white-cap-colorblock (1).jpg">
                                                <img class="img-responsive" src="images/slide1/calvin-klein-white-cap-colorblock.jpg">
                                            </div>
                                        </div>
                                        <div class="box-details ellipsis">
                                            <a class="product-name clearfix " href="details">Product Design & Manufacturing</a>
                                            <p class="product-details" style="display: none">Product Design & Manufacturing</p>
                                        </div>
                                        <div class="box-bottom">
                                            <div class="add-to-cart"> 
                                                <div>
                                                    <a class="btn-add" href="#"><i class="text-cart">Add To Cart</i><i class="fa fa-shopping-cart"></i></a>
                                                </div>
                                                <div>
                                                    <a class="btn-cart" href="#"><i class="fa fa-shopping-bag"></i></a>
                                                </div>
                                                <div>
                                                    <a class="btn-search" href="#"><i class="fa fa-search"></i></a>
                                                </div>
                                            </div>
                                            <div class="price"><span> 77,00 €</span> </div>
                                        </div>
                                    </div>
                                </div> 
                                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-6 item-product">
                                    <div class="box-product">
                                        <div class="box-contain"> 
                                            <a href="#select"><div id="select" class="compare"></div> </a>
                                            <div class="box-img ">
                                                <img class="img-responsive" src="images/slide1/dress-mark-james-badgley-mischka-sweetheart (1).jpg">
                                                <img class="img-responsive" src="images/slide1/dress-mark-james-badgley-mischka-sweetheart.jpg">
                                            </div>
                                        </div>
                                        <div class="box-details ellipsis">
                                            <a class="product-name clearfix " href="details">Product Design & Manufacturing</a>
                                            <p class="product-details" style="display: none">Product Design & Manufacturing</p>
                                        </div>
                                        <div class="box-bottom">
                                            <div class="add-to-cart"> 
                                                <div>
                                                    <a class="btn-add" href="#"><i class="text-cart">Add To Cart</i><i class="fa fa-shopping-cart"></i></a>
                                                </div>
                                                <div>
                                                    <a class="btn-cart" href="#"><i class="fa fa-shopping-bag"></i></a>
                                                </div>
                                                <div>
                                                    <a class="btn-search" href="#"><i class="fa fa-search"></i></a>
                                                </div>
                                            </div>
                                            <div class="price"><span> 77,00 €</span> </div>
                                        </div>
                                    </div>
                                </div> 
                                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-6 item-product">
                                    <div class="box-product">
                                        <div class="box-contain"> 
                                            <a href="#select"><div id="select" class="compare"></div> </a>
                                            <div class="box-img ">
                                                <img class="img-responsive" src="images/slide1/halston-heritage-au-naturale (1).jpg">
                                                <img class="img-responsive" src="images/slide1/halston-heritage-au-naturale.jpg">
                                            </div>
                                        </div>
                                        <div class="box-details ellipsis">
                                            <a class="product-name clearfix " href="details">Product Design & Manufacturing</a>
                                            <p class="product-details" style="display: none">Product Design & Manufacturing</p>
                                        </div>
                                        <div class="box-bottom">
                                            <div class="add-to-cart"> 
                                                <div>
                                                    <a class="btn-add" href="#"><i class="text-cart">Add To Cart</i><i class="fa fa-shopping-cart"></i></a>
                                                </div>
                                                <div>
                                                    <a class="btn-cart" href="#"><i class="fa fa-shopping-bag"></i></a>
                                                </div>
                                                <div>
                                                    <a class="btn-search" href="#"><i class="fa fa-search"></i></a>
                                                </div>
                                            </div>
                                            <div class="price"><span> 77,00 €</span> </div>
                                        </div>
                                    </div>
                                </div> 
                                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-6 item-product">
                                    <div class="box-product">
                                        <div class="box-contain"> 
                                            <a href="#select"><div id="select" class="compare"></div> </a>
                                            <div class="box-img ">
                                                <img class="img-responsive" src="images/slide1/lilly-pulitzer-embroidered-blossom.jpg">
                                                <img class="img-responsive" src="images/slide1/lilly-pulitzer-embroidered-blossom1.jpg">
                                            </div>
                                        </div>
                                        <div class="box-details ellipsis">
                                            <a class="product-name clearfix " href="details">Product Design & Manufacturing</a>
                                            <p class="product-details" style="display: none">Product Design & Manufacturing</p>
                                        </div>
                                        <div class="box-bottom">
                                            <div class="add-to-cart"> 
                                                <div>
                                                    <a class="btn-add" href="#"><i class="text-cart">Add To Cart</i><i class="fa fa-shopping-cart"></i></a>
                                                </div>
                                                <div>
                                                    <a class="btn-cart" href="#"><i class="fa fa-shopping-bag"></i></a>
                                                </div>
                                                <div>
                                                    <a class="btn-search" href="#"><i class="fa fa-search"></i></a>
                                                </div>
                                            </div>
                                            <div class="price"><span> 77,00 €</span> </div>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="pag">
                            <ul class="pagination">
                                <li><a href="#">Show All</a></li>
                                <li class="disabled"><a href="#">«</a></li>
                                <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li> 
                                <li><a href="#">»</a></li>
                            </ul>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <script>
            $(document).ready(function () {
                //GRID AND LIST
                $('#list-show').click(function () {

                    $('.list-products').removeClass("product-grid");
                    $('.list-products').addClass("product-list");
                    $('.list-products .item-product').addClass("full-width");
                    $('.list-products .box-contain').addClass("col-md-3 col-sm-3 col-xs-3");
                    $('.list-products .box-details').addClass("col-md-6 col-sm-6 col-xs-6");
                    $('.list-products .box-bottom').addClass("col-md-3 col-sm-3 col-xs-3");
                    $('.list-products .product-details').attr("style", "display:block;");
                });
                $('#grid-show').click(function () {
                    $('.list-products').addClass("product-grid");
                    $('.list-products').removeClass("product-list");
                    $('.list-products .item-product').removeClass("full-width");
                    $('.list-products .box-contain').removeClass("col-md-3 col-sm-3 col-xs-3");
                    $('.list-products .box-details').removeClass("col-md-6 col-sm-6 col-xs-6");
                    $('.list-products .box-bottom').removeClass("col-md-3 col-sm-3 col-xs-3");
                    $('.list-products .product-details').attr("style", "display:none;");
                });
 
            });

        </script>
        <script src="js/script.js" type="text/javascript"></script>
</body>
