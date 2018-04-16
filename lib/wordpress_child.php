<?php
	
	/*
		Child Wordpress Funtions
	*/
	
	function csdd_child_scripts() {
		
		wp_enqueue_style( 'csdd-font', get_stylesheet_directory_uri() . 'http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,900' );
		
		wp_enqueue_style( 'csdd-font-two', get_stylesheet_directory_uri() . 'https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i' );
	
		wp_enqueue_style( 'csdd-custom', get_stylesheet_directory_uri() . '/css/custom.css' );
		
		wp_enqueue_style( 'csdd-colors', get_stylesheet_directory_uri() . '/css/colors.css' );
	
	}
	add_action( 'wp_enqueue_scripts', 'csdd_child_scripts' );

?>