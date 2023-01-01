<?php

function load_scripts()
{
    wp_register_script('tailwind-min', get_template_directory_uri() . '/js/tailwind.min.js', array(), false, false);
    wp_register_script('tailwind-custom', get_template_directory_uri() . '/js/tailwind.custom.js', array(), false, false);

    wp_enqueue_script('tailwind-min');
    wp_enqueue_script('tailwind-custom');
}

function x_custom_image_sizes()
{
    add_theme_support('post-thumbnails');
    add_image_size('192x192', 192, 192, true);
}

add_action('after_setup_theme', 'x_custom_image_sizes');
add_action('wp_enqueue_scripts', 'load_scripts');

add_theme_support('menus');
