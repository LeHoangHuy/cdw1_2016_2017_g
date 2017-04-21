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
        $less->compileFile('less/869-tyle1.less', 'css/869-tyle1.css');
        ?>
        <link href="css/869-tyle1.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>

    </head>

    <body>
        <div class="type-869-tyle1">
            <div class="page_width">
                <div id="columns" class="clearfix left_col">
                    <div id="left_column" class="column">
                        <!--Categories----------------------------------------->
                        <div class="vert-flexmenu-container block list-module">
                            <h4 class="title_block">Categories</h4>
                            <div class="vert-flexmenu">
                                <ul class="id_menu">
                                    <!----------------------WOMEN------------------------->
                                    <li class="v-flexmenuitem id_menu2" id="show_women">
                                        <a class="menu-title" href="#">
                                            <img src="images/3-6.png" alt=""/>
                                            <span>Women</span>
                                        </a>
                                        <a href="#" class="opener">
                                            <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                            <i class="fa fa-chevron-right" aria-hidden="true" id="aftericon"></i>
                                        </a>
                                        <!---menu drop right WOMEN--->
                                        <div class="submenu full-width clearfix showmenu_women">
                                            <div class="sections-contaier">
                                                <div class="full-width">
                                                    <div class="section-indent">
                                                        <ul class="v-main-section-links">
                                                            <li class="col_num">
                                                                <a class="menu-item-title" href="#">Handbags</a>
                                                                <a href="#" class="opener"></a>
                                                                <ul>
                                                                    <li><a href="#">Totes</a></li>
                                                                    <li><a href="#">Clutches</a></li>
                                                                    <li><a href="#">Cross Body</a></li>
                                                                    <li><a href="#">Satchels</a></li>
                                                                    <li><a href="#">Shoulder</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="col_num">
                                                                <a class="menu-item-title" href="#">Handbags</a>
                                                                <a href="#" class="opener"></a>
                                                                <ul>
                                                                    <li><a href="#">Totes</a></li>
                                                                    <li><a href="#">Clutches</a></li>
                                                                    <li><a href="#">Cross Body</a></li>
                                                                    <li><a href="#">Satchels</a></li>
                                                                    <li><a href="#">Shoulder</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="col_num">
                                                                <a class="menu-item-title" href="#">Handbags</a>
                                                                <a href="#" class="opener"></a>
                                                                <ul>
                                                                    <li><a href="#">Totes</a></li>
                                                                    <li><a href="#">Clutches</a></li>
                                                                    <li><a href="#">Cross Body</a></li>
                                                                    <li><a href="#">Satchels</a></li>
                                                                    <li><a href="#">Shoulder</a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <!-----------------------MEN----------------------------->
                                    <li class="v-flexmenuitem id_menu2" id="show_men">   
                                        <a class="menu-title" href="#">
                                            <img src="images/4-6.png" alt=""/>
                                            <span>Men</span>
                                        </a>
                                        <a href="#" class="opener">
                                            <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                            <i class="fa fa-chevron-right" aria-hidden="true" id="aftericon"></i>
                                        </a>
                                        <!---menu drop right MEN--->
                                        <div class="submenu right-co clearfix showmenu_men">
                                            <div class="sections-contaier" style="background-image: none;">
                                                <div class="only-right">
                                                    <div class="section-indent">
                                                        <ul class="v-main-section-links">
                                                            <li class="col_num">
                                                                <a class="menu-item-title" href="#">Accessories</a>
                                                                <a href="#" class="opener"></a>
                                                                <ul>
                                                                    <li><a href="#">Toys</a></li>
                                                                    <li><a href="#">Nightwear</a></li>
                                                                    <li><a href="#">Underwear</a></li>
                                                                    <li><a href="#">Sunglasses</a></li>
                                                                    <li><a href="#">Bags</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="col_num">
                                                                <a class="menu-item-title" href="#">Newborn 0-18 mths</a>
                                                                <a href="#" class="opener"></a>
                                                                <ul>
                                                                    <li><a href="#">Kniwear</a></li>
                                                                    <li><a href="#">Unisex</a></li>
                                                                    <li><a href="#">Sets</a></li>
                                                                    <li><a href="#">Sleepsuits</a></li>
                                                                    <li><a href="#">Bodysuits</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="col_num">
                                                                <a class="menu-item-title" href="#">Boys 3mths - 16yrs</a>
                                                                <a href="#" class="opener"></a>
                                                                <ul>
                                                                    <li><a href="#">Jeans</a></li>
                                                                    <li><a href="#">Shorts</a></li>
                                                                    <li><a href="#">Shirts</a></li>
                                                                    <li><a href="#">Joggers</a></li>
                                                                    <li><a href="#">Sportswear</a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="right-section">
                                                    <div class="section-indent">
                                                        <div class="right-title menu-product-title">
                                                            <span>Our Offers</span>
                                                        </div>
                                                        <div class="vm-pr-nbs-flexisel-container">
                                                            <div class=" carousel nbs-flexisel-inner slide">
                                                                <ul class="v-right-section-products menu-product nbs-flexisel-ul carousel-inner">
                                                                    <li class="nbs-flexisel-item item active">
                                                                        <a href="#"><img src="images/dress-anna-sui-dot-flutter.jpg" alt="" class="img-responsive center-block"/></a>
                                                                    </li>
                                                                    <li class="nbs-flexisel-item item">
                                                                        <a href="#"><img src="images/dress-anna-sui-dot-flutter.jpg" alt="" class="img-responsive center-block"/></a>
                                                                    </li>
                                                                    <li class="nbs-flexisel-item item">
                                                                        <a href="#"><img src="images/dress-anna-sui-dot-flutter.jpg" alt="" class="img-responsive center-block"/></a>
                                                                    </li>
                                                                    <li class="nbs-flexisel-item item">
                                                                        <a href="#"><img src="images/dress-anna-sui-dot-flutter.jpg" alt="" class="img-responsive center-block"/></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="flexisel-nav-wrapper">
                                                            <div class=" left carousel-control flexisel-nav smooth02 nbs-flexisel-nav-left" href=".nbs-flexisel-inner" data-slide="prev">
                                                                <a href="#"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
                                                            </div>
                                                            <div class=" right carousel-control flexisel-nav smooth02 nbs-flexisel-nav-right" href=".nbs-flexisel-inner" data-slide="next">
                                                                <a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <!------------------------GIRL-------------------->
                                    <li class="v-flexmenuitem id_menu2" id="show_girl">
                                        <a class="menu-title" href="#">
                                            <img src="images/5-6.png" alt=""/>
                                            <span>Girls</span>
                                        </a>
                                        <a href="#" class="opener">
                                            <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                            <i class="fa fa-chevron-right" aria-hidden="true" id="aftericon"></i>
                                        </a>
                                        <!---menu drop left GIRL--->
                                        <div class="submenu full-width  clearfix showmenu_girl">
                                            <div class="sections-contaier" style="background-image: none;">
                                                <div class="full-width">
                                                    <div class="section-indent">
                                                        <ul class="v-main-section-links">
                                                            <li class="col_num">
                                                                <a class="menu-item-title" href="#">Girls 3mths - 16yrs</a>
                                                                <a href="#" class="opener"></a>
                                                                <ul>
                                                                    <li><a href="#">Jeans</a></li>
                                                                    <li><a href="#">Schoolwear</a></li>
                                                                    <li><a href="#">Shorts</a></li>
                                                                    <li><a href="#">Swimwear</a></li>
                                                                    <li><a href="#">Dresses</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="col_num">
                                                                <a class="menu-item-title" href="#">Newborn 0-18 mths</a>
                                                                <a href="#" class="opener"></a>
                                                                <ul>
                                                                    <li><a href="#">Dresses</a></li>
                                                                    <li><a href="#">Sets</a></li>
                                                                    <li><a href="#">Bodysuits</a></li>
                                                                    <li><a href="#">Kniwear</a></li>
                                                                    <li><a href="#">Unisex</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="col_num">
                                                                <a class="menu-item-title" href="#">Accessories</a>
                                                                <a href="#" class="opener"></a>
                                                                <ul>
                                                                    <li><a href="#">Sunglasses</a></li>
                                                                    <li><a href="#">Bags</a></li>
                                                                    <li><a href="#">Toys</a></li>
                                                                    <li><a href="#">Nightwear</a></li>
                                                                    <li><a href="#">Underwear</a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <!------------------------BOY-------------------->
                                    <li class="v-flexmenuitem id_menu2" id="show_boy">

                                        <a class="menu-title" href="#">
                                            <img src="images/6-6.png" alt=""/>
                                            <span>Boys</span>
                                        </a>
                                        <a href="#" class="opener">
                                            <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                            <i class="fa fa-chevron-right" aria-hidden="true" id="aftericon"></i>
                                        </a>
                                        <!---menu drop left BOY--->
                                        <div class="submenu full-width clearfix showmenu_boy">
                                            <div class="sections-contaier" style="background-image: none;">
                                                <div class="full-width">
                                                    <div class="section-indent">
                                                        <ul class="v-main-section-links">
                                                            <li class="col_num">
                                                                <a class="menu-item-title" href="#">Accessories</a>
                                                                <a href="#" class="opener"></a>
                                                                <ul>
                                                                    <li><a href="#">Toys</a></li>
                                                                    <li><a href="#">Nightwear</a></li>
                                                                    <li><a href="#">Underwear</a></li>
                                                                    <li><a href="#">Sunglasses</a></li>
                                                                    <li><a href="#">Bags</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="col_num">
                                                                <a class="menu-item-title" href="#">Newborn 0-18 mths</a>
                                                                <a href="#" class="opener"></a>
                                                                <ul>
                                                                    <li><a href="#">Kniwear</a></li>
                                                                    <li><a href="#">Unisex</a></li>
                                                                    <li><a href="#">Sets</a></li>
                                                                    <li><a href="#">Sleepsuits</a></li>
                                                                    <li><a href="#">Bodysuits</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="col_num">
                                                                <a class="menu-item-title" href="#">Boys 3mths - 16yrs</a>
                                                                <a href="#" class="opener"></a>
                                                                <ul>
                                                                    <li><a href="#">Jeans</a></li>
                                                                    <li><a href="#">Shorts</a></li>
                                                                    <li><a href="#">Shirts</a></li>
                                                                    <li><a href="#">Joggers</a></li>
                                                                    <li><a href="#">Sportswear</a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <!------------------------SPORT-------------------->
                                    <li class="v-flexmenuitem id_menu2" id="show_sport">
                                        <a class="menu-title" href="#">
                                            <img src="images/7-6.png" alt=""/>
                                            <span>Sports</span>
                                        </a>
                                        <a href="#" class="opener">
                                            <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                            <i class="fa fa-chevron-right" aria-hidden="true" id="aftericon"></i>
                                        </a>
                                        <!---menu drop left sport--->
                                        <div class="submenu full-width clearfix showmenu_sport">
                                            <div class="sections-contaier" style="background-image: none;">
                                                <div class="full-width">
                                                    <div class="section-indent">
                                                        <ul class="v-main-section-links">
                                                            <li class="col_num">
                                                                <a class="menu-item-title" href="#">Accessories</a>
                                                                <a href="#" class="opener"></a>
                                                                <ul>
                                                                    <li><a href="#">Toys</a></li>
                                                                    <li><a href="#">Nightwear</a></li>
                                                                    <li><a href="#">Underwear</a></li>
                                                                    <li><a href="#">Sunglasses</a></li>
                                                                    <li><a href="#">Bags</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="col_num">
                                                                <a class="menu-item-title" href="#">Newborn 0-18 mths</a>
                                                                <a href="#" class="opener"></a>
                                                                <ul>
                                                                    <li><a href="#">Kniwear</a></li>
                                                                    <li><a href="#">Unisex</a></li>
                                                                    <li><a href="#">Sets</a></li>
                                                                    <li><a href="#">Sleepsuits</a></li>
                                                                    <li><a href="#">Bodysuits</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="col_num">
                                                                <a class="menu-item-title" href="#">Boys 3mths - 16yrs</a>
                                                                <a href="#" class="opener"></a>
                                                                <ul>
                                                                    <li><a href="#">Jeans</a></li>
                                                                    <li><a href="#">Shorts</a></li>
                                                                    <li><a href="#">Shirts</a></li>
                                                                    <li><a href="#">Joggers</a></li>
                                                                    <li><a href="#">Sportswear</a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <!------------------------GAME-------------------->
                                    <li class="v-flexmenuitem id_menu2" data-menuid="7">
                                        <a class="menu-title" href="#">
                                            <img src="images/127-6.png" alt=""/>
                                            <span>Games</span>
                                        </a>
                                    </li>
                                    <!------------------------Electronics-------------------->
                                    <li class="v-flexmenuitem id_menu2" data-menuid="8">
                                        <a class="menu-title" href="#">
                                            <img src="images/125-6.png" alt=""/>
                                            <span>Electronics</span>
                                        </a>
                                    </li>
                                    <!------------------------Furniture-------------------->
                                    <li class="v-flexmenuitem id_menu2" data-menuid="9">
                                        <a class="menu-title" href="#">
                                            <img src="images/126-6.png" alt=""/>
                                            <span>Furniture</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>