<?php
/**
 * @package Radix Multipurpose
	=========================
			WIDGET CLASS
	=========================
 */



// Radix Plan Widget
require_once trailingslashit( get_template_directory() ) . '/inc/widgets/radix-plan-widget-class.php';

// Register Widget
if ( ! function_exists( 'radix_multipurpose_register_widget' ) ) {

	/**
     * Load widget.
     *
     * @since 1.0.0
     */
    function radix_multipurpose_register_widget() {
    	
        // Plan Widget
        register_widget( 'Radix_Multipurpose_Plan_Widget' );
    }
}

add_action( 'widgets_init', 'radix_multipurpose_register_widget' );