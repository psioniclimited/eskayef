<?php
/*
	Template Name: News and Events Page
 */
get_header(); ?>

<!-- Page Title
	============================================= -->
<section id="slider" class="revslider-wrap slider-parallax clearfix">

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100 slideshow-image" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/custom-images/welcome_images/MNC-TIES.jpg" alt="First slide">
                <div class="carousel-caption intro-page-carousel-caption">
                    <h1 class="carousel-caption-h1 intro-page-carousel-caption-h1">NEWS AND EVENTS</h1>
                </div>
            </div>
        </div>

</section>

<!-- Content
============================================= -->
<section id="content">

    <div class="content-wrap">

        <div class="container clearfix">

            <!-- Posts
            ============================================= -->
            <div id="posts" class="small-thumbs">

                <div class="entry clearfix">
                    <div class="entry-image">
                        <a href="<?php bloginfo('stylesheet_directory'); ?>/assets/images/custom-images/med-5.jpg"
                           data-lightbox="image"><img class="image_fade"
                                                      src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/custom-images/med-5.jpg" alt="Standard Post with Image"></a>
                    </div>
                    <div class="entry-c">
                        <div class="entry-title">
                            <h2><a href="blog-single.html">Eskayef image</a></h2>
                        </div>
                        <ul class="entry-meta clearfix">
                            <li><i class="icon-calendar3"></i> 10th February 2014</li>
                        </ul>
                        <div class="entry-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <a href="#"><button type="button" class="custom-skf-facility-btn">Read More</button></a>
                        </div>
                    </div>
                </div>

                <div class="entry clearfix">
                    <div class="entry-image">
                        <iframe width="1280" height="720" src="https://www.youtube.com/embed/YzCN-rwuiaA" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>
                    <div class="entry-c">
                        <div class="entry-title">
                            <h2><a href="blog-single-full.html">Eskayef video</a></h2>
                        </div>
                        <ul class="entry-meta clearfix">
                            <li><i class="icon-calendar3"></i> 16th February 2014</li>
                        </ul>
                        <div class="entry-content">
                            <p>Asperiores, tenetur, blanditiis, quaerat odit ex exercitationem pariatur quibusdam
                                veritatis quisquam laboriosam esse beatae hic perferendis velit deserunt soluta iste repellendus officia.
                            </p>
                            <a href="#"><button type="button" class="custom-skf-facility-btn">Read More</button></a>
                        </div>
                    </div>
                </div>

                <div class="entry clearfix">
                    <div class="entry-image">
                        <div class="fslider" data-arrows="false" data-lightbox="gallery">
                            <div class="flexslider">
                                <div class="slider-wrap">
                                    <div class="slide"><a href="<?php bloginfo('stylesheet_directory'); ?>/assets/images/custom-images/maxressdefault.jpg" data-lightbox="gallery-item"><img class="image_fade" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/custom-images/maxressdefault.jpg" alt="Standard Post with Gallery"></a></div>
                                    <div class="slide"><a href="<?php bloginfo('stylesheet_directory'); ?>/assets/images/custom-images/mnc-ties.png" data-lightbox="gallery-item"><img class="image_fade" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/custom-images/mnc-ties.png" alt="Standard Post with Gallery"></a></div>
                                    <div class="slide"><a href="<?php bloginfo('stylesheet_directory'); ?>/assets/images/custom-images/med-5.jpg" data-lightbox="gallery-item"><img class="image_fade" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/custom-images/med-5.jpg" alt="Standard Post with Gallery"></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="entry-c">
                        <div class="entry-title">
                            <h2><a href="blog-single-small.html">Eskayef slider</a></h2>
                        </div>
                        <ul class="entry-meta clearfix">
                            <li><i class="icon-calendar3"></i> 24th February 2014</li>
                        </ul>
                        <div class="entry-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptatem, dolorem animi nisi autem blanditiis enim culpa reiciendis etctio sequi adipisci.</p>
                            <a href="#"><button type="button" class="custom-skf-facility-btn">Read More</button></a>
                        </div>
                    </div>
                </div>

                <div class="entry clearfix">
                    <div class="entry-image clearfix">
                        <div class="portfolio-single-image masonry-thumbs grid-4" data-big="3" data-lightbox="gallery">
                            <a href="<?php bloginfo('stylesheet_directory'); ?>/assets/images/custom-images/placeholder_images/1.jpg" data-lightbox="gallery-item"><img class="image_fade" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/custom-images/placeholder_images/1.jpg" alt="1"></a>
                            <a href="<?php bloginfo('stylesheet_directory'); ?>/assets/images/custom-images/placeholder_images/2.jpg" data-lightbox="gallery-item"><img class="image_fade" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/custom-images/placeholder_images/2.jpg" alt="2"></a>
                            <a href="<?php bloginfo('stylesheet_directory'); ?>/assets/images/custom-images/placeholder_images/3.jpg" data-lightbox="gallery-item"><img class="image_fade" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/custom-images/placeholder_images/3.jpg" alt="3"></a>
                            <a href="<?php bloginfo('stylesheet_directory'); ?>/assets/images/custom-images/placeholder_images/4.jpg" data-lightbox="gallery-item"><img class="image_fade" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/custom-images/placeholder_images/4.jpg" alt="4"></a>
                            <a href="<?php bloginfo('stylesheet_directory'); ?>/assets/images/custom-images/placeholder_images/5.jpg" data-lightbox="gallery-item"><img class="image_fade" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/custom-images/placeholder_images/5.jpg" alt="5"></a>
                            <a href="<?php bloginfo('stylesheet_directory'); ?>/assets/images/custom-images/placeholder_images/6.jpg" data-lightbox="gallery-item"><img class="image_fade" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/custom-images/placeholder_images/6.jpg" alt="6"></a>
                            <a href="<?php bloginfo('stylesheet_directory'); ?>/assets/images/custom-images/placeholder_images/7.jpg" data-lightbox="gallery-item"><img class="image_fade" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/custom-images/placeholder_images/7.jpg" alt="7"></a>
                            <a href="<?php bloginfo('stylesheet_directory'); ?>/assets/images/custom-images/placeholder_images/8.jpg" data-lightbox="gallery-item"><img class="image_fade" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/custom-images/placeholder_images/8.jpg" alt="8"></a>
                            <a href="<?php bloginfo('stylesheet_directory'); ?>/assets/images/custom-images/placeholder_images/9.jpg" data-lightbox="gallery-item"><img class="image_fade" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/custom-images/placeholder_images/9.jpg" alt="9"></a>
                        </div>
                    </div>
                    <div class="entry-c">
                        <div class="entry-title">
                            <h2><a href="blog-single-thumbs.html">Eskayef gallery</a></h2>
                        </div>
                        <ul class="entry-meta clearfix">
                            <li><i class="icon-calendar3"></i> 3rd March 2014</li>
                        </ul>
                        <div class="entry-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptatem, dolorem animi nisi autem blanditiis enim culpa reiciendis et explicabo tenetur voluptate rerum molestiae eaque possimus exercitationem eligendi fuga.</p>
                            <a href="#"><button type="button" class="custom-skf-facility-btn">Read More</button></a>
                        </div>
                    </div>
                </div>

            </div><!-- #posts end -->

            <!-- Pagination
            ============================================= -->
            <div class="row mb-3">
                <div class="col-12">
                    <a href="#"><button type="button" class="custom-skf-facility-btn float-left"><i class="icon-circle-arrow-left" style="vertical-align: middle;"></i> Older</button></a>
                    <a href="#"><button type="button" class="custom-skf-facility-btn float-right">Newer <i class="icon-circle-arrow-right" style="vertical-align: middle;"></i></button></a>
                </div>
            </div>
            <!-- .pager end -->

        </div>

    </div>

</section><!-- #content end -->


<?php get_footer(); ?>
