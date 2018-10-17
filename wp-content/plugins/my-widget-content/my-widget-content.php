<?php 
/*
Plugin Name: My Widget Content
Version: 1.0
Description: Allows you to add an arbitrary featured item to the sidebar. Includes a title, image, description and a link.
Author: Titi Hanifah
*/

    add_action( 'widgets_init', 'mwc_init' );

    function mwc_init() {
    	register_widget( 'mwc_widget' );
    }

 //    add_action( 'admin_enqueue_scripts', array( $this, 'mwc_assets' ) );

 //    function mwc_assets()
	// {
	//     wp_enqueue_script('media-upload');
	//     wp_enqueue_script('thickbox');

	//     wp_enqueue_script('mwc-media-upload', plugin_dir_url(__FILE__) . 'mwc-media-upload.js', array( 'jquery' )) ;
	//     wp_enqueue_style('thickbox');
	// }
  
    


    class mwc_widget extends WP_Widget
    {

        public function __construct()
        {
            // Basic widget details
            $widget_details = array(
                'classname' => 'mwc_widget',
                'description' =>'Creates a featured item consisting of a title, image, description and link.'
            );

            parent::__construct( 'mwc_widget', 'Featured Item Widget', $widget_details );
        }

        public function widget( $args, $instance )
        {
            // Widget output in the front end
            echo $args['before_widget'];
            if ( ! empty( $instance['title'] ) ) {
                echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ). $args['after_title'];
            }

            // Rest of the widget content

            echo $args['after_widget'];
        }

        public function update( $new_instance, $old_instance ) {
            // Form saving logic - if needed      
            return $new_instance;
        }

        public function form( $instance ) {
            // Backend Form

            $title = '';
            if( !empty( $instance['title'] ) ) {
                $title = $instance['title'];
            }

            $description = '';
            if( !empty( $instance['description'] ) ) {
                $description = $instance['description'];
            }

            $image = '';
            if(isset($instance['image']))
            {
            	$image = $instance['image'];
            }
           
            ?>
            <p>
                <label for="<?php echo $this->get_field_name( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
                <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
            </p>

            <p>
                <label for="<?php echo $this->get_field_name( 'description' ); ?>"><?php _e( 'Description:' ); ?></label>
                <textarea class="widefat" id="<?php echo $this->get_field_id( 'description' ); ?>" name="<?php echo $this->get_field_name( 'description' ); ?>" type="text" ><?php echo esc_attr( $description ); ?></textarea>
            </p>
            <p>
		    	<label for="<?php echo $this->get_field_name( 'image' ); ?>"><?php _e( 'Image:' ); ?></label>
		    	<!-- <input name="<?php echo $this->get_field_name( 'image' ); ?>" id="<?php echo $this->get_field_id( 'image' ); ?>" class="widefat" type="text" size="36"  value="<?php echo esc_url( $image ); ?>" /> -->
		    	<input class="upload_image_button" type="button" value="Upload Image" />
		    </p>
        <?php 
        }
    }

   



?>