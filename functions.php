<?php
function choco_deluxe_setup() {
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    
    // Register menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'choco-deluxe'),
    ));
}
add_action('after_setup_theme', 'choco_deluxe_setup');

// Enqueue scripts and styles
function choco_deluxe_scripts() {
    // Main stylesheet
    wp_enqueue_style('choco-deluxe-style', get_stylesheet_uri());
    
    // Custom CSS
    wp_enqueue_style('choco-deluxe-main-css', get_template_directory_uri() . '/assets/css/main.css');
    
    // JavaScript
    wp_enqueue_script('choco-deluxe-main-js', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'choco_deluxe_scripts');