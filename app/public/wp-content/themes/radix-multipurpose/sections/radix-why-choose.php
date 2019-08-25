<?php 
$radix_multipurpose_frontpage_why_choose_us_option = get_theme_mod( 'radix_multipurpose_frontpage_why_choose_us_option', 'show' );
if( $radix_multipurpose_frontpage_why_choose_us_option == 'show' ) :?>	
	<!-- Why Choose Us -->
	<section id="why-choose" class="why-choose section">
		<div class="container-fluid fix">
			<div class="row fix">
				<div class="col-lg-6 col-md-6 col-12 fix">
					<?php $why_choose_title = get_theme_mod('radix_multipurpose_frontpage_why_choose_us_title_option');
					$query_post =  get_post($why_choose_title);
					$why_choose_img_url = get_the_post_thumbnail_url($why_choose_title,'radix-multipurpose-why-choose-thumb');
					if( !empty( $why_choose_img_url ) ) :
						?>

						<div class="why-video" style="background-image: url('<?php echo esc_url($why_choose_img_url);?>');">
							<!-- Video -->
							<div class="video wow zoomIn">
								<a href="<?php echo esc_url(get_theme_mod( 'radix_multipurpose_frontpage_why_choose_us_vedio_option' ));?>" class="btn video-popup mfp-fade"><i class="fa fa-play"></i></a>
								<p><?php echo esc_html(get_theme_mod( 'radix_multipurpose_frontpage_why_choose_us_vedio_text_option' ));?></p>
							</div>
							<!--/ End Video -->
						</div>
					<?php endif;?>	
					</div>		
					<div class="col-lg-6 col-md-6 col-12 fix">
						<!-- Choose Main -->
						<div class="choose-main">
							<div class="working-process">
								<h2><?php echo esc_html($query_post->post_title);?></h2>
								<p><?php echo esc_html($query_post->post_content);?></p>
								<?php wp_reset_postdata();?>
							</div>
							<?php radix_multipurpose_why_choose_items();?>
						</div>
						<!--/ End Choose Main -->
					</div>			
				</div>
			</div>
		</section>	
		<!--/ End Why Choose Us -->
		<?php endif;?>		