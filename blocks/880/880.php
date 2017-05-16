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
        $less->compileFile('less/880.less', 'css/880.css');
        ?>
        <link href="css/880.css" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <div class="type-880">
            <section class="page-title">
                <div class="container">
                    <div class="row">
                        <div class="content-box">
                            <h1>Show Cata</h1>
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
                        <div class="col-md-9 col-sm-8 col-xs-12">
                            <section class="blog-container">
                                <!--Blog Post-->
                                <div id="post-270">
                                    <!--Blog Post-->
                                    <div class="blog-post">
                                        <article class="inner-box">
                                            <!--Image-->
                                            <figure class="image">
                                                <a href="#"><img width="625" height="401" src="images/blog-image-6.jpg" class="img-responsive" alt="blog-image-6" sizes="(max-width: 625px) 100vw, 625px"></a>
                                                <div class="post-options">
                                                    <a href="#" class="heart-icon img-circle" data-id="270"><span class="fa fa-heart" style="margin-top: 11px;"></span></a>
                                                </div>
                                            </figure>
                                            <!--Lower Content-->
                                            <div class="lower-part">
                                                <div class="post-info">
                                                    Posted On<a class="extraspace" href="#"><strong>Jan 13, 2016</strong></a>
                                                </div>
                                                <div class="post-title">
                                                    <h3><a href="#">This is post with big title and image</a></h3>
                                                </div>
                                                <div class="post-text">lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown lip printer took a galley of type and scrambled it to make a type specimen book. . “ There are many variations of passages of Lorem Ipsum </div>
                                                <div class="post-info lower">
                                                    <i class="fa fa-comments"></i><a href="#"><strong>No Comments</strong> &nbsp; </a> | &nbsp; <i class="fa fa-tag"></i><a href="#" rel="category">Residential</a>
                                                    <a href="#" class="read-more">Read More</a>
                                                </div>
                                            </div>
                                        </article>
                                    </div>                       
                                </div>
                                <!--Blog Post-->
                                <div id="post-269">
                                    <!--Blog Post-->
                                    <div class="blog-post">
                                        <article class="inner-box">
                                            <!--Image-->
                                            <figure class="image">
                                                <a href="#"><img src="images/blog-image-6.jpg" sizes="(max-width: 625px) 100vw, 625px"></a>
                                                <div class="post-options">
                                                    <a href="#" class="heart-icon img-circle" data-id="269"><span class="icon fa fa-heart" style="margin-top:11px; "></span></a>
                                                </div>
                                            </figure>
                                            <!--Lower Content-->
                                            <div class="lower-part">
                                                <div class="post-info">
                                                    Posted On<a class="extraspace" href="#"><strong>Jan 13, 2016</strong></a>
                                                </div>
                                                <div class="post-title"><h3><a href="#">This is post with big title and image</a></h3></div>
                                                <div class="post-text">lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown lip printer took a galley of type and scrambled it to make a type specimen book. . “ There are many variations of passages of Lorem Ipsum</div>
                                                <div class="post-info lower">
                                                    <i class="fa fa-comments"></i><a href="#"><strong>No Comments</strong> &nbsp; </a> | &nbsp; <i class="fa fa-tag"></i><a href="#" rel="category">Residential</a>
                                                    <a href="#" class="read-more">Read More</a>
                                                </div>
                                            </div>
                                        </article>
                                    </div>                        
                                </div>
                            </section> 
                            <div class="pager-outer">
                                <div class="col-md-12">
                                    <div class="row">
                                        <ul class="pagination">
                                            <li><span>1</span></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">»</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-12">
                            <aside class="side">
                                <div class="widget">
                                    <form action="#" method="get" class="search-form">
                                        <div class="form-group">
                                            <input type="search" name="s" value="" placeholder="Enter a Keyword">
                                            <button type="submit" name="submit"><span class="fa fa-search"></span></button>
                                        </div>
                                    </form>
                                </div>
                                <div class="widget">
                                    <div class="side-title">
                                        <h3>Categories</h3>
                                    </div>
                                    <ul>
                                        <li><a href="#">Blog</a></li>
                                        <li><a href="#">Commercial</a></li>
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">Hostel</a></li>
                                        <li><a href="#">House</a></li>
                                        <li><a href="#">our blog</a></li>
                                        <li><a href="#">Residential</a></li>
                                    </ul>
                                </div>
                            </aside>
                        </div>
                        <div>&nbsp;</div>
                    </section>
                </div>
            </div>
        </div>
    </body>
</html>