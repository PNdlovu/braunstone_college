<?php 
$radix_multipurpose_frontpage_contact_option = get_theme_mod( 'radix_multipurpose_frontpage_contact_option', 'show' );
if( $radix_multipurpose_frontpage_contact_option == 'show' ) :?>
	<!-- Start Contact -->
	<section id="contact-us" class="contact-us section">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section-title">
						<span class="title-bg"><?php echo esc_html(get_theme_mod('radix_multipurpose_frontpage_contact_bg_text_option'));?></span>
						<?php
						$contact_title = get_theme_mod('radix_multipurpose_frontpage_contact_title_option');
						$queried_post = get_post($contact_title);
						?>
						<h1><?php echo esc_html($queried_post->post_title); ?></h1>
						<p><?php echo esc_html($queried_post->post_content); ?><p>
							<?php wp_reset_postdata(); ?>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="contact-main">
							<div class="row">
								<!-- Contact Form -->
								<div class="col-lg-8 col-12">
									<div class="form-main">
										<div class="text-content">
											<h2><?php echo esc_html(get_theme_mod('radix_multipurpose_frontpage_contact_title_text_option'));?></h2>
										</div>
										<form class="form" method="post">
											<div class="row">
												<?php if (get_theme_mod('radix_multipurpose_frontpage_contact_form_option')):
													echo do_shortcode(get_theme_mod('radix_multipurpose_frontpage_contact_form_option'));
												endif; ?>	
											</div>
										</form>
									</div>
								</div>
								<!--/ End Contact Form -->
								<!-- Contact Address -->
								<div class="col-lg-4 col-12">
									<div class="contact-address">
										<!-- Address -->
										<div class="contact">
											<h2><?php echo esc_html(get_theme_mod('radix_multipurpose_frontpage_contact_address_title_text_option'));?></h2>
											<ul class="address">
												<?php radix_multipurpose_contact_address_items();?>
											</ul>
										</div>
										<!--/ End Address -->
										<!-- Social -->
										<ul class="social">
											<?php radix_multipurpose_contact_social_items();?>
										</ul>
										<!--/ End Social -->
									</div>
								</div>
								<!--/ End Contact Address -->
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="map-main">
							<div id="myMap">
								<?php if ( is_active_sidebar( 'google-map' ) ) { ?>
									<?php dynamic_sidebar( 'google-map' );?>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Contact -->
		<?php endif;?>