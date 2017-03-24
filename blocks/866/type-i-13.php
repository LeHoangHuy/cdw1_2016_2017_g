<!DOCTYPE html>

<html style="background-color: #f3f3f4;">

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
        $less->compileFile('less/type-i-13.less', 'css/type-i-13.css');
        ?>
        <link href="css/type-i-13.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>


    </head>

    <body>
        <div class="type-i-13">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="slide4">
                            <div class="hovereffect-2">
                                <div class="carousel-title">
                                    <h3 class="lmroman1">RECENT POSTS</h3>
                                    <div class="bx-controls">
                                        <div class="bx-controls-direction1">     
                                            <a class="left carousel-control nextbutton" href="#carousel1234"data-slide="prev">
                                                <i class="fa fa-angle-left"></i>
                                            </a>
                                            <a class="right carousel-control prebutton" href="#carousel1234"data-slide="next">
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hovereffect-1">
                                <div class="carousel carousel-showmanymoveone slide" id="carousel1234">
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <div class="col-xs-12 col-sm-6">
                                                <div class="img-responsive"> 
                                                    <div class="ima3">
                                                        <img src="images/5.1.jpg" width="100%"  height="230"alt=""/>
                                                        <div class="blog-info">
                                                            <div class="lmromandemi">
                                                                <div> 2<br> <span>MAR</span></div>
                                                            </div>
                                                            <div class="blog-post-likes" onclick="addRating(3);">
                                                                <svg class="svgic">
                                                                <i class="glyphicon glyphicon-heart icon10"></i>
                                                                </svg>
                                                                <div>49</div>                                       
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="lmroman3"> 
                                                        <a href="#" >Fusce viverra ligula at justo interdum</a>
                                                    </div>
                                                    <div class="post-additional-info">
                                                        <span class="post-author">Marek </span>
                                                        <span class="post-tags">tag02, tag03</span> 
                                                        <span class="post-views">
                                                            <div class="svgic svgic-eye">
                                                                <i class="glyphicon glyphicon-eye-open"></i>
                                                            </div> 803</span>
                                                    </div>
                                                    <div class="blog-post-desc">
                                                        <p>Donec feugiat justo id volutpat fermentum. Curabitur faucibus<br>
                                                            lacinia turpis, eu consectetur urna vehicula sit amet. Duis ut neque<br>
                                                            lobortis, rutrum purus sit amet, sodales ...</p>
                                                    </div>
                                                    <div class="giang3">
                                                        <a class="addcart" href="#">Add to cart</a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-xs-12 col-sm-6 ">                                               
                                                <div class="img-responsive"> 
                                                    <div class="ima3">
                                                        <img src="images/5.2.jpg" width="100%"  height="230"  alt=""/>
                                                        <div class="blog-info">
                                                            <div class="lmromandemi">
                                                                <div> 9<br> <span>MAR</span></div>
                                                            </div>
                                                            <div class="blog-post-likes" onclick="addRating(3);">
                                                                <svg class="svgic">
                                                                <i class="glyphicon glyphicon-heart icon10"></i>
                                                                </svg>
                                                                <div>66</div>                                       
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="lmroman3"> 
                                                        <a href="#" >Cras tempor commodo augue at ullamcorpe</a>
                                                    </div>
                                                    <div class="post-additional-info">
                                                        <span class="post-author">Marek </span>
                                                        <span class="post-tags">tag02, tag03</span> 
                                                        <span class="post-views">
                                                            <div class="svgic svgic-eye">
                                                                <i class="glyphicon glyphicon-eye-open"></i>
                                                            </div> 978</span>
                                                    </div>
                                                    <div class="blog-post-desc">
                                                        <p>Vivamus posuere ipsum vel porttitor aliquet. Etiam non pharetra<br>
                                                            dui. In fringilla neque et ex suscipit, sed tristique augue volutpat.<br>
                                                            Sed id nisl eget elit varius feugiat. ...</p>
                                                    </div>
                                                    <div class="giang3">
                                                        <a class="addcart" href="#">Add to cart</a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-xs-12 col-sm-6">                                               
                                                <div class="img-responsive"> 
                                                    <div class="ima3">
                                                        <img src="images/5.2.jpg" width="100%"  height="230" alt=""/>
                                                        <div class="blog-info">
                                                            <div class="lmromandemi">
                                                                <div> 9<br> <span>MAR</span></div>
                                                            </div>
                                                            <div class="blog-post-likes" onclick="addRating(3);">
                                                                <svg class="svgic">
                                                                <i class="glyphicon glyphicon-heart icon10"></i>
                                                                </svg>
                                                                <div>66</div>                                       
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="lmroman3"> 
                                                        <a href="#" >Cras tempor commodo augue at ullamcorpe</a>
                                                    </div>
                                                    <div class="post-additional-info">

                                                        <span class="post-author"> Marek </span>

                                                        <span class="post-tags">tag02, tag03</span> 
                                                        <span class="post-views">
                                                            <div class="svgic svgic-eye">
                                                                <i class="glyphicon glyphicon-eye-open"></i>
                                                            </div> 978</span>
                                                    </div>
                                                    <div class="blog-post-desc">
                                                        <p>Vivamus posuere ipsum vel porttitor aliquet. Etiam non pharetra<br>
                                                            dui. In fringilla neque et ex suscipit, sed tristique augue volutpat.<br>
                                                            Sed id nisl eget elit varius feugiat. ...</p>
                                                    </div>
                                                    <div class="giang3">
                                                        <a class="addcart" href="#">Add to cart</a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div> 
                        </div>
                    </div>   
                </div>
            </div>
        </div>
        <script src="js/scripts.js" type="text/javascript"></script>
    </body>

</html>