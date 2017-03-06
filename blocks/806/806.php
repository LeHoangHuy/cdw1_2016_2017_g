<!DOCTYPE html>
<html >
    <head>
        <title></title>
        <meta charset="UTF-8">
        <link rel="icon" type="image/png" href="images/favicon.ico">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/806.less', 'css/806.css');
        ?>
        <link rel="stylesheet" href="css/fontello.min.css" type="text/css" media="all" />
        <link href="css/806.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div class="type-806">
            <!--------------------begin court review------------------------------>
            <div class="container">
                <div class="tips col-md-12">
                    <div class="row">
                        <div class="video-tennis-tip col-md-4">
                            <div class="row">
                                <h1>Video Tennis Tips </h1>
                                <div class="border">
                                    <span class="glyphicon glyphicon-minus"></span>
                                </div>
                                <div class="image"> 
                                    <img src="images/image-6-370x370.jpg" alt=""/>
                                </div> 
                            </div>
                        </div>
                        <div class="coaching-tips col-md-7">
                            <div class="row">
                                <h1> Coaching & Tips</h1>
                                <span class="glyphicon glyphicon-minus"></span>
                                <div class="clearfix"> </div>
                                <div class="colums col-md-3">
                                    <div class="row">
                                        <img src="images/image-10-370x370.jpg" alt=""/>
                                        <div class="name">
                                            <h2><a href="#" > Improve Your Strokes Using The Wall </a></h2>
                                        </div>
                                        <a href="#"> TIPS </a>
                                    </div>
                                </div>
                                <div class="colums col-md-3">
                                    <div class="row">
                                        <img src="images/image-6-370x370.jpg" alt=""/>
                                        <div class="name">
                                            <h2><a href="#"> The Bad Guy Who Has Done Nothing Wrong</a></h2>
                                        </div>
                                        <a href="#"> GAME</a>
                                    </div>
                                </div>
                                <div class="colums col-md-3">
                                    <div class="row">
                                        <img src="images/lesson-3-370x370.jpg" alt=""/>
                                        <div class="name">
                                            <h2><a href="#"> From Dreads to Fed: Wimbledon A-Z</a></h2>
                                        </div>                        
                                        <a href="#"> TOURNAMENTS </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-------------------------------end court review---------------------------->
        </div>
    </body>
</html>