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
        <div class="type-12c">
            <footer >

                <div data-vc-full-width="true" data-vc-full-width-init="true" class="vc_row footer-section vc_custom_1436786731050" style="box-sizing: border-box; width: 100%; padding-left: 46.5px; padding-right: 46.5px;">
                    <div class="container">
                        <div class="tp-ft-about col-sm-3">
                            <div class="wpb_single_image wpb_content_element vc_align_left ft-logo">
                                <figure class=" vc_figure">
                                    <div class="vc_single_image-wrapper">
                                        <img width="125" height="37" src="images/Steel-Product.png" alt="Steel-Product" data-lazy-loaded="true" style="display: inline;">
                                    </div>
                                </figure>
                            </div>
                            <div class="wpb_text_column wpb_content_element address">
                                <div >
                                    <ul>
                                        <li>4578 Marmora Road, MG Glasgow
                                            <br> Lesten- D04 89GR, Australia</li>
                                        <li>Phone : 800-2345-6789 / 6889800-2345-6789 / 6890</li>
                                        <li>Fax : 800-2345-6789 / 6889800-2345-6789 / 6890</li>
                                        <li>E-Mail : info@indusmining.com</li>
                                    </ul>

                                </div>
                            </div>

                        </div>
                        <div class="tp-investor-relation col-sm-3">
                            <div class="wpb_text_column wpb_content_element">
                                <div >
                                    <h2>Quick Links</h2>
                                    <ul>
                                        <li><i class="fa fa-angle-double-right"></i> <a href="#">Company Profile</a></li>
                                        <li><i class="fa fa-angle-double-right"></i> <a href="#">Products</a></li>
                                        <li><i class="fa fa-angle-double-right"></i> <a href="#">Services</a></li>
                                        <li><i class="fa fa-angle-double-right"></i> <a href="#">News</a></li>
                                        <li><i class="fa fa-angle-double-right"></i> <a href="#">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="twitter-widget col-sm-3">
                            <div class="wpb_text_column wpb_content_element">
                                <div >
                                    <h2>Twitter Indus</h2>
                                </div>
                            </div>
                            <ul>
                                <li>
                                    <a href="#">envato</a> .@karks88 highlights a few of the advantages of single page #WordPress sites. <a href="#" target="_blank">https://t.co/YMxS3Tskex</a><small> 4 hours ago</small>
                                </li>
                                <li>
                                    <a href="#">envato</a> #webdev &amp; #webdesign aren't the same thing. @digitalinkwell explains the difference. <a href="#" target="_blank">https://t.co/ZCOyINNNmz</a><small> 7 hours ago</small>
                                </li>
                            </ul>
                        </div>
                        <div class="tp-ft-newsletter col-sm-3">
                            <div class="wpb_text_column wpb_content_element">
                                <h2>Sign up For Newsletter</h2>
                                <p>Lorem ipsum dolor sit amet, tetuer sit adipiscing elisent dolor amet sit.</p>
                                <!-- MailChimp for WordPress v2.3.9 - https://wordpress.org/plugins/mailchimp-for-wp/ -->
                                <div class="form mc4wp-form">
                                    <form method="post">
                                        <p>
                                            <label>Email address: </label>
                                            <input type="email" name="EMAIL" placeholder="Your email address" required="">
                                        </p>
                                        <p>
                                            <input type="submit" value="Sign up">
                                        </p>
                                        <div style="position: absolute; left:-5000px;">
                                            <input type="text" name="_mc4wp_required_but_not_really" value="" tabindex="-1">
                                        </div>
                                        <input type="hidden" name="_mc4wp_timestamp" value="1478700448">
                                        <input type="hidden" name="_mc4wp_form_id" value="0">
                                        <input type="hidden" name="_mc4wp_form_element_id" value="mc4wp-form-1">
                                        <input type="hidden" name="_mc4wp_form_submit" value="1">
                                        <input type="hidden" name="_mc4wp_form_nonce" value="13a976c0de">
                                    </form>
                                </div>
                                <!-- / MailChimp for WordPress Plugin -->
                            </div>

                        </div>
                    </div>

                </div>
                <div data-vc-full-width="true" data-vc-full-width-init="true" class="vc_row tiny-footer vc_custom_1436839546058" style="box-sizing: border-box; width: 100%; padding-left: 46.5px; padding-right: 46.5px;">
                    <div class="container">
                        <div class=" col-sm-6">
                            <div class="wpb_text_column wpb_content_element">
                                <div >
                                    <p class="copyright-ct">© 2015 Indusminingcompany | Privacy policy</p>

                                </div>
                            </div>
                        </div>
                        <div class=" col-sm-6">
                            <ul class="social-icon-ft pull-right">
                                <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </body>

</html>
