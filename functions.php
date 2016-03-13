<?php

// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');

register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'MoocAward' ),
    'socialtop' => __('Socialtop Menu', 'MoocAward'),
    'footer' => __( 'Footer Menu', 'MoocAward' ),
    'socialfooter' => __('Socialfooter Menu', 'MoocAward'),
) );

add_theme_support('post-thumbnails');

add_filter('show_admin_bar','__return_false');

function theme_js()
{
    wp_register_script("jquery", get_template_directory_uri().'/assets/js/jquery.js',array());
    wp_enqueue_script("jquery");
    wp_register_script("bootstrap", get_template_directory_uri().'/assets/js/bootstrap.min.js',array());
    wp_enqueue_script("bootstrap");

}
add_action('init', 'theme_js');