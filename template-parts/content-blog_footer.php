<?php
/**
 * Template part for displaying blog entry-footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Mode
 */

?>

<footer class="entry-footer clearfix">
	<?php
	// get tags by post ID
	$tags = get_the_tags($post->ID);  ?>
	<?php
	
	if ($tags) { ?>
		<ul class="single-post_tags">

		<?php foreach($tags as $tag) :  ?>

			<li>
				<a href="<?php bloginfo('url');?>/tag/<?php print_r($tag->slug);?>">
					<?php print_r($tag->name); ?>
				</a>   
			</li>

		<?php endforeach; ?>
		</ul>
	<?php
	}

	// TODO: Add single post share buttons. Plugin?
	?>
	<!-- <ul class="single-post_share">
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
	</ul> -->
</footer>
