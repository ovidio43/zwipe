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
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/js/bxslider/jquery.bxslider.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
        <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <?php wp_head(); ?>
    </head>
<body <?php body_class(); ?>>
<?php if(is_home()){?>
<div class="wrap-slide fullwidth">
    <span class="slide-logo"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="zwipe"></span>
    <div id="top-slide">
        <?php 
        $posts = get_field('top_slide_select','option');
        if( $posts ): ?>
            <?php foreach( $posts as $post): ?>
                <?php setup_postdata($post); 
                $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false, '' );
                ?>
                    <div class="slide-item" style="background-image:url('<?php echo $src[0];?>');">
                        <div class="slide-content wrapper">
                            <h1><?php the_title();?></h1>
                            <span><?php the_content();?></span>
                            <div class="wrap-links">
                                <?php 
                                $rows = get_field('links_slide',$post->ID);
                                if($rows)
                                {
                                    foreach($rows as $row)
                                    {
                                    echo '<a href="'.$row['link_optional'].'" target="_blank"><i class="icon"></i>'.$row['url_text'].'</a>';
                                    }
                                }       
                                ?>                     
                            </div>
                        </div>
                    </div>
            <?php endforeach; ?>
            <?php wp_reset_postdata();?>
        <?php endif; ?>                 
    </div>  
</div>
<?php }?>
<header id="header" class="fullwidth">
    <div class="wrapper">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" alt="zwipe" class="logo">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="zwipe">
        </a>    
        <nav id="primary-navigation">
            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
        </nav>        
    </div>
</header>