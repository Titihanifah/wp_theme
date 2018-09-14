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
	        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	        'after_widget'  => '</aside>',
	        'before_title'  => '<h1 class="widget-title">',
	        'after_title'   => '</h1>',
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

	apply_filters( 'get_search_query', $search );

