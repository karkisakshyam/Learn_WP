<?php

function learn_wp_styles(){
wp_enqueue_style ('tailwinfcss', get_template_directory_uri() . '/src/output.css', [], '1.0.0', 'all');
wp_enqueue_style('learnwp-style', get_stylesheet_uri(), [], '1.0.1', 'all');

}

add_action ('wp_enqueue_scripts', 'learn_wp_styles');


$args = array(
    'labels' => array(
            'name'          => 'Books',
            'singular_name' => 'Book',
            'menu_name'     => 'Books',
            'add_new'       => 'Add New Book',
            'add_new_item'  => 'Add New Book',
            'new_item'      => 'New Book',
            'edit_item'     => 'Edit Book',
            'view_item'     => 'View Book',
            'all_items'     => 'All Books',
    ),
    'public' => true,
    'has_archive' => true,
    'show_in_rest' => true,
    'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt' ),
);

register_post_type( 'book', $args );