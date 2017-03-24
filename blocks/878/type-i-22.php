<!DOCTYPE html>

<html style="background-color: #f3f3f4;">

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
        $less->compileFile('less/type-i-22.less', 'css/type-i-22.css');
        ?>
        <link href="css/type-i-22.css" rel="stylesheet" type="text/css" />  
        <script src="js/jquery.min.js" type="text/javascript"></script>

    </head>

    <body>
      
        <div class="type-i-22">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div
                            <div class="hh">
                                <span class="layered_subtitle">Categories</span>
                                <a href="#"><i class="glyphicon glyphicon-minus"></i></a>
                            </div>
                            <div class="bb">
                                <div class="well" style="max-height: 300px;overflow: auto;">
                                    <ul class="nav nav-tabs list-group checked-list-box">                              
                                        <li class="nomargin list-group-item"> 
                                            <div class="checker navfix" idata-toggle="tab" href="#">
                                                <input type="checkbox" class="checkbox"value="35">
                                                <a class="list" href="#">Handbags (1)</a>
                                            </div> 
                                        </li>
                                        <li class="nomargin list-group-item"> 
                                            <div class="checker navfix" idata-toggle="tab" href="#">
                                                <input type="checkbox" class="checkbox"value="35">
                                                <a class="list" href="#">Totes (5)</a>
                                            </div> 
                                        </li>
                                        <li class="nomargin list-group-item"> 
                                            <div class="checker navfix" idata-toggle="tab" href="#">
                                                <input type="checkbox" class="checkbox"value="35">
                                                <a class="list" href="#">Clutches (5)</a>
                                            </div> 
                                        </li>
                                        <li class="nomargin list-group-item" > 
                                            <div class="checker navfix" idata-toggle="tab" href="#">
                                                <input type="checkbox" class="checkbox"value="35">
                                                <a class="list" href="#">Cross Body (5)</a>
                                            </div> 
                                        </li>
                                        <li class="nomargin list-group-item"> 
                                            <div class="checker navfix" idata-toggle="tab" href="#">
                                                <input type="checkbox" class="checkbox"value="35">
                                                <a class="list" href="#">Satchels (5)</a>
                                            </div> 
                                        </li>
                                        <li class="nomargin list-group-item"> 
                                            <div class="checker navfix" idata-toggle="tab" href="#">
                                                <input type="checkbox" class="checkbox"value="35">
                                                <a class="list" href="#">Shoulder (5)</a>
                                            </div> 
                                        </li>
                                        <li class="nomargin list-group-item"> 
                                            <div class="checker navfix" idata-toggle="tab" href="#">
                                                <input type="checkbox" class="checkbox"value="35">
                                                <a class="list" href="#">Accessories (1)</a>
                                            </div> 
                                        </li>
                                        <li class="nomargin list-group-item"> 
                                            <div class="checker navfix" idata-toggle="tab" href="#">
                                                <input type="checkbox" class="checkbox"value="35">
                                                <a class="list" href="#">Bags and Purces (14)</a>
                                            </div> 
                                        </li>
                                        <li class="nomargin list-group-item"> 
                                            <div class="checker navfix" idata-toggle="tab" href="#">
                                                <input type="checkbox" class="checkbox"value="35">
                                                <a class="list" href="#">Belts (6)</a>
                                            </div> 
                                        </li>
                                        <li class="nomargin list-group-item"> 
                                            <div class="checker navfix" idata-toggle="tab" href="#">
                                                <span><input type="checkbox" class="checkbox"value="35"></span>
                                                <a class="list" href="#">Scarves (5)</a>
                                            </div> 
                                        </li>
                                        <li class="nomargin list-group-item"> 
                                            <div class="checker navfix" idata-toggle="tab" href="#">
                                                <input type="checkbox" class="checkbox"value="35">
                                                <a class="list" href="#">Gloves (5)</a>
                                            </div> 
                                        </li>  
                                        <li class="nomargin list-group-item"> 
                                            <div class="checker navfix" idata-toggle="tab" href="#">
                                                <input type="checkbox" class="checkbox"value="35">
                                                <a class="list" href="#">Jewellery (5)</a>
                                            </div> 
                                        </li> 
                                        <li class="nomargin list-group-item"> 
                                            <div class="checker navfix" idata-toggle="tab" href="#">
                                                <input type="checkbox" class="checkbox"value="35">
                                                <a class="list" href="#">Sunglasses (5)</a>
                                            </div> 
                                        </li> 
                                        <li class="nomargin list-group-item"> 
                                            <div class="checker navfix" idata-toggle="tab" href="#">
                                                <input type="checkbox" class="checkbox"value="35">
                                                <a class="list" href="#">Tops (3)</a>
                                            </div> 
                                        </li> 
                                        <li class="nomargin list-group-item"> 
                                            <div class="checker navfix" idata-toggle="tab" href="#">
                                                <input type="checkbox" class="checkbox"value="35">
                                                <a class="list" href="#">Long Sleeved (5)</a>
                                            </div> 
                                        </li> 
                                        <li class="nomargin list-group-item"> 
                                            <div class="checker navfix" idata-toggle="tab" href="#">
                                                <input type="checkbox" class="checkbox"value="35">
                                                <a class="list" href="#">Short Sleeved (5)</a>
                                            </div> 
                                        </li> 
                                        <li class="nomargin list-group-item"> 
                                            <div class="checker navfix" idata-toggle="tab" href="#">
                                                <input type="checkbox" class="checkbox"value="35">
                                                <a class="list" href="#">Sleeveless (5)</a>
                                            </div> 
                                        </li> 
                                        <li class="nomargin list-group-item"> 
                                            <div class="checker navfix" idata-toggle="tab" href="#">
                                                <input type="checkbox" class="checkbox"value="35">
                                                <a class="list" href="#">Tanks (5)</a>
                                            </div> 
                                        </li> 
                                        <li class="nomargin list-group-item"> 
                                            <div class="checker navfix" idata-toggle="tab" href="#">
                                                <input type="checkbox" class="checkbox"value="35">
                                                <a class="list" href="#">Tunics (5)</a>
                                            </div> 
                                        </li> 
                                    </ul>
                                </div> 
                            </div>
                            <div class="hh">
                                <span class="layered_subtitle">Manufacturer</span>
                                <a href="#"><i class="glyphicon glyphicon-minus"></i></a>
                            </div>
                            <div class="bb">
                                <div class="well" style="max-height: 300px;overflow: auto;">
                                    <ul class="nav nav-tabs list-group checked-list-box">                              
                                        <li class="nomargin list-group-item"> 
                                            <div class="checker navfix" idata-toggle="tab" href="#">
                                                <input type="checkbox" class="checkbox"value="35">
                                                <a class="list" href="#">Anna Sui (3)</a>
                                            </div> 
                                        </li>                                   
                                        <li class="nomargin list-group-item"> 
                                            <div class="checker navfix" idata-toggle="tab" href="#">
                                                <input type="checkbox" class="checkbox"value="35">
                                                <a class="list" href="#"> Dona Carol (1)</a>
                                            </div> 
                                        </li> 
                                        <li class="nomargin list-group-item"> 
                                            <div class="checker navfix" idata-toggle="tab" href="#">
                                                <input type="checkbox" class="checkbox"value="35">
                                                <a class="list" href="#">Elie Tahari (1)</a>
                                            </div> 
                                        </li> 
                                        <li class="nomargin list-group-item"> 
                                            <div class="checker navfix" idata-toggle="tab" href="#">
                                                <input type="checkbox" class="checkbox"value="35">
                                                <a class="list" href="#">Nicole Miller (1)</a>
                                            </div> 
                                        </li> 
                                    </ul>
                                </div> 
                            </div>
                            <div class="hh">
                                <span class="layered_subtitle">Pricev</span>
                                <a href="#"><i class="glyphicon glyphicon-minus"></i></a>
                                <ul id="ul_layered_price_0"> <label for="price">Range:</label>
                                    <span id="layered_price_range">$0.00 - $288.00</span>

                                </ul>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
    </body>

</html>