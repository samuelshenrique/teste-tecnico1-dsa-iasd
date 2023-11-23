<?php

function custom_post_type_pet() {
  $labels = array(
    'name'               => _x('Pets', 'post type general name'),
    'singular_name'      => _x('Pet', 'post type singular name'),
    'add_new'            => _x('Adicionar novo Pet', 'book'),
    'add_new_item'       => __('Adicionar novo Pet'),
    'edit_item'          => __('Editar Pet'),
    'new_item'           => __('Novo Pet'),
    'all_items'          => __('Todos os Pets'),
    'view_item'          => __('Ver Pet'),
    'search_items'       => __('Procurar Pets'),
    'not_found'          => __('Sem Pets encontrados'),
    'not_found_in_trash' => __('Sem Pets encontrados na lixeira'), 
    'parent_item_colon'  => '',
    'menu_name'          => 'Pets'
  );
  $args = array(
    'labels'        => $labels,
    'public'        => true,
    'menu_position' => 8,
    'menu_icon'     => 'dashicons-pets',
    'supports'      => array('title', 'thumbnail'),
    'has_archive'   => true,
  );
  register_post_type( 'Pets', $args );
}
add_action( 'init', 'custom_post_type_pet' );