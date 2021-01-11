<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Medicine_Website
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <!-- Stylesheets
        ============================================= -->

    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900|Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap.css" rel="stylesheet"/>
    <?php wp_head(); ?>
    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/swiper.css" rel="stylesheet"/>
    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/dark.css" rel="stylesheet"/>
    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/font-icons.css" rel="stylesheet"/>
    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/animate.css" rel="stylesheet"/>
    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/magnific-popup.css" rel="stylesheet"/>


    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/components/bs-datatable.css" type="text/css" />

    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/responsive.css" rel="stylesheet"/>


    <!-- Here goes your colors.css
        ============================================= -->
    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/colors.css" rel="stylesheet"/>
    <!-- Revolution slider  -->
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_directory'); ?>/assets/plugins/revslider-standalone/revslider/public/assets/css/settings.css" />
    <!-- Hover effect  -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/assets/plugins/hover-effect/css/set1.css" />
    <!-- Horizontal timeline  -->
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_directory'); ?>/assets/plugins/horizontal-timeline/css/style.css" />
    <!-- Custom css -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/custom-inroduction.css" />





    <link rel="stylesheet" id="be-themes-shortcodes-css"  href="<?php bloginfo('stylesheet_directory'); ?>/assets/custom-css/shortcodes.css" type="text/css" media="all" />

    <link rel="stylesheet" id="be-lightbox-css-css"  href="<?php bloginfo('stylesheet_directory'); ?>/assets/custom-css/magnific-popup.css" type="text/css" media="all" />

    <link rel="stylesheet" id="be-animations-css"  href="<?php bloginfo('stylesheet_directory'); ?>/assets/custom-css/animate-custom.css" type="text/css" media="all" />

    <link rel="icon" href="<?php bloginfo('stylesheet_directory'); ?>/assets/images/custom-images/SKF_Fab_Icon.png">

</head>

<body  <?php body_class(); ?>>

<div class="se-pre-con"></div>

