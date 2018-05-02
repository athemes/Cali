<?php
/**
 * Mode Theme Customizer
 *
 * @package Mode
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function mode_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	//$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
    $wp_customize->get_section( 'colors' )->panel 				= 'mode_colors';
    $wp_customize->get_section( 'colors' )->priority 			= '7';
    $wp_customize->get_section( 'colors' )->title = 			__( 'General' , 'mode');
    $wp_customize->get_section( 'header_image' )->priority 		= '6';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'mode_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'mode_customize_partial_blogdescription',
		) );
	}
}
add_action( 'customize_register', 'mode_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function mode_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function mode_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Kirki
 */
require get_template_directory() . '/inc/kirki/include-kirki.php';
require get_template_directory() . '/inc/kirki/class-mode-kirki.php';

/* Options start */
Mode_Kirki::add_config( 'mode', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );

/* Colors */

Mode_Kirki::add_panel( 'mode_colors', array(
    'priority'    => 10,
    'title'       => esc_attr__( 'Colors', 'mode' ),
) );
Mode_Kirki::add_field( 'mode', array(
	'type'        => 'color',
	'settings'    => 'mode_body_color',
	'label'       => esc_attr__( 'Body text', 'mode' ),
	'section'     => 'colors',
	'default'     => '#191919',
	'priority'    => 10,
	'transport'	  => 'auto',
    'output'      => array(
        array(
            'element'  => 'body',
            'property' => 'color',
        ),
    ),	
) );
Mode_Kirki::add_field( 'mode', array(
	'type'        => 'color',
	'settings'    => 'mode_headings_color',
	'label'       => esc_attr__( 'Body headings', 'mode' ),
	'section'     => 'colors',
	'default'     => '#191919',
	'priority'    => 10,
	'transport'	  => 'auto',
    'output'      => array(
        array(
            'element'  => 'h1:not(.site-title), h2, h3, h4, h5, h6',
            'property' => 'color',
        ),
    ),	
) );
Mode_Kirki::add_field( 'mode', array(
	'type'        => 'color',
	'settings'    => 'mode_post_content_color',
	'label'       => esc_attr__( 'Body post text', 'mode' ),
	'section'     => 'colors',
	'default'     => '#404040',
	'priority'    => 10,
	'transport'	  => 'auto',
    'output'      => array(
        array(
            'element'  => '.entry-content',
            'property' => 'color',
        ),
    ),	
) );
// Mode_Kirki::add_field( 'mode', array(
// 	'type'        => 'color',
// 	'settings'    => 'mode_links_color',
// 	'label'       => esc_attr__( 'Body links (anchor tags)', 'mode' ),
// 	'section'     => 'colors',
// 	'default'     => '#fb397d',
// 	'priority'    => 10,
// 	'transport'	  => 'auto',
//     'output'      => array(
//         array(
//             'element'  => 'a, a:visited',
//             'property' => 'color',
//         ),
//     ),	
// ) );
// Mode_Kirki::add_field( 'mode', array(
// 	'type'        => 'color',
// 	'settings'    => 'mode_links_hover_color',
// 	'label'       => esc_attr__( 'Body links hover, focus and active color', 'mode' ),
// 	'section'     => 'colors',
// 	'default'     => '#b7b7b7',
// 	'priority'    => 10,
// 	'transport'	  => 'auto',
//     'output'      => array(
//         array(
//             'element'  => 'a:hover, a:focus, a:active',
//             'property' => 'color',
//         ),
//     ),	
// ) );
Mode_Kirki::add_section( 'mode_header_colors', array(
    'title'          => esc_attr__( 'Header', 'mode' ),
    'panel'          => 'mode_colors',
    'priority'       => 10,
) );
Mode_Kirki::add_field( 'mode', array(
	'type'        => 'color',
	'settings'    => 'mode_site_title_color',
	'label'       => esc_attr__( 'Site title', 'mode' ),
	'section'     => 'mode_header_colors',
	'default'     => '#191919',
	'priority'    => 10,
	'transport'	  => 'auto',
    'output'      => array(
        array(
            'element'  => '.site-title a, .site-title--footer a, .site-title--mobile a, .site-title a:visited, .site-title--footer a:visited, .site-title--mobile a:visited',
            'property' => 'color',
        ),
    ),	
) );
Mode_Kirki::add_field( 'mode', array(
	'type'        => 'color',
	'settings'    => 'mode_site_title_hover_color',
	'label'       => esc_attr__( 'Site title hover color', 'mode' ),
	'section'     => 'mode_header_colors',
	'default'     => '#fb397d',
	'priority'    => 10,
	'transport'	  => 'auto',
    'output'      => array(
        array(
            'element'  => '.site-title a:hover, .site-title a:focus, .site-title--footer a:hover, .site-title--footer a:focus, .site-title--mobile a:hover, .site-title--mobile a:focus',
            'property' => 'color',
        ),
    ),	
) );
Mode_Kirki::add_field( 'mode', array(
	'type'        => 'color',
	'settings'    => 'mode_site_desc_color',
	'label'       => esc_attr__( 'Site description', 'mode' ),
	'section'     => 'mode_header_colors',
	'default'     => '#191919',
	'priority'    => 10,
	'transport'	  => 'auto',
    'output'      => array(
        array(
            'element'  => '.site-description',
            'property' => 'color',
        ),
    ),	
) );
Mode_Kirki::add_field( 'mode', array(
	'type'        => 'color',
	'settings'    => 'mode_menu_items_color',
	'label'       => esc_attr__( 'Menu items', 'mode' ),
	'section'     => 'mode_header_colors',
	'default'     => '#191919',
	'priority'    => 10,
	'transport'	  => 'auto',
    'output'      => array(
        array(
            'element'  => '.main-navigation ul li a, .secondary-navigation .site-search_submit, .wc-header-cart__link, .header-top .social-navigation a',
            'property' => 'color',
        ),
    ),	
) );
Mode_Kirki::add_section( 'mode_footer_colors', array(
    'title'          => esc_attr__( 'Footer', 'mode' ),
    'panel'          => 'mode_colors',
    'priority'       => 11,
) );
Mode_Kirki::add_field( 'mode', array(
	'type'        => 'color',
	'settings'    => 'mode_footer_background',
	'label'       => esc_attr__( 'Footer background', 'mode' ),
	'section'     => 'mode_footer_colors',
	'default'     => '#ffffff',
	'priority'    => 10,
	'transport'	  => 'auto',
    'output'      => array(
        array(
            'element'  => '.site-footer, .footer-navigation',
            'property' => 'background-color',
        ),
    ),	
) );

