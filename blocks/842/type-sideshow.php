<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
            $less->compileFile('less/type-sideshow.less', 'css/type-sideshow.css');
        ?>
        <link href="css/type-sideshow.css" rel="stylesheet" type="text/css" />
       
</head>

<body>
    <div class="type-sideshow">
        <div id="carousel" class="carousel" data-ride="carousel">
            <!-- Content_header_top -->
            <div class="content_header_top">
                <div class="content_inner">
                    <div class="header_content">
                        <div class="header_cms_text"><p>24x7 online Free Support</p></div>
                    </div>
                </div>
                <div class="content_inner">
                    <div class="header_content">
                        <div class="header_cms_text"><p>100% money back guarantee</p></div>
                    </div>
                </div>
                <div class="content_inner">
                    <div class="header_content">
                        <div class="header_cms_text"><p>Free world wide shipping</p></div>
                    </div>
                </div>
            </div><!--end-content_header_top-->
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
            </ol>
            <!-- Carousel items -->
            <div class="carousel-inner">
                <div class="active item"><img src="images/main-banner1.jpg" alt=""/></div>
                <div class="item"><img src="images/main-banner2.jpg" alt=""/></div>
                <div class="item"><img src="images/main-banner3.jpg" alt=""/></div>
            </div>
            <!-- Carousel nav -->
            <a class="carousel-control left left-hover fa fa-long-arrow-right" href="#carousel" data-slide="prev"></a>
            <a class="carousel-control right right-hover fa fa-long-arrow-left" href="#carousel" data-slide="next"></a>
        </div>
    </div>
    
</body>
    <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
</html>