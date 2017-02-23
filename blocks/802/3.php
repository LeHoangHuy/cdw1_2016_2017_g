
<!DOCTYPE html>
<html lang="en-US">

    <head>
        <meta charset="UTF-8" />           
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/3.css" rel="stylesheet" type="text/css"/>
    </head>
     <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/3.less', 'css/3.css');
        ?>
    <div class="3">
<div class="content_wrap">
    <div class="content">
       
                <div class="padding_top_20_imp padding_bottom_20_imp">
                    <div class="sc_section general_info_section margin_top_huge margin_bottom_huge">
                       
                            <div class="sc_section_overlay">
                                <div class="sc_section_content ">
                                    <div class="columns_wrap sc_columns no_margins ">
                                        <div class="column-1_2 sc_column_item  "></div><div class="column-1_2 sc_column_item  custom_shadow1 even text_align_center">
                                            <div class="sc_column_item_inner add_color_2_bg">
                                                <h3 class="sc_title  margin_top_medium margin_bottom_tiny color_white font_weight_600 font_size_3_929em">Welcome</h3>
                                                <h6 class="sc_title  sc_align_center text_uppercase accent1 margin_bottom_medium ltr-spc2 text_align_center font_weight_400 font_size_0_857em">to our tennis club</h6>
                                                <div class="margin_top_tiny-">
                                                    <p class="color_white width_90_per margin_auto">Founded in 1964 by a team of professional tennis players our club is based in one of the most picturesque areas of the country and is ideal for family membership.</p>
                                                </div>
                                                <figure class="margin_bottom_medium">
                                                    <img src="images/signature.png" alt="" />
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                     
                 
             
            </div>
            </div>
            </html> 