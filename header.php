<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <div class="container">
            <nav class="main-navigation">
                <a href="http://localhost/wordpress/"> <img src="<?php echo get_template_directory_uri(); ?>/Képek/Chockodeluxelogowhite.png" class="logo" alt="Logo">
                </a>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container' => false,
                    'menu_class' => 'main-menu',
                ));
                ?>
            </nav>
        </div>
    </header>
    <main>