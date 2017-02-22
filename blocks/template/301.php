<head>
    <meta charset="UTF-8">
    <title></title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

    <?php
    if (!class_exists('lessc')) {
        include ('./libs/lessc.inc.php');
    }
    $less = new lessc;
    $less->compileFile('less/301.less', 'css/301.css');
    ?>

    <link href="css/301.css" rel="stylesheet" type="text/css"/>

</head>

<body>

    <div class="type-301">

        <div class="container type-301-content">

            <!--LIST OF PRODUCTS-->
            <div class="row list-products">

                <!--LIST OF FAVORITES PRODUCTS-->
                <div class="col-md-9 favorites-products "></div>
                <!--/END LIST OF FAVORITES PRODUCTS-->

                <!--SIDEBAR RIGHT-->
                <div class="col-md-3 sidebar-products "></div>
                <!--/END SIDEBAR RIGHT-->


            </div>
            <!--/END LIST OF PRODUCTS-->

        </div>

    </div>
</body>