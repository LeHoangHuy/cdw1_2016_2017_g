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
        $less->compileFile('less/styles.less', 'css/styles.css');
        ?>
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>

        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <link href="css/styles.css" rel="stylesheet" type="text/css" />

    </head>

    <body>
        <div class="type-12e">
            <div class="tp-breadcrumb st_1479392317">
                <div class="container">
                    <div class="col-md-offset-3 col-md-5">
                        <div class="breadcrumb">
                            <!-- Breadcrumb NavXT 5.2.2 -->
                            <span typeof="v:Breadcrumb"><a rel="v:url" property="v:title" title="Go to STEEL." href="http://shinetheme.com/demosd/steel" class="home">STEEL</a></span> &gt; <span typeof="v:Breadcrumb"><a rel="v:url" property="v:title" title="Go to Blog." href="http://shinetheme.com/demosd/steel/blog/">Blog</a></span> &gt; <span typeof="v:Breadcrumb"><a rel="v:url" property="v:title" title="Go to Service." href="http://shinetheme.com/demosd/steel/service/">Service</a></span> &gt; <span typeof="v:Breadcrumb"><span property="v:title">Machine Services</span></span>                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>