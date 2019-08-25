<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Radix Multipurpose
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<!-- Single Blog -->
<div class="single-blog">
	<div class="blog-head">
		<?php the_post_thumbnail(); ?>
	</div>
	<div class="blog-inner">
		<div class="blog-top">
			<div class="meta">
				<div class="meta">
					<span><i class="fa fa-bolt"></i><a href="#"><?php radix_multipurpose_posted_by();?></a></span>
					<span><i class="fa fa-calendar"></i><?php the_date( 'j F, Y');?></span>
					<span><i class="fa fa-heart-o"></i><a href="<?php the_permalink();?>"><?php echo esc_html(get_comments_number());?></a></span>
				</div>
			</div>
		</div>
		<?php
				if ( is_singular() ) :
					the_title( '<h2 class="entry-title">', '</h2>' );
				else :
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif;?>
			<?php the_content();?>	
			<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'radix-multipurpose' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
	</div>
</div>
<!-- End Single Blog -->
</article><!-- #post-<?php the_ID(); ?> -->
