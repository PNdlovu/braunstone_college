<?php 
$radix_multipurpose_frontpage_portfolio_option = get_theme_mod( 'radix_multipurpose_frontpage_portfolio_option', 'show' );
if( $radix_multipurpose_frontpage_portfolio_option == 'show' ) :?>
<!-- Portfolio -->
		<section id="portfolio" class="portfolio section">
			<div class="container">
				<div class="row">
					<div class="col-12 wow fadeInUp">
						<div class="section-title">
							<span class="title-bg"><?php echo esc_html(get_theme_mod('radix_multipurpose_frontpage_portfolio_bg_text_option'));?></span>
							<?php 
							$project_title = get_theme_mod('radix_multipurpose_frontpage_portfolio_title_option');
							$queried_post = get_post($project_title);
							?>
							<h1><?php echo esc_html($queried_post->post_title); ?></h1>
							<p><?php echo esc_html($queried_post->post_content); ?><p>
							<?php wp_reset_postdata(); ?>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<!-- portfolio Nav -->
						<div class="portfolio-nav">
							<ul class="tr-list list-inline" id="portfolio-menu">
							<?php 
								$project_category_id = get_theme_mod( 'radix_multipurpose_project_category_id' );
								$args = array('child_of' =>$project_category_id);
								$categories = get_categories( $args );?>
									<li data-filter="*" class="cbp-filter-item active" id="all"><?php esc_html_e('All','radix-multipurpose');?><div class="cbp-filter-counter"></div>
									</li>  
								<?php
								foreach($categories as $category):?>
									<li data-filter=".<?php echo esc_attr($category->slug);?>" class="cbp-filter-item cbp-click-item"><?php echo esc_html($category->name);?><div class="cbp-filter-counter"></div></li>
								<?php endforeach;?>
							</ul>  		
						</div>
						<!--/ End portfolio Nav -->
					</div>
				</div>
				<div class="portfolio-inner">
					<div class="row">	
						<div class="col-12">	
							<div id="portfolio-item">
								<?php 
					    $sub_cats = get_categories('parent=' . $project_category_id);
					    if( $sub_cats ) :
					        foreach( $sub_cats as $sub_cat ) :
					            $sub_query = new WP_Query( array(
					                'category__in' => array( $sub_cat->term_id ),
					                'posts_per_page' => 6)
					            );
					            if ( $sub_query->have_posts() ) :
					                while( $sub_query->have_posts() ) : $sub_query->the_post();?>
								<!-- Single portfolio -->
								<div class="cbp-item <?php echo  esc_attr($sub_cat->slug);?>">
									<div class="portfolio-single">
										<div class="portfolio-head">
											<?php the_post_thumbnail('radix-multipurpose-project-thumb');?>
										</div>
										<div class="portfolio-hover">
											<h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
											<?php the_excerpt();?>	
											<div class="button">
												<a class="primary" data-fancybox="gallery" href="<?php echo esc_url(get_the_post_thumbnail_url());?>"><i class="fa fa-search"></i></a>
												<a href="<?php the_permalink();?>"><i class="fa fa-link"></i></a>
											</div>
										</div>
									</div>
								</div>
								<!--/ End portfolio -->	
								<?php endwhile;
					            endif;
					        endforeach;
					    endif;
					?>
							</div>
						</div> 
						<div id="loadMore" class="col-12 cbp-l-loadMore-button all">
							<div class="button load-button">
								<a class="btn primary" href="<?php echo esc_url(get_category_link( $project_category_id ));?>"><?php esc_html_e( 'More Portfolio','radix-multipurpose' );?></a>
							</div>
						</div>
						<?php foreach($categories as $category):?>
						<div id="loadMore" class="cbp-l-loadMore-button  col-12 <?php echo esc_attr($category->slug);?> category-loadmore-button">
							<div class="load-button button">
								<a class="btn primary" href="<?php echo esc_url(get_category_link( $category->term_id ));?>"><?php esc_html_e( 'More Portfolio','radix-multipurpose' );?></a>
							</div>
						</div>
						<?php endforeach;?>
					</div>
				</div>
			</div>
		</section>
		<!--/ End portfolio -->
<?php endif;?>		