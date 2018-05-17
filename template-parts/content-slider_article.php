<?php
/**
 * Template part for displaying sidebar HTML during dev stage
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Cali
 */


$moSliderMobile 		= 2;
$moSliderTablet 		= 3;
$moSliderDesktop 		= 4;

$moSliderClasses 		= ' mo-slider-mobile-' . $moSliderMobile . ' mo-slider-tablet-' . $moSliderTablet . ' mo-slider-desktop-' . $moSliderDesktop;

$moSliderCategory		= get_theme_mod( 'cali_post_slider_category' );
$hide_post_slider_cat	= get_theme_mod( 'cali_post_slider_hide_cat', 0 );

?>
<h1><?php //echo $moSliderCategoryTest; ?></h1>
<div class="mo-slider js-mo-article-slider owl-carousel owl-theme <?php echo $moSliderClasses; ?>">
	<?php

	// Arguments
	$args = array(
		'post_type' 			=> 'post',
		'cat' 					=> $moSliderCategory,
		'ignore_sticky_posts' 	=> true
	);

	// The Query
	$the_query = new WP_Query( $args );

	// The Loop
	if ( $the_query->have_posts() ) {
		while ( $the_query->have_posts() ) {
			$the_query->the_post(); ?>

				<a href="<?php the_permalink(); ?>" class="mo-slider_slide">
					<?php if ( has_post_thumbnail() ) : ?>
					<?php the_post_thumbnail(); ?>
					<?php else : ?>
					<div class="mo-slider_slide-placeholder">
						<i class="far fa-image" aria-hidden="true"></i>
					</div>
					<?php endif; ?>
					<div class="slide-overlay">
						<?php if ( !$hide_post_slider_cat ) : ?>
						<span class="slide-overlay_category mo-category"><?php cali_get_first_cat_name(); ?></span>
						<?php endif; ?>
						<?php the_title( '<h2 class="slide-overlay_title">', '</h2>' ); ?>
						<span class="slide-overlay_meta">
							<?php cali_posted_on_static(); ?>
						</span>
					</div>
				</a>

			<?php
			
		}
	} else { ?>
		<h3><?php _e('Please add posts to the selected slider category in Customizer to populate the Post slider', 'cali'); ?></h3>
	<?php
	}
	/* Restore original Post Data */
	wp_reset_postdata();

	?>
	
</div>
