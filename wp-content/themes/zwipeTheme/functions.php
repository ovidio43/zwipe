<?php
require_once(get_template_directory() . '/library/post-type.php');
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'profile-thumb', 180, 180, true );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary'   => __( 'Top primary menu', 'zwipeTheme' ),
		'secondary' => __( 'Secondary menu in left sidebar', 'zwipeTheme' ),
	) );

function zwipeTheme_widgets_init() {
	register_sidebar (array(
	'name' => __( 'main sidebar', 'zwipeTheme' ),
	'id' => 'main_sidebar',
	'before_widget' => '',
	'after_widget' => '',
	'before_title' => '<h2>',
	'after_title' => '</h2>',
	)); 
}
add_action( 'init', 'zwipeTheme_widgets_init' );

function my_excerpt_length($length) {
  return 30; // Or whatever you want the length to be.
}
add_filter('excerpt_length', 'my_excerpt_length');
function new_excerpt_more($more) {
       global $post;
	return '<br><a class="moretag" href="'. get_permalink($post->ID) . '"> Read More <i></i></a>';
}
add_filter('excerpt_more', 'new_excerpt_more');