<!DOCTYPE html>
<html>

    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php
        if (!class_exists('lessc')) {
            include ('libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/type-3-footer.less', 'css/type-3-footer.css');
        ?> 
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/type-3-footer.css" rel="stylesheet" type="text/css"/>

    </head> 

    <body>                

        <div class="footer-main">
            <footer class="main bg-dark-img">
                <div class="container container-modify margin-auto header">
                    <section class="widgets">

                        <div class="row">
                            <div id="text-2" class="col-md-3 widget widget_text">
                                <h4>INFORMATION</h4>
                                <div class="textwidget">At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur.</div>
                            </div>
                            <div id="nav_menu-2" class="col-md-3 col-xs-6 widget widget_nav_menu">
                                <h4> USEFUL LINKS</h4>
                                <div class="menu-footer-links-container">
                                    <ul id="menu-footer-links" class="menu">
                                        <li id="menu-item-19" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-19"><a href="#">Start teaching / learning</a></li>
                                        <li id="menu-item-20" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-20"><a href="#">Tutorials database</a></li>
                                        <li id="menu-item-21" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-21"><a href="#">Meet the team</a></li>
                                        <li id="menu-item-22" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-22"><a href="#">Our blog</a></li>
                                        <li id="menu-item-23" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-23"><a href="#">Contact us</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-6 footer-blog">
                                <h4>LATEST TWEETS</h4>
                                <ul class="media-list">
                                    <li class="media">
                                        <a class="pull-left" href="#">
                                            <img class="media-object img-rounded" src="images/blog_img_2-64x64.jpg" alt="">
                                        </a>
                                        <div class="media-body">
                                            <h5 class="media-heading">
                                                <a href="#">1000 Teacher Tutorials</a>
                                            </h5>
                                            <p>We have a numbe...</p>
                                            <span class="footer"><time>July 6, 2015</time>
                                                by kl-webmedia                            </span>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <a class="pull-left" href="#">
                                            <img class="media-object img-rounded" src="images/blog_img_1-64x64.jpg" alt="">
                                        </a>
                                        <div class="media-body">
                                            <h5 class="media-heading">
                                                <a href="#">New Tutorisection “Webdesign” opened</a>
                                            </h5>
                                            <p>We have a numbe...</p>
                                            <span class="footer"><time>July 6, 2015</time>
                                                by kl-webmedia                            </span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12 footer-social">
                                <h4>FACEBOOK</h4>
                                <a target="#" class="btn btn-social social-facebook" href="#"><i class="fa fa-facebook"> </i></a>
                                <a class="btn btn-social social-youtube" href="#"><i class="fa fa-youtube"></i></a>
                                <a class="btn btn-social social-twitter" href="#"><i class="fa fa-twitter"></i></a>
                                <a class="btn btn-social social-gplus" href="#"><i class="fa fa-google-plus"></i></a>
                                <a class="btn btn-social social-dribbble" href="#"><i class="fa fa-dribbble"></i></a>
                                <a class="btn btn-social social-linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                                <a class="btn btn-social social-tumblr" href="#"><i class="fa fa-tumblr"></i></a>
                            </div>
                        </div>

                    </section>
                </div>
                <section class="copyright">
                    <div class="container container-modify margin-auto header">
                        <div>© Copyright 2014 <b>KL-Webmedia.com</b> &nbsp; | &nbsp; All rights reserved</div>
                    </div>
                </section>
            </footer>
        </div>


        <script src="scripts/jquery-1.11.0.min.js" type="text/javascript"></script>
        <script src="scripts/bootstrap.min.js" type="text/javascript"></script>

    </body>

</html>