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
        $less->compileFile('less/type-i-34.less', 'css/type-i-34.css');
        ?>
        <link href="css/type-i-34.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>

    </head>

    <body>
        <div class="type-i-34">
            <div class="page_width">
                <div id="columns" class="clearfix">
                    <div id="left_column" class="column">
                        <!--NEW PRODUCT----------------------------------------->
                        <div id="best-sellers_block_right" class="block products_block">
                            <h4 class="title_block">New products</h4>
                            <div class="block_content">
                                <ul class="product_images">
                                    <li class="clearfix">
                                        <a href="#" class="product_image clearfix">
                                            <img src="images/dress-anna-sui-dot-flutter.jpg" height="74" width="45"/>
                                        </a>
                                        <div class="block_product_info">
                                            <h5><a href="#" title="Dress Anna Sui Dot Flutter">Dress Anna Sui Dot Flutter</a></h5>
                                            <span class="price">$302.00</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="block_content">
                                <ul class="product_images">
                                    <li class="clearfix">
                                        <a href="#" class="product_image clearfix">
                                            <img src="images/dress-anna-sui-dot-flutter.jpg" height="74" width="45"/>
                                        </a>
                                        <div class="block_product_info">
                                            <h5><a href="#" title="Dress Anna Sui Dot Flutter">Dress Anna Sui Dot Flutter</a></h5>
                                            <span class="price">$302.00</span>
                                        </div>
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