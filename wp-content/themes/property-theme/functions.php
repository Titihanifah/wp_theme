<?php 
	
	function add_theme_scripts()
	{

		// Add Bootstrap, used in the main stylesheet
		wp_enqueue_style('jquery-ui', get_template_directory_uri(). '/assets/scss/bootstrap/css/jquery-ui.css', array(), '1.10.4');
		wp_enqueue_style('bootstrap', get_template_directory_uri(). '/assets/scss/bootstrap/css/bootstrap.css', array(), '3.3.7');
		wp_enqueue_style('style-1', get_template_directory_uri(). '/assets/scss/style.css', array(), '');

		// FONT
		wp_enqueue_style('font-family', get_template_directory_uri(). '/assets/scss/bootstrap/css/font-family.css', array(),'');
		wp_enqueue_style('font-awesome', get_template_directory_uri(). '/assets/scss/bootstrap/css/font-awesome.min.css', array(), '4.7.0');
		
	}

	add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

	add_theme_support('post-thumbnails');

	add_action('init', 'codex_portofolio_init');

	function codex_portofolio_init()
	{
	   register_post_type(
	   'portofolio',
	    array( // Arguments
	      'labels'             => array(
	        'name'               => _x('Portofolio', 'post type general name', 'your-plugin-textdomain'),
	        'singular_name'      => _x('Portofolio', 'post type singular name', 'your-plugin-textdomain'),
	        'menu_name'          => _x('Portofolio', 'admin menu', 'your-plugin-textdomain'),
	        'name_admin_bar'     => _x('Portofolio', 'add new on admin bar', 'your-plugin-textdomain'),
	        'add_new'            => _x('Add New', 'portofolio', 'your-plugin-textdomain'),
	        'add_new_item'       => __('Add New Portofolio', 'your-plugin-textdomain'),
	        'new_item'           => __('New Portofolio', 'your-plugin-textdomain'),
	        'edit_item'          => __('Edit Portofolio', 'your-plugin-textdomain'),
	        'view_item'          => __('View Portofolio', 'your-plugin-textdomain'),
	        'all_items'          => __('All Portofolios', 'your-plugin-textdomain'),
	        'search_items'       => __('Search Portofolio', 'your-plugin-textdomain'),
	        'parent_item_colon'  => __('Parent Portofolio:', 'your-plugin-textdomain'),
	        'not_found'          => __('No portofolio found.', 'your-plugin-textdomain'),
	        'not_found_in_trash' => __('No portofolio found in Trash.', 'your-plugin-textdomain')
	      ),
	      'public'             => true,
	      'publicly_queryable' => true,
	      'show_ui'            => true,
	      'show_in_menu'       => true,
	      'query_var'          => true,
	      'rewrite'            => array( 'slug' => 'portofolio' ),
	      'capability_type'    => 'post',
	      'has_archive'        => true,
	      'hierarchical'       => false,
	      'menu_position'      => null,
	      'supports'           => array( 'title','thumbnail','editor','comments')
	    )
	  );
	}
