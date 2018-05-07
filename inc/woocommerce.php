<?php
/**
 * Woocommerce compatibility
 *
 * @package Mode
 */

/**
 * Declare support
 */
function mode_wc_support() {
    add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'mode_wc_support' );

/**
 * Add and remove actions
 */
function mode_woocommerce_actions() {

    $fullwidth_archives = get_theme_mod( 'mode_fullwidth_shop_archives', 0 );
    $fullwidth_archives = true;
    
	//Remove sidebar on single products
	if ( is_single() || ( is_archive() && $fullwidth_archives ) ) {
		remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar' );
	}

	//Remove breadcrumbs
	remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );

}
add_action( 'wp', 'mode_woocommerce_actions' );

// Change the breadcrumb delimeter from '/' to '>'
function mode_change_breadcrumb_delimiter( $defaults ) {

	$defaults['delimiter'] = ' &gt; ';
	return $defaults;
}
add_filter( 'woocommerce_breadcrumb_defaults', 'mode_change_breadcrumb_delimiter' );

/**
 * Single Product options
 */

// Remove Rating on the single product page if the user selected that option
function mode_single_rating_customizer_check() {
    $mode_single_product_rating = get_theme_mod('mode_hide_product_rating_single', 0);
    if ( $mode_single_product_rating == 1 ) :
        remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10 );
	endif;
}
add_action('wp','mode_single_rating_customizer_check');

// Remove SKU, Categories and Tags on the single product page if the user selected that option
function mode_single_summary_customizer_check() {
    $mode_hide_product_summary_single = get_theme_mod('mode_hide_product_summary_single', 0);
    if ( $mode_hide_product_summary_single == 1 ) :
        remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
	endif;
}
add_action('wp','mode_single_summary_customizer_check');

/**
 * Shop/Archive page options
 */

// Remove Ordering/Sorting on the shop/archive page if the user selected that option
function mode_sorting_customizer_check() {
    $mode_hide_product_archive_sorting = get_theme_mod('mode_hide_product_archive_sorting', 0);
    if ( $mode_hide_product_archive_sorting == 1 ) :
		remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );
	endif;
}
add_action('wp','mode_sorting_customizer_check');

// Remove number of Results on the shop/archive page if the user selected that option
function mode_archive_results_customizer_check() {
    $mode_hide_product_archive_results = get_theme_mod('mode_hide_product_archive_results', 0);
    if ( $mode_hide_product_archive_results == 1 ) :
		remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
	endif;
}
add_action('wp','mode_archive_results_customizer_check');

// Remove Price on the shop/archive page if the user selected that option
function mode_price_customizer_check() {
    $mode_hide_product_archive_price = get_theme_mod('mode_hide_product_archive_price', 0);
    if ( $mode_hide_product_archive_price == 1 ) :
		remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10 );
	endif;
}
add_action('wp','mode_price_customizer_check');

// Remove Rating on the shop/archive page if the user selected that option
function mode_archive_ratings_customizer_check() {
    $mode_hide_product_archive_ratings = get_theme_mod('mode_hide_product_archive_ratings', 0);
    if ( $mode_hide_product_archive_ratings == 1 ) :
		remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );
	endif;
}
add_action('wp','mode_archive_ratings_customizer_check');

// Remove Add to cart button on the shop/archive page if the user selected that option
function mode_atc_customizer_check() {
    $mode_hide_product_archive_atc = get_theme_mod('mode_hide_product_archive_atc', 0);
    if ( $mode_hide_product_archive_atc == 1 ) :
		remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart' );
	endif;
}
add_action('wp','mode_atc_customizer_check');
