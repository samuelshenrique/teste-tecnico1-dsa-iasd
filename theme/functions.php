<?php

require_once __DIR__ . '/src/includes/gutenberg.php';

add_action('after_setup_theme', 'funcoesTema');
function funcoesTema()
{
    add_theme_support('title-tag');
    add_theme_support('menus');
}

function estilosTema()
{
    wp_enqueue_style('style', get_stylesheet_directory_uri() . '/style.css');
    wp_enqueue_style('style', get_stylesheet_directory_uri() . '/assets/css/gutenberg.css');
}
add_action('wp_enqueue_scripts', 'estilosTema');