<?php

	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 672, 372, true );
	add_image_size( 'zwipeTheme-full-width', 1038, 576, true );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary'   => __( 'Top primary menu', 'zwipeTheme' ),
		'secondary' => __( 'Secondary menu in left sidebar', 'zwipeTheme' ),
	) );
	