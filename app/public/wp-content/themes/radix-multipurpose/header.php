<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Radix Multipurpose
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!-- Preloader -->
	<div class="preloader"></div>
	<!-- End Preloader -->
	<!-- Start Header -->
	<header id="header" class="header">
		<!-- Topbar -->
		<?php 
		$radix_multipurpose_top_header_option = get_theme_mod( 'radix_multipurpose_top_header_option', 'show' );
		if( $radix_multipurpose_top_header_option == 'show' ) :?>
			<div class="topbar">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-12">
							<!-- Contact -->
							<?php radix_multipurpose_top_header_items();?>
							<!--/ End Contact -->
						</div>
						<div class="col-lg-6 col-12">
							<div class="topbar-right">
								<!-- Search Form -->
								<?php $radix_multipurpose_header_search_option = get_theme_mod( 'radix_multipurpose_header_search_option', 'show' );
								if( $radix_multipurpose_header_search_option == 'show' ) :?>
									<div class="search-form active">
										<form class="form" method ="get" id="searchform" action="<?php echo esc_url(home_url('/'));?>">
											<input type="text" placeholder="<?php esc_attr_e('Search','radix-multipurpose');?> ..." value="<?php echo get_search_query(); ?>" name="s" aria-label="Search">
											<button class="icon" type="submit"><i class="fa fa-search"></i></button>
										</form>
									</div>
								<?php endif;?>
								<!--/ End Search Form -->
								<!-- Social -->
								<?php $radix_multipurpose_top_header_social_option = get_theme_mod( 'radix_multipurpose_top_header_social_option', 'show' );
								if( $radix_multipurpose_top_header_social_option == 'show' ) :?>
								<?php radix_multipurpose_social_media_content();?>
								<?php endif;?>
								<!--/ End Social -->
							</div>
						</div>
					</div>
				</div>	
			</div>
		<?php endif;?>		
		<!--/ End Topbar -->
		<!-- Middle Bar -->
		<div class="middle-bar">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 col-12">
						<!-- Logo -->
						<div class="logo">
							<?php
						if(has_custom_logo()):?>
							<?php the_custom_logo();?>
							<?php else: ?>	
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('name');?></a>
							<?php endif; ?>
						</div>
						<!--/ End Logo -->
						<button class="mobile-arrow"><i class="fa fa-bars"></i></button>
						<div class="mobile-menu"></div>
					</div>
					<div class="col-lg-10 col-12">
						<!-- Main Menu -->
						<div class="mainmenu">
							<nav class="navigation">
								<?php
									if ( has_nav_menu( 'primary' ) ) :
										wp_nav_menu( array(
									    'theme_location'    => 'primary',
									    'depth'             => 10,
									    'container_class'   => 'navigation',
									    'container_id'      => '',
									    'menu_class'        => 'nav menu',
									    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
				    					'walker'            => new wp_bootstrap_navwalker(),
						            ));
				        		?>
						        <?php else : ?>
		                			<ul class="nav menu">
		                    			<li>
		                   					 <a href="<?php echo esc_url(admin_url( 'nav-menus.php' )); ?> "> <?php esc_html_e('Add a menu','radix-multipurpose'); ?></a>
		                				</li>
		            				</ul>
		            			<?php endif; ?>
							</nav>
						</div>
						<!--/ End Main Menu -->
					</div>
				</div>
			</div>
		</div>
		<!--/ End Middle Bar -->
	</header>
	<!--/ End Header -->
<?php if( is_home() || !is_front_page()):?>
	<!-- Breadcrumbs -->
	<?php 
	$header_bg_img = get_header_image();
	if(!empty($header_bg_img)):?>
	<section class="breadcrumbs" data-stellar-background-ratio="0.5" style="background: url(<?php echo esc_url(get_header_image());?>)">
	<?php else:?>
		<section class="breadcrumbs" data-stellar-background-ratio="0.5">
	<?php endif;?>	
		<div class="container">
			<div class="row">
				<div class="col-12">

					<?php
				if ( is_archive() ) {
				the_archive_title( '<h2>', '</h2>' );
				}
				else{
					echo '<h2>';
				echo esc_html( get_the_title() );
				echo '</h2>';
				}?>
				<?php do_action( 'radix_multipurpose_breadcrumb' );		
				?>
				</div>
			</div>
		</div>
	</section>
	<!--/ End Breadcrumbs -->
<?php endif;?>

