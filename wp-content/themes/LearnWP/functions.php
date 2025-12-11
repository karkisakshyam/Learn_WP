<?php

function learn_wp_styles(){
wp_enqueue_style ('tailwinfcss', get_template_directory_uri() . '/src/output.css', [], '1.0.0', 'all');
wp_enqueue_style('learnwp-style', get_stylesheet_uri(), [], '1.0.1', 'all');

}

add_action ('wp_enqueue_scripts', 'learn_wp_styles');