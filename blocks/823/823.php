<!DOCTYPE html>

<html style="background-color: #f3f3f4;">

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <script src="js/jquery-2.1.4.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/javascript.js" type="text/javascript"></script>
        <script src="js/scripts.js" type="text/javascript"></script>

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/823.less', 'css/823.css');
        ?>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href ="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/823.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>
        <div class="type-823">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="heading">
                            <div class="title">
                                <h1>View Offered Course</h1>
                            </div>
                            <p>Duis tortor lacus, dictum nec augue a, euismod sagittis eros. Aliquam id ligula malesuada, egestas est ultricies, ullamcorper diam.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="course_category"> 
                            <div class="lms_hover_section">
                                <img width="360" height="363" src="images/HTML-and-Html5-360x363.jpg" sizes="(max-width: 360px) 100vw, 360px">
                                <div class="lms_hover_overlay">
                                    <div class="lms_hover_readmore">
                                        <a href="#" class="btn btn-default">Read More</a>
                                    </div>
                                </div>  
                            </div><div class="lms_course_mid_content">
                                <h3><a href="#">Learning Quality Graphic Design</a></h3> 
                                <div class="lms_course_meta"> 
                                    <div class="lms_course_instruct">                                     
                                        Instructor : <a href="#">rahultiwari</a>                               
                                    </div> 
                                    <span class="lms-course-students">
                                        <span>12</span> students enrolled
                                    </span>
                                    <span class="lms-course-price">$23.00</span>
                                </div>
                                <div class="course-introduce">
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form,</p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="course_category"> 
                            <div class="lms_hover_section">
                                <img width="360" height="363" src="images/JQuery-Tutorial-360x363.jpg" sizes="(max-width: 360px) 100vw, 360px">
                                <div class="lms_hover_overlay">
                                    <div class="lms_hover_readmore">
                                        <a href="#" class="btn btn-default">Read More</a>
                                    </div>
                                </div>  
                            </div><div class="lms_course_mid_content">
                                <h3><a href="#">JQuery Tutorial</a></h3> 
                                <div class="lms_course_meta"> 
                                    <div class="lms_course_instruct"> 
                                        Instructor : <a href="#">lms@admin</a>
                                    </div> 
                                    <span class="lms-course-students">
                                        <span>5</span> students enrolled
                                    </span>
                                    <span class="lms-course-price">$20.00</span>
                                </div>
                                <div class="course-introduce">
                                    <p>jQuery is a fast and concise JavaScript library created by John Resig in 2006. jQuery simplifies HTML document</p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="course_category"> 
                            <div class="lms_hover_section">
                                <img width="360" height="363" src="images/Make-a-Unity-2D-Physics-Game-360x363.jpg" sizes="(max-width: 360px) 100vw, 360px">
                                <div class="lms_hover_overlay">
                                    <div class="lms_hover_readmore">
                                        <a href="#" class="btn btn-default">Read More</a>
                                    </div>
                                </div>  
                            </div><div class="lms_course_mid_content">
                                <h3><a href="#">Make a Unity 2D Physics Game</a></h3> 
                                <div class="lms_course_meta"> 
                                    <div class="lms_course_instruct">    
                                        Instructor : <a href="#">lms@admin</a>
                                    </div> 
                                    <span class="lms-course-students">
                                        <span>3</span> students enrolled
                                    </span>

                                    <span class="lms-course-price">$155.00</span>
                                </div>
                                <div class="course-introduce">
                                    <p>Unity is very powerful game development software but also can be very overwhelming! I know, because I tried</p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="course_category"> 
                            <div class="lms_hover_section">
                                <img width="360" height="363" src="images/SEO-Training-Course-360x363.jpg" sizes="(max-width: 360px) 100vw, 360px">
                                <div class="lms_hover_overlay">
                                    <div class="lms_hover_readmore">
                                        <a href="#" class="btn btn-default">Read More</a>
                                    </div>
                                </div>  
                            </div><div class="lms_course_mid_content">
                                <h3><a href="#">SEO Training Course</a></h3> 
                                <div class="lms_course_meta"> 
                                    <div class="lms_course_instruct">
                                        <span> 
                                            Instructor : <a href="#">lms@admin</a>
                                        </span>
                                    </div> 
                                    <span class="lms-course-students">
                                        <span>10</span> students enrolled
                                    </span>

                                    <span class="lms-course-price">Free</span>
                                </div>
                                <div class="course-introduce">
                                    <p>SEO is the active practice of optimizing a web site by improving internal and external aspects in order to increase the</p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="course_category"> 
                            <div class="lms_hover_section">
                                <img width="360" height="363" src="images/Getting-Started-with-Playing-Guitar-360x363.jpg" sizes="(max-width: 360px) 100vw, 360px">
                                <div class="lms_hover_overlay">
                                    <div class="lms_hover_readmore">
                                        <a href="#" class="btn btn-default">Read More</a>
                                    </div>
                                </div>  
                            </div><div class="lms_course_mid_content">
                                <h3><a href="#">Getting Started with Playing Guitar</a></h3> 
                                <div class="lms_course_meta"> 
                                    <div class="lms_course_instruct">
                                        <span> 
                                            Instructor : <a href="#">lms@admin</a>
                                        </span>
                                    </div> 
                                    <span class="lms-course-students">
                                        <span>8</span> students enrolled
                                    </span>
                                    <span class="lms-course-price">$24.00</span>
                                </div>
                                <div class="course-introduce">
                                    <p>Lorem ipsum dolor sit amet, consect adipiscing elit. Nunc at placerat dui. Nulla fermentum libero vel dui vehicula,</p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="course_category"> 
                            <div class="lms_hover_section">
                                <img width="360" height="363" src="images/Fun-Yoga-for-Kids-360x363.jpg" sizes="(max-width: 360px) 100vw, 360px">
                                <div class="lms_hover_overlay">
                                    <div class="lms_hover_readmore">
                                        <a href="#" class="btn btn-default">Read More</a>
                                    </div>
                                </div>  
                            </div><div class="lms_course_mid_content">
                                <h3><a href="#">Fun Yoga for Kids</a></h3> 
                                <div class="lms_course_meta"> 
                                    <div class="lms_course_instruct">
                                        <span> 
                                            Instructor : <a href="#">lms@admin</a>
                                        </span>
                                    </div> 
                                    <span class="lms-course-students">
                                        <span>58</span> students enrolled
                                    </span>
                                    <span class="lms-course-price">Free</span>
                                </div>
                                <div class="course-introduce">
                                    <p>Do you find the kids bored during the class? Do the kids seem too hyper or too low and tired? Do the kids</p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="course_category"> 
                            <div class="lms_hover_section">
                                <img width="360" height="363" src="images/HTML-and-Html5-360x363.jpg" sizes="(max-width: 360px) 100vw, 360px">
                                <div class="lms_hover_overlay">
                                    <div class="lms_hover_readmore">
                                        <a href="#" class="btn btn-default">Read More</a>
                                    </div>
                                </div>  
                            </div><div class="lms_course_mid_content">
                                <h3><a href="#">Learning Quality Graphic Design</a></h3> 
                                <div class="lms_course_meta"> 
                                    <div class="lms_course_instruct">
                                        <span> 
                                            Instructor : <a href="#">rahultiwari</a>
                                        </span>
                                    </div> 
                                    <span class="lms-course-students">
                                        <span>12</span> students enrolled
                                    </span>
                                    <span class="lms-course-price">$23.00</span>
                                </div>
                                <div class="course-introduce">
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form,</p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="course_category"> 
                            <div class="lms_hover_section">
                                <img width="360" height="363" src="images/HTML-and-Html5-360x363.jpg" sizes="(max-width: 360px) 100vw, 360px">
                                <div class="lms_hover_overlay">
                                    <div class="lms_hover_readmore">
                                        <a href="#" class="btn btn-default">Read More</a>
                                    </div>
                                </div>  
                            </div><div class="lms_course_mid_content">
                                <h3><a href="#">Learning Quality Graphic Design</a></h3> 
                                <div class="lms_course_meta"> 
                                    <div class="lms_course_instruct">
                                        <span> 
                                            Instructor : <a href="#">rahultiwari</a>
                                        </span>
                                    </div> 
                                    <span class="lms-course-students">
                                        <span>12</span> students enrolled
                                    </span>

                                    <span class="lms-course-price">$23.00</span>
                                </div>
                                <div class="course-introduce">
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form,</p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="course_category"> 
                            <div class="lms_hover_section">
                                <img width="360" height="363" src="images/HTML-and-Html5-360x363.jpg" sizes="(max-width: 360px) 100vw, 360px">
                                <div class="lms_hover_overlay">
                                    <div class="lms_hover_readmore">
                                        <a href="#" class="btn btn-default">Read More</a>
                                    </div>
                                </div>  
                            </div><div class="lms_course_mid_content">
                                <h3><a href="#">Learning Quality Graphic Design</a></h3> 
                                <div class="lms_course_meta"> 
                                    <div class="lms_course_instruct">
                                        <span> 
                                            Instructor : <a href="#">rahultiwari</a>
                                        </span>
                                    </div> 
                                    <span class="lms-course-students">
                                        <span>12</span> students enrolled
                                    </span>
                                    <span class="lms-course-price">$23.00</span>
                                </div>
                                <div class="course-introduce">
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form,</p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="lms_pagination">
                        <ul>
                            <li><span class="current" >1</span></li>
                            <li><a href="#">2</a></li>
                            <li><a class="next" href="#">Next</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>