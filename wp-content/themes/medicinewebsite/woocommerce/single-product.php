<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
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
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

get_header('shop'); ?>


    <section id="slider" class="revslider-wrap slider-parallax clearfix">

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100 slideshow-image" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/custom-images/welcome_images/Introduction02.jpg" alt="First slide">
                    <div class="carousel-caption intro-page-carousel-caption">
                        <h1 class="carousel-caption-h1 intro-page-carousel-caption-h1">PRODUCT</h1>
                    </div>
                </div>
            </div>

    </section>

    <section id="content">

        <div class="content-wrap">

            <div class="container clearfix">

                <?php woocommerce_breadcrumb(); ?>

                <div class="clear"></div>

                <?php wpsites_display_product_category(); ?>

                <div class="clear"></div>

                <div class="single-product">

                    <div class="product">
                        <?php while ( have_posts() ) : the_post(); ?>

                            <?php wc_get_template_part( 'content', 'single-product' ); ?>

                        <?php endwhile; // end of the loop. ?>
                    </div>


                </div>

            </div>

        </div>

    </section><!-- #content end -->

<?php get_footer(product);

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
