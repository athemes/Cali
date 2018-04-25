<?php
/**
 * Template part for displaying sidebar HTML during dev stage
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Mode
 */

// NOT USED
// TODO: remove after theme development

?>

<div class="mobile-menu mo-hide-on-desktop">
	<div class="mobile-menu__search site-search__wrap site-search__wrap--mobile">
		<?php get_search_form(); ?>
	</div><!-- /.site-search__wrap--mobile -->

	<nav class="mobile-menu__navigation" role="navigation">
		<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
		?>
	</nav><!-- /.mobile-menu__navigation -->
	<div class="social-navigation__wrap social-navigation--mobile__wrap">
		<nav class="social-navigation social-navigation--mobile social-links clearfix">
			<?php wp_nav_menu( array( 
				'theme_location' => 'menu-social-header', 
				'link_before' => '<span class="screen-reader-text">', 
				'link_after' => '</span>', 
				'menu_id'        => 'social-header-menu', 
				'fallback_cb' => false ) ); 
			?>			
		</nav>
	</div>
</div>
