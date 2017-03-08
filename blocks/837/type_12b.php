<!DOCTYPE html>

<html>

    <head>
        <meta charset="UTF-8">
        <title></title>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/styles.less', 'css/styles.css');
        ?>
        <!-- Important Owl stylesheet -->
        <link href="css/owl.carousel.css" rel="stylesheet" type="text/css"/>
        <!-- Default Theme -->
        <link href="css/owl.theme.css" rel="stylesheet" type="text/css"/>
        <!--  jQuery 1.7+  -->
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <!-- Include js plugin -->
        <script src="js/owl.carousel.js" type="text/javascript"></script>
        <link href="css/styles.css" rel="stylesheet" type="text/css" />

    </head>

    <body>
        <div class="type-12b">
            <div id="owl-demo" class="owl-carousel owl-theme">

                <div class="item">  <img src="images/logo-1.jpg" alt=""/></div>

                <div class="item">  <img src="images/logo-1.jpg" alt=""/></div>

                <div class="item">  <img src="images/logo-2.jpg" alt=""/></div>

                <div class="item">  <img src="images/logo-3.jpg" alt=""/></div>

                <div class="item">  <img src="images/logo-4.jpg" alt=""/></div>

            </div>
            <script>
                $(document).ready(function () {

                    $("#owl-demo").owlCarousel({
                        autoPlay: 3000, //Set AutoPlay to 3 seconds

                        items: 4,
                        itemsDesktop: [1199, 3],
                        itemsDesktopSmall: [979, 3]

                    });

                });
            </script>
        </div>
    </body>
</html>
