<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mode
 */

// Static file - used for reference only!
// TODO: remove after theme development

?>
			</div><!-- /.row started in header.php -->
		</div><!-- /.container started in header.php -->
	</div><!-- #content started in header.php -->
	<div class="mo-instagram-feed js-mo-instagram-feed owl-carousel owl-theme">
		<div class="mo-instagram-feed_el">
			<img src="/wp-content/themes/mode/dev-img/footer-insta-1.png" alt="">
			<a href="#" class="mo-instagram-feed_overlay">
				<span><i class="fa fa-instagram"></i> follow me</span>
			</a>
		</div>
		<div class="mo-instagram-feed_el">
			<img src="/wp-content/themes/mode/dev-img/footer-insta-2.png" alt="">
			<a href="#" class="mo-instagram-feed_overlay">
				<span><i class="fa fa-instagram"></i> follow me</span>
			</a>
		</div>
		<div class="mo-instagram-feed_el">
			<img src="/wp-content/themes/mode/dev-img/footer-insta-3.png" alt="">
			<a href="#" class="mo-instagram-feed_overlay">
				<span><i class="fa fa-instagram"></i> follow me</span>
			</a>
		</div>
		<div class="mo-instagram-feed_el">
			<img src="/wp-content/themes/mode/dev-img/footer-insta-4.png" alt="">
			<a href="#" class="mo-instagram-feed_overlay">
				<span><i class="fa fa-instagram"></i> follow me</span>
			</a>
		</div>
		<div class="mo-instagram-feed_el">
			<img src="/wp-content/themes/mode/dev-img/footer-insta-5.png" alt="">
			<a href="#" class="mo-instagram-feed_overlay">
				<span><i class="fa fa-instagram"></i> follow me</span>
			</a>
		</div>
		<div class="mo-instagram-feed_el">
			<img src="/wp-content/themes/mode/dev-img/footer-insta-6.png" alt="">
			<a href="#" class="mo-instagram-feed_overlay">
				<span><i class="fa fa-instagram"></i> follow me</span>
			</a>
		</div>
	</div>
	<footer id="colophon" class="site-footer">
		<div class="container">
			<nav class="social-navigation--footer social-links clearfix mo-social-buttons">
				<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-social-footer',
						'menu_id'        => 'social-footer-menu',
					) );
				?>
			</nav>
			<div class="site-branding--footer">
				<?php
				the_custom_logo(); ?>
				<h1 class="site-title--footer"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			</div><!-- .site-branding -->
			<nav class="footer-navigation clearfix">
				<?php
					wp_nav_menu( array(
						'theme_location' => 'footer-menu',
						'menu_id'        => 'footer-menu',
					) );
				?>
			</nav><!-- #site-navigation -->
			<div class="site-info">
				Copyright &copy;<?php echo date('Y'); ?> <a href="https://athemes.com">athemes.com</a>
			</div><!-- .site-info -->
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
