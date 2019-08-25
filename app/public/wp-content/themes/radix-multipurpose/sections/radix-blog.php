<?php 
$radix_multipurpose_frontpage_blog_option = get_theme_mod( 'radix_multipurpose_frontpage_blog_option', 'show' );
if( $radix_multipurpose_frontpage_blog_option == 'show' ) :?>
	<!-- Blogs Area -->
	<section id="blogs" class="blogs-main section">
		<div class="container">
			<div class="row">
				<div class="col-12 wow fadeInUp">
					<div class="section-title">
						<span class="title-bg"><?php echo esc_html(get_theme_mod('radix_multipurpose_frontpage_blog_bg_text_option'));?></span>
						<?php
						$blog_title = get_theme_mod('radix_multipurpose_frontpage_blog_title_option');
						$queried_post = get_post($blog_title);
						?>
						<h1><?php echo esc_html($queried_post->post_title); ?></h1>
						<p><?php echo esc_html($queried_post->post_content); ?><p>
							<?php wp_reset_postdata(); ?>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="row blog-slider">
							<?php
							$blog_catId = esc_attr(get_theme_mod( 'radix_multipurpose_blog_category_id'));
							$blog_catLink = get_category_link($blog_catId);
							$blog_CatName = get_category($blog_catId);
							$blog_number = get_theme_mod('radix_multipurpose_blog_number');
							$args = array(
								'post_type' => 'post',
								'posts_per_page' => $blog_number,
								'post_status' => 'publish',
								'cat' => $blog_catId,

							);

							$blogloop = new WP_Query($args);
							if ( $blogloop->have_posts() ) :
								while ($blogloop->have_posts()) : 
									$blogloop->the_post(); 
									?>
									<div class="col-lg-4 col-12">
										<!-- Single Blog -->
										<div class="single-blog">
											<div class="blog-head">
												<?php the_post_thumbnail( 'radix-multipurpose-blog-thumb' );?>
											</div>
											<div class="blog-bottom">
												<div class="blog-inner">
													<h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
														<?php the_content();?>
													<div class="meta">
														<span><i class="fa fa-bolt"></i><?php the_category( ',');?></span>
														<span><i class="fa fa-calendar"></i><?php echo get_the_date( 'F j, Y'); ?></span>
													</div>
												</div>
											</div>
										</div>
										<!-- End Single Blog -->
									</div>
								<?php endwhile;
							endif;
							wp_reset_postdata();
							?>			
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Blogs Area -->
		<?php endif;?>