<?php
/**
 *
 * Template Name: C 
 * 
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header(); ?>

<?php
		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 * @hooked WC_Structured_Data::generate_website_data() - 30
		 */
		// do_action( 'woocommerce_before_main_content' );
		?>
	<!-- Page Title
		============================================= -->
		<section id="page-title" class="page-title-parallax page-title-dark page-title-right" style="padding: 250px 0; background-image: url('<?php bloginfo('stylesheet_directory'); ?>/assets/images/custom-images/about-1-overlay.jpg'); background-size: cover; background-position: center center;" data-stellar-background-ratio="0.4">

			<div class="container clearfix">
				<h1>Products</h1>
			</div>

		</section><!-- #page-title end -->
	<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">
				<div class="container clearfix">
					<div class="fancy-title title-center title-dotted-border topmargin">
						<h3>Our Products</h3>
					</div>

					<div class="clear"></div>

					<?php woocommerce_breadcrumb(); ?>

					<div class="clear"></div>

				<!-- Shop
					============================================= -->
					<div id="shop" data-layout="fitRows">
						<?php if ( have_posts() ) : ?>

							<?php
							/**
							 * woocommerce_before_shop_loop hook.
							 *
							 * @hooked wc_print_notices - 10
							 * @hooked woocommerce_result_count - 20
							 * @hooked woocommerce_catalog_ordering - 30
							 */
							do_action( 'woocommerce_before_shop_loop' );
							?>

							<?php woocommerce_product_loop_start(); ?>

							<?php woocommerce_product_subcategories(); ?>

							<?php while ( have_posts() ) : the_post(); ?>

								<?php
									/**
									 * woocommerce_shop_loop hook.
									 *
									 * @hooked WC_Structured_Data::generate_product_data() - 10
									 */
									do_action( 'woocommerce_shop_loop' );
									?>

									<?php wc_get_template_part( 'content', 'product' ); ?>



									<div class="row" style=" text-align: center">
										<?php

									                    // Condition hasbeen changed for below if condition

										if(true) {

											$url_array = explode('/', $_SERVER['REQUEST_URI']); 
											$alpha = $url_array[sizeof($url_array)-2];

											$postids = $wpdb->get_col("
												SELECT p.ID
												FROM $wpdb->posts p
												WHERE p.post_title REGEXP '^" . $wpdb->escape($alpha) . "'
												AND p.post_status = 'publish' 
												AND p.post_type = 'product'
												AND p.post_date < NOW()
												ORDER BY p.post_title ASC"
											);


											if ($postids) {
												$args=array(
													'post__in' => $postids,
													'post_type' => 'product', /*replace 'book' with your custom post type*/
													'post_status' => 'publish',
													'posts_per_page' => -1,
													'caller_get_posts'=> 1
												);
												$my_query = null;
												$my_query = new WP_Query($args);
												if( $my_query->have_posts() ) {

													while ($my_query->have_posts()) : $my_query->the_post(); ?>

													<div class="col-md-4">

														<h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_post_thumbnail( 'thumbnail' ); ?><br><?php the_title(); ?> </a> </h3>
														


													</div>

													<?php
												endwhile;
											}

										}

									}
									else {
										query_posts(array('post_type'=>'product')); /*replace 'book' with your custom post type*/

										if (have_posts()) : while (have_posts()) : the_post(); 

											?>     	 

											<div class="listing">
												<h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_post_thumbnail( 'thumbnail' ); ?><br><?php the_title(); ?><br></a> </h3>			
											</div>

										<?php endwhile; else: ?>

										<p>Sorry, no profiles matched your criteria.</p>

									<?php endif; ?>

								</div> <!-- end post -->

								<div class="navigation">

									<?php if (function_exists('wp_pagenavi')) { wp_pagenavi(); } else { ?>

									<div class="floatleft"><?php next_posts_link( __('&laquo; Older Entries', '') ); ?></div>
									<div class="floatright"><?php previous_posts_link( __('Newer Entries &raquo;', '') ); ?></div>

									<?php } 
								} ?>

							</div>



						<?php endwhile; // end of the loop. ?>

						<?php woocommerce_product_loop_end(); ?>

						<?php
							/**
							 * woocommerce_after_shop_loop hook.
							 *
							 * @hooked woocommerce_pagination - 10
							 */
							do_action( 'woocommerce_after_shop_loop' );
							?>

						<?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>

							<?php
							/**
							 * woocommerce_no_products_found hook.
							 *
							 * @hooked wc_no_products_found - 10
							 */
							do_action( 'woocommerce_no_products_found' );
							?>

						<?php endif; ?>
					</div><!-- #shop end -->

				</div>

			</div>

		</section><!-- #content end -->










		<?php get_footer(); ?>
