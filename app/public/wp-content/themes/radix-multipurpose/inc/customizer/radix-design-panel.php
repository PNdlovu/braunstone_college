<?php
/**
 * Radix Lite Design Settings panel.
 *
 * This file contains all innerpages design related like archive, page, post layouts and their sidebars
 *
 * @package Radix Mulitpurpose
 * @since 1.0.0
 */

add_action( 'customize_register', 'radix_multipurpose_design_settings_register' );

function radix_multipurpose_design_settings_register( $wp_customize ) {

	// Register the radio image control class as a JS control type.
    $wp_customize->register_control_type( 'radix_multipurpose_Customize_Control_Radio_Image' );

	/**
     * Add Design Settings Panel
     *
     * @since 1.0.0
     */
    $wp_customize->add_panel(
	    'radix_multipurpose_design_settings_panel',
	    array(
	        'priority'       => 20,
	        'capability'     => 'edit_theme_options',
	        'theme_supports' => '',
	        'title'          => __( 'Design Settings', 'radix-multipurpose' ),
	    )
    );

/*----------------------------------------------------------------------------------------------------------------------------------------*/
    /**
     * Archive Settings
     *
     * @since 1.0.0
     */
    $wp_customize->add_section(
        'radix_multipurpose_archive_settings_section',
        array(
            'priority'  	 => 5,
            'panel'     	 => 'radix_multipurpose_design_settings_panel',
            'capability'     => 'edit_theme_options',
        	'theme_supports' => '',
            'title'     	 => __( 'Archive Settings', 'radix-multipurpose' )
        )
    );      

    /**
     * Image Radio field for archive sidebar
     *
     * @since 1.0.0
     */
    $wp_customize->add_setting(
        'radix_multipurpose_archive_sidebar',
        array(
        	'capability'     	=> 'edit_theme_options',
            'default'           => 'right_sidebar',
            'sanitize_callback' => 'radix_multipurpose_sanitize_select',
        )
    );
    $wp_customize->add_control( new Radix_Multipurpose_Customize_Control_Radio_Image(
        $wp_customize,
        'radix_multipurpose_archive_sidebar',
            array(
                'label'			=> __( 'Archive Sidebars', 'radix-multipurpose' ),
                'description' 	=> __( 'Choose sidebar from available layouts', 'radix-multipurpose' ),
                'section'  		=> 'radix_multipurpose_archive_settings_section',
                'settings'		=> 'radix_multipurpose_archive_sidebar',
                'priority' 		=> 5,
                'choices'  		=> array(
                    'left_sidebar' 		=> array(
                        'label' 		=> __( 'Left Sidebar', 'radix-multipurpose' ),
                        'url'   		=> '%s/assets/images/left-sidebar.png'
                    ),
                    'right_sidebar' 	=> array(
                        'label' 		=> __( 'Right Sidebar', 'radix-multipurpose' ),
                        'url'   		=> '%s/assets/images/right-sidebar.png'
                    ),
                    'no_sidebar'		=> array(
                        'label' 		=> __( 'No Sidebar', 'radix-multipurpose' ),
                        'url'   		=> '%s/assets/images/no-sidebar.png'
                    )
    			)
            )
        )
    );



/*----------------------------------------------------------------------------------------------------------------------------------------*/
    /**
     * Page Settings
     *
     * @since 1.0.0
     */
    $wp_customize->add_section(
        'radix_multipurpose_page_settings_section',
        array(
            'priority'  	 => 10,
            'panel'     	 => 'radix_multipurpose_design_settings_panel',
            'capability'     => 'edit_theme_options',
        	'theme_supports' => '',
            'title'     	 => __( 'Page Settings', 'radix-multipurpose' )
        )
    );      

    /**
     * Image Radio field for page sidebar
     *
     * @since 1.0.0
     */
    $wp_customize->add_setting(
        'radix_multipurpose_global_page_sidebar',
        array(
        	'capability'     	=> 'edit_theme_options',
            'default'           => 'right_sidebar',
            'sanitize_callback' => 'radix_multipurpose_sanitize_select',
        )
    );
    $wp_customize->add_control( new Radix_Multipurpose_Customize_Control_Radio_Image(
        $wp_customize,
        'radix_multipurpose_global_page_sidebar',
            array(
                'label'			=> __( 'Page Sidebars', 'radix-multipurpose' ),
                'description' 	=> __( 'Choose sidebar from available layouts', 'radix-multipurpose' ),
                'section'  		=> 'radix_multipurpose_page_settings_section',
                'settings'		=> 'radix_multipurpose_global_page_sidebar',
                'priority' 		=> 5,
                'choices'  		=> array(
                    'left_sidebar' 		=> array(
                        'label' 		=> __( 'Left Sidebar', 'radix-multipurpose' ),
                        'url'   		=> '%s/assets/images/left-sidebar-p.png'
                    ),
                    'right_sidebar' 	=> array(
                        'label' 		=> __( 'Right Sidebar', 'radix-multipurpose' ),
                        'url'   		=> '%s/assets/images/right-sidebar-p.png'
                    ),
                    'no_sidebar'		=> array(
                        'label' 		=> __( 'No Sidebar', 'radix-multipurpose' ),
                        'url'   		=> '%s/assets/images/no-sidebar-p.png'
                    )
    			)
            )
        )
    );

/*----------------------------------------------------------------------------------------------------------------------------------------*/
    /**
     * Post Settings
     *
     * @since 1.0.0
     */
    $wp_customize->add_section(
        'radix_multipurpose_post_settings_section',
        array(
            'priority'  	 => 10,
            'panel'     	 => 'radix_multipurpose_design_settings_panel',
            'capability'     => 'edit_theme_options',
        	'theme_supports' => '',
            'title'     	 => __( 'Post Settings', 'radix-multipurpose' )
        )
    );      

    /**
     * Image Radio field for post sidebar
     *
     * @since 1.0.0
     */
    $wp_customize->add_setting(
        'radix_multipurpose_global_post_sidebar',
        array(
        	'capability'     	=> 'edit_theme_options',
            'default'           => 'right_sidebar',
            'sanitize_callback' => 'radix_multipurpose_sanitize_select',
        )
    );
    $wp_customize->add_control( new Radix_Multipurpose_Customize_Control_Radio_Image(
        $wp_customize,
        'radix_multipurpose_global_post_sidebar',
            array(
                'label'			=> __( 'Post Sidebars', 'radix-multipurpose' ),
                'description' 	=> __( 'Choose sidebar from available layouts', 'radix-multipurpose' ),
                'section'  		=> 'radix_multipurpose_post_settings_section',
                'settings'		=> 'radix_multipurpose_global_post_sidebar',
                'priority' 		=> 5,
                'choices'  		=> array(
                    'left_sidebar' 		=> array(
                        'label' 		=> __( 'Left Sidebar', 'radix-multipurpose' ),
                        'url'   		=> '%s/assets/images/left-sidebar-p.png'
                    ),
                    'right_sidebar' 	=> array(
                        'label' 		=> __( 'Right Sidebar', 'radix-multipurpose' ),
                        'url'   		=> '%s/assets/images/right-sidebar-p.png'
                    ),
                    'no_sidebar'		=> array(
                        'label' 		=> __( 'No Sidebar', 'radix-multipurpose' ),
                        'url'   		=> '%s/assets/images/no-sidebar-p.png'
                    ),
    			)
            )
        )
    );

}