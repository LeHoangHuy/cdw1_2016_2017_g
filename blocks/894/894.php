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
        $less->compileFile('less/894.less', 'css/894.css');
        ?>
        <link href="css/894.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>

    </head>

    <body>
        <div class="type-894">
		<!-- BEGIN TYPE-894 -->
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4 watch-card">
                        <div class="artist-title col-md-12">
                            <a href="">Chris Brown</a><br/>
                            <span>Music</span>
                        </div>
                        <div class="artist-collage col-md-12">
                            <span class="play-mix"><span class="btn btn-info play-mix-btn"> <span>►</span> YouTube Mix</span></span>
                            <div class="col-md-6 col-sm-6 col-xs-6 left">
                                <div class="row">
                                    <img src="images/mq1.jpg">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6 collage-rhs">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <img src="images/taylor swift.jpg" alt="artist-image">
                                </div>
                                <div class="col-md-12 col-md-12 col-sm-12 col-xs-12">
                                    <img src="images/eminem.jpg" alt="artist-image">
                                </div>        
                            </div>
                        </div>
                        <div class="listing-tab col-md-12">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" id="myTabs" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#track" aria-controls="track" role="tab" data-toggle="tab">Top tracks</a>
                                </li>
                                <li role="presentation">
                                    <a href="#albums" aria-controls="albums" role="tab" data-toggle="tab">Albums</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="track">
                                    <ul>
                                        <li><a href="#">Loyal</a><span>4:31</span></li>
                                        <li><a href="#">Ayo</a><span>6:01</span></li>
                                        <li><a href="#">Look at Me Now</a><span>4:09</span></li>
                                        <li><a href="#">Liquor</a><span>3:51</span></li>
                                        <li><a href="#">Love More</a><span>4:15</span></li>
                                        <li><a href="#">Bitches N Marijuana</a><span>4:17</span></li>
                                        <li><a href="#">Don't Judge Me</a><span>4:52</span></li>
                                        <li><a href="#">Turn Up the Music</a><span>4:18</span></li>
                                        <li><a href="#">With You</a><span>4:16</span></li>
                                        <li><a href="#">Next to You</a><span>6:04</span></li>
                                        <li><a href="#">View all</a></li>
                                    </ul>
                                    <div class="related-artist">
                                        <h3>Related artist</h3>
                                        <div class="col-md-12">  
                                            <div class="col-md-4 artist-next"><img src="images/Tyga.jpg" alt=""/>Drake</div>
                                            <div class="col-md-4 artist-next"><img src="images/Rihanna.jpg" alt=""/>Rihanna</div>      
                                            <div class="col-md-4 artist-next"><img src="images/Tyga.jpg" alt=""/>Tyga</div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="albums">
                                    <ul>
                                        <li><a href="#"><img src="images/Shayne-ward.jpg" alt="" width="50" height="50"> Until you</a></li>
                                    </ul>
                                    <div class="related-artist">
                                        <h3>Related artist</h3>
                                        <div class="col-md-12">
                                            <div class="col-md-4 artist-next"><img src="images/Tyga.jpg" alt=""/>Tyga</div>
                                            <div class="col-md-4 artist-next"><img src="images/Rihanna.jpg" alt=""/>Rihanna</div>                                        
                                            <div class="col-md-4 artist-next"><img src="images/Tyga.jpg" alt=""/>Tyga</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			<!-- BEGIN TYPE-894 -->
        </div>
        <script language="javascript" type="text/javascript">
            $('#myTabs a').click(function (e) {
                e.preventDefault()
                $(this).tab('show')
            })
        </script>
    </body>

</html>