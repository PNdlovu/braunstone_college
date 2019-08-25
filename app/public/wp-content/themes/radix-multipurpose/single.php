<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Radix Multipurpose
 */

get_header();
?>
<section class="blogs-main archives single section">
	<div class="container">
		<!-- Condition for left sidebar -->
		<?php if(get_theme_mod( 'radix_multipurpose_global_post_sidebar' ) == 'left_sidebar'):?>
			<div class="row">
				<div class="col-lg-4 col-12">
					<!-- Blog Sidebar -->
					<?php get_sidebar();?>
					<!--/ End Blog Sidebar -->
				</div>
				<div class="col-lg-8 col-12">
					<div class="row">
						<div class="col-12">
							<?php
							if ( have_posts() ) :
								/* Start the Loop */
								while ( have_posts() ) :
									the_post();?>
									
									<?php
									
									get_template_part( 'template-parts/content', 'single' );
									
									the_post_navigation();

									// If comments are open or we have at least one comment, load up the comment template.
									if ( comments_open() || get_comments_number() ) :
										comments_template();
								endif;
								?>
								
							<?php endwhile;?>
						</div>
						
						<?php
					else :
						get_template_part( 'template-parts/content', 'none' );
					endif;
					?>
				</div>
			</div>
		</div>

	<!--Condition for right sidebar  -->
	<?php elseif(get_theme_mod( 'radix_multipurpose_global_post_sidebar' ) == 'right_sidebar'):?>
		<div class="row">
			<div class="col-lg-8 col-12">
				<div class="row">
					<div class="col-12">
						<?php
						if ( have_posts() ) :
							/* Start the Loop */
							while ( have_posts() ) :
								the_post();?>
								
							<?php
							get_template_part( 'template-parts/content', 'single' );
							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
						endif;	
						?>
						
					<?php endwhile;?>

				</div>
				
				<?php
			else :
				get_template_part( 'template-parts/content', 'none' );
			endif;
			?>
		</div>
	</div>
	<div class="col-lg-4 col-12">
		<!-- Blog Sidebar -->
		<?php get_sidebar();?>
		<!--/ End Blog Sidebar -->
	</div>
</div>


<!-- Condition for no sidebar -->
<?php elseif(get_theme_mod( 'radix_multipurpose_global_post_sidebar' ) == 'no_sidebar'):?>
	<div class="row">
		<div class="col-12">
			
				<?php
				if ( have_posts() ) :
					/* Start the Loop */
					while ( have_posts() ) :
						the_post();
						?>
						<?php 
						
						get_template_part( 'template-parts/content', 'single' );
					// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
					endif;
					?>
				<?php	endwhile;?>
				<?php
			else :
				get_template_part( 'template-parts/content', 'none' );
			endif;
			?>
		
	</div>
</div>	

<?php else:?>
	<div class="row">
			<div class="col-lg-8 col-12">
				<div class="row">
					<div class="col-12">
						<?php
						if ( have_posts() ) :
							/* Start the Loop */
							while ( have_posts() ) :
								the_post();?>
								
							<?php
							get_template_part( 'template-parts/content', 'single' );
							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
						endif;	
						?>
						
					<?php endwhile;?>

				</div>
				
				<?php
			else :
				get_template_part( 'template-parts/content', 'none' );
			endif;
			?>
		</div>
	</div>
	<div class="col-lg-4 col-12">
		<!-- Blog Sidebar -->
		<?php get_sidebar();?>
		<!--/ End Blog Sidebar -->
	</div>
</div>
<?php endif;?>
</div>
</section>
<?php
get_footer();
