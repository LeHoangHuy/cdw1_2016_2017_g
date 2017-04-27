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
        $less->compileFile('less/889.less', 'css/889.css');
        ?>
        <link href="css/889.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery.min.js" type="text/javascript"></script>


    </head>
    <body>
        <div class="type-889">
		<!-- BEGIN TYPE-889-->
            <div class="container">
                <div class="row">
                    <div class="well well-sm">
                        <span><strong>Category Title</strong></span>
                        <div class="btn-group">
                            <a href="#" id="list" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-th-list">
                                </span>List</a> <a href="#" id="grid" class="btn btn-default btn-sm"><span
                                    class="glyphicon glyphicon-th"></span>Grid</a>
                        </div>
                    </div>
                    <div id="products" class="row list-group">
                        <!-- list -->
                        <div class="item col-xs-12 col-lg-4">
                            <div class="list-group-item grid-group-item">
                                <div class="thumbnail">
                                    <img class="group list-group-image" src="images/layout_1.jpg" alt="" />
                                    <div class="caption">
                                        <h4 class="group inner list-group-item-heading">
                                            Product title</h4>
                                        <p class="group inner list-group-item-text">
                                            Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                            sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                        <div class="row">
                                            <div class="col-xs-12 col-md-6">
                                                <p class="lead">
                                                    $21.000</p>
                                            </div>
                                            <div class="col-xs-12 col-md-6">
                                                <a class="btn btn-success">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item  col-xs-12 col-lg-4">
                            <div class="list-group-item  grid-group-item">
                                <div class="thumbnail">
                                    <img class="group list-group-image" src="images/layout_2.jpg" alt="" />
                                    <div class="caption">
                                        <h4 class="group inner list-group-item-heading">
                                            Product title</h4>
                                        <p class="group inner list-group-item-text">
                                            Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                            sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                        <div class="row">
                                            <div class="col-xs-12 col-md-6">
                                                <p class="lead">
                                                    $21.000</p>
                                            </div>
                                            <div class="col-xs-12 col-md-6">
                                                <a class="btn btn-success">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item  col-xs-12 col-lg-4">
                            <div class="list-group-item  grid-group-item">
                                <div class="thumbnail">
                                    <img class="group list-group-image" src="images/layout_3.jpg" alt="" />
                                    <div class="caption">
                                        <h4 class="group inner list-group-item-heading">
                                            Product title</h4>
                                        <p class="group inner list-group-item-text">
                                            Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                            sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                        <div class="row">
                                            <div class="col-xs-12 col-md-6">
                                                <p class="lead">
                                                    $21.000</p>
                                            </div>
                                            <div class="col-xs-12 col-md-6">
                                                <a class="btn btn-success">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item  col-xs-12 col-lg-4">
                            <div class="list-group-item  grid-group-item">
                                <div class="thumbnail">
                                    <img class="group list-group-image" src="images/layout_4.jpg" alt="" />
                                    <div class="caption">
                                        <h4 class="group inner list-group-item-heading">
                                            Product title</h4>
                                        <p class="group inner list-group-item-text">
                                            Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                            sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                        <div class="row">
                                            <div class="col-xs-12 col-md-6">
                                                <p class="lead">
                                                    $21.000</p>
                                            </div>
                                            <div class="col-xs-12 col-md-6">
                                                <a class="btn btn-success">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item  col-xs-12 col-lg-4">
                            <div class="list-group-item  grid-group-item">
                                <div class="thumbnail">
                                    <img class="group list-group-image" src="images/layout_1.jpg" alt="" />
                                    <div class="caption">
                                        <h4 class="group inner list-group-item-heading">
                                            Product title</h4>
                                        <p class="group inner list-group-item-text">
                                            Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                            sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                        <div class="row">
                                            <div class="col-xs-12 col-md-6">
                                                <p class="lead">
                                                    $21.000</p>
                                            </div>
                                            <div class="col-xs-12 col-md-6">
                                                <a class="btn btn-success">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item  col-xs-12 col-lg-4">
                            <div class="list-group-item  grid-group-item">
                                <div class="thumbnail">
                                    <img class="group list-group-image" src="images/layout_2.jpg" alt="" />
                                    <div class="caption">
                                        <h4 class="group inner list-group-item-heading">
                                            Product title</h4>
                                        <p class="group inner list-group-item-text">
                                            Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                            sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                        <div class="row">
                                            <div class="col-xs-12 col-md-6">
                                                <p class="lead">
                                                    $21.000</p>
                                            </div>
                                            <div class="col-xs-12 col-md-6">
                                                <a class="btn btn-success" >Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END LIST -->
                    </div>
                </div>
            </div>
			<!-- END TYPE-889 -->
        </div>
        <script languge="javascript" type="text/javascript">
            $(document).ready(function () {
                $('#list').click(function (event) {
                    event.preventDefault();
                    $('#products .item').addClass('list-group-item');
                });
                $('#grid').click(function (event) {
                    event.preventDefault();
                    $('#products .item').removeClass('list-group-item');
                    $('#products .item').addClass('grid-group-item');
                });
            });
        </script>
    </body>

</html>