<!DOCTYPE html>

<html style="background-color: #f3f3f4;">
    <head>
        <title>Aurum - Fashion</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/addSlider.min.css" rel="stylesheet" type="text/css" />
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/871.less', 'css/871.css');
        ?>
        <link href="css/871.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div class="type-7">
            <div class="content">
                <div class="container">
                    <div class="row product_title">
                        <h1>SHOP</h1>
                    </div>
                    <div class="row product_sort">
                        <div class="col-md-10">
                            <p>SHOWING 1–12 OF 45 RESULTS</p>
                        </div>
                        <div class="col-md-2">
                            <form class="form-horizontal" role="form">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                        Categories <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a></li>
                                    </ul>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row product_list">
                        <div class="col-md-9">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="col-item">
                                        <div class="photo">
                                            <img src="img/uploads/2014/11/image1xxl-11-290x370.jpg" class="img-responsive center-block" alt="a" />
                                            <img src="img/uploads/2014/11/image4xxl1-290x371.jpg" class="img-responsive" alt="a" />
                                        </div>
                                        <div class="info">
                                            <div class="row">
                                                <div class=" col-md-6">
                                                    <h5>
                                                        Sample Product</h5>
                                                    <h5>
                                                        $199.99</h5>
                                                </div>
                                                <div class=" hidden-sm col-md-6">
                                                    <i class="fa fa-plus"></i>
                                                </div>
                                            </div>
                                            <div class="clearfix">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="col-item">
                                        <div class="photo">
                                            <img src="img/uploads/2014/11/image1xxl-290x370.jpg" class="img-responsive" alt="a" />
                                            <img src="img/uploads/2014/11/image4xxl1-290x370.jpg" class="img-responsive" alt="a" />
                                        </div>
                                        <div class="info">
                                            <div class="row">
                                                <div class=" col-md-6">
                                                    <h5>
                                                        Product Example</h5>
                                                    <h5 class="-text-color">
                                                        $249.99</h5>
                                                </div>

                                                <div class=" hidden-sm col-md-6">
                                                    <i class="fa fa-plus"></i>
                                                </div>
                                            </div>
                                            <div class="clearfix">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="col-item">
                                        <div class="photo">
                                            <img src="img/uploads/2014/11/image2xxl-1-290x370.jpg" class="img-responsive" alt="a" />
                                            <img src="img/uploads/2014/11/image4xxl5-290x370.jpg" class="img-responsive" alt="a" />
                                        </div>
                                        <div class="info">
                                            <div class="row">
                                                <div class=" col-md-6">
                                                    <h5>
                                                        Next Sample Product</h5>
                                                    <h5 class="-text-color">
                                                        $149.99</h5>
                                                </div>

                                                <div class=" hidden-sm col-md-6">
                                                    <i class="fa fa-plus"></i>
                                                </div>
                                            </div>
                                            <div class="clearfix">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="col-item">
                                        <div class="photo">
                                            <img src="img/uploads/2014/11/image1xxl-11-290x370.jpg" class="img-responsive center-block" alt="a" />
                                            <img src="img/uploads/2014/11/image4xxl1-290x371.jpg" class="img-responsive" alt="a" />
                                        </div>
                                        <div class="info">
                                            <div class="row">
                                                <div class=" col-md-6">
                                                    <h5>
                                                        Sample Product</h5>
                                                    <h5>
                                                        $199.99</h5>
                                                </div>

                                                <div class=" hidden-sm col-md-6">
                                                    <i class="fa fa-plus"></i>
                                                </div>
                                            </div>
                                            <div class="clearfix">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="col-item">
                                        <div class="photo">
                                            <img src="img/uploads/2014/11/image1xxl-290x370.jpg" class="img-responsive" alt="a" />
                                            <img src="img/uploads/2014/11/image4xxl1-290x370.jpg" class="img-responsive" alt="a" />
                                        </div>
                                        <div class="info">
                                            <div class="row">
                                                <div class=" col-md-6">
                                                    <h5>
                                                        Product Example</h5>
                                                    <h5 class="-text-color">
                                                        $249.99</h5>
                                                </div>
                                                <div class=" hidden-sm col-md-6">
                                                    <i class="fa fa-plus"></i>
                                                </div>
                                            </div>
                                            <div class="clearfix">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="col-item">
                                        <div class="photo">
                                            <img src="img/uploads/2014/11/image2xxl-1-290x370.jpg" class="img-responsive" alt="a" />
                                            <img src="img/uploads/2014/11/image4xxl5-290x370.jpg" class="img-responsive" alt="a" />
                                        </div>
                                        <div class="info">
                                            <div class="row">
                                                <div class=" col-md-6">
                                                    <h5>
                                                        Next Sample Product</h5>
                                                    <h5 class="-text-color">
                                                        $149.99</h5>
                                                </div>
                                                <div class=" hidden-sm col-md-6">
                                                    <i class="fa fa-plus"></i>
                                                </div>
                                            </div>
                                            <div class="clearfix">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="col-item">
                                        <div class="photo">
                                            <img src="img/uploads/2014/11/image1xxl-11-290x370.jpg" class="img-responsive center-block" alt="a" />
                                            <img src="img/uploads/2014/11/image4xxl1-290x371.jpg" class="img-responsive" alt="a" />
                                        </div>
                                        <div class="info">
                                            <div class="row">
                                                <div class=" col-md-6">
                                                    <h5>
                                                        Sample Product</h5>
                                                    <h5>
                                                        $199.99</h5>
                                                </div>
                                                <div class=" hidden-sm col-md-6">
                                                    <i class="fa fa-plus"></i>
                                                </div>
                                            </div>
                                            <div class="clearfix">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="col-item">
                                        <div class="photo">
                                            <img src="img/uploads/2014/11/image1xxl-290x370.jpg" class="img-responsive" alt="a" />
                                            <img src="img/uploads/2014/11/image4xxl1-290x370.jpg" class="img-responsive" alt="a" />
                                        </div>
                                        <div class="info">
                                            <div class="row">
                                                <div class=" col-md-6">
                                                    <h5>
                                                        Product Example</h5>
                                                    <h5 class="-text-color">
                                                        $249.99</h5>
                                                </div>
                                                <div class=" hidden-sm col-md-6">
                                                    <i class="fa fa-plus"></i>
                                                </div>
                                            </div>
                                            <div class="clearfix">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="col-item">
                                        <div class="photo">
                                            <img src="img/uploads/2014/11/image2xxl-1-290x370.jpg" class="img-responsive" alt="a" />
                                            <img src="img/uploads/2014/11/image4xxl5-290x370.jpg" class="img-responsive" alt="a" />
                                        </div>
                                        <div class="info">
                                            <div class="row">
                                                <div class=" col-md-6">
                                                    <h5>
                                                        Next Sample Product</h5>
                                                    <h5 class="-text-color">
                                                        $149.99</h5>
                                                </div>
                                                <div class=" hidden-sm col-md-6">
                                                    <i class="fa fa-plus"></i>
                                                </div>
                                            </div>
                                            <div class="clearfix">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="col-item">
                                        <div class="photo">
                                            <img src="img/uploads/2014/11/image1xxl-11-290x370.jpg" class="img-responsive center-block" alt="a" />
                                            <img src="img/uploads/2014/11/image4xxl1-290x371.jpg" class="img-responsive" alt="a" />
                                        </div>
                                        <div class="info">
                                            <div class="row">
                                                <div class=" col-md-6">
                                                    <h5>
                                                        Sample Product</h5>
                                                    <h5>
                                                        $199.99</h5>
                                                </div>
                                                <div class=" hidden-sm col-md-6">
                                                    <i class="fa fa-plus"></i>
                                                </div>
                                            </div>
                                            <div class="clearfix">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="col-item">
                                        <div class="photo">
                                            <img src="img/uploads/2014/11/image1xxl-290x370.jpg" class="img-responsive" alt="a" />
                                            <img src="img/uploads/2014/11/image4xxl1-290x370.jpg" class="img-responsive" alt="a" />
                                        </div>
                                        <div class="info">
                                            <div class="row">
                                                <div class=" col-md-6">
                                                    <h5>
                                                        Product Example</h5>
                                                    <h5 class="-text-color">
                                                        $249.99</h5>
                                                </div>
                                                <div class=" hidden-sm col-md-6">
                                                    <i class="fa fa-plus"></i>
                                                </div>
                                            </div>
                                            <div class="clearfix">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="col-item">
                                        <div class="photo">
                                            <img src="img/uploads/2014/11/image2xxl-1-290x370.jpg" class="img-responsive" alt="a" />
                                            <img src="img/uploads/2014/11/image4xxl5-290x370.jpg" class="img-responsive" alt="a" />
                                        </div>
                                        <div class="info">
                                            <div class="row">
                                                <div class=" col-md-6">
                                                    <h5>
                                                        Next Sample Product</h5>
                                                    <h5 class="-text-color">
                                                        $149.99</h5>
                                                </div>
                                                <div class=" hidden-sm col-md-6">
                                                    <i class="fa fa-plus"></i>
                                                </div>
                                            </div>                                          
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Bootstrap core JavaScript
            ================================================== -->
            <!-- Placed at the end of the document so the pages load faster -->
            <script src="js/jquery.min.js"></script>

            <script src="js/bootstrap.min.js"></script>
            <script src="js/Obj.min.js"></script>
            <script src="js/addSlider.min.js"></script>
            <script src="js/scripts.js"></script>
        </div>
    </body>
</html>