<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Mode
 */

$hide_thumb   = get_theme_mod( 'mode_single_hide_thumb', 0 );
$hide_cats    = get_theme_mod( 'mode_single_hide_cats', 0 );
$hide_meta	  = get_theme_mod( 'mode_single_hide_meta', 0 );
$headerLayout = get_theme_mod( 'mode_single_header_layout', 'feat-img--top' );
$titleAlignment = get_theme_mod( 'mode_single_title_alignment', 'post-title--align-center' );


if ( $hide_thumb ) :
    $headerLayout = 'post-no-feat-img';
endif;

$postClasses = array(
    $headerLayout,
    $titleAlignment,
);
?>

<div class="single-post-layout">
    <article id="post-<?php the_ID(); ?>" <?php post_class($postClasses); ?>>

        <?php
        if ( ($headerLayout == 'feat-img--top') && !$hide_thumb ) :
            mode_post_thumbnail();
        endif; 
        ?>

        <header class="entry-header">

            <?php if ( !$hide_cats ) : ?>
            <div class="cat-links mo-category">
                <?php mode_show_cats(); ?>
            </div>
            <?php endif; ?>

            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

            <?php if ( !$hide_meta ) : ?>
            <div class="entry-meta">
                <?php mode_posted_on(); ?>
            </div>
            <?php endif; ?>

        </header>

        <?php
        if ( ($headerLayout == 'post-title--top') && !$hide_thumb ) :
            mode_post_thumbnail();
        endif; 
        ?>

        <div class="entry-content">
            <?php
                the_content( sprintf(
                    wp_kses(
                        /* translators: %s: Name of current post. Only visible to screen readers */
                        __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'mode' ),
                        array(
                            'span' => array(
                                'class' => array(),
                            ),
                        )
                    ),
                    get_the_title()
                ) );

                wp_link_pages( array(
                    'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'mode' ),
                    'after'  => '</div>',
                ) );
            ?>
        </div><!-- .entry-content -->
        
        <?php get_template_part( 'template-parts/content', 'blog_footer' ); ?>
    </article>
</div>