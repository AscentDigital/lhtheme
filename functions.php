<?php  
	function resources(){
		wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
		wp_enqueue_style('bootstrap-theme', get_template_directory_uri() . '/css/theme.css');
		wp_enqueue_style('bootstrap-theme-extended', get_template_directory_uri() . '/css/theme-extended.css');
		wp_enqueue_style('lightbox', get_template_directory_uri() . '/css/lightbox.css');
		wp_enqueue_style('style-name', get_stylesheet_uri());
		wp_enqueue_script( 'bootstrap-min', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '1.0.0', true );
		wp_enqueue_script( 'parallaxie', get_template_directory_uri() . '/js/parallaxie.js', array('jquery'), '1.0.0', true );
		wp_enqueue_script( 'viewportjs', get_template_directory_uri() . '/js/ie10-viewport-bug-workaround.js', array('jquery'), '1.0.0', true );
		wp_enqueue_script( 'lightboxjs', get_template_directory_uri() . '/js/lightbox.js', array('jquery'), '1.0.0', true );
		wp_enqueue_script( 'lhtheme_contact_form', get_template_directory_uri() . '/js/custom.js', array('jquery-form'), '1.0.0', true );
		wp_localize_script( "lhtheme_contact_form", 'lhtheme_contact_form_vars', array(
	            'ajaxUrl' => admin_url( 'admin-ajax.php' ), //url for php file that process ajax request to WP
	            'nonce' => wp_create_nonce( "lhtheme_contact_form_nonce" )
	        )
	    );
	}

	add_action('wp_enqueue_scripts', 'resources');

	add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

	function special_nav_class ($classes, $item) {
		if( $item->menu_item_parent == 0 && 
		    in_array( 'current-menu-item', $classes ) ||
		    in_array( 'current-menu-ancestor', $classes ) ||
		    in_array( 'current-menu-parent', $classes ) ||
		    in_array( 'current_page_parent', $classes ) ||
		    in_array( 'current_page_ancestor', $classes )
		    ) {

	    	$classes[] = "active";
	 	 }

	  	return $classes;
	}

	function setup(){
			//Navigation Menus
		register_nav_menus(array(
			'primary' => __('Primary Menu')
		));
			//Add featured image support
		add_theme_support('post-thumbnails');
		add_theme_support('post-formats', array('aside', 'gallery', 'link'));
	}
	add_action('after_setup_theme', 'setup');

	function homes_cpt() {
		register_post_type( 'homes', array(
		  'labels' => array(
		    'name' => 'Homes',
		    'singular_name' => 'Home',
		   ),
		  'description' => 'Homes Custom Post Type',
		  'public' => true,
		  'publicly_queryable' => true,
		  'menu_position' => 20,
		  'supports' => array( 'title', 'editor', 'custom-fields', 'author', 'thumbnail', 'excerpt' ),
		  'taxonomies' => array('category')
		));
	}
	add_action( 'init', 'homes_cpt' );


	function officer_cpt() {
		register_post_type( 'officer', array(
		  'labels' => array(
		    'name' => 'Officers',
		    'singular_name' => 'Officer',
		   ),
		  'description' => 'Officer Custom Post Type',
		  'public' => true,
		  'publicly_queryable' => true,
		  'menu_position' => 20,
		  'supports' => array( 'title', 'editor', 'custom-fields', 'author', 'thumbnail', 'excerpt' ),
		  'taxonomies' => array('category')
		));
	}
	add_action( 'init', 'officer_cpt' );

	function gallery_cpt() {
		register_post_type( 'gallery', array(
		  'labels' => array(
		    'name' => 'Galleries',
		    'singular_name' => 'Gallery',
		   ),
		  'description' => 'Gallery Custom Post Type',
		  'public' => true,
		  'publicly_queryable' => true,
		  'menu_position' => 20,
		  'supports' => array( 'title', 'editor', 'custom-fields', 'author', 'thumbnail', 'excerpt' ),
		  'taxonomies' => array('category')
		));
	}
	add_action( 'init', 'gallery_cpt' );

	function lhtheme_contact_form_process() {
    	$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$message = $_POST['message'];

		$body = 'Full Name: ' . $name . "\r\n";
		$body .= 'Email Address: ' . $email . "\r\n";
		$body .= 'Phone: ' . $phone . "\r\n";
		$body .= 'Message: ' . $message;

		$success = 'false';
		if(wp_mail(get_option('lhtheme_recipient_email', ''), 'Contact Form', $body)){
			$success = 'true';
		}

		echo $success;
	}
	add_action("wp_ajax_lhtheme_contact_form", "lhtheme_contact_form_process");

	//use this version for if you want the callback to work for users who are not logged in
	add_action("wp_ajax_nopriv_lhtheme_contact_form", "lhtheme_contact_form_process");

	add_action('admin_menu', 'theme_contact_setup_menu');
 
	function theme_contact_setup_menu(){
	    add_menu_page( 'Theme Options', 'Theme Options', 'manage_options', 'theme-option', 'init' );
	}
	 
	function init(){
		include get_template_directory() . '/includes/theme-options.php';
	}

	function update_theme_options(){
		$email = $_POST['recipient-email'];
		update_option('lhtheme_recipient_email', $email);
		wp_redirect(admin_url('admin.php?page=theme-option&success'));
		exit;
	}

	add_action( 'admin_post_nopriv_lhtheme_update_theme_options', 'update_theme_options' );
	add_action( 'admin_post_lhtheme_update_theme_options', 'update_theme_options' );
?>