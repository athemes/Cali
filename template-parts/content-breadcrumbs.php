<?php
/**
 * Template part for displaying sidebar HTML during dev stage
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Mode
 */

?>

<div class="site-breadcrumbs">
	<div class="container">
		<?php
		if ( class_exists( 'WooCommerce' ) && is_woocommerce() ) :
		
			woocommerce_breadcrumb();

		elseif ( function_exists('yoast_breadcrumb') ) :

			yoast_breadcrumb(' <p id="yoast-breadcrumbs">','</p> ');

		endif; 
		?>
	</div>
</div>
