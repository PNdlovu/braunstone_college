<?php
/**
 * Radix Lite Additional Settings panel at Theme Customizer
 *
 * @package Radix Multipurpose
 * @since 1.0.0
 */

add_action( 'customize_register', 'radix_multipurpose_social_settings_register' );

function radix_multipurpose_social_settings_register( $wp_customize ) {

/*-----------------------------------------------------------------------------------------------------------------------*/
    /**
     * Social Icons Section
     *
     * @since 1.0.0
     */
    $wp_customize->add_section(
        'radix_lite_social_icons_section',
        array(
            'title'     => esc_html__( 'Social Icons', 'radix-multipurpose' ),
            'priority'  => 5,
        )
    );

    /**
     * Switch option for Top Header Social Media
     *
     * @since 1.0.0
     */
    $wp_customize->add_setting(
        'radix_multipurpose_top_header_social_option',
        array(
            'capability'        => 'edit_theme_options',
            'default'           => 'show',
            'sanitize_callback' => 'radix_multipurpose_sanitize_switch_option',
        )
    );
    $wp_customize->add_control( new radix_multipurpose_Customize_Switch_Control(
        $wp_customize,
            'radix_multipurpose_top_header_social_option',
            array(
                'label'         => __( 'Top Header Social Media Option', 'radix-multipurpose' ),
                'description'   => __( 'Show/Hide Socail media for top header(right).', 'radix-multipurpose' ),
                'section'       => 'radix_lite_social_icons_section',
                'settings'      => 'radix_multipurpose_top_header_social_option',
                'type'          => 'switch',
                'priority'      => 1,
                'choices'       => array(
                    'show'          => __( 'Show', 'radix-multipurpose' ),
                    'hide'          => __( 'Hide', 'radix-multipurpose' )
                )
            )
        )
    );


     /**
     * Switch option for Footer Header Social Media
     *
     * @since 1.0.0
     */
    $wp_customize->add_setting(
        'radix_multipurpose_top_footer_social_option',
        array(
            'capability'        => 'edit_theme_options',
            'default'           => 'show',
            'sanitize_callback' => 'radix_multipurpose_sanitize_switch_option',
        )
    );
    $wp_customize->add_control( new radix_multipurpose_Customize_Switch_Control(
        $wp_customize,
            'radix_multipurpose_top_footer_social_option',
            array(
                'label'         => __( 'Footer Social media Option', 'radix-multipurpose' ),
                'description'   => __( 'Show/Hide Socail media for Footer Section.', 'radix-multipurpose' ),
                'section'       => 'radix_lite_social_icons_section',
                'settings'      => 'radix_multipurpose_top_footer_social_option',
                'type'          => 'switch',
                'priority'      => 1,
                'choices'       => array(
                    'show'          => __( 'Show', 'radix-multipurpose' ),
                    'hide'          => __( 'Hide', 'radix-multipurpose' )
                )
            )
        )
    );
   
}