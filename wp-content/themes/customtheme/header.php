<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo esc_url(home_url('wp-content/themes/customtheme/assets/css/style.css')); ?>">
</head>
<body <?php body_class(); ?>>
    <header>
        <!-- Header content goes here -->
        <div class="site-branding">
            <?php the_custom_logo(); ?>
            <?php if ( is_front_page() && is_home() ) : ?>
                <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <?php else : ?>
                <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
            <?php endif; ?>
            <p class="site-description"><?php bloginfo( 'description' ); ?></p>
        </div><!-- .site-branding -->
        <nav id="site-navigation" class="main-navigation">
            <?php
                wp_nav_menu( array(
                    'menu'           => 'main',
                    'theme_location' => 'menu-1',
                    'menu_id'        => 'primary-menu',
                ) );
            ?>
        </nav>
    </header>
    <div id="content" class="site-content">
