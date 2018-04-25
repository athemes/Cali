<?php
/**
 * Template Name: Blog Single 3 Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Mode
 */

// Static file - used for reference only!
// TODO: remove after theme development

get_header(); ?>
	<div id="primary" class="content-area col-md-8 col-md-offset-2">
		<main id="main" class="site-main">
			<section>
				<div class="single-post-layout">
					<article class="single-post post post-title--top post-title--align-center">
						<header class="entry-header">
							<div class="cat-links mo-category"><a href="#">Street Style</a></div>
							<h1 class="entry-title">The ‘Good Time’ Stylist Has Some Tips for Style on <em>a Budget</em></h1>
							<div class="entry-meta">
								<span class="byline">by <a href="#" class="author ">Susanne Baur</a></span>
								<span class="posted-on">
									<a href="#"><time class="entry-date">Nov 21, 2017</time></a>
								</span>
							</div>
						</header>
						<figure class="entry-thumb">
							<img src="/wp-content/themes/mode/dev-img/article-featured-1.png" alt="">
						</figure>
						<div class="entry-content">
							<p>Get the latest fashion tips and outfit ideas from your favorite celebrities and designers. Click through runway and front row photos from fashion week shows in New York, London, Paris, and Milan. Plus: browse key accessories like bags, shoes, and sunglasses, must-have denim</p>
							<p>Liusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, qui s nostrud exercitation ullamLorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliquaLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
							<blockquote>"What you wear is how you present yourself to the world, especially today, when human contacts are so quick. Fashion is instant language." <cite>Miuccia Prada</cite></blockquote> 
							<div class="row">
								<div class="col-sm-6">
									<img src="/wp-content/themes/mode/dev-img/article-reg-4.png" alt="">
								</div>
								<div class="col-sm-6">
									<img src="/wp-content/themes/mode/dev-img/article-reg-3.png" alt="">
								</div>
							</div>
							<h2>Hailey Baldwin Steps Out in a Brand New <em>Statement Coat</em></h2>
							<p>Get the latest fashion tips and outfit ideas from your favorite celebrities and designers. Click through runway and front row photos from fashion week shows in New York, London, Paris, and Milan. Plus: browse key accessories like bags, shoes, and sunglasses, must-have denim</p>
							<p>Liusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, qui s nostrud exercitation ullamLorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliquaLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
						</div>
						<footer class="entry-footer clearfix">
							<ul class="single-post_tags">
								<li>
									<a href="#">Multipurpose</a>
								</li>
								<li>
									<a href="#">Fashion</a>
								</li>
								<li>
									<a href="#">Blogs</a>
								</li>
							</ul>
							<ul class="single-post_share">
								<li>Share</li>
								<li>
									<a href="#">
										<i class="fa fa-facebook"></i>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fa fa-twitter"></i>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fa fa-google-plus"></i>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fa fa-instagram"></i>
									</a>
								</li>
							</ul>
						</footer>
					</article>
				</div>
			</section>
			<section>
				<?php get_template_part( 'template-parts/content', 'related_posts-static' ); ?>
			</section>
			<section>
				<?php get_template_part( 'template-parts/content', 'comments-static' ); ?>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer('static');
