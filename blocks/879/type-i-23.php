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
        $less->compileFile('less/type-i-23.less', 'css/type-i-23.css');
        ?>
        <link href="css/type-i-23.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/scripts.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="type-i-23">
            <div class="container">
                <div id="pb-right-column" class="col-sm-6 col-xs-12">
                    <h1>Black Bag</h1>
                    <div id="product_comment">
                        <div class="star dib star_on">
                            <i class="svgic glyphicon glyphicon-star"></i>
                        </div>
                        <div class="star dib star_on">
                            <i class="svgic glyphicon glyphicon-star"></i>
                        </div>
                        <div class="star dib star_on">
                            <i class="svgic glyphicon glyphicon-star"></i>
                        </div>
                        <div class="star dib star_on">
                            <i class="svgic glyphicon glyphicon-star"></i>
                        </div>
                        <div class="star dib star_on">
                            <i class="svgic_empty glyphicon glyphicon-star"></i>
                        </div>
                    </div>
                    <p id="product_reference"> 
                        <label>Model:</label>
                        <span class="editable">PR00001013</span>
                    </p>
                    <p>
                        <span>Manufacturer:</span>
                        <a href="#"><span>Prada</span></a>
                    </p>

                    <p><span>Condition: New</span></p>
                    <ul class="nav nav-tabs" id="nav-tab" >
                        <li class="active"><a data-toggle="tab" href="#Moreinfo">More info</a></li>
                        <li><a data-toggle="tab" href="#CustomTab">Custom Tab</a></li>
                        <li><a data-toggle="tab" href="#Video">Video</a></li>
                        <li><a data-toggle="tab" href="#Comments">Comments</a></li>
                    </ul>

                    <ul class="nav nav-stacked" id="nav-tab-pill">
                        <li class="active"><a data-toggle="tab" href="#Moreinfo">More info</a></li>
                        <li><a data-toggle="tab" href="#CustomTab">Custom Tab</a></li>
                        <li><a data-toggle="tab" href="#Video">Video</a></li>
                        <li><a data-toggle="tab" href="#Comments">Comments</a></li>
                    </ul>

                    <div class="tab-content">
                        <div id="Moreinfo" class="tab-pane fade in active">
                            <p>
                                Nulla ut eros in sem faucibus interdum. Maecenas mollis condimentum velit, sed tristique justo sagittis non. 
                                Pellentesque at metus ac odio ultrices faucibus. Proin lobortis ante non justo elementum gravida. Donec justo purus,
                                elementum non est quis, fermentum faucibus dolor. Pellentesque non sem et quam sodales feugiat eu at metus. Proin tincidunt 
                                et diam non placerat. Vestibulum porttitor sodales enim sit amet ultricies. Maecenas non aliquam dolor. Curabitur placerat 
                                enim eget nunc scelerisque placerat. Fusce convallis ipsum a orci ultrices, id adipiscing nibh viverra. Maecenas volutpat 
                                nisi et vehicula semper. Nullam venenatis sollicitudin pretium. Donec ultrices velit vehicula, aliquam eros eget, tincidunt
                                massa. Donec faucibus in nisl sit amet suscipit.
                            </p>
                        </div>
                        <div id="CustomTab" class="tab-pane fade">
                            <div class="rte">
                                <p><img src="images/sizes.jpg" alt=""/></p>
                            </div>
                        </div>
                        <div id="Video" class="tab-pane fade">
                            <iframe width="100%" height="250px" src="https://www.youtube.com/embed/pasdC5q4GRA" frameborder="0" allowfullscreen></iframe>
                        </div>
                        <div id="Comments" class="tab-pane fade">
                            <div class="comment_author">
                                <span>Grade</span>
                                <div class="clearfix">
                                    <i class="svgic glyphicon glyphicon-star"></i>
                                    <i class="svgic glyphicon glyphicon-star"></i>
                                    <i class="svgic glyphicon glyphicon-star"></i>
                                    <i class="svgic glyphicon glyphicon-star"></i>
                                    <i class="svgic glyphicon glyphicon-star"></i>
                                </div>
                                <div class="comment_author_infos">
                                    <strong>qwertyl</strong>
                                    <em>04/22/2014</em>
                                </div>
                            </div>
                            <div class="comment_details">
                                <h4>good</h4>
                                <p>sada asd dasda</p>
                            </div>

                            <div class="comment_author">
                                <span>Grade</span>
                                <div class="star_content clearfix">
                                    <i class="svgic glyphicon glyphicon-star"></i>
                                    <i class="svgic glyphicon glyphicon-star"></i>
                                    <i class="svgic glyphicon glyphicon-star"></i>
                                    <i class="svgic glyphicon glyphicon-star"></i>
                                    <i class="svgic glyphicon glyphicon-star"></i>
                                </div>
                                <div class="comment_author_infos">
                                    <strong>qwertyl</strong>
                                    <em>03/19/2014</em>
                                </div>
                            </div>
                            <div class="comment_details">
                                <h4>ds</h4>
                                <p>sdfs</p>
                            </div>
                        </div>
                    </div>

                    <div id="pd-right-column1">
                        <div class="product_attributes clearfix">
                            <div id="attributes">
                                <div class="attribute_fieldset">
                                    <label>Size:</label>
                                    <select name="size" id="size">
                                        <option value="25" selected="selected" title="S">S</option>
                                        <option value="27" title="M">M</option>
                                        <option value="28" title="L">L</option>
                                        <option value="29" title="XL">XL</option>
                                    </select>

                                    <label>Color:</label>
                                    <select name="size" id="size">
                                        <option value="25" selected="selected" title="Red">Red</option>
                                        <option value="27" title="Blue">Blue</option>
                                        <option value="28" title="Black">Black</option>
                                        <option value="29" title="White">White</option>
                                    </select>
                                    <div class="quantity">
                                        <label>Quantity:</label>
                                        <input type="text" id="quantity" value="1">
                                    </div>
                                    <div class="price">
                                        <p>$100.00</p>
                                        <div id="add_to_cart">
                                            <p><a href="#">ADD TO CART</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="clear"></div>
                                <div class="box-cart-bottom">
                                    <div class="addthis-container">
                                        <a id="twice" class="fa fa-twitter-square btn-lg" href="#"></a>
                                        <a id="facebook" class="fa fa-facebook-official btn-lg" href="#"></a>
                                        <a id="print" class="fa fa-print btn-lg" href="#"></a>
                                        <a id="email" class="fa fa-envelope btn-lg" href="#"></a>
                                        <a id="plus" class="fa fa-plus-square btn-lg" href="#"></a>
                                    </div>
                                    <p><a href="#"> » Add to my wishlist</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>