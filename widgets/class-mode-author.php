<?php
/**
 * Author widget
 *
 * @package Mode
 */

 class Mode_Author extends WP_Widget {

	function __construct() {
		$widget_ops = array( 'description' => __('Display your Author image, name and bio', 'mode') );
		parent::__construct( 'mode-author-widget', __('Mode: Author Profile', 'mode'), $widget_ops );
	}

	function widget($args, $instance) {
		

		$instance['title'] = apply_filters( 'widget_title', empty( $instance['title'] ) ? '' : $instance['title'], $instance, $this->id_base );

		echo $args['before_widget'];
		?>
		<?php
		if ( !empty($instance['title']) )
			echo $args['before_title'] . $instance['title'] . $args['after_title'];
		?>
		<?php
		
			$author = get_the_author();
			if ( $author ) {
			?>
			<div class="author_wrap">
				<div class="author_avatar">
					<?php echo get_avatar( get_the_author_meta( 'ID' ), 200 ); ?>
				</div>
				<h4 class="author_name"><?php the_author(); ?></h4>
				<p class="author_bio"><?php echo nl2br(get_the_author_meta('description')); ?></p>
			</div>
			<?php
			}
		echo $args['after_widget'];
	}

	function update( $new_instance, $old_instance ) {
		$instance['title'] = sanitize_text_field($new_instance['title']);
		return $instance;
	}

	function form( $instance ) {
		$title 		= isset( $instance['title'] ) ? $instance['title'] : '';

		$menus = wp_get_nav_menus( array( 'orderby' => 'name' ) );

		?>
		<p>
			<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:', 'mode') ?></label>
			<input type="text" class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $title; ?>" />
		</p>
		<p><em><?php _e('This widget will show the page/post author image, name and bio.', 'mode'); ?></em></p>
		<?php
	}
}