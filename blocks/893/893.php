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
        $less->compileFile('less/893.less', 'css/893.css');
        ?>
        <link href="css/893.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>

    </head>
    <body>
        <div class="type-893">
		<!-- BEGIN TYPE-893 -->
            <div class="container">
                <div class="row">              
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <div class="title">
                            <h2>Review Your Order & Complete Checkout</h2>
                        </div>
                        <div class="clearfix"></div>
                        <div class="border"></div>
                        <div class="clearfix"></div>
                        <div class="btn-add-more">
                            <a href="#">Add More Products & Services</a>
                        </div>
                        <div class="clearfix"></div>
                        <div class="border"></div>
                        <div class="clearfix"></div>
                        <div class="review">
                            <div class="title-review "data-toggle="collapse" data-target=".infor">
                                <h4><a href="#">Review Your Order</a></h4>
                            </div>
                            <div class="infor collapse">
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <div class="name">
                                        <div class="posting col-md-9">
                                            <h6><b>Premium Posting</b></h6>
                                        </div>
                                        <div class=" btn-close col-md-3">
                                            <a href="#"> x </a>
                                        </div>
                                    </div>
                                    <div class="decs">
                                        <div class="text col-md-9">
                                            <ul>
                                                <li>One Job Posting Credit</li>
                                                <li>Job Distribution*</li>
                                                <li>Social Media Distribution</li>
                                            </ul>
                                        </div>
                                        <div class="cost col-md-3">
                                            <span><b>$147.00</b></span>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <div class="total">
                                        <h3>Order Total</h3>
                                        <h4>$147.00</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="pn-tittle"></div>
                        <div class="contact">
                            <div class="title-review "data-toggle="collapse" data-target=".post">
                                <h4><a href="#">Contact and Billing Information</a></h4>
                            </div>
                            <div class="post collapse">
                                <h4>Help us keep your account safe and secure, please verify your billing information. </h4>
                                <form method="post">
                                    <ul>
                                        <li class="main">
                                            <h5 class="col-md-3 col-sm-3 col-xs-12"><b> Best Email: </b></h5>
                                            <input type="text" class="col-md-9 col-sm-9 col-xs-12" style="border-radius: 3px;">
                                        </li>
                                        <div class="clearfix"></div>
                                        <li>
                                            <h5 class="col-md-3 col-sm-3 col-xs-12"><b> First name: </b></h5>
                                            <input type="text" class="col-md-9 col-sm-9 col-xs-12" style="border-radius: 3px;">
                                        </li>
                                        <div class="clearfix"></div>
                                        <li class="main">
                                            <h5 class="col-md-3 col-sm-3 col-xs-12"><b> Last name: </b></h5>
                                            <input type="text" class="col-md-9 col-sm-9 col-xs-12" style="border-radius: 3px;">
                                        </li>
                                        <div class="clearfix"></div>
                                        <li>
                                            <h5 class="col-md-3 col-sm-3 col-xs-12"><b> Address: </b></h5>
                                            <input type="text" class="col-md-9 col-sm-9 col-xs-12" style="border-radius: 3px;">
                                        </li>
                                        <div class="clearfix"></div>
                                        <li class="main">
                                            <h5 class="col-md-3 col-sm-3 col-xs-12"><b> Unit / Suite #: </b></h5>
                                            <input type="text" class="col-md-9 col-sm-9 col-xs-12" style="border-radius: 3px;">
                                        </li>
                                        <div class="clearfix"></div>
                                        <li>
                                            <h5 class="col-md-3 col-sm-3 col-xs-12"><b> City: </b></h5>
                                            <input type="text" class="col-md-9 col-sm-9 col-xs-12" style="border-radius: 3px;">
                                        </li>
                                        <div class="clearfix"></div>
                                        <li class="main">
                                            <h5 class="col-md-3 col-sm-3 col-xs-12"><b> State: </b></h5>
                                            <select class="col-md-9 col-sm-9 col-xs-12" style="border-radius: 3px;">
                                                <option value="AK">Alaska</option>
                                                <option value="AL">Alabama</option>
                                                <option value="AZ">Arizona</option>
                                                <option value="AR">Arkansas</option>
                                                <option value="CA">California</option>
                                                <option value="CO">Colorado</option>
                                                <option value="CT">Connecticut</option>
                                                <option value="DE">Delaware</option>
                                                <option value="FL">Florida</option>
                                                <option value="GA">Georgia</option>
                                                <option value="HI">Hawaii</option>
                                                <option value="ID">Idaho</option>
                                                <option value="IL">Illinois</option>
                                                <option value="IN">Indiana</option>
                                                <option value="IA">Iowa</option>
                                                <option value="KS">Kansas</option>
                                                <option value="KY">Kentucky</option>
                                                <option value="LA">Louisiana</option>
                                                <option value="ME">Maine</option>
                                                <option value="MD">Maryland</option>
                                                <option value="MA">Massachusetts</option>
                                                <option value="MI">Michigan</option>
                                                <option value="MN">Minnesota</option>
                                                <option value="MS">Mississippi</option>
                                                <option value="MO">Missouri</option>
                                                <option value="MT">Montana</option>
                                                <option value="NE">Nebraska</option>
                                                <option value="NV">Nevada</option>
                                                <option value="NH">New Hampshire</option>
                                                <option value="NJ">New Jersey</option>
                                                <option value="NM">New Mexico</option>
                                                <option value="NY">New York</option>
                                                <option value="NC">North Carolina</option>
                                                <option value="ND">North Dakota</option>
                                                <option value="OH">Ohio</option>
                                                <option value="OK">Oklahoma</option>
                                                <option value="OR">Oregon</option>
                                                <option value="PA">Pennsylvania</option>
                                                <option value="RI">Rhode Island</option>
                                                <option value="SC">South Carolina</option>
                                                <option value="SD">South Dakota</option>
                                                <option value="TN">Tennessee</option>
                                                <option value="TX">Texas</option>
                                                <option value="UT">Utah</option>
                                                <option value="VT">Vermont</option>
                                                <option value="VA">Virginia</option>
                                                <option value="WA">Washington</option>
                                                <option value="DC">Washington D.C.</option>
                                                <option value="WV">West Virginia</option>
                                                <option value="WI">Wisconsin</option>
                                                <option value="WY">Wyoming</option>
                                            </select>
                                        </li>
                                        <li>
                                            <h5 class="col-md-3 col-sm-3 col-xs-12"><b> Postalcode: </b></h5>
                                            <input type="text" class="col-md-9 col-sm-9 col-xs-12" style="border-radius: 3px;">
                                        </li>
                                        <div class="clearfix"></div>
                                        <li class="main">
                                            <h5 class="col-md-3 col-sm-3 col-xs-12"><b> Phone: </b></h5>
                                            <input type="text" class="col-md-9 col-sm-9 col-xs-12" style="border-radius: 3px;">
                                        </li>
                                    </ul>
                                </form>
                            </div>

                        </div>
                        <div class="pn-tittle"></div>
                        <div class="pay-information">
                            <div class="title-review "data-toggle="collapse" data-target=".pay">
                                <h4><a href="#">Pay Information</a></h4>
                            </div>
                            <div class="pay collapse">
                                <h4>What method would you like to pay with today?</h4>
                                <div class="border"></div>
                                <ul>
                                    <li>
                                        <h5 class="col-md-3 col-sm-3 col-xs-12"><b> Name on Card </b></h5>
                                        <input type="text" class="col-md-9 col-sm-9 col-xs-12" style="border-radius: 3px;">
                                    </li>
                                    <div class="clearfix"></div>
                                    <li>
                                        <h5 class="col-md-3 col-sm-3 col-xs-12"><b> Card Number </b></h5>
                                        <input type="text" class="col-md-9 col-sm-9 col-xs-12" style="border-radius: 3px;">
                                    </li>
                                    <div class="clearfix"></div>
                                    <li>
                                        <div class="image col-md-6 col-sm-6 col-xs-12">
                                            <div class="row">
                                                <img src="images/pay.png" alt=""/>
                                            </div>
                                        </div>
                                    </li>
                                    <div class="clearfix"></div>
                                    <div class="clearfix"></div>
                                    <li>
                                        <h5 class="col-md-3 col-sm-3 col-xs-12"><b> Expiration Date </b></h5>
                                        <select class=" months col-md-3 col-sm-3 col-xs-12">
                                            <option>Month</option>
                                            <option value="01">Jan (01)</option>
                                            <option value="02">Feb (02)</option>
                                            <option value="03">Mar (03)</option>
                                            <option value="04">Apr (04)</option>
                                            <option value="05">May (05)</option>
                                            <option value="06">June (06)</option>
                                            <option value="07">July (07)</option>
                                            <option value="08">Aug (08)</option>
                                            <option value="09">Sep (09)</option>
                                            <option value="10">Oct (10)</option>
                                            <option value="11">Nov (11)</option>
                                            <option value="12">Dec (12)</option>
                                        </select>
                                        <select class="years col-md-3 col-sm-3 col-xs-12">
                                            <option value="2016">2016</option>
                                            <option value="2017">2017</option>
                                            <option value="2018">2018</option>
                                            <option value="2019">2019</option>
                                            <option value="2020">2020</option>
                                            <option value="2021">2021</option>
                                            <option value="2022">2022</option>
                                            <option value="2023">2023</option>
                                            <option value="2024">2024</option>
                                        </select>
                                    </li>
                                    <div class="clearfix"></div>
                                    <li class="btn-pay">
                                        <a href="#">Pay Now</a>
                                    </li>
                                    <div class="clearfix"></div>
                                    <li><p>By submiting this order you are agreeing to our universal billing agreement, and terms of service. If you have any questions about our products or services please contact us before placing this order.</p></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                </div>
				<!-- BEGIN TYPE-893 -->
            </div>
    </body>

</html>