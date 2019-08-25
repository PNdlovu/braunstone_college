<?php 
$radix_multipurpose_frontpage_slider_option = get_theme_mod( 'radix_multipurpose_frontpage_slider_option', 'show' );
if( $radix_multipurpose_frontpage_slider_option == 'show' ) :?>
<!-- Hero Area -->
<section id="hero-area" class="hero-area">
	<!-- Slider -->
	<div class="slider-area">
		<!-- Single Slider -->
		<?php radix_multipurpose_frontpage_slider_items();?>
		<!--/ End Single Slider -->
	</div>
	<!--/ End Slider -->
</section>
<!--/ End Hero Area -->
<?php endif;?>	