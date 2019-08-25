<?php 
$radix_multipurpose_frontpage_achievements_option = get_theme_mod( 'radix_multipurpose_frontpage_achievements_option', 'show' );
if( $radix_multipurpose_frontpage_achievements_option == 'show' ) :?>
<!-- Fun Facts -->
<section id="fun-facts" class="fun-facts section">
	<div class="container">	
		<div class="row">
			<div class="col-lg-5 col-12 wow fadeInLeft" data-wow-delay="0.5s">
				<div class="text-content">
					<div class="section-title">
						<?php $achievements_title = get_theme_mod('radix_multipurpose_frontpage_achievements_title_option');
							$achievement_button_text = get_theme_mod( 'radix_multipurpose_frontpage_achievements_button_text_option' );
							$achievement_button_url = get_theme_mod( 'radix_multipurpose_frontpage_achievements_button_url_option' );
						?>
						<h1><span><?php echo esc_html($achievements_title);?></span>
						<?php $achievements_subtitle = get_theme_mod('radix_multipurpose_frontpage_achievements_subtitle_option');
							$query_post =  get_post($achievements_subtitle);
							echo esc_html($query_post->post_title);	
							?>	
						 </h1>
						<p><?php echo esc_html($query_post->post_content);?></p>
						<a href="<?php echo esc_url($achievement_button_url);?>" class="btn primary"><?php echo esc_html($achievement_button_text);?></a>
					</div>
				</div>
			</div>
			<div class="col-lg-7 col-12">
				<div class="row">	
					<?php radix_multipurpose_achievement_counter_items();?>
				</div>
			</div>
		</div>
	</div>
</section>
<!--/ End Fun Facts -->
<?php endif;?>
