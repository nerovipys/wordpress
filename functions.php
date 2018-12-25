<?php 
	
	add_action('wp_enqueue_scripts', 'test_media'); 
	
	add_action('after_setup_theme', 'test_after_setup');
	
	function test_media() {
		wp_enqueue_style ('test-main', get_stylesheet_uri());	
	}
	
	function test_after_setup () {
		register_nav_menu('top', 'для шапки');
	}	

	