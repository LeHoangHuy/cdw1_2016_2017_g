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
        $less->compileFile('less/type-i-2.less', 'css/type-i-2.css');
        ?>
        <link href="css/type-i-2.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/scripts.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="type-i-2">
            <div class="container">
                <div id="pb-left-column" class="col-sm-6 col-xs-12">
                    <div class="image_container">
                        <div id="image-block" class="clearfix col-md-9"> 
                            <div class="dress-large-image zoom">
                                <img src="images/black-bag.jpg" alt="" class="large"/>
                            </div>
                        </div>
                        <div id="views_block" class="clearfix col-md-3"> 
                            <i class="fa fa-chevron-up slide-up" aria-hidden="true" onclick="changeUp()"></i>
                            <div class="dress-box" id="dress-boxmobile">
                                <div class="dress-box-slide">
                                    <img src="images/black-bag (4).jpg" alt="" class="small"/>
                                    <img src="images/black-bag (5).jpg" alt="" class="small"/>
                                    <img src="images/black-bag (6).jpg" alt="" class="small"/>
                                    <img src="images/black-bag.jpg" alt="" class="small"/>
                                    <img src="images/black-bag (4).jpg" alt="" class="small"/>
                                </div>
                            </div>
                            <i class="fa fa-chevron-down slide-down" style="visibility: hidden;" aria-hidden="true" onclick="changeDown()"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>