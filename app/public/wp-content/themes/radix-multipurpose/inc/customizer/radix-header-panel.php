<?php
/**
 * Radix Lite Header Settings panel at Theme Customizer
 *
 * @package Radix Multipurpose
 * @since 1.0.0
 */

add_action( 'customize_register', 'radix_multipurpose_header_settings_register' );

function radix_multipurpose_header_settings_register( $wp_customize ) {

    $wp_customize->get_section( 'header_image' )->priority = '20';
    $wp_customize->get_section( 'header_image' )->title    = __( 'Header Image', 'radix-multipurpose' );
    $wp_customize->get_section( 'header_image' )->panel    = 'radix_lite_header_settings_panel';

	/**
     * Add Header Settings Panel
     *
     * @since 1.0.0
     */
    $wp_customize->add_panel(
	    'radix_lite_header_settings_panel',
	    array(
	        'priority'       => 10,
	        'capability'     => 'edit_theme_options',
	        'theme_supports' => '',
	        'title'          => __( 'Header Settings', 'radix-multipurpose' ),
	    )
    );

/*----------------------------------------------------------------------------------------------------------------------------------------*/
	/**
     * Top Header section
     *
     * @since 1.0.0
     */
    $wp_customize->add_section(
        'radix_lite_top_header_section',
        array(
        	'priority'       => 5,
        	'panel'          => 'radix_lite_header_settings_panel',
        	'capability'     => 'edit_theme_options',
        	'theme_supports' => '',
            'title'          => __( 'Top Header Section', 'radix-multipurpose' ),
            'description'    => __( 'Managed the content display at top header section.', 'radix-multipurpose' ),
        )
    );

    /**
     * Switch option for Top Header
     *
     * @since 1.0.0
     */
    $wp_customize->add_setting(
        'radix_multipurpose_top_header_option',
        array(
        	'capability'     	=> 'edit_theme_options',
            'default' 			=> 'show',
            'sanitize_callback' => 'radix_multipurpose_sanitize_switch_option',
        )
    );
    $wp_customize->add_control( new Radix_Multipurpose_Customize_Switch_Control(
        $wp_customize,
            'radix_multipurpose_top_header_option',
            array(
                'label'     	=> __( 'Top Header Option', 'radix-multipurpose' ),
                'description'   => __( 'Show/Hide option for top header section.', 'radix-multipurpose' ),
                'section'   	=> 'radix_lite_top_header_section',
                'settings'		=> 'radix_multipurpose_top_header_option',
                'type'      	=> 'switch',
                'priority'  	=> 5,
                'choices'   	=> array(
                    'show'  		=> __( 'Show', 'radix-multipurpose' ),
                    'hide'  		=> __( 'Hide', 'radix-multipurpose' )
                )
            )
        )
    );

    /*----------------------------------------------------------------------------------------------------------------------------------------*/
    /**
     * Extra Option
     *
     * @since 1.0.0
     */
    $wp_customize->add_section(
        'radix_multipurpose_header_extra_option_section',
        array(
            'priority'       => 15,
            'panel'          => 'radix_lite_header_settings_panel',
            'capability'     => 'edit_theme_options',
            'theme_supports' => '',
            'title'          => __( 'Extra Options', 'radix-multipurpose' ),
            'description'    => __( 'Managed the several extra option in header section.', 'radix-multipurpose' ),
        )
    );

     /**
     * Switch option for search options
     *
     * @since 1.0.0
     */
    $wp_customize->add_setting(
        'radix_multipurpose_header_search_option',
        array(
            'capability'        => 'edit_theme_options',
            'default'           => 'show',
            'sanitize_callback' => 'radix_multipurpose_sanitize_switch_option',
        )
    );
    $wp_customize->add_control( new Radix_Multipurpose_Customize_Switch_Control(
        $wp_customize,
            'radix_multipurpose_header_search_option',
            array(
                'label'         => __( 'Header Search Option', 'radix-multipurpose' ),
                'description'   => __( 'Show/Hide option for search form at header section.', 'radix-multipurpose' ),
                'section'       => 'radix_multipurpose_header_extra_option_section',
                'settings'      => 'radix_multipurpose_header_search_option',
                'type'          => 'switch',
                'priority'      => 5,
                'choices'       => array(
                    'show'          => __( 'Show', 'radix-multipurpose' ),
                    'hide'          => __( 'Hide', 'radix-multipurpose' )
                )
            )
        )
    );
}