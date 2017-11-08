<?php  
	function resources(){
		wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
		wp_enqueue_style('bootstrap-theme', get_template_directory_uri() . '/css/theme.css');
		wp_enqueue_style('bootstrap-theme-extended', get_template_directory_uri() . '/css/theme-extended.css');
		wp_enqueue_style('style-name', get_stylesheet_uri());
		wp_enqueue_script( 'bootstrap-min', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '1.0.0', true );
		wp_enqueue_script( 'parallaxie', get_template_directory_uri() . '/js/parallaxie.js', array('jquery'), '1.0.0', true );
		wp_enqueue_script( 'viewportjs', get_template_directory_uri() . '/js/ie10-viewport-bug-workaround.js', array('jquery'), '1.0.0', true );
	}

	add_action('wp_enqueue_scripts', 'resources');

	add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

	function special_nav_class ($classes, $item) {
		if (in_array('current-menu-item', $classes) ){
			$classes[] = 'active ';
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
?>