/* Blog options */
Mode_Kirki::add_panel( 'mode_blog_panel', array(
    'priority'    => 21,
    'title'       => esc_attr__( 'Blog', 'mode' ),
) );

//Blog archives
Mode_Kirki::add_section( 'mode_blog_archives', array(
    'title'          => esc_attr__( 'Index/Archives', 'mode' ),
    'panel'          => 'mode_blog_panel',
    'priority'       => 1,
) );
Mode_Kirki::add_field( 'mode', array(
	'type'        => 'checkbox',
	'settings'    => 'mode_blog_home_sidebar',
	'label'       => esc_attr__( 'Show sidebar on blog index/home?', 'mode' ),
	'section'     => 'mode_blog_archives',
	'default'     => '0',
	'priority'    => 10,
) );
Mode_Kirki::add_field( 'mode', array(
	'type'        => 'checkbox',
	'settings'    => 'mode_blog_archives_sidebar',
	'label'       => esc_attr__( 'Show sidebar on archives and search results pages?', 'mode' ),
	'section'     => 'mode_blog_archives',
	'default'     => '0',
	'priority'    => 10,
) );
Mode_Kirki::add_field( 'mode', array(
	'type'        => 'checkbox',
	'settings'    => 'mode_index_excerpt_highlighted',
	'label'       => esc_attr__( 'Show post excerpts on the highlighted post?', 'mode' ),
	'section'     => 'mode_blog_archives',
	'default'     => '0',
	'priority'    => 10,
) );
Mode_Kirki::add_field( 'mode', array(
	'type'        => 'checkbox',
	'settings'    => 'mode_index_excerpt_regular',
	'label'       => esc_attr__( 'Show post excerpts on regular posts?', 'mode' ),
	'section'     => 'mode_blog_archives',
	'default'     => '0',
	'priority'    => 10,
) );
Mode_Kirki::add_field( 'mode', array(
	'type'        => 'number',
	'settings'    => 'mode_exc_length',
	'label'       => esc_attr__( 'Excerpt length', 'mode' ),
	'section'     => 'mode_blog_archives',
	'default'     => 20,
	'priority'    => 10,
	'choices'     => array(
		'min'  => 5,
		'max'  => 60,
		'step' => 1,
	),
) );
Mode_Kirki::add_field( 'mode', array(
	'type'        => 'text',
	'settings'    => 'mode_custom_read_more_highlighted',
	'label'       => esc_attr__( 'Custom read more text bellow the highlighted post', 'mode' ),
	'section'     => 'mode_blog_archives',
	'default'     => '',
	'priority'    => 10,
) );
Mode_Kirki::add_field( 'mode', array(
	'type'        => 'text',
	'settings'    => 'mode_custom_read_more_regular',
	'label'       => esc_attr__( 'Custom read more text bellow the regular post', 'mode' ),
	'section'     => 'mode_blog_archives',
	'default'     => '',
	'priority'    => 10,
) );
Mode_Kirki::add_field( 'mode', array(
	'type'        => 'checkbox',
	'settings'    => 'mode_index_hide_cats',
	'label'       => esc_attr__( 'Hide post categories?', 'mode' ),
	'section'     => 'mode_blog_archives',
	'default'     => '0',
	'priority'    => 10,
) );
Mode_Kirki::add_field( 'mode', array(
	'type'        => 'checkbox',
	'settings'    => 'mode_index_hide_meta',
	'label'       => esc_attr__( 'Hide post date and author?', 'mode' ),
	'section'     => 'mode_blog_archives',
	'default'     => '0',
	'priority'    => 10,
) );

