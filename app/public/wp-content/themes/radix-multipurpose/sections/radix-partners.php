<?php 
$radix_multipurpose_frontpage_client_option = get_theme_mod( 'radix_multipurpose_frontpage_client_option', 'show' );
if( $radix_multipurpose_frontpage_client_option == 'show' ) :?>
	<!-- Partners -->
	<section id="partners" class="partners section">
		<div class="container">
			<div class="row">
				<div class="col-12 wow fadeInUp">
					<div class="section-title">
						<span class="title-bg"><?php echo esc_html(get_theme_mod('radix_multipurpose_frontpage_client_bg_text_option'));?></span>
						<?php
						$client_title = get_theme_mod('radix_multipurpose_frontpage_client_title_option');
						$queried_post = get_post($client_title);
						?>
						<h1><?php echo esc_html($queried_post->post_title); ?></h1>
						<p><?php echo esc_html($queried_post->post_content); ?><p>
							<?php wp_reset_postdata(); ?>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="partners-inner">
							<div class="row no-gutters">
								<!-- Single Partner -->
								<?php
							$client_catId = esc_attr(get_theme_mod( 'radix_multipurpose_client_category_id'));
							$client_catLink = get_category_link($client_catId);
							$client_CatName = get_category($client_catId);
							$client_number = get_theme_mod('radix_multipurpose_client_number');
							$args = array(
								'post_type' => 'post',
								'posts_per_page' => $client_number,
								'post_status' => 'publish',
								'cat' => $client_catId,

							);

							$clientloop = new WP_Query($args);
							if ( $clientloop->have_posts() ) :
								while ($clientloop->have_posts()) : 
									$clientloop->the_post(); 
									?>
								<div class="col-lg-2 col-md-3 col-12">
									<div class="single-partner">
										<a href="<?php the_permalink();?>" target="_blank"><?php the_post_thumbnail( 'radix-multipurpose-client-thumb' );?></a>
									</div>
								</div>
								<!--/ End Single Partner -->
							<?php endwhile;
							endif;
							wp_reset_postdata();
							?>			
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Partners -->
<?php endif;?>		