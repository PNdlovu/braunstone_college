<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Radix Multipurpose
 */

?>
<!-- Footer -->
<footer id="footer" class="footer">
	<!-- Top Arrow -->
	<div class="top-arrow">
		<a href="#header" class="btn"><i class="fa fa-angle-up"></i></a>
	</div>
	<!--/ End Top Arrow -->
	<!-- Footer Top -->
	<div class="footer-top">
		<div class="container">
			<div class="row">
				<?php if ( is_active_sidebar( 'footer-widget' ) ) { ?>
					<?php dynamic_sidebar( 'footer-widget' );?>
					<?php } ?>
					
			</div>
		</div>
	</div>
	<!--/ End Footer Top -->
	<!-- Footer Bottom -->
	<div class="footer-bottom">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="bottom-top">
						<!-- Social -->
						<?php $radix_multipurpose_top_footer_social_option = get_theme_mod( 'radix_multipurpose_top_footer_social_option', 'show' );
						if( $radix_multipurpose_top_footer_social_option == 'show' ) :?>
						<?php radix_multipurpose_social_media_content();?>
						<?php endif;?>
						<!--/ End Social -->
						<!-- Copyright -->
						<div class="copyright">
							<?php esc_html_e('&copy; All Right Reserved ','radix-multipurpose');  echo  esc_html(date('Y'));?> <?php esc_html(bloginfo('name')); ?>
						</div>
						<!--/ End Copyright -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--/ End Footer Bottom -->
</footer>
<!--/ End footer -->
<?php wp_footer(); ?>

</body>
</html>
