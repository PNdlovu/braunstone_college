<?php
/**
 * Define customizer custom classes
 *
 * @package Radix Multipurpose
 * @since 1.0.0
 */
/*----------------------------------------------------------------------------------------------------------------------------------------*/
    /**
     * Switch button customize control.
     *
     * @since 1.0.3
     * @access public
     */
  if( class_exists( 'WP_Customize_Control' ) ) {
    class Radix_Multipurpose_Customize_Switch_Control extends WP_Customize_Control {

        /**
         * The type of customize control being rendered.
         *
         * @since  1.0.0
         * @access public
         * @var    string
         */
        public $type = 'switch';

        /**
         * Displays the control content.
         *
         * @since  1.0.0
         * @access public
         * @return void
         */
        public function render_content() {
    ?>
            <label>
                <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
                <div class="description customize-control-description"><?php echo esc_html( $this->description ); ?></div>
                <div class="switch_options">
                    <?php 
                        $show_choices = $this->choices;
                        $switch_val   = $this->value();
                        foreach ( $show_choices as $key => $value ) {
                            if( $key == $switch_val ){
                                $switch_sel = 'selected';
                            } else {
                                $switch_sel = '';
                            }
                            echo '<span class="switch_part '.esc_attr( $key ).' '.esc_attr( $switch_sel ).'" data-switch="'.esc_attr( $key ).'">'. esc_html( $value ).'</span>';
                        }
                    ?>
                    <input type="hidden" id="mt_switch_option" <?php $this->link(); ?> value="<?php echo esc_attr( $this->value() ); ?>" />
                </div>
            </label>
    <?php
        }
    } // end Radix_Multipurpose_Customize_Switch_Control


// Setting: Link of Pricing Table Widget.
class Radix_Multipurpose_Plan_Widget_Link extends WP_Customize_Control {
    public $type = 'customtext';
    public $extra = ''; // we add this for the extra description
    public function render_content() {
    ?>
    <label>            
        <a href="<?php echo esc_url( 'widgets.php' ); ?>" target='_blank'><?php echo esc_html( $this->label ); ?></a>
        <span><?php echo esc_html( $this->extra ); ?></span>         
    </label>
    <?php
    }
}


/**
 * Class Radix_multipurpose_Customize_Dropdown_Taxonomies_Control
 */
class Radix_Multipurpose_Customize_Dropdown_Taxonomies_Control extends WP_Customize_Control {

  public $type = 'dropdown-taxonomies';

  public $taxonomy = '';

  public function __construct( $manager, $id, $args = array() ) {

    $our_taxonomy = 'category';
    if ( isset( $args['taxonomy'] ) ) {
      $taxonomy_exist = taxonomy_exists( esc_attr( $args['taxonomy'] ) );
      if ( true === $taxonomy_exist ) {
        $our_taxonomy = esc_attr( $args['taxonomy'] );
      }
    }
    $args['taxonomy'] = $our_taxonomy;
    $this->taxonomy = esc_attr( $our_taxonomy );

    parent::__construct( $manager, $id, $args );
  }

  public function render_content() {

    $tax_args = array(
      'hierarchical' => 1,
      'taxonomy'     => $this->taxonomy,
    );
    $all_taxonomies = get_categories( $tax_args );

    ?>
    <label>
      <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
         <select <?php echo esc_attr($this->link()); ?>>
            <?php
              printf('<option value="%s" %s>%s</option>', '', selected(esc_attr($this->value()), '', false),esc_html('Select', 'tromas') );
             ?>
            <?php if ( ! empty( $all_taxonomies ) ): ?>
              <?php foreach ( $all_taxonomies as $key => $tax ): ?>
                <?php
                  printf('<option value="%s" %s>%s</option>',esc_attr( $tax->term_id ), selected($this->value(), esc_attr( $tax->term_id ), false), esc_attr( $tax->name ) );
                 ?>
              <?php endforeach ?>
           <?php endif ?>
         </select>

    </label>
    <?php
  }

}


/*----------------------------------------------------------------------------------------------------------------------------------------*/
    /**
     * Radio image customize control.
     *
     * @since  1.0.0
     * @access public
     */
    class Radix_Multipurpose_Customize_Control_Radio_Image extends WP_Customize_Control {
        /**
         * The type of customize control being rendered.
         *
         * @since  1.0.0
         * @access public
         * @var    string
         */
        public $type = 'radio-image';

        /**
         * Loads the jQuery UI Button script and custom scripts/styles.
         *
         * @since  1.0.0
         * @access public
         * @return void
         */
        public function enqueue() {
            wp_enqueue_script( 'jquery-ui-button' );
        }

        /**
         * Add custom JSON parameters to use in the JS template.
         *
         * @since  1.0.0
         * @access public
         * @return void
         */
        public function to_json() {
            parent::to_json();

            // We need to make sure we have the correct image URL.
            foreach ( $this->choices as $value => $args )
                $this->choices[ $value ]['url'] = esc_url( sprintf( $args['url'], get_template_directory_uri(), get_stylesheet_directory_uri() ) );

            $this->json['choices'] = $this->choices;
            $this->json['link']    = $this->get_link();
            $this->json['value']   = $this->value();
            $this->json['id']      = $this->id;
        }


        /**
         * Underscore JS template to handle the control's output.
         *
         * @since  1.0.0
         * @access public
         * @return void
         */

        public function content_template() { ?>
            <# if ( data.label ) { #>
                <span class="customize-control-title">{{ data.label }}</span>
            <# } #>

            <# if ( data.description ) { #>
                <span class="description customize-control-description">{{{ data.description }}}</span>
            <# } #>

            <div class="buttonset">

                <# for ( key in data.choices ) { #>

                    <input type="radio" value="{{ key }}" name="_customize-{{ data.type }}-{{ data.id }}" id="{{ data.id }}-{{ key }}" {{{ data.link }}} <# if ( key === data.value ) { #> checked="checked" <# } #> /> 

                    <label for="{{ data.id }}-{{ key }}">
                        <span class="screen-reader-text">{{ data.choices[ key ]['label'] }}</span>
                        <img src="{{ data.choices[ key ]['url'] }}" title="{{ data.choices[ key ]['label'] }}" alt="{{ data.choices[ key ]['label'] }}" />
                    </label>
                <# } #>

            </div><!-- .buttonset -->
        <?php }
    } // end Radix_Multipurpose_Customize_Control_Radio_Image

    /*----------------------------------------------------------------------------------------------------------------------------------------*/
    /*----------------------------------------------------------------------------------------------------------------------------------------*/
/**
* Customize controls for repeater field
*
* @since 1.0.0
*/
class Radix_Lite_Repeater_Controller extends WP_Customize_Control {

/**
* The control type.
*
* @access public
* @var string
*/
public $type = 'repeater';

public $radix_lite_box_label = '';

public $radix_lite_box_add_control = '';

/**
* The fields that each container row will contain.
*
* @access public
* @var array
*/
public $fields = array();

/**
* Repeater drag and drop controller
*
* @since  1.0.0
*/
public function __construct( $manager, $id, $args = array(), $fields = array() ) {
    $this->fields = $fields;
    $this->radix_lite_box_label = $args['radix_lite_box_label'] ;
    $this->radix_lite_box_add_control = $args['radix_lite_box_add_control'];
    parent::__construct( $manager, $id, $args );
}

public function render_content() {
    $values = json_decode( $this->value() );
    $repeater_id = $this->id;
    $field_count = count( $values );
    ?>
    <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>

    <?php if( $this->description ){ ?>
        <span class="description customize-control-description">
            <?php echo wp_kses_post( $this->description ); ?>
        </span>
    <?php } ?>

    <ul class="wc-repeater-field-control-wrap">
        <?php $this->radix_multipurpose_get_fields(); ?>
    </ul>

    <input type="hidden" <?php esc_attr( $this->link() ); ?> class="wc-repeater-collector" value="<?php echo esc_attr( $this->value() ); ?>" />
    <input type="hidden" name="<?php echo esc_attr( $repeater_id ).'_count'; ?>" class="field-count" value="<?php echo absint( $field_count ); ?>">
    <input type="hidden" name="field_limit" class="field-limit" value="10">
    <button type="button" class="button wc-repeater-add-control-field"><?php echo esc_html( $this->radix_lite_box_add_control ); ?></button>
    <?php
}

private function radix_multipurpose_get_fields(){
    $fields = $this->fields;
    $values = json_decode( $this->value() );

    if( is_array( $values ) ){
        foreach( $values as $value ){
            ?>
            <li class="wc-repeater-field-control">
                <h3 class="wc-repeater-field-title"><?php echo esc_html( $this->radix_lite_box_label ); ?></h3>

                <div class="wc-repeater-fields">
                    <?php
                    foreach ( $fields as $key => $field ) {
                        $class = isset( $field['class'] ) ? $field['class'] : '';
                        ?>
                        <div class="wc-repeater-field wc-repeater-type-<?php echo esc_attr( $field['type'] ).' '.esc_attr($class); ?>">

                            <?php 
                            $label = isset( $field['label'] ) ? $field['label'] : '';
                            $description = isset( $field['description'] ) ? $field['description'] : '';
                            if( $field['type'] != 'checkbox' ) { 
                                ?>
                                <span class="customize-control-title"><?php echo esc_html( $label ); ?></span>
                                <span class="description customize-control-description"><?php echo esc_html( $description ); ?></span>
                                <?php 
                            }

                            $new_value = isset( $value->$key ) ? $value->$key : '';
                            $default = isset( $field['default'] ) ? $field['default'] : '';

                            switch ( $field['type'] ) {
                                case 'text':
                                echo '<input data-default="'.esc_attr( $default ).'" data-name="'.esc_attr( $key ).'" type="text" value="'.esc_attr( $new_value ).'"/>';
                                break;

                                case 'number':
                                echo '<input data-default="'.esc_attr( $default ).'" data-name="'.esc_attr( $key ).'" type="number" value="'.esc_attr( $new_value ).'"/>';
                                break;    
                                case 'url':
                                echo '<input data-default="'.esc_attr( $default ).'" data-name="'.esc_attr( $key ).'" type="text" value="'.esc_url( $new_value ).'"/>';
                                break;

                                case 'icon':
                                echo '<div class="wc-repeater-selected-icon"><i class="'.esc_attr( $new_value ).'"></i><span><i class="fa fa-angle-down"></i></span></div><ul class="wc-repeater-icon-list clearfix">';
                                $radix_lite_font_awesome_icon_array = radix_multipurpose_font_awesome_icon_array();
                                foreach ( $radix_lite_font_awesome_icon_array as $radix_lite_font_awesome_icon ) {
                                    $icon_class = $new_value == $radix_lite_font_awesome_icon ? 'icon-active' : '';
                                    echo '<li class='.esc_attr( $icon_class ).'><i class="'.esc_attr( $radix_lite_font_awesome_icon ).'"></i></li>';
                                }
                                echo '</ul><input data-default="'.esc_attr( $default ).'" type="hidden" value="'.esc_attr( $new_value ).'" data-name="'.esc_attr( $key ).'"/>';
                                break;

                                case 'social_icon':
                                echo '<div class="wc-repeater-selected-icon"><i class="'.esc_attr( $new_value ).'"></i><span><i class="fa fa-angle-down"></i></span></div><ul class="wc-repeater-icon-list wc-clearfix">';
                                $radix_lite_font_awesome_social_icon_array = radix_multipurpose_font_awesome_social_icon_array();
                                foreach ( $radix_lite_font_awesome_social_icon_array as $radix_lite_font_awesome_icon ) {
                                    $icon_class = $new_value == $radix_lite_font_awesome_icon ? 'icon-active' : '';
                                    echo '<li class='.esc_attr( $icon_class ).'><i class="'.esc_attr( $radix_lite_font_awesome_icon ).'"></i></li>';
                                }
                                echo '</ul><input data-default="'.esc_attr( $default ).'" type="hidden" value="'.esc_attr( $new_value ).'" data-name="'.esc_attr( $key ).'"/>';
                                break;
                                case 'dropdown-pages':
                                echo '<div class="radix_lite_dropdownpages">';
                                echo '<select data-name="'.esc_attr( $key ).'">';
                                echo  '<option  data-default="'.esc_attr( $default ).'"></option>';
                                $get_pages = get_pages( 'hide_empty=0' );
                                foreach ( $get_pages as $page ) {
                                    $select_class = $new_value == $page->ID ? 'selected' : '';
                                    $old_value = $page->ID;
                                    echo '<option value="'.absint( $old_value ).'" '.esc_attr($select_class).'>'.esc_html($page->post_title).'</option>';
                                }
                                echo '</select>';         
                                echo '</div>';
                                break;
                                /**
                                * Upload field
                                */
                                case 'upload':
                                $image_class = "";
                                $upload_btn_label = __( 'Select Image', 'radix-multipurpose' );
                                $remove_btn_label = __( 'Remove', 'radix-multipurpose' );
                                if( $new_value ){ 
                                    $image_class = ' hidden';
                                }
                                echo '<div class="cv-fields-wrap"><div class="attachment-media-view"><div class="placeholder'. esc_attr( $image_class ).'">';
                                esc_html_e( 'No image selected', 'radix-multipurpose' );
                                echo '</div><div class="thumbnail thumbnail-image"><img src="'.esc_url( $new_value ).'" style="max-width:100%;"/></div><div class="actions clearfix"><button type="button" class="button mt-delete-button align-left">'. esc_html( $remove_btn_label ) .'</button><button type="button" class="button mt-upload-button alignright">'. esc_html( $upload_btn_label ) .'</button><input data-default="'.esc_attr( $default ).'" class="upload-id" data-name="'.esc_attr( $key ).'" type="hidden" value="'.esc_attr( $new_value ).'"/></div></div></div>';
                                break;


                                default:
                                break;
                                }
                            ?>
                        </div>
                                <?php
                    } ?>
                    <div class="wc-clearfix wc-repeater-footer">
                        <div class="alignright">
                            <a class="wc-repeater-field-remove" href="#remove"><?php esc_html_e( 'Delete', 'radix-multipurpose' ) ?></a> |
                            <a class="wc-repeater-field-close" href="#close"><?php esc_html_e( 'Close', 'radix-multipurpose' ) ?></a>
                        </div>
                    </div>
                </div>
            </li>
                    <?php   
                }
            }
        }
    }   // end Radix_Lite_Repeater_Controler

}