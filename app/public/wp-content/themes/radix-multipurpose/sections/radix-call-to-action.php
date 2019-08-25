<?php 
$radix_multipurpose_frontpage_call_to_action_option = get_theme_mod( 'radix_multipurpose_frontpage_call_to_action_option', 'show' );
if( $radix_multipurpose_frontpage_call_to_action_option == 'show' ) :?>
<!-- Call To Action -->
<?php $call_to_action_title = get_theme_mod('radix_multipurpose_frontpage_call_to_action_title_option');
$query_post = get_post($call_to_action_title);
$call_to_action_img_url = get_the_post_thumbnail_url( $call_to_action_title, 'radix-multipurpose-big-slider-thumb' );
?>
<section class="call-to-action section" data-stellar-background-ratio="0.5" style="background-image: url('<?php echo esc_url($call_to_action_img_url);?>');">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-12 wow fadeInUp">
				<div class="call-to-main">
					<h2><?php echo esc_html($query_post->post_title);?></h2>
					<p><?php echo esc_html($query_post->post_content);?></p>
					<?php if(get_theme_mod('radix_multipurpose_frontpage_call_to_action_button_url_option')):?>
						<?php wp_reset_postdata();?>
						<a href="<?php echo esc_url(get_theme_mod('radix_multipurpose_frontpage_call_to_action_button_url_option'));?>" class="btn"><?php echo esc_html(get_theme_mod('radix_multipurpose_frontpage_call_to_action_button_text_option'));?></a>
					<?php endif;?>
				</div>
			</div>
		</div>
	</div>
</section>
<!--/ End Call To Action -->
<?php endif;?>