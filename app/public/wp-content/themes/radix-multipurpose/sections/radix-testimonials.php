<?php 
$radix_multipurpose_frontpage_testimonials_option = get_theme_mod( 'radix_multipurpose_frontpage_testimonials_option', 'show' );
if( $radix_multipurpose_frontpage_testimonials_option == 'show' ) :?>	
	<!-- Testimonials -->
	<section id="testimonials" class="testimonials section">
		<div class="container">
			<div class="col-12 wow fadeInUp">
				<div class="section-title">
					<span class="title-bg"><?php echo esc_html(get_theme_mod('radix_multipurpose_frontpage_testimonials_bg_text_option'));?></span>
					<?php $testimonials_title = get_theme_mod('radix_multipurpose_frontpage_testimonials_title_option');
						$query_post = get_post($testimonials_title);
					?>
					<h1><?php echo esc_html($query_post->post_title);?></h1>
					<p><?php echo esc_html($query_post->post_content);?><p>
						<?php wp_reset_postdata();?>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-8 offset-lg-2 col-12">
						<div class="testimonial-nav">
							<?php radix_multipurpose_testimonials_post_thumbnail_items();?>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-10 offset-lg-1 col-12">
						<div class="testimonial-content">
								<?php radix_multipurpose_testimonials_content_items();?>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Testimonials -->
<?php endif;?>		