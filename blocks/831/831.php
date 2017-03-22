<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/831.less', 'css/831.css');
        ?>
        <link href="css/831.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="type-831">
            <!-- BEGIN CONTENT-->
            <div class="container">
                <div class="row">
                    <div class="title">
                        <h1>Latest From Blog News</h1>
                        <p>Quisque porttitor sem liberoet auctor lorem fringilla sit amehasellus gravida nisi elitam egestda.</p>
                    </div>
                    <div class="clearfix"></div>
                    <!-- BEGIN BLOCK -->
                    <div class="block col-md-6">
                        <div class="images">
                            <img src="images/blog-img1-e1440641700467.jpg" alt=""/>
                        </div>
                        <div class="info">
                            <div class="time col-md-3">
                                <div class="day-month"><span>27 / 07</span></div>
                                <div class="clearfix"></div>
                                <div class="years"><span>2015</span></div>
                            </div>
                            <div class="name col-md-9">
                                <h1><a href="#"> The dumbest smartphone debate</a></h1>
                                <div class="clearfix"></div>
                                <div class="menu">
                                    <li><a href="#" class="fa fa-comment-o"><span>0 Comment</span></a></li>
                                    <li><a href="#" class="fa fa-user"><span>Admin</span></a></li>
                                    <li><a href="#" class="fa fa-tags"><span>Bars</span></a></li>
                                    <li><a href="#"><span>, Copper Base</span></a></li>
                                    <li><a href="#"><span style="color:#fde230;">in</span><span>Plates</span></a></li>
                                    <li><a href="#"><span>, Rolled</span></a></li>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="descripttion">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis consequat hendrerit. Etiam et aliquet mauris. Fusce nunc nisl, varius non nulla vitae, euismod ultricies ligula.</p>
                            </div>
                        </div>
                    </div>
                    <!-- END BLOCK -->
                    <!-- BEGIN BLOCK -->
                    <div class="block col-md-6">
                        <div class="images">
                            <img src="images/blog-img2-e1440641680103.jpg" alt=""/>
                        </div>
                        <div class="info">
                            <div class="time col-md-3">
                                <div class="day-month"><span>27 / 07</span></div>
                                <div class="clearfix"></div>
                                <div class="years"><span>2015</span></div>
                            </div>
                            <div class="name col-md-9">
                                <h1><a href="#"> Robots Replace Miners In Oz</a></h1>
                                <div class="clearfix"></div>
                                <div class="menu">
                                    <li><a href="#" class="fa fa-comment-o"><span>0 Comment</span></a></li>
                                    <li><a href="#" class="fa fa-user"><span>Admin</span></a></li>
                                    <li><a href="#" class="fa fa-tags"><span>Industrial</span></a></li>
                                    <li><a href="#"><span>,Mining</span></a></li>
                                    <li><a href="#"><span>,Steel Forgings</span></a></li>
                                    <li><a href="#"><span style="color:#fde230;">in</span><span>Bars</span></a></li>
                                    <li><a href="#"><span>,Plates</span></a></li>
                                    <li><a href="#"><span>,Sheet Steel</span></a></li>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="descripttion">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis consequat hendrerit. Etiam et aliquet mauris. Fusce nunc nisl, varius non nulla vitae, euismod ultricies ligula.</p>
                            </div>
                        </div>
                    </div>
                    <!-- END BLOCK -->
                </div>        
            </div>
            <!-- END CONTENT -->
        </div>
    </body>
</html>