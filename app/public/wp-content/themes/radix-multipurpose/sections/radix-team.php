<?php 
$radix_multipurpose_frontpage_team_option = get_theme_mod( 'radix_multipurpose_frontpage_team_option', 'show' );
if( $radix_multipurpose_frontpage_team_option == 'show' ) :?>	
	<!-- Start Team -->
	<section id="team" class="team section">
		<div class="container">
			<div class="row">
				<div class="col-12 wow fadeInUp" data-wow-delay="0.2s">
					<div class="section-title">
						<span class="title-bg"><?php echo esc_html(get_theme_mod('radix_multipurpose_frontpage_team_bg_text_option'));?></span>
						<?php $team_title = get_theme_mod('radix_multipurpose_frontpage_team_title_option');
							  $query_post = get_post($team_title);	
						?>
						<h1><?php echo esc_html($query_post->post_title);?></h1>
						<p><?php echo esc_html($query_post->post_content);?><p>
						</div>
					</div>
				</div>
				<div class="row">
					<?php radix_multipurpose_team_items();?>
				</div>
			</div>
		</section>
		<!--/ End Team -->
<?php endif;?>		