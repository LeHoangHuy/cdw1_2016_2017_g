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
        $less->compileFile('less/heading.less', 'css/heading.css');
        ?>
        <link href="css/heading.css" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <div class="heading">
            <div class="title">
                <h1>LMS - Course Single Page</h1>
            </div>
            <p>This online course is aimed at people interested in IT project management and builds on other business and IT courses available online at</p>
        </div>
    </body>
</html>