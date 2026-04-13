<?php

/**
 * Theme Support
 */
add_theme_support('post-thumbnails');

/**
 * Add styles and scripts
 */

function ibearwatch_styles_and_scripts()
{
    wp_enqueue_style('main-style', get_stylesheet_uri(), array(), '1.0');
}

add_action('wp_enqueue_scripts', 'ibearwatch_styles_and_scripts');


/**
 * Register menus
 */

function ibearwatch_register_menus()
{
    register_nav_menus(array(
        'main_menu' => 'Huvudmeny',
        'footer_menu_1' => 'Sidfotsmeny 1',
        'footer_menu_2' => 'Sidfotsmeny 2'
    ));
}

add_action('after_setup_theme', 'ibearwatch_register_menus');
