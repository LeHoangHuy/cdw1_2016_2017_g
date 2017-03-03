<!DOCTYPE html>

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
        $less->compileFile('less/type-28.less', 'css/type-28.css');
        ?>
        <link href="css/type-28.css" rel="stylesheet" type="text/css" />



    </head>

    <body>
        <div class="type-28">
            <div class="container">
                <div class="content">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="heading">
                            <div class="title">
                                <h1>LMS - Course Single Page</h1>
                            </div>
                            <p>This online course is aimed at people interested in IT project management and builds on other business and IT courses available online at</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-7">
                            <div class="course-landing-summary">
                                <h3>Fundamentals Of Project Management</h3>
                                <img width="750" height="475" src="images/Fundamentals-of-Project-Management-750x475.jpg">
                            </div>
                            <div class="lms-single-entry-content">
                                <span class="author">
                                    Instructor: <a href="#">lms@admin</a>
                                </span>
                                <span class="course-students">
                                    44 students enrolled
                                </span>
                                <span class="course-price">Free</span>
                                <a class="button view-cart-button" href="#">View cart</a>
                                <button class="button purchase-button">Take this course</button>
                            </div>
                            <h3 class="course-description-heading">Course Description</h3>
                            <div class="course-description">
                                <p>This online course is aimed at people interested in IT project management and builds on other business and IT courses available online at .</p>
                                <p>Every competent project manager needs to know the various phases and project management software and tools available do the job properly (such as the Gantt Chart). This free course will identify these phases and tools, enabling you to successfully manage any project.</p>
                                <h4>LEARNING OUTCOMES</h4>
                                <p>After completing this course you will understand the history of project management and learn from examples of interviews with project managers. You will gain a good&nbsp;<strong>knowledge</strong>&nbsp;of project management methodology. Each phase is examined: investigation, planning, design, production, monitoring and evaluation. You will be able to identify and understand the most important tools used by a project manager including GANTT charts, PERT Diagrams, estimating activity time, scheduling, expediting and Critical Path Method. You will gain a good&nbsp;<strong>knowledge</strong>&nbsp;of program, system, technical, user, paper-based, electronic and media project management documentation. This course will teach you the process of the systems development life cycle to help identify problems and create solutions in each stage of the projects life including planning, analysis, design, implementation and evaluation. You will learn about different issues that can occur when an information system is changed or a new sytem is introduced</p>
                            </div>
                            <div class="course-curriculum">
                                <h3>Course Curriculum</h3>
                                <div class="clearfix"></div>
                                <ul class="curriculum-sections">
                                    <li class="section">
                                        <h4 class="section-header">
                                            Project Management Overview	</h4>
                                        <ul class="section-content">
                                            <li class="course-item" data-type="lp_lesson">
                                                <span target="_blank" data-id="922" data-complete-nonce="ec1e5f77bb">
                                                    Project Management
                                                </span>
                                                <div class="course-item-meta">
                                                    <span class="lp-label">Lesson</span>
                                                </div>
                                            </li>
                                            <li class="course-item" data-type="lp_lesson">
                                                <span target="_blank" data-id="920" data-complete-nonce="1c580bbbba">
                                                    Project Management History
                                                </span>
                                                <div class="course-item-meta">
                                                    <span class="lp-label">Lesson</span>
                                                </div>
                                            </li>
                                            <li class="course-item" data-type="lp_lesson">
                                                <span target="_blank">
                                                    Project Managment Tools
                                                </span>
                                                <div class="course-item-meta">
                                                    <span class="lp-label">Lesson</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="section">
                                        <h4 class="section-header">
                                            Project Management Methodology	</h4>
                                        <ul class="section-content">
                                            <li class="course-item" data-type="lp_lesson">
                                                <span target="_blank">
                                                    Evaluation and Monitoring
                                                </span>
                                                <div class="course-item-meta">
                                                    <span class="lp-label">Lesson</span>
                                                </div>
                                            </li>
                                            <li class="course-item" data-type="lp_lesson">
                                                <span target="_blank">
                                                    investigation
                                                </span>
                                                <div class="course-item-meta">
                                                    <span class="lp-label">Lesson</span>
                                                </div>
                                            </li>
                                            <li class="course-item" data-type="lp_lesson">
                                                <span target="_blank">
                                                    production
                                                </span>
                                                <div class="course-item-meta">
                                                    <span class="lp-label">Lesson</span>
                                                </div>
                                            </li>
                                            <li class="course-item" data-type="lp_lesson">
                                                <span target="_blank">
                                                    planning and design
                                                </span>
                                                <div class="course-item-meta">
                                                    <span class="lp-label">Lesson</span>
                                                </div>

                                            </li>
                                        </ul>

                                    </li>

                                    <li class="section">

                                        <h4 class="section-header">
                                            Project Management Toolset	</h4>
                                        <ul class="section-content">



                                            <li class="course-item" data-type="lp_lesson">


                                                <span target="_blank">

                                                    Estimating Activity Time
                                                </span>
                                                <div class="course-item-meta">
                                                    <span class="lp-label">Lesson</span>
                                                </div>
                                            </li>
                                            <li class="course-item" data-type="lp_lesson">
                                                <span target="_blank">
                                                    network diagrams
                                                </span>
                                                <div class="course-item-meta">
                                                    <span class="lp-label">Lesson</span>
                                                </div>
                                            </li>
                                            <li class="course-item" data-type="lp_lesson">
                                                <span target="_blank">
                                                    Project Management Methodology
                                                </span>
                                                <div class="course-item-meta">
                                                    <span class="lp-label">Lesson</span>
                                                </div>
                                            </li>
                                            <li class="course-item" data-type="lp_lesson">
                                                <span target="_blank">
                                                    Scheduling and Expediting
                                                </span>
                                                <div class="course-item-meta">
                                                    <span class="lp-label">Lesson</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="section">
                                        <h4 class="section-header">
                                            The Planning Phase	</h4>
                                        <ul class="section-content">
                                            <li class="course-item" data-type="lp_lesson">
                                                <span target="_blank">
                                                    The planning phase of the SDLC
                                                </span>
                                                <div class="course-item-meta">
                                                    <span class="lp-label">Lesson</span>
                                                </div>
                                            </li>
                                            <li class="course-item" data-type="lp_lesson">
                                                <span target="_blank">
                                                    Feasibility Study
                                                </span>
                                                <div class="course-item-meta">
                                                    <span class="lp-label">Lesson</span>
                                                </div>
                                            </li>
                                            <li class="course-item" data-type="lp_lesson">
                                                <span target="_blank">
                                                    Identifying constraints
                                                </span>
                                                <div class="course-item-meta">
                                                    <span class="lp-label">Lesson</span>
                                                </div>
                                            </li>
                                            <li class="course-item" data-type="lp_lesson">
                                                <span target="_blank">
                                                    Setting Project objectives
                                                </span>
                                                <div class="course-item-meta">
                                                    <span class="lp-label">Lesson</span>
                                                </div>
                                            </li>
                                            <li class="course-item" data-type="lp_lesson">
                                                <span target="_blank">
                                                    Interviews with Project Managers
                                                </span>
                                                <div class="course-item-meta">
                                                    <span class="lp-label">Lesson</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="section">
                                        <h4 class="section-header">
                                            Quiz	</h4>
                                        <ul class="section-content">
                                            <li class="course-item" data-type="lp_quiz">
                                                <span target="_blank" data-id="1168">
                                                    Project Management Quiz
                                                </span>
                                                <div class="course-item-meta">
                                                    <span class="lp-label lp-label-quiz">Quiz</span>
                                                    <span class="lp-label lp-label-final">Final</span>
                                                </div>
                                            </li>	
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-5">
                            <div class="lms_sidebar_item">
                                <form method="get" class="searchform" action="">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="search" value="" placeholder="Search..." name="s" id="s" class="form-control">
                                            <div class="input-group-addon">
                                                <button type="submit"><i class="fa fa-search-plus"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="lms-popular-course">
                                    <h3>Popular Course</h3>
                                    <ul>
                                        <li>
                                            <a href="#"><img src="images/Fundamentals-of-Project-Management-106x92.jpg" alt="Fundamentals of Project Management"></a>
                                            <div class="popular-text">
                                                <a href="#">
                                                    <h4>Fundamentals of Project Management</h4>
                                                </a>
                                                <p>This online course is aimed at people interested in IT project</p>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#"><img src="images/HTML-and-Html5-106x92.jpg" alt="Learning Quality Graphic Design"></a>
                                            <div class="popular-text">
                                                <a href="#">
                                                    <h4>Learning Quality Graphic Design</h4>
                                                </a>
                                                <p>There are many variations of passages of Lorem Ipsum available, but</p>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#"><img src="images/JQuery-Tutorial-106x92.jpg" alt="JQuery Tutorial"></a>
                                            <div class="popular-text">
                                                <a href="#">
                                                    <h4>JQuery Tutorial</h4>
                                                </a>
                                                <p>jQuery is a fast and concise JavaScript library created by John Resig</p>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#"><img src="images/HTML-and-Html5-106x92.jpg" alt="Know About HTML and Html5"></a>
                                            <div class="popular-text">
                                                <a href="#">
                                                    <h4>Know About HTML and Html5</h4>
                                                </a>
                                                <p>HTML stands for Hyper Text Markup Language, which is the most widely</p>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="lms_footer_course_category">
                                    <h3>Course Categories</h3>		
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i> Health Literacy</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i> Management</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i> Marketing</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i> Mobile Apps</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i> Music</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i> Web Development</a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="lms-popular-course">
                                    <h3>Recent Post</h3>
                                    <ul>
                                        <li>
                                            <a href="#"><img src="images/Dollarphotoclub_54732318-106x92.jpg" alt="Aliquam laoreet faucibus"></a>
                                            <div class="popular-text">
                                                <a href="#">
                                                    <h4>Aliquam laoreet faucibus</h4>
                                                </a>
                                                <p>Lorem ipsum dolor sit amet, consectetur scing elit. Vivamus egestas</p>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#"><img src="images/Welcome-RTI-e1445918680108-1170x499-106x92.jpg" alt="Vivamus egestas augue"></a>
                                            <div class="popular-text">
                                                <a href="#">
                                                    <h4>Vivamus egestas augue</h4>
                                                </a>
                                                <p>Lorem ipsum dolor sit amet, consectetur scing elit. Vivamus egestas</p>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#"><img src="images/06-106x92.jpg" alt="pharetra sagittis"></a>
                                            <div class="popular-text">
                                                <a href="#">
                                                    <h4>Pharetra Sagittis</h4>
                                                </a>
                                                <p>Lorem ipsum dolor sit amet, consectetur scing elit. Vivamus egestas</p>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="blog-categories">
                                    <h3>Blog Categories</h3>		
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i> Art</a>
                                            (7)
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i> Fashion</a>
                                            (5)
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i> Health</a>
                                            (3)
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i> Photography</a>
                                            (5)
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i> Science</a>
                                            (5)
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i> Writing</a>
                                            (8)
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="twitter_feed">
                                    <h3>Recent Tweets</h3>
                                    <div class="lms_sidebar_rt">
                                        <a target="_blank" href="#">
                                            <p><i class="fa fa-twitter"></i> @himanshusofttech</p>
                                        </a>
                                        <p>RT @ReutersTV: IS video shows Iraqi temple blown up. Watch now:  https://t.co/X7kYxctkch</p>          
                                        <p class="lms_rt_time">4 months Ago</p>
                                    </div>
                                    <div class="lms_sidebar_rt">
                                        <a target="_blank" href="#">
                                            <p><i class="fa fa-twitter"></i> @himanshusofttech</p>
                                        </a>
                                        <p>RT @TechCrunch: Facebook brings emoji to VR with 360 Reactions https://t.co/wjxp71bCl2 https://t.co/vbj0LmihkT</p>          
                                        <p class="lms_rt_time">4 months Ago</p>
                                    </div>
                                    <div class="lms_sidebar_rt">
                                        <a target="_blank" href="#">
                                            <p><i class="fa fa-twitter"></i> @himanshusofttech</p>
                                        </a>
                                        <p>Hello world!: https://t.co/DuPc7NxYpj</p>          
                                        <p class="lms_rt_time">6 months Ago</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="tags">
                                    <h3>Tags</h3>
                                    <div class="tagcloud">
                                        <a href="#">Biography</a>
                                        <a href="#">Business</a>
                                        <a href="#">Business Studies</a>
                                        <a href="#">Geography</a>
                                        <a href="#">Photography</a>
                                        <a href="#">Psychology</a>
                                        <a href="#">Religion</a>
                                        <a href="#">Study Skills</a>
                                        <a href="#">Technology</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>