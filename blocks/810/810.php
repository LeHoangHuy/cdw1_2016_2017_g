<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/810.css" rel="stylesheet" type="text/css"/>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/810.less', 'css/810.css');
        ?>
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>

    </head>
    <body>
        <div class="type-810">
            <!-- BEGIN CONTENT -->
            <div class="container">
                <div class="row">
                    <div class="title">
                        <h3>Club Membership</h3>
                        <h4>Select the best plan</h4>
                    </div>
                    <div class="order col-md-12">
                        <!-- BEGIN COLUMNS -->
                        <div class="columns col-md-3">
                            <div class="block-title">
                                <h4>Junior</h4>
                            </div>
                            <div class="info">
                                <div class="price">
                                    <span class="currency">$</span>
                                    <span class="money"> 250</span>
                                    <span class="period"> /mth</span>
                                </div>
                                <div class="description">
                                    <p>Juniors must be less than 19 years old as at 1st January</p>
                                </div>
                                <a href="#" class="button">
                                    <span class="cube flip-to-top">
                                        <span class="default">
                                            <span>Order now</span>
                                        </span>
                                        <span class="active">
                                            <span>Order now</span>
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <!-- END COLUMNS -->
                        <!-- BEGIN COLUMNS -->
                        <div class="columns col-md-3">
                            <div class="block-title">
                                <h4>Individual</h4>
                            </div>
                            <div class="info">
                                <div class="price">
                                    <span class="currency">$</span>
                                    <span class="money"> 350</span>
                                    <span class="period"> /mth</span>
                                </div>
                                <div class="description">
                                    <p>Save $98 every year compared to the monthly plan by paying yearly.</p>
                                </div>
                                <a href="#" class="button">
                                    <span class="cube flip-to-top">
                                        <span class="default">
                                            <span>Order now</span>
                                        </span>
                                        <span class="active">
                                            <span>Order now</span>
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <!-- END COLUMNS --> 
                        <!-- BEGIN COLUMNS -->
                        <div class="columns col-md-3">
                            <div class="block-title">
                                <h4>Recommended</h4>
                            </div>
                            <div class="info">
                                <div class="price">
                                    <span class="currency">$</span>
                                    <span class="money"> 450</span>
                                    <span class="period"> /mth</span>
                                </div>
                                <div class="description">
                                    <p>Save $128 by inviting your family to train with you monthly</p>
                                </div>
                                <a href="#" class="button">
                                    <span class="cube flip-to-top">
                                        <span class="default">
                                            <span>Order now</span>
                                        </span>
                                        <span class="active">
                                            <span>Order now</span>
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <!-- END COLUMNS --> 
                        <!-- BEGIN COLUMNS -->
                        <div class="columns col-md-3">
                            <div class="block-title">
                                <h4>Family</h4>
                            </div>
                            <div class="info">
                                <div class="price">
                                    <span class="currency">$</span>
                                    <span class="money"> 450</span>
                                    <span class="period"> /mth</span>
                                </div>
                                <div class="description">
                                    <p>Juniors must be less than 19 years old as at 1st January</p>
                                </div>
                                <a href="#" class="button">
                                    <span class="cube flip-to-top">
                                        <span class="default">
                                            <span>Order now</span>
                                        </span>
                                        <span class="active">
                                            <span>Order now</span>
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <!-- END COLUMNS -->
                    </div>
                </div>
            </div>
            <!-- END CONTENT -->
        </div>
    </body>
</html>
