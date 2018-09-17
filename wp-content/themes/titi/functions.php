<?php
	
	function add_theme_scripts() {
		// Add Bootstrap, used in the main stylesheet.
		wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.css', array(), '4.1.1' );

		// Theme stylesheet.
		wp_enqueue_style( 'style', get_stylesheet_uri() ); 

		wp_enqueue_script("jquery");

	  	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstrap.bundle.min.js', array(), '4.1.1' );

	  	// loading script pada footer
	  	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstrap.bundle.min.js', array(), false, false );

	}

	add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

	function create_posttype(){

		// create new post_type
		register_post_type( 'book', array(
	      'labels' => array(
	        'name' => __( 'Books' ),
	        'singular_name' => __( 'book' )
	      ),
	      'public' => true,
	      'has_archive' => true,
	      'rewrite' => array('slug' => 'book'),
	    )
	  );
		
	}

	add_action('init','create_posttype');


	// create two taxonomies, genres and writers for the post type "book"
	function create_book_taxonomies() {
		// Add new taxonomy, make it hierarchical (like categories)
		$labels = array(
			'name'              => _x( 'Genres', 'taxonomy general name', 'textdomain' ),
			'singular_name'     => _x( 'Genre', 'taxonomy singular name', 'textdomain' ),
			'search_items'      => __( 'Search Genres', 'textdomain' ),
			'all_items'         => __( 'All Genres', 'textdomain' ),
			'parent_item'       => __( 'Parent Genre', 'textdomain' ),
			'parent_item_colon' => __( 'Parent Genre:', 'textdomain' ),
			'edit_item'         => __( 'Edit Genre', 'textdomain' ),
			'update_item'       => __( 'Update Genre', 'textdomain' ),
			'add_new_item'      => __( 'Add New Genre', 'textdomain' ),
			'new_item_name'     => __( 'New Genre Name', 'textdomain' ),
			'menu_name'         => __( 'Genre', 'textdomain' ),
		);

		$args = array(
			'hierarchical'      => true,
			'labels'            => $labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'query_var'         => true,
			'rewrite'           => array( 'slug' => 'genre' ),
		);

		register_taxonomy( 'genre', array( 'book' ), $args );

		// Add new taxonomy, NOT hierarchical (like tags)
		$labels = array(
			'name'                       => _x( 'Writers', 'taxonomy general name', 'textdomain' ),
			'singular_name'              => _x( 'Writer', 'taxonomy singular name', 'textdomain' ),
			'search_items'               => __( 'Search Writers', 'textdomain' ),
			'popular_items'              => __( 'Popular Writers', 'textdomain' ), // non
			'all_items'                  => __( 'All Writers', 'textdomain' ),
			'parent_item'                => null,
			'parent_item_colon'          => null,
			'edit_item'                  => __( 'Edit Writer', 'textdomain' ),
			'update_item'                => __( 'Update Writer', 'textdomain' ),
			'add_new_item'               => __( 'Add New Writer', 'textdomain' ),
			'new_item_name'              => __( 'New Writer Name', 'textdomain' ),
			'separate_items_with_commas' => __( 'Separate writers with commas', 'textdomain' ), // non
			'add_or_remove_items'        => __( 'Add or remove writers', 'textdomain' ), // non
			'choose_from_most_used'      => __( 'Choose from the most used writers', 'textdomain' ), //non
			'not_found'                  => __( 'No writers found.', 'textdomain' ),
			'menu_name'                  => __( 'Writers', 'textdomain' ),
		);

		$args = array(
			'hierarchical'          => false,
			'labels'                => $labels,
			'show_ui'               => true,
			'show_admin_column'     => true,
			'update_count_callback' => '_update_post_term_count',
			'query_var'             => true,
			'rewrite'               => array( 'slug' => 'writer' ),
		);

		register_taxonomy( 'writer', array( 'book' ), $args );
	}

	// hook into the init action and call create_book_taxonomies when it fires
	add_action( 'init', 'create_book_taxonomies', 0 );

	//register menu
	register_nav_menus( array(
		'primary-menu' => __( 'Primary Menu', 'titi' ),
	) );

	function register_my_menus() {
	  register_nav_menus(
	    array(
	      'header-menu' => __( 'Header Menu' ),
	      'extra-menu' => __( 'Extra Menu' )
	     )
	   );
	 }

 	add_action( 'init', 'register_my_menus' );

	
	// sidebar
	function themename_widgets_init() {
	    register_sidebar( array(
	        'name'          => __( 'Primary Sidebar', 'theme_name' ),
	        'id'            => 'sidebar-1',
	        'before_widget' => '<div class="card my-4">	<div class="card-body"><ul class="list-unstyled mb-0"><li>',
	        'after_widget'  => '</li></ul></div></div>',
	        'before_title'  => '<h5 class="card-header">',
	        'after_title'   => '</h5>',
	    ) );
	 
	    register_sidebar( array(
	        'name'          => __( 'Secondary Sidebar', 'theme_name' ),
	        'id'            => 'sidebar-2',
	        'before_widget' => '<ul><li id="%1$s" class="widget %2$s">',
	        'after_widget'  => '</li></ul>',
	        'before_title'  => '<h3 class="widget-title">',
	        'after_title'   => '</h3>',
	    ) );
	}
	add_action( 'widgets_init', 'themename_widgets_init' );

	// apply_filters( 'get_search_query', $search );

	// theme option
	function mytheme_panel() {

	    // berisi layout HTML.
	    ?>
	    <div>
	    	<h1>Upload Logo</h1>
	    </div>
	    <div class="container">
		    <div class="row">    
		        <div class="col-xs-12 col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">  
		            <!-- image-preview-filename input [CUT FROM HERE]-->
		            <div class="input-group image-preview">
		                <input type="text" class="form-control image-preview-filename" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
		                <span class="input-group-btn">
		                    <!-- image-preview-clear button -->
		                    <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
		                        <span class="glyphicon glyphicon-remove"></span> Clear
		                    </button>
		                    <!-- image-preview-input -->
		                    <div class="btn btn-default image-preview-input">
		                        <span class="glyphicon glyphicon-folder-open"></span>
		                        <input type="file" accept="image/png, image/jpeg, image/gif" name="input-file-preview"/> <!-- rename it -->
		                    </div>
		                </span>
		            </div><!-- /input-group image-preview [TO HERE]--> 
		        </div>
		    </div>
		</div>
		<button class="btn btn-primary">Save Changes</button>


	<?php
	}

	function mytheme_init() {

	    //initialize. isinya rutin untuk misalnya, save/edit options 
	    add_theme_page( "Logo Options", "Logo Options", 'edit_themes', basename( __FILE__ ), 'mytheme_panel' );
	    // add_menu_page( 'Custom Logo ', 'Logo Options', 'manage_options', 'custompage', '', 'dashicons-welcome-widgets-menus', 90 );
	}

	add_action( 'admin_menu', 'mytheme_init' );

	// add menu custom logo
	function theme_prefix_setup() {
	
		add_theme_support( 'custom-logo', array(
			'height'      => 50,
			'width'       => 200,
			'flex-width' => true,
		) );

	}
	add_action( 'after_setup_theme', 'theme_prefix_setup' );

	function theme_prefix_the_custom_logo() {
	
		if ( function_exists( 'the_custom_logo' ) ) {
			the_custom_logo();
		}

	}

	add_filter('get_custom_logo','change_logo_class');
 
 
	function change_logo_class($html)
	{
		$html = str_replace('custom-logo-link', 'navbar-brand', $html);
		return $html;
	}


	add_action('admin_menu', 'awesome_page_create');
	

	// create menu logo settings
	function awesome_page_create() {
	    $page_title = 'Logo';
	    $menu_title = 'Logo';
	    $capability = 'edit_posts';
	    $menu_slug = 'awesome_page';
	    $function = 'my_awesome_page_display';
	    $icon_url = '';
	    $position = 24;

	    add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position );
	}

	function my_awesome_page_display() {
		// if (!current_user_can('manage_options')) {
	 //        wp_die('Unauthorized user');
	 //    }

	    // check_admin_referrer( 'wpshout_option_page_example_action' );

	    if (isset($_POST['input_file'])) {
	        update_option('input_file', $_POST['input_file']);
	    } 

	    $value = get_option('input_file');

	    include 'form-file.php';
	}






	