//Blog single posts
Mode_Kirki::add_section( 'mode_blog_singles', array(
    'title'          => esc_attr__( 'Single posts', 'mode' ),
    'panel'          => 'mode_blog_panel',
    'priority'       => 2,
) );
Mode_Kirki::add_field( 'mode', array(
	'type'        => 'checkbox',
	'settings'    => 'mode_blog_single_sidebar',
	'label'       => esc_attr__( 'Show sidebar on single blog post?', 'mode' ),
	'section'     => 'mode_blog_singles',
	'default'     => '0',
	'priority'    => 10,
) );
Mode_Kirki::add_field( 'mode', array(
	'type'        => 'checkbox',
	'settings'    => 'mode_single_hide_thumb',
	'label'       => esc_attr__( 'Hide post thumbnail?', 'mode' ),
	'section'     => 'mode_blog_singles',
	'default'     => '0',
	'priority'    => 10,
) );
Mode_Kirki::add_field( 'mode', array(
	'type'        => 'checkbox',
	'settings'    => 'mode_single_hide_cats',
	'label'       => esc_attr__( 'Hide post categories?', 'mode' ),
	'section'     => 'mode_blog_singles',
	'default'     => '0',
	'priority'    => 10,
) );
Mode_Kirki::add_field( 'mode', array(
	'type'        => 'checkbox',
	'settings'    => 'mode_single_hide_meta',
	'label'       => esc_attr__( 'Hide post date and author?', 'mode' ),
	'section'     => 'mode_blog_singles',
	'default'     => '0',
	'priority'    => 10,
) );
Mode_Kirki::add_field( 'mode', array(
	'type'        => 'select',
	'settings'    => 'mode_single_header_layout',
	'label'       => esc_attr__( 'Blog post header layout?', 'mode' ),
	'section'     => 'mode_blog_singles',
	'default'     => 'feat-img--top',
	'priority'    => 10,
	'multiple'    => 1,
	'choices'     => array(
		'feat-img--top'	=> esc_attr__( 'Featured image on top', 'mode' ),
		'post-title--top'	=> esc_attr__( 'Title on top', 'mode' ),
	)
) );
Mode_Kirki::add_field( 'mode', array(
	'type'        => 'select',
	'settings'    => 'mode_single_title_alignment',
	'label'       => esc_attr__( 'Blog post title alignment?', 'mode' ),
	'section'     => 'mode_blog_singles',
	'default'     => 'post-title--align-center',
	'priority'    => 10,
	'multiple'    => 1,
	'choices'     => array(
		'post-title--align-left'	=> esc_attr__( 'Align left', 'mode' ),
		'post-title--align-center'	=> esc_attr__( 'Align center', 'mode' ),
		'post-title--align-right'	=> esc_attr__( 'Align right', 'mode' ),
	)
) );

