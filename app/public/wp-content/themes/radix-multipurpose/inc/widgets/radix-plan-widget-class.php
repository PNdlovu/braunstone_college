<?php 
if( !class_exists('Radix_Multipurpose_Plan_Widget')){
	class Radix_Multipurpose_Plan_Widget extends WP_Widget{
		// setup the widget name, description etc.

		public function __construct(){
			$widget_ops =  array('
				classname' => 'radix-multipurpose-plan-widget',
				'description' => 'Custom Plan widget'
			);

			parent::__construct( 'radix_multipurpose_plan','Our Plan Widget',$widget_ops);
		}

		public function widget( $arg, $instance){?>
			<?php
			$p_table_price  = isset( $instance['p_table_price'] ) ? esc_attr( $instance['p_table_price'] ) : '';
			$p_table_price_time  = isset( $instance['p_table_price_time'] ) ? esc_attr( $instance['p_table_price_time'] ) : '';
			$p_table_title  = isset( $instance['p_table_title'] ) ? esc_attr( $instance['p_table_title'] ) : '';
			$p_table_feature_1 = isset( $instance['p_table_feature_1'] ) ? esc_attr( $instance['p_table_feature_1'] ) : '';
			$p_table_feature_2 = isset( $instance['p_table_feature_2'] ) ? esc_attr( $instance['p_table_feature_2'] ) : '';
			$p_table_feature_3 = isset( $instance['p_table_feature_3'] ) ? esc_attr( $instance['p_table_feature_3'] ) : '';
			$p_table_feature_4 = isset( $instance['p_table_feature_4'] ) ? esc_attr( $instance['p_table_feature_4'] ) : '';
			$p_table_feature_5 = isset( $instance['p_table_feature_5'] ) ? esc_attr( $instance['p_table_feature_5'] ) : '';
			$p_table_feature_6 = isset( $instance['p_table_feature_6'] ) ? esc_attr( $instance['p_table_feature_6'] ) : '';
			$p_table_link 	= isset( $instance['p_table_link'] ) ? esc_attr( $instance['p_table_link'] ) : '';
			$p_table_text 	= isset( $instance['p_table_text'] ) ? esc_attr( $instance['p_table_text'] ) : '';?>
			<div class="col-lg-4 col-12 wow fadeInUp" data-wow-delay="0.4s">
				<!-- Single Table -->
				<div class="single-table">
					<!-- Table Head -->
					<div class="table-head">
						<h2 class="title"><?php echo esc_html( $p_table_title );?></h2>
						<div class="price">
							<p class="amount"><span class="currency">$</span><?php echo absint( $p_table_price);?><span>/<?php echo esc_html($p_table_price_time);?></span></p>
						</div>	
					</div>
					<!--/ End Table Head -->
					<!-- Table List -->
					<ul class="table-list">	
						<li><?php echo esc_html($p_table_feature_1);?></li>
						<li><?php echo esc_html($p_table_feature_2);?></li>
						<li><?php echo esc_html($p_table_feature_3);?></li>
						<li><?php echo esc_html($p_table_feature_4);?></li>
						<li><?php echo esc_html($p_table_feature_5);?></li>
						<li><?php echo esc_html($p_table_feature_6);?></li>
					</ul>
					<!--/ End Table List -->
					<!-- Table Bottom -->
					<div class="table-bottom">
						<a class="btn" href="<?php echo esc_url($p_table_link);?>"><?php echo esc_html($p_table_text);?></a>
					</div>
					<!-- Table Bottom -->
				</div>
				<!-- End Single Table-->
			</div>

		<?php }

		function update( $new_instance, $old_instance ) {
			$instance = $old_instance;
			$instance[ 'p_table_price' ] = strip_tags( $new_instance[ 'p_table_price' ] );
			$instance[ 'p_table_price_time' ] = strip_tags( $new_instance[ 'p_table_price_time' ] );
			$instance[ 'p_table_title' ] = strip_tags( $new_instance[ 'p_table_title' ] );
			$instance[ 'p_table_feature_1' ] = strip_tags( $new_instance[ 'p_table_feature_1' ] );
			$instance[ 'p_table_feature_2' ] = strip_tags( $new_instance[ 'p_table_feature_2' ] );
			$instance[ 'p_table_feature_3' ] = strip_tags( $new_instance[ 'p_table_feature_3' ] );
			$instance[ 'p_table_feature_4' ] = strip_tags( $new_instance[ 'p_table_feature_4' ] );
			$instance[ 'p_table_feature_5' ] = strip_tags( $new_instance[ 'p_table_feature_5' ] );
			$instance[ 'p_table_feature_6' ] = strip_tags( $new_instance[ 'p_table_feature_6' ] );
			$instance[ 'p_table_link' ] = strip_tags( $new_instance[ 'p_table_link' ] );
			$instance[ 'p_table_text' ] = strip_tags( $new_instance[ 'p_table_text' ] );

			return $instance;
		}
// Backend Widget form creation
		function form($instance) {

			$p_table_price	= '';
			$p_table_price_time	= '';
			$p_table_title	= '';
			$p_table_feature_1 = '';
			$p_table_feature_2 = '';
			$p_table_feature_3 = '';
			$p_table_feature_4 = '';
			$p_table_feature_5 = '';
			$p_table_feature_6 = '';
			$p_table_link = '';
			$p_table_text = '';
			if( $instance) {
				$p_table_price = esc_textarea($instance['p_table_price']);
				$p_table_price_time = esc_textarea($instance['p_table_price_time']);
				$p_table_title = esc_textarea($instance['p_table_title']);
				$p_table_feature_1 = esc_textarea($instance['p_table_feature_1']);

				$p_table_feature_2 = esc_textarea($instance['p_table_feature_2']);

				$p_table_feature_3 = esc_textarea($instance['p_table_feature_3']);

				$p_table_feature_4 = esc_textarea($instance['p_table_feature_4']);

				$p_table_feature_5 = esc_textarea($instance['p_table_feature_5']);

				$p_table_feature_6 = esc_textarea($instance['p_table_feature_6']);

				$p_table_link = esc_url($instance['p_table_link']);
				$p_table_text = esc_textarea($instance['p_table_text']);
			} 
			?>	

			<p>
				<label for="<?php echo esc_attr( $this->get_field_id('p_table_title') ); ?>"><?php esc_html_e('Title', 'radix-multipurpose'); ?></label>
				<input class="widefat" id="<?php echo esc_attr( $this->get_field_id('p_table_title') ); ?>" name="<?php echo esc_attr( $this->get_field_name('p_table_title') ); ?>" type="text" value="<?php echo esc_attr( $p_table_title );?>"/>
			</p>

			<p>
				<label for="<?php echo esc_attr( $this->get_field_id('p_table_price') ); ?>"><?php esc_html_e('Price', 'radix-multipurpose'); ?></label>
				<input class="widefat" id="<?php echo esc_attr( $this->get_field_id('p_table_price') ); ?>" name="<?php echo esc_attr( $this->get_field_name('p_table_price') ); ?>" type="text" value="<?php echo esc_attr( $p_table_price );?>"/>
			</p>

			<p>
				<label for="<?php echo esc_attr( $this->get_field_id('p_table_price_time') ); ?>"><?php esc_html_e('Price Per Month, Day or Year', 'radix-multipurpose'); ?></label>
				<input class="widefat" id="<?php echo esc_attr( $this->get_field_id('p_table_price_time') ); ?>" name="<?php echo esc_attr( $this->get_field_name('p_table_price_time') ); ?>" type="text" value="<?php echo esc_attr( $p_table_price_time );?>"/>
			</p>

			<p>
				<label for="<?php echo esc_attr( $this->get_field_id('p_table_feature_1') ); ?>"><?php esc_html_e('Feature one', 'radix-multipurpose'); ?></label>
				<input class="widefat" id="<?php echo esc_attr( $this->get_field_id('p_table_feature_1') ); ?>" name="<?php echo esc_attr( $this->get_field_name('p_table_feature_1') ); ?>" type="text" value="<?php echo esc_attr( $p_table_feature_1 );?>"/>
			</p>	

			<p>
				<label for="<?php echo esc_attr( $this->get_field_id('p_table_feature_2') ); ?>"><?php esc_html_e('Feature Two', 'radix-multipurpose'); ?></label>
				<input class="widefat" id="<?php echo esc_attr( $this->get_field_id('p_table_feature_2') ); ?>" name="<?php echo esc_attr( $this->get_field_name('p_table_feature_2') ); ?>" type="text" value="<?php echo esc_attr( $p_table_feature_2 );?>"/>
			</p>	

			<p>
				<label for="<?php echo esc_attr( $this->get_field_id('p_table_feature_3') ); ?>"><?php esc_html_e('Feature Three', 'radix-multipurpose'); ?></label>
				<input class="widefat" id="<?php echo esc_attr( $this->get_field_id('p_table_feature_3') ); ?>" name="<?php echo esc_attr( $this->get_field_name('p_table_feature_3') ); ?>" type="text" value="<?php echo esc_attr( $p_table_feature_3 );?>"/>
			</p>	

			<p>
				<label for="<?php echo esc_attr( $this->get_field_id('p_table_feature_4') ); ?>"><?php esc_html_e('Feature Four', 'radix-multipurpose'); ?></label>
				<input class="widefat" id="<?php echo esc_attr( $this->get_field_id('p_table_feature_4') ); ?>" name="<?php echo esc_attr( $this->get_field_name('p_table_feature_4') ); ?>" type="text" value="<?php echo esc_attr( $p_table_feature_4 );?>"/>
			</p>

			<p>
				<label for="<?php echo esc_attr( $this->get_field_id('p_table_feature_5') ); ?>"><?php esc_html_e('Feature Five', 'radix-multipurpose'); ?></label>
				<input class="widefat" id="<?php echo esc_attr( $this->get_field_id('p_table_feature_5') ); ?>" name="<?php echo esc_attr( $this->get_field_name('p_table_feature_5') ); ?>" type="text" value="<?php echo esc_attr( $p_table_feature_5 );?>"/>
			</p>	

			<p>
				<label for="<?php echo esc_attr( $this->get_field_id('p_table_feature_6') ); ?>"><?php esc_html_e('Feature Six', 'radix-multipurpose'); ?></label>
				<input class="widefat" id="<?php echo esc_attr( $this->get_field_id('p_table_feature_6') ); ?>" name="<?php echo esc_attr( $this->get_field_name('p_table_feature_6') ); ?>" type="text" value="<?php echo esc_attr( $p_table_feature_6 );?>"/>
			</p>	

			<p>
				<label for="<?php echo esc_attr( $this->get_field_id('p_table_link') ); ?>"><?php esc_html_e('Pricing Link', 'radix-multipurpose'); ?></label>
				<input class="widefat" id="<?php echo esc_attr( $this->get_field_id('p_table_link') ); ?>" name="<?php echo esc_attr( $this->get_field_name('p_table_link') ); ?>" type="text" value="<?php echo esc_attr( $p_table_link );?>"/>
			</p>	

			<p>
				<label for="<?php echo esc_attr( $this->get_field_id('p_table_text') ); ?>"><?php esc_html_e('Pricing Link Text', 'radix-multipurpose'); ?></label>
				<input class="widefat" id="<?php echo esc_attr( $this->get_field_id('p_table_text') ); ?>" name="<?php echo esc_attr( $this->get_field_name('p_table_text') ); ?>" type="text" value="<?php echo esc_attr( $p_table_text );?>"/>
			</p>	
		<?php	}
	}
}
