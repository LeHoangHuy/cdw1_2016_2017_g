<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <title>Home – STEEL</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/834.less', 'css/834.css');
        ?>
        <link href="css/834.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="type-834">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                            <div class="tp-blog-pic">
                                <img alt="blog-img" title="blog-img" class="img-responsive" src="images/service.jpg"></div>
                            <div class="tp-blog-info">

                                <div class="row">
                                    <!-- tp-blog-post -->
                                    <h1 class="tp-post-title"><a href="#">Machine Services</a></h1> 
                                    <div class="col-md-12">
                                        <p>Sed vel malesuada ipsum ras pulvinar quam et justo luctusibused urna lorem euismod noi cusantium quam ultricies eget tempor id aliquam eget magna quametc risus vitae volutpat sit amet ellentesque non vulputate metust sed orci non ex ultrices rhoncus ellentesque et enim sed nunc pellentesque varius.</p>
                                        <p>Nullam et volutpat quam. Phasellus mattis ipsum eget nequ ornare dolor dolor porttitor lorem. Vivamus a leo eu massa tempus aetu met sit amet. Cras pulvinar quam et justo luctusibus. ed urna lorem, euismod comnoi cusantium quam, ultriet tempor id, aliquam eget magna m lorem ipsume.</p>
                                        <blockquote><p><i>Vivamus a leo eu massa tempus aetu met sit amet. Cras pulvinar quam et justo ctusibus. ed urna lorem, euismod comnoi cusantium quam dolor sit amet.</i></p></blockquote>
                                        <p>Nullam et volutpat quam. Phasellus mattis ipsum eget nequ ornare dolor dolor porttitor lorem. Vivamus a leo eu massa tempus aetu met sit amet. Cras pulvinar quam et justo luctusibus. ed urna lorem, euismod comnoi cusantium quam, ultriet tempor id, aliquam eget magna m lorem ipsume.</p>
                                        <p class="highlight">Phasellus mattis ipsum eget nequ ornare dolor dolor porttitor lorem. Vivamus a leo eu massa tempus aetu met sit amet. Cras pulvinar quam et justo luctusibus.</p>
                                        <p>Nullam et volutpat quam. Phasellus mattis ipsum eget nequ ornare dolor dolor porttitor lorem. Vivamus a leo eu massa tempus aetu met sit amet. Cras pulvinar quam et justo luctusibus. ed urna lorem, euismod comnoi cusantium quam, ultriet tempor id, aliquam eget magna m lorem ipsume.</p>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>


            </div>


    </body>

</html>