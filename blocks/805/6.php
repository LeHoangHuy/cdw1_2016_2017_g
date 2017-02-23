<!DOCTYPE html>

<html style="background-color: #f3f3f4;">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Opencart Super Deal Store</title>
    <meta name="description" content="My Store" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/x-icon" href="image/favicon.ico" />
    <script src="js/jquery-2.1.1.min.js" type="text/javascript"></script>
    <link href="framework/bootstrap/css/bootstrap.css" rel="stylesheet" media="screen" />
    <script src="framework/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <link href="framework/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="framework/fontello/css/fontello.css" rel="stylesheet" type="text/css" />
    <link href="framework/swiper/swiper.css" rel="stylesheet" type="text/css" />
    <link href="framework/shortcodes/theme.shortcodes.css" rel="stylesheet" type="text/css" />
    <link href="framework/owl.carousel.2.0.0-beta.2.4/assets/owl.carousel.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="slider/owl-carousel/owl.carousel.css">
	<!-- Default Theme -->
	<link rel="stylesheet" href="slider/owl-carousel/owl.theme.css">  
	<!--  jQuery 1.7+  -->
	<script src="slider/assets/js/jquery-1.9.1.min.js"></script>  
	<!-- Include js plugin -->
	<script src="slider/owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="framework/owl.carousel.2.0.0-beta.2.4/owl.carousel.js"></script>
    <script type="text/javascript" src="framework/swiper/swiper.js"></script>
    <script type="text/javascript" src="framework/shortcodes/theme.shortcodes.js"></script>
    <?php
		if (!class_exists('lessc')) {
		include ('./libs/lessc.inc.php');
		}
		$less=new lessc;
		$less->compileFile('less/6.less', 'css/6.css');
	?>
    <link href="css/6.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="court_review"> 
		<!-- module 3333333333333333333333333333333333 -->	
		<div class="module-3">
			<div class="back">
				<div class="container">
		            <div class="wrapper">
		                <div class="row">
		                    <div class="wpb_wrapper">
		                        <div class="sc_content content_wrap" data-animation="animated fadeInUp normal" style="custom-slider1">
		                            <div class="columns_wrap sc_columns columns_nofluid sc_columns_count_2">
		                                <div class="column-1_2 sc_column_item sc_column_item_1 odd first">
		                                    <h3 class="sc_title accent2 sc_title_regular margin_top_huge margin_bottom_null">Court Review</h3>
		                                    <h6 class="sc_title sc_title_regular accent1 text_uppercase margin_top_tiny margin_bottom_medium">unique construction</h6>
		                                    <div class="wpb_text_column wpb_content_element  vc_custom_1 text_uppercase">
		                                        <div class="wpb_wrapper">
		                                            <p class="a">
		                                            	<span>Extensive upgrades and thorough maintenance have made our courts a modern comfortable place for trainings<br />
														</span>
													</p>

		                                        </div>
		                                    </div>
		                                    <ul class="sc_list sc_list_style_iconed margin_top_null margin_bottom_tiny-">
		                                        <li class="sc_list_item odd first" title="No daily water usage"><span class="sc_list_icon icon-correct">	</span>No daily water usage</li>
		                                        <li class="sc_list_item even" title="Not affected by freezing weather">
		                                        	<span class="sc_list_icon icon-correct"></span>Not affected by freezing weather</li>
		                                        <li class="sc_list_item odd" title="3 Distinct tennis court surface speed-of-play options">
		                                        	<span class="sc_list_icon icon-correct"></span>3 Distinct tennis court surface speed-of-play options
		                                        </li>
		                                        <li class="sc_list_item even" title="Adjustable court speeds that are great for serves">
		                                        	<span class="sc_list_icon icon-correct"></span>Adjustable court speeds that are great for serves
		                                        </li>
		                                    </ul>
		                                    <a href="#" class="sc_button sc_button_square sc_button_style_filled sc_button_size_large sc_button_style_2 margin_top_large">
			                                    <span class="cube flip-to-top">
													<span class="default-state">
														<span>Learn More</span>
													</span>
													<span class="active-state">
														<span>Learn More</span>
													</span>
												</span>
											</a>
										</div>
		                                <div class="column-1_2 sc_column_item sc_column_item_2 even">
		                                	<script type="text/javascript">
		                                			$(document).ready(function() {
		                                			$('.owl-carousel').owlCarousel({
													    loop:true,
													    margin:10,
													    nav:false,
													    autoplay:true,
													    autoplayTimeout:5000,
													    autoplayHoverPause:true,
													    responsive:{
													        0:{
													            items:1
													        },
													        600:{
													            items:1
													        },
													        1000:{
													            items:1
													        }
													    }
													    
													});
		                                		});
		                                	</script>
		                                	<div class="nsc">
			                                	<div id="carousel" class="owl-carousel margin_top_medium margin_bottom_medium margin_left_small-">
		    										<div class="item" align="center">
										                	<a href="#"><img src="image/image-10.jpg" class="img-rounded" alt="PS3 reparatie Haarlem"></a>
										            </div>
									                <div class="item" align="center">
									                	<a href="#"><img src="image/image-6.jpg" class="img-rounded" alt="Blu-ray Lens reparatie"></a>
									                </div>
									                <div class="item" align="center">
									                	<a href="#"><img src="image/image-18.jpg" class="img-rounded" alt="Yellow Light of Death"></a>
									                </div>
									                <div class="item" align="center">
									                	<a href="#"><img src="image/image-1.jpg" class="img-rounded" alt="Yellow Light of Death"></a>
									                </div>
										        </div>
										    </div>    
		                                </div>
		                            </div>
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