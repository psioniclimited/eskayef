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
	<footer id="footer" class="dark">
		<div class="container">
		<!-- Footer Widgets
			============================================= -->
			<div class="footer-widgets-wrap clearfix">
				<div class="col-lg-3" style="margin-bottom: 10px; margin-top: 7.5%;" id="skf-footer-logo">
					<div class="widget clearfix">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/custom-images/logo/skf-eskayef-pharmaceuticals-ltd-logo.png" alt="" class="footer-logo">
						<div class="footer-text">

						</div>
					</div>
				</div>

				<div class="col-lg-5" style="margin-bottom: 10px; left: 1%">

					<div class="widget widget_links clearfix">
						<h4>Events</h4>
						<ul>
							<li><a href="#">Event 1 : <br>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua.</a></li>
							<li><a href="#">Event 2 : <br>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua.</a></li>
						</ul>
					</div>

				</div>

				<div class="col-lg-4 col_last
				" style="margin-bottom: 10px;" id="skf-footer-contact">

				<div class="widget widget_links clearfix">
					<h4>Contact Info</h4>
					<ul>
						<li><span class="" style="font-weight: 800; font-size: 17px">Corporate Office:<div style="height:1px;font-size:1px;">&nbsp;</div></span> Gulshan Tower, Plot# 31, Road# 53, <br/> Gulshan North C/A, Dhaka- 1212, Bangladesh.
						</li>
						<br>
						<li><span class="" style="font-weight: 800; font-size: 17px">Commercial, Marketing & Sales Office:<div style="height:1px;font-size:1px;">&nbsp;</div></span> Taneem Square, 158 Kemal Ataturk Avenue,<br/> Block- E, Banani, Dhaka- 1213, Bangladesh.
						</li>
					</ul>
				</div>

			</div>


		</div><!-- .footer-widgets-wrap end -->
	</div>

	<!-- Copyrights
		============================================= -->
		<div id="copyrights">
			<div class="container clearfix">
				<div class="copyright-text">
					Powered by <a href="http://psionicinteractive.com/" target="_blank"> Psionic Interactive Limited</a>.<br>
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
	<!-- <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.js"></script>  -->
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/plugins.js"></script>




	<?php wp_footer(); ?>

<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/functions.js"></script>
	<!-- Revolution slider -->
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/plugins/revslider-standalone/revslider/public/assets/js/jquery.themepunch.tools.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/plugins/revslider-standalone/revslider/public/assets/js/jquery.themepunch.revolution.min.js"></script>
	<script type="text/javascript" id="revslider_script" src="<?php bloginfo('template_directory'); ?>/assets/plugins/revslider-standalone/assets/js/revslider.js"></script>
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

		$(document).ready(function() {
			
			setTimeout(function(){ 
				$('.se-pre-con').fadeOut('slow');
				$('.se-pre-con').css('z-index', '9999');
			}, 3000);
			$('.se-pre-con').css('z-index', '-1');
		});

	</script>

	<script>

		$(document).ready(function() {

			$('#datatable1').dataTable();

		});

	</script>



	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js "></script>
	<script>

		$(document).ready(function() {

			$(window).load(function() {
			   $(".site").show(); //or fadeIn (what ever suits your needs)
			   $(".se-pre-con").fadeOut();
			});


			$('#datatable1').dataTable();

		});

	</script>

	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/custom-js/jquery.form.min.js"></script>

	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/custom-js/plugins.js"></script> 

	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/custom-js/script.js"></script>


</body>
</html>
