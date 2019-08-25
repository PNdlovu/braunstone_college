<?php
/**
 * Radix Lite Frontpage Settings panel at Theme Customizer
 *
 * @package Radix Multipurpose
 * @since 1.0.0
 */
add_action( 'customize_register', 'radix_multipurpose_frontpage_settings_register' );

function radix_multipurpose_frontpage_settings_register( $wp_customize ) {

/**
 * Add Frontpage Settings Panel
 *
 * @since 1.0.0
 */
$wp_customize->add_panel(
    'radix_lite_frontpage_settings_panel',
    array(
        'priority'       => 15,
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => __( 'Frontpage Settings', 'radix-multipurpose' ),
    )
);

/*----------------------------------------------------------------------------------------------------------------------------------------*/
/**
 * Front page slider section
 *
 * @since 1.0.0
 */

$wp_customize->add_section(
    'radix_lite_frontpage_slider_section',
    array(
    	'priority'       => 1,
    	'panel'          => 'radix_lite_frontpage_settings_panel',
    	'capability'     => 'edit_theme_options',
    	'theme_supports' => '',
        'title'          => __( 'Slider Section', 'radix-multipurpose' ),
        'description'    => __( 'Managed the slider display at Frontpage section.', 'radix-multipurpose' ),
    )
);

/**
 * Switch option for  Slider
 *
 * @since 1.0.0
 */
$wp_customize->add_setting(
    'radix_multipurpose_frontpage_slider_option',
    array(
    	'capability'     	=> 'edit_theme_options',
        'default' 			=> 'hide',
        'sanitize_callback' => 'radix_multipurpose_sanitize_switch_option',
    )
);
$wp_customize->add_control( new Radix_Multipurpose_Customize_Switch_Control(
    $wp_customize,
    'radix_multipurpose_frontpage_slider_option',
    array(
        'label'     	=> __( 'Frontpage Slider Option', 'radix-multipurpose' ),
        'description'   => __( 'Show/Hide option for Frontpage Slider section.', 'radix-multipurpose' ),
        'section'   	=> 'radix_lite_frontpage_slider_section',
        'settings'		=> 'radix_multipurpose_frontpage_slider_option',
        'type'      	=> 'switch',
        'choices'   	=> array(
            'show'  		=> __( 'Show', 'radix-multipurpose' ),
            'hide'  		=> __( 'Hide', 'radix-multipurpose' )
        )
    )
)
);


/*----------------------------------------------------------------------------------------------------------------------------------------*/
/**
 * Front page About section
 *
 * @since 1.0.0
 */

$wp_customize->add_section(
    'radix_lite_frontpage_about_section',
    array(
        'priority'       => 2,
        'panel'          => 'radix_lite_frontpage_settings_panel',
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => __( 'About Section', 'radix-multipurpose' ),
        'description'    => __( 'Managed the About display at Frontpage section.', 'radix-multipurpose' ),
    )
);

/**
 * Switch option for  About Section
 *
 * @since 1.0.0
 */
$wp_customize->add_setting(
    'radix_multipurpose_frontpage_about_option',
    array(
        'capability'        => 'edit_theme_options',
        'default'           => 'hide',
        'sanitize_callback' => 'radix_multipurpose_sanitize_switch_option',
    )
);
$wp_customize->add_control( new Radix_Multipurpose_Customize_Switch_Control(
    $wp_customize,
    'radix_multipurpose_frontpage_about_option',
    array(
        'label'         => __( 'Frontpage About Option', 'radix-multipurpose' ),
        'description'   => __( 'Show/Hide option for Frontpage about section.', 'radix-multipurpose' ),
        'section'       => 'radix_lite_frontpage_about_section',
        'settings'      => 'radix_multipurpose_frontpage_about_option',
        'type'          => 'switch',
        'choices'       => array(
            'show'          => __( 'Show', 'radix-multipurpose' ),
            'hide'          => __( 'Hide', 'radix-multipurpose' )
        )
    )
)
);

/**
 * Page option for  About Section title and description
 *
 * @since 1.0.0
 */
$wp_customize->add_setting(
    'radix_multipurpose_frontpage_about_section_option',
    array(
        'capability'        => 'edit_theme_options',
        'default'           => '',
        'sanitize_callback' => 'radix_multipurpose_sanitize_dropdown_pages',
    )
);

$wp_customize->add_control('radix_multipurpose_frontpage_about_section_option',array(
    'label'         => __( 'Select Page for section title and description', 'radix-multipurpose' ),
    'section'       => 'radix_lite_frontpage_about_section',
    'settings'      => 'radix_multipurpose_frontpage_about_section_option',
    'type'          => 'dropdown-pages'
)
);

/**
 * Page option for  About  title and description with feature image
 *
 * @since 1.0.0
 */
$wp_customize->add_setting(
    'radix_multipurpose_frontpage_about_title_option',
    array(
        'capability'        => 'edit_theme_options',
        'default'           => '',
        'sanitize_callback' => 'radix_multipurpose_sanitize_dropdown_pages',
    )
);

$wp_customize->add_control('radix_multipurpose_frontpage_about_title_option',array(
    'label'         => __( 'Select Page for about title and description with feature image', 'radix-multipurpose' ),
    'section'       => 'radix_lite_frontpage_about_section',
    'settings'      => 'radix_multipurpose_frontpage_about_title_option',
    'type'          => 'dropdown-pages'
)
);

/**
 * Text option for  About  vedio link
 *
 * @since 1.0.0
 */
$wp_customize->add_setting(
    'radix_multipurpose_frontpage_about_vedio_option',
    array(
        'capability'        => 'edit_theme_options',
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    )
);

$wp_customize->add_control('radix_multipurpose_frontpage_about_vedio_option',array(
    'label'         => __( 'Type vedio URL for about', 'radix-multipurpose' ),
    'description'   => __( 'Use Link from youtube', 'radix-multipurpose' ),
    'section'       => 'radix_lite_frontpage_about_section',
    'settings'      => 'radix_multipurpose_frontpage_about_vedio_option',
    'type'          => 'url'
)
);

/*----------------------------------------------------------------------------------------------------------------------------------------*/
/**
 * Front page Skill section
 *
 * @since 1.0.0
 */

$wp_customize->add_section(
    'radix_lite_frontpage_skill_section',
    array(
        'priority'       => 3,
        'panel'          => 'radix_lite_frontpage_settings_panel',
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => __( 'Skill Section', 'radix-multipurpose' ),
        'description'    => __( 'Managed the Skill display at Frontpage section.', 'radix-multipurpose' ),
    )
);

/**
 * Switch option for  Skill Section
 *
 * @since 1.0.0
 */
$wp_customize->add_setting(
    'radix_multipurpose_frontpage_skill_option',
    array(
        'capability'        => 'edit_theme_options',
        'default'           => 'hide',
        'sanitize_callback' => 'radix_multipurpose_sanitize_switch_option',
    )
);
$wp_customize->add_control( new Radix_Multipurpose_Customize_Switch_Control(
    $wp_customize,
    'radix_multipurpose_frontpage_skill_option',
    array(
        'label'         => __( 'Frontpage Skill Option', 'radix-multipurpose' ),
        'description'   => __( 'Show/Hide option for Frontpage Skill section.', 'radix-multipurpose' ),
        'section'       => 'radix_lite_frontpage_skill_section',
        'settings'      => 'radix_multipurpose_frontpage_skill_option',
        'type'          => 'switch',
        'choices'       => array(
            'show'          => __( 'Show', 'radix-multipurpose' ),
            'hide'          => __( 'Hide', 'radix-multipurpose' )
        )
    )
)
);




/*----------------------------------------------------------------------------------------------------------------------------------------*/
/**
 * Front page Achievements section
 *
 * @since 1.0.0
 */

$wp_customize->add_section(
    'radix_lite_frontpage_achievements_section',
    array(
        'priority'       => 4,
        'panel'          => 'radix_lite_frontpage_settings_panel',
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => __( 'Achievements Section', 'radix-multipurpose' ),
        'description'    => __( 'Managed the Achievements display at Frontpage section.', 'radix-multipurpose' ),
    )
);

/**
 * Switch option for  Achievements Section
 *
 * @since 1.0.0
 */
$wp_customize->add_setting(
    'radix_multipurpose_frontpage_achievements_option',
    array(
        'capability'        => 'edit_theme_options',
        'default'           => 'hide',
        'sanitize_callback' => 'radix_multipurpose_sanitize_switch_option',
    )
);

$wp_customize->add_control( new Radix_Multipurpose_Customize_Switch_Control(
    $wp_customize,
    'radix_multipurpose_frontpage_achievements_option',
    array(
        'label'         => __( 'Frontpage Achievements Option', 'radix-multipurpose' ),
        'description'   => __( 'Show/Hide option for Frontpage Achievements section.', 'radix-multipurpose' ),
        'section'       => 'radix_lite_frontpage_achievements_section',
        'settings'      => 'radix_multipurpose_frontpage_achievements_option',
        'type'          => 'switch',
        'choices'       => array(
            'show'          => __( 'Show', 'radix-multipurpose' ),
            'hide'          => __( 'Hide', 'radix-multipurpose' )
        )
    )
)
);

/**
 * Text option for Achievements title
 *
 * @since 1.0.0
 */
$wp_customize->add_setting( 'radix_multipurpose_frontpage_achievements_title_option', array(
    'capability'            => 'edit_theme_options',
    'default'               => esc_attr__( 'Our Achievements', 'radix-multipurpose' ),
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'radix_multipurpose_frontpage_achievements_title_option', array(
    'label'                 =>  __( 'Achievement  Title:-', 'radix-multipurpose' ),
    'section'               => 'radix_lite_frontpage_achievements_section',
    'type'                  => 'text',
    'settings' => 'radix_multipurpose_frontpage_achievements_title_option',
) );

/**
 * Page option for Achievements sub-title and description
 *
 * @since 1.0.0
 */
$wp_customize->add_setting(
    'radix_multipurpose_frontpage_achievements_subtitle_option',
    array(
        'capability'        => 'edit_theme_options',
        'default'           => '',
        'sanitize_callback' => 'radix_multipurpose_sanitize_dropdown_pages',
    )
);

$wp_customize->add_control('radix_multipurpose_frontpage_achievements_subtitle_option',array(
    'label'         => __( 'Select Page for Achievements subtitle and description', 'radix-multipurpose' ),
    'section'       => 'radix_lite_frontpage_achievements_section',
    'settings'      => 'radix_multipurpose_frontpage_achievements_subtitle_option',
    'type'          => 'dropdown-pages'
)
);

/**
 * Text option for Achievements Button
 *
 * @since 1.0.0
 */
$wp_customize->add_setting( 'radix_multipurpose_frontpage_achievements_button_text_option', array(
    'capability'            => 'edit_theme_options',
    'default'               => esc_attr__( 'Contact Us', 'radix-multipurpose' ),
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'radix_multipurpose_frontpage_achievements_button_text_option', array(
    'label'                 =>  __( 'Button  Text', 'radix-multipurpose' ),
    'section'               => 'radix_lite_frontpage_achievements_section',
    'type'                  => 'text',
    'settings' => 'radix_multipurpose_frontpage_achievements_button_text_option',
) );

/**
 * Option for Achievements Button Url
 *
 * @since 1.0.0
 */
$wp_customize->add_setting( 'radix_multipurpose_frontpage_achievements_button_url_option', array(
    'capability'            => 'edit_theme_options',
    'default'               => esc_attr__( '#', 'radix-multipurpose' ),
    'sanitize_callback'     => 'esc_url_raw'
) );

$wp_customize->add_control( 'radix_multipurpose_frontpage_achievements_button_url_option', array(
    'label'                 =>  __( 'Button  Url', 'radix-multipurpose' ),
    'section'               => 'radix_lite_frontpage_achievements_section',
    'type'                  => 'url',
    'settings' => 'radix_multipurpose_frontpage_achievements_button_url_option',
) );



/*----------------------------------------------------------------------------------------------------------------------------------------*/
/**
 * Front page What we provide section
 *
 * @since 1.0.0
 */

$wp_customize->add_section(
    'radix_lite_frontpage_what_we_provide_section',
    array(
        'priority'       => 5,
        'panel'          => 'radix_lite_frontpage_settings_panel',
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => __( 'What We Provide Section', 'radix-multipurpose' ),
        'description'    => __( 'Managed the What we provide display at Frontpage section.', 'radix-multipurpose' ),
    )
);

/**
 * Switch option for  What We Provide Section
 *
 * @since 1.0.0
 */
$wp_customize->add_setting(
    'radix_multipurpose_frontpage_what_we_provide_option',
    array(
        'capability'        => 'edit_theme_options',
        'default'           => 'hide',
        'sanitize_callback' => 'radix_multipurpose_sanitize_switch_option',
    )
);

$wp_customize->add_control( new Radix_Multipurpose_Customize_Switch_Control(
    $wp_customize,
    'radix_multipurpose_frontpage_what_we_provide_option',
    array(
        'label'         => __( 'Frontpage What We Provide Option', 'radix-multipurpose' ),
        'description'   => __( 'Show/Hide option for Frontpage What we Provide section.', 'radix-multipurpose' ),
        'section'       => 'radix_lite_frontpage_what_we_provide_section',
        'settings'      => 'radix_multipurpose_frontpage_what_we_provide_option',
        'type'          => 'switch',
        'choices'       => array(
            'show'          => __( 'Show', 'radix-multipurpose' ),
            'hide'          => __( 'Hide', 'radix-multipurpose' )
        )
    )
)
);


/**
 *Background Text option for What we provide section
 *
 * @since 1.0.0
 */
$wp_customize->add_setting( 'radix_multipurpose_frontpage_what_we_provide_bg_text_option', array(
    'capability'            => 'edit_theme_options',
    'default'               => esc_attr__( 'Services', 'radix-multipurpose' ),
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'radix_multipurpose_frontpage_what_we_provide_bg_text_option', array(
    'label'                 =>  __( 'Background Text', 'radix-multipurpose' ),
    'section'               => 'radix_lite_frontpage_what_we_provide_section',
    'type'                  => 'text',
    'settings' => 'radix_multipurpose_frontpage_what_we_provide_bg_text_option',
) );

/**
 * Page option for What we do section title and description
 *
 * @since 1.0.0
 */
$wp_customize->add_setting(
    'radix_multipurpose_frontpage_what_we_provide_title_option',
    array(
        'capability'        => 'edit_theme_options',
        'default'           => '',
        'sanitize_callback' => 'radix_multipurpose_sanitize_dropdown_pages',
    )
);

$wp_customize->add_control('radix_multipurpose_frontpage_what_we_provide_title_option',array(
    'label'         => __( 'Select Page for What we Provide  section title and description', 'radix-multipurpose' ),
    'section'       => 'radix_lite_frontpage_what_we_provide_section',
    'settings'      => 'radix_multipurpose_frontpage_what_we_provide_title_option',
    'type'          => 'dropdown-pages'
)
);


/*----------------------------------------------------------------------------------------------------------------------------------------*/
/**
 * Front page Why Choose Us section
 *
 * @since 1.0.0
 */

$wp_customize->add_section(
    'radix_lite_frontpage_why_choose_us_section',
    array(
        'priority'       => 6,
        'panel'          => 'radix_lite_frontpage_settings_panel',
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => __( 'Why Choose us Section', 'radix-multipurpose' ),
        'description'    => __( 'Managed the Why Choose Us display at Frontpage section.', 'radix-multipurpose' ),
    )
);

/**
 * Switch option for  What We Provide Section
 *
 * @since 1.0.0
 */
$wp_customize->add_setting(
    'radix_multipurpose_frontpage_why_choose_us_option',
    array(
        'capability'        => 'edit_theme_options',
        'default'           => 'hide',
        'sanitize_callback' => 'radix_multipurpose_sanitize_switch_option',
    )
);

$wp_customize->add_control( new Radix_Multipurpose_Customize_Switch_Control(
    $wp_customize,
    'radix_multipurpose_frontpage_why_choose_us_option',
    array(
        'label'         => __( 'Frontpage Why Choose Us Option', 'radix-multipurpose' ),
        'description'   => __( 'Show/Hide option for Frontpage Why Choose Us section.', 'radix-multipurpose' ),
        'section'       => 'radix_lite_frontpage_why_choose_us_section',
        'settings'      => 'radix_multipurpose_frontpage_why_choose_us_option',
        'type'          => 'switch',
        'choices'       => array(
            'show'          => __( 'Show', 'radix-multipurpose' ),
            'hide'          => __( 'Hide', 'radix-multipurpose' )
        )
    )
)
);

/**
 * Page option for What we do section title and description
 *
 * @since 1.0.0
 */
$wp_customize->add_setting(
    'radix_multipurpose_frontpage_why_choose_us_title_option',
    array(
        'capability'        => 'edit_theme_options',
        'default'           => '',
        'sanitize_callback' => 'radix_multipurpose_sanitize_dropdown_pages',
    )
);

$wp_customize->add_control('radix_multipurpose_frontpage_why_choose_us_title_option',array(
    'label'         => __( 'Select Page for Why choose us section title and description with feature image', 'radix-multipurpose' ),
    'section'       => 'radix_lite_frontpage_why_choose_us_section',
    'settings'      => 'radix_multipurpose_frontpage_why_choose_us_title_option',
    'type'          => 'dropdown-pages'
)
);

/**
 * Url option for  Why choose us  vedio link
 *
 * @since 1.0.0
 */
$wp_customize->add_setting(
    'radix_multipurpose_frontpage_why_choose_us_vedio_option',
    array(
        'capability'        => 'edit_theme_options',
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    )
);

$wp_customize->add_control('radix_multipurpose_frontpage_why_choose_us_vedio_option',array(
    'label'         => __( 'Type vedio URL for Why Choose Us', 'radix-multipurpose' ),
    'description'   => __( 'Use Link from youtube', 'radix-multipurpose' ),
    'section'       => 'radix_lite_frontpage_why_choose_us_section',
    'settings'      => 'radix_multipurpose_frontpage_why_choose_us_vedio_option',
    'type'          => 'url'
)
);

/**
 * Text option for  Why choose us  vedio link
 *
 * @since 1.0.0
 */
$wp_customize->add_setting(
    'radix_multipurpose_frontpage_why_choose_us_vedio_text_option',
    array(
        'capability'        => 'edit_theme_options',
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    )
);

$wp_customize->add_control('radix_multipurpose_frontpage_why_choose_us_vedio_text_option',array(
    'label'         => __( 'Type vedio Text for Why Choose Us', 'radix-multipurpose' ),
    'description'   => __( 'Eg:- Watch this awesome video!', 'radix-multipurpose' ),
    'section'       => 'radix_lite_frontpage_why_choose_us_section',
    'settings'      => 'radix_multipurpose_frontpage_why_choose_us_vedio_text_option',
    'type'          => 'text'
)
);

/*----------------------------------------------------------------------------------------------------------------------------------------*/
/**
 * Front page Our portfolio section
 *
 * @since 1.0.0
 */

$wp_customize->add_section(
    'radix_lite_frontpage_portfolio_section',
    array(
        'priority'       => 7,
        'panel'          => 'radix_lite_frontpage_settings_panel',
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => __( 'Portfolio Section', 'radix-multipurpose' ),
        'description'    => __( 'Managed the Portfolio display at Frontpage section.', 'radix-multipurpose' ),
    )
);

/**
 * Switch option for Our portfolio Section
 *
 * @since 1.0.0
 */
$wp_customize->add_setting(
    'radix_multipurpose_frontpage_portfolio_option',
    array(
        'capability'        => 'edit_theme_options',
        'default'           => 'hide',
        'sanitize_callback' => 'radix_multipurpose_sanitize_switch_option',
    )
);

$wp_customize->add_control( new Radix_Multipurpose_Customize_Switch_Control(
    $wp_customize,
    'radix_multipurpose_frontpage_portfolio_option',
    array(
        'label'         => __( 'Frontpage Portfolio Option', 'radix-multipurpose' ),
        'description'   => __( 'Show/Hide option for Frontpage Portfolio section.', 'radix-multipurpose' ),
        'section'       => 'radix_lite_frontpage_portfolio_section',
        'settings'      => 'radix_multipurpose_frontpage_portfolio_option',
        'type'          => 'switch',
        'choices'       => array(
            'show'          => __( 'Show', 'radix-multipurpose' ),
            'hide'          => __( 'Hide', 'radix-multipurpose' )
        )
    )
)
);

/**
 *Background Text option for portfolio section
 *
 * @since 1.0.0
 */
$wp_customize->add_setting( 'radix_multipurpose_frontpage_portfolio_bg_text_option', array(
    'capability'            => 'edit_theme_options',
    'default'               => esc_attr__( 'Projects', 'radix-multipurpose' ),
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'radix_multipurpose_frontpage_portfolio_bg_text_option', array(
    'label'                 =>  __( 'Background Text', 'radix-multipurpose' ),
    'section'               => 'radix_lite_frontpage_portfolio_section',
    'type'                  => 'text',
    'settings' => 'radix_multipurpose_frontpage_portfolio_bg_text_option',
) );
/**
 * Page option for Our Portfolio section title and description
 *
 * @since 1.0.0
 */
$wp_customize->add_setting(
    'radix_multipurpose_frontpage_portfolio_title_option',
    array(
        'capability'        => 'edit_theme_options',
        'default'           => '',
        'sanitize_callback' => 'radix_multipurpose_sanitize_dropdown_pages',
    )
);

$wp_customize->add_control('radix_multipurpose_frontpage_portfolio_title_option',array(
    'label'         => __( 'Select Page for Portfolio  section title and description', 'radix-multipurpose' ),
    'section'       => 'radix_lite_frontpage_portfolio_section',
    'settings'      => 'radix_multipurpose_frontpage_portfolio_title_option',
    'type'          => 'dropdown-pages'
)
);

$wp_customize->add_setting('radix_multipurpose_project_category_id',array(
    'capability'            => 'edit_theme_options',
    'default' =>  '',
    'sanitize_callback' => 'radix_multipurpose_sanitize_category',
));

$wp_customize->add_control(new Radix_Multipurpose_Customize_Dropdown_Taxonomies_Control($wp_customize,'radix_multipurpose_project_category_id',
    array(
       'label' => __('Select Category for Project having subcategories','radix-multipurpose'),
       'description' => __('Category posts have featured image','radix-multipurpose'),
       'section' => 'radix_lite_frontpage_portfolio_section',
       'settings' => 'radix_multipurpose_project_category_id',
       'type'=> 'dropdown-taxonomies',
   )
));


/*----------------------------------------------------------------------------------------------------------------------------------------*/
/**
 * Front page Request Consulting section
 *
 * @since 1.0.0
 */

$wp_customize->add_section(
    'radix_lite_frontpage_consulting_section',
    array(
        'priority'       => 8,
        'panel'          => 'radix_lite_frontpage_settings_panel',
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => __( 'Consulting Section', 'radix-multipurpose' ),
        'description'    => __( 'Managed the  Cunsulting display at Frontpage section.', 'radix-multipurpose' ),
    )
);

/**
 * Switch option for  Consulting Section
 *
 * @since 1.0.0
 */
$wp_customize->add_setting(
    'radix_multipurpose_frontpage_consulting_option',
    array(
        'capability'        => 'edit_theme_options',
        'default'           => 'hide',
        'sanitize_callback' => 'radix_multipurpose_sanitize_switch_option',
    )
);

$wp_customize->add_control( new Radix_Multipurpose_Customize_Switch_Control(
    $wp_customize,
    'radix_multipurpose_frontpage_consulting_option',
    array(
        'label'         => __( 'Frontpage Consulting Option', 'radix-multipurpose' ),
        'description'   => __( 'Show/Hide option for Frontpage consulting section.', 'radix-multipurpose' ),
        'section'       => 'radix_lite_frontpage_consulting_section',
        'settings'      => 'radix_multipurpose_frontpage_consulting_option',
        'type'          => 'switch',
        'choices'       => array(
            'show'          => __( 'Show', 'radix-multipurpose' ),
            'hide'          => __( 'Hide', 'radix-multipurpose' )
        )
    )
)
);

/**
 * Page option for Request Call back section title and description
 *
 * @since 1.0.0
 */
$wp_customize->add_setting(
    'radix_multipurpose_frontpage_request_callback_title_option',
    array(
        'capability'        => 'edit_theme_options',
        'default'           => '',
        'sanitize_callback' => 'radix_multipurpose_sanitize_dropdown_pages',
    )
);

$wp_customize->add_control('radix_multipurpose_frontpage_request_callback_title_option',array(
    'label'         => __( 'Select Page for Request Call Back Section title and description', 'radix-multipurpose' ),
    'section'       => 'radix_lite_frontpage_consulting_section',
    'settings'      => 'radix_multipurpose_frontpage_request_callback_title_option',
    'type'          => 'dropdown-pages'
)
);

$wp_customize->add_setting( 'radix_multipurpose_callback_form_code', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'radix_multipurpose_callback_form_code', array(
    'label'                 =>  __( 'Request A Call Back  Form Section Use Shortcode', 'radix-multipurpose' ),
    'description'           =>  __( 'eg [contact-form-7 id="108" title="Contact form 1"]', 'radix-multipurpose' ),
    'section'               => 'radix_lite_frontpage_consulting_section',
    'type'                  => 'text',
    'settings' => 'radix_multipurpose_callback_form_code',
) );


/**
 * Page option for Consulting section title and description
 *
 * @since 1.0.0
 */
$wp_customize->add_setting(
    'radix_multipurpose_frontpage_consulting_title_option',
    array(
        'capability'        => 'edit_theme_options',
        'default'           => '',
        'sanitize_callback' => 'radix_multipurpose_sanitize_dropdown_pages',
    )
);

$wp_customize->add_control('radix_multipurpose_frontpage_consulting_title_option',array(
    'label'         => __( 'Select Page for Consulting section title and description', 'radix-multipurpose' ),
    'section'       => 'radix_lite_frontpage_consulting_section',
    'settings'      => 'radix_multipurpose_frontpage_consulting_title_option',
    'type'          => 'dropdown-pages'
)
);



/*----------------------------------------------------------------------------------------------------------------------------------------*/
/**
 * Front page Our Plan section
 *
 * @since 1.0.0
 */
$wp_customize->add_section(
    'radix_lite_frontpage_plan_section',
    array(
        'priority'       => 9,
        'panel'          => 'radix_lite_frontpage_settings_panel',
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => __( 'Plan Section', 'radix-multipurpose' ),
        'description'    => __( 'Managed the  Plan display at Frontpage section.', 'radix-multipurpose' ),
    )
);

/**
 * Switch option for  Consulting Section
 *
 * @since 1.0.0
 */
$wp_customize->add_setting(
    'radix_multipurpose_frontpage_plan_option',
    array(
        'capability'        => 'edit_theme_options',
        'default'           => 'hide',
        'sanitize_callback' => 'radix_multipurpose_sanitize_switch_option',
    )
);

$wp_customize->add_control( new Radix_Multipurpose_Customize_Switch_Control(
    $wp_customize,
    'radix_multipurpose_frontpage_plan_option',
    array(
        'label'         => __( 'Frontpage plan Option', 'radix-multipurpose' ),
        'description'   => __( 'Show/Hide option for Frontpage Plan section.', 'radix-multipurpose' ),
        'section'       => 'radix_lite_frontpage_plan_section',
        'settings'      => 'radix_multipurpose_frontpage_plan_option',
        'type'          => 'switch',
        'choices'       => array(
            'show'          => __( 'Show', 'radix-multipurpose' ),
            'hide'          => __( 'Hide', 'radix-multipurpose' )
        )
    )
)
);

/**
 *Background Text option for Our Plan section
 *
 * @since 1.0.0
 */
$wp_customize->add_setting( 'radix_multipurpose_frontpage_plan_bg_text_option', array(
    'capability'            => 'edit_theme_options',
    'default'               => esc_attr__( 'Pricing', 'radix-multipurpose' ),
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'radix_multipurpose_frontpage_plan_bg_text_option', array(
    'label'                 =>  __( 'Background Text', 'radix-multipurpose' ),
    'section'               => 'radix_lite_frontpage_plan_section',
    'type'                  => 'text',
    'settings' => 'radix_multipurpose_frontpage_plan_bg_text_option',
) );


/**
 * Page option for Call back section title and description
 *
 * @since 1.0.0
 */
$wp_customize->add_setting(
    'radix_multipurpose_frontpage_plan_title_option',
    array(
        'capability'        => 'edit_theme_options',
        'default'           => '',
        'sanitize_callback' => 'radix_multipurpose_sanitize_dropdown_pages',
    )
);

$wp_customize->add_control('radix_multipurpose_frontpage_plan_title_option',array(
    'label'         => __( 'Select Page for Plan  section title and description', 'radix-multipurpose' ),
    'section'       => 'radix_lite_frontpage_plan_section',
    'settings'      => 'radix_multipurpose_frontpage_plan_title_option',
    'type'          => 'dropdown-pages'
)
);

$wp_customize->add_setting('pricing_table_widget_link', array(
  'default' => '',
  'type' => 'customtext',
  'capability' => 'edit_theme_options',
  'transport' => 'refresh',
  'sanitize_callback' => 'sanitize_text_field',
) );
$wp_customize->add_control( new Radix_Multipurpose_Plan_Widget_Link( $wp_customize, 'pricing_table_widget_link', array(
    'label' => esc_attr__( 'Go to Widget', 'radix-multipurpose' ),
    'section' => 'radix_lite_frontpage_plan_section',
    'settings' => 'pricing_table_widget_link',
    'extra' => esc_attr__( ' for more info', 'radix-multipurpose' )
) ) 
);

/*----------------------------------------------------------------------------------------------------------------------------------------*/
/**
 * Front page Testimonials section
 *
 * @since 1.0.0
 */

$wp_customize->add_section(
    'radix_lite_frontpage_testimonials_section',
    array(
        'priority'       => 10,
        'panel'          => 'radix_lite_frontpage_settings_panel',
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => __( 'Testimonials Section', 'radix-multipurpose' ),
        'description'    => __( 'Managed the  Testimonials display at Frontpage section.', 'radix-multipurpose' ),
    )
);

/**
 * Switch option for  Testimonials Section
 *
 * @since 1.0.0
 */
$wp_customize->add_setting(
    'radix_multipurpose_frontpage_testimonials_option',
    array(
        'capability'        => 'edit_theme_options',
        'default'           => 'hide',
        'sanitize_callback' => 'radix_multipurpose_sanitize_switch_option',
    )
);

$wp_customize->add_control( new Radix_Multipurpose_Customize_Switch_Control(
    $wp_customize,
    'radix_multipurpose_frontpage_testimonials_option',
    array(
        'label'         => __( 'Frontpage Testimonials Option', 'radix-multipurpose' ),
        'description'   => __( 'Show/Hide option for Frontpage Testimonials section.', 'radix-multipurpose' ),
        'section'       => 'radix_lite_frontpage_testimonials_section',
        'settings'      => 'radix_multipurpose_frontpage_testimonials_option',
        'type'          => 'switch',
        'choices'       => array(
            'show'          => __( 'Show', 'radix-multipurpose' ),
            'hide'          => __( 'Hide', 'radix-multipurpose' )
        )
    )
)
);

/**
 *Background Text option for Testimonials section
 *
 * @since 1.0.0
 */
$wp_customize->add_setting( 'radix_multipurpose_frontpage_testimonials_bg_text_option', array(
    'capability'            => 'edit_theme_options',
    'default'               => esc_attr__( 'Reviewing', 'radix-multipurpose' ),
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'radix_multipurpose_frontpage_testimonials_bg_text_option', array(
    'label'                 =>  __( 'Background Text', 'radix-multipurpose' ),
    'section'               => 'radix_lite_frontpage_testimonials_section',
    'type'                  => 'text',
    'settings' => 'radix_multipurpose_frontpage_testimonials_bg_text_option',
) );


/**
 * Page option for Testimonials  section title and description
 *
 * @since 1.0.0
 */
$wp_customize->add_setting(
    'radix_multipurpose_frontpage_testimonials_title_option',
    array(
        'capability'        => 'edit_theme_options',
        'default'           => '',
        'sanitize_callback' => 'radix_multipurpose_sanitize_dropdown_pages',
    )
);

$wp_customize->add_control('radix_multipurpose_frontpage_testimonials_title_option',array(
    'label'         => __( 'Select Page for Testimonials  section title and description', 'radix-multipurpose' ),
    'section'       => 'radix_lite_frontpage_testimonials_section',
    'settings'      => 'radix_multipurpose_frontpage_testimonials_title_option',
    'type'          => 'dropdown-pages'
)
);



/*----------------------------------------------------------------------------------------------------------------------------------------*/
/**
 * Front page Team section
 *
 * @since 1.0.0
 */

$wp_customize->add_section(
    'radix_lite_frontpage_team_section',
    array(
        'priority'       => 10,
        'panel'          => 'radix_lite_frontpage_settings_panel',
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => __( 'Team Section', 'radix-multipurpose' ),
        'description'    => __( 'Managed the  Team display at Frontpage section.', 'radix-multipurpose' ),
    )
);

/**
 * Switch option for  Testimonials Section
 *
 * @since 1.0.0
 */
$wp_customize->add_setting(
    'radix_multipurpose_frontpage_team_option',
    array(
        'capability'        => 'edit_theme_options',
        'default'           => 'hide',
        'sanitize_callback' => 'radix_multipurpose_sanitize_switch_option',
    )
);

$wp_customize->add_control( new Radix_Multipurpose_Customize_Switch_Control(
    $wp_customize,
    'radix_multipurpose_frontpage_team_option',
    array(
        'label'         => __( 'Frontpage Team Option', 'radix-multipurpose' ),
        'description'   => __( 'Show/Hide option for Frontpage Team section.', 'radix-multipurpose' ),
        'section'       => 'radix_lite_frontpage_team_section',
        'settings'      => 'radix_multipurpose_frontpage_team_option',
        'type'          => 'switch',
        'choices'       => array(
            'show'          => __( 'Show', 'radix-multipurpose' ),
            'hide'          => __( 'Hide', 'radix-multipurpose' )
        )
    )
)
);

/**
 *Background Text option for Team section
 *
 * @since 1.0.0
 */
$wp_customize->add_setting( 'radix_multipurpose_frontpage_team_bg_text_option', array(
    'capability'            => 'edit_theme_options',
    'default'               => esc_attr__( 'Reviewing', 'radix-multipurpose' ),
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'radix_multipurpose_frontpage_team_bg_text_option', array(
    'label'                 =>  __( 'Background Text', 'radix-multipurpose' ),
    'section'               => 'radix_lite_frontpage_team_section',
    'type'                  => 'text',
    'settings' => 'radix_multipurpose_frontpage_team_bg_text_option',
) );


/**
 * Page option for Team  section title and description
 *
 * @since 1.0.0
 */
$wp_customize->add_setting(
    'radix_multipurpose_frontpage_team_title_option',
    array(
        'capability'        => 'edit_theme_options',
        'default'           => '',
        'sanitize_callback' => 'radix_multipurpose_sanitize_dropdown_pages',
    )
);

$wp_customize->add_control('radix_multipurpose_frontpage_team_title_option',array(
    'label'         => __( 'Select Page for Team  section title and description', 'radix-multipurpose' ),
    'section'       => 'radix_lite_frontpage_team_section',
    'settings'      => 'radix_multipurpose_frontpage_team_title_option',
    'type'          => 'dropdown-pages'
)
);




/*----------------------------------------------------------------------------------------------------------------------------------------*/
/**
 * Front page Call to Action section
 *
 * @since 1.0.0
 */

$wp_customize->add_section(
    'radix_lite_frontpage_call_to_action_section',
    array(
        'priority'       => 10,
        'panel'          => 'radix_lite_frontpage_settings_panel',
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => __( 'Call to Action Section', 'radix-multipurpose' ),
        'description'    => __( 'Managed the  Call to action display at Frontpage section.', 'radix-multipurpose' ),
    )
);

/**
 * Switch option for  Call to Action Section
 *
 * @since 1.0.0
 */
$wp_customize->add_setting(
    'radix_multipurpose_frontpage_call_to_action_option',
    array(
        'capability'        => 'edit_theme_options',
        'default'           => 'hide',
        'sanitize_callback' => 'radix_multipurpose_sanitize_switch_option',
    )
);

$wp_customize->add_control( new Radix_Multipurpose_Customize_Switch_Control(
    $wp_customize,
    'radix_multipurpose_frontpage_call_to_action_option',
    array(
        'label'         => __( 'Frontpage Call to Action Option', 'radix-multipurpose' ),
        'description'   => __( 'Show/Hide option for Frontpage Call to Action section.', 'radix-multipurpose' ),
        'section'       => 'radix_lite_frontpage_call_to_action_section',
        'settings'      => 'radix_multipurpose_frontpage_call_to_action_option',
        'type'          => 'switch',
        'choices'       => array(
            'show'          => __( 'Show', 'radix-multipurpose' ),
            'hide'          => __( 'Hide', 'radix-multipurpose' )
        )
    )
)
);

/**
 * Page option for Call to Action section title and description
 *
 * @since 1.0.0
 */
$wp_customize->add_setting(
    'radix_multipurpose_frontpage_call_to_action_title_option',
    array(
        'capability'        => 'edit_theme_options',
        'default'           => '',
        'sanitize_callback' => 'radix_multipurpose_sanitize_dropdown_pages',
    )
);

$wp_customize->add_control('radix_multipurpose_frontpage_call_to_action_title_option',array(
    'label'         => __( 'Select Page for Call to action  section title and description with feature image', 'radix-multipurpose' ),
    'section'       => 'radix_lite_frontpage_call_to_action_section',
    'settings'      => 'radix_multipurpose_frontpage_call_to_action_title_option',
    'type'          => 'dropdown-pages'
)
);

/**
 * Text option for Call to action Button text
 *
 * @since 1.0.0
 */
$wp_customize->add_setting( 'radix_multipurpose_frontpage_call_to_action_button_text_option', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'radix_multipurpose_frontpage_call_to_action_button_text_option', array(
    'label'                 =>  __( 'Button  Text', 'radix-multipurpose' ),
    'section'               => 'radix_lite_frontpage_call_to_action_section',
    'type'                  => 'text',
    'settings' => 'radix_multipurpose_frontpage_call_to_action_button_text_option',
) );

/**
 * Option for Call to action Button Url
 *
 * @since 1.0.0
 */
$wp_customize->add_setting( 'radix_multipurpose_frontpage_call_to_action_button_url_option', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'esc_url_raw'
) );

$wp_customize->add_control( 'radix_multipurpose_frontpage_call_to_action_button_url_option', array(
    'label'                 =>  __( 'Button  Url', 'radix-multipurpose' ),
    'section'               => 'radix_lite_frontpage_call_to_action_section',
    'type'                  => 'url',
    'settings' => 'radix_multipurpose_frontpage_call_to_action_button_url_option',
) );



/*----------------------------------------------------------------------------------------------------------------------------------------*/
/**
 * Front page blog section
 *
 * @since 1.0.0
 */

$wp_customize->add_section(
    'radix_multipurpose_frontpage_blog_section',
    array(
        'priority'       => 10,
        'panel'          => 'radix_lite_frontpage_settings_panel',
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => __( 'Blog Section', 'radix-multipurpose' ),
        'description'    => __( 'Managed the  Blog display at Frontpage section.', 'radix-multipurpose' ),
    )
);

/**
 * Switch option for  Call to Action Section
 *
 * @since 1.0.0
 */
$wp_customize->add_setting(
    'radix_multipurpose_frontpage_blog_option',
    array(
        'capability'        => 'edit_theme_options',
        'default'           => 'hide',
        'sanitize_callback' => 'radix_multipurpose_sanitize_switch_option',
    )
);

$wp_customize->add_control( new Radix_Multipurpose_Customize_Switch_Control(
    $wp_customize,
    'radix_multipurpose_frontpage_blog_option',
    array(
        'label'         => __( 'Frontpage Blog Option', 'radix-multipurpose' ),
        'description'   => __( 'Show/Hide option for Frontpage Blog section.', 'radix-multipurpose' ),
        'section'       => 'radix_multipurpose_frontpage_blog_section',
        'settings'      => 'radix_multipurpose_frontpage_blog_option',
        'type'          => 'switch',
        'choices'       => array(
            'show'          => __( 'Show', 'radix-multipurpose' ),
            'hide'          => __( 'Hide', 'radix-multipurpose' )
        )
    )
)
);

/**
 *Background Text option for Blog section
 *
 * @since 1.0.0
 */
$wp_customize->add_setting( 'radix_multipurpose_frontpage_blog_bg_text_option', array(
    'capability'            => 'edit_theme_options',
    'default'               => esc_attr__( 'News', 'radix-multipurpose' ),
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'radix_multipurpose_frontpage_blog_bg_text_option', array(
    'label'                 =>  __( 'Background Text', 'radix-multipurpose' ),
    'section'               => 'radix_multipurpose_frontpage_blog_section',
    'type'                  => 'text',
    'settings' => 'radix_multipurpose_frontpage_blog_bg_text_option',
) );
/**
 * Page option for Blog section title and description
 *
 * @since 1.0.0
 */
$wp_customize->add_setting(
    'radix_multipurpose_frontpage_blog_title_option',
    array(
        'capability'        => 'edit_theme_options',
        'default'           => '',
        'sanitize_callback' => 'radix_multipurpose_sanitize_dropdown_pages',
    )
);

$wp_customize->add_control('radix_multipurpose_frontpage_blog_title_option',array(
    'label'         => __( 'Select Page for Blog  section title and description', 'radix-multipurpose' ),
    'section'       => 'radix_multipurpose_frontpage_blog_section',
    'settings'      => 'radix_multipurpose_frontpage_blog_title_option',
    'type'          => 'dropdown-pages'
)
);

//Category select for blogs
$wp_customize->add_setting('radix_multipurpose_blog_category_id',array(
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'radix_multipurpose_sanitize_category',
    'default' =>  '1',
)
);

$wp_customize->add_control(new Radix_Multipurpose_Customize_Dropdown_Taxonomies_Control($wp_customize,'radix_multipurpose_blog_category_id',
    array(
     'label' => __('Select Category for Blog','radix-multipurpose'),
     'section' => 'radix_multipurpose_frontpage_blog_section',
     'settings' => 'radix_multipurpose_blog_category_id',
     'type'=> 'dropdown-taxonomies',
 )
));

$wp_customize->add_setting( 'radix_multipurpose_blog_number', array(
    'capability'            => 'edit_theme_options',
    'default'               => '3',
    'sanitize_callback'     => 'radix_multipurpose_sanitize_number_absint'
));

$wp_customize->add_control( 'radix_multipurpose_blog_number', array(
    'label'                 =>  __( 'Number of Recent Blogs to Show in Front Page', 'radix-multipurpose' ),
    'description'           =>  __( 'input 3,4,5,6,7,8,9,10', 'radix-multipurpose' ),
    'section'               => 'radix_multipurpose_frontpage_blog_section',
    'type'                  => 'number',
    'settings' => 'radix_multipurpose_blog_number',
) );


/*----------------------------------------------------------------------------------------------------------------------------------------*/
/**
 * Front page Clients section
 *
 * @since 1.0.0
 */

$wp_customize->add_section(
    'radix_multipurpose_frontpage_client_section',
    array(
        'priority'       => 10,
        'panel'          => 'radix_lite_frontpage_settings_panel',
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => __( 'Client Section', 'radix-multipurpose' ),
        'description'    => __( 'Managed the  Client display at Frontpage section.', 'radix-multipurpose' ),
    )
);

/**
 * Switch option for  Clients Section
 *
 * @since 1.0.0
 */
$wp_customize->add_setting(
    'radix_multipurpose_frontpage_client_option',
    array(
        'capability'        => 'edit_theme_options',
        'default'           => 'hide',
        'sanitize_callback' => 'radix_multipurpose_sanitize_switch_option',
    )
);

$wp_customize->add_control( new Radix_Multipurpose_Customize_Switch_Control(
    $wp_customize,
    'radix_multipurpose_frontpage_client_option',
    array(
        'label'         => __( 'Frontpage Client Option', 'radix-multipurpose' ),
        'description'   => __( 'Show/Hide option for Frontpage Clients section.', 'radix-multipurpose' ),
        'section'       => 'radix_multipurpose_frontpage_client_section',
        'settings'      => 'radix_multipurpose_frontpage_client_option',
        'type'          => 'switch',
        'choices'       => array(
            'show'          => __( 'Show', 'radix-multipurpose' ),
            'hide'          => __( 'Hide', 'radix-multipurpose' )
        )
    )
)
);

/**
 *Background Text option for Clients section
 *
 * @since 1.0.0
 */
$wp_customize->add_setting( 'radix_multipurpose_frontpage_client_bg_text_option', array(
    'capability'            => 'edit_theme_options',
    'default'               => esc_attr__( 'Clients', 'radix-multipurpose' ),
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'radix_multipurpose_frontpage_client_bg_text_option', array(
    'label'                 =>  __( 'Background Text', 'radix-multipurpose' ),
    'section'               => 'radix_multipurpose_frontpage_client_section',
    'type'                  => 'text',
    'settings' => 'radix_multipurpose_frontpage_client_bg_text_option',
) );
/**
 * Page option for Client section title and description
 *
 * @since 1.0.0
 */
$wp_customize->add_setting(
    'radix_multipurpose_frontpage_client_title_option',
    array(
        'capability'        => 'edit_theme_options',
        'default'           => '',
        'sanitize_callback' => 'radix_multipurpose_sanitize_dropdown_pages',
    )
);

$wp_customize->add_control('radix_multipurpose_frontpage_client_title_option',array(
    'label'         => __( 'Select Page for Client  section title and description', 'radix-multipurpose' ),
    'section'       => 'radix_multipurpose_frontpage_client_section',
    'settings'      => 'radix_multipurpose_frontpage_client_title_option',
    'type'          => 'dropdown-pages'
)
);

//Category select for Clients
$wp_customize->add_setting('radix_multipurpose_client_category_id',array(
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'radix_multipurpose_sanitize_category',
    'default' =>  '1',
)
);

$wp_customize->add_control(new Radix_multipurpose_Customize_Dropdown_Taxonomies_Control($wp_customize,'radix_multipurpose_client_category_id',
    array(
     'label' => __('Select Category for Client','radix-multipurpose'),
     'section' => 'radix_multipurpose_frontpage_client_section',
     'settings' => 'radix_multipurpose_client_category_id',
     'type'=> 'dropdown-taxonomies',
 )
));

$wp_customize->add_setting( 'radix_multipurpose_client_number', array(
    'capability'            => 'edit_theme_options',
    'default'               => '12',
    'sanitize_callback'     => 'radix_multipurpose_sanitize_number_absint'
));

$wp_customize->add_control( 'radix_multipurpose_client_number', array(
    'label'                 =>  __( 'Number of Clients to Show in Front Page', 'radix-multipurpose' ),
    'description'           =>  __( 'input 3,4,5,6,7,8,9,10,......', 'radix-multipurpose' ),
    'section'               => 'radix_multipurpose_frontpage_client_section',
    'type'                  => 'number',
    'settings' => 'radix_multipurpose_client_number',
) );


/*----------------------------------------------------------------------------------------------------------------------------------------*/
/**
 * Front page Contact section
 *
 * @since 1.0.0
 */

$wp_customize->add_section(
    'radix_lite_frontpage_contact_section',
    array(
        'priority'       => 10,
        'panel'          => 'radix_lite_frontpage_settings_panel',
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => __( 'Contact Section', 'radix-multipurpose' ),
        'description'    => __( 'Managed the  Client display at Frontpage section.', 'radix-multipurpose' ),
    )
);

/**
 * Switch option for  Contact Section
 *
 * @since 1.0.0
 */
$wp_customize->add_setting(
    'radix_multipurpose_frontpage_contact_option',
    array(
        'capability'        => 'edit_theme_options',
        'default'           => 'hide',
        'sanitize_callback' => 'radix_multipurpose_sanitize_switch_option',
    )
);

$wp_customize->add_control( new Radix_Multipurpose_Customize_Switch_Control(
    $wp_customize,
    'radix_multipurpose_frontpage_contact_option',
    array(
        'label'         => __( 'Frontpage Contact Option', 'radix-multipurpose' ),
        'description'   => __( 'Show/Hide option for Frontpage Contact section.', 'radix-multipurpose' ),
        'section'       => 'radix_lite_frontpage_contact_section',
        'settings'      => 'radix_multipurpose_frontpage_contact_option',
        'type'          => 'switch',
        'choices'       => array(
            'show'          => __( 'Show', 'radix-multipurpose' ),
            'hide'          => __( 'Hide', 'radix-multipurpose' )
        )
    )
)
);

/**
 *Background Text option for Contact section
 *
 * @since 1.0.0
 */
$wp_customize->add_setting( 'radix_multipurpose_frontpage_contact_bg_text_option', array(
    'capability'            => 'edit_theme_options',
    'default'               => esc_attr__( 'Contact', 'radix-multipurpose' ),
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'radix_multipurpose_frontpage_contact_bg_text_option', array(
    'label'                 =>  __( 'Background Text', 'radix-multipurpose' ),
    'section'               => 'radix_lite_frontpage_contact_section',
    'type'                  => 'text',
    'settings' => 'radix_multipurpose_frontpage_contact_bg_text_option',
) );
/**
 * Page option for Contact section title and description
 *
 * @since 1.0.0
 */
$wp_customize->add_setting(
    'radix_multipurpose_frontpage_contact_title_option',
    array(
        'capability'        => 'edit_theme_options',
        'default'           => '',
        'sanitize_callback' => 'radix_multipurpose_sanitize_dropdown_pages',
    )
);

$wp_customize->add_control('radix_multipurpose_frontpage_contact_title_option',array(
    'label'         => __( 'Select Page for Contact section title and description', 'radix-multipurpose' ),
    'section'       => 'radix_lite_frontpage_contact_section',
    'settings'      => 'radix_multipurpose_frontpage_contact_title_option',
    'type'          => 'dropdown-pages'
)
);


/**
 *Contact form title Text option for Contact section
 *
 * @since 1.0.0
 */
$wp_customize->add_setting( 'radix_multipurpose_frontpage_contact_title_text_option', array(
    'capability'            => 'edit_theme_options',
    'default'               => esc_attr__( 'Contact', 'radix-multipurpose' ),
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'radix_multipurpose_frontpage_contact_title_text_option', array(
    'label'                 =>  __( 'Contact Form title Text', 'radix-multipurpose' ),
    'section'               => 'radix_lite_frontpage_contact_section',
    'type'                  => 'text',
    'settings' => 'radix_multipurpose_frontpage_contact_title_text_option',
) );

// contact form shortcode section
$wp_customize->add_setting( 'radix_multipurpose_frontpage_contact_form_option', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'radix_multipurpose_frontpage_contact_form_option', array(
    'label'                 =>  __( 'Contact Section Use Shortcode', 'radix-multipurpose' ),
    'description'           =>  __( 'eg [contact-form-7 id="108" title="Contact form 1"]', 'radix-multipurpose' ),
    'section'               => 'radix_lite_frontpage_contact_section',
    'type'                  => 'text',
    'settings' => 'radix_multipurpose_frontpage_contact_form_option',
) );


/**
 *Contact Address title Text option for Contact section
 *
 * @since 1.0.0
 */
$wp_customize->add_setting( 'radix_multipurpose_frontpage_contact_address_title_text_option', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'radix_multipurpose_frontpage_contact_address_title_text_option', array(
    'label'                 =>  __( 'Contact Address title Text', 'radix-multipurpose' ),
    'section'               => 'radix_lite_frontpage_contact_section',
    'type'                  => 'text',
    'settings' => 'radix_multipurpose_frontpage_contact_address_title_text_option',
) );


}