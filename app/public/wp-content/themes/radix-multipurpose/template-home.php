<?php
/*
*	Template Name: FrontPage
*
*/	
 get_header();	

get_template_part( 'sections/radix','slider' );
get_template_part( 'sections/radix','about' );
get_template_part( 'sections/radix','achievements' );
get_template_part( 'sections/radix','service' );
get_template_part( 'sections/radix','why-choose' );
get_template_part( 'sections/radix','portfolio' );
get_template_part( 'sections/radix','consulting' );
get_template_part( 'sections/radix','pricing-plan' );
get_template_part( 'sections/radix','testimonials' );
get_template_part( 'sections/radix','team' );
get_template_part( 'sections/radix','call-to-action' );
get_template_part( 'sections/radix','blog' );
get_template_part( 'sections/radix','partners' );
get_template_part( 'sections/radix','contact' );

get_footer(); 
