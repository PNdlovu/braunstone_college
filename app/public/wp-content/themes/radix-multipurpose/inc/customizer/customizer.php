<?php
/**
 * Radix Lite Theme Customizer
 *
 * @package Radix Multipurpose
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function radix_multipurpose_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'radix_multipurpose_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'radix_multipurpose_customize_partial_blogdescription',
		) );
	}
}
add_action( 'customize_register', 'radix_multipurpose_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function radix_multipurpose_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function radix_multipurpose_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function radix_multipurpose_customize_preview_js() {
	wp_enqueue_script( 'radix-multipurpose-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'radix_multipurpose_customize_preview_js' );

/*----------------------------------------------------------------------------------------------------------------------------------------*/
/**
 * Enqueue required scripts/styles for customizer panel
 *
 * @since 1.0.0
 */
function radix_multipurpose_customize_backend_scripts() {

	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), '4.7.0' );

	wp_enqueue_style( 'radix_multipurpose_admin_customizer_style', get_template_directory_uri() . '/assets/customizer/radix-customizer-style.css', array(), '1.0.0' );

	wp_enqueue_script( 'radix_multipurpose_admin_customizer', get_template_directory_uri() . '/assets/customizer/radix-customizer-controls.js', array( 'jquery', 'customize-controls' ),'1.0.0', true );

	wp_enqueue_script( 'radix-multipurpose-customize-controls', get_template_directory_uri() . '/inc/upgrade-to-pro/customize-controls.js', array( 'customize-controls' ) );

	wp_enqueue_style( 'radix-multipurpose-customize-controls', get_template_directory_uri() . '/inc/upgrade-to-pro/customize-controls.css' );
}
add_action( 'customize_controls_enqueue_scripts', 'radix_multipurpose_customize_backend_scripts', 10 );



/*----------------------------------------------------------------------------------------------------------------------------------------*/
/**
 * Load customizer required panels.
 */
//Customizer Home Page Options
require_once trailingslashit( get_template_directory() ) . '/inc/upgrade-to-pro/control.php';
require get_template_directory() . '/inc/customizer/radix-general-panel.php';
require get_template_directory() . '/inc/customizer/radix-header-panel.php';
require get_template_directory() . '/inc/customizer/radix-social-media-section.php';
require get_template_directory() . '/inc/customizer/radix-frontpage-panel.php';
require get_template_directory() . '/inc/customizer/radix-design-panel.php';

require get_template_directory() . '/inc/customizer/radix-customizer-sanitize.php';
require get_template_directory() . '/inc/customizer/radix-customizer-classes.php';



//Upgrade to Pro
// Register custom section types.
add_action( 'customize_register', 'radix_multipurpose_upgrade_link_register' );
function radix_multipurpose_upgrade_link_register( $wp_customize ) {
	$wp_customize->register_section_type( 'radix_multipurpose_Customize_Section_Upsell' );

	// Register sections.
	$wp_customize->add_section(
		new radix_multipurpose_Customize_Section_Upsell(
			$wp_customize,
			'theme_upsell',
			array(
				'title'    => esc_html__( 'Go Pro', 'radix-multipurpose' ),
				'pro_text' => esc_html__( 'Buy Radix Multipurpose Plus', 'radix-multipurpose' ),
				'pro_url'  => 'https://codeglim.com/downloads/radix-creative-business-wordpress-theme/',
				'priority' => 1,
			)
		)
	);
}
