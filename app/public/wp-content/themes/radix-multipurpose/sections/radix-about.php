<!-- About Us -->
<section id="about" class="about-us section">
	<div class="container">
		<?php 
		$radix_multipurpose_frontpage_about_option = get_theme_mod( 'radix_multipurpose_frontpage_about_option', 'show' );
		if( $radix_multipurpose_frontpage_about_option == 'show' ) :?>
			<div class="row">
				<div class="col-12">
					<div class="section-title">
						<span class="title-bg"><?php bloginfo( 'name' );?></span>
						<?php
						$about_section_title = get_theme_mod('radix_multipurpose_frontpage_about_section_option');
						$queried_post = get_post($about_section_title);
						?>
						<h1><?php echo esc_html($queried_post->post_title); ?></h1>
						<p><?php echo esc_html($queried_post->post_content); ?><p>
							<?php wp_reset_postdata(); ?>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-12">
						<!-- Video -->
						<?php
						$about_title = get_theme_mod('radix_multipurpose_frontpage_about_title_option');
						$queried_post = get_post($about_title );
						$about_vedio_link = get_theme_mod( 'radix_multipurpose_frontpage_about_vedio_option' );
						$about_img_url = get_the_post_thumbnail_url($about_title);
						?>
						<?php if( $about_img_url): ?>
							<div class="about-video">
								<div class="single-video overlay">
									<a href="<?php echo esc_url($about_vedio_link);?>" class="video-popup mfp-fade"><i class="fa fa-play"></i></a>
									<img src="<?php echo esc_url($about_img_url);?>" alt="#">
								</div>
							</div>
							<!--/ End Video -->
						<?php endif;?>
					</div>
					<div class="col-lg-6 col-12">
						<!-- About Content -->
						<div class="about-content">
							<h2><?php echo esc_html($queried_post->post_title); ?></h2>
							<p><?php echo esc_html($queried_post->post_content); ?></p>
							<?php wp_reset_postdata(); ?>
						</div>
						<!--/ End About Content -->
					</div>
				</div>
				<?php 
			endif;?>

			<?php 
			$radix_multipurpose_frontpage_skill_option = get_theme_mod( 'radix_multipurpose_frontpage_skill_option', 'show' );
			if( $radix_multipurpose_frontpage_skill_option == 'show' ) :?>
				<div class="row">
					<div class="col-12">
						<div class="progress-main">
							<div class="row">
								<?php radix_multipurpose_skill_items();?>
							</div>
						</div>
					</div>
				</div>
			<?php endif;?>
		</div>
	</section>
<!--/ End About Us -->