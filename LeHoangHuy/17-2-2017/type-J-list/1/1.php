
<!DOCTYPE html>
<html lang="en-US">

    <head>
        <meta charset="UTF-8" />
        <link rel="icon" type="image/x-icon" href="images/favicon.ico" />
        <title>Tennis Club</title>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
       <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/1.css" rel="stylesheet" type="text/css"/>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/1.less', 'css/1.css');
        ?>
    </head>
    <div class="type-5">
     <div class="top_panel_title top_panel_style_3 title_present breadcrumbs_present scheme_original">
                    <div class="top_panel_title_inner top_panel_inner_style_3 title_present_inner breadcrumbs_present_inner">
                        <div class="content_wrap">
                            <h1 class="page_title">Shop</h1>
                            <div class="breadcrumbs">
                                <a class="breadcrumbs_item home" href="index.html">Home</a>
                                <span class="breadcrumbs_delimiter"></span>
                                <span class="breadcrumbs_item current">Shop</span>
                            </div>
                        </div>
                    </div>
     </div></div>



</body>

</html>