<div id="page" class="site">


    <!-- Top Bar
        ============================================= -->
    <div id="top-bar">

        <div class="container clearfix">

            <div class="col_half nobottommargin clearfix">


            </div>

            <div class="col_half fright col_last clearfix nobottommargin">

                <!-- Top Social
                    ============================================= -->
                <div id="top-social">
                    <ul>


                        <li id="header-custom-si-call-text">
                            <a href="https://psionic.io/eskayef/news-and-events" class="si-call custom-si-call cutom-tag-a-class-for-news">
													<span class="ts-icon">
														<i class="custom-icon-for-header "><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/custom-images/FOR-NEW-HEADER/news-logo-WHITE.png"></i>
													</span>
                                <span class="ts-text">
														News & Events
													</span>
                            </a>
                        </li>

                        <li class="no-border-on-left custom-career">
                            <a href="#" class="cutom-tag-a-class-for-hr">
													<span class="ts-icon">
														<i class="custom-icon-for-header"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/custom-images/FOR-NEW-HEADER/career.png"></i>
													</span>
                                <span class="ts-text">
														Career and HR
													</span>
                            </a>
                        </li>

                        <li class="no-border-on-left">
                            <a href="#" class="si-facebook">
													<span class="ts-icon">
														<i class="icon-facebook custom-icon-for-header no-border-on-right"></i>
													</span>
                                <span class="ts-text">
														Facebook
													</span>
                            </a>
                        </li>

                        <li class="no-border-on-left">
                            <a href="#" class="si-googleplay">
													<span class="ts-icon">
														<i class="icon-googleplay custom-icon-for-header"></i>
													</span>
                                <span class="ts-text">
														Youtube
													</span>
                            </a>
                        </li>

                    </ul>
                </div><!-- #top-social end -->

            </div>

        </div>

    </div><!-- #top-bar end -->

    <!-- Header
        ============================================= -->
    <header id="header" class="transparent-header floating-header" data-sticky-class="not-dark">

        <div id="header-wrap">

            <div class="container clearfix">

                <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

                <!-- Logo
                    ============================================= -->
                <div id="logo">
                    <a href="http://psionic.io/eskayef/" class="standard-logo"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/custom-images/logo/skf-logo-3.png" alt="Eskayef Logo"></a>
                    <a href="http://psionic.io/eskayef/" class="retina-logo"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/custom-images/logo/skf-logo-3.png" alt="Eskayef Logo"></a>
                </div>

                <!-- If the menu (WP admin area) is not set, then the "menu_class" is applied to "container". In other words, it overwrites the "container_class". Ref: http://wordpress.org/support/topic/wp_nav_menu-menu_class-usage-bug?replies=4 -->

                <?php
                // wp_nav_menu( array( 'theme_location' => 'my_new_location') );

                // wp_nav_menu( array(

                // 	'display_location'	=> 'primary',
                // 	'container_id'		=> 'primary-menu',
                // 	'container_class'		=> 'menu'

                // ) );
                ?>

                <!-- Primary Navigation
                    ============================================= -->
                <nav id="primary-menu">

                    <ul>
                        <li class="mega-menu"><a href="#"><div>About Us</div></a>
                            <div class="mega-menu-content style-2 clearfix">
                                <ul class="mega-menu-column col-md-4">
                                    <li class="mega-menu-title"><a href="https://psionic.io/eskayef/introduction"><div>Introduction</div></a>
                                        <ul>
                                            <li><a href="https://psionic.io/eskayef/introduction#history-of-eskayef"><div>History</div></a></li>
                                            <li><a href="https://psionic.io/eskayef/introduction#journey-of-chairman"><div>Our Chairman</div></a></li>
                                            <li><a href="https://psionic.io/eskayef/introduction#md-ceo-corner"><div>MD and CEO's Corner</div></a></li>
                                            <li><a href="https://psionic.io/eskayef/introduction#core-value"><div>Values</div></a></li>
                                            <li><a href="https://psionic.io/eskayef/introduction#executive-management"><div>Executive Management</div></a></li>
                                            <li><a href="https://psionic.io/eskayef/introduction#key-milestones"><div>Key Milestones</div></a></li>
                                            <li><a href="https://psionic.io/eskayef/introduction#memory-lane"><div>Memory Lane</div></a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <ul class="mega-menu-column col-md-4">
                                    <li class="mega-menu-title"><a href="https://psionic.io/eskayef/mnc-ties"><div>MNC Ties</div></a>
                                        <ul>
                                            <li><a href="https://psionic.io/eskayef/mnc-ties#global-audit-by-mncs"><div>GLOBAL AUDIT BY MNCS</div></a></li>
                                            <li><a href="https://psionic.io/eskayef/mnc-ties#technology-transfer"><div>TECHNOLOGY TRANSFER</div></a></li>
                                            <li><a href="https://psionic.io/eskayef/mnc-ties#manufacturing-under-license"><div>MANUFACTURING UNDER LICENSE</div></a></li>
                                            <li><a href="https://psionic.io/eskayef/mnc-ties#business-alliance"><div>BUSINESS ALLIANCE</div></a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <ul class="mega-menu-column col-md-4">
                                    <li class="mega-menu-title"><a href="https://psionic.io/eskayef/accreditations"><div>Accreditations</div></a>
                                        <ul>
                                            <li><a href="https://psionic.io/eskayef/accreditations#mhra"><div>UK, MHRA</div></a></li>
                                            <li><a href="https://psionic.io/eskayef/accreditations#tga"><div>TGA, Australia</div></a></li>
                                            <li><a href="https://psionic.io/eskayef/accreditations#ema"><div>EMA, European Union</div></a></li>
                                            <li><a href="https://psionic.io/eskayef/accreditations#vmd"><div>VMD, UK</div></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="http://psionic.io/eskayef/products"><div>Products</div></a>
                            <!-- <ul>
                                <li><a href="#"><div>Formulations products</div></a></li>
                                <li><a href="#"><div>Animal health products</div></a></li>
                                <li><a href="#"><div>Bulk pellets</div></a></li>
                                <li><a href="#"><div>Imported products</div></a></li>
                            </ul> -->
                        </li>
                        <li><a href="http://psionic.io/eskayef/facilities"><div>Facilities</div></a>
                            <ul>
                                <li><a href="http://psionic.io/eskayef/facilities#manufacturing-line"><div>Manufacturing Line</div></a>
                                    <ul>
                                        <li><a href="http://psionic.io/eskayef/facilities#general-unit"><div>General Unit</div></a></li>
                                        <li><a href="http://psionic.io/eskayef/facilities#cephalosphorin-unit"><div>Cephalosporin Unit</div></a></li>
                                    </ul>
                                </li>
                                </li>
                            </ul>
                        </li>

                        <li><a href="http://psionic.io/eskayef/global-presence"><div>Global Presence</div></a>
                        </li>

                        <!-- <li><a href="http://psionic.io/eskayef/news-events"><div>News & Events</div></a></li> -->

                        <li><a href="http://psionic.io/eskayef/contact"><div>Contact</div></a>
                        </li>
                    </ul>

                    <!-- Top Search
                        ============================================= -->
                    <!-- <div id="top-search">
                        <a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
                        <form action="search.html" method="get">
                            <input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter..">
                        </form>
                    </div> -->

                </nav><!-- #primary-menu end -->


            </div>

        </div>

    </header><!-- #header end -->