/* Post slider options */
Mode_Kirki::add_section( 'mode_post_slider', array(
    'title'          => esc_attr__( 'Post slider', 'mode' ),
    'panel'          => '',
    'priority'       => 21,
) );
Mode_Kirki::add_field( 'mode', array(
    'type'        => 'select',
    'settings'    => 'mode_post_slider_category',
    'label'       => esc_attr__( 'Select post slider category', 'mode' ),
    'description' => esc_attr__( 'Category with more than 4 posts recommended', 'mode' ),
    'section'     => 'mode_post_slider',
    'default'     => 'option-1',
    'priority'    => 10,
    'choices'     => Kirki_Helper::get_terms( 'category' ),
) );
Mode_Kirki::add_field( 'mode', array(
	'type'        => 'checkbox',
	'settings'    => 'mode_post_slider_hide_cat',
	'label'       => esc_attr__( 'Hide post slider category?', 'mode' ),
	'section'     => 'mode_post_slider',
	'default'     => '0',
	'priority'    => 10,
) );

/* Woocommerce options */
Mode_Kirki::add_panel( 'mode_woocommerce_panel', array(
    'priority'    => 21,
    'title'       => esc_attr__( 'Mode: WooCommerce', 'mode' ),
) );

// Woocommerce options: General
Mode_Kirki::add_section( 'mode_woocommerce_general', array(
    'title'          => esc_attr__( 'General', 'mode' ),
    'panel'          => 'mode_woocommerce_panel',
    'priority'       => 1,
) );
Mode_Kirki::add_field( 'mode', array(
	'type'        => 'checkbox',
	'settings'    => 'mode_show_wc_cart',
	'label'       => esc_attr__( 'Show Cart icon and dropdown in menu?', 'mode' ),
	'section'     => 'mode_woocommerce_general',
	'default'     => '1',
	'priority'    => 10,
) );
Mode_Kirki::add_field( 'mode', array(
	'type'        => 'checkbox',
	'settings'    => 'mode_hide_wc_bc',
	'label'       => esc_attr__( 'Hide breadcrumbs on shop, archive and single product pages?', 'mode' ),
	'section'     => 'mode_woocommerce_general',
	'default'     => '0',
	'priority'    => 10,
) );

// Woocommerce options: Single product
Mode_Kirki::add_section( 'mode_single_product', array(
    'title'          => esc_attr__( 'Single products', 'mode' ),
    'panel'          => 'mode_woocommerce_panel',
    'priority'       => 1,
) );
Mode_Kirki::add_field( 'mode', array(
	'type'        => 'checkbox',
	'settings'    => 'mode_hide_product_rating_single',
	'label'       => esc_attr__( 'Hide product star rating on single product?', 'mode' ),
	'section'     => 'mode_single_product',
	'default'     => '0',
	'priority'    => 10,
) );
Mode_Kirki::add_field( 'mode', array(
	'type'        => 'checkbox',
	'settings'    => 'mode_hide_product_summary_single',
	'label'       => esc_attr__( 'Hide product SKU, Categories and Tags on single product?', 'mode' ),
	'section'     => 'mode_single_product',
	'default'     => '0',
	'priority'    => 10,
) );

