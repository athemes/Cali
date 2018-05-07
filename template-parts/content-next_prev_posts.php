<?php
/**
 * Template part for displaying next and previous posts with thumbnails
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Mode
 */

?>

<div class="related-posts">
    <h3 class="section-title"><?php esc_html_e( 'Related Posts', 'mode' ); ?></h3>
    <div class="row">
    <?php
        $prevPost = get_previous_post(true);
        $nextPost = get_next_post(true);
    ?>
    
        <?php $prevPost = get_previous_post(true);
            if($prevPost) {
                $args = array(
                    'posts_per_page' => 1,
                    'include' => $prevPost->ID
                );
                $prevPost = get_posts($args);
                foreach ($prevPost as $post) {
                    setup_postdata($post);
        ?>
                <div class="col-sm-6">
                    <article class="regular-post post">
                        <div class="entry-thumb">
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium_large'); ?></a>
                        </div>
                        <header class="entry-header">
                            <div class="cat-links mo-category">
                                <?php mode_get_first_cat(); ?>
                            </div>
                            <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <div class="entry-meta">
                                <?php mode_posted_on(); ?>
                            </div>
                        </header>
                    </article>
                </div>
        <?php
                    wp_reset_postdata();
                } //end foreach
            } // end if
            
            $nextPost = get_next_post(true);
            if($nextPost) {
                $args = array(
                    'posts_per_page' => 1,
                    'include' => $nextPost->ID
                );
                $nextPost = get_posts($args);
                foreach ($nextPost as $post) {
                    setup_postdata($post);
        ?>
                <div class="col-sm-6">
                    <article class="regular-post post">
                        <div class="entry-thumb">
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                        </div>
                        <header class="entry-header">
                            <div class="cat-links mo-category">
                                <?php mode_get_first_cat(); ?>
                            </div>
                            <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <div class="entry-meta">
                                <?php mode_posted_on(); ?>
                            </div>
                        </header>
                    </article>
                </div>
        <?php
                    wp_reset_postdata();
                } //end foreach
            } // end if
        ?>
    </div>
</div>