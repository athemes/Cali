<?php
/**
 * Template Name: Contact Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Mode
 */

// Static file - used for reference only!
// TODO: remove after theme development

get_header(); ?>
	<div id="primary" class="content-area page-with-sidebar col-md-8 page-with-sidebar">
		<main id="main" class="site-main">
			<section>
				<article class="page page-title--top page-title--align-left">
					<header class="entry-header">
						<div class="cat-links mo-category"><a href="#">CONNECT WITH US</a></div>
						<h1 class="entry-title">Contact Us</h1>
					</header>
					<figure class="entry-thumb">
						<img src="/wp-content/themes/mode/dev-img/article-featured-1.png" alt="">
					</figure>
					<div class="entry-content">
						<p>This contact form is generated with a free third party plugin called Contact Form 7. We believe that a blog theme, should feel fluid, light, and intuitive. That’s what we are aiming to make with applique, using clean code and detailed designs in each our custom features maintaining balance between design and technology. We present to you Applique our most elegant theme yet.</p>
						<form class="mo-contact-form" action="">
							<h3>Get in Touch!</h3>
							<input type="text" name="Name" placeholder="Name">
							<input type="email" name="Email" placeholder="Email">
							<input type="text" name="Website" placeholder="Website">
							<textarea name="Message" cols="30" rows="10" placeholder="Message"></textarea>
							<button type="submit">Send messages</button>
						</form>
					</div>
					<footer class="entry-footer clearfix"></footer>
				</article>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->
	<aside id="secondary" class="widget-area col-md-4">
		<?php get_template_part( 'template-parts/content', 'sidebar-static' ); ?>
	</aside>
<?php
get_footer('static');
