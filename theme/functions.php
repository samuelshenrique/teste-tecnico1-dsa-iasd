<?php

add_action('after_setup_theme', 'funcoesTema');
function funcoesTema()
{
    add_theme_support('title-tag');
    add_theme_support('menus');
}

function estilosTema()
{
    wp_enqueue_style('style', get_stylesheet_directory_uri() . '/style.css');
    wp_enqueue_style('gutenberg', get_stylesheet_directory_uri() . '/assets/css/gutenberg.css');

    // Pets
    wp_enqueue_style('pets', get_stylesheet_directory_uri() . '/assets/css/pets.css');
}
add_action('wp_enqueue_scripts', 'estilosTema');

require_once __DIR__ . '/src/includes/gutenberg.php';

// Custom Post Type 'Pets'
require_once __DIR__ . '/src/includes/postTypes/pets.php';
require_once __DIR__ . '/src/includes/fields/pets.php';