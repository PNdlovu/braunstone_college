<?php 
$radix_multipurpose_frontpage_consulting_option = get_theme_mod( 'radix_multipurpose_frontpage_consulting_option', 'show' );
if( $radix_multipurpose_frontpage_consulting_option == 'show' ) :?>	
	<!-- Consulting -->
	<section id="consulting" class="consulting section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-12 wow fadeInLeft" data-wow-delay="0.4s">
					<div class="form-area">
						<?php $callback_title = get_theme_mod('radix_multipurpose_frontpage_request_callback_title_option');
							$query_post = get_post($callback_title );
						?>
						<h2><i class="fa fa-phone"></i><?php echo esc_html($query_post ->post_title);?></h2>
						<p><?php echo esc_html($query_post->post_content);?></p>
						<?php wp_reset_postdata();?>
						<!-- Consult Form -->
						<form class="form" action="#">
							<div class="row">
								<div class="col-12">
									<?php if (get_theme_mod('radix_multipurpose_callback_form_code')):
								  		echo do_shortcode(get_theme_mod('radix_multipurpose_callback_form_code'));
									endif; ?>	
							</div>
						</form>
						<!--/ End Consult Form -->
					</div>
				</div>
			</div>
		</div>
		<!-- Consult Right -->
		<div class="consult-right wow fadeInRight" data-wow-delay="0.6s">
			<div class="text-content">
				<?php $consulting_title = get_theme_mod('radix_multipurpose_frontpage_consulting_title_option');
					   $query_post = get_post($consulting_title );
				?>
				<h2><?php echo esc_html($query_post->post_title);?></h2>
				<p><?php echo esc_html($query_post->post_content);?></p>
				<?php wp_reset_postdata();?>
				<ul class="list">
					<?php radix_multipurpose_consulting_items();?>
				</ul>
			</div>	
		</div>	
		<!--/ End Consult Right -->
	</section>
		<!--/ End Consulting -->
<?php endif;?>		