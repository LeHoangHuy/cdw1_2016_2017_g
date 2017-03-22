<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8" />           
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/802.css" rel="stylesheet" type="text/css"/>
    </head>
    <?php
    if (!class_exists('lessc')) {
        include ('./libs/lessc.inc.php');
    }
    $less = new lessc;
    $less->compileFile('less/802.less', 'css/802.css');
    ?>
    <body>
        <div class="type-802">
            <div class="container">
                <div class="row">
                    <div class="bg-img">
                        <div class="col-md-6 col-sm-4"></div>
                        <div class="col-md-6 col-sm-8 col-xs-12">
                            <div class="row">
                            <div class="bg-content">
                                <h3 class="bg-content-title">Welcome</h3>
                                <h6 class="bg-content-sub-title">TO OUR TENNIS CLUB</h6>
                                    <p class="bg-content-p">Founded in 1964 by a team of professional tennis players our club is based in one of the most picturesque areas of the country and is ideal for family membership.</p>
                                <figure class="bg-content-img">
                                    <img src="images/signature.png" alt="" />
                                </figure>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html> 