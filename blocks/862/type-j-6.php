<!DOCTYPE html>

<html style="background-color: #f3f3f4;">

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
        $less->compileFile('less/type-7.less', 'css/type-7.css');
        ?>
        <link href="css/type-7.css" rel="stylesheet" type="text/css" />

    </head>

    <body>
        <div class="type-7">
           

           

            <div class="content">
                <div class="container">
                    
                    <div class="row product_list">
                        
                        <div class="col-md-3">
                            <div class="row well">
                                <h3>SEARCH</h3>
                                <hr>
                                <form>
                                    <input type="text" class="form-control" placeholder="Search Product">
                                    <button class="btn-fashion" type="submit" name="submit">Search</button>
                                </form>
                            </div>
                            <div class="row well">
                                <h3>CATEGORIES</h3>
                                <hr>
                                <ul class="list-group">
                                    <li class="list-group-item">Bootstrap</li>
                                    <li class="list-group-item">Bootstrap</li>
                                    <li class="list-group-item">Bootstrap</li>
                                </ul>
                            </div>
                            <div class="row well">
                                <h3>FILTER BY PRICE</h3>
                                <hr>
                                <form
                                <input
                                    data-addui='slider'
                                    data-min='10'
                                    data-formatter='usd'
                                    data-fontsize='14'
                                    data-step='0.05'
                                    data-range='true'
                                    value='25.50,50.00'
                                    />
                                    <input name="submit" value="Filter" type="submit">
                                </form>
                                    <button class="btn-fashion" type="submit" name="submit">Filter</button>
                            </div>
                             <div class="row well">
                                <h3>CART</h3>
                                <hr>
                                <p>NO PRODUCTS IN THE CART.</p>
                            </div>
                            <div class="row well">
                                <h3>RECENTLY VIEWED PRODUCTS</h3>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>


            </div>






        </div>

        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="js/jquery.min.js"></script>

        <script src="js/bootstrap.min.js"></script>
        <script src="js/Obj.min.js"></script>
        <script src="js/addSlider.min.js"></script>
        <script src="js/scripts.js"></script>
    </div>
</body>


</html>