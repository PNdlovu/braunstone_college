<?php 
$radix_multipurpose_frontpage_what_we_provide_option = get_theme_mod( 'radix_multipurpose_frontpage_what_we_provide_option', 'show' );
if( $radix_multipurpose_frontpage_what_we_provide_option == 'show' ) :?>
<!-- Services -->
		<section id="services" class="services section">
			<div class="container">
				<div class="row">
					<div class="col-12 wow fadeInUp">
						<div class="section-title">
							<?php $service_bg_text = get_theme_mod('radix_multipurpose_frontpage_what_we_provide_bg_text_option'); 
								$service_title = get_theme_mod('radix_multipurpose_frontpage_what_we_provide_title_option');
								$query_post = get_post($service_title);
							?>
							<span class="title-bg"><?php echo esc_html($service_bg_text);?></span>
							<h1><?php echo esc_html($query_post->post_title);?></h1>
							<p><?php echo esc_html($query_post->post_content);?><p>
							<?php wp_reset_postdata();?>	
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="service-slider">
							<!-- Single Service -->
							<?php radix_multipurpose_what_we_do_items()?>
							<!-- End Single Service -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Services -->
<?php endif;?>		