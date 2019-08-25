<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Radix Multipurpose
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="col-12">
	<!-- Single Blog -->
	<div class="single-blog">
		<div class="blog-head">
			<?php the_post_thumbnail(); ?>
		</div>
		<div class="blog-bottom">
			<div class="blog-inner">
				<?php
				if ( is_singular() ) :
					the_title( '<h4 class="entry-title">', '</h4>' );
				else :
					the_title( '<h4 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' );
				endif;?>
			<?php the_excerpt();?>
				<div class="meta">
					<span><i class="fa fa-bolt"></i><a href="#"><?php radix_multipurpose_posted_by();?></a></span>
					<span><i class="fa fa-calendar"></i><?php the_date( 'j F, Y');?></span>
					<span><i class="fa fa-heart-o"></i><a href="<?php the_permalink();?>"><?php echo esc_html(get_comments_number());?></a></span>
				</div>
			</div>
		</div>
	</div>
	<!-- End Single Blog -->
</div>
</article>