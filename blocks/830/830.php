<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
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
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>

    </head>
    <body style="color: #666;background-color: #1f1f1f;">
        <div class="type-830">
            <!-- BENGIN CONTENT -->
            <div class="container">
                <div class="title col-md-12 col-sm-12 col-sm-12 ">
                    <div class="row">
                        <h1>Welcome to our company</h1>
                        <span>Quisque porttitor sem libero auctor lorem fringilla sit amehasellus gravida nisi elitam egestda.</span>
                    </div>
                </div>
                <div class="left-content col-md-6 col-sm-6 col-xs-12 ">               
                    <h2>Who We Are</h2>
                    <p class="lead">Lorem ipsum dolol standards in the productio orem imet, consectetur adipisicing elit, do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <p>Lorem ipsum dolol standards in the productio orem imet, consectetur adipisicing elit, do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolol standards in the productio orem imet, consectetur adipisicing elit, do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <p><a class="btn-outline " href="#">More Details</a></p>    
                </div>
                <div class="right-content col-md-6 col-sm-6 col-xs-12">
                    <div class="block">
                        <h3><span><i class="fa fa-gears "></i></span> Technology</h3>
                        <p>Sedquis viverra enim. Vivamus aliquet rutrum dui a varius. Mauris ornare tortor in eleifend blanditullam ut ligula et neque.</p>
                    </div>
                    <div class="block">
                        <h3><span><i class="fa fa-dashboard "></i></span> Performance</h3>
                        <p>Sedquis viverra enim. Vivamus aliquet rutrum dui a varius. Mauris ornare tortor in eleifend blanditullam ut ligula et neque.</p>
                    </div>
                    <div class="block">
                        <h3><span><i class="fa fa-lightbulb-o "></i></span> Innovations</h3>
                        <p>Sedquis viverra enim. Vivamus aliquet rutrum dui a varius. Mauris ornare tortor in eleifend blanditullam ut ligula et neque.</p>
                    </div>
                </div>
            </div>
            <!-- END CONTENT -->
        </div>
    </body>
</html>