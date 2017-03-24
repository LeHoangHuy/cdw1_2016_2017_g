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
        $less->compileFile('less/type-3-slider1.less', 'css/type-3-slider1.css');
        ?>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">

        <script src="js/jquery-1.11.0.min.js"></script>
        <script src="js/bootstrap.min.js"></script> 
        <link rel="stylesheet" href="css/type-3-slider1.css">
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>

        <div class="zaro">
            <div id="pattent" class="slidelip white-background">  
                <div class="container container-modify margin-auto header">

                    <!--SLIDE SHOW TUYEN-->  
                    <div id="john-carousel" >
                        <table class="title-table">
                            <tbody>
                                <tr>
                                    <td class="col-md-6 col-sm-6">
                                        <span class="title-wing"></span>
                                    </td>

                                    <td class="carousel-title">
                                        <h3> Featured Products </h3>
                                        <div class=" smooth02 zaro-controls carousel-control" href="#myCarousel2" data-slide="prev">
                                            <i class="fa fa-angle-left"></i>
                                        </div>
                                        <div class="zaro-next smooth02 zaro-controls carousel-control" href="#myCarousel2" data-slide="next">
                                            <i class="fa fa-angle-right"></i>
                                        </div>
                                    </td>

                                    <td class="col-md-6 col-sm-6  ">
                                        <span class="title-wing"></span>
                                    </td> 
                                </tr>
                            </tbody>
                        </table>


                        <div class="carousel slide" data-ride="carousel" data-type="a" data-interval="3000" id="myCarousel2">
                            <div class="carousel-inner"> 
                                <div class="item active"> 
                                    <div class="col-md-6 col-sm-6 col-xs-12 item-hover margin-padding"> 
                                        <div class="col-md-6 col-sm-12 col-xs-12 box-carousel">
                                            <figure> 
                                                <div class="blog-info">
                                                    <div class="blog-date main_bg grayshadow">
                                                        <div> 9 <span>Mar</span></div>
                                                    </div>
                                                    <div class="blog-post-likes grayshadow likes_4" onclick="addRating(4);">
                                                        <i class="fa fa-heart"></i>
                                                        <div class="lmromandemi">72</div>
                                                    </div>
                                                </div>
                                            </figure>
                                            <a class="box-img-carousel" style="background: url(images/slide3/4-wide.jpg) no-repeat ;"></a>  
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-xs-12 box-content-carousel">
                                            <h2>
                                                <a>Lorem ipsumhuwf uhuw jijio dolor sit amet</a>
                                            </h2>
                                            <div class="additional-info">
                                                <span class="post-author">
                                                    <i class="fa fa-user"></i>
                                                    <p>Makred</p>
                                                </span>
                                                <span class="post-comment">
                                                    <i class="fa fa-comment"></i>
                                                    <p>tag02, tag03 </p>
                                                </span>
                                                <span class="post-view">
                                                    <i class="fa fa-eye"></i>
                                                    <p> 1711</p>
                                                </span> 
                                            </div>
                                            <div class="post-details">
                                                <p>Donec feugiat justo id volutpat fermentum. Curabitur faucibus lacinia turpis, eu consectetur urna vehicula sit amet. Duis ut neque lobortis, rutrum purus sit amet, sodales ...</p>
                                            </div>
                                            <div class="post-read">
                                                <a class="read-more">Read more</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="item"> 
                                    <div class="col-md-6 col-sm-6 col-xs-12 item-hover margin-padding"> 
                                        <div class="col-md-6 col-sm-12 col-xs-12 box-carousel">
                                            <figure> 
                                                <div class="blog-info">
                                                    <div class="blog-date main_bg grayshadow">
                                                        <div> 9 <span>Mar</span></div>
                                                    </div>
                                                    <div class="blog-post-likes grayshadow likes_4" onclick="addRating(4);">
                                                        <i class="fa fa-heart"></i>
                                                        <div class="lmromandemi">72</div>
                                                    </div>
                                                </div>
                                            </figure>
                                            <a class="box-img-carousel" style="background: url(images/slide3/2-wide.jpg) no-repeat ;"></a>  
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-xs-12 box-content-carousel">
                                            <h2>
                                                <a>Lorem ipsumhuwf uhuw jijio dolor sit amet</a>
                                            </h2>
                                            <div class="additional-info">
                                                <span class="post-author">
                                                    <i class="fa fa-user"></i>
                                                    <p>Makred</p>
                                                </span>
                                                <span class="post-comment">
                                                    <i class="fa fa-comment"></i>
                                                    <p>tag02, tag03 </p>
                                                </span>
                                                <span class="post-view">
                                                    <i class="fa fa-eye"></i>
                                                    <p> 1711</p>
                                                </span> 
                                            </div>
                                            <div class="post-details">
                                                <p>Donec feugiat justo id volutpat fermentum. Curabitur faucibus lacinia turpis, eu consectetur urna vehicula sit amet. Duis ut neque lobortis, rutrum purus sit amet, sodales ...</p>
                                            </div>
                                            <div class="post-read">
                                                <a class="read-more">Read more</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="item"> 
                                    <div class="col-md-6 col-sm-6 col-xs-12 item-hover"> 
                                        <div class="col-md-6 col-sm-12 col-xs-12 box-carousel">
                                            <figure> 
                                                <div class="blog-info">
                                                    <div class="blog-date main_bg grayshadow">
                                                        <div> 9 <span>Mar</span></div>
                                                    </div>
                                                    <div class="blog-post-likes grayshadow likes_4" onclick="addRating(4);">
                                                        <i class="fa fa-heart"></i>
                                                        <div class="lmromandemi">72</div>
                                                    </div>
                                                </div>
                                            </figure>
                                            <a class="box-img-carousel" style="background: url(images/slide3/1-wide.jpg) no-repeat ;"></a>  
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-xs-12 box-content-carousel">
                                            <h2>
                                                <a>Lorem ipsumhuwf uhuw jijio dolor sit amet</a>
                                            </h2>
                                            <div class="additional-info">
                                                <span class="post-author">
                                                    <i class="fa fa-user"></i>
                                                    <p>Makred</p>
                                                </span>
                                                <span class="post-comment">
                                                    <i class="fa fa-comment"></i>
                                                    <p>tag02, tag03 </p>
                                                </span>
                                                <span class="post-view">
                                                    <i class="fa fa-eye"></i>
                                                    <p> 1711</p>
                                                </span> 
                                            </div>
                                            <div class="post-details">
                                                <p>Donec feugiat justo id volutpat fermentum. Curabitur faucibus lacinia turpis, eu consectetur urna vehicula sit amet. Duis ut neque lobortis, rutrum purus sit amet, sodales ...</p>
                                            </div>
                                            <div class="post-read">
                                                <a class="read-more">Read more</a>
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
        <script>
            $(document).ready(function () {
                //SLIDE TUYEN
                $('.carousel[data-type="a"] .item', this).each(function () {
                    var next = $(this).next();
                    if (!next.length) {
                        next = $(this).siblings(':first');
                    }
                    if ($(window).width() > 768) {
                        for (var i = 0; i < 1; i++) {
                            next = next.next();
                            if (!next.length) {
                                next = $(this).siblings(':first');
                            }
                            next.children(':first-child').clone().appendTo($(this));
                        }
                    } else {
                        for (var i = 0; i < 0; i++) {
                            next = next.next();
                            if (!next.length) {
                                next = $(this).siblings(':first');
                            }
                            next.children(':first-child').clone().appendTo($(this));
                        }
                    }

                    window.onresize = function (event)
                    {
                        document.location.reload(true);
                         
                    };
                });


            });
        </script>
    </body> 


</html>