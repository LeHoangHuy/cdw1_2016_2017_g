<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/881.less', 'css/881.css');
        ?>
        <link href="css/881.css" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <div class="type-881">
            <section class="page-title">
                <div class="container">
                    <div class="row">
                        <div class="content-box">
                            <h1>DETAILS CATA</h1>
                            <div class="bread-crumb">
                                <ul class="breadcrumb">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">Archive for January, 2016</a></li>
                                </ul>			
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="container">
                <div class="row">
                    <section class="sidebar-page"> 
                        <section class="blog-container">
                            <!--Blog Post-->
                            <div id="post-270">
                                <!--Blog Post-->
                                <div class="blog-post">
                                    <article class="inner-box">
                                        <!--Image-->
                                        <figure class="image">
                                            <a href="#"><img src="images/blog-image-6.jpg" sizes="(max-width: 625px) 100vw, 625px"></a>
                                            <div class="post-options">
                                                <a href="#" class="heart-icon img-circle" data-id="270"><span class="fa fa-heart" style="margin-top: 11px;"></span></a>
                                            </div>
                                        </figure>
                                        <!--Lower Content-->
                                        <div class="lower-part">
                                            <div class="post-info">
                                                Posted On<a href="#"><strong>Jan 13, 2016</strong></a>
                                            </div>
                                            <div class="post-title">
                                                <h3><a href="#">This is post with big title and image</a></h3>
                                            </div>
                                            <div class="post-text">
                                                <p>lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown lip printer took a galley of type and scrambled it to make a type specimen book.</p>
                                                <blockquote>
                                                    <p>“ There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour lorem ipsum making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words. “</p>
                                                </blockquote>
                                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don’t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn’t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words.</p>
                                            </div>
                                            <div class="post-info lower">
                                                <i class="fa fa-comments"></i><a href="#"><strong>No Comments</strong> &nbsp; </a> | &nbsp; <i class="fa fa-tag"></i><a href="#" rel="category">Residential</a>
                                                <ul class="social">
                                                    <li><a href="#" id="s-google" class="fa fa-google-plus"></a></li>
                                                    <li><a href="#" id="s-facebook" class="fa fa-facebook"></a></li>
                                                    <li><a href="#" id="s-twitter" class="fa fa-twitter"></a></li>
                                                    <li><a href="#" id="s-pinterest" class="fa fa-pinterest"></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </article>
                                </div>                       
                            </div>
                        </section> 
                    </section>
                </div>
            </div>
        </div>
    </body>
</html>