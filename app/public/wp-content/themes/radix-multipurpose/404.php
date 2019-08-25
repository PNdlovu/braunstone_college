<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Radix Multipurpose
 */

get_header();
?>
<section class="error-page section">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 offset-lg-3 col-12">
				<!-- Error Inner -->
				<div class="error-inner">
					<h1>404<span><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'radix-multipurpose' ); ?></span></h1>
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'radix-multipurpose' ); ?></p>
					<form role="search" method ="get" id="searchform" action="<?php echo esc_url(home_url('/'));?>" class="form search-form">
						<input type="text" value="" name="<?php esc_attr_e( 's', 'radix-multipurpose' );?>" id="<?php esc_attr_e( 's', 'radix-multipurpose' );?>" placeholder="<?php the_search_query();?>">
						<button type="submit" class="btn"><i class="fa fa-search"></i></button>
					</form>
				</div>
				<!--/ End Error Inner -->
			</div>
		</div>
	</div>
</section>	
<?php
get_footer();
