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
        $less->compileFile('less/type-i-32.less', 'css/type-i-32.css');
        ?>
        <link href="css/type-i-32.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>

    </head>

    <body>
        <div class="type-i-32">
            <div class="page_width">
                <div id="columns" class="clearfix">
                    <div id="left_column" class="column">
                        <!--Brands----------------------------------------->
                        <div class="vert-flexmenu-container block list-module">
                            <h4 class="title_block">Brands</h4>
                            <div class="vert-flexmenu">
                                <ul class="id_menu">
                                    <!----------------------Anna Sui------------------------->
                                    <li class="v-flexmenuitem id_menu2" data-menuid="2">
                                        <a class="menu-title" href="#">
                                            <span>Anna Sui</span>
                                        </a>
                                    </li>
                                    <!-----------------------Apple Computer, Inc----------------------------->
                                    <li class="v-flexmenuitem id_menu2" data-menuid="2">
                                        <a class="menu-title" href="#">
                                            <span>Apple Computer, Inc</span>
                                        </a>
                                    </li>
                                    <!------------------------Armani-------------------->
                                    <li class="v-flexmenuitem id_menu2" data-menuid="2">
                                        <a class="menu-title" href="#">
                                            <span>Armani</span>
                                        </a>
                                    </li>
                                    <!------------------------Bench-------------------->
                                    <li class="v-flexmenuitem id_menu2" data-menuid="2">
                                        <a class="menu-title" href="#">
                                            <span>Bench</span>
                                        </a>
                                    </li>
                                    <!------------------------Burberry-------------------->
                                    <li class="v-flexmenuitem id_menu2" data-menuid="2">
                                        <a class="menu-title" href="#">
                                            <span>Burberry</span>
                                        </a>
                                    </li>
                                    <!------------------------Cartier-------------------->
                                    <li class="v-flexmenuitem id_menu2" data-menuid="7">
                                        <a class="menu-title" href="#">
                                            <span>Cartier</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>