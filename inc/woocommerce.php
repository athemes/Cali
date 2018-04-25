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

add_filter( 'woocommerce_breadcrumb_defaults', 'wcc_change_breadcrumb_delimiter' );
function wcc_change_breadcrumb_delimiter( $defaults ) {
	// Change the breadcrumb delimeter from '/' to '>'
	$defaults['delimiter'] = ' &gt; ';
	return $defaults;
}

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