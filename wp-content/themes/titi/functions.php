<?php
	
	function add_theme_scripts() {
		// Add Bootstrap, used in the main stylesheet.
		wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.css', array(), '4.1.1' );

		wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/bootstrap/css/font-awesome.css', array(), '4.0.0' );	
	
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
	      'menu_icon' => 'dashicons-book',
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

	// using bootsrap navwalker
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

	//register menu
	register_nav_menus( array(
		'primary-menu' => __( 'Primary Menu', 'titi' ),
		'footer-menu' => __( 'Footer Menu' ),
	) );
	
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

	// Logo Option - submenu Thema
	function mytheme_panel() {

	    // berisi layout HTML.
	    ?>
	    <div>
	    	<h1>Copyright</h1>
	    </div>
	    <div class="container">
		    <div class="row">    
		        <div class="col-xs-12 col-md-12">  
		        	<form method="POST" action="option.php">
		        	<?php 
		        		setttings_fields("section");
		        		do_settings_sections("theme-options");
		        		submit_button();
		        	?>		        		
		            	<input type="text" class="form-control" >
						<button class="btn btn-primary">Save Changes</button>
		        	</form>
		        </div>
		    </div>
		</div>


	<?php
	}

	function mytheme_init() {

	    //initialize. isinya rutin untuk misalnya, save/edit options 
	    add_theme_page( "Copyright Options", "Copyright Options", 'edit_copyright', basename( __FILE__ ), 'mytheme_panel' );
	    // add_menu_page( 'Custom Logo ', 'Logo Options', 'manage_options', 'custompage', '', 'dashicons-welcome-widgets-menus', 90 );
	}

	add_action( 'admin_menu', 'mytheme_init' );


	// add submenu change logo dragablle customize - side identity
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


	// create menu logo 

	add_action('admin_menu', 'logo_page_create');
	
	function logo_page_create() {
	    $page_title = 'Logo';
	    $menu_title = 'Logo';
	    $capability = 'edit_posts';
	    $menu_slug = 'logo_page';
	    $function = 'my_logo_page_display';
	    $icon_url = '';
	    $position = 24;

	    add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position );
	}

	function my_logo_page_display() {

	    if (isset($_POST['input_file'])) {
	        update_option('input_file', $_POST['input_file']);
	    } 

	    $value = get_option('input_file');

	    include 'form-file.php';
	}

	// filter show excerpt 50 character
	add_filter("the_excerpt", "plugin_the_excerpt_filter");

	function plugin_the_excerpt_filter($excerpt)
	{
	    // Take the existing content and return a subset of it
	    return substr($excerpt, 0, 50);
	}


	
	// function theme_section_description(){
	// 	echo '<p>Theme Option Section</p>';
	// }

	// function add_theme_menu_item() {
	// 	add_theme_page("Theme Customization", "Theme Customization", "manage_options", "theme-options", "theme_option_page", null, 99);
	// }
	// add_action("admin_menu", "add_theme_menu_item");

	// function theme_section_description()
	// {
	// 	echo '<p>Theme Option Section</p>';
	// }

	// function options_callback(){
	// 	$options = get_option( 'first_field_option' );
	// 	echo '<input name="first_field_option" id="first_field_option" type="checkbox" value="1" class="code" ' . checked( 1, $options, false ) . ' /> Check for enabling custom help text.';
	// }
	// //admin-init hook to create settings section with title “New Theme Options Section”.
	// function test_theme_settings(){
	// 	add_option('first_field_option',1);// add theme option to database
	// 	add_settings_section( 'first_section', 'New Theme Options Section','theme_section_description','theme-options');

	// 	add_settings_field('first_field_option','Test Settings Field','options_callback','theme-options','first_section');
	// 	//add settings field to the section “first_section”
	// 	register_setting( 'theme-options-grp', 'first_field_option');
	// }
	

	// add_action('admin_init','test_theme_settings');


	function theme_option_page() {
		?>
		<div class="wrap">
			<form method="post" action="options.php">
				<?php
				// display settings field on theme-option page
				settings_fields("theme-options-grp");
				// display all sections for theme-options page
				do_settings_sections("theme-options");
				submit_button();
				?>
			</form>
		</div>
		<?php
	}
	function add_theme_menu_item() {
		add_theme_page("Copyright Customization", "Copyright", "manage_options", "theme-options", "theme_option_page", null, 99);
	}
	add_action("admin_menu", "add_theme_menu_item");
	function theme_section_description(){
		echo '';
	}
	
	function test_theme_settings(){
		add_settings_section( 'first_section', 'Edit Copyright','theme_section_description','theme-options');
		add_settings_field('twitter_url', 'Copyright ', 'display_copyright', 'theme-options', 'first_section');
		register_setting( 'theme-options-grp', 'copyright');
	}
	add_action('admin_init','test_theme_settings');

	

	function display_copyright(){
		?>
		<input type="text" name="copyright" id="copyright" value="<?php echo get_option('copyright'); ?>" />
		<?php
	}

	// END COPYRIGHT

	

	// POST_META

	add_action( 'add_meta_boxes', 'cd_meta_box_add' );
	function cd_meta_box_add()
	{
		// param id, title, function, slug, content(normal,side,advanced), priority
	    add_meta_box( 'my-meta-box-id', 'Pages', 'cd_meta_box_cb', 'book', 'normal', 'high' );
	}

	function cd_meta_box_cb()
	{
		// id that retrieved
		$values = get_post_custom( $post->ID );
		$text = isset( $values['my_meta_box_text'] ) ? esc_attr( $values['my_meta_box_text'][0] ) : '';

		?>
		<!-- label n form for meta -->
	    <label for="my_meta_box_texts">Halaman</label>
	    <input type="text" name="my_meta_box_text" id="my_meta_box_text" />
	    <?php  
	}

	add_action( 'save_post', 'cd_meta_box_save' );
	function cd_meta_box_save( $post_id )
	{
	    // Bail if we're doing an auto save
	    // if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
	     
	    // if our nonce isn't there, or we can't verify it, bail
	    if( !isset( $_POST['meta_box_nonce'] ) || !wp_verify_nonce( $_POST['meta_box_nonce'], 'my_meta_box_nonce' ) ) return;
	     
	    // if our current user can't edit this post, bail
	    if( !current_user_can( 'edit_post' ) ) return;
	     
	    // now we can actually save the data
	    
	    // Make sure your data is set before trying to save it
	    if( isset( $_POST['my_meta_box_text'] ) )
	    	// param id, meta key, custom field edit, new value, 
	        update_post_meta( $post_id, 'my_meta_box_text', wp_kses( $_POST['my_meta_box_text']) );
	       
	  
	}

	if( function_exists('acf_add_options_page') ) {

  /// Register Theme Settings parent page
		acf_add_options_page(array(
			'page_title'  => 'Theme General Settings',
			'menu_title'  => 'Theme General Settings',
			'menu_slug'   => 'theme-general-settings',
			'capability'  => 'edit_posts',
			'redirect'    => false
		)); 

  
	}


	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 3000, 3000);

	//
	
	add_theme_support('post-thumbnails');

	add_action('init', 'codex_portofolio_init');
	//post type
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




