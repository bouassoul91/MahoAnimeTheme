<?php
/**
 * MahoAnimeTheme functions and definitions
 * mat = abv MahoAnimeTheme
 * 
 */


/**
 * Register and Enqueue Styles.
 */
function mat_register_styles() {

	wp_register_style( 'mat-style', get_template_directory_uri().'/assets/style.css' , array(), 1, 'all' );
	wp_enqueue_style( 'mat-style');
	
	wp_register_style( 'font-awesome', get_template_directory_uri().'/assets/css/font-awesome.min.css' , array(), 1, 'all' );
	wp_enqueue_style( 'font-awesome');

	wp_register_style( 'normalize', get_template_directory_uri().'/assets/css/normalize.css' , array(), 1, 'all' );
	wp_enqueue_style( 'normalize');

	wp_register_style( 'style-rtl', get_template_directory_uri().'/assets/css/style-rtl.min9dff.css?ver=5.3.2' , array(), 1, 'all' );
	wp_enqueue_style( 'style-rtl');

	wp_enqueue_script('jquery', false, array(), false, false);

	wp_register_script( 'custom-js', get_template_directory_uri().'/assets/js/vLT3p2rH8bwe6AUE7uVnLLKT1CU.js' , 1, 1, 1);
	wp_enqueue_script( 'custom-js', false, array(), false, false);

	wp_register_style( 'custom', get_template_directory_uri().'/custom.css' , array(), 1, 'all' );
	wp_enqueue_style( 'custom');
}
add_action( 'wp_enqueue_scripts', 'mat_register_styles' );

/**
 * Register and Enqueue Scripts.
 */
function mat_register_scripts() {
	wp_register_script('comment-countd', get_template_directory_uri().'/assets/js/comment_countd4e0.js?ver=3.0.17', 1, 1, 1);
	wp_enqueue_script('comment-countd');

	wp_register_script('comment-embedd', get_template_directory_uri().'/assets/js/comment_embedd4e0.js?ver=3.0.17', 1, 1, 1);
	wp_enqueue_script('comment-embedd');

	wp_register_script('wp-embedd', get_template_directory_uri().'/assets/js/wp-embed.min9dff.js?ver=5.3.2', 1, 1, 1);
	wp_enqueue_script('wp-embedd');

	wp_register_script( 'custom', get_template_directory_uri().'/custom.js', 1, 1, 1);
	wp_enqueue_script( 'custom');
}
add_action( 'wp_enqueue_scripts', 'mat_register_scripts' );

/**
 * Admin bars.
 */
function admin_bar(){

	if(is_user_logged_in()){
	  add_filter( 'show_admin_bar', '__return_true' , 1000 );
	}
  }
  add_action('init', 'admin_bar' );

/**
 * Add supports.
 */
add_theme_support( 'post-thumbnail' );
add_theme_support( 'menus' );
register_nav_menus( 
	array(
			'top-menu' => __('Top Menu','theme'),
		)
);



