<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Mode
 */

$sidebar = get_theme_mod( 'mode_blog_archives_sidebar' );

if ( !$sidebar ) {
	$cols = 'col-md-12';
	$pageLayout = 'page-no-sidebar';
	$postLayout = 'post-layout-columns-3';
	$postCols = 'col-sm-6 col-md-4';
} else {
	$cols = 'col-md-8';
	$pageLayout = 'page-with-sidebar';
	$postLayout = 'post-layout-columns-2';
	$postCols = 'col-sm-6';
}

get_header(); ?>
	<div class="col-md-12">
		<div class="page-header">
			<?php mode_page_title(); ?>
		</div>
	</div>
	<div id="primary" class="content-area <?php echo $pageLayout ?> <?php echo $cols; ?>">
		<main id="main" class="site-main">
			<section>
				<?php if ( have_posts() ) : ?>

					<div class="post-layout clearfix <?php echo $postLayout ?>">
						<div class="row">
							<?php
							/* Start the Loop */
							while ( have_posts() ) : the_post(); ?>
								<div class="<?php echo $postCols ?>">
									<?php
									/*
									* Include the Post-Format-specific template for the content.
									* If you want to override this in a child theme, then include a file
									* called content-___.php (where ___ is the Post Format name) and that will be used instead.
									*/
									get_template_part( 'template-parts/content', get_post_format() );
									?>
								</div>
							<?php
							endwhile; ?>
						</div>
					</div>

					<?php

					the_posts_navigation();

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif; ?>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php
if ( $sidebar ) {
	get_sidebar();
}
get_footer();
