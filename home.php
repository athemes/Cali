<?php
/**
 * Home template file
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Mode
 */

$postSliderCategoryID = 14;

$sidebar = get_theme_mod( 'mode_blog_home_sidebar' );

$postLayout = 'post-layout-columns-2';
$postCols = 'col-sm-6 col-md-6';

if ( !$sidebar ) {
	$cols = 'col-md-8 col-md-offset-2';
	$pageLayout = 'page-no-sidebar';
} else {
	$cols = 'col-md-8';
	$pageLayout = 'page-with-sidebar';
}

get_header(); ?>
	<div id="primary" class="content-area <?php echo $pageLayout ?> <?php echo $cols; ?>">
		<main id="main" class="site-main">
			<section>
				<div class="post-layout post-layout-home <?php echo $postLayout ?>">
					<?php

					// Arguments
					$args = array(
						'post_type' => 'post',
						'category__not_in' => $postSliderCategoryID,
					);

					// The Query
					$the_query = new WP_Query( $args );
					
					// The Loop
					if ( $the_query->have_posts() ) {
						$postIndex = 0;
						while ( $the_query->have_posts() ) {
							$the_query->the_post();
							
							if ($postIndex == 0) { ?>
								<div class="row">
									<div class="col-md-12">
										<?php get_template_part( 'template-parts/content', 'post_highlighted' ); ?>
									</div>
								</div>
								<div class="row"><!-- start of div.row for posts under highlighted post -->
							<?php
							} else { 
							?>

									<div class="<?php echo $postCols ?>">
										<?php get_template_part( 'template-parts/content', get_post_format() ); ?>
									</div>

							<?php
							}
							$postIndex++;
						}
					} else {
						// no posts found
					}
					/* Restore original Post Data */
					wp_reset_postdata();

					?>
								</div><!-- end of div.row for posts under highlighted post -->
				</div>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php 
if ( $sidebar ) {
	get_sidebar();
}
get_footer();
