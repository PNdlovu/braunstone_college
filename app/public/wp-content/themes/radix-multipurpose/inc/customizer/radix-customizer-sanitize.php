<?php
/**
 * File to sanitize customizer field
 *
 * @package Radix Multipurpose
 * @since 1.0.0
 */

if ( ! function_exists( 'radix_multipurpose_sanitize_checkbox' ) ) :

    /**
     * Sanitize checkbox.
     *
     * @since 1.0.0
     *
     * @param bool $checked Whether the checkbox is checked.
     * @return bool Whether the checkbox is checked.
     */
    function radix_multipurpose_sanitize_checkbox( $checked ) {

        return ( ( isset( $checked ) && true === $checked ) ? true : false );

    }

endif;

if ( ! function_exists( 'radix_multipurpose_sanitize_select' ) ) :

    /**
     * Sanitize select.
     *
     * @since 1.0.0
     *
     * @param mixed                $input The value to sanitize.
     * @param WP_Customize_Setting $setting WP_Customize_Setting instance.
     * @return mixed Sanitized value.
     */
    function radix_multipurpose_sanitize_select( $input, $setting ) {

        // Ensure input is a slug.
        $input = sanitize_key( $input );

        // Get list of choices from the control associated with the setting.
        $choices = $setting->manager->get_control( $setting->id )->choices;

        // If the input is a valid key, return it; otherwise, return the default.
        return ( array_key_exists( $input, $choices ) ? $input : $setting->default );

    }

endif;


/**
 * switch option (show/hide)
 *
 * @since 1.0.0
 */
function radix_multipurpose_sanitize_switch_option( $input ) {
    $valid_keys = array(
            'show'  => __( 'Show', 'radix-multipurpose' ),
            'hide'  => __( 'Hide', 'radix-multipurpose' )
        );
    if ( array_key_exists( $input, $valid_keys ) ) {
        return $input;
    } else {
        return '';
    }
}

/**
 * Sanitize repeater value
 *
 * @since 1.0.0
 */
function radix_lite_sanitize_repeater( $input, $setting ){
    $input_decoded = json_decode( $input, true );
    $default_decoded = json_decode( $setting->default, true );

    $radix_multipurpose_icon_array          = array_flip( radix_multipurpose_font_awesome_icon_array() );
    $radix_multipurpose_social_icon_array   = array_flip( radix_multipurpose_font_awesome_social_icon_array() );
        
    if( !empty( $input_decoded ) ) {

        foreach ( $input_decoded as $boxes => $box ){
            foreach ( $box as $key => $value ){

                if( $key == 'mt_item_url' || $key == 'mt_item_url_1' || $key == 'mt_item_url_2' || $key == 'mt_item_url_3' || $key == 'mt_item_upload' || $key == 'mt_item_upload_1') {
                    $input_decoded[$boxes][$key] = esc_url_raw( $value );
                } elseif( $key == 'mt_item_icon' ) {
                    $default = $default_decoded[ 0 ][ 'mt_item_icon' ];
                    $input_decoded[ $boxes ][ $key ] = array_key_exists( $value, $radix_multipurpose_icon_array ) ? $value : $default;
                }
                elseif( $key == 'mt_dropdown_pages' || $key == 'mt_item_number' ) {
                    $input_decoded[$boxes][$key] = absint( $value );
                } elseif( $key == 'mt_item_social_icon' || $key == 'mt_item_social_icon_1' || $key == 'mt_item_social_icon_2' || $key == 'mt_item_social_icon_3' ) {
                    $default = $default_decoded[ 0 ][ 'mt_item_social_icon' ];
                    $input_decoded[ $boxes ][ $key ] = array_key_exists( $value, $radix_multipurpose_social_icon_array ) ? $value : $default;
                } else {
                    $input_decoded[$boxes][$key] = wp_kses_post( $value );
                }
            }
        }
        return json_encode( $input_decoded );
    }
    
    return $input;
}

function radix_multipurpose_sanitize_category($input){
    $output=intval($input);
    return $output;
}

/**
 * Drop-down Pages sanitization callback example.
 *
 * - Sanitization: dropdown-pages
 * - Control: dropdown-pages
 * 
 * Sanitization callback for 'dropdown-pages' type controls. This callback sanitizes `$page_id`
 * as an absolute integer, and then validates that $input is the ID of a published page.
 * 
 * @see absint() https://developer.wordpress.org/reference/functions/absint/
 * @see get_post_status() https://developer.wordpress.org/reference/functions/get_post_status/
 *
 * @param int                  $page    Page ID.
 * @param WP_Customize_Setting $setting Setting instance.
 * @return int|string Page ID if the page is published; otherwise, the setting default.
 */
function radix_multipurpose_sanitize_dropdown_pages( $page_id, $setting ) {
    // Ensure $input is an absolute integer.
    $page_id = absint( $page_id );
    
    // If $page_id is an ID of a published page, return it; otherwise, return the default.
    return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
}

/**
 * Number sanitization callback example.
 *
 * - Sanitization: number_absint
 * - Control: number
 * 
 * Sanitization callback for 'number' type text inputs. This callback sanitizes `$number`
 * as an absolute integer (whole number, zero or greater).
 * 
 * NOTE: absint() can be passed directly as `$wp_customize->add_setting()` 'sanitize_callback'.
 * It is wrapped in a callback here merely for example purposes.
 * 
 * @see absint() https://developer.wordpress.org/reference/functions/absint/
 *
 * @param int                  $number  Number to sanitize.
 * @param WP_Customize_Setting $setting Setting instance.
 * @return int Sanitized number; otherwise, the setting default.
 */
function radix_multipurpose_sanitize_number_absint( $number, $setting ) {
    // Ensure $number is an absolute integer (whole number, zero or greater).
    $number = absint( $number );
    
    // If the input is an absolute integer, return it; otherwise, return the default
    return ( $number ? $number : $setting->default );
}