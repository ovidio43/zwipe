<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php wp_title( '|', true, 'right' ); ?></title>
        <meta name="description" content="<?php bloginfo( 'description' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/js/bxslider/jquery.bxslider.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
        <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <?php wp_head(); ?>
    </head>
<body <?php body_class(); ?>>
<div id="homeslide">
	<div><img src="<?php echo get_template_directory_uri(); ?>/img/test_banner.jpg" /></div>
	<div><img src="<?php echo get_template_directory_uri(); ?>/img/test_banner.jpg" /></div>
	<div><img src="<?php echo get_template_directory_uri(); ?>/img/test_banner.jpg" /></div>
</div>
	<header >
		<nav id="primary-navigation">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" alt="zwipe">
				<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="zwipe">
			</a>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
		</nav>
	</header>