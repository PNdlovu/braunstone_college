<?php
/**
* The main template file
*
* This is the most generic template file in a WordPress theme
* and one of the two required files for a theme (the other being style.css).
* It is used to display a page when nothing more specific matches a query.
* E.g., it puts together the home page when no home.php file exists.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package Radix Multipurpose
*/

get_header();
?>

<section class="blogs-main archives section">
	<div class="container">
		<!-- Condition for left sidebar -->
		<?php if(get_theme_mod( 'radix_multipurpose_archive_sidebar' ) == 'left_sidebar'):?>
			<div class="row">
				<div class="col-lg-4 col-12">
					<!-- Blog Sidebar -->
					<?php get_sidebar();?>
					<!--/ End Blog Sidebar -->
				</div>
				<div class="col-lg-8 col-12">
					<div class="row">
						<?php
						if ( have_posts() ) :
							/* Start the Loop */
							while ( have_posts() ) :
								the_post();?>
								<div class="col-lg-6 col-12">
									<?php
									get_template_part( 'template-parts/content', 'archive' );?>
								</div>
							<?php endwhile;
							the_posts_navigation();
							?>
							<?php
						else :
							get_template_part( 'template-parts/content', 'none' );
						endif;
						?>
					</div>
					<div class="row">
						<div class="col-12">
							<!-- Start Pagination -->
							<div class="pagination-main">
								<?php radix_multipurpose_pagination();?>
							</div>
							<!--/ End Pagination -->
						</div>
					</div>	
					
				</div>
			</div>
			
			<!--Condition for right sidebar  -->
			<?php elseif(get_theme_mod( 'radix_multipurpose_archive_sidebar' ) == 'right_sidebar'):?>
				<div class="row">
					<div class="col-lg-8 col-12">
						<div class="row">
							<?php
							if ( have_posts() ) :
								/* Start the Loop */
								while ( have_posts() ) :
									the_post();?>
									<div class="col-lg-6 col-12">
										<?php
										get_template_part( 'template-parts/content', 'archive' );?>
									</div>
								<?php endwhile;?>
								<?php
							else :
								get_template_part( 'template-parts/content', 'none' );
							endif;
							?>

						</div>
						<div class="row">
							<div class="col-12">
								<!-- Start Pagination -->
								<div class="pagination-main">
									<?php radix_multipurpose_pagination();?>
								</div>
								<!--/ End Pagination -->
							</div>
						</div>	

					</div>
					<div class="col-lg-4 col-12">
						<!-- Blog Sidebar -->
						<?php get_sidebar();?>
						<!--/ End Blog Sidebar -->
					</div>
				</div>
				

				<!-- Condition for no sidebar -->
				<?php elseif(get_theme_mod( 'radix_multipurpose_archive_sidebar' ) == 'no_sidebar'):?>
					<div class="row">
						<?php
						if ( have_posts() ) :
							/* Start the Loop */
							while ( have_posts() ) :
								the_post();
								?>
								<div class="col-lg-4 col-md-6 col-12">
									<?php 
									get_template_part( 'template-parts/content', 'archive' );?>
								</div>
							<?php	endwhile;?>
							<?php
						else :
							get_template_part( 'template-parts/content', 'none' );
						endif;
						?>
					</div>	
					<div class="row">
						<div class="col-12">
							<!-- Start Pagination -->
							<div class="pagination-main">
								<?php radix_multipurpose_pagination();?>
							</div>
							<!--/ End Pagination -->
						</div>
					</div>
					<?php else:?>
						<div class="row">
							<div class="col-lg-8 col-12">
								<div class="row">
									<?php
									if ( have_posts() ) :
										/* Start the Loop */
										while ( have_posts() ) :
											the_post();?>
											<div class="col-lg-6 col-12">
												<?php
												get_template_part( 'template-parts/content', 'archive' );?>
											</div>
										<?php endwhile;?>
										<?php
									else :
										get_template_part( 'template-parts/content', 'none' );
									endif;
									?>

								</div>
								<div class="row">
									<div class="col-12">
										<!-- Start Pagination -->
										<div class="pagination-main">
											<?php radix_multipurpose_pagination();?>
										</div>
										<!--/ End Pagination -->
									</div>
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
