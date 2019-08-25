<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Radix Multipurpose
 */

get_header();
?>
<section class="blogs-main archives section">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-12">
				<div class="row">
					<?php
					if ( have_posts() ) :
					/* Start the Loop */
					while ( have_posts() ) :
						the_post();
					/*
					 * Include the Post-Type-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content', 'search' );
					endwhile;
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

			<div class="col-lg-4 col-12">
			<!-- Blog Sidebar -->
				<?php get_sidebar();?>
			<!--/ End Blog Sidebar -->
			</div>
		</div>
	</div>
</section>
<?php get_footer();
