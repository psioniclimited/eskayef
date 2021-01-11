<?php
/**
 * Medicine Website functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Medicine_Website
 */

if ( ! function_exists( 'medicinewebsite_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function medicinewebsite_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Medicine Website, use a find and replace
	 * to change 'medicinewebsite' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'medicinewebsite', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'medicinewebsite' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'medicinewebsite_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support( 'custom-logo', array(
		'height'      => 250,
		'width'       => 250,
		'flex-width'  => true,
		'flex-height' => true,
	) );
}
endif;
add_action( 'after_setup_theme', 'medicinewebsite_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function medicinewebsite_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'medicinewebsite_content_width', 640 );
}
add_action( 'after_setup_theme', 'medicinewebsite_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function medicinewebsite_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'medicinewebsite' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'medicinewebsite' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'medicinewebsite_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function medicinewebsite_scripts() {
	wp_enqueue_style( 'medicinewebsite-style', get_stylesheet_uri() );

	wp_enqueue_script( 'medicinewebsite-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'medicinewebsite-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'medicinewebsite_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * [woocommerce_subcats_from_parentcat_by_NAME - append options to select field]
 * @param  [type] $parent_cat_NAME [parent category name]
 * @return [type]                  [select field is returned]
 */
function woocommerce_subcats_from_parentcat_by_NAME($parent_cat_NAME) {
	$IDbyNAME = get_term_by('name', $parent_cat_NAME, 'product_cat');


	$product_cat_ID = $IDbyNAME->term_id;

	$args = array(
		'hierarchical' => 1,
		'show_option_none' => '',
		'hide_empty' => 0,
		'parent' => $product_cat_ID,
		'taxonomy' => 'product_cat'
	);

	echo '<select class="form-control" name="categories" onchange="location = this.value;">';
  	// Add custom option as default
  	// echo '<option>' . __($parent_cat_NAME, 'text-domain') . '</option>';
	echo '<option>Select One</option>';



	 	// Get categories as array
	$categories = get_categories( $args );
	foreach ( $categories as $category ) :
		$stored_category_id = $product_cat_ID;
	    	// Check if current term ID is equal to term ID stored in database
	    	// $selected = ( $stored_category_id ==  $category->term_id  ) ? 'selected' : '';
		$link = get_term_link( $category->slug, $category->taxonomy );
		echo '<option value="' . $link . '">' . $category->name . '</option>';
	endforeach;

	echo '</select>';
}

/**
 * [woocommerce_all_products - append options to Brand select field]
 * @return [type] [select field]
 */
function woocommerce_all_products() {
	$args = array( 'post_type' => 'product');
	$loop = new WP_Query( $args );

	echo '<select class="form-control" name="categories" onchange="location = this.value;">';
		// Add custom option as default
	echo '<option>Select One</option>';

	while ( $loop->have_posts() ) : $loop->the_post(); 
		echo '<option value="'. get_permalink() .'">' . get_the_title() . '</option>';
	endwhile; 

	echo '</select>';

	wp_reset_query(); 
}





// Remove sidebar
remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );
// Remove result count
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
// Remove catalog ordering
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );
// Add product catagory on products page
add_action('woocommerce_before_shop_loop', 'custom_product_category', 40);


/**
 * [custom_product_category - product variations in dropdown and search input field]
 * 
 */
// function custom_product_category(){
// 	echo '<div class="col_one_fourth">';
// 		echo '<label for="template-contactform-subject">Product Search <small>*</small></label>';
// 		get_product_search_form();
// 	echo '</div>';
// 	echo '<div class="col_one_fourth">';
// 		echo '<label for="template-contactform-subject">Brand Name <small>*</small></label>';
// 		echo $brand_category = woocommerce_all_products();
// 	echo '</div>';
// 	echo '<div class="col_one_fourth">';
// 		echo '<label for="template-contactform-subject">Generic Name <small>*</small></label>';
// 		echo $generic_category = woocommerce_subcats_from_parentcat_by_NAME('Generic');
// 	echo '</div>';
// 	echo '<div class="col_one_fourth col_last">';
// 		echo '<label for="template-contactform-subject">Therapeutic Class <small>*</small></label>';
// 		echo $therapeutic_category = woocommerce_subcats_from_parentcat_by_NAME('Therapeutic Class');
// 	echo '</div>';
// }
//
//



function custom_product_category(){
	echo '<div class="col_one_fourth">';
	echo '<label for="template-contactform-subject">Product Search <small>*</small></label>';
//	get_product_search_form();
    echo do_shortcode('[yith_woocommerce_ajax_search]');
	echo '</div>';

	echo '<div class="col_one_fourth">';
	echo '<label for="template-contactform-subject">Generic Name <small>*</small></label>';
	echo $generic_category = woocommerce_subcats_from_parentcat_by_NAME('Generic');
	echo '</div>';

	echo '<div class="col_one_fourth">';
	echo '<label for="template-contactform-subject">Therapeutic Class <small>*</small></label>';
	echo $therapeutic_category = woocommerce_subcats_from_parentcat_by_NAME('Therapeutic Class');
	echo '</div>';

	echo '<div class="col_one_fourth col_last">';
	echo '<label for="template-contactform-subject">Brand Name <small>*</small></label>';
	// echo $brand_category = woocommerce_all_products();
	echo $brand_category = woocommerce_subcats_from_parentcat_by_NAME('Brand');
	echo '</div>';
}



/**
 * Add a custom hook to home page to 
 * display custom product category
 */
function wpsites_display_product_category() {
	do_action('wpsites_display_product_category');
}


// Test function
function display_product_category_after_featured_products_heading() {
	echo '<div class="add-text">Add Your Own Text or HTML Here</div>';
};
// Add product category on home page
add_action('wpsites_display_product_category', 'custom_product_category', 5 );

// Remove css/js versions
function remove_cssjs_ver( $src ) {
	if( strpos( $src, '?ver=' ) )
		$src = remove_query_arg( 'ver', $src );
	return $src;
}
add_filter( 'style_loader_src', 'remove_cssjs_ver', 999 );
add_filter( 'script_loader_src', 'remove_cssjs_ver', 999 );

// Enable gallery zoom, lightbox and slider 
// add_theme_support( 'wc-product-gallery-zoom' );
// add_theme_support( 'wc-product-gallery-lightbox' );
// add_theme_support( 'wc-product-gallery-slider' );

/**
 * [add_spacing - add clear class and a link break]
 */
function add_spacing() {
	echo '<div class="clear"></div><br>';
};
add_action( 'woocommerce_after_single_product_summary', 'add_spacing', 18);


/**
 * Add a custom hook to home page to 
 * display featured products
 */
function wpsites_display_featured_products() {
	do_action('wpsites_display_featured_products');
}

/**
 * [get_featured_products  - prints the featured products loop]
 * @return [type] [featured product in owl slider]
 */
function get_featured_products(){
	$meta_query  = WC()->query->get_meta_query();
	$tax_query   = WC()->query->get_tax_query();
	$tax_query[] = array(
		'taxonomy' => 'product_visibility',
		'field'    => 'name',
		'terms'    => 'featured',
		'operator' => 'IN',
	);

	$query_args = array(
		'post_type'           => 'product',
		'post_status'         => 'publish',
		'ignore_sticky_posts' => 1,
		'meta_query'          => $meta_query,
		'tax_query'           => $tax_query,
	);

	$featured_query = new WP_Query($query_args);
	echo '<div id="oc-products" class="owl-carousel products-carousel carousel-widget" data-margin="20" data-nav="true" data-pagi="false" data-items-xxs="1" data-items-xs="2" data-items-sm="3" data-items-md="4" data-loop="true" data-autoplay="3000" data-speed="700">';
	while ( $featured_query->have_posts() ) : $featured_query->the_post(); 
		echo '<div class="oc-item">
		<div class="product iproduct clearfix">
		<div class="product-image">
		<a href="'. get_permalink() .'"><img src="'.woocommerce_get_product_thumbnail().'</a>
		</div>
		<div class="product-desc center">
		<div class="product-title"><h3><a href="'. get_permalink() .'">'.get_the_title().'</a></h3></div>
		</div>
		</div>
		</div>';
	endwhile; 
	echo '</div>';

	wp_reset_query();
	
};
add_action( 'wpsites_display_featured_products', 'get_featured_products');

add_filter( 'woocommerce_breadcrumb_defaults', 'my_change_breadcrumb_delimiter' );
function my_change_breadcrumb_delimiter( $defaults ) {
 // Change the breadcrumb delimiter from '/' to '>'
	$defaults['delimiter'] = ' > ';
	return $defaults;
}


// Function to change sender name by khaled
function wpb_sender_name( $original_email_from ) {
    return 'Eskayef Contact Form';
}

// Hooking up our functions to WordPress filters
add_filter( 'wp_mail_from_name', 'wpb_sender_name' );
