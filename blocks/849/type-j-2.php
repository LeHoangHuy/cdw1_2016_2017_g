<!DOCTYPE html>

<html style="background-color: #f3f3f4;">

    <head>
        <title>Aurum - Fashion</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/type-7.less', 'css/type-7.css');
        ?>
        <link href="css/type-7.css" rel="stylesheet" type="text/css" />


    </head>

    <body>
        <div class="type-7">
            
            <!-- Video Background -->
            <div class="video">
                <article>
                    <h1>EXPLORE THE NEW COLLECTION</h1>
                </article>
                <video autoplay="" loop=""  poster="" id="video-background">
                    <source src="video/video1.mp4" type="video/mp4">Your browser does not support the video tag. I suggest you upgrade your browser.
                </video>
            </div>

            <!-- /topheader -->






           
            </div>



            <!-- Bootstrap core JavaScript
            ================================================== -->
            <!-- Placed at the end of the document so the pages load faster -->
            <script src="js/jquery.min.js"></script>

            <script src="js/bootstrap.min.js"></script>
            <script src="js/scripts.js"></script>
        </div>
    </body>


</html>