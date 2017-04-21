<!DOCTYPE html>

<html>

    <head>
        <title>Aurum - Fashion</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/addSlider.min.css" rel="stylesheet" type="text/css" />
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/863.less', 'css/863.css');
        ?>
        <link href="css/863.css" rel="stylesheet" type="text/css" />

    </head>

    <body>
        <div class="type-863">
            <div class="container">
                <div class="row product_list">
                    <div class="col-md-3">
                        <div class="row well">
                            <h3>search</h3> 
                            <hr>
                            <form>
                                <input type="text" class="form-control" placeholder="Search Product">
                                <button type="submit" class="btn btn-default">Search</button>
                            </form>
                        </div>
                        <div class="row well">
                            <h3>categories</h3>
                            <hr>
                            <ul class="list-group">
                                <li class="list-group-item">Bootstrap</li>
                                <li class="list-group-item">Bootstrap</li>
                                <li class="list-group-item">Bootstrap</li>
                            </ul>
                        </div>
                        <div class="row well">
                            <h3>filter by price</h3>
                            <hr>
                            <form>
                                <input
                                    data-addui ='slider'
                                    data-min ='10'
                                    data-formatter='usd'
                                    data-formsize='0.05'
                                    data-range='true'
                                    value='25.50,50.00'
                                    >
                                <button type="submit" class="btn btn-default">Filter</button>
                            </form>
                        </div>
                        <div class="row well">
                            <h3>cart</h3>
                            <hr>
                            <p>No products in the cart.</p>
                        </div>
                        <div class="row well">
                            <h3>recently viewed products</h3>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/Obj.min.js"></script>
        <script src="js/addSlider.min.js"></script>
        <script src="js/scripts.js"></script>
        </div>
    </body>


</html>