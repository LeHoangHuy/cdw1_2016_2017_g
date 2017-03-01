<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/814.css" rel="stylesheet" type="text/css"/>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/814.less', 'css/814.css');
        ?>
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>

    </head>
    <body>
        <div class="type-814">
    	<div class="back">
    		<div class="container">
    			<div class="wrapper">
	    			<div class="abn">
	    				<div class="">
				            <ul class="nav nav-pills">
				            	<li><a  data-toggle="pill" href="#home" title="Show products as thumbs">
				            		Description
				            	</a></li>
				                <li><a data-toggle="pill" href="#menu1" title="Show products as list">
				                	Additional Information
				                </a></li>
				                <li><a data-toggle="pill" href="#menu2" title="Show products as list">
				                	Reviews (2)
				                </a></li>
	                        </ul> 
				        </div>
				        <div class="tab-content">
	                    	<div id="home" class="text-1 tab-pane fade in active ">
	                    		<h2>Product Description</h2>
	                    		<p class="a">
	                    			Nullam justo nibh, luctus id ornare non, rutrum ac ligula. Vestibulum vitae lacus vitae sapien pretium scelerisque quis nec leo. Vestibulum nec justo nisl. Sed vulputate, ligula at blandit tempus, turpis turpis viverra turpis, nec faucibus velit lorem a lacus. Fusce nunc dolor, pretium luctus elit at, interdum sollicitudin lectus. Quisque finibus consequat molestie. Aenean cursus lorem eu fringilla euismod. Pellentesque ullamcorper tempus nisl at sollicitudin. Ut ut maximus lectus, ut condimentum augue. Curabitur non tortor neque. Donec euismod diam sit amet pretium molestie. Sed quis pellentesque velit, vitae rhoncus dolor. Aliquam erat volutpat. Aenean malesuada, risus sed lobortis iaculis, massa erat tristique purus, eu suscipit magna ipsum eu elit. Ut eu orci eget est vestibulum pretium quis ultrices eros.
	                    		</p>
	                    		<p>
	                    			Mauris non rhoncus mauris, ut porta nunc. Nullam tincidunt tempus ligula, a dapibus massa ullamcorper et. Aliquam facilisis, massa in malesuada vehicula, odio mauris gravida sem, molestie imperdiet metus urna sit amet ex. Praesent egestas, nisi vel finibus finibus, dui nulla aliquam metus, sit amet lacinia diam justo sed mauris. Sed efficitur, eros vitae ultricies bibendum, eros nibh pretium massa, ut consequat nisl felis eu libero. Aenean sait amet convallis nisl. Vestibulum sollicitudin nec sem sit amet aliquam. Integer rutrum vel neque nec porttitor.
	                    		</p>
	                    	</div>
	                    	<div id="menu1" class="text-2 tab-pane fade">
	                    		<h2>Additional Information</h2>
	                    		<table class="shop_attributes">
									<tbody>
										<tr>
											<th>Quality</th>
											<td>
												<p>Excellent</p>
											</td>
										</tr>
									</tbody>
								</table>
	                    	</div>
	                    	<div id="menu2" class="text-3 tab-pane fade">
	                    		<h2>2 reviews for HEAD Instinct Junior 25 Prestrung Tennis Racquet</h2>
	                    		<ul class="content-menu">
	                    			<li>
	                    				<div class="user">
	                    					<div class="img">
	                    						<img src="images/user.png">
	                    					</div>
	                    					<div class="comment">
	                    						<div class="star">
													<i class="fa fa-circle ab" aria-hidden="true"></i>
					                                <i class="fa fa-circle ab" aria-hidden="true"></i>
					                                <i class="fa fa-circle ab" aria-hidden="true"></i>
					                                <i class="fa fa-circle ab" aria-hidden="true"></i>
					                                <i class="fa fa-circle ac" aria-hidden="true"></i>
												</div>
	                    						<p class="meta">
													<strong itemprop="author">TRX_admin</strong> – <time itemprop="datePublished" datetime="2016-02-03T08:25:35+00:00">February 3, 2016</time>:
												</p>
	                    					</div>
	                    					<div class="comment-text">
	                    						<p>
					                    			Lorem ipsum dolor sit amet, tibique sadipscing vel in, eros vocent rationibus et quo. Debet euismod mandamus an vim. Ea alia elaboraret vim, in perfecto adolescens quo, ornatus pericula vis an. Vix et movet everti assueverit. Putent apeirian ad his. Consul petentium ad mel.
					                    		</p>
					                    		<p>
					                    			Enim quidam noster vim ut, debitis definiebas vix ei, ut adhuc congue efficiantur pro. Putent quaeque torquatos id mei. Graeco albucius aliquando ius eu, ad usu summo sensibus. Wisi reque vivendum vel no, no harum adipisci eum, sit lorem vocibus aliquando no.
					                    		</p>
	                    					</div>
	                    				</div>
	                    			</li>
	                    			<li>
	                    				<div class="user">
	                    					<div class="img">
	                    						<img src="images/user.png">
	                    					</div>
	                    					<div class="comment">
	                    						<div class="star">
													<i class="fa fa-circle ab" aria-hidden="true"></i>
					                                <i class="fa fa-circle ab" aria-hidden="true"></i>
					                                <i class="fa fa-circle ac" aria-hidden="true"></i>
					                                <i class="fa fa-circle ac" aria-hidden="true"></i>
					                                <i class="fa fa-circle ac" aria-hidden="true"></i>
												</div>
	                    						<p class="meta">
													<strong itemprop="author">TRX_admin</strong> – <time itemprop="datePublished" datetime="2016-02-03T08:25:35+00:00">February 3, 2016</time>:
												</p>
	                    					</div>
	                    					<div class="comment-text">
	                    						<p>Lorem ipsum</p>
	                    					</div>
	                    					<div id="respond" class="">
                                                            <form action="#" method="post" id="" class="">
                                                                <p class="">
                                                                    <label for="rating">Your Rating</label>
                                                                    
                                                                </p>
                                                                <p class="">
                                                                    <label for="comment">Your Review</label>
                                                                    <textarea id="comment" name="comment" cols="45" rows="8" aria="true"></textarea>
                                                                </p>
                                                                <p class="">
                                                                    <label for="author">Name <span class="">*</span></label>
                                                                    <input id="" name="author" type="text" value="" size="30" aria="true">
                                                                </p>
                                                                <p class="">
                                                                    <label for="email">Email <span class="">*</span></label>
                                                                    <input id="" name="email" type="text" value="" size="30" aria="true">
                                                                </p>
                                                                <p class="">
                                                                    <input name="submit" type="submit" id="submit" class="submit" value="Submit">
                                                                </p>
                                                            </form>
                                                        </div>
	                    				</div>
	                    			</li>
	                    		</ul>
	                    	</div>
	                    </div>
	                </div>    	
    			</div>
    		</div>
    	</div>
	</div>            
    </body>
</html>
