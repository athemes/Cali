<?php
/**
 * Footer functions
 *
 * @package Mode
 */


/**
 * Footer credits
 */
function mode_footer_credits() {

?>
    <div class="site-info">
        <?php
            /* translators: %s: CMS name, i.e. WordPress. */
            printf( esc_html__( 'Powered by %s', 'mode' ), '<a href="https://wordpress.org/">WordPress</a>' );
        ?>
        <span class="sep"> | </span>
        <?php
            /* translators: 1: Theme name, 2: Theme author. */
            printf( esc_html__( 'Theme: %2$s by %1$s.', 'mode' ), '<a href="https://athemes.com">aThemes</a>', '<a href="https://athemes.com/theme/mode/">Mode</a>' );
        ?>
    </div><!-- .site-info -->
<?php	
}

/**
 * Footer output
 */
function mode_footer_output() {
	
	mode_footer_credits();
    
}
add_action( 'mode_footer', 'mode_footer_output' );
