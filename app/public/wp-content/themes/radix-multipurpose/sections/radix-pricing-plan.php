<?php 
$radix_multipurpose_frontpage_plan_option = get_theme_mod( 'radix_multipurpose_frontpage_plan_option', 'show' );
if( $radix_multipurpose_frontpage_plan_option == 'show' ) :?>	
<!-- Pricing -->
<section id="pricing-plan" class="pricing-plan section">
	<div class="container">
		<div class="row">
			<div class="col-12 wow fadeInUp">
				<div class="section-title">
					<span class="title-bg"><?php echo esc_html(get_theme_mod('radix_multipurpose_frontpage_plan_bg_text_option'));?></span>
						<?php $plan_title= get_theme_mod('radix_multipurpose_frontpage_plan_title_option');
						  $query_post = get_post($plan_title);	
						?>
					<h1><?php echo esc_html($query_post->post_title);?></h1>
					<p><?php echo esc_html($query_post->post_content);?><p>
					</div>
				</div>
			</div>
			<div class="row">
				<!-- Single Table -->
					<?php if ( is_active_sidebar( 'our-plan-widget' ) ) { ?>
					<?php dynamic_sidebar( 'our-plan-widget' );?>
					<?php } ?>
				<!-- End Single Table-->
			</div>	
		</div>	
	</section>	
		<!--/ End Pricing -->
<?php endif;?>