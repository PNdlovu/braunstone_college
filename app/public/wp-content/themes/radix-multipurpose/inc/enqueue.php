<?php
function radix_multipurpose_scripts() {
	// Google font
	wp_enqueue_style( 'google-font', 'https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,700,800');

	// Bootstrap css
	wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() .'/assets/css/bootstrap.min.css', array(), '4.0.0' );

	// Fontawesome css
	wp_enqueue_style( 'fontawesome-style', get_template_directory_uri() .'/assets/css/font-awesome.min.css', array(), '4.7.0' );

	// Slick nav css
	wp_enqueue_style( 'slicknav-style', get_template_directory_uri() .'/assets/css/slicknav.min.css', array(), '4.3.0' );

	//cubeportfolio css
	wp_enqueue_style( 'cubeportfolio-style', get_template_directory_uri() .'/assets/css/cubeportfolio.min.css', array(), '1.0.10' );	

	//Magnific PopUp css 
	wp_enqueue_style( 'magnific-popup-style', get_template_directory_uri() .'/assets/css/magnific-popup.min.css', array(), '' );	

	//Fancy Box CSS
	 wp_enqueue_style( 'jquery-fancybox-style', get_template_directory_uri() .'/assets/css/jquery.fancybox.min.css', array(), '' );

	//Nice Select CSS
	 wp_enqueue_style( 'niceselect-style', get_template_directory_uri() .'/assets/css/niceselect.css', array(), '' );

	 //Owl Carousel CSS
	 wp_enqueue_style( 'owl-theme-style', get_template_directory_uri() .'/assets/css/owl.theme.default.css', array(), '2.2.1' );
	 wp_enqueue_style( 'owl-carousel-style', get_template_directory_uri() .'/assets/css/owl.carousel.min.css', array(), '2.2.1' );

	 //Slick Slider CSS
	  wp_enqueue_style( 'slick-slider-style', get_template_directory_uri() .'/assets/css/slickslider.min.css', array(), '1.0.9' ); 

	 //Animate CSS
	 wp_enqueue_style( 'animate-style', get_template_directory_uri() .'/assets/css/animate.css', array(), '' ); 

	// Radix StyleShet CSS
	wp_enqueue_style( 'radix-multipurpose-reset-style', get_template_directory_uri() .'/assets/css/reset.css', array(), '1.0.0' ); 
	wp_enqueue_style( 'radix-multipurpose-style', get_stylesheet_uri() );

	wp_enqueue_style( 'radix-multipurpose-responsive-style', get_template_directory_uri() .'/assets/css/responsive.css', array(), '1.0.0' ); 
	wp_enqueue_style( 'radix-multipurpose-color-style', get_template_directory_uri() .'/assets/css/color/color1.css', array(), '1.0.0' ); 

	// Popper JS 
	wp_enqueue_script( 'popper-scripts', get_template_directory_uri() . '/assets/js/popper.min.js', array('jquery'), '', true );

	// Bootstrap JS
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '4.0.0', true );

	//  Modernizer JS
	wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/assets/js/modernizr.min.js', array('jquery'), '2.8.3', true );

	// Nice select JS 
	wp_enqueue_script( 'niceselect', get_template_directory_uri() . '/assets/js/niceselect.js', array('jquery'), '1.0.0', true );

	// Tilt Jquery JS
	wp_enqueue_script( 'jquery-tilt', get_template_directory_uri() . '/assets/js/tilt.jquery.min.js', array('jquery'), '', true );

	// Fancybox js
	wp_enqueue_script( 'jquery-fancybox', get_template_directory_uri() . '/assets/js/jquery.fancybox.min.js', array('jquery'), '3.1.20', true );

	// Jquery Nav js
	wp_enqueue_script( 'jquery-nav', get_template_directory_uri() . '/assets/js/jquery.nav.js', array('jquery'), '3.0.0', true );

	// Owl Carousel JS 
	wp_enqueue_script( 'owl-carousel-js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '2.2.1', true );

	// Slick Slider JS
	wp_enqueue_script( 'slickslider-js', get_template_directory_uri() . '/assets/js/slickslider.min.js', array('jquery'), '1.0.9', true );

	// Cube Portfolio JS
	wp_enqueue_script( 'cubeportfolio-js', get_template_directory_uri() . '/assets/js/cubeportfolio.min.js', array('jquery'), '4.3.0', true );

	// Slicknav JS 
	wp_enqueue_script( 'jquery-slicknav', get_template_directory_uri() . '/assets/js/jquery.slicknav.min.js', array('jquery'), '1.0.10', true );

	// Jquery Steller JS  
	wp_enqueue_script( 'jquery-stellar', get_template_directory_uri() . '/assets/js/jquery.stellar.min.js', array('jquery'), '0.6.2', true );

	//  Magnific Popup JS 
	wp_enqueue_script( 'magnific-popup-js', get_template_directory_uri() . '/assets/js/magnific-popup.min.js', array('jquery'), '1.1.0', true );

	//  Wow JS 
	wp_enqueue_script( 'wow-js', get_template_directory_uri() . '/assets/js/wow.min.js', array('jquery'), '1.1.2', true );

	//  CounterUp JS  
	wp_enqueue_script( 'jquery-counterup', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array('jquery'), '1.0.0', true );

	//   Waypoint JS 
	wp_enqueue_script( 'waypoints-js', get_template_directory_uri() . '/assets/js/waypoints.min.js', array('jquery'), '2.0.3', true );

	//  Jquery Easing JS
	wp_enqueue_script( 'jquery-easing', get_template_directory_uri() . '/assets/js/easing.min.js', array('jquery'), '', true );

	// Main JS
	wp_enqueue_script( 'radix-multipurpose-main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true );

	wp_enqueue_script( 'radix-multipurpose-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'radix-multipurpose-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'radix_multipurpose_scripts' );