<?php
/**
 * Template name: Home page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Mode
 */

// Post slider category to be excluded from the home page query
// TODO: Get category slug/ID from Customizer?
$postSliderCategoryID = 14;

get_header(); ?>
	<div id="primary" class="content-area col-md-8">
		<main id="main" class="site-main">
			<section>
				<div class="post-layout post-layout-home post-layout-columns-2">
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
								
								<div class="col-md-12">
									<?php get_template_part( 'template-parts/content', 'post_highlighted' ); ?>
								</div>

							<?php
							} else { 
							?>

								<div class="col-md-6">
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
				</div>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_sidebar(); ?>
<?php
get_footer();
