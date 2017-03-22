<!DOCTYPE html>
<html>
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
        $less->compileFile('less/841.less', 'css/841.css');
        ?>
        <link href="css/841.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="type-841">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <!---------------------------------------------->
                        <div class=" col-left">
                            <div class="block">
                                <div class="block-title">
                                    <strong>
                                        <span>Categories</span>
                                    </strong>
                                </div>
                                <div class="block-content">
                                    <ul id="category-treeview">
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Solid Wood <span class="fa fa-plus"></span></a>
                                            <ul class="dropdown-menu" role="menu">				          
                                                <li class="dropdown-submenu">
                                                    <a tabindex="-1" href="#">Bed Room <i class="fa fa-plus"></i></a>
                                                    <ul class="dropdown-menu">
                                                        <li><a tabindex="-1" href="#">Rading Table</a></li>			                  
                                                        <li><a href="#">Wardrobe</a></li>
                                                        <li><a href="#">Laptop Desk</a></li>
                                                        <li><a href="#">Dressing Table</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a tabindex="-1" href="#">Living Room <i class="fa fa-plus"></i></a>
                                                    <ul class="dropdown-menu">
                                                        <li><a tabindex="-1" href="#">Side Table</a></li>			                  
                                                        <li><a href="#">Sofa Set</a></li>
                                                        <li><a href="#">Round Chair</a></li>
                                                        <li><a href="#">Coffe Table</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span>Kitchen</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span>Drawing Room</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span>Lighting</span>
                                            </a>
                                        </li>
                                        <li class="last">
                                            <a href="#">
                                                <span>Home Decor</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="block">
                                <div class="block-title">
                                    <strong> Shop By</strong>
                                </div>
                                <div class="block-content">
                                    <dl id="narrow-by-list">
                                        <dt class="odd">Category</dt>
                                        <dd class="odd">
                                            <ol>
                                                <li>
                                                    <a href="#">Bed Room</a>
                                                    <span class="count">(17)</span>
                                                </li>
                                                <li>
                                                    <a href="#">Living Room</a>
                                                    <span class="count">(17)</span>
                                                </li>
                                            </ol>
                                        </dd>
                                        <dt class="even">Color</dt>
                                        <dd class="even">
                                            <ol class="configurable-swatch-list">
                                                <li style="line-height: 19px;">
                                                    <a href="#" class="swatch-link">
                                                        <span class="swatch-label"style="height: 17px;width:17px"> 
                                                            <img src="images/black.png"alt="Black"title="Black"width="15"height="15">
                                                        </span>
                                                        <span class="count">(5)</span>
                                                    </a>
                                                </li>
                                                <li style="line-height: 19px;">
                                                    <a href="#" class="swatch-link">
                                                        <span class="swatch-label"style="height: 17px;width:17px"> 
                                                            <img src="images/blue.png"alt="Blue"title="Blue"width="15"height="15">
                                                        </span>
                                                        <span class="count">(5)</span>
                                                    </a>
                                                </li>
                                                <li style="line-height: 19px;">
                                                    <a href="#" class="swatch-link">
                                                        <span class="swatch-label"style="height: 17px;width:17px"> 
                                                            <img src="images/brown.png"alt="Brown"title="Brown"width="15"height="15">
                                                        </span>
                                                        <span class="count">(2)</span>
                                                    </a>
                                                </li>
                                                <li style="line-height: 19px;">
                                                    <a href="#" class="swatch-link">
                                                        <span class="swatch-label"style="height: 17px;width:17px"> 
                                                            <img src="images/gray.png"alt="Gray"title="Gray"width="15"height="15">
                                                        </span>
                                                        <span class="count">(5)</span>
                                                    </a>
                                                </li>
                                                <li style="line-height: 19px;">
                                                    <a href="#" class="swatch-link">
                                                        <span class="swatch-label"style="height: 17px;width:17px"> 
                                                            <img src="images/orange.png"alt="Orange"title="Orange"width="15"height="15">
                                                        </span>
                                                        <span class="count">(3)</span>
                                                    </a>
                                                </li>
                                                <li style="line-height: 19px;">
                                                    <a href="#" class="swatch-link">
                                                        <span class="swatch-label"style="height: 17px;width:17px"> 
                                                            <img src="images/sky.png"alt="Sky"title="Sky"width="15"height="15">
                                                        </span>
                                                        <span class="count">(1)</span>
                                                    </a>
                                                </li>
                                            </ol>
                                        </dd>
                                        <dt class="odd">Manufacturer</dt>
                                        <dd class="odd">
                                            <ol>
                                                <li>
                                                    <a href="#">Airtel</a>
                                                    <span class="count">(4)</span>
                                                </li>
                                                <li>
                                                    <a href="#">Apple</a>
                                                    <span class="count">(4)</span>
                                                </li>
                                                <li>
                                                    <a href="#">Decomo</a>
                                                    <span class="count">(4)</span>
                                                </li>
                                                <li>
                                                    <a href="#">Idea</a>
                                                    <span class="count">(2)</span>
                                                </li>
                                                <li>
                                                    <a href="#">Lenovo</a>
                                                    <span class="count">(2)</span>
                                                </li>
                                                <li>
                                                    <a href="#">lorem</a>
                                                    <span class="count">(2)</span>
                                                </li>
                                                <li>
                                                    <a href="#">Samsung</a>
                                                    <span class="count">(1)</span>
                                                </li>
                                                <li>
                                                    <a href="#">Vodafone</a>
                                                    <span class="count">(2)</span>
                                                </li>
                                            </ol>
                                        </dd>
                                        <dt class="last even">price</dt>
                                        <dd class="last even">
                                            <ol>
                                                <li>
                                                    <a href="#">
                                                        <span class="price">$0.00</span>
                                                        -
                                                        <span class="price">$999.99</span>
                                                        <span class="count">(14)</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="price">$1000.00</span>
                                                        and above
                                                        <span class="count">(3)</span>
                                                    </a>
                                                </li>
                                            </ol>
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                            <div class="block">
                                <div class="block-title">
                                    <strong>Shop By BRand</strong>
                                </div>
                                <div class="block-content">
                                    <ul>
                                        <li> <a href="#">Airtel</a> </li>
                                        <li> <a href="#">Apple</a> </li>
                                        <li> <a href="#">Docomo</a> </li>
                                        <li> <a href="#">Ideo</a> </li>
                                        <li> <a href="#">Lenovo</a> </li>
                                        <li> <a href="#">Lorem</a> </li>
                                        <li> <a href="#">Samsung</a> </li>
                                        <li> <a href="#">Vodafone</a> </li>
                                        <li> <a href="#">Gionee</a> </li>
                                        <li> <a href="#">HCL</a> </li>
                                        <li> <a href="#">HTC</a> </li>                         
                                        <li> <a href="#">Lava</a> </li>
                                        <li> <a href="#">Navneet</a> </li>
                                        <li> <a href="#">Nokia</a> </li>
                                        <li> <a href="#">Tada</a> </li>
                                        <li> <a href="#">Reliance</a> </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="block-title">
                                <strong>
                                    <span>Latest products</span>
                                </strong>
                            </div>
                            <div class="block-content">
                                <ol class="mini-products-list">
                                    <li class="item odd">
                                        <div class="product"style="margin-left: 0px;">
                                            <a href="#"title="Arcu vitae imperdiet simply" class="product-image">
                                                <img src="images/arcu_1.jpg" wid="80"height="84"alt="Arcu vitae imperdiet simply">
                                            </a>
                                            <div class="product-details">
                                                <p class="product-name">
                                                    <a href="#"title="Arcu vitae imperdiet simply"> Arcu vitea i..</a>
                                                </p>
                                                <div class="price-box">
                                                    <span class="price">$554.00</span>
                                                </div>
                                                <p>
                                                    <a href="#"rel="nofollow">Add to Cart</a>
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="item even">
                                        <div class="product"style="margin-left: 0px;">
                                            <a href="#"title="Arcu vitae imperdiet simply"class="product-image">
                                                <img src="images/arcu_2.jpg" width="80"height="84"alt="Arcu vitae imperdiet simply">
                                            </a>
                                            <div class="product-details">
                                                <p class="product-name">
                                                    <a href="#"title="Arcu vitae imperdiet simply"> Arcu vitea i..</a>
                                                </p>
                                                <div class="price-box">
                                                    <span class="price">$998.00</span>
                                                </div>
                                                <p>
                                                    <a href="#"rel="nofollow">Add to Cart</a>
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="item last odd">
                                        <div class="product"style="margin-left: 0px;">
                                            <a href="#"title="consectetur adipiscing  available Ipsum"class="product-image">
                                                <img src="images/arcu_3.jpg" width="80"height="84"alt="consectetur adipiscing  available Ipsum">
                                            </a>
                                            <div class="product-details">
                                                <p class="product-name">
                                                    <a href="#"title="consectetur adipiscing  available Ipsum"> Consectetur..</a>
                                                </p>
                                                <div class="price-box">
                                                    <span class="price">$1,541.00</span>
                                                </div>
                                                <p>
                                                    <a href="#"rel="nofollow">Add to Cart</a>
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                </ol>
                                <div class="actions">
                                    <a href="#">See All</a> 
                                </div>
                            </div>
                            <div>
                                <p>
                                    <a href="#">
                                        <img src="images/left_banner.jpg">
                                    </a>
                                </p>
                            </div>
                        </div>
                        <!-----------------------Mobile------------------------>
                        <div class="col-left-an">
                            <div class="detail">
                                <div type="button" class="btn" data-toggle="collapse" data-target="#decription">CATEGORIES
                                    <h5>&nbsp;</h5>
                                </div>
                            </div>
                            <div id="decription" class="collapse">
                                <div class="c_decription">
                                    <ul id="category-treeview">
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Solid Wood <span class="fa fa-plus"></span></a>
                                            <ul class="dropdown-menu" role="menu">				          
                                                <li class="dropdown-submenu">
                                                    <a tabindex="-1" href="#">Bed Room <i class="fa fa-plus"></i></a>
                                                    <ul class="dropdown-menu">
                                                        <li><a tabindex="-1" href="#">Rading Table</a></li>			                  
                                                        <li><a href="#">Wardrobe</a></li>
                                                        <li><a href="#">Laptop Desk</a></li>
                                                        <li><a href="#">Dressing Table</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a tabindex="-1" href="#">Living Room <i class="fa fa-plus"></i></a>
                                                    <ul class="dropdown-menu">
                                                        <li><a tabindex="-1" href="#">Side Table</a></li>			                  
                                                        <li><a href="#">Sofa Set</a></li>
                                                        <li><a href="#">Round Chair</a></li>
                                                        <li><a href="#">Coffe Table</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span>Kitchen</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span>Drawing Room</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span>Lighting</span>
                                            </a>
                                        </li>
                                        <li class="last">
                                            <a href="#">
                                                <span>Home Decor</span>
                                            </a>
                                        </li>
                                    </ul> 
                                </div>
                            </div>
                            <div type="button" class="btn" data-toggle="collapse" data-target="#review">SHOP BY
                                <h5>&nbsp;</h5>
                            </div>
                            <div id="review" class="collapse">
                                <div class="c_review">                
                                    <dl id="narrow-by-list">
                                        <dt class="odd">Category</dt>
                                        <dd class="odd">
                                            <ol>
                                                <li>
                                                    <a href="#">Bed Room
                                                        <span class="count">(17)</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">Living Room
                                                        <span class="count">(17)</span>
                                                    </a>
                                                </li>
                                            </ol>
                                        </dd>
                                        <dt class="even">Color</dt>
                                        <dd class="even">
                                            <ol class="configurable-swatch-list">
                                                <li style="line-height: 19px;">
                                                    <a href="#" class="swatch-link">
                                                        <span class="swatch-label"style="height: 17px;width:17px"> 
                                                            <img src="images/black.png"alt="Black"title="Black"width="15"height="15">
                                                        </span>
                                                        <span class="count">(5)</span>
                                                    </a>
                                                </li>
                                                <li style="line-height: 19px;">
                                                    <a href="#">
                                                        <span class="swatch-label"style="height: 17px;width:17px"> 
                                                            <img src="images/blue.png"alt="Blue"title="Blue"width="15"height="15">
                                                        </span>
                                                        <span class="count">(5)</span>
                                                    </a>
                                                </li>
                                                <li style="line-height: 19px;">
                                                    <a href="#">
                                                        <span class="swatch-label"style="height: 17px;width:17px"> 
                                                            <img src="images/brown.png"alt="Brown"title="Brown"width="15"height="15">
                                                        </span>
                                                        <span class="count">(2)</span>
                                                    </a>
                                                </li>
                                                <li style="line-height: 19px;">
                                                    <a href="#">
                                                        <span class="swatch-label"style="height: 17px;width:17px"> 
                                                            <img src="images/gray.png"alt="Gray"title="Gray"width="15"height="15">
                                                        </span>
                                                        <span class="count">(5)</span>
                                                    </a>
                                                </li>
                                                <li style="line-height: 19px;">
                                                    <a href="#">
                                                        <span class="swatch-label"style="height: 17px;width:17px"> 
                                                            <img src="images/orange.png"alt="Orange"title="Orange"width="15"height="15">
                                                        </span>
                                                        <span class="count">(3)</span>
                                                    </a>
                                                </li>
                                                <li style="line-height: 19px;">
                                                    <a href="#">
                                                        <span class="swatch-label"style="height: 17px;width:17px"> 
                                                            <img src="images/sky.png"alt="Sky"title="Sky"width="15"height="15">
                                                        </span>
                                                        <span class="count">(1)</span>
                                                    </a>
                                                </li>
                                            </ol>
                                        </dd>
                                        <dt class="odd">Manufacturer</dt>
                                        <dd class="odd">
                                            <ol>
                                                <li>
                                                    <a href="#">Airtel</a>
                                                    <span class="count">(4)</span>
                                                </li>
                                                <li>
                                                    <a href="#">Apple</a>
                                                    <span class="count">(4)</span>
                                                </li>
                                                <li>
                                                    <a href="#">Decomo</a>
                                                    <span class="count">(4)</span>
                                                </li>
                                                <li>
                                                    <a href="#">Idea</a>
                                                    <span class="count">(2)</span>
                                                </li>
                                                <li>
                                                    <a href="#">Lenovo</a>
                                                    <span class="count">(2)</span>
                                                </li>
                                                <li>
                                                    <a href="#">lorem</a>
                                                    <span class="count">(2)</span>
                                                </li>
                                                <li>
                                                    <a href="#">Samsung</a>
                                                    <span class="count">(1)</span>
                                                </li>
                                                <li>
                                                    <a href="#">Vodafone</a>
                                                    <span class="count">(2)</span>
                                                </li>
                                            </ol>
                                        </dd>
                                        <dt class="last even">price</dt>
                                        <dd class="last even">
                                            <ol>
                                                <li>
                                                    <a href="#">
                                                        <span class="price">$0.00</span>
                                                        -
                                                        <span class="price">$999.99</span>
                                                        <span class="count">(14)</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="price">$1000.00</span>
                                                        and above
                                                        <span class="count">(3)</span>
                                                    </a>
                                                </li>
                                            </ol>
                                        </dd>
                                    </dl>
                                </div> 
                            </div>
                            <div type="button" class="btn" data-toggle="collapse" data-target="#tags">SHOP By BRAND
                                <h5>&nbsp;</h5>
                            </div>
                            <div id="tags" class="collapse">
                                <div class="c_tags">
                                    <ul>
                                        <li> <a href="#">Airtel</a> </li>
                                        <li> <a href="#">Apple</a> </li>
                                        <li> <a href="#">Docomo</a> </li>
                                        <li> <a href="#">Ideo</a> </li>
                                        <li> <a href="#">Lenovo</a> </li>
                                        <li> <a href="#">Lorem</a> </li>
                                        <li> <a href="#">Samsung</a> </li>
                                        <li> <a href="#">Vodafone</a> </li>
                                        <li> <a href="#">Gionee</a> </li>
                                        <li> <a href="#">HCL</a> </li>
                                        <li> <a href="#">HTC</a> </li>                         
                                        <li> <a href="#">Lava</a> </li>
                                        <li> <a href="#">Navneet</a> </li>
                                        <li> <a href="#">Nokia</a> </li>
                                        <li> <a href="#">Tada</a> </li>
                                        <li> <a href="#">Reliance</a> </li>
                                    </ul>
                                </div>
                            </div>
                            <div type="button" class="btn" data-toggle="collapse" data-target="#tab">LATEST PRODUCTS
                                <h5>&nbsp;</h5>
                            </div>
                            <div id="tab" class="collapse">
                                <div class="c_tab">
                                    <ol class="mini-products-list">
                                        <li class="item odd">
                                            <div class="product"style="margin-left: 0px;">
                                                <a href="#"title="Arcu vitae imperdiet simply"class="product-image">
                                                    <img src="images/arcu_1.jpg" width="80"height="84"alt="Arcu vitae imperdiet simply">
                                                </a>
                                                <div class="product-details">
                                                    <p class="product-name">
                                                        <a href="#"title="Arcu vitae imperdiet simply"> Arcu vitea i..</a>
                                                    </p>
                                                    <div class="price-box">
                                                        <span class="price">$554.00</span>
                                                    </div>
                                                    <p>
                                                        <a href="#"rel="nofollow">Add to Cart</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item even">
                                            <div class="product"style="margin-left: 0px;">
                                                <a href="#"title="Arcu vitae imperdiet simply"class="product-image">
                                                    <img src="images/arcu_2.jpg" width="80"height="84"alt="Arcu vitae imperdiet simply">
                                                </a>
                                                <div class="product-details">
                                                    <p class="product-name">
                                                        <a href="#"title="Arcu vitae imperdiet simply"> Arcu vitea i..</a>
                                                    </p>
                                                    <div class="price-box">
                                                        <span class="price">$998.00</span>
                                                    </div>
                                                    <p>
                                                        <a href="#"rel="nofollow">Add to Cart</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item last odd">
                                            <div class="product"style="margin-left: 0px;">
                                                <a href="#"title="consectetur adipiscing  available Ipsum"class="product-image">
                                                    <img src="images/arcu_3.jpg" width="80"height="84"alt="consectetur adipiscing  available Ipsum">
                                                </a>
                                                <div class="product-details">
                                                    <p class="product-name">
                                                        <a href="#"title="consectetur adipiscing  available Ipsum"> Consectetur..</a>
                                                    </p>
                                                    <div class="price-box">
                                                        <span class="price">$1,541.00</span>
                                                    </div>
                                                    <p>
                                                        <a href="#"rel="nofollow">Add to Cart</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                    </ol>
                                    <div class="actions">
                                        <a href="#">See All</a> 
                                    </div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <!----------------------------------------------->
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>