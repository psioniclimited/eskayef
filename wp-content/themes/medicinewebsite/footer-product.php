<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Medicine_Website
 */

?>


<!-- Footer
	============================================= -->
<footer id="footer" class="dark" style="background: url('<?php bloginfo('stylesheet_directory'); ?>/assets/images/custom-images/footer/footer-background.jpg'); background-size: cover;">

    <div class="container footer-container-for-logo-social-icons">
        <div class="row">
            <div class="col_half nobottommargin">
                <div class="footer-img-div">
                    <a href="#">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/custom-images/footer/footer-logo.png" alt="footer-skf-logo" class="footer-symphony-logo">
                    </a>
                </div>
            </div>

            <div class="col_half col_last nobottommargin">
                <div class="social-icons-div">
                        <span>
                            <a href="#" class="social-icon social-icon-with-right-margin  si-rounded topmargin-sm si-facebook">
                                <i class="icon-facebook"></i>
                                <i class="icon-facebook"></i>
                            </a>

<!--                            <a href="#" class="social-icon social-icon-with-right-margin si-rounded topmargin-sm si-twitter">-->
<!--                                <i class="icon-twitter"></i>-->
<!--                                <i class="icon-twitter"></i>-->
<!--                            </a>-->

                            <a href="#" class="social-icon  si-rounded topmargin-sm si-youtube">
                                <i class="icon-youtube"></i>
                                <i class="icon-youtube"></i>
                            </a>
                        </span>
                </div>
            </div>


        </div>

    </div>

    <div id="copyrights">

        <div class="container custom-copyrights-container clearfix">

            <div class="col_full custom_col_full_copyright_year">
                ©2019 Eskayef Pharmaceuticals Limited  - <span class="new-power-by-for-eskayef"> Powered By: <a href="https://psionic.io/">Psionic<span class="square"></span></span></a>
            </div>

        </div>

    </div><!-- #copyrights end -->

</footer><!-- #footer end -->


</div>

<!-- Go To Top
	============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>

<!-- External JavaScripts
	============================================= -->
<!--<script type="text/javascript" src="--><?php //bloginfo('template_directory'); ?><!--/assets/js/jquery.js"></script>-->
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/plugins.js"></script>




<?php wp_footer(); ?>

<!-- Footer Scripts ============================================= -->
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/functions.js"></script>


<!-- Globe Scripts ============================================= -->
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/TweenMax.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/Draggable.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/globe.js"></script>

<!-- Horizontal Timeline -->
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/plugins/horizontal-timeline/js/jquery.mobile.custom.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/plugins/horizontal-timeline/js/main.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/plugins/horizontal-timeline/js/modernizr.js"></script>

<!-- Datamaps -->
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/plugins/datamaps/js/d3.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/plugins/datamaps/js/topojson.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/plugins/datamaps/js/datamaps.world.min.js"></script>

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/plugins/datamaps/js/datamap-custom.js"></script>



<!-- Bootstrap Data Table Plugin -->
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/components/bs-datatable.js"></script>
<script>
    $(document).ready(function(){
        // Triggering animation on scroll
        $(window).scroll(function () {

            if ($(window).scrollTop() + $(window).height() > $('.st2').offset().top) {
                $('.st2').addClass("st66");
                $('.st1').addClass("st66");
                $('.st3').addClass("st66");
                $('.st4').addClass("st66");
            } else {
                // $('.st2').removeClass("st66");
            }

        });
    });
</script>
<script>

    $(document).ready(function() {

        $('.se-pre-con').hide();
        $('#page').show();

        // setTimeout(function(){
        //     $('.se-pre-con').css('z-index', '9999');
        //     $('.se-pre-con').fadeOut('slow');
        // }, 3000);
        // $('.se-pre-con').css('z-index', '-1');
    });

</script>

<script>

    $(document).ready(function() {
        $('#datatable1').dataTable();
    });

</script>
<script type="text/javascript">

</script>
<!-- 	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script> -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>


</body>
</html>
