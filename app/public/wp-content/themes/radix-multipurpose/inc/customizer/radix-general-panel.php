<?php

/**
 * Radix  Lite General Settings panel at Theme Customizer
 *
 * @package Radix Multipurpose
 * @since 1.0.0
 */
add_action( 'customize_register', 'radix_multipurpose_general_settings_register' );

function radix_multipurpose_general_settings_register( $wp_customize ) {
    
    $wp_customize->get_section( 'title_tagline' )->panel = 'radix_multipurpose_general_settings_panel';
    $wp_customize->get_section( 'title_tagline' )->priority = '5';
    $wp_customize->get_section( 'colors' )->panel    = 'radix_multipurpose_general_settings_panel';
    $wp_customize->get_section( 'colors' )->priority = '10';
    $wp_customize->get_section( 'background_image' )->panel = 'radix_multipurpose_general_settings_panel';
    $wp_customize->get_section( 'background_image' )->priority = '15';

    /**
     * Add General Settings Panel
     *
     * @since 1.0.0
     */
    $wp_customize->add_panel(
        'radix_multipurpose_general_settings_panel',
        array(
            'priority'       => 5,
            'capability'     => 'edit_theme_options',
            'theme_supports' => '',
            'title'          => __( 'General Settings', 'radix-multipurpose' ),
        )
    );
}