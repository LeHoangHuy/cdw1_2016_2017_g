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
        $less->compileFile('less/type-2-detail1.less', 'css/type-2-detail1.css');
        ?> 
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/type-2-detail1.css" rel="stylesheet" type="text/css"/>

    </head> 

    <body>                

        <div class="container container-modify margin-auto header">
            <div class="chi-tiet"> 
                <div class="col-md-6 col-sm-6 col-xs-12 details-product">
                    <div class="name">
                        <h3>Dress Nanette Lepore Want Me</h3>
                        <div class="star">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div id="product_reference" style=""> 
                        <label>Model: </label> 
                        <span class="editable" itemprop="sku">PR0000214</span>
                    </div>
                    <p class="product-manufacturer">
                        <span class="value_name">Manufacturer:</span>
                        <a class="product_name" href="#">
                            <span itemprop="name">Nicole Miller</span>
                        </a>
                    </p>
                    <p id="product_condition"> 
                        <span class="value_name">Condition:  
                            <span class="editable"> New </span>

                        </span>
                    </p>
                    <p id="availability_statut"> 
                        <span id="availability_label" class="value_name">Availability:</span>
                        <span id="availability_value">YES</span>
                        <span id="pQuantityAvailable"> 
                            (<span id="quantityAvailable">999</span> 
                            <span style="display: none;" id="quantityAvailableTxt">item in stock</span> 
                            <span id="quantityAvailableTxtMultiple">items in stock</span>)
                        </span> 
                    </p>
                    <div class="clearfix"></div>
                    <div id="exTab1">	
                        <ul  class="nav nav-pills">
                            <li class="active">
                                <a  href="#1a" data-toggle="tab">More Info</a>
                            </li>
                            <li><a href="#2a" data-toggle="tab">Data sheet</a>
                            </li>
                            <li><a href="#3a" data-toggle="tab">Accessories</a>
                            </li>
                            <li><a href="#4a" data-toggle="tab">Custom Tab</a>
                            </li>
                            <li><a href="#5a" data-toggle="tab">Video</a>
                            </li>
                            <li><a href="#6a" data-toggle="tab">Comment</a>
                            </li>
                        </ul>

                        <div class="tab-content clearfix">
                            <div class="tab-pane active" id="1a">
                                <div class="rte">
                                    <p>Eorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean quis leo sit amet diam ullamcorper ullamcorper. In eleifend luctus interdum.&nbsp;Cras vel eleifend neque. Phasellus eget est lacus, et aliquet arcu. Morbi vitae sapien</p>
                                    <ul>
                                        <li>Color - White;</li>
                                        <li>100% micro modal;</li>
                                        <li>Ruched knot decoration at the chest;</li>
                                        <li>Unlined;&nbsp;</li>
                                    </ul>
                                    <p>Morbi vitae sapien in elit cursus auctor. Sed lectus nisi, commodo vel hendrerit vel, cursus non sapien. Nullam nec velit ante, vitae placerat odio. Duis sodales nisi ac nunc vestibulum gravida. Phasellus auctor tellus felis, ac cursus ligula.</p>
                                </div>
                            </div>
                            <div class="tab-pane" id="2a">
                                <table class="table-data-sheet">
                                    <tbody>
                                        <tr class="odd">
                                            <td>Height</td>
                                            <td>95</td>
                                        </tr>
                                        <tr class="even">
                                            <td>Material</td>
                                            <td>Cotton</td>
                                        </tr>
                                        <tr class="odd">
                                            <td>Depth</td>
                                            <td>95</td>
                                        </tr>
                                        <tr class="even">
                                            <td>Weight</td>
                                            <td>75</td>
                                        </tr>
                                        <tr class="odd">
                                            <td>Bust</td>
                                            <td>90</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane" id="3a">
                                <div class="block products_block accessories-block clearfix">
                                    <div class="block_content">
                                        <ul>
                                            <li class="item product-box ajax_block_product first_item product_accessories_description">
                                                <div class="product_desc">
                                                    <a href="#" title="" class="product-image product_image"> <img class="lazyOwl" src="images/tab_1.jpg" alt="" > </a>
                                                </div>
                                                <div class="s_title_block product_accessories_price">
                                                    <h5> <a href="#"> Dress Nanette L... </a></h5> <span class="price"> $470.00 </span></div>
                                                <div class="clearfix button_add">
                                                    <div>
                                                        <div>
                                                            <div>
                                                                <a class="exclusive button ajax_add_to_cart_button" href="#" data-id-product="13" title="Add to cart"> <span>Add to cart</span> </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="item product-box ajax_block_product item product_accessories_description">
                                                <div class="product_desc">
                                                    <a href="#" title="" class="product-image product_image"> <img class="lazyOwl" src="images/tab_2.jpg" alt="" > </a>
                                                </div>
                                                <div class="s_title_block product_accessories_price">
                                                    <h5> <a href="#"> Dress Herve Leg... </a></h5> <span class="price"> $707.00 </span></div>
                                                <div class="clearfix button_add">
                                                    <div>
                                                        <div>
                                                            <div>
                                                                <a class="exclusive button ajax_add_to_cart_button" href="#" data-id-product="36" title="Add to cart"> <span>Add to cart</span> </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class=" item_last item product-box ajax_block_product product_accessories_description">
                                                <div class="product_desc">
                                                    <a href="#" title="" class="product-image product_image"> <img class="lazyOwl" src="images/tab_3.jpg" alt="" > </a>
                                                </div>
                                                <div class="s_title_block product_accessories_price">
                                                    <h5> <a href="#"> Dress Anna Sui ... </a></h5> <span class="price"> $743.00 </span></div>
                                                <div class="clearfix button_add ">
                                                    <div>
                                                        <div>
                                                            <div>
                                                                <a class="exclusive button ajax_add_to_cart_button" href="#" data-id-product="47" title="Add to cart"> <span>Add to cart</span> </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="4a">
                                <div class="rte">
                                    <p><img src="images/sizes.jpg" alt=""></p>
                                </div>
                            </div>
                            <div class="tab-pane" id="5a">
                                <div class="rte">
                                    <!--[if !IE]> -->
                                    <div class="videoWrapper">
                                        <iframe id="ytplayer" type="text/html" src="https://www.youtube.com/embed/pasdC5q4GRA" width="100%" height="270" frameborder="0"></iframe>
                                    </div>

                                </div>
                            </div>
                            <div class="tab-pane" id="6a">

                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="properties">
                        <div class="size">
                            <div style="float: left">
                                Size:
                                <select style="width: 100px;">
                                    <option value="S">S</option>
                                    <option value="M">M</option>
                                    <option value="L">L</option>
                                    <option value="XL" selected>XL</option>
                                </select>
                            </div>
                            <div style="float: left; margin-left: 20px;" >
                                Color:
                                <select style="width: 100px;">
                                    <option value="Red">Red</option>
                                    <option value="Blue">Blue</option>
                                    <option value="Black">Black</option>
                                    <option value="Yellow" selected>Yellow</option>
                                </select>
                            </div>


                        </div>


                    </div>
                    <div class="clearfix"></div>
                    <p id="quantity_wanted_p">
                        <label>Quantity:</label>
                        <input name="qty" id="quantity_wanted" class="text" value="     1" maxlength="3" style="border: 1px solid rgb(189, 194, 201);" type="text">
                    </p>
                    <div class="clearfix"></div>
                    <div class="price">
                        <p class="our_price_display" itemprop="offers" itemscope="" itemtype="#">
                            <link itemprop="availability" href="#"> <span id="our_price_display" itemprop="price">$716.00</span>
                            <meta itemprop="priceCurrency" content="USD">
                        </p>

                        <p id="old_price" class="hidden" style="display: none;"> <span id="old_price_display" style="display: none;">$716.00</span></p>
                        <div id="add_to_cart" class="buttons_bottom_block">
                            <form id="buy_block" style="margin-top:0" action="#" method="post">
                                <button type="submit" name="Submit" class="exclusive lmromancaps">Add to cart</button>

                            </form>
                        </div>
                    </div> 
                </div>
            </div>
        </div>

        <script src="scripts/jquery-1.11.0.min.js" type="text/javascript"></script>
        <script src="scripts/bootstrap.min.js" type="text/javascript"></script>
        <script src="scripts/script.js" type="text/javascript"></script>

    </body>

</html>