// Woocommerce options: Product archives
Mode_Kirki::add_section( 'mode_product_archives', array(
    'title'          => esc_attr__( 'Product archives', 'mode' ),
    'panel'          => 'mode_woocommerce_panel',
    'priority'       => 2,
) );
Mode_Kirki::add_field( 'mode', array(
	'type'        => 'checkbox',
	'settings'    => 'mode_hide_product_archive_sorting',
	'label'       => esc_attr__( 'Hide sorting on shop and archive pages?', 'mode' ),
	'section'     => 'mode_product_archives',
	'default'     => '0',
	'priority'    => 10,
) );
Mode_Kirki::add_field( 'mode', array(
	'type'        => 'checkbox',
	'settings'    => 'mode_hide_product_archive_results',
	'label'       => esc_attr__( 'Hide number of results on shop and archive pages?', 'mode' ),
	'section'     => 'mode_product_archives',
	'default'     => '0',
	'priority'    => 10,
) );
Mode_Kirki::add_field( 'mode', array(
	'type'        => 'checkbox',
	'settings'    => 'mode_hide_product_archive_price',
	'label'       => esc_attr__( 'Hide product price on shop and archive pages?', 'mode' ),
	'section'     => 'mode_product_archives',
	'default'     => '0',
	'priority'    => 10,
) );
Mode_Kirki::add_field( 'mode', array(
	'type'        => 'checkbox',
	'settings'    => 'mode_hide_product_archive_ratings',
	'label'       => esc_attr__( 'Hide product ratings on shop and archive pages?', 'mode' ),
	'section'     => 'mode_product_archives',
	'default'     => '0',
	'priority'    => 10,
) );
Mode_Kirki::add_field( 'mode', array(
	'type'        => 'checkbox',
	'settings'    => 'mode_hide_product_archive_atc',
	'label'       => esc_attr__( 'Hide "add to cart" button on shop and archive pages?', 'mode' ),
	'section'     => 'mode_product_archives',
	'default'     => '0',
	'priority'    => 10,
) );

/* Page options */
Mode_Kirki::add_section( 'mode_page', array(
    'title'          => esc_attr__( 'Pages', 'mode' ),
    'panel'          => '',
    'priority'       => 31,
) );
Mode_Kirki::add_field( 'mode', array(
	'type'        => 'checkbox',
	'settings'    => 'mode_page_hide_thumb',
	'label'       => esc_attr__( 'Hide page thumbnail?', 'mode' ),
	'section'     => 'mode_page',
	'default'     => '0',
	'priority'    => 10,
) );
Mode_Kirki::add_field( 'mode', array(
	'type'        => 'checkbox',
	'settings'    => 'mode_hide_yoast_bc',
	'label'       => esc_attr__( 'Hide Yoast breadcrumbs on pages (except WooCommerce)?', 'mode' ),
	'section'     => 'mode_page',
	'default'     => '0',
	'priority'    => 10,
) );
Mode_Kirki::add_field( 'mode', array(
	'type'        => 'select',
	'settings'    => 'mode_page_header_layout',
	'label'       => esc_attr__( 'Page header layout?', 'mode' ),
	'section'     => 'mode_page',
	'default'     => 'page-title--top',
	'priority'    => 10,
	'multiple'    => 1,
	'choices'     => array(
		'page-title--top'	=> esc_attr__( 'Title on top', 'mode' ),
		'feat-img--top'	=> esc_attr__( 'Featured image on top', 'mode' ),
	)
) );
Mode_Kirki::add_field( 'mode', array(
	'type'        => 'select',
	'settings'    => 'mode_page_title_alignment',
	'label'       => esc_attr__( 'Page title alignment?', 'mode' ),
	'section'     => 'mode_page',
	'default'     => 'page-title--align-center',
	'priority'    => 10,
	'multiple'    => 1,
	'choices'     => array(
		'page-title--align-left'	=> esc_attr__( 'Align left', 'mode' ),
		'page-title--align-center'	=> esc_attr__( 'Align center', 'mode' ),
		'page-title--align-right'	=> esc_attr__( 'Align right', 'mode' ),
	)
) );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function mode_customize_preview_js() {
	wp_enqueue_script( 'mode-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'mode_customize_preview_js' );
