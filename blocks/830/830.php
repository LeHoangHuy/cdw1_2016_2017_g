<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/830.less', 'css/830.css');
        ?>
        <link href="css/830.css" rel="stylesheet" type="text/css"/>
    </head>

    <body style="color: #666;background-color: #1f1f1f;-webkit-font-smoothing: antialiased;">
        <!-- BLOCK 830 -->
        <div class="type-830">
            <div data-vc-full-width="true" data-vc-full-width-init="true" class=" vc_custom_1437474892411 "  style="margin-top: 40px;">
                <div class="container">
                    <div class=" wpb_content_element col-md-12 col-sm-12 col-sm-12 ">
                        <h1 style="text-align: center;">Welcome to our company</h1>
                        <p style="text-align: center;">Quisque porttitor sem libero auctor lorem fringilla sit amehasellus gravida nisi elitam egestda.</p>
                    </div>
                    <div class=" wpb_content_element col-md-6 col-sm-6 col-xs-12 ">
                        <h1>Who We Are</h1>
                        <p class="lead">Lorem ipsum dolol standards in the productio orem imet, consectetur adipisicing elit, do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <p>Lorem ipsum dolol standards in the productio orem imet, consectetur adipisicing elit, do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolol standards in the productio orem imet, consectetur adipisicing elit, do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <p><a class="btn-outline " href="#">More Details</a></p>
                    </div>
                    <div class="tp-about-block col-md-6 col-sm-6 col-xs-12">
                        <h2><span><i class="fa fa-gears "></i></span> Technology</h2>
                        <p>Sedquis viverra enim. Vivamus aliquet rutrum dui a varius. Mauris ornare tortor in eleifend blanditullam ut ligula et neque.</p>
                    </div>
                    <div class="tp-about-block col-md-6 col-sm-6 col-xs-12">
                        <h2><span><i class="fa fa-dashboard "></i></span> Performance</h2>
                        <p>Sedquis viverra enim. Vivamus aliquet rutrum dui a varius. Mauris ornare tortor in eleifend blanditullam ut ligula et neque.</p>
                    </div>
                    <div class="tp-about-block col-md-6 col-sm-6 col-xs-12">
                        <h2><span><i class="fa fa-lightbulb-o "></i></span> Innovations</h2>
                        <p>Sedquis viverra enim. Vivamus aliquet rutrum dui a varius. Mauris ornare tortor in eleifend blanditullam ut ligula et neque.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- END BLOCK 830 -->
    </body>
</html>