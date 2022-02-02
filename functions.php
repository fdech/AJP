<?php
add_action('wp_enqueue_scripts', 'ajp_scripts');

function ajp_scripts() {
    wp_enqueue_style('ajp-style', get_stylesheet_uri() );
    wp_enqueue_script('ajp-scripts', get_template_directory_uri( ). '/assets/js/script.js', array(), null, true);
}

add_theme_support('custom-logo');
add_theme_support('post-thumbnails');
?>