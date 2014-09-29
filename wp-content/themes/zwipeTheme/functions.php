<?php
require_once(get_template_directory() . '/library/post-type.php');
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'profile-thumb', 180, 180, true );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary'   => __( 'Top primary menu', 'zwipeTheme' ),
		'secondary' => __( 'Secondary menu in left sidebar', 'zwipeTheme' ),
	) );

if (function_exists('register_sidebars')) {
    register_sidebars(4, array(
        'name' => 'sidebar %d',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
    ));
}