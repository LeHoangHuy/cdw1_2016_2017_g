<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <title>Home – STEEL</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/responsive.css" rel="stylesheet" type="text/css" />

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/type_3_banner.less', 'css/type_3_banner.css');
        ?>
        <link href="css/type_3_banner.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </head>

    <body>

        <div class="type_3_banner">
            <div class="container">
                <div class="vc_row wpb_row quote-section vc_custom_1436500827216 vc_row-has-fill">
                    <div class="wpb_column column_container col-sm-8">
                        <div class="vc_column-inner ">
                            <div class="wpb_wrapper">
                                <div class="wpb_text_column wpb_content_element ">
                                    <div class="wpb_wrapper">
                                        <h1>Professional metal processing. Highly experienced &amp; equiped personnel</h1>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wpb_column column_container col-sm-4">
                        <div class="vc_column-inner ">
                            <div class="wpb_wrapper">
                                <div class="wpb_text_column wpb_content_element ">
                                    <div class="wpb_wrapper">
                                        <p style="text-align: center;"><a class="btn btn-outline" href="#">Request an order</a></